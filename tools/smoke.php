#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * PHP smoke entrypoint (FR-016).
 *
 * Drives the shared scenarios against production. Score lifecycle only: no OMR conversion, nothing
 * metered (FR-016a).
 *
 * Any account can run this, so a contributor can point it at their own. What keeps it safe is not
 * who the account belongs to but what the suite touches: everything it creates is titled
 * `smoke-test-<random>`, it deletes what it created before returning, and it reads nothing else.
 *
 * Never prints a response body, token or account identifier (FR-016d).
 */

use Flat\APIClient\ErrorFactory;
use Flat\APIClient\FlatAuthenticationError;
use Flat\APIClient\FlatAuthorizationError;
use Flat\APIClient\FlatClient;
use Flat\APIClient\FlatNotFoundError;
use Flat\APIClient\FlatRateLimitError;
use Flat\APIClient\FlatServerError;
use Flat\APIClient\Model\CollectionCreation;
use Flat\APIClient\Model\CollectionPrivacy;
use Flat\APIClient\Model\ScoreCreationFileImport;
use Flat\APIClient\Model\ScoreModification;
use Flat\APIClient\Model\ScorePrivacy;
use Flat\APIClient\RetryPolicy;
use Flat\APIClient\TokenManager;
use Flat\APIClient\Tokens;

require_once __DIR__ . '/../vendor/autoload.php';

$redact = static fn (string $s): string => getenv('FLAT_SMOKE_REDACT') === '1' ? '<redacted>' : $s;

$failures = [];
$check = static function (string $name, bool $ok, string $detail = '') use (&$failures): void {
    if ($ok) {
        echo '  ', $name, " ... ok\n";
        return;
    }
    echo '  ', $name, " ... FAIL\n";
    $failures[] = $detail === '' ? $name : "$name: $detail";
};

$scenariosPath = $argv[1] ?? null;
if ($scenariosPath === null) {
    fwrite(STDERR, "usage: smoke.php <scenarios.yaml>\n");
    exit(2);
}
$token = getenv('FLAT_TEST_TOKEN');
if ($token === false || $token === '') {
    fwrite(STDERR, "FLAT_TEST_TOKEN is required\n");
    exit(2);
}

// Every operation this suite calls, checked against the forbidden list rather than grepped for.
// The previous version tested the whole scenario file for the forbidden names, which the forbidden
// list itself always matched, so the suite exited 2 on every run.
$calls = [
    'getAuthenticatedUser', 'createScore', 'getScore', 'editScore', 'getScoreRevisionData',
    'deleteScore', 'createCollection', 'listCollections', 'deleteCollection',
];
$raw = (string) file_get_contents($scenariosPath);
$forbidden = [];
if (preg_match('/^forbidden_operations:\n((?:\s*-\s*\w+\n)+)/m', $raw, $m) === 1) {
    foreach (explode("\n", $m[1]) as $line) {
        $name = trim(preg_replace('/^\s*-\s*/', '', $line) ?? '');
        if ($name !== '') {
            $forbidden[] = $name;
        }
    }
}
foreach ($calls as $op) {
    if (in_array($op, $forbidden, true)) {
        fwrite(STDERR, "refusing to run: $op is metered\n");
        exit(2);
    }
}

$fixture = dirname($scenariosPath) . '/fixtures/minimal.musicxml';
if (!is_file($fixture)) {
    fwrite(STDERR, "missing fixture: $fixture\n");
    exit(2);
}

// Through FlatClient, deliberately: it is the entry point the README and QUICKSTART document, so
// the path a new user takes is the path this suite proves. It is also what installs the typed
// errors and the retry policy, which the generated Api classes do not carry on their own.
$client = new FlatClient(accessToken: $token);

$createdScores = [];
$createdCollections = [];
$title = 'smoke-test-' . bin2hex(random_bytes(4));

