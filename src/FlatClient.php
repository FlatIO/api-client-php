<?php

declare(strict_types=1);

namespace Flat\APIClient;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * One object to start from.
 *
 *   $client = new FlatClient(accessToken: 'YOUR_TOKEN');
 *   $client->account()->getAuthenticatedUser();
 *   foreach ($client->paginate('listCollections', ['parent' => 'user']) as $collection) { ... }
 *
 * It owns one Guzzle client, so every API reached through it shares a connection, the retry
 * policy and the typed errors. Constructing the generated Api classes directly still works, but
 * they then carry a plain Guzzle client and raise the generator's own ApiException.
 */
final class FlatClient
{
    public const DEFAULT_BASE_URL = 'https://api.flat.io/v2';
    /** A finite default. Waiting forever is not an acceptable default for an SDK. */
    public const DEFAULT_TIMEOUT_SECONDS = 30.0;

    private const APIS = [
        'account' => Api\AccountApi::class,
        'classes' => Api\ClassApi::class,
        'collections' => Api\CollectionApi::class,
        'eduResources' => Api\EduResourcesApi::class,
        'groups' => Api\GroupApi::class,
        'omr' => Api\OMRApi::class,
        'organization' => Api\OrganizationApi::class,
        'scores' => Api\ScoreApi::class,
        'tasks' => Api\TaskApi::class,
        'users' => Api\UserApi::class,
    ];

    private Configuration $config;
    private Client $http;
    private RetryPolicy $retry;
    /** @var array<string, object> */
    private array $apis = [];

    public function __construct(
        ?string $accessToken = null,
        ?Configuration $config = null,
        ?RetryPolicy $retry = null,
        ?string $baseUrl = null,
        float $timeout = self::DEFAULT_TIMEOUT_SECONDS,
        ?HandlerStack $handler = null,
    ) {
        // A fresh Configuration, not getDefaultConfiguration(): a client built with its own token
        // must not replace the token every other client is using.
        $this->config = $config ?? new Configuration();
        if ($accessToken !== null) {
            $this->config->setAccessToken($accessToken);
        }
        $this->config->setHost($baseUrl ?? self::DEFAULT_BASE_URL);
        $this->retry = $retry ?? new RetryPolicy();

        $stack = $handler ?? HandlerStack::create();
        $stack->push($this->typedErrors(), 'flat_typed_errors');
        $stack->push($this->retries(), 'flat_retries');

        $this->http = new Client(['handler' => $stack, 'timeout' => $timeout, 'http_errors' => false]);
    }

    public function configuration(): Configuration
    {
        return $this->config;
    }

    public function retryPolicy(): RetryPolicy
    {
        return $this->retry;
    }

    /**
     * Convert a non-2xx response into the typed error, below every generated Api.
     *
     * http_errors is off on the Guzzle client, so Guzzle does not raise its own exception first.
     * The typed error is not a RequestException, so the generated `catch (RequestException $e)`
     * blocks do not swallow it and rewrap it as an ApiException: it reaches the caller intact.
     */
    private function typedErrors(): callable
    {
        return static fn (callable $next): callable =>
            static function (RequestInterface $request, array $options) use ($next): PromiseInterface {
                return $next($request, $options)->then(
                    static function (ResponseInterface $response) {
                        $status = $response->getStatusCode();
                        if ($status >= 200 && $status < 300) {
                            return $response;
                        }

                        $raw = (string) $response->getBody();
                        // Rewound for the caller: a PSR-7 stream read to the end returns nothing
                        // on a second read, and the generated code may still look at it.
                        $response->getBody()->rewind();
                        $body = json_decode($raw, true);

                        $headers = [];
                        foreach ($response->getHeaders() as $name => $values) {
                            $headers[$name] = implode(', ', $values);
                        }

                        // The typed error needs the body: Flat returns 403 both for rate limiting
                        // and for a genuine authorization failure, and only `code` separates them.
                        throw ErrorFactory::fromResponse($status, is_array($body) ? $body : $raw, $headers);
                    }
                );
            };
    }

