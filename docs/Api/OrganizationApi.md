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
[**revokeLtiCredentials**](OrganizationApi.md#revokeLtiCredentials) | **DELETE** /organizations/lti/credentials/{credentials} | Revoke LTI 1.x credentials


# **createLtiCredentials**
> \Flat\APIClient\Model\LtiCredentials createLtiCredentials($body)

Create a new couple of LTI 1.x credentials

Flat for Education is a Certified LTI Provider. You can use these API methods to automate the creation of LTI credentials. You can read more about our LTI implementation, supported components and LTI Endpoints in our [Developer Documentation](https://flat.io/developers/docs/lti/).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\OrganizationApi();
$body = new \Flat\APIClient\Model\LtiCredentialsCreation(); // \Flat\APIClient\Model\LtiCredentialsCreation | 

try {
    $result = $api_instance->createLtiCredentials($body);
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
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\OrganizationApi();
$body = new \Flat\APIClient\Model\OrganizationInvitationCreation(); // \Flat\APIClient\Model\OrganizationInvitationCreation | 

try {
    $result = $api_instance->createOrganizationInvitation($body);
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
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\OrganizationApi();
$body = new \Flat\APIClient\Model\UserCreation(); // \Flat\APIClient\Model\UserCreation | 

try {
    $result = $api_instance->createOrganizationUser($body);
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
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\OrganizationApi();

try {
    $result = $api_instance->listLtiCredentials();
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
> \Flat\APIClient\Model\OrganizationInvitation[] listOrganizationInvitations($role, $limit, $offset)

List the organization invitations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\OrganizationApi();
$role = "role_example"; // string | Filter users by role
$limit = 100; // int | This is the maximum number of objects that may be returned
$offset = 0; // int | This offsets the start of each page by the number specified

try {
    $result = $api_instance->listOrganizationInvitations($role, $limit, $offset);
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
 **limit** | **int**| This is the maximum number of objects that may be returned | [optional] [default to 100]
 **offset** | **int**| This offsets the start of each page by the number specified | [optional] [default to 0]

### Return type

[**\Flat\APIClient\Model\OrganizationInvitation[]**](../Model/OrganizationInvitation.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrganizationUsers**
> \Flat\APIClient\Model\UserDetailsAdmin[] listOrganizationUsers($role, $limit, $offset)

List the organization users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\OrganizationApi();
$role = "role_example"; // string | Filter users by role
$limit = 100; // int | This is the maximum number of objects that may be returned
$offset = 0; // int | This offsets the start of each page by the number specified

try {
    $result = $api_instance->listOrganizationUsers($role, $limit, $offset);
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
 **limit** | **int**| This is the maximum number of objects that may be returned | [optional] [default to 100]
 **offset** | **int**| This offsets the start of each page by the number specified | [optional] [default to 0]

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
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\OrganizationApi();
$invitation = "invitation_example"; // string | Unique identifier of the invitation

try {
    $api_instance->removeOrganizationInvitation($invitation);
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

# **revokeLtiCredentials**
> revokeLtiCredentials($credentials)

Revoke LTI 1.x credentials

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\OrganizationApi();
$credentials = "credentials_example"; // string | Credentials unique identifier

try {
    $api_instance->revokeLtiCredentials($credentials);
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

