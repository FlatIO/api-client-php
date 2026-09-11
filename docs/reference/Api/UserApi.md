# Flat\APIClient\UserApi

All URIs are relative to https://api.flat.io/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUser()**](UserApi.md#getUser) | **GET** /users/{user} | Get a public user profile |
| [**getUserLikes()**](UserApi.md#getUserLikes) | **GET** /users/{user}/likes | List liked scores |
| [**getUserScores()**](UserApi.md#getUserScores) | **GET** /users/{user}/scores | List user&#39;s scores |


## `getUser()`

```php
getUser($user): \Flat\APIClient\Model\UserPublic
```

Get a public user profile

Get a profile of a Flat or Flat for Education User.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 'user_example'; // string | This route parameter is the unique identifier of the user. You can specify an email instead of an unique identifier. If you are executing this request authenticated, you can use `me` as a value instead of the current User unique identifier to work on the current authenticated user.

try {
    $result = $apiInstance->getUser($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user** | **string**| This route parameter is the unique identifier of the user. You can specify an email instead of an unique identifier. If you are executing this request authenticated, you can use &#x60;me&#x60; as a value instead of the current User unique identifier to work on the current authenticated user. | |

### Return type

[**\Flat\APIClient\Model\UserPublic**](../Model/UserPublic.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserLikes()`

```php
getUserLikes($user, $next, $previous, $limit, $ids): \Flat\APIClient\Model\ScoreDetails[]
```

List liked scores

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 'user_example'; // string | Unique identifier of a Flat user. If you authenticated, you can use `me` to refer to the current user.
$next = 'next_example'; // string | An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.
$previous = 'previous_example'; // string | An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.
$limit = 25; // int | This is the maximum number of objects that may be returned
$ids = True; // bool | Return only the identifiers of the scores

try {
    $result = $apiInstance->getUserLikes($user, $next, $previous, $limit, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserLikes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user** | **string**| Unique identifier of a Flat user. If you authenticated, you can use &#x60;me&#x60; to refer to the current user. | |
| **next** | **string**| An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional] |
| **previous** | **string**| An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional] |
| **limit** | **int**| This is the maximum number of objects that may be returned | [optional] [default to 25] |
| **ids** | **bool**| Return only the identifiers of the scores | [optional] |

### Return type

[**\Flat\APIClient\Model\ScoreDetails[]**](../Model/ScoreDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserScores()`

```php
getUserScores($user, $paginate, $sort, $direction, $limit, $next, $previous): \Flat\APIClient\Model\ScoreDetails[]
```

List user's scores

Get the list of public scores owned by a User. If you want to access to private scores, please use the [Collections API](#tag/Collection). For example `GET /v2/collections/allScores/scores` to list all recently updated scores.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 'user_example'; // string | Unique identifier of a Flat user. If you authenticated, you can use `me` to refer to the current user.
$paginate = false; // bool | When set to `true`, the API will return a paginated result. When set to `false` or unset, the API will return all the scores. If this parameter is unset or false, then limit/sort/direction/next/previous will be ignored.
$sort = 'sort_example'; // string | Sort
$direction = 'direction_example'; // string | Sort direction
$limit = 25; // int | This is the maximum number of objects that may be returned
$next = 'next_example'; // string | An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.
$previous = 'previous_example'; // string | An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.

try {
    $result = $apiInstance->getUserScores($user, $paginate, $sort, $direction, $limit, $next, $previous);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserScores: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user** | **string**| Unique identifier of a Flat user. If you authenticated, you can use &#x60;me&#x60; to refer to the current user. | |
| **paginate** | **bool**| When set to &#x60;true&#x60;, the API will return a paginated result. When set to &#x60;false&#x60; or unset, the API will return all the scores. If this parameter is unset or false, then limit/sort/direction/next/previous will be ignored. | [optional] [default to false] |
| **sort** | **string**| Sort | [optional] |
| **direction** | **string**| Sort direction | [optional] |
| **limit** | **int**| This is the maximum number of objects that may be returned | [optional] [default to 25] |
| **next** | **string**| An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional] |
| **previous** | **string**| An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional] |

### Return type

[**\Flat\APIClient\Model\ScoreDetails[]**](../Model/ScoreDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
