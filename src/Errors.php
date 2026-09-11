<?php

declare(strict_types=1);

namespace Flat\APIClient;

/**
 * Typed errors for the Flat API.
 *
 * Catch the error class, not the status code: rate limiting and authorization failures both return
 * HTTP 403 and are separated only by the response body's `code`.
 */
class FlatError extends \RuntimeException
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
