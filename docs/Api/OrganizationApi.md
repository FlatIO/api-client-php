# Flat\APIClient\OrganizationApi

All URIs are relative to *https://api.flat.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLtiCredentials**](OrganizationApi.md#createLtiCredentials) | **POST** /organizations/lti/credentials | Create a new couple of LTI 1.x credentials
[**createOrganizationInvitation**](OrganizationApi.md#createOrganizationInvitation) | **POST** /organizations/invitations | Create a new invitation to join the organization
[**createOrganizationUser**](OrganizationApi.md#createOrganizationUser) | **POST** /organizations/users | Create a new user account
[**listLtiCredentials**](OrganizationApi.md#listLtiCredentials) | **GET** /organizations/lti/credentials | List LTI 1.x credentials
[**listOrganizationInvitations**](OrganizationApi.md#listOrganizationInvitations) | **GET** /organizations/invitations | List the organization invitations
[**listOrganizationUsers**](OrganizationApi.md#listOrganizationUsers) | **GET** /organizations/users | List the organization users
[**removeOrganizationInvitation**](OrganizationApi.md#removeOrganizationInvitation) | **DELETE** /organizations/invitations/{invitation} | Remove an organization invitation
[**removeOrganizationUser**](OrganizationApi.md#removeOrganizationUser) | **DELETE** /organizations/users/{user} | Remove an account from Flat
[**revokeLtiCredentials**](OrganizationApi.md#revokeLtiCredentials) | **DELETE** /organizations/lti/credentials/{credentials} | Revoke LTI 1.x credentials
[**updateOrganizationUser**](OrganizationApi.md#updateOrganizationUser) | **PUT** /organizations/users/{user} | Update account information


# **createLtiCredentials**
> \Flat\APIClient\Model\LtiCredentials createLtiCredentials($body)

Create a new couple of LTI 1.x credentials

Flat for Education is a Certified LTI Provider. You can use these API methods to automate the creation of LTI credentials. You can read more about our LTI implementation, supported components and LTI Endpoints in our [Developer Documentation](https://flat.io/developers/docs/lti/).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Flat\APIClient\Model\LtiCredentialsCreation(); // \Flat\APIClient\Model\LtiCredentialsCreation | 

try {
    $result = $apiInstance->createLtiCredentials($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->createLtiCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Flat\APIClient\Model\LtiCredentialsCreation**](../Model/LtiCredentialsCreation.md)|  |

### Return type

[**\Flat\APIClient\Model\LtiCredentials**](../Model/LtiCredentials.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrganizationInvitation**
> \Flat\APIClient\Model\OrganizationInvitation createOrganizationInvitation($body)

Create a new invitation to join the organization

This method creates and sends invitation for teachers and admins.  Invitations can only be used by new Flat users or users who are not part of the organization yet.  If the email of the user is already associated to a user of your organization, the API will simply update the role of the existing user and won't send an invitation. In this case, the property `usedBy` will be directly filled with the uniquer identifier of the corresponding user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Flat\APIClient\Model\OrganizationInvitationCreation(); // \Flat\APIClient\Model\OrganizationInvitationCreation | 

try {
    $result = $apiInstance->createOrganizationInvitation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->createOrganizationInvitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Flat\APIClient\Model\OrganizationInvitationCreation**](../Model/OrganizationInvitationCreation.md)|  | [optional]

### Return type

[**\Flat\APIClient\Model\OrganizationInvitation**](../Model/OrganizationInvitation.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrganizationUser**
> \Flat\APIClient\Model\UserDetailsAdmin createOrganizationUser($body)

Create a new user account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Flat\APIClient\Model\UserCreation(); // \Flat\APIClient\Model\UserCreation | 

try {
    $result = $apiInstance->createOrganizationUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->createOrganizationUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Flat\APIClient\Model\UserCreation**](../Model/UserCreation.md)|  | [optional]

### Return type

[**\Flat\APIClient\Model\UserDetailsAdmin**](../Model/UserDetailsAdmin.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listLtiCredentials**
> \Flat\APIClient\Model\LtiCredentials[] listLtiCredentials()

List LTI 1.x credentials

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listLtiCredentials();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->listLtiCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Flat\APIClient\Model\LtiCredentials[]**](../Model/LtiCredentials.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrganizationInvitations**
> \Flat\APIClient\Model\OrganizationInvitation[] listOrganizationInvitations($role, $limit, $next, $previous)

List the organization invitations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role = "role_example"; // string | Filter users by role
$limit = 50; // int | This is the maximum number of objects that may be returned
$next = "next_example"; // string | An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.
$previous = "previous_example"; // string | An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.

try {
    $result = $apiInstance->listOrganizationInvitations($role, $limit, $next, $previous);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->listOrganizationInvitations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role** | **string**| Filter users by role | [optional]
 **limit** | **int**| This is the maximum number of objects that may be returned | [optional] [default to 50]
 **next** | **string**| An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional]
 **previous** | **string**| An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional]

### Return type

[**\Flat\APIClient\Model\OrganizationInvitation[]**](../Model/OrganizationInvitation.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrganizationUsers**
> \Flat\APIClient\Model\UserDetailsAdmin[] listOrganizationUsers($role, $limit, $next, $previous)

List the organization users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role = "role_example"; // string | Filter users by role
$limit = 50; // int | This is the maximum number of objects that may be returned
$next = "next_example"; // string | An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.
$previous = "previous_example"; // string | An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.

try {
    $result = $apiInstance->listOrganizationUsers($role, $limit, $next, $previous);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->listOrganizationUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role** | **string**| Filter users by role | [optional]
 **limit** | **int**| This is the maximum number of objects that may be returned | [optional] [default to 50]
 **next** | **string**| An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional]
 **previous** | **string**| An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional]

### Return type

[**\Flat\APIClient\Model\UserDetailsAdmin[]**](../Model/UserDetailsAdmin.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeOrganizationInvitation**
> removeOrganizationInvitation($invitation)

Remove an organization invitation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invitation = "invitation_example"; // string | Unique identifier of the invitation

try {
    $apiInstance->removeOrganizationInvitation($invitation);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->removeOrganizationInvitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invitation** | **string**| Unique identifier of the invitation |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeOrganizationUser**
> removeOrganizationUser($user, $convertToIndividual)

Remove an account from Flat

This operation removes an account from Flat and its data, including: * The music scores created by this user (documents, history, comments, collaboration information) * Education related data (assignments and classroom information)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Unique identifier of the Flat account
$convertToIndividual = true; // bool | If `true`, the account will be only removed from the organization and converted into an individual account on our public website, https://flat.io. This operation will remove the education-related data from the account. Before realizing this operation, you need to be sure that the user is at least 13 years old and that this one has read and agreed to the Individual Terms of Services of Flat available on https://flat.io/legal.

try {
    $apiInstance->removeOrganizationUser($user, $convertToIndividual);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->removeOrganizationUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Unique identifier of the Flat account |
 **convertToIndividual** | **bool**| If &#x60;true&#x60;, the account will be only removed from the organization and converted into an individual account on our public website, https://flat.io. This operation will remove the education-related data from the account. Before realizing this operation, you need to be sure that the user is at least 13 years old and that this one has read and agreed to the Individual Terms of Services of Flat available on https://flat.io/legal. | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeLtiCredentials**
> revokeLtiCredentials($credentials)

Revoke LTI 1.x credentials

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credentials = "credentials_example"; // string | Credentials unique identifier

try {
    $apiInstance->revokeLtiCredentials($credentials);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->revokeLtiCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credentials** | **string**| Credentials unique identifier |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrganizationUser**
> \Flat\APIClient\Model\UserDetailsAdmin updateOrganizationUser($user, $body)

Update account information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Flat\APIClient\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = "user_example"; // string | Unique identifier of the Flat account
$body = new \Flat\APIClient\Model\UserAdminUpdate(); // \Flat\APIClient\Model\UserAdminUpdate | 

try {
    $result = $apiInstance->updateOrganizationUser($user, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->updateOrganizationUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Unique identifier of the Flat account |
 **body** | [**\Flat\APIClient\Model\UserAdminUpdate**](../Model/UserAdminUpdate.md)|  |

### Return type

[**\Flat\APIClient\Model\UserDetailsAdmin**](../Model/UserDetailsAdmin.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

