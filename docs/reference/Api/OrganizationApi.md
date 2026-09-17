# Flat\APIClient\OrganizationApi

All URIs are relative to https://api.flat.io/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countOrgaUsers()**](OrganizationApi.md#countOrgaUsers) | **GET** /organizations/users/count | Count the organization users using the provided filters |
| [**createLtiConfiguration()**](OrganizationApi.md#createLtiConfiguration) | **POST** /organizations/lti/configurations | Create a new LTI configuration (1.1 or 1.3) |
| [**createLtiCredentials()**](OrganizationApi.md#createLtiCredentials) | **POST** /organizations/lti/credentials | Create a new pair of LTI 1.1 credentials |
| [**createOrganizationInvitation()**](OrganizationApi.md#createOrganizationInvitation) | **POST** /organizations/invitations | Create a new invitation to join the organization |
| [**createOrganizationUser()**](OrganizationApi.md#createOrganizationUser) | **POST** /organizations/users | Create a new user account |
| [**createOrganizationUserAccessToken()**](OrganizationApi.md#createOrganizationUserAccessToken) | **POST** /organizations/users/{user}/accessToken | Create a delegated API access token for an organization user |
| [**createOrganizationUserSigninLink()**](OrganizationApi.md#createOrganizationUserSigninLink) | **POST** /organizations/users/{user}/signinLink | Create a sign in link for an organization user |
| [**deleteLtiConfiguration()**](OrganizationApi.md#deleteLtiConfiguration) | **DELETE** /organizations/lti/configurations/{configuration} | Delete an LTI configuration |
| [**listLtiConfigurations()**](OrganizationApi.md#listLtiConfigurations) | **GET** /organizations/lti/configurations | List LTI configurations (1.1 and 1.3) |
| [**listLtiCredentials()**](OrganizationApi.md#listLtiCredentials) | **GET** /organizations/lti/credentials | List LTI 1.x credentials |
| [**listOrganizationInvitations()**](OrganizationApi.md#listOrganizationInvitations) | **GET** /organizations/invitations | List the organization invitations |
| [**listOrganizationUsers()**](OrganizationApi.md#listOrganizationUsers) | **GET** /organizations/users | List the organization users |
| [**removeOrganizationInvitation()**](OrganizationApi.md#removeOrganizationInvitation) | **DELETE** /organizations/invitations/{invitation} | Remove an organization invitation |
| [**removeOrganizationUser()**](OrganizationApi.md#removeOrganizationUser) | **DELETE** /organizations/users/{user} | Remove an account from Flat |
| [**revokeLtiCredentials()**](OrganizationApi.md#revokeLtiCredentials) | **DELETE** /organizations/lti/credentials/{credentials} | Revoke LTI 1.x credentials |
| [**updateLtiConfiguration()**](OrganizationApi.md#updateLtiConfiguration) | **PUT** /organizations/lti/configurations/{configuration} | Update an existing LTI configuration (edit 1.3; 1.1 not editable) |
| [**updateOrganizationUser()**](OrganizationApi.md#updateOrganizationUser) | **PUT** /organizations/users/{user} | Update account information |


## `countOrgaUsers()`

```php
countOrgaUsers($role, $q, $group, $no_active_license, $test_accounts): int
```

Count the organization users using the provided filters

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
$role = array('role_example'); // string[] | Filter users by role
$q = 'q_example'; // string | The query to search
$group = array('group_example'); // string[] | Filter users by group
$no_active_license = True; // bool | Filter users who don't have an active license
$test_accounts = 'test_accounts_example'; // string | Filter users based on test account status. Test accounts are student accounts created for testing purposes by teachers.  * `exclude`: Hide test accounts from results. * `only`: Show only test accounts.  When omitted, all users are returned.

try {
    $result = $apiInstance->countOrgaUsers($role, $q, $group, $no_active_license, $test_accounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->countOrgaUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role** | [**string[]**](../Model/string.md)| Filter users by role | [optional] |
| **q** | **string**| The query to search | [optional] |
| **group** | [**string[]**](../Model/string.md)| Filter users by group | [optional] |
| **no_active_license** | **bool**| Filter users who don&#39;t have an active license | [optional] |
| **test_accounts** | **string**| Filter users based on test account status. Test accounts are student accounts created for testing purposes by teachers.  * &#x60;exclude&#x60;: Hide test accounts from results. * &#x60;only&#x60;: Show only test accounts.  When omitted, all users are returned. | [optional] |

### Return type

**int**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLtiConfiguration()`

```php
createLtiConfiguration($lti_configuration_create): \Flat\APIClient\Model\LtiConfiguration
```

Create a new LTI configuration (1.1 or 1.3)

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
$lti_configuration_create = new \Flat\APIClient\Model\LtiConfigurationCreate1p1(); // \Flat\APIClient\Model\LtiConfigurationCreate

try {
    $result = $apiInstance->createLtiConfiguration($lti_configuration_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->createLtiConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lti_configuration_create** | [**\Flat\APIClient\Model\LtiConfigurationCreate**](../Model/LtiConfigurationCreate.md)|  | |

### Return type

[**\Flat\APIClient\Model\LtiConfiguration**](../Model/LtiConfiguration.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLtiCredentials()`

```php
createLtiCredentials($body): \Flat\APIClient\Model\LtiCredentials
```

Create a new pair of LTI 1.1 credentials

DEPRECATED. Use the unified endpoints under `/organizations/lti/configurations`. Note: Teachers may be restricted by the organization privacy setting `lti1p1AllowTeachersCredentials`.  Flat for Education is a Certified LTI Provider. You can use these API methods to automate the creation of LTI credentials. You can read more about our LTI implementation, supported components and LTI Endpoints in our [Developer Documentation](https://flat.io/developers/docs/lti/).

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
$body = new \Flat\APIClient\Model\LtiCredentialsCreation(); // \Flat\APIClient\Model\LtiCredentialsCreation

try {
    $result = $apiInstance->createLtiCredentials($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->createLtiCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Flat\APIClient\Model\LtiCredentialsCreation**](../Model/LtiCredentialsCreation.md)|  | |

### Return type

[**\Flat\APIClient\Model\LtiCredentials**](../Model/LtiCredentials.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationInvitation()`

```php
createOrganizationInvitation($body): \Flat\APIClient\Model\OrganizationInvitation
```

Create a new invitation to join the organization

This method creates and sends an invitation for teachers and admins.  Invitations can only be used by new Flat users or users who are not part of the organization yet.  If the email of the user is already associated to a user of your organization, the API will simply update the role of the existing user and won't send an invitation. In this case, the property `usedBy` will be directly filled with the unique identifier of the corresponding user.

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
$body = new \Flat\APIClient\Model\OrganizationInvitationCreation(); // \Flat\APIClient\Model\OrganizationInvitationCreation

try {
    $result = $apiInstance->createOrganizationInvitation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->createOrganizationInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Flat\APIClient\Model\OrganizationInvitationCreation**](../Model/OrganizationInvitationCreation.md)|  | |

### Return type

[**\Flat\APIClient\Model\OrganizationInvitation**](../Model/OrganizationInvitation.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationUser()`

```php
createOrganizationUser($body): \Flat\APIClient\Model\UserDetailsAdmin
```

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
$body = new \Flat\APIClient\Model\UserCreation(); // \Flat\APIClient\Model\UserCreation

try {
    $result = $apiInstance->createOrganizationUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->createOrganizationUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Flat\APIClient\Model\UserCreation**](../Model/UserCreation.md)|  | |

### Return type

[**\Flat\APIClient\Model\UserDetailsAdmin**](../Model/UserDetailsAdmin.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationUserAccessToken()`

```php
createOrganizationUserAccessToken($user, $organization_user_access_token_creation): \Flat\APIClient\Model\ApiAccessToken
```

Create a delegated API access token for an organization user

This operation will create an API access token for a chosen organization user. This token will be valid for a limited time and can be used to access the API as the organization user.

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
$user = 'user_example'; // string | Unique identifier of the Flat account
$organization_user_access_token_creation = new \Flat\APIClient\Model\OrganizationUserAccessTokenCreation(); // \Flat\APIClient\Model\OrganizationUserAccessTokenCreation

try {
    $result = $apiInstance->createOrganizationUserAccessToken($user, $organization_user_access_token_creation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->createOrganizationUserAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user** | **string**| Unique identifier of the Flat account | |
| **organization_user_access_token_creation** | [**\Flat\APIClient\Model\OrganizationUserAccessTokenCreation**](../Model/OrganizationUserAccessTokenCreation.md)|  | |

### Return type

[**\Flat\APIClient\Model\ApiAccessToken**](../Model/ApiAccessToken.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrganizationUserSigninLink()`

```php
createOrganizationUserSigninLink($user, $user_signin_link_creation): \Flat\APIClient\Model\UserSigninLink
```

Create a sign in link for an organization user

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
$user = 'user_example'; // string | Unique identifier of the Flat account
$user_signin_link_creation = new \Flat\APIClient\Model\UserSigninLinkCreation(); // \Flat\APIClient\Model\UserSigninLinkCreation

try {
    $result = $apiInstance->createOrganizationUserSigninLink($user, $user_signin_link_creation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->createOrganizationUserSigninLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user** | **string**| Unique identifier of the Flat account | |
| **user_signin_link_creation** | [**\Flat\APIClient\Model\UserSigninLinkCreation**](../Model/UserSigninLinkCreation.md)|  | |

### Return type

[**\Flat\APIClient\Model\UserSigninLink**](../Model/UserSigninLink.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLtiConfiguration()`

```php
deleteLtiConfiguration($configuration)
```

Delete an LTI configuration

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
$configuration = 'configuration_example'; // string | Configuration unique identifier

try {
    $apiInstance->deleteLtiConfiguration($configuration);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->deleteLtiConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **configuration** | **string**| Configuration unique identifier | |

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

## `listLtiConfigurations()`

```php
listLtiConfigurations(): \Flat\APIClient\Model\LtiConfiguration[]
```

List LTI configurations (1.1 and 1.3)

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
    $result = $apiInstance->listLtiConfigurations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->listLtiConfigurations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Flat\APIClient\Model\LtiConfiguration[]**](../Model/LtiConfiguration.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLtiCredentials()`

```php
listLtiCredentials(): \Flat\APIClient\Model\LtiCredentials[]
```

List LTI 1.x credentials

DEPRECATED. Use the unified endpoints under `/organizations/lti/configurations`. Note: Teachers may be restricted by the organization privacy setting `lti1p1AllowTeachersCredentials`.

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Flat\APIClient\Model\LtiCredentials[]**](../Model/LtiCredentials.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrganizationInvitations()`

```php
listOrganizationInvitations($role, $limit, $next, $previous): \Flat\APIClient\Model\OrganizationInvitation[]
```

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
$role = 'role_example'; // string | Filter users by role
$limit = 50; // int | This is the maximum number of objects that may be returned
$next = 'next_example'; // string | An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.
$previous = 'previous_example'; // string | An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.

try {
    $result = $apiInstance->listOrganizationInvitations($role, $limit, $next, $previous);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->listOrganizationInvitations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role** | **string**| Filter users by role | [optional] |
| **limit** | **int**| This is the maximum number of objects that may be returned | [optional] [default to 50] |
| **next** | **string**| An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional] |
| **previous** | **string**| An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional] |

### Return type

[**\Flat\APIClient\Model\OrganizationInvitation[]**](../Model/OrganizationInvitation.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrganizationUsers()`

```php
listOrganizationUsers($sort, $direction, $next, $previous, $role, $q, $group, $no_active_license, $test_accounts, $license_expiration_date, $only_ids, $limit): \Flat\APIClient\Model\UserDetailsAdmin[]
```

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
$sort = 'sort_example'; // string | The order to sort the user list.  * `creationDate`: Order by account creation. * `firstname`, `lastname`, `username`: Order by the user identity. * `lastActivityDate`: Order by the last recorded activity. * `licenseExpirationDate`: Order by the expiration of the active license.
$direction = 'direction_example'; // string | Sort direction
$next = 'next_example'; // string | An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.
$previous = 'previous_example'; // string | An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.
$role = array('role_example'); // string[] | Filter users by role
$q = 'q_example'; // string | The query to search
$group = array('group_example'); // string[] | Filter users by group
$no_active_license = True; // bool | Filter users who don't have an active license
$test_accounts = 'test_accounts_example'; // string | Filter users based on test account status. Test accounts are student accounts created for testing purposes by teachers.  * `exclude`: Hide test accounts from results. * `only`: Show only test accounts.  When omitted, all users are returned.
$license_expiration_date = array('license_expiration_date_example'); // string[] | Filter users by license expiration date or `active` / `notActive`
$only_ids = True; // bool | Return only user ids
$limit = 25; // int | This is the maximum number of objects that may be returned

try {
    $result = $apiInstance->listOrganizationUsers($sort, $direction, $next, $previous, $role, $q, $group, $no_active_license, $test_accounts, $license_expiration_date, $only_ids, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->listOrganizationUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sort** | **string**| The order to sort the user list.  * &#x60;creationDate&#x60;: Order by account creation. * &#x60;firstname&#x60;, &#x60;lastname&#x60;, &#x60;username&#x60;: Order by the user identity. * &#x60;lastActivityDate&#x60;: Order by the last recorded activity. * &#x60;licenseExpirationDate&#x60;: Order by the expiration of the active license. | [optional] |
| **direction** | **string**| Sort direction | [optional] |
| **next** | **string**| An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional] |
| **previous** | **string**| An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional] |
| **role** | [**string[]**](../Model/string.md)| Filter users by role | [optional] |
| **q** | **string**| The query to search | [optional] |
| **group** | [**string[]**](../Model/string.md)| Filter users by group | [optional] |
| **no_active_license** | **bool**| Filter users who don&#39;t have an active license | [optional] |
| **test_accounts** | **string**| Filter users based on test account status. Test accounts are student accounts created for testing purposes by teachers.  * &#x60;exclude&#x60;: Hide test accounts from results. * &#x60;only&#x60;: Show only test accounts.  When omitted, all users are returned. | [optional] |
| **license_expiration_date** | [**string[]**](../Model/string.md)| Filter users by license expiration date or &#x60;active&#x60; / &#x60;notActive&#x60; | [optional] |
| **only_ids** | **bool**| Return only user ids | [optional] |
| **limit** | **int**| This is the maximum number of objects that may be returned | [optional] [default to 25] |

### Return type

[**\Flat\APIClient\Model\UserDetailsAdmin[]**](../Model/UserDetailsAdmin.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeOrganizationInvitation()`

```php
removeOrganizationInvitation($invitation)
```

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
$invitation = 'invitation_example'; // string | Unique identifier of the invitation

try {
    $apiInstance->removeOrganizationInvitation($invitation);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->removeOrganizationInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invitation** | **string**| Unique identifier of the invitation | |

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

## `removeOrganizationUser()`

```php
removeOrganizationUser($user, $convert_to_individual)
```

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
$user = 'user_example'; // string | Unique identifier of the Flat account
$convert_to_individual = True; // bool | If `true`, the account will be only removed from the organization and converted into an individual account on our public website, https://flat.io. This operation will remove the education-related data from the account. Before performing this operation, you need to be sure that the user is at least 13 years old and has read and agreed to the Individual Terms of Service of Flat available on https://flat.io/legal.

try {
    $apiInstance->removeOrganizationUser($user, $convert_to_individual);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->removeOrganizationUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user** | **string**| Unique identifier of the Flat account | |
| **convert_to_individual** | **bool**| If &#x60;true&#x60;, the account will be only removed from the organization and converted into an individual account on our public website, https://flat.io. This operation will remove the education-related data from the account. Before performing this operation, you need to be sure that the user is at least 13 years old and has read and agreed to the Individual Terms of Service of Flat available on https://flat.io/legal. | [optional] |

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

## `revokeLtiCredentials()`

```php
revokeLtiCredentials($credentials)
```

Revoke LTI 1.x credentials

DEPRECATED. Use the unified endpoints under `/organizations/lti/configurations`. Note: Teachers may be restricted by the organization privacy setting `lti1p1AllowTeachersCredentials`.

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
$credentials = 'credentials_example'; // string | Credentials unique identifier

try {
    $apiInstance->revokeLtiCredentials($credentials);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->revokeLtiCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credentials** | **string**| Credentials unique identifier | |

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

## `updateLtiConfiguration()`

```php
updateLtiConfiguration($configuration, $lti_configuration_update): \Flat\APIClient\Model\LtiConfiguration
```

Update an existing LTI configuration (edit 1.3; 1.1 not editable)

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
$configuration = 'configuration_example'; // string | Configuration unique identifier
$lti_configuration_update = new \Flat\APIClient\Model\LtiConfigurationUpdate(); // \Flat\APIClient\Model\LtiConfigurationUpdate

try {
    $result = $apiInstance->updateLtiConfiguration($configuration, $lti_configuration_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->updateLtiConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **configuration** | **string**| Configuration unique identifier | |
| **lti_configuration_update** | [**\Flat\APIClient\Model\LtiConfigurationUpdate**](../Model/LtiConfigurationUpdate.md)|  | |

### Return type

[**\Flat\APIClient\Model\LtiConfiguration**](../Model/LtiConfiguration.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrganizationUser()`

```php
updateOrganizationUser($user, $body): \Flat\APIClient\Model\UserDetailsAdmin
```

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
$user = 'user_example'; // string | Unique identifier of the Flat account
$body = new \Flat\APIClient\Model\UserAdminUpdate(); // \Flat\APIClient\Model\UserAdminUpdate

try {
    $result = $apiInstance->updateOrganizationUser($user, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->updateOrganizationUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user** | **string**| Unique identifier of the Flat account | |
| **body** | [**\Flat\APIClient\Model\UserAdminUpdate**](../Model/UserAdminUpdate.md)|  | |

### Return type

[**\Flat\APIClient\Model\UserDetailsAdmin**](../Model/UserDetailsAdmin.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
