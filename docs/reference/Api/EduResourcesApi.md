# Flat\APIClient\EduResourcesApi

All URIs are relative to https://api.flat.io/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**copyEduResource()**](EduResourcesApi.md#copyEduResource) | **POST** /eduResources/{resource}/copy | Copy an education resource to a Resource Library |
| [**copyEduResourceToDemoClass()**](EduResourcesApi.md#copyEduResourceToDemoClass) | **POST** /eduResources/{resource}/copyToDemoClass | Copy an education assignment to a teacher demo class |
| [**createEduResource()**](EduResourcesApi.md#createEduResource) | **POST** /eduResources | Create a new education resource |
| [**createEduResourceLtiLink()**](EduResourcesApi.md#createEduResourceLtiLink) | **POST** /eduResources/{resource}/createLtiLink | Create an LTI link for an education resource |
| [**deleteEduResource()**](EduResourcesApi.md#deleteEduResource) | **DELETE** /eduResources/{resource} | Delete an education resource |
| [**getEduResource()**](EduResourcesApi.md#getEduResource) | **GET** /eduResources/{resource} | Get an education resource |
| [**listEduLibraries()**](EduResourcesApi.md#listEduLibraries) | **GET** /eduResources/libraries | List the education libraries |
| [**listEduResources()**](EduResourcesApi.md#listEduResources) | **GET** /eduResources | List education resources in a library or folder |
| [**moveEduResource()**](EduResourcesApi.md#moveEduResource) | **POST** /eduResources/{resource}/move | Move an education resource |
| [**updateEduResource()**](EduResourcesApi.md#updateEduResource) | **PUT** /eduResources/{resource} | Update an education resource metadata |
| [**updateEduResourceAssignment()**](EduResourcesApi.md#updateEduResourceAssignment) | **PUT** /eduResources/{resource}/assignment | Update an education resource assignment |
| [**useEduResourceInClass()**](EduResourcesApi.md#useEduResourceInClass) | **POST** /eduResources/{resource}/useInClass | Use an education resource in a class |


## `copyEduResource()`

```php
copyEduResource($resource, $edu_resource_copy): \Flat\APIClient\Model\EduResource
```

Copy an education resource to a Resource Library

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\EduResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource = 'resource_example'; // string | Unique identifier of the resource
$edu_resource_copy = new \Flat\APIClient\Model\EduResourceCopy(); // \Flat\APIClient\Model\EduResourceCopy

try {
    $result = $apiInstance->copyEduResource($resource, $edu_resource_copy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EduResourcesApi->copyEduResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource** | **string**| Unique identifier of the resource | |
| **edu_resource_copy** | [**\Flat\APIClient\Model\EduResourceCopy**](../Model/EduResourceCopy.md)|  | |

### Return type

[**\Flat\APIClient\Model\EduResource**](../Model/EduResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `copyEduResourceToDemoClass()`

```php
copyEduResourceToDemoClass($resource): \Flat\APIClient\Model\ClassAssignment
```

Copy an education assignment to a teacher demo class

Once a resource library can be published to a class (`Assignment.capabilities.canPublishInClass = true`), this endpoint can be used for the feature \"View as student\".  It will ensure the teacher has a demo class, then copy the assignment to the demo class. You can then use `POST /classes/{class}/testStudent` to create a testing student account in the demo class.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\EduResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource = 'resource_example'; // string | Unique identifier of the resource

try {
    $result = $apiInstance->copyEduResourceToDemoClass($resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EduResourcesApi->copyEduResourceToDemoClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource** | **string**| Unique identifier of the resource | |

### Return type

[**\Flat\APIClient\Model\ClassAssignment**](../Model/ClassAssignment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEduResource()`

```php
createEduResource($edu_resource_creation): \Flat\APIClient\Model\EduResource
```

Create a new education resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\EduResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edu_resource_creation = new \Flat\APIClient\Model\EduResourceCreation(); // \Flat\APIClient\Model\EduResourceCreation

try {
    $result = $apiInstance->createEduResource($edu_resource_creation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EduResourcesApi->createEduResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **edu_resource_creation** | [**\Flat\APIClient\Model\EduResourceCreation**](../Model/EduResourceCreation.md)|  | |

### Return type

[**\Flat\APIClient\Model\EduResource**](../Model/EduResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEduResourceLtiLink()`

```php
createEduResourceLtiLink($resource): \Flat\APIClient\Model\EduResourceLtiLink
```

Create an LTI link for an education resource

This endpoint will return an LTI link that can be used to launch Flat for Education. The link, in a context from a class, will ensure the assignment has been copied in the class.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\EduResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource = 'resource_example'; // string | Unique identifier of the resource

try {
    $result = $apiInstance->createEduResourceLtiLink($resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EduResourcesApi->createEduResourceLtiLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource** | **string**| Unique identifier of the resource | |

### Return type

[**\Flat\APIClient\Model\EduResourceLtiLink**](../Model/EduResourceLtiLink.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEduResource()`

```php
deleteEduResource($resource)
```

Delete an education resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\EduResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource = 'resource_example'; // string | Unique identifier of the resource

try {
    $apiInstance->deleteEduResource($resource);
} catch (Exception $e) {
    echo 'Exception when calling EduResourcesApi->deleteEduResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource** | **string**| Unique identifier of the resource | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEduResource()`

```php
getEduResource($resource): \Flat\APIClient\Model\EduResource
```

Get an education resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\EduResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource = 'resource_example'; // string | Unique identifier of the resource

try {
    $result = $apiInstance->getEduResource($resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EduResourcesApi->getEduResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource** | **string**| Unique identifier of the resource | |

### Return type

[**\Flat\APIClient\Model\EduResource**](../Model/EduResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEduLibraries()`

```php
listEduLibraries(): \Flat\APIClient\Model\EduLibrary[]
```

List the education libraries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\EduResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listEduLibraries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EduResourcesApi->listEduLibraries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Flat\APIClient\Model\EduLibrary[]**](../Model/EduLibrary.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEduResources()`

```php
listEduResources($parent, $without_subfolders_resources, $type, $subjects, $assignment_types, $grades, $sort, $direction, $limit, $next, $previous): \Flat\APIClient\Model\EduResource[]
```

List education resources in a library or folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\EduResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent = 'root'; // string | List the resources contained in this `parent` library or folder.  Accepts a folder identifier, or the identifier of one of the libraries returned by [`listEduLibraries`](#tag/EduResources/operation/listEduLibraries). Which libraries are available depends on the account, so use the `id` values that endpoint returns rather than hardcoding this list:  * `root`: the user's own resources * `organization`: resources shared with the organization
$without_subfolders_resources = True; // bool | For the `parent` = `organization`, do not include resources from subfolders. By default in the Resource Library UI, we include resources from subfolders, but for example in a picker like LTI, we don't want to include them.
$type = 'type_example'; // string | Filter the returned resources by type
$subjects = array(new \Flat\APIClient\Model\\Flat\APIClient\Model\TeachingTheme()); // \Flat\APIClient\Model\TeachingTheme[] | Filter the returned resources by subjects
$assignment_types = array(new \Flat\APIClient\Model\\Flat\APIClient\Model\AssignmentType()); // \Flat\APIClient\Model\AssignmentType[] | Filter the returned resources by assignment types
$grades = array(new \Flat\APIClient\Model\\Flat\APIClient\Model\Grade()); // \Flat\APIClient\Model\Grade[] | Filter the returned resources by grades
$sort = 'creationDate'; // string | Sort
$direction = 'direction_example'; // string | Sort direction
$limit = 25; // int | This is the maximum number of resources that may be returned
$next = 'next_example'; // string | An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.
$previous = 'previous_example'; // string | An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.

try {
    $result = $apiInstance->listEduResources($parent, $without_subfolders_resources, $type, $subjects, $assignment_types, $grades, $sort, $direction, $limit, $next, $previous);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EduResourcesApi->listEduResources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parent** | **string**| List the resources contained in this &#x60;parent&#x60; library or folder.  Accepts a folder identifier, or the identifier of one of the libraries returned by [&#x60;listEduLibraries&#x60;](#tag/EduResources/operation/listEduLibraries). Which libraries are available depends on the account, so use the &#x60;id&#x60; values that endpoint returns rather than hardcoding this list:  * &#x60;root&#x60;: the user&#39;s own resources * &#x60;organization&#x60;: resources shared with the organization | [optional] [default to &#39;root&#39;] |
| **without_subfolders_resources** | **bool**| For the &#x60;parent&#x60; &#x3D; &#x60;organization&#x60;, do not include resources from subfolders. By default in the Resource Library UI, we include resources from subfolders, but for example in a picker like LTI, we don&#39;t want to include them. | [optional] |
| **type** | **string**| Filter the returned resources by type | [optional] |
| **subjects** | [**\Flat\APIClient\Model\TeachingTheme[]**](../Model/\Flat\APIClient\Model\TeachingTheme.md)| Filter the returned resources by subjects | [optional] |
| **assignment_types** | [**\Flat\APIClient\Model\AssignmentType[]**](../Model/\Flat\APIClient\Model\AssignmentType.md)| Filter the returned resources by assignment types | [optional] |
| **grades** | [**\Flat\APIClient\Model\Grade[]**](../Model/\Flat\APIClient\Model\Grade.md)| Filter the returned resources by grades | [optional] |
| **sort** | **string**| Sort | [optional] [default to &#39;creationDate&#39;] |
| **direction** | **string**| Sort direction | [optional] |
| **limit** | **int**| This is the maximum number of resources that may be returned | [optional] [default to 25] |
| **next** | **string**| An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional] |
| **previous** | **string**| An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional] |

### Return type

[**\Flat\APIClient\Model\EduResource[]**](../Model/EduResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveEduResource()`

```php
moveEduResource($resource, $edu_resource_move): \Flat\APIClient\Model\EduResource
```

Move an education resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\EduResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource = 'resource_example'; // string | Unique identifier of the resource
$edu_resource_move = new \Flat\APIClient\Model\EduResourceMove(); // \Flat\APIClient\Model\EduResourceMove

try {
    $result = $apiInstance->moveEduResource($resource, $edu_resource_move);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EduResourcesApi->moveEduResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource** | **string**| Unique identifier of the resource | |
| **edu_resource_move** | [**\Flat\APIClient\Model\EduResourceMove**](../Model/EduResourceMove.md)|  | |

### Return type

[**\Flat\APIClient\Model\EduResource**](../Model/EduResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEduResource()`

```php
updateEduResource($resource, $edu_resource_update): \Flat\APIClient\Model\EduResource
```

Update an education resource metadata

Update any resources metadata (e.g. title).  Use this method to rename education resources folders or assignments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\EduResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource = 'resource_example'; // string | Unique identifier of the resource
$edu_resource_update = new \Flat\APIClient\Model\EduResourceUpdate(); // \Flat\APIClient\Model\EduResourceUpdate

try {
    $result = $apiInstance->updateEduResource($resource, $edu_resource_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EduResourcesApi->updateEduResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource** | **string**| Unique identifier of the resource | |
| **edu_resource_update** | [**\Flat\APIClient\Model\EduResourceUpdate**](../Model/EduResourceUpdate.md)|  | |

### Return type

[**\Flat\APIClient\Model\EduResource**](../Model/EduResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEduResourceAssignment()`

```php
updateEduResourceAssignment($resource, $assignment_update): \Flat\APIClient\Model\Assignment
```

Update an education resource assignment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\EduResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource = 'resource_example'; // string | Unique identifier of the resource
$assignment_update = new \Flat\APIClient\Model\AssignmentUpdate(); // \Flat\APIClient\Model\AssignmentUpdate

try {
    $result = $apiInstance->updateEduResourceAssignment($resource, $assignment_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EduResourcesApi->updateEduResourceAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource** | **string**| Unique identifier of the resource | |
| **assignment_update** | [**\Flat\APIClient\Model\AssignmentUpdate**](../Model/AssignmentUpdate.md)|  | |

### Return type

[**\Flat\APIClient\Model\Assignment**](../Model/Assignment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `useEduResourceInClass()`

```php
useEduResourceInClass($resource, $edu_resource_use_in_class): \Flat\APIClient\Model\ClassAssignment
```

Use an education resource in a class

This endpoint will copy a resource and the underlying resources. The assignment will be created as a draft that can be completed with other options before publishing (e.g. due date, publication date for scheduling, etc.).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\EduResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource = 'resource_example'; // string | Unique identifier of the resource
$edu_resource_use_in_class = new \Flat\APIClient\Model\EduResourceUseInClass(); // \Flat\APIClient\Model\EduResourceUseInClass

try {
    $result = $apiInstance->useEduResourceInClass($resource, $edu_resource_use_in_class);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EduResourcesApi->useEduResourceInClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource** | **string**| Unique identifier of the resource | |
| **edu_resource_use_in_class** | [**\Flat\APIClient\Model\EduResourceUseInClass**](../Model/EduResourceUseInClass.md)|  | |

### Return type

[**\Flat\APIClient\Model\ClassAssignment**](../Model/ClassAssignment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
