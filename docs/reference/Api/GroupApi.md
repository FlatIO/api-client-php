# Flat\APIClient\GroupApi

All URIs are relative to https://api.flat.io/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addGroupUser()**](GroupApi.md#addGroupUser) | **POST** /groups/{group}/users | Add a student to a group |
| [**createGroup()**](GroupApi.md#createGroup) | **POST** /groups | Create a new group |
| [**deleteGroup()**](GroupApi.md#deleteGroup) | **DELETE** /groups/{group} | Delete a group |
| [**getGroupDetails()**](GroupApi.md#getGroupDetails) | **GET** /groups/{group} | Get group information |
| [**getGroupScores()**](GroupApi.md#getGroupScores) | **GET** /groups/{group}/scores | List group&#39;s scores |
| [**listGroupUsers()**](GroupApi.md#listGroupUsers) | **GET** /groups/{group}/users | List group&#39;s users |
| [**listGroups()**](GroupApi.md#listGroups) | **GET** /groups | List groups |
| [**removeGroupUser()**](GroupApi.md#removeGroupUser) | **DELETE** /groups/{group}/users/{user} | Remove a student from a class group |
| [**renameGroup()**](GroupApi.md#renameGroup) | **PUT** /groups/{group} | Rename a group |


## `addGroupUser()`

```php
addGroupUser($group, $add_group_user_request): \Flat\APIClient\Model\AddGroupUser200Response
```

Add a student to a group

Add a student to the specified group (must be in the same class)

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
$group = 'group_example'; // string | Unique identifier of a Flat group
$add_group_user_request = new \Flat\APIClient\Model\AddGroupUserRequest(); // \Flat\APIClient\Model\AddGroupUserRequest

try {
    $result = $apiInstance->addGroupUser($group, $add_group_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->addGroupUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group** | **string**| Unique identifier of a Flat group | |
| **add_group_user_request** | [**\Flat\APIClient\Model\AddGroupUserRequest**](../Model/AddGroupUserRequest.md)|  | |

### Return type

[**\Flat\APIClient\Model\AddGroupUser200Response**](../Model/AddGroupUser200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGroup()`

```php
createGroup($group_creation): \Flat\APIClient\Model\GroupDetails
```

Create a new group

Create a group of the given type, tied to a classroom, optionally with initial members.

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
$group_creation = new \Flat\APIClient\Model\GroupCreation(); // \Flat\APIClient\Model\GroupCreation

try {
    $result = $apiInstance->createGroup($group_creation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_creation** | [**\Flat\APIClient\Model\GroupCreation**](../Model/GroupCreation.md)|  | |

### Return type

[**\Flat\APIClient\Model\GroupDetails**](../Model/GroupDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGroup()`

```php
deleteGroup($group)
```

Delete a group

Delete a group. Only available to teachers of the classroom.

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
$group = 'group_example'; // string | Unique identifier of a Flat group

try {
    $apiInstance->deleteGroup($group);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group** | **string**| Unique identifier of a Flat group | |

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

## `getGroupDetails()`

```php
getGroupDetails($group): \Flat\APIClient\Model\GroupDetails
```

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
$group = 'group_example'; // string | Unique identifier of a Flat group

try {
    $result = $apiInstance->getGroupDetails($group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group** | **string**| Unique identifier of a Flat group | |

### Return type

[**\Flat\APIClient\Model\GroupDetails**](../Model/GroupDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupScores()`

```php
getGroupScores($group, $parent): \Flat\APIClient\Model\ScoreDetails[]
```

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
$group = 'group_example'; // string | Unique identifier of a Flat group
$parent = 'parent_example'; // string | Filter the score forked from the score id `parent`

try {
    $result = $apiInstance->getGroupScores($group, $parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupScores: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group** | **string**| Unique identifier of a Flat group | |
| **parent** | **string**| Filter the score forked from the score id &#x60;parent&#x60; | [optional] |

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

## `listGroupUsers()`

```php
listGroupUsers($group, $source): \Flat\APIClient\Model\UserPublic[]
```

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
$group = 'group_example'; // string | Unique identifier of a Flat group
$source = 'source_example'; // string | Filter the users by their source

try {
    $result = $apiInstance->listGroupUsers($group, $source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->listGroupUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group** | **string**| Unique identifier of a Flat group | |
| **source** | **string**| Filter the users by their source | [optional] |

### Return type

[**\Flat\APIClient\Model\UserPublic[]**](../Model/UserPublic.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGroups()`

```php
listGroups($type, $classroom, $assignment): \Flat\APIClient\Model\GroupDetails[]
```

List groups

List all groups of a given type, filtered by either a classroom or an assignment.

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
$type = 'type_example'; // string
$classroom = 'classroom_example'; // string | Classroom ID to filter by
$assignment = 'assignment_example'; // string | Assignment ID to filter by

try {
    $result = $apiInstance->listGroups($type, $classroom, $assignment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->listGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**|  | |
| **classroom** | **string**| Classroom ID to filter by | [optional] |
| **assignment** | **string**| Assignment ID to filter by | [optional] |

### Return type

[**\Flat\APIClient\Model\GroupDetails[]**](../Model/GroupDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeGroupUser()`

```php
removeGroupUser($group, $user)
```

Remove a student from a class group

Remove a student from a class group

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
$group = 'group_example'; // string | Unique identifier of a Flat group
$user = 'user_example'; // string | User ID

try {
    $apiInstance->removeGroupUser($group, $user);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->removeGroupUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group** | **string**| Unique identifier of a Flat group | |
| **user** | **string**| User ID | |

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

## `renameGroup()`

```php
renameGroup($group, $rename_group_request): \Flat\APIClient\Model\GroupDetails
```

Rename a group

Rename a sub-group. Only available for class student groups.

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
$group = 'group_example'; // string | Unique identifier of a Flat group
$rename_group_request = new \Flat\APIClient\Model\RenameGroupRequest(); // \Flat\APIClient\Model\RenameGroupRequest

try {
    $result = $apiInstance->renameGroup($group, $rename_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->renameGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group** | **string**| Unique identifier of a Flat group | |
| **rename_group_request** | [**\Flat\APIClient\Model\RenameGroupRequest**](../Model/RenameGroupRequest.md)|  | |

### Return type

[**\Flat\APIClient\Model\GroupDetails**](../Model/GroupDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