    /** Apply the retry policy to every request. */
    private function retries(): callable
    {
        $policy = $this->retry;

        return static fn (callable $next): callable =>
            static function (RequestInterface $request, array $options) use ($next, $policy): PromiseInterface {
                $attempt = ($options['flat_attempt'] ?? 0) + 1;
                $options['flat_attempt'] = $attempt;

                return $next($request, $options)->otherwise(
                    static function (\Throwable $error) use ($request, $options, $next, $policy, $attempt) {
                        if (!$policy->shouldRetry($error, $request->getMethod(), $attempt)) {
                            throw $error;
                        }
                        usleep((int) ($policy->delayFor($error, $attempt) * 1_000_000));
                        return $next($request, $options);
                    }
                );
            };
    }

    /** One generated API by short name, memoised. */
    public function api(string $name): object
    {
        $class = self::APIS[$name] ?? null;
        if ($class === null) {
            throw new \InvalidArgumentException(
                sprintf('unknown API %s, expected one of: %s', $name, implode(', ', array_keys(self::APIS)))
            );
        }

        return $this->apis[$name] ??= new $class($this->http, $this->config);
    }

    /** The generated AccountApi, built on this client's HTTP stack. */
    public function account(): Api\AccountApi
    {
        return $this->api('account');
    }

    /** The generated ClassApi, built on this client's HTTP stack. */
    public function classes(): Api\ClassApi
    {
        return $this->api('classes');
    }

    /** The generated CollectionApi, built on this client's HTTP stack. */
    public function collections(): Api\CollectionApi
    {
        return $this->api('collections');
    }

    /** The generated EduResourcesApi, built on this client's HTTP stack. */
    public function eduResources(): Api\EduResourcesApi
    {
        return $this->api('eduResources');
    }

    /** The generated GroupApi, built on this client's HTTP stack. */
    public function groups(): Api\GroupApi
    {
        return $this->api('groups');
    }

    /** The generated OMRApi, built on this client's HTTP stack. */
    public function omr(): Api\OMRApi
    {
        return $this->api('omr');
    }

    /** The generated OrganizationApi, built on this client's HTTP stack. */
    public function organization(): Api\OrganizationApi
    {
        return $this->api('organization');
    }

    /** The generated ScoreApi, built on this client's HTTP stack. */
    public function scores(): Api\ScoreApi
    {
        return $this->api('scores');
    }

    /** The generated TaskApi, built on this client's HTTP stack. */
    public function tasks(): Api\TaskApi
    {
        return $this->api('tasks');
    }

    /** The generated UserApi, built on this client's HTTP stack. */
    public function users(): Api\UserApi
    {
        return $this->api('users');
    }

    /**
     * Every item across every page of a cursor-paginated operation.
     *
     *   foreach ($client->paginate('listCollections', ['parent' => 'user']) as $collection) { ... }
     *
     * The operation is named rather than passed, because the generated methods are instance
     * methods. An operation that does not paginate yields its single page, so this is always safe.
     */
    public function paginate(string $operation, array $params = []): \Generator
    {
        $method = $operation . 'WithHttpInfo';
        $owner = null;
        foreach (array_keys(self::APIS) as $name) {
            if (method_exists($this->api($name), $method)) {
                $owner = $this->api($name);
                break;
            }
        }
        if ($owner === null) {
            throw new \InvalidArgumentException(sprintf('no operation %s on any Flat API', $operation));
        }

        // Spread with string keys, which PHP 8 passes as named arguments. The generated methods
        // take positional parameters in specification order, so spreading array_values would hand
        // `limit` to `$sort` the moment a caller omits one.
        return Pagination::paginate(
            static fn (array $pageParams) => $owner->{$method}(...$pageParams),
            $params,
        );
    }
}
