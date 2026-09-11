<?php

declare(strict_types=1);

namespace Flat\APIClient;

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

    public function shouldRetry(\Throwable $error, string $method, int $attempt): bool
    {
        if ($attempt >= $this->attempts) { return false; }
        if (!in_array(strtoupper($method), self::IDEMPOTENT, true)) { return false; }

        return $error instanceof FlatRateLimitError
            || $error instanceof FlatServerError
            // A transport failure before the request was sent is safe to replay.
            || ($error instanceof \RuntimeException && !$error instanceof FlatError);
    }

    public function delayFor(\Throwable $error, int $attempt): float
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
