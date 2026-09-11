# Flat\APIClient\AccountApi

All URIs are relative to https://api.flat.io/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAuthenticatedUser()**](AccountApi.md#getAuthenticatedUser) | **GET** /me | Get current user account |


## `getAuthenticatedUser()`

```php
getAuthenticatedUser($only_id): \Flat\APIClient\Model\UserDetails
```

Get current user account

Get details about the current authenticated User.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$only_id = false; // bool | Only return the user id

try {
    $result = $apiInstance->getAuthenticatedUser($only_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAuthenticatedUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **only_id** | **bool**| Only return the user id | [optional] [default to false] |

### Return type

[**\Flat\APIClient\Model\UserDetails**](../Model/UserDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
