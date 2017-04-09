# Flat\APIClient\ScoreApi

All URIs are relative to *https://api.flat.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addScoreCollaborator**](ScoreApi.md#addScoreCollaborator) | **POST** /scores/{score}/collaborators | Add a new collaborator
[**createScore**](ScoreApi.md#createScore) | **POST** /scores | Create a new score
[**createScoreRevision**](ScoreApi.md#createScoreRevision) | **POST** /scores/{score}/revisions | Create a new revision
[**deleteScore**](ScoreApi.md#deleteScore) | **DELETE** /scores/{score} | Delete a score
[**deleteScoreComment**](ScoreApi.md#deleteScoreComment) | **DELETE** /scores/{score}/comments/{comment} | Delete a comment
[**editScore**](ScoreApi.md#editScore) | **PUT** /scores/{score} | Edit a score&#39;s metadata
[**forkScore**](ScoreApi.md#forkScore) | **POST** /scores/{score}/fork | Fork a score
[**gerUserLikes**](ScoreApi.md#gerUserLikes) | **GET** /users/{user}/likes | List liked scores
[**getGroupScores**](ScoreApi.md#getGroupScores) | **GET** /groups/{group}/scores | List group&#39;s scores
[**getScore**](ScoreApi.md#getScore) | **GET** /scores/{score} | Get a score&#39;s metadata
[**getScoreCollaborator**](ScoreApi.md#getScoreCollaborator) | **GET** /scores/{score}/collaborators/{collaborator} | Get a collaborator
[**getScoreCollaborators**](ScoreApi.md#getScoreCollaborators) | **GET** /scores/{score}/collaborators | List the collaborators
[**getScoreComments**](ScoreApi.md#getScoreComments) | **GET** /scores/{score}/comments | List comments
[**getScoreRevision**](ScoreApi.md#getScoreRevision) | **GET** /scores/{score}/revisions/{revision} | Get a score revision
[**getScoreRevisionData**](ScoreApi.md#getScoreRevisionData) | **GET** /scores/{score}/revisions/{revision}/{format} | Get a score revision data
[**getScoreRevisions**](ScoreApi.md#getScoreRevisions) | **GET** /scores/{score}/revisions | List the revisions
[**getUserScores**](ScoreApi.md#getUserScores) | **GET** /users/{user}/scores | List user&#39;s scores
[**markScoreCommentResolved**](ScoreApi.md#markScoreCommentResolved) | **PUT** /scores/{score}/comments/{comment}/resolved | Mark the comment as resolved
[**markScoreCommentUnresolved**](ScoreApi.md#markScoreCommentUnresolved) | **DELETE** /scores/{score}/comments/{comment}/resolved | Mark the comment as unresolved
[**postScoreComment**](ScoreApi.md#postScoreComment) | **POST** /scores/{score}/comments | Post a new comment
[**removeScoreCollaborator**](ScoreApi.md#removeScoreCollaborator) | **DELETE** /scores/{score}/collaborators/{collaborator} | Delete a collaborator
[**updateScoreComment**](ScoreApi.md#updateScoreComment) | **PUT** /scores/{score}/comments/{comment} | Update an existing comment


# **addScoreCollaborator**
> \Flat\APIClient\Model\ScoreCollaborator addScoreCollaborator($score, $body)

Add a new collaborator

Share a score with a single user or a group. This API call allows to add, invite and update the collaborators of a document. - To add an existing Flat user to the document, specify its unique identifier in the `user` property. - To invite an external user to the document, specify its email in the `userEmail` property. - To add a Flat group to the document, specify its unique identifier in the `group` property. - To update an existing collaborator, process the same request with different rights.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$body = new \Flat\APIClient\Model\ScoreCollaboratorCreation(); // \Flat\APIClient\Model\ScoreCollaboratorCreation | 

try {
    $result = $api_instance->addScoreCollaborator($score, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->addScoreCollaborator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |
 **body** | [**\Flat\APIClient\Model\ScoreCollaboratorCreation**](../Model/\Flat\APIClient\Model\ScoreCollaboratorCreation.md)|  |

### Return type

[**\Flat\APIClient\Model\ScoreCollaborator**](../Model/ScoreCollaborator.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createScore**
> \Flat\APIClient\Model\ScoreDetails createScore($body)

Create a new score

Use this API method to **create a new music score in the current User account**. You will need a MusicXML 3 (`vnd.recordare.musicxml` or `vnd.recordare.musicxml+xml`) or a MIDI (`audio/midi`) file to create the new Flat document.  This API call will automatically create the first revision of the document, the score can be modified by the using our web application or by uploading a new revision of this file (`POST /v2/scores/{score}/revisions/{revision}`).  The currently authenticated user will be granted owner of the file and will be able to add other collaborators (users and groups).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$body = new \Flat\APIClient\Model\ScoreCreation(); // \Flat\APIClient\Model\ScoreCreation | 

try {
    $result = $api_instance->createScore($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->createScore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Flat\APIClient\Model\ScoreCreation**](../Model/\Flat\APIClient\Model\ScoreCreation.md)|  |

### Return type

[**\Flat\APIClient\Model\ScoreDetails**](../Model/ScoreDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createScoreRevision**
> \Flat\APIClient\Model\ScoreRevision createScoreRevision($score, $body)

Create a new revision

Update a score by uploading a new revision for this one.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$body = new \Flat\APIClient\Model\ScoreRevisionCreation(); // \Flat\APIClient\Model\ScoreRevisionCreation | 

try {
    $result = $api_instance->createScoreRevision($score, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->createScoreRevision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |
 **body** | [**\Flat\APIClient\Model\ScoreRevisionCreation**](../Model/\Flat\APIClient\Model\ScoreRevisionCreation.md)|  |

### Return type

[**\Flat\APIClient\Model\ScoreRevision**](../Model/ScoreRevision.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteScore**
> deleteScore($score)

Delete a score

This API call will schedule the deletion of the score, its revisions, and whole history. The user calling this API method must have the `aclAdmin` rights on this document to process this action. The score won't be accessible anymore after calling this method and the user's quota will directly be updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).

try {
    $api_instance->deleteScore($score);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->deleteScore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteScoreComment**
> deleteScoreComment($score, $comment)

Delete a comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$comment = "comment_example"; // string | Unique identifier of a sheet music comment

try {
    $api_instance->deleteScoreComment($score, $comment);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->deleteScoreComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |
 **comment** | **string**| Unique identifier of a sheet music comment |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editScore**
> \Flat\APIClient\Model\ScoreDetails editScore($score, $body)

Edit a score's metadata

This API method allows you to change the metadata of a score document (e.g. its `title` or `privacy`), all the properties are optional.  To edit the file itself, create a new revision using the appropriate method (`POST /v2/scores/{score}/revisions/{revision}`).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$body = new \Flat\APIClient\Model\ScoreModification(); // \Flat\APIClient\Model\ScoreModification | 

try {
    $result = $api_instance->editScore($score, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->editScore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |
 **body** | [**\Flat\APIClient\Model\ScoreModification**](../Model/\Flat\APIClient\Model\ScoreModification.md)|  | [optional]

### Return type

[**\Flat\APIClient\Model\ScoreDetails**](../Model/ScoreDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forkScore**
> \Flat\APIClient\Model\ScoreDetails forkScore($score, $body)

Fork a score

This API call will make a copy of the last revision of the specified score and create a new score. The copy of the score will have a privacy set to `private`.  When using a [Flat for Education](https://flat.io/edu) account, the inline and contextualized comments will be accessible in the child document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$body = new \Flat\APIClient\Model\ScoreFork(); // \Flat\APIClient\Model\ScoreFork | 

try {
    $result = $api_instance->forkScore($score, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->forkScore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |
 **body** | [**\Flat\APIClient\Model\ScoreFork**](../Model/\Flat\APIClient\Model\ScoreFork.md)|  |

### Return type

[**\Flat\APIClient\Model\ScoreDetails**](../Model/ScoreDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gerUserLikes**
> \Flat\APIClient\Model\ScoreDetails[] gerUserLikes($user, $ids)

List liked scores

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$user = "user_example"; // string | Unique identifier of a Flat user. If you authenticated, you can use `me` to refer to the current user.
$ids = true; // bool | Return only the identifiers of the scores

try {
    $result = $api_instance->gerUserLikes($user, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->gerUserLikes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Unique identifier of a Flat user. If you authenticated, you can use &#x60;me&#x60; to refer to the current user. |
 **ids** | **bool**| Return only the identifiers of the scores | [optional]

### Return type

[**\Flat\APIClient\Model\ScoreDetails[]**](../Model/ScoreDetails.md)

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

$api_instance = new Flat\APIClient\Api\ScoreApi();
$group = "group_example"; // string | Unique identifier of the group
$parent = "parent_example"; // string | Filter the score forked from the score id `parent`

try {
    $result = $api_instance->getGroupScores($group, $parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->getGroupScores: ', $e->getMessage(), PHP_EOL;
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

# **getScore**
> \Flat\APIClient\Model\ScoreDetails getScore($score)

Get a score's metadata

Get the details of a score identified by the `score` parameter in the URL. The currently authenticated user must have at least a read access to the document to use this API call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).

try {
    $result = $api_instance->getScore($score);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->getScore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |

### Return type

[**\Flat\APIClient\Model\ScoreDetails**](../Model/ScoreDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScoreCollaborator**
> \Flat\APIClient\Model\ScoreCollaborator getScoreCollaborator($score, $collaborator)

Get a collaborator

Get the information about a collaborator (User or Group).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$collaborator = "collaborator_example"; // string | Unique identifier of a **collaborator permission**, or unique identifier of a **User**, or unique identifier of a **Group**

try {
    $result = $api_instance->getScoreCollaborator($score, $collaborator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->getScoreCollaborator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |
 **collaborator** | **string**| Unique identifier of a **collaborator permission**, or unique identifier of a **User**, or unique identifier of a **Group** |

### Return type

[**\Flat\APIClient\Model\ScoreCollaborator**](../Model/ScoreCollaborator.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScoreCollaborators**
> \Flat\APIClient\Model\ScoreCollaborator[] getScoreCollaborators($score)

List the collaborators

This API call will list the different collaborators of a score and their rights on the document. The returned list will at least contain the owner of the document.  Collaborators can be a single user (the object `user` will be populated) or a group (the object `group` will be populated).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).

try {
    $result = $api_instance->getScoreCollaborators($score);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->getScoreCollaborators: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |

### Return type

[**\Flat\APIClient\Model\ScoreCollaborator[]**](../Model/ScoreCollaborator.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScoreComments**
> \Flat\APIClient\Model\ScoreComment[] getScoreComments($score)

List comments

This method lists the different comments added on a music score (documents and inline) sorted by their post dates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).

try {
    $result = $api_instance->getScoreComments($score);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->getScoreComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |

### Return type

[**\Flat\APIClient\Model\ScoreComment[]**](../Model/ScoreComment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScoreRevision**
> \Flat\APIClient\Model\ScoreRevision getScoreRevision($score, $revision)

Get a score revision

When creating a score or saving a new version of a score, a revision is created in our storage. This method allows you to get a specific revision metadata.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$revision = "revision_example"; // string | Unique identifier of a score revision. You can use `last` to fetch the information related to the last version created.

try {
    $result = $api_instance->getScoreRevision($score, $revision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->getScoreRevision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |
 **revision** | **string**| Unique identifier of a score revision. You can use &#x60;last&#x60; to fetch the information related to the last version created. |

### Return type

[**\Flat\APIClient\Model\ScoreRevision**](../Model/ScoreRevision.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScoreRevisionData**
> getScoreRevisionData($score, $revision, $format, $onlyCached, $parts)

Get a score revision data

Retrieve the file corresponding to a score revision (the following formats are available: Flat JSON/Adagio JSON `json`, MusicXML `mxl`/`xml`, MP3 `mp3`, WAV `wav`, MIDI `midi`, or a tumbnail of the first page `thumbnail.png`).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$revision = "revision_example"; // string | Unique identifier of a score revision. You can use `last` to fetch the information related to the last version created.
$format = "format_example"; // string | The format of the file you will retrieve
$onlyCached = true; // bool | Only return files already generated and cached in Flat's production cache. If the file is not availabe, a 404 will be returned
$parts = "parts_example"; // string | An optional a set of parts to be exported. This parameter must be specified with a list of integers. For example \"1,2,5\".

try {
    $api_instance->getScoreRevisionData($score, $revision, $format, $onlyCached, $parts);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->getScoreRevisionData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |
 **revision** | **string**| Unique identifier of a score revision. You can use &#x60;last&#x60; to fetch the information related to the last version created. |
 **format** | **string**| The format of the file you will retrieve |
 **onlyCached** | **bool**| Only return files already generated and cached in Flat&#39;s production cache. If the file is not availabe, a 404 will be returned | [optional]
 **parts** | **string**| An optional a set of parts to be exported. This parameter must be specified with a list of integers. For example \&quot;1,2,5\&quot;. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/vnd.recordare.musicxml+xml, application/vnd.recordare.musicxml, audio/mp3, audio/wav, audio/midi, image/png

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScoreRevisions**
> \Flat\APIClient\Model\ScoreRevision[] getScoreRevisions($score)

List the revisions

When creating a score or saving a new version of a score, a revision is created in our storage. This method allows you to list all of them, sorted by last modification.  Depending the plan of the account, this list can be trunked to the few last revisions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).

try {
    $result = $api_instance->getScoreRevisions($score);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->getScoreRevisions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |

### Return type

[**\Flat\APIClient\Model\ScoreRevision[]**](../Model/ScoreRevision.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserScores**
> \Flat\APIClient\Model\ScoreDetails[] getUserScores($user, $parent)

List user's scores

Get the list of scores owned by the User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$user = "user_example"; // string | Unique identifier of a Flat user. If you authenticated, you can use `me` to refer to the current user.
$parent = "parent_example"; // string | Filter the score forked from the score id `parent`

try {
    $result = $api_instance->getUserScores($user, $parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->getUserScores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| Unique identifier of a Flat user. If you authenticated, you can use &#x60;me&#x60; to refer to the current user. |
 **parent** | **string**| Filter the score forked from the score id &#x60;parent&#x60; | [optional]

### Return type

[**\Flat\APIClient\Model\ScoreDetails[]**](../Model/ScoreDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markScoreCommentResolved**
> markScoreCommentResolved($score, $comment)

Mark the comment as resolved

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$comment = "comment_example"; // string | Unique identifier of a sheet music comment

try {
    $api_instance->markScoreCommentResolved($score, $comment);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->markScoreCommentResolved: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |
 **comment** | **string**| Unique identifier of a sheet music comment |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markScoreCommentUnresolved**
> markScoreCommentUnresolved($score, $comment)

Mark the comment as unresolved

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$comment = "comment_example"; // string | Unique identifier of a sheet music comment

try {
    $api_instance->markScoreCommentUnresolved($score, $comment);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->markScoreCommentUnresolved: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |
 **comment** | **string**| Unique identifier of a sheet music comment |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postScoreComment**
> \Flat\APIClient\Model\ScoreComment postScoreComment($score, $body)

Post a new comment

Post a document or a contextualized comment on a document.  Please note that this method includes an anti-spam system for public scores. We don't guarantee that your comments will be accepted and displayed to end-user. Comments are be blocked by returning a `403` HTTP error and hidden from other users when the `spam` property is `true`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$body = new \Flat\APIClient\Model\ScoreCommentCreation(); // \Flat\APIClient\Model\ScoreCommentCreation | 

try {
    $result = $api_instance->postScoreComment($score, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->postScoreComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |
 **body** | [**\Flat\APIClient\Model\ScoreCommentCreation**](../Model/\Flat\APIClient\Model\ScoreCommentCreation.md)|  |

### Return type

[**\Flat\APIClient\Model\ScoreComment**](../Model/ScoreComment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeScoreCollaborator**
> removeScoreCollaborator($score, $collaborator)

Delete a collaborator

Remove the specified collaborator from the score

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$collaborator = "collaborator_example"; // string | Unique identifier of a **collaborator permission**, or unique identifier of a **User**, or unique identifier of a **Group**

try {
    $api_instance->removeScoreCollaborator($score, $collaborator);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->removeScoreCollaborator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |
 **collaborator** | **string**| Unique identifier of a **collaborator permission**, or unique identifier of a **User**, or unique identifier of a **Group** |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateScoreComment**
> \Flat\APIClient\Model\ScoreComment updateScoreComment($score, $comment, $body)

Update an existing comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Flat\APIClient\Api\ScoreApi();
$score = "score_example"; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$comment = "comment_example"; // string | Unique identifier of a sheet music comment
$body = new \Flat\APIClient\Model\ScoreCommentUpdate(); // \Flat\APIClient\Model\ScoreCommentUpdate | 

try {
    $result = $api_instance->updateScoreComment($score, $comment, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->updateScoreComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). |
 **comment** | **string**| Unique identifier of a sheet music comment |
 **body** | [**\Flat\APIClient\Model\ScoreCommentUpdate**](../Model/\Flat\APIClient\Model\ScoreCommentUpdate.md)|  |

### Return type

[**\Flat\APIClient\Model\ScoreComment**](../Model/ScoreComment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

