# Flat\APIClient\UserApi

All URIs are relative to *https://api.flat.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gerUserLikes**](UserApi.md#gerUserLikes) | **GET** /users/{user}/likes | List liked scores
[**getUser**](UserApi.md#getUser) | **GET** /users/{user} | Get a public user profile
[**getUserScores**](UserApi.md#getUserScores) | **GET** /users/{user}/scores | List user&#39;s scores


# **gerUserLikes**
> \Flat\APIClient\Model\ScoreDetails[] gerUserLikes($user, $ids)

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
$user = "user_example"; // string | Unique identifier of a Flat user. If you authenticated, you can use `me` to refer to the current user.
$ids = true; // bool | Return only the identifiers of the scores

try {
    $result = $apiInstance->gerUserLikes($user, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->gerUserLikes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Unique identifier of a Flat user. If you authenticated, you can use &#x60;me&#x60; to refer to the current user. |
 **ids** | **bool**| Return only the identifiers of the scores | [optional]

### Return type

[**\Flat\APIClient\Model\ScoreDetails[]**](../Model/ScoreDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUser**
> \Flat\APIClient\Model\UserPublic getUser($user)

Get a public user profile

Get a public profile of a Flat User.

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
$user = "user_example"; // string | This route parameter is the unique identifier of the user. You can specify an email instead of an unique identifier. If you are executing this request authenticated, you can use `me` as a value instead of the current User unique identifier to work on the current authenticated user.

try {
    $result = $apiInstance->getUser($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| This route parameter is the unique identifier of the user. You can specify an email instead of an unique identifier. If you are executing this request authenticated, you can use &#x60;me&#x60; as a value instead of the current User unique identifier to work on the current authenticated user. |

### Return type

[**\Flat\APIClient\Model\UserPublic**](../Model/UserPublic.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserScores**
> \Flat\APIClient\Model\ScoreDetails[] getUserScores($user, $parent)

List user's scores

Get the list of public scores owned by a User.  **DEPRECATED**: Please note that the current behavior will be deprecrated on **2019-01-01**. This method will no longer list private and shared scores, but only public scores of a Flat account. If you want to access to private scores, please use the [Collections API](#tag/Collection) instead.

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
$user = "user_example"; // string | Unique identifier of a Flat user. If you authenticated, you can use `me` to refer to the current user.
$parent = "parent_example"; // string | Filter the score forked from the score id `parent`

try {
    $result = $apiInstance->getUserScores($user, $parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserScores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Unique identifier of a Flat user. If you authenticated, you can use &#x60;me&#x60; to refer to the current user. |
 **parent** | **string**| Filter the score forked from the score id &#x60;parent&#x60; | [optional]

### Return type

[**\Flat\APIClient\Model\ScoreDetails[]**](../Model/ScoreDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

