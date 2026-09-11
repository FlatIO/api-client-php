#!/usr/bin/env python3
"""Typed errors, retry and pagination for the PHP SDK (FR-006d to FR-006h). Idempotent."""

from __future__ import annotations

import pathlib

ROOT = pathlib.Path(__file__).resolve().parent.parent.parent
SRC = ROOT / "src"
SRC.mkdir(exist_ok=True)

(SRC / "Errors.php").write_text('''<?php

declare(strict_types=1);

namespace Flat\\APIClient;

/**
 * Typed errors for the Flat API.
 *
 * Catch the error class, not the status code: rate limiting and authorization failures both return
 * HTTP 403 and are separated only by the response body's `code`.
 */
class FlatError extends \\RuntimeException
{
    public function __construct(
        string $message,
        public readonly ?int $status = null,
        public readonly ?string $errorCode = null,
        /** Present only for internal and backend errors, so treat it as optional. */
        public readonly ?string $requestId = null,
        /** @var array<string, string> */
        public readonly array $headers = [],
        public readonly mixed $body = null,
    ) {
        parent::__construct($message);
    }

    public function __toString(): string
    {
        $parts = [$this->getMessage()];
        if ($this->errorCode !== null) { $parts[] = "code={$this->errorCode}"; }
        if ($this->status !== null) { $parts[] = "status={$this->status}"; }
        if ($this->requestId !== null) { $parts[] = "id={$this->requestId}"; }

        return implode(' ', $parts);
    }
}

/** The token is missing, invalid or expired, or a refresh failed. Re-authorize. */
class FlatAuthenticationError extends FlatError {}
/** Authenticated but not permitted: a missing scope or insufficient permission. */
class FlatAuthorizationError extends FlatError {}
/** The request body or parameters failed validation. */
class FlatValidationError extends FlatError {}
/** The resource does not exist, or is not visible to this token. */
class FlatNotFoundError extends FlatError {}
/** A metered resource, such as OMR credits, is exhausted. */
class FlatQuotaError extends FlatError {}
/** An internal or backend error. `requestId` is normally set here. */
class FlatServerError extends FlatError {}

/** The account or IP exceeded its request quota. Returned as HTTP 403, not 429. */
class FlatRateLimitError extends FlatError
{
    public readonly ?int $limit;
    public readonly ?int $remaining;
    /** UTC epoch seconds at which the window resets. Flat sends no Retry-After header. */
    public readonly ?int $reset;

    /** @param array<string, string> $headers */
    public function __construct(
        string $message,
        ?int $status = null,
        ?string $errorCode = null,
        ?string $requestId = null,
        array $headers = [],
        mixed $body = null,
    ) {
        parent::__construct($message, $status, $errorCode, $requestId, $headers, $body);
        $this->limit = self::intHeader($headers, 'x-ratelimit-limit');
        $this->remaining = self::intHeader($headers, 'x-ratelimit-remaining');
        $this->reset = self::intHeader($headers, 'x-ratelimit-reset');
    }

    /** @param array<string, string> $headers */
    private static function intHeader(array $headers, string $name): ?int
    {
        foreach ($headers as $key => $value) {
            if (strtolower((string) $key) === $name) {
                return is_numeric($value) ? (int) $value : null;
            }
        }

        return null;
    }
}

final class ErrorFactory
{
    public const RATE_LIMIT_CODE = 'API_RATE_LIMIT_EXCEEDED';
    private const QUOTA_CODES = ['QUOTA_EXCEEDED', 'CREDITS_EXHAUSTED', 'OMR_CREDITS_EXHAUSTED'];

    /** @param array<string, string> $headers */
    public static function fromResponse(int $status, mixed $body, array $headers = []): FlatError
    {
        $payload = is_array($body) ? $body : [];
        $code = $payload['code'] ?? null;
        $message = $payload['message'] ?? "HTTP {$status}";
        $id = $payload['id'] ?? null;

        if ($status === 403 && $code === self::RATE_LIMIT_CODE) {
            return new FlatRateLimitError($message, $status, $code, $id, $headers, $body);
        }
        if ($code !== null && in_array($code, self::QUOTA_CODES, true)) {
            return new FlatQuotaError($message, $status, $code, $id, $headers, $body);
        }

        return match (true) {
            $status === 401 => new FlatAuthenticationError($message, $status, $code, $id, $headers, $body),
            $status === 403 => new FlatAuthorizationError($message, $status, $code, $id, $headers, $body),
            $status === 404 => new FlatNotFoundError($message, $status, $code, $id, $headers, $body),
            $status === 400, $status === 422 => new FlatValidationError($message, $status, $code, $id, $headers, $body),
            $status >= 500 => new FlatServerError($message, $status, $code, $id, $headers, $body),
            default => new FlatError($message, $status, $code, $id, $headers, $body),
        };
    }
}
''')

