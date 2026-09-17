# Flat\APIClient\ClassApi

All URIs are relative to https://api.flat.io/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateClass()**](ClassApi.md#activateClass) | **POST** /classes/{class}/activate | Activate the class |
| [**addClassUser()**](ClassApi.md#addClassUser) | **PUT** /classes/{class}/users/{user} | Add a user to the class |
| [**archiveAssignment()**](ClassApi.md#archiveAssignment) | **POST** /classes/{class}/assignments/{assignment}/archive | Archive the assignment |
| [**archiveClass()**](ClassApi.md#archiveClass) | **POST** /classes/{class}/archive | Archive the class |
| [**copyAssignment()**](ClassApi.md#copyAssignment) | **POST** /classes/{class}/assignments/{assignment}/copy | Copy an assignment |
| [**createClass()**](ClassApi.md#createClass) | **POST** /classes | Create a new class |
| [**createClassAssignment()**](ClassApi.md#createClassAssignment) | **POST** /classes/{class}/assignments | Assignment creation |
| [**createSubmission()**](ClassApi.md#createSubmission) | **PUT** /classes/{class}/assignments/{assignment}/submissions | Create or edit a submission |
| [**createTestStudentAccount()**](ClassApi.md#createTestStudentAccount) | **POST** /classes/{class}/testStudent | Create a test student account |
| [**deleteAssignment()**](ClassApi.md#deleteAssignment) | **DELETE** /classes/{class}/assignments/{assignment} | Delete an assignment |
| [**deleteClassUser()**](ClassApi.md#deleteClassUser) | **DELETE** /classes/{class}/users/{user} | Remove a user from the class |
| [**deleteSubmission()**](ClassApi.md#deleteSubmission) | **DELETE** /classes/{class}/assignments/{assignment}/submissions/{submission} | Reset a submission |
| [**deleteSubmissionComment()**](ClassApi.md#deleteSubmissionComment) | **DELETE** /classes/{class}/assignments/{assignment}/submissions/{submission}/comments/{comment} | Delete a feedback comment to a submission |
| [**editSubmission()**](ClassApi.md#editSubmission) | **PUT** /classes/{class}/assignments/{assignment}/submissions/{submission} | Edit a submission |
| [**enrollClass()**](ClassApi.md#enrollClass) | **POST** /classes/enroll/{enrollmentCode} | Join a class |
| [**exportSubmissionsReviewsAsCsv()**](ClassApi.md#exportSubmissionsReviewsAsCsv) | **GET** /classes/{class}/assignments/{assignment}/submissions/csv | CSV Grades exports |
| [**exportSubmissionsReviewsAsExcel()**](ClassApi.md#exportSubmissionsReviewsAsExcel) | **GET** /classes/{class}/assignments/{assignment}/submissions/excel | Excel Grades exports |
| [**getAssignment()**](ClassApi.md#getAssignment) | **GET** /classes/{class}/assignments/{assignment} | Get an assignment |
| [**getClass()**](ClassApi.md#getClass) | **GET** /classes/{class} | Get the details of a single class |
| [**getScoreSubmissions()**](ClassApi.md#getScoreSubmissions) | **GET** /scores/{score}/submissions | List submissions related to the score |
| [**getSubmission()**](ClassApi.md#getSubmission) | **GET** /classes/{class}/assignments/{assignment}/submissions/{submission} | Get a student submission |
| [**getSubmissionComments()**](ClassApi.md#getSubmissionComments) | **GET** /classes/{class}/assignments/{assignment}/submissions/{submission}/comments | List the feedback comments of a submission |
| [**getSubmissionHistory()**](ClassApi.md#getSubmissionHistory) | **GET** /classes/{class}/assignments/{assignment}/submissions/{submission}/history | Get the history of the submission |
| [**getSubmissions()**](ClassApi.md#getSubmissions) | **GET** /classes/{class}/assignments/{assignment}/submissions | List the students&#39; submissions |
| [**listAssignments()**](ClassApi.md#listAssignments) | **GET** /classes/{class}/assignments | Assignments listing |
| [**listClassStudentSubmissions()**](ClassApi.md#listClassStudentSubmissions) | **GET** /classes/{class}/students/{user}/submissions | List the submissions for a student |
| [**listClasses()**](ClassApi.md#listClasses) | **GET** /classes | List the classes available for the current user |
| [**postSubmissionComment()**](ClassApi.md#postSubmissionComment) | **POST** /classes/{class}/assignments/{assignment}/submissions/{submission}/comments | Add a feedback comment to a submission |
| [**unarchiveAssignment()**](ClassApi.md#unarchiveAssignment) | **DELETE** /classes/{class}/assignments/{assignment}/archive | Unarchive the assignment. |
| [**unarchiveClass()**](ClassApi.md#unarchiveClass) | **DELETE** /classes/{class}/archive | Unarchive the class |
| [**updateClass()**](ClassApi.md#updateClass) | **PUT** /classes/{class} | Update the class |
| [**updateClassAssignment()**](ClassApi.md#updateClassAssignment) | **PUT** /classes/{class}/assignments/{assignment} | Update an assignment |
| [**updateSubmissionComment()**](ClassApi.md#updateSubmissionComment) | **PUT** /classes/{class}/assignments/{assignment}/submissions/{submission}/comments/{comment} | Update a feedback comment to a submission |


## `activateClass()`

```php
activateClass($class): \Flat\APIClient\Model\ClassDetails
```

Activate the class

Mark the class as `active`. This is mainly used for classes synchronized from Clever that are initially with an `inactive` state and hidden in the UI.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class

try {
    $result = $apiInstance->activateClass($class);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->activateClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |

### Return type

[**\Flat\APIClient\Model\ClassDetails**](../Model/ClassDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addClassUser()`

```php
addClassUser($class, $user)
```

Add a user to the class

This method can be used by a teacher of the class to enroll another Flat user into the class.  Only users that are part of your Organization can be enrolled in a class of this same Organization.  When enrolling a user in the class, Flat will automatically add this user to the corresponding Class group, based on their role in the Organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$user = 'user_example'; // string | Unique identifier of the user

try {
    $apiInstance->addClassUser($class, $user);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->addClassUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **user** | **string**| Unique identifier of the user | |

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

## `archiveAssignment()`

```php
archiveAssignment($class, $assignment): \Flat\APIClient\Model\Assignment
```

Archive the assignment

Archive the assignment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$assignment = 'assignment_example'; // string | Unique identifier of the assignment

try {
    $result = $apiInstance->archiveAssignment($class, $assignment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->archiveAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **assignment** | **string**| Unique identifier of the assignment | |

### Return type

[**\Flat\APIClient\Model\Assignment**](../Model/Assignment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `archiveClass()`

```php
archiveClass($class): \Flat\APIClient\Model\ClassDetails
```

Archive the class

Mark the class as `archived`. When this course is synchronized with another app, like Google Classroom, this state will automatically be updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class

try {
    $result = $apiInstance->archiveClass($class);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->archiveClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |

### Return type

[**\Flat\APIClient\Model\ClassDetails**](../Model/ClassDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `copyAssignment()`

```php
copyAssignment($class, $assignment, $body): \Flat\APIClient\Model\AssignmentCopyResponse
```

Copy an assignment

Copy an assignment to a specified class or the resource library  For class assignments: - If the original assignment has a due date in the past, this new assignment will be created without a due date. - If the class is synchronized with an external app (e.g. Google Classroom), the copied assignment will also be posted on the external app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$assignment = 'assignment_example'; // string | Unique identifier of the assignment
$body = new \Flat\APIClient\Model\AssignmentCopyToClass(); // \Flat\APIClient\Model\AssignmentCopy

try {
    $result = $apiInstance->copyAssignment($class, $assignment, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->copyAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **assignment** | **string**| Unique identifier of the assignment | |
| **body** | [**\Flat\APIClient\Model\AssignmentCopy**](../Model/AssignmentCopy.md)|  | |

### Return type

[**\Flat\APIClient\Model\AssignmentCopyResponse**](../Model/AssignmentCopyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createClass()`

```php
createClass($body): \Flat\APIClient\Model\ClassDetails
```

Create a new class

Classrooms on Flat allow you to create activities with assignments and post content to a specific group.  When creating a class, Flat automatically creates two groups: one for the teachers of the course, one for the students. The creator of this class is automatically added to the teachers group.  If the classroom is synchronized with another application like Google Classroom, some of the meta information will automatically be updated.  You can add users to this class using `PUT /classes/{class}/users/{user}`, they will automatically be added to the group based on their role on Flat. Users can also enroll themselves to this class using `POST /classes/enroll/{enrollmentCode}` and the `enrollmentCode` returned in the `ClassDetails` response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Flat\APIClient\Model\ClassCreation(); // \Flat\APIClient\Model\ClassCreation

try {
    $result = $apiInstance->createClass($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->createClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Flat\APIClient\Model\ClassCreation**](../Model/ClassCreation.md)|  | |

### Return type

[**\Flat\APIClient\Model\ClassDetails**](../Model/ClassDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createClassAssignment()`

```php
createClassAssignment($class, $body): \Flat\APIClient\Model\Assignment
```

Assignment creation

Use this method as a teacher to create and post a new assignment to a class.  If the class is synchronized with Google Classroom, the assignment will be automatically posted to your Classroom course.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$body = new \Flat\APIClient\Model\ClassAssignmentUpdate(); // \Flat\APIClient\Model\ClassAssignmentUpdate

try {
    $result = $apiInstance->createClassAssignment($class, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->createClassAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **body** | [**\Flat\APIClient\Model\ClassAssignmentUpdate**](../Model/ClassAssignmentUpdate.md)|  | |

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

## `createSubmission()`

```php
createSubmission($class, $assignment, $body): \Flat\APIClient\Model\AssignmentSubmission
```

Create or edit a submission

Use this method as a student to create, update and submit a submission related to an assignment. Students can only set `attachments`, `playback`, `exercisesIds` and `submit`. Teachers can use `PUT /classes/{class}/assignments/{assignment}/submissions/{submission}` to update a submission by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$assignment = 'assignment_example'; // string | Unique identifier of the assignment
$body = new \Flat\APIClient\Model\AssignmentSubmissionUpdate(); // \Flat\APIClient\Model\AssignmentSubmissionUpdate

try {
    $result = $apiInstance->createSubmission($class, $assignment, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->createSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **assignment** | **string**| Unique identifier of the assignment | |
| **body** | [**\Flat\APIClient\Model\AssignmentSubmissionUpdate**](../Model/AssignmentSubmissionUpdate.md)|  | |

### Return type

[**\Flat\APIClient\Model\AssignmentSubmission**](../Model/AssignmentSubmission.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTestStudentAccount()`

```php
createTestStudentAccount($class, $reset): \Flat\APIClient\Model\UserDetails
```

Create a test student account

Test student accounts can be created by teachers and admins to try out the assignments.  - They are automatically added to the class. - They can be reset using this API endpoint (a new account will be created and the previous one scheduled for deletion). - These accounts don't use a user license.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$reset = True; // bool | If true, the testing account will be re-created.

try {
    $result = $apiInstance->createTestStudentAccount($class, $reset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->createTestStudentAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **reset** | **bool**| If true, the testing account will be re-created. | [optional] |

### Return type

[**\Flat\APIClient\Model\UserDetails**](../Model/UserDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAssignment()`

```php
deleteAssignment($class, $assignment)
```

Delete an assignment

Delete an assignment. This cannot be undone, and it removes a good deal more than the assignment itself: every submission made against it, the students' dedicated copies of the attached scores, the related class stream posts and notifications, and the editor toolset.  When the class is synchronized with Google Classroom or Microsoft Teams, the assignment is deleted there too.  Requires the teacher role on the class, and the class must not be archived.  `archiveAssignment` is almost always what you want instead: it takes the assignment out of the class stream and keeps the submissions and their grades.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$assignment = 'assignment_example'; // string | Unique identifier of the assignment

try {
    $apiInstance->deleteAssignment($class, $assignment);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->deleteAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **assignment** | **string**| Unique identifier of the assignment | |

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

## `deleteClassUser()`

```php
deleteClassUser($class, $user)
```

Remove a user from the class

This method can be used by a teacher of the class to remove another user from it. Removing your own account is not allowed.  Warning: Removing a user from the class will remove the associated resources, including the submissions and feedback related to these submissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$user = 'user_example'; // string | Unique identifier of the user

try {
    $apiInstance->deleteClassUser($class, $user);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->deleteClassUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **user** | **string**| Unique identifier of the user | |

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

## `deleteSubmission()`

```php
deleteSubmission($class, $assignment, $submission): \Flat\APIClient\Model\AssignmentSubmission
```

Reset a submission

Use this method as a teacher to reset a submission and allow the student to start the assignment over

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$assignment = 'assignment_example'; // string | Unique identifier of the assignment
$submission = 'submission_example'; // string | Unique identifier of the submission

try {
    $result = $apiInstance->deleteSubmission($class, $assignment, $submission);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->deleteSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **assignment** | **string**| Unique identifier of the assignment | |
| **submission** | **string**| Unique identifier of the submission | |

### Return type

[**\Flat\APIClient\Model\AssignmentSubmission**](../Model/AssignmentSubmission.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSubmissionComment()`

```php
deleteSubmissionComment($class, $assignment, $submission, $comment)
```

Delete a feedback comment to a submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$assignment = 'assignment_example'; // string | Unique identifier of the assignment
$submission = 'submission_example'; // string | Unique identifier of the submission
$comment = 'comment_example'; // string | Unique identifier of the comment

try {
    $apiInstance->deleteSubmissionComment($class, $assignment, $submission, $comment);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->deleteSubmissionComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **assignment** | **string**| Unique identifier of the assignment | |
| **submission** | **string**| Unique identifier of the submission | |
| **comment** | **string**| Unique identifier of the comment | |

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

## `editSubmission()`

```php
editSubmission($class, $assignment, $submission, $body): \Flat\APIClient\Model\AssignmentSubmission
```

Edit a submission

Use this method as a teacher to update a submission and give feedback. Teachers can only set `return`, `draftGrade` and `grade`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$assignment = 'assignment_example'; // string | Unique identifier of the assignment
$submission = 'submission_example'; // string | Unique identifier of the submission
$body = new \Flat\APIClient\Model\AssignmentSubmissionUpdate(); // \Flat\APIClient\Model\AssignmentSubmissionUpdate

try {
    $result = $apiInstance->editSubmission($class, $assignment, $submission, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->editSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **assignment** | **string**| Unique identifier of the assignment | |
| **submission** | **string**| Unique identifier of the submission | |
| **body** | [**\Flat\APIClient\Model\AssignmentSubmissionUpdate**](../Model/AssignmentSubmissionUpdate.md)|  | |

### Return type

[**\Flat\APIClient\Model\AssignmentSubmission**](../Model/AssignmentSubmission.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enrollClass()`

```php
enrollClass($enrollment_code): \Flat\APIClient\Model\ClassDetails
```

Join a class

Use this method to join a class using an enrollment code given by one of the teachers of this class. This code is also available in the `ClassDetails` returned to the teachers when creating the class or listing / fetching a specific class.  Flat will automatically add the user to the corresponding class group based on their role in the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enrollment_code = 'enrollment_code_example'; // string | The enrollment code, available to the teacher in `ClassDetails`

try {
    $result = $apiInstance->enrollClass($enrollment_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->enrollClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enrollment_code** | **string**| The enrollment code, available to the teacher in &#x60;ClassDetails&#x60; | |

### Return type

[**\Flat\APIClient\Model\ClassDetails**](../Model/ClassDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportSubmissionsReviewsAsCsv()`

```php
exportSubmissionsReviewsAsCsv($class, $assignment): \SplFileObject
```

CSV Grades exports

Export list of submissions grades to a CSV file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$assignment = 'assignment_example'; // string | Unique identifier of the assignment

try {
    $result = $apiInstance->exportSubmissionsReviewsAsCsv($class, $assignment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->exportSubmissionsReviewsAsCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **assignment** | **string**| Unique identifier of the assignment | |

### Return type

**\SplFileObject**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportSubmissionsReviewsAsExcel()`

```php
exportSubmissionsReviewsAsExcel($class, $assignment): \SplFileObject
```

Excel Grades exports

Export list of submissions grades to an Excel file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$assignment = 'assignment_example'; // string | Unique identifier of the assignment

try {
    $result = $apiInstance->exportSubmissionsReviewsAsExcel($class, $assignment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->exportSubmissionsReviewsAsExcel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **assignment** | **string**| Unique identifier of the assignment | |

### Return type

**\SplFileObject**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssignment()`

```php
getAssignment($class, $assignment): \Flat\APIClient\Model\Assignment
```

Get an assignment

Retrieve a single assignment, including its attachments, its toolset and its grading settings. Use `listAssignments` to enumerate the assignments of a class.  A teacher of the class sees the assignment as authored. A student sees the same document with the teacher-only fields omitted, `teacherInstructions` among them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$assignment = 'assignment_example'; // string | Unique identifier of the assignment

try {
    $result = $apiInstance->getAssignment($class, $assignment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->getAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **assignment** | **string**| Unique identifier of the assignment | |

### Return type

[**\Flat\APIClient\Model\Assignment**](../Model/Assignment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClass()`

```php
getClass($class): \Flat\APIClient\Model\ClassDetails
```

Get the details of a single class

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class

try {
    $result = $apiInstance->getClass($class);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->getClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |

### Return type

[**\Flat\APIClient\Model\ClassDetails**](../Model/ClassDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScoreSubmissions()`

```php
getScoreSubmissions($score): \Flat\APIClient\Model\AssignmentSubmission[]
```

List submissions related to the score

This API call will list the different assignments submissions where the score is attached. This method can be used by anyone who is part of the organization and has at least read access to the document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).

try {
    $result = $apiInstance->getScoreSubmissions($score);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->getScoreSubmissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |

### Return type

[**\Flat\APIClient\Model\AssignmentSubmission[]**](../Model/AssignmentSubmission.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubmission()`

```php
getSubmission($class, $assignment, $submission): \Flat\APIClient\Model\AssignmentSubmission
```

Get a student submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$assignment = 'assignment_example'; // string | Unique identifier of the assignment
$submission = 'submission_example'; // string | Unique identifier of the submission

try {
    $result = $apiInstance->getSubmission($class, $assignment, $submission);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->getSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **assignment** | **string**| Unique identifier of the assignment | |
| **submission** | **string**| Unique identifier of the submission | |

### Return type

[**\Flat\APIClient\Model\AssignmentSubmission**](../Model/AssignmentSubmission.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubmissionComments()`

```php
getSubmissionComments($class, $assignment, $submission): \Flat\APIClient\Model\AssignmentSubmissionComment[]
```

List the feedback comments of a submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$assignment = 'assignment_example'; // string | Unique identifier of the assignment
$submission = 'submission_example'; // string | Unique identifier of the submission

try {
    $result = $apiInstance->getSubmissionComments($class, $assignment, $submission);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->getSubmissionComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **assignment** | **string**| Unique identifier of the assignment | |
| **submission** | **string**| Unique identifier of the submission | |

### Return type

[**\Flat\APIClient\Model\AssignmentSubmissionComment[]**](../Model/AssignmentSubmissionComment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubmissionHistory()`

```php
getSubmissionHistory($class, $assignment, $submission): \Flat\APIClient\Model\AssignmentSubmissionHistory[]
```

Get the history of the submission

For teachers only. Returns a detailed history of the submission. This currently includes state and grade histories.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$assignment = 'assignment_example'; // string | Unique identifier of the assignment
$submission = 'submission_example'; // string | Unique identifier of the submission

try {
    $result = $apiInstance->getSubmissionHistory($class, $assignment, $submission);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->getSubmissionHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **assignment** | **string**| Unique identifier of the assignment | |
| **submission** | **string**| Unique identifier of the submission | |

### Return type

[**\Flat\APIClient\Model\AssignmentSubmissionHistory[]**](../Model/AssignmentSubmissionHistory.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubmissions()`

```php
getSubmissions($class, $assignment): \Flat\APIClient\Model\AssignmentSubmission[]
```

List the students' submissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$assignment = 'assignment_example'; // string | Unique identifier of the assignment

try {
    $result = $apiInstance->getSubmissions($class, $assignment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->getSubmissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **assignment** | **string**| Unique identifier of the assignment | |

### Return type

[**\Flat\APIClient\Model\AssignmentSubmission[]**](../Model/AssignmentSubmission.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAssignments()`

```php
listAssignments($class): \Flat\APIClient\Model\ClassAssignment[]
```

Assignments listing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class

try {
    $result = $apiInstance->listAssignments($class);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->listAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |

### Return type

[**\Flat\APIClient\Model\ClassAssignment[]**](../Model/ClassAssignment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listClassStudentSubmissions()`

```php
listClassStudentSubmissions($class, $user): \Flat\APIClient\Model\AssignmentSubmission[]
```

List the submissions for a student

Use this method as a teacher to list all the assignment submissions sent by a student of the class

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$user = 'user_example'; // string | Unique identifier of the user

try {
    $result = $apiInstance->listClassStudentSubmissions($class, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->listClassStudentSubmissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **user** | **string**| Unique identifier of the user | |

### Return type

[**\Flat\APIClient\Model\AssignmentSubmission[]**](../Model/AssignmentSubmission.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listClasses()`

```php
listClasses($state): \Flat\APIClient\Model\ClassDetails[]
```

List the classes available for the current user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$state = 'active'; // string | Filter the classes by state

try {
    $result = $apiInstance->listClasses($state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->listClasses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **state** | **string**| Filter the classes by state | [optional] [default to &#39;active&#39;] |

### Return type

[**\Flat\APIClient\Model\ClassDetails[]**](../Model/ClassDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSubmissionComment()`

```php
postSubmissionComment($class, $assignment, $submission, $assignment_submission_comment_creation): \Flat\APIClient\Model\AssignmentSubmissionComment
```

Add a feedback comment to a submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$assignment = 'assignment_example'; // string | Unique identifier of the assignment
$submission = 'submission_example'; // string | Unique identifier of the submission
$assignment_submission_comment_creation = new \Flat\APIClient\Model\AssignmentSubmissionCommentCreation(); // \Flat\APIClient\Model\AssignmentSubmissionCommentCreation

try {
    $result = $apiInstance->postSubmissionComment($class, $assignment, $submission, $assignment_submission_comment_creation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->postSubmissionComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **assignment** | **string**| Unique identifier of the assignment | |
| **submission** | **string**| Unique identifier of the submission | |
| **assignment_submission_comment_creation** | [**\Flat\APIClient\Model\AssignmentSubmissionCommentCreation**](../Model/AssignmentSubmissionCommentCreation.md)|  | |

### Return type

[**\Flat\APIClient\Model\AssignmentSubmissionComment**](../Model/AssignmentSubmissionComment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unarchiveAssignment()`

```php
unarchiveAssignment($class, $assignment): \Flat\APIClient\Model\Assignment
```

Unarchive the assignment.

Mark the assignment as `active`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$assignment = 'assignment_example'; // string | Unique identifier of the assignment

try {
    $result = $apiInstance->unarchiveAssignment($class, $assignment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->unarchiveAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **assignment** | **string**| Unique identifier of the assignment | |

### Return type

[**\Flat\APIClient\Model\Assignment**](../Model/Assignment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unarchiveClass()`

```php
unarchiveClass($class): \Flat\APIClient\Model\ClassDetails
```

Unarchive the class

Mark the class as `active`. When this course is synchronized with another app, like Google Classroom, this state will automatically be updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class

try {
    $result = $apiInstance->unarchiveClass($class);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->unarchiveClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |

### Return type

[**\Flat\APIClient\Model\ClassDetails**](../Model/ClassDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateClass()`

```php
updateClass($class, $body): \Flat\APIClient\Model\ClassDetails
```

Update the class

Update the meta information of the class

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$body = new \Flat\APIClient\Model\ClassUpdate(); // \Flat\APIClient\Model\ClassUpdate | Details of the Class

try {
    $result = $apiInstance->updateClass($class, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->updateClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **body** | [**\Flat\APIClient\Model\ClassUpdate**](../Model/ClassUpdate.md)| Details of the Class | |

### Return type

[**\Flat\APIClient\Model\ClassDetails**](../Model/ClassDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateClassAssignment()`

```php
updateClassAssignment($class, $assignment, $body): \Flat\APIClient\Model\Assignment
```

Update an assignment

Update an assignment. Only the properties present in the request body are modified, so a partial body leaves everything else as it was. `attachments` is the exception: when present it replaces the whole list.  Requires the teacher role on the class. The class must not be archived, and an assignment that is already `active` cannot be moved back to `draft`.  Editing an assignment that students have already started does not reset their submissions. To take an assignment out of circulation while keeping the work, use `archiveAssignment`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$assignment = 'assignment_example'; // string | Unique identifier of the assignment
$body = new \Flat\APIClient\Model\ClassAssignmentUpdate(); // \Flat\APIClient\Model\ClassAssignmentUpdate

try {
    $result = $apiInstance->updateClassAssignment($class, $assignment, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->updateClassAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **assignment** | **string**| Unique identifier of the assignment | |
| **body** | [**\Flat\APIClient\Model\ClassAssignmentUpdate**](../Model/ClassAssignmentUpdate.md)|  | |

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

## `updateSubmissionComment()`

```php
updateSubmissionComment($class, $assignment, $submission, $comment, $assignment_submission_comment_creation): \Flat\APIClient\Model\AssignmentSubmissionComment
```

Update a feedback comment to a submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$class = 'class_example'; // string | Unique identifier of the class
$assignment = 'assignment_example'; // string | Unique identifier of the assignment
$submission = 'submission_example'; // string | Unique identifier of the submission
$comment = 'comment_example'; // string | Unique identifier of the comment
$assignment_submission_comment_creation = new \Flat\APIClient\Model\AssignmentSubmissionCommentCreation(); // \Flat\APIClient\Model\AssignmentSubmissionCommentCreation

try {
    $result = $apiInstance->updateSubmissionComment($class, $assignment, $submission, $comment, $assignment_submission_comment_creation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->updateSubmissionComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **class** | **string**| Unique identifier of the class | |
| **assignment** | **string**| Unique identifier of the assignment | |
| **submission** | **string**| Unique identifier of the submission | |
| **comment** | **string**| Unique identifier of the comment | |
| **assignment_submission_comment_creation** | [**\Flat\APIClient\Model\AssignmentSubmissionCommentCreation**](../Model/AssignmentSubmissionCommentCreation.md)|  | |

### Return type

[**\Flat\APIClient\Model\AssignmentSubmissionComment**](../Model/AssignmentSubmissionComment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