try {
    $me = $client->account()->getAuthenticatedUser();
    $check('whoami', method_exists($me, 'getId') && $me->getId() !== null, 'no id on the authenticated user');

    $score = $client->scores()->createScore(new ScoreCreationFileImport([
        'title' => $title,
        // A backed enum, not a string: the setter's parameter type rejects the raw value.
        'privacy' => ScorePrivacy::_PRIVATE,
        'filename' => 'minimal.musicxml',
        // base64 is the only encoding the API declares.
        'data' => base64_encode((string) file_get_contents($fixture)),
        'data_encoding' => 'base64',
    ]));
    // Registered before anything else can fail, so the finally block always reclaims it.
    if (method_exists($score, 'getId') && $score->getId() !== null) {
        $createdScores[] = $score->getId();
    }
    $check('create-score', count($createdScores) === 1, 'no id on the created score');
    if ($createdScores === []) {
        throw new RuntimeException('create-score returned no id');
    }
    $scoreId = $createdScores[0];

    $fetched = $client->scores()->getScore($scoreId);
    $check('read-score', $fetched->getId() === $scoreId, 'the score read back is not the one created');

    $renamed = $title . '-renamed';
    $updated = $client->scores()->editScore($scoreId, new ScoreModification(['title' => $renamed]));
    $check('update-score-metadata', $updated->getTitle() === $renamed, 'the title did not change');

    $exported = $client->scores()->getScoreRevisionData($scoreId, 'last', 'mxl');
    $check('export-score', $exported !== null, 'the export returned nothing');

    // Three collections, so the traversal below has a page boundary to cross.
    for ($i = 0; $i < 3; $i++) {
        $collection = $client->collections()->createCollection(new CollectionCreation([
            'title' => "$title-collection-$i",
            'privacy' => CollectionPrivacy::_PRIVATE,
        ]));
        if ($collection->getId() !== null) {
            $createdCollections[] = $collection->getId();
        }
    }
    $check('create-collections', count($createdCollections) === 3, 'could not create three collections');

    // limit: 1 forces one request per item, so the traversal cannot succeed without following the
    // cursor. An earlier version asked for a page larger than the account held, never requested a
    // second page, and proved nothing.
    $seen = [];
    foreach ($client->paginate('listCollections', ['parent' => 'user', 'limit' => 1]) as $item) {
        $seen[] = $item->getId();
    }
    $missing = array_values(array_diff($createdCollections, $seen));
    $duplicated = array_values(array_filter(array_count_values(array_filter($seen)), static fn ($n) => $n > 1));
    $check(
        'paginate-across-pages',
        count($seen) > 1 && $missing === [] && $duplicated === [],
        sprintf('pages=%d missing=%d duplicated=%d', count($seen), count($missing), count($duplicated))
    );

    try {
        $client->scores()->getScore('000000000000000000000000');
        $check('typed-not-found', false, 'no error raised for a missing score');
    } catch (FlatNotFoundError) {
        $check('typed-not-found', true);
    } catch (Throwable $e) {
        $check('typed-not-found', false, sprintf('raised %s, not FlatNotFoundError', $e::class));
    }

    try {
        // A separate client, so the bad token cannot leak into the one doing the cleanup.
        (new FlatClient(accessToken: 'invalid'))->account()->getAuthenticatedUser();
        $check('typed-auth-error', false, 'no error raised for an invalid token');
    } catch (FlatAuthenticationError) {
        $check('typed-auth-error', true);
    } catch (Throwable $e) {
        $check('typed-auth-error', false, sprintf('raised %s, not FlatAuthenticationError', $e::class));
    }

    // The retry policy reaches the request path, and makes the right calls. A real throttle cannot
    // be induced without hammering production, so this asserts the wiring and the decisions.
    $policy = $client->retryPolicy();
    $retriesThrottle = $policy->shouldRetry(new FlatRateLimitError('x', 403), 'GET', 1);
    $retries5xx = $policy->shouldRetry(new FlatServerError('x', 502), 'GET', 1);
    // A plain 403 is a genuine authorization failure; retrying it would be worse than not retrying.
    $keeps403 = !$policy->shouldRetry(new FlatAuthorizationError('x', 403), 'GET', 1);
    // A POST may already have been applied, so it must not be replayed.
    $keepsPost = !$policy->shouldRetry(new FlatServerError('x', 502), 'POST', 1);
    $check(
        'retry-policy-applied',
        $policy instanceof RetryPolicy && $retriesThrottle && $retries5xx && $keeps403 && $keepsPost,
        sprintf(
            'throttle=%s 5xx=%s keeps403=%s keepsPost=%s',
            var_export($retriesThrottle, true), var_export($retries5xx, true),
            var_export($keeps403, true), var_export($keepsPost, true)
        )
    );

    // An expired token is noticed rather than sent. accessToken() used to return the stored token
    // whatever its state, which made Tokens::expired() dead code and every request after the
    // expiry fail with a 401 a refresh would have avoided.
    //
    // Checked without a stub helper: OAuth2Helper is final, so it cannot be subclassed, and the
    // expiry branch is what matters here. A fresh token is returned untouched; an expired one with
    // nothing to refresh from raises the typed error, which only happens if the branch is reached.
    $fresh = new TokenManager(new Tokens('fresh', 'r', time() + 3600));
    $returnsFresh = $fresh->accessToken() === 'fresh';

    $noticesExpiry = false;
    try {
        (new TokenManager(new Tokens('stale', null, time() - 60)))->accessToken();
    } catch (FlatAuthenticationError) {
        $noticesExpiry = true;
    }
    $check(
        'oauth-notices-expiry',
        $returnsFresh && $noticesExpiry && (new Tokens('x', null, time() - 1))->expired(),
        sprintf('fresh=%s expired=%s', var_export($returnsFresh, true), var_export($noticesExpiry, true))
    );

} catch (Throwable $e) {
    // The class and status, never the message: a message can quote a request body, and this runs
    // with redaction on precisely so a failure does not become a disclosure.
    if ($e instanceof \Flat\APIClient\FlatError) {
        $failures[] = sprintf('unhandled %s status=%s code=%s', $e::class, var_export($e->status, true), var_export($e->errorCode, true));
    } else {
        // File and line rather than the message: a message can quote a value, and this runs with
        // redaction on precisely so a failure does not become a disclosure. The location is enough
        // to find a local fault, which "<redacted>" never was.
        $failures[] = sprintf('unhandled %s at %s:%d', $e::class, basename($e->getFile()), $e->getLine());
    }
} finally {
    foreach ($createdScores as $id) {
        try {
            $client->scores()->deleteScore($id);
            echo '  cleanup score ', $redact($id), " ... deleted\n";
        } catch (Throwable $e) {
            $failures[] = sprintf('cleanup failed for score %s: %s', $redact($id), $e::class);
        }
    }
    foreach ($createdCollections as $id) {
        try {
            $client->collections()->deleteCollection($id);
            echo '  cleanup collection ', $redact($id), " ... deleted\n";
        } catch (Throwable $e) {
            $failures[] = sprintf('cleanup failed for collection %s: %s', $redact($id), $e::class);
        }
    }
}

if ($failures !== []) {
    foreach ($failures as $f) {
        fwrite(STDERR, "  FAIL $f\n");
    }
    exit(1);
}

echo "smoke: PASS\n";