(SRC / "Retry.php").write_text('''<?php

declare(strict_types=1);

namespace Flat\\APIClient;

/**
 * Retry policy for the Flat API.
 *
 * Flat does not follow the usual conventions, and getting this wrong is silent:
 *   - rate limiting returns 403, not 429
 *   - there is no Retry-After header; the reset is X-RateLimit-Reset, UTC epoch seconds
 *   - a plain 403 is a genuine authorization failure and must never be retried
 */
final class RetryPolicy
{
    /** Methods safe to replay. A non-idempotent request that may already have been applied is not. */
    private const IDEMPOTENT = ['GET', 'HEAD', 'OPTIONS', 'PUT', 'DELETE'];
    private const MAX_RATE_LIMIT_WAIT = 300.0;

    public function __construct(
        public readonly int $attempts = 3,
        public readonly float $backoffBase = 0.5,
        public readonly float $backoffMax = 30.0,
        public readonly float $jitter = 0.25,
        public readonly bool $respectRateLimitReset = true,
    ) {}

    /** No retries. Errors still arrive typed, and a rate-limit error still carries its reset. */
    public static function disabled(): self
    {
        return new self(attempts: 1);
    }

    public function enabled(): bool
    {
        return $this->attempts > 1;
    }

    public function shouldRetry(\\Throwable $error, string $method, int $attempt): bool
    {
        if ($attempt >= $this->attempts) { return false; }
        if (!in_array(strtoupper($method), self::IDEMPOTENT, true)) { return false; }

        return $error instanceof FlatRateLimitError
            || $error instanceof FlatServerError
            // A transport failure before the request was sent is safe to replay.
            || ($error instanceof \\RuntimeException && !$error instanceof FlatError);
    }

    public function delayFor(\\Throwable $error, int $attempt): float
    {
        if ($this->respectRateLimitReset && $error instanceof FlatRateLimitError && $error->reset !== null) {
            $wait = $error->reset - time();
            if ($wait > 0) {
                return min($wait + (mt_rand() / mt_getrandmax()) * $this->jitter, self::MAX_RATE_LIMIT_WAIT);
            }
        }
        $exponential = min($this->backoffBase * (2 ** ($attempt - 1)), $this->backoffMax);

        return $exponential + (mt_rand() / mt_getrandmax()) * $this->jitter * $exponential;
    }
}
''')

(SRC / "Pagination.php").write_text('''<?php

declare(strict_types=1);

namespace Flat\\APIClient;

/**
 * Cursor pagination for the Flat API.
 *
 * Eight operations at v2.25.0 are cursor-paginated, identified by a `next` query parameter. That
 * parameter is a shared component (#/components/parameters/next): any tool that reads an
 * operation's parameters without resolving $ref under-counts them and ships collections that
 * silently truncate.
 *
 * The cursor is not in the response body. It arrives in the Link header, which the specification
 * does not declare, so it is parsed at runtime.
 */
final class Pagination
{
    /**
     * Parse an RFC 5988 Link header into [rel => url].
     *
     * @return array<string, string>
     */
    public static function parseLinkHeader(?string $value): array
    {
        if ($value === null || $value === '') { return []; }

        preg_match_all('/<([^>]+)>\\s*;\\s*rel="([^"]+)"/', $value, $matches, PREG_SET_ORDER);
        $out = [];
        foreach ($matches as $match) { $out[$match[2]] = $match[1]; }

        return $out;
    }

    /**
     * Extract the opaque `next` cursor from a response's Link header, if any.
     *
     * @param array<string, string|string[]> $headers
     */
    public static function nextCursor(array $headers): ?string
    {
        foreach ($headers as $key => $value) {
            if (strtolower((string) $key) !== 'link') { continue; }
            $link = is_array($value) ? ($value[0] ?? '') : $value;
            $url = self::parseLinkHeader($link)['next'] ?? null;
            if ($url === null) { return null; }

            // Decoded, not captured raw. The cursor arrives percent-encoded inside the Link
            // header's URL, and the client encodes whatever it is handed when building the next
            // request, so passing the encoded form through sends it twice-encoded and the server
            // rejects the cursor it issued a moment earlier. parse_str applies the same rules the
            // server used to write it, so an opaque value round-trips exactly.
            $query = parse_url($url, PHP_URL_QUERY);
            if (!is_string($query) || $query === '') {
                return null;
            }
            parse_str($query, $parsed);
            $next = $parsed['next'] ?? null;

            return is_string($next) && $next !== '' ? $next : null;
        }

        return null;
    }

    /**
     * Yield every item across all pages of a cursor-paginated operation.
     *
     * $fetchPage receives a params array and must return [data, status, headers], which is what the
     * generated *WithHttpInfo methods return. A token expiring mid-traversal is refreshed by the
     * client and the traversal resumes from the same cursor, so no page is skipped or repeated.
     *
     * @param callable(array<string, mixed>): array{0: iterable<mixed>, 1: int, 2: array<string, string|string[]>} $fetchPage
     * @param array<string, mixed> $params
     * @return \\Generator<int, mixed>
     */
    public static function paginate(callable $fetchPage, array $params = []): \\Generator
    {
        $cursor = $params['next'] ?? null;
        unset($params['next']);
        $seen = [];

        while (true) {
            $pageParams = $cursor !== null ? array_merge($params, ['next' => $cursor]) : $params;
            [$data, , $headers] = $fetchPage($pageParams);
            foreach ($data as $item) { yield $item; }

            $cursor = self::nextCursor($headers);
            if ($cursor === null) { return; }
            // A server that returns a cursor it already gave us would loop forever.
            if (isset($seen[$cursor])) { return; }
            $seen[$cursor] = true;
        }
    }
}
''')
print("    php: Errors.php, Retry.php, Pagination.php")
