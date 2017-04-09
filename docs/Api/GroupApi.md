# Flat\APIClient\GroupApi

All URIs are relative to *https://api.flat.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGroupScores**](GroupApi.md#getGroupScores) | **GET** /groups/{group}/scores | List group&#39;s scores


# **getGroupScores**
> \Flat\APIClient\Model\ScoreDetails[] getGroupScores($group, $parent)

List group's scores

Get the list of scores shared with a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Flat\APIClient\Api\GroupApi();
$group = "group_example"; // string | Unique identifier of the group
$parent = "parent_example"; // string | Filter the score forked from the score id `parent`

try {
    $result = $api_instance->getGroupScores($group, $parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupScores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| Unique identifier of the group |
 **parent** | **string**| Filter the score forked from the score id &#x60;parent&#x60; | [optional]

### Return type

[**\Flat\APIClient\Model\ScoreDetails[]**](../Model/ScoreDetails.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

