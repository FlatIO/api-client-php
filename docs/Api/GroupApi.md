# Flat\APIClient\GroupApi

All URIs are relative to *https://api.flat.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGroupDetails**](GroupApi.md#getGroupDetails) | **GET** /groups/{group} | Get group information
[**getGroupScores**](GroupApi.md#getGroupScores) | **GET** /groups/{group}/scores | List group&#39;s scores
[**listGroupUsers**](GroupApi.md#listGroupUsers) | **GET** /groups/{group}/users | List group&#39;s users


# **getGroupDetails**
> \Flat\APIClient\Model\GroupDetails getGroupDetails($group)

Get group information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = "group_example"; // string | Unique identifier of a Flat group

try {
    $result = $apiInstance->getGroupDetails($group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| Unique identifier of a Flat group |

### Return type

[**\Flat\APIClient\Model\GroupDetails**](../Model/GroupDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupScores**
> \Flat\APIClient\Model\ScoreDetails[] getGroupScores($group, $parent)

List group's scores

Get the list of scores shared with a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = "group_example"; // string | Unique identifier of a Flat group
$parent = "parent_example"; // string | Filter the score forked from the score id `parent`

try {
    $result = $apiInstance->getGroupScores($group, $parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupScores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| Unique identifier of a Flat group |
 **parent** | **string**| Filter the score forked from the score id &#x60;parent&#x60; | [optional]

### Return type

[**\Flat\APIClient\Model\ScoreDetails[]**](../Model/ScoreDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listGroupUsers**
> \Flat\APIClient\Model\UserPublic[] listGroupUsers($group)

List group's users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = "group_example"; // string | Unique identifier of a Flat group

try {
    $result = $apiInstance->listGroupUsers($group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->listGroupUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| Unique identifier of a Flat group |

### Return type

[**\Flat\APIClient\Model\UserPublic[]**](../Model/UserPublic.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

