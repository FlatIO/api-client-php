# Flat\APIClient\ClassApi

All URIs are relative to *https://api.flat.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateClass**](ClassApi.md#activateClass) | **POST** /classes/{class}/activate | Activate the class
[**addClassUser**](ClassApi.md#addClassUser) | **PUT** /classes/{class}/users/{user} | Add a user to the class
[**archiveClass**](ClassApi.md#archiveClass) | **POST** /classes/{class}/archive | Archive the class
[**copyAssignment**](ClassApi.md#copyAssignment) | **POST** /classes/{class}/assignments/{assignment}/copy | Copy an assignment
[**createAssignment**](ClassApi.md#createAssignment) | **POST** /classes/{class}/assignments | Assignment creation
[**createClass**](ClassApi.md#createClass) | **POST** /classes | Create a new class
[**createSubmission**](ClassApi.md#createSubmission) | **PUT** /classes/{class}/assignments/{assignment}/submissions | Create or edit a submission
[**deleteClassUser**](ClassApi.md#deleteClassUser) | **DELETE** /classes/{class}/users/{user} | Remove a user from the class
[**editSubmission**](ClassApi.md#editSubmission) | **PUT** /classes/{class}/assignments/{assignment}/submissions/{submission} | Edit a submission
[**enrollClass**](ClassApi.md#enrollClass) | **POST** /classes/enroll/{enrollmentCode} | Join a class
[**getClass**](ClassApi.md#getClass) | **GET** /classes/{class} | Get the details of a single class
[**getScoreSubmissions**](ClassApi.md#getScoreSubmissions) | **GET** /scores/{score}/submissions | List submissions related to the score
[**getSubmission**](ClassApi.md#getSubmission) | **GET** /classes/{class}/assignments/{assignment}/submissions/{submission} | Get a student submission
[**getSubmissions**](ClassApi.md#getSubmissions) | **GET** /classes/{class}/assignments/{assignment}/submissions | List the students&#39; submissions
[**listAssignments**](ClassApi.md#listAssignments) | **GET** /classes/{class}/assignments | Assignments listing
[**listClassStudentSubmissions**](ClassApi.md#listClassStudentSubmissions) | **GET** /classes/{class}/students/{user}/submissions | List the submissions for a student
[**listClasses**](ClassApi.md#listClasses) | **GET** /classes | List the classes available for the current user
[**unarchiveClass**](ClassApi.md#unarchiveClass) | **DELETE** /classes/{class}/archive | Unarchive the class
[**updateClass**](ClassApi.md#updateClass) | **PUT** /classes/{class} | Update the class


# **activateClass**
> \Flat\APIClient\Model\ClassDetails activateClass($class)

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
$class = "class_example"; // string | Unique identifier of the class

try {
    $result = $apiInstance->activateClass($class);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->activateClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **class** | **string**| Unique identifier of the class |

### Return type

[**\Flat\APIClient\Model\ClassDetails**](../Model/ClassDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addClassUser**
> addClassUser($class, $user)

Add a user to the class

This method can be used by a teacher of the class to enroll another Flat user into the class.  Only users that are part of your Organization can be enrolled in a class of this same Organization.  When enrolling a user in the class, Flat will automatically add this user to the corresponding Class group, based on this role in the Organization.

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
$class = "class_example"; // string | Unique identifier of the class
$user = "user_example"; // string | Unique identifier of the user

try {
    $apiInstance->addClassUser($class, $user);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->addClassUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **class** | **string**| Unique identifier of the class |
 **user** | **string**| Unique identifier of the user |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **archiveClass**
> \Flat\APIClient\Model\ClassDetails archiveClass($class)

Archive the class

Mark the class as `archived`. When this course is synchronized with another app, like Google Classroom, this state will be automatically be updated.

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
$class = "class_example"; // string | Unique identifier of the class

try {
    $result = $apiInstance->archiveClass($class);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->archiveClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **class** | **string**| Unique identifier of the class |

### Return type

[**\Flat\APIClient\Model\ClassDetails**](../Model/ClassDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **copyAssignment**
> \Flat\APIClient\Model\Assignment copyAssignment($class, $assignment, $body)

Copy an assignment

Copy an assignment to a specified class.  If the original assignment has a due date in the past, this new assingment will be created without a due date.  If the new class is synchronized with an external app (e.g. Google Classroom), the copied assignment will also be posted on the external app.

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
$class = "class_example"; // string | Unique identifier of the class
$assignment = "assignment_example"; // string | Unique identifier of the assignment
$body = new \Flat\APIClient\Model\AssignmentCopy(); // \Flat\APIClient\Model\AssignmentCopy | 

try {
    $result = $apiInstance->copyAssignment($class, $assignment, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->copyAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **class** | **string**| Unique identifier of the class |
 **assignment** | **string**| Unique identifier of the assignment |
 **body** | [**\Flat\APIClient\Model\AssignmentCopy**](../Model/AssignmentCopy.md)|  |

### Return type

[**\Flat\APIClient\Model\Assignment**](../Model/Assignment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAssignment**
> \Flat\APIClient\Model\Assignment createAssignment($class, $body)

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
$class = "class_example"; // string | Unique identifier of the class
$body = new \Flat\APIClient\Model\AssignmentCreation(); // \Flat\APIClient\Model\AssignmentCreation | 

try {
    $result = $apiInstance->createAssignment($class, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->createAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **class** | **string**| Unique identifier of the class |
 **body** | [**\Flat\APIClient\Model\AssignmentCreation**](../Model/AssignmentCreation.md)|  | [optional]

### Return type

[**\Flat\APIClient\Model\Assignment**](../Model/Assignment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createClass**
> \Flat\APIClient\Model\ClassDetails createClass($body)

Create a new class

Classrooms on Flat allow you to create activities with assignments and post content to a specific group.  When creating a class, Flat automatically creates two groups: one for the teachers of the course, one for the students. The creator of this class is automatically added to the teachers group.  If the classsroom is synchronized with another application like Google Classroom, some of the meta information will automatically be updated.  You can add users to this class using `POST /classes/{class}/users/{user}`, they will automatically added to the group based on their role on Flat. Users can also enroll themselves to this class using `POST /classes/enroll/{enrollmentCode}` and the `enrollmentCode` returned in the `ClassDetails` response.

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
$body = new \Flat\APIClient\Model\ClassCreation(); // \Flat\APIClient\Model\ClassCreation | 

try {
    $result = $apiInstance->createClass($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->createClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Flat\APIClient\Model\ClassCreation**](../Model/ClassCreation.md)|  |

### Return type

[**\Flat\APIClient\Model\ClassDetails**](../Model/ClassDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubmission**
> \Flat\APIClient\Model\AssignmentSubmission createSubmission($class, $assignment, $body)

Create or edit a submission

Use this method as a student to create, update and submit a submission related to an assignment. Students can only set `attachments`, `studentComment` and `submit`.  Teachers can use `PUT /classes/{class}/assignments/{assignment}/submissions/{submission}` to update a submission by id.

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
$class = "class_example"; // string | Unique identifier of the class
$assignment = "assignment_example"; // string | Unique identifier of the assignment
$body = new \Flat\APIClient\Model\AssignmentSubmissionUpdate(); // \Flat\APIClient\Model\AssignmentSubmissionUpdate | 

try {
    $result = $apiInstance->createSubmission($class, $assignment, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->createSubmission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **class** | **string**| Unique identifier of the class |
 **assignment** | **string**| Unique identifier of the assignment |
 **body** | [**\Flat\APIClient\Model\AssignmentSubmissionUpdate**](../Model/AssignmentSubmissionUpdate.md)|  |

### Return type

[**\Flat\APIClient\Model\AssignmentSubmission**](../Model/AssignmentSubmission.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteClassUser**
> deleteClassUser($class, $user)

Remove a user from the class

This method can be used by a teacher to remove a user from the class, or by a student to leave the classroom.  Warning: Removing a user from the class will remove the associated resources, including the submissions and feedback related to these submissions.

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
$class = "class_example"; // string | Unique identifier of the class
$user = "user_example"; // string | Unique identifier of the user

try {
    $apiInstance->deleteClassUser($class, $user);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->deleteClassUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **class** | **string**| Unique identifier of the class |
 **user** | **string**| Unique identifier of the user |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editSubmission**
> \Flat\APIClient\Model\AssignmentSubmission editSubmission($class, $assignment, $submission, $body)

Edit a submission

Use this method as a teacher to update the different submission and give feedback. Teachers can only set `returnFeedback`

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
$class = "class_example"; // string | Unique identifier of the class
$assignment = "assignment_example"; // string | Unique identifier of the assignment
$submission = "submission_example"; // string | Unique identifier of the submission
$body = new \Flat\APIClient\Model\AssignmentSubmissionUpdate(); // \Flat\APIClient\Model\AssignmentSubmissionUpdate | 

try {
    $result = $apiInstance->editSubmission($class, $assignment, $submission, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->editSubmission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **class** | **string**| Unique identifier of the class |
 **assignment** | **string**| Unique identifier of the assignment |
 **submission** | **string**| Unique identifier of the submission |
 **body** | [**\Flat\APIClient\Model\AssignmentSubmissionUpdate**](../Model/AssignmentSubmissionUpdate.md)|  |

### Return type

[**\Flat\APIClient\Model\AssignmentSubmission**](../Model/AssignmentSubmission.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enrollClass**
> \Flat\APIClient\Model\ClassDetails enrollClass($enrollmentCode)

Join a class

Use this method to join a class using an enrollment code given one of the teacher of this class. This code is also available in the `ClassDetails` returned to the teachers when creating the class or listing / fetching a specific class.  Flat will automatically add the user to the corresponding class group based on this role in the organization.

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
$enrollmentCode = "enrollmentCode_example"; // string | The enrollment code, available to the teacher in `ClassDetails`

try {
    $result = $apiInstance->enrollClass($enrollmentCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->enrollClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enrollmentCode** | **string**| The enrollment code, available to the teacher in &#x60;ClassDetails&#x60; |

### Return type

[**\Flat\APIClient\Model\ClassDetails**](../Model/ClassDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClass**
> \Flat\APIClient\Model\ClassDetails getClass($class)

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
$class = "class_example"; // string | Unique identifier of the class

try {
    $result = $apiInstance->getClass($class);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->getClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **class** | **string**| Unique identifier of the class |

### Return type

[**\Flat\APIClient\Model\ClassDetails**](../Model/ClassDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScoreSubmissions**
> \Flat\APIClient\Model\AssignmentSubmission[] getScoreSubmissions($score)

List submissions related to the score

This API call will list the different assignments submissions where the score is attached. This method can be used by anyone that are part of the organization and have at least read access to the document.

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
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).

try {
    $result = $apiInstance->getScoreSubmissions($score);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->getScoreSubmissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |

### Return type

[**\Flat\APIClient\Model\AssignmentSubmission[]**](../Model/AssignmentSubmission.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubmission**
> \Flat\APIClient\Model\AssignmentSubmission getSubmission($class, $assignment, $submission)

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
$class = "class_example"; // string | Unique identifier of the class
$assignment = "assignment_example"; // string | Unique identifier of the assignment
$submission = "submission_example"; // string | Unique identifier of the submission

try {
    $result = $apiInstance->getSubmission($class, $assignment, $submission);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->getSubmission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **class** | **string**| Unique identifier of the class |
 **assignment** | **string**| Unique identifier of the assignment |
 **submission** | **string**| Unique identifier of the submission |

### Return type

[**\Flat\APIClient\Model\AssignmentSubmission**](../Model/AssignmentSubmission.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubmissions**
> \Flat\APIClient\Model\AssignmentSubmission[] getSubmissions($class, $assignment)

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
$class = "class_example"; // string | Unique identifier of the class
$assignment = "assignment_example"; // string | Unique identifier of the assignment

try {
    $result = $apiInstance->getSubmissions($class, $assignment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->getSubmissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **class** | **string**| Unique identifier of the class |
 **assignment** | **string**| Unique identifier of the assignment |

### Return type

[**\Flat\APIClient\Model\AssignmentSubmission[]**](../Model/AssignmentSubmission.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAssignments**
> \Flat\APIClient\Model\Assignment[] listAssignments($class)

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
$class = "class_example"; // string | Unique identifier of the class

try {
    $result = $apiInstance->listAssignments($class);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->listAssignments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **class** | **string**| Unique identifier of the class |

### Return type

[**\Flat\APIClient\Model\Assignment[]**](../Model/Assignment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listClassStudentSubmissions**
> \Flat\APIClient\Model\AssignmentSubmission[] listClassStudentSubmissions($class, $user)

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
$class = "class_example"; // string | Unique identifier of the class
$user = "user_example"; // string | Unique identifier of the user

try {
    $result = $apiInstance->listClassStudentSubmissions($class, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->listClassStudentSubmissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **class** | **string**| Unique identifier of the class |
 **user** | **string**| Unique identifier of the user |

### Return type

[**\Flat\APIClient\Model\AssignmentSubmission[]**](../Model/AssignmentSubmission.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listClasses**
> \Flat\APIClient\Model\ClassDetails[] listClasses($state)

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
$state = "active"; // string | Filter the classes by state

try {
    $result = $apiInstance->listClasses($state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->listClasses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **state** | **string**| Filter the classes by state | [optional] [default to active]

### Return type

[**\Flat\APIClient\Model\ClassDetails[]**](../Model/ClassDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unarchiveClass**
> \Flat\APIClient\Model\ClassDetails unarchiveClass($class)

Unarchive the class

Mark the class as `active`. When this course is synchronized with another app, like Google Classroom, this state will be automatically be updated.

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
$class = "class_example"; // string | Unique identifier of the class

try {
    $result = $apiInstance->unarchiveClass($class);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->unarchiveClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **class** | **string**| Unique identifier of the class |

### Return type

[**\Flat\APIClient\Model\ClassDetails**](../Model/ClassDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateClass**
> \Flat\APIClient\Model\ClassDetails updateClass($class, $body)

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
$class = "class_example"; // string | Unique identifier of the class
$body = new \Flat\APIClient\Model\ClassUpdate(); // \Flat\APIClient\Model\ClassUpdate | Details of the Class

try {
    $result = $apiInstance->updateClass($class, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->updateClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **class** | **string**| Unique identifier of the class |
 **body** | [**\Flat\APIClient\Model\ClassUpdate**](../Model/ClassUpdate.md)| Details of the Class | [optional]

### Return type

[**\Flat\APIClient\Model\ClassDetails**](../Model/ClassDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

