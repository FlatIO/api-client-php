<?php

declare(strict_types=1);

namespace Flat\APIClient;

/**
 * OAuth2 support for the Flat API.
 *
 * The public specification declares one security scheme: OAuth2 authorization-code with 23 scopes.
 * A Personal Access Token is an OAuth access token for your own account, so passing a token
 * straight to the client covers both cases.
 *
 * A refresh token is only issued when the authorization request sets access_type=offline.
 *
 * Nothing here stores a token. Persistence is deployment-specific, so refreshed tokens go to a
 * callback you supply.
 */
final class Tokens
{
    public function __construct(
        public readonly string $accessToken,
        public readonly ?string $refreshToken = null,
        public readonly ?int $expiresAt = null,
    ) {}

    /** @param array<string, mixed> $payload */
    public static function fromResponse(array $payload): self
    {
        $expiresIn = $payload['expires_in'] ?? null;

        return new self(
            accessToken: (string) $payload['access_token'],
            refreshToken: isset($payload['refresh_token']) ? (string) $payload['refresh_token'] : null,
            expiresAt: $expiresIn !== null ? time() + (int) $expiresIn : null,
        );
    }

    public function expired(): bool
    {
        // Refresh slightly before nominal expiry, to avoid racing the server clock.
        return $this->expiresAt !== null && time() >= $this->expiresAt - 30;
    }
}

final class OAuth2Helper
{
    private const AUTHORIZE_URL = 'https://flat.io/auth/oauth';
    private const TOKEN_URL = 'https://api.flat.io/oauth/access_token';

    public function __construct(
        private readonly string $clientId,
        private readonly string $clientSecret,
        private readonly string $redirectUri,
    ) {}

    /**
     * URL to send a user to. $offline is what yields a refresh token.
     *
     * @param string[] $scopes
     */
    public function authorizeUrl(array $scopes, string $state, bool $offline = true): string
    {
        $params = [
            'client_id' => $this->clientId,
            'redirect_uri' => $this->redirectUri,
            'response_type' => 'code',
            'scope' => implode(' ', $scopes),
            'state' => $state,
        ];
        if ($offline) { $params['access_type'] = 'offline'; }

        return self::AUTHORIZE_URL . '?' . http_build_query($params);
    }

    public function exchangeCode(string $code): Tokens
    {
        return $this->tokenRequest([
            'grant_type' => 'authorization_code',
            'code' => $code,
            'redirect_uri' => $this->redirectUri,
        ]);
    }

    public function refresh(string $refreshToken): Tokens
    {
        return $this->tokenRequest(['grant_type' => 'refresh_token', 'refresh_token' => $refreshToken]);
    }

    /** @param array<string, string> $payload */
    private function tokenRequest(array $payload): Tokens
    {
        $body = http_build_query(array_merge($payload, [
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
        ]));

        $context = stream_context_create(['http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'content' => $body,
            'ignore_errors' => true,
            'timeout' => 30,
        ]]);

        $raw = @file_get_contents(self::TOKEN_URL, false, $context);
        $status = self::statusFrom($http_response_header ?? []);

        if ($raw === false || $status >= 400) {
            throw new FlatAuthenticationError(
                'OAuth2 token request failed; the user must re-authorize',
                status: $status,
            );
        }

        /** @var array<string, mixed> $decoded */
        $decoded = json_decode($raw, true, 512, JSON_THROW_ON_ERROR);

        return Tokens::fromResponse($decoded);
    }

    /** @param string[] $headers */
    private static function statusFrom(array $headers): int
    {
        foreach ($headers as $header) {
            if (preg_match('#^HTTP/\S+\s+(\d{3})#', $header, $m) === 1) {
                return (int) $m[1];
            }
        }

        return 0;
    }
}

/**
 * Holds the current tokens and refreshes them at most once at a time.
 *
 * Single-flight matters: two concurrent requests hitting an expired token must not both refresh,
 * because the second refresh would invalidate the token the first just obtained.
 */
final class TokenManager
{
    private bool $refreshing = false;

    /** @param null|callable(Tokens): void $onTokenRefresh */
    public function __construct(
        private Tokens $tokens,
        private readonly ?OAuth2Helper $helper = null,
        private readonly mixed $onTokenRefresh = null,
    ) {}

    /**
     * The token to send, refreshed first if it has expired.
     *
     * This used to return the stored token whatever its state, which made Tokens::expired() dead
     * code: every request after the expiry failed with a 401 that a refresh would have avoided.
     */
    public function accessToken(): string
    {
        return $this->tokens->expired() ? $this->refresh() : $this->tokens->accessToken;
    }

    public function refresh(): string
    {
        if ($this->refreshing) {
            return $this->tokens->accessToken;
        }
        if ($this->helper === null || $this->tokens->refreshToken === null) {
            throw new FlatAuthenticationError(
                'the access token expired and no refresh token is available; re-authorize'
            );
        }

        $this->refreshing = true;
        try {
            $this->tokens = $this->helper->refresh($this->tokens->refreshToken);
            if (is_callable($this->onTokenRefresh)) {
                ($this->onTokenRefresh)($this->tokens);
            }

            return $this->tokens->accessToken;
        } finally {
            $this->refreshing = false;
        }
    }
}
