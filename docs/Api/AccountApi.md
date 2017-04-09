# Flat\APIClient\AccountApi

All URIs are relative to *https://api.flat.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAuthenticatedUser**](AccountApi.md#getAuthenticatedUser) | **GET** /me | Get current user profile


# **getAuthenticatedUser**
> \Flat\APIClient\Model\UserDetails getAuthenticatedUser()

Get current user profile

Get details about the current authenticated User.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\AccountApi();

try {
    $result = $api_instance->getAuthenticatedUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAuthenticatedUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Flat\APIClient\Model\UserDetails**](../Model/UserDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

