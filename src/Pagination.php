<?php

declare(strict_types=1);

namespace Flat\APIClient;

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

        preg_match_all('/<([^>]+)>\s*;\s*rel="([^"]+)"/', $value, $matches, PREG_SET_ORDER);
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
     * @return \Generator<int, mixed>
     */
    public static function paginate(callable $fetchPage, array $params = []): \Generator
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
