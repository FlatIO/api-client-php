# Flat\APIClient\CollectionApi

All URIs are relative to *https://api.flat.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addScoreToCollection**](CollectionApi.md#addScoreToCollection) | **PUT** /collections/{collection}/scores/{score} | Add a score to the collection
[**createCollection**](CollectionApi.md#createCollection) | **POST** /collections | Create a new collection
[**deleteCollection**](CollectionApi.md#deleteCollection) | **DELETE** /collections/{collection} | Delete the collection
[**deleteScoreFromCollection**](CollectionApi.md#deleteScoreFromCollection) | **DELETE** /collections/{collection}/scores/{score} | Delete a score from the collection
[**editCollection**](CollectionApi.md#editCollection) | **PUT** /collections/{collection} | Update a collection&#39;s metadata
[**getCollection**](CollectionApi.md#getCollection) | **GET** /collections/{collection} | Get collection details
[**listCollectionScores**](CollectionApi.md#listCollectionScores) | **GET** /collections/{collection}/scores | List the scores contained in a collection
[**listCollections**](CollectionApi.md#listCollections) | **GET** /collections | List the collections
[**untrashCollection**](CollectionApi.md#untrashCollection) | **POST** /collections/{collection}/untrash | Untrash a collection


# **addScoreToCollection**
> \Flat\APIClient\Model\ScoreDetails addScoreToCollection($collection, $score, $sharingKey)

Add a score to the collection

This operation will add a score to a collection. The default behavior will make the score available across multiple collections. You must have the capability `canAddScores` on the provided `collection` to perform the action.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection = "collection_example"; // string | Unique identifier of the collection. The following aliases are supported: - `root`: The root collection of the account - `sharedWithMe`: Automatically contains new resources that have been shared individually - `trash`: Automatically contains resources that have been deleted
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$sharingKey = "sharingKey_example"; // string | This sharing key must be specified to access to a score or collection with a `privacy` mode set to `privateLink` and the current user is not a collaborator of the document.

try {
    $result = $apiInstance->addScoreToCollection($collection, $score, $sharingKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->addScoreToCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection** | **string**| Unique identifier of the collection. The following aliases are supported: - &#x60;root&#x60;: The root collection of the account - &#x60;sharedWithMe&#x60;: Automatically contains new resources that have been shared individually - &#x60;trash&#x60;: Automatically contains resources that have been deleted |
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |
 **sharingKey** | **string**| This sharing key must be specified to access to a score or collection with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. | [optional]

### Return type

[**\Flat\APIClient\Model\ScoreDetails**](../Model/ScoreDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCollection**
> \Flat\APIClient\Model\Collection createCollection($body)

Create a new collection

This method will create a new collection and add it to your `root` collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Flat\APIClient\Model\CollectionCreation(); // \Flat\APIClient\Model\CollectionCreation | 

try {
    $result = $apiInstance->createCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->createCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Flat\APIClient\Model\CollectionCreation**](../Model/CollectionCreation.md)|  |

### Return type

[**\Flat\APIClient\Model\Collection**](../Model/Collection.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollection**
> deleteCollection($collection)

Delete the collection

This method will schedule the deletion of the collection. Until deleted, the collection will be available in the `trash`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection = "collection_example"; // string | Unique identifier of the collection. The following aliases are supported: - `root`: The root collection of the account - `sharedWithMe`: Automatically contains new resources that have been shared individually - `trash`: Automatically contains resources that have been deleted

try {
    $apiInstance->deleteCollection($collection);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->deleteCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection** | **string**| Unique identifier of the collection. The following aliases are supported: - &#x60;root&#x60;: The root collection of the account - &#x60;sharedWithMe&#x60;: Automatically contains new resources that have been shared individually - &#x60;trash&#x60;: Automatically contains resources that have been deleted |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteScoreFromCollection**
> deleteScoreFromCollection($collection, $score)

Delete a score from the collection

This method will delete a score from the collection. Unlike [`DELETE /scores/{score}`](#operation/deleteScore), this score will not remove the score from your account, but only from the collection. This can be used to *move* a score from one collection to another, or simply remove a score from one collection when this one is contained in multiple collections.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection = "collection_example"; // string | Unique identifier of the collection. The following aliases are supported: - `root`: The root collection of the account - `sharedWithMe`: Automatically contains new resources that have been shared individually - `trash`: Automatically contains resources that have been deleted
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).

try {
    $apiInstance->deleteScoreFromCollection($collection, $score);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->deleteScoreFromCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection** | **string**| Unique identifier of the collection. The following aliases are supported: - &#x60;root&#x60;: The root collection of the account - &#x60;sharedWithMe&#x60;: Automatically contains new resources that have been shared individually - &#x60;trash&#x60;: Automatically contains resources that have been deleted |
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editCollection**
> \Flat\APIClient\Model\Collection editCollection($collection, $body)

Update a collection's metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection = "collection_example"; // string | Unique identifier of the collection. The following aliases are supported: - `root`: The root collection of the account - `sharedWithMe`: Automatically contains new resources that have been shared individually - `trash`: Automatically contains resources that have been deleted
$body = new \Flat\APIClient\Model\CollectionModification(); // \Flat\APIClient\Model\CollectionModification | 

try {
    $result = $apiInstance->editCollection($collection, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->editCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection** | **string**| Unique identifier of the collection. The following aliases are supported: - &#x60;root&#x60;: The root collection of the account - &#x60;sharedWithMe&#x60;: Automatically contains new resources that have been shared individually - &#x60;trash&#x60;: Automatically contains resources that have been deleted |
 **body** | [**\Flat\APIClient\Model\CollectionModification**](../Model/CollectionModification.md)|  | [optional]

### Return type

[**\Flat\APIClient\Model\Collection**](../Model/Collection.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCollection**
> \Flat\APIClient\Model\Collection getCollection($collection, $sharingKey)

Get collection details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection = "collection_example"; // string | Unique identifier of the collection. The following aliases are supported: - `root`: The root collection of the account - `sharedWithMe`: Automatically contains new resources that have been shared individually - `trash`: Automatically contains resources that have been deleted
$sharingKey = "sharingKey_example"; // string | This sharing key must be specified to access to a score or collection with a `privacy` mode set to `privateLink` and the current user is not a collaborator of the document.

try {
    $result = $apiInstance->getCollection($collection, $sharingKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->getCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection** | **string**| Unique identifier of the collection. The following aliases are supported: - &#x60;root&#x60;: The root collection of the account - &#x60;sharedWithMe&#x60;: Automatically contains new resources that have been shared individually - &#x60;trash&#x60;: Automatically contains resources that have been deleted |
 **sharingKey** | **string**| This sharing key must be specified to access to a score or collection with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. | [optional]

### Return type

[**\Flat\APIClient\Model\Collection**](../Model/Collection.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCollectionScores**
> \Flat\APIClient\Model\ScoreDetails[] listCollectionScores($collection, $sharingKey, $sort, $direction, $limit, $next, $previous)

List the scores contained in a collection

Use this method to list the scores contained in a collection. If no sort option is provided, the scores are sorted by `modificationDate` `desc`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection = "collection_example"; // string | Unique identifier of the collection. The following aliases are supported: - `root`: The root collection of the account - `sharedWithMe`: Automatically contains new resources that have been shared individually - `trash`: Automatically contains resources that have been deleted
$sharingKey = "sharingKey_example"; // string | This sharing key must be specified to access to a score or collection with a `privacy` mode set to `privateLink` and the current user is not a collaborator of the document.
$sort = "sort_example"; // string | Sort
$direction = "direction_example"; // string | Sort direction
$limit = 25; // int | This is the maximum number of objects that may be returned
$next = "next_example"; // string | An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.
$previous = "previous_example"; // string | An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.

try {
    $result = $apiInstance->listCollectionScores($collection, $sharingKey, $sort, $direction, $limit, $next, $previous);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->listCollectionScores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection** | **string**| Unique identifier of the collection. The following aliases are supported: - &#x60;root&#x60;: The root collection of the account - &#x60;sharedWithMe&#x60;: Automatically contains new resources that have been shared individually - &#x60;trash&#x60;: Automatically contains resources that have been deleted |
 **sharingKey** | **string**| This sharing key must be specified to access to a score or collection with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. | [optional]
 **sort** | **string**| Sort | [optional]
 **direction** | **string**| Sort direction | [optional]
 **limit** | **int**| This is the maximum number of objects that may be returned | [optional] [default to 25]
 **next** | **string**| An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional]
 **previous** | **string**| An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional]

### Return type

[**\Flat\APIClient\Model\ScoreDetails[]**](../Model/ScoreDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCollections**
> \Flat\APIClient\Model\Collection[] listCollections($parent, $sort, $direction, $limit, $next, $previous)

List the collections

Use this method to list the user's collections contained in `parent` (by default in the `root` collection). If no sort option is provided, the collections are sorted by `creationDate` `desc`.  Note that this method will not include the `parent` collection in the listing. For example, if you need the details of the `root` collection, you can use `GET /v2/collections/root`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent = "root"; // string | List the collection contained in this `parent` collection.  This option doesn't provide a complete multi-level collection support. When sharing a collection with someone, this one will have as `parent` `sharedWithMe`.
$sort = "sort_example"; // string | Sort
$direction = "direction_example"; // string | Sort direction
$limit = 25; // int | This is the maximum number of objects that may be returned
$next = "next_example"; // string | An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.
$previous = "previous_example"; // string | An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.

try {
    $result = $apiInstance->listCollections($parent, $sort, $direction, $limit, $next, $previous);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->listCollections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent** | **string**| List the collection contained in this &#x60;parent&#x60; collection.  This option doesn&#39;t provide a complete multi-level collection support. When sharing a collection with someone, this one will have as &#x60;parent&#x60; &#x60;sharedWithMe&#x60;. | [optional] [default to root]
 **sort** | **string**| Sort | [optional]
 **direction** | **string**| Sort direction | [optional]
 **limit** | **int**| This is the maximum number of objects that may be returned | [optional] [default to 25]
 **next** | **string**| An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional]
 **previous** | **string**| An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional]

### Return type

[**\Flat\APIClient\Model\Collection[]**](../Model/Collection.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **untrashCollection**
> untrashCollection($collection)

Untrash a collection

This method will restore the collection by removing it from the `trash` and add it back to the `root` collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection = "collection_example"; // string | Unique identifier of the collection. The following aliases are supported: - `root`: The root collection of the account - `sharedWithMe`: Automatically contains new resources that have been shared individually - `trash`: Automatically contains resources that have been deleted

try {
    $apiInstance->untrashCollection($collection);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->untrashCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection** | **string**| Unique identifier of the collection. The following aliases are supported: - &#x60;root&#x60;: The root collection of the account - &#x60;sharedWithMe&#x60;: Automatically contains new resources that have been shared individually - &#x60;trash&#x60;: Automatically contains resources that have been deleted |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

