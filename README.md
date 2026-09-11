# Flat API client for Php

Official client for the [Flat REST API](https://flat.io/developers/docs/api/), generated from Flat's
public OpenAPI specification and kept current automatically.

```sh
composer require flat/api
```

```php
use Flat\APIClient\FlatClient;

$client = new FlatClient(accessToken: 'YOUR_TOKEN');
echo $client->account()->getAuthenticatedUser()->getUsername(), PHP_EOL;
```

Get a token in seconds with a [Personal Access Token](https://flat.io/developers/apps); it works
exactly like an OAuth access token for your own account.

## What this client does for you

- **Typed errors.** Branch on the error, not the status code. Flat returns HTTP 403 for both rate
  limiting and authorization failures, so status alone cannot tell them apart.
- **Automatic retries.** Rate limits and server errors are retried with backoff. Flat sends no
  `Retry-After`, so the client reads `X-RateLimit-Reset` instead.
- **Automatic pagination.** Eight collection endpoints are cursor-paginated with the cursor in a
  `Link` header. You get an iterator; you never touch a cursor.
- **OAuth2 built in.** Authorization URLs, code exchange and transparent token refresh.
- **Full type information**, so your editor and your coding assistant both know the API.

### Pagination

```php
foreach ($client->paginate('listCollections', ['parent' => 'user']) as $collection) {
    echo $collection->getTitle(), PHP_EOL;
}
```

`paginate` takes the operation by name, with its parameters as a keyed array. It follows the
cursor for you and stops at the last page.

### Errors

```php
try {
    // ...
} catch (FlatRateLimitError $e) {
    echo 'retry after ', $e->reset;
} catch (FlatNotFoundError $e) {
    echo 'no such score';
}
```

### Asynchronous use

Synchronous only: async is not idiomatic in PHP for this shape of client.

## Supported versions

PHP 8.2, 8.3 and 8.4. Versions past their upstream end of life are not supported; see
[MIGRATION.md](MIGRATION.md) if you are on an older runtime.

## Documentation

- [Quickstart](QUICKSTART.md), install to first call
- [Per-operation reference](docs/reference/), generated
- [API documentation](https://flat.io/developers/docs/api/)
- [Migrating from 0.6.x](MIGRATION.md)

## Verifying this package

Packagist publishes from the signed git tag in this repository, so the tag is the provenance: there
is no separate upload step and no publishing credential that could be misused.

```sh
git verify-tag 1.0.0
composer show flat/api --all
```

## How this client is maintained

Generated from the public specification published at
[FlatIO/api-reference](https://github.com/FlatIO/api-reference). A new specification release
regenerates, validates and publishes this package automatically, so it never drifts from the API.

Files under `docs/reference/` and the client sources are generated: edit the generator configuration
in `tools/`, not the output.

## License

Apache 2.0. See [LICENSE](LICENSE).
