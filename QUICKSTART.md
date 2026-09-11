# Quickstart

From nothing to your first authenticated call.

## 1. Get a token

Create a [Personal Access Token](https://flat.io/developers/apps). It behaves like an OAuth access
token scoped to your own account, which is all you need to start.

## 2. Install

```sh
composer require flat/api
```

Requires PHP 8.2, 8.3 and 8.4.

## 3. Call the API

```php
use Flat\APIClient\FlatClient;

$client = new FlatClient(accessToken: 'YOUR_TOKEN');
echo $client->account()->getAuthenticatedUser()->getUsername(), PHP_EOL;
```

If that prints your account, you are done.

## 4. Do something useful

List your scores. The client handles paging for you:

```php
foreach ($client->paginate('listCollections', ['parent' => 'user']) as $collection) {
    echo $collection->getTitle(), PHP_EOL;
}
```

Each generated API is reachable by a short name: `$client->scores()`, `$client->collections()`,
`$client->classes()`, `$client->omr()`, and so on.

## 5. Handle failure properly

```php
try {
    // ...
} catch (FlatRateLimitError $e) {
    echo 'retry after ', $e->reset;
} catch (FlatNotFoundError $e) {
    echo 'no such score';
}
```

Two things worth knowing about the Flat API specifically:

- Rate limiting returns **403**, not 429, and carries no `Retry-After`. The reset time is in
  `X-RateLimit-Reset`. The client already handles this; the note matters if you disable retries.
- The error `id` is only present on internal and backend errors. When you have one, quote it to
  support: it makes diagnosis much faster.

## Where next

- [README](README.md) for the full feature tour
- [Per-operation reference](docs/reference/)
- [API documentation](https://flat.io/developers/docs/api/)
