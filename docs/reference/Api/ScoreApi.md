# Flat\APIClient\ScoreApi

All URIs are relative to https://api.flat.io/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addScoreCollaborator()**](ScoreApi.md#addScoreCollaborator) | **POST** /scores/{score}/collaborators | Add a new collaborator |
| [**addScoreTrack()**](ScoreApi.md#addScoreTrack) | **POST** /scores/{score}/tracks | Add a new video or audio track to the score |
| [**createExportTask()**](ScoreApi.md#createExportTask) | **POST** /scores/{score}/revisions/{revision}/{format}/task | Create a new score export task |
| [**createScore()**](ScoreApi.md#createScore) | **POST** /scores | Create a new score |
| [**createScoreRevision()**](ScoreApi.md#createScoreRevision) | **POST** /scores/{score}/revisions | Create a new revision |
| [**deleteScore()**](ScoreApi.md#deleteScore) | **DELETE** /scores/{score} | Delete a score |
| [**deleteScoreComment()**](ScoreApi.md#deleteScoreComment) | **DELETE** /scores/{score}/comments/{comment} | Delete a comment |
| [**deleteScoreTrack()**](ScoreApi.md#deleteScoreTrack) | **DELETE** /scores/{score}/tracks/{track} | Remove an audio or video track linked to the score |
| [**editScore()**](ScoreApi.md#editScore) | **PUT** /scores/{score} | Edit a score&#39;s metadata |
| [**forkScore()**](ScoreApi.md#forkScore) | **POST** /scores/{score}/fork | Fork a score |
| [**getGroupScores()**](ScoreApi.md#getGroupScores) | **GET** /groups/{group}/scores | List group&#39;s scores |
| [**getScore()**](ScoreApi.md#getScore) | **GET** /scores/{score} | Get a score&#39;s metadata |
| [**getScoreCollaborator()**](ScoreApi.md#getScoreCollaborator) | **GET** /scores/{score}/collaborators/{collaborator} | Get a collaborator |
| [**getScoreCollaborators()**](ScoreApi.md#getScoreCollaborators) | **GET** /scores/{score}/collaborators | List the collaborators |
| [**getScoreComments()**](ScoreApi.md#getScoreComments) | **GET** /scores/{score}/comments | List comments |
| [**getScoreRevision()**](ScoreApi.md#getScoreRevision) | **GET** /scores/{score}/revisions/{revision} | Get a score revision |
| [**getScoreRevisionData()**](ScoreApi.md#getScoreRevisionData) | **GET** /scores/{score}/revisions/{revision}/{format} | Get a score revision data |
| [**getScoreRevisions()**](ScoreApi.md#getScoreRevisions) | **GET** /scores/{score}/revisions | List the revisions |
| [**getScoreSubmissions()**](ScoreApi.md#getScoreSubmissions) | **GET** /scores/{score}/submissions | List submissions related to the score |
| [**getScoreTrack()**](ScoreApi.md#getScoreTrack) | **GET** /scores/{score}/tracks/{track} | Retrieve the details of an audio or video track linked to a score |
| [**getUserLikes()**](ScoreApi.md#getUserLikes) | **GET** /users/{user}/likes | List liked scores |
| [**getUserScores()**](ScoreApi.md#getUserScores) | **GET** /users/{user}/scores | List user&#39;s scores |
| [**listScoreTracks()**](ScoreApi.md#listScoreTracks) | **GET** /scores/{score}/tracks | List the audio or video tracks linked to a score |
| [**markScoreCommentResolved()**](ScoreApi.md#markScoreCommentResolved) | **PUT** /scores/{score}/comments/{comment}/resolved | Mark the comment as resolved |
| [**markScoreCommentUnresolved()**](ScoreApi.md#markScoreCommentUnresolved) | **DELETE** /scores/{score}/comments/{comment}/resolved | Mark the comment as unresolved |
| [**postScoreComment()**](ScoreApi.md#postScoreComment) | **POST** /scores/{score}/comments | Post a new comment |
| [**removeScoreCollaborator()**](ScoreApi.md#removeScoreCollaborator) | **DELETE** /scores/{score}/collaborators/{collaborator} | Delete a collaborator |
| [**untrashScore()**](ScoreApi.md#untrashScore) | **POST** /scores/{score}/untrash | Untrash a score |
| [**updateScoreComment()**](ScoreApi.md#updateScoreComment) | **PUT** /scores/{score}/comments/{comment} | Update an existing comment |
| [**updateScoreTrack()**](ScoreApi.md#updateScoreTrack) | **PUT** /scores/{score}/tracks/{track} | Update an audio or video track linked to a score |


## `addScoreCollaborator()`

```php
addScoreCollaborator($score, $body): \Flat\APIClient\Model\ResourceCollaborator
```

Add a new collaborator

Share a score with a single user or a group. This API call allows you to add, invite and update the collaborators of a resource. - To add an existing Flat user to the resource, specify their unique identifier in the `user` property. - To invite an external user to the resource, specify their email in the `userEmail` property. - To add a Flat group to the resource, specify its unique identifier in the `group` property. - To update an existing collaborator, process the same request with different rights.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$body = new \Flat\APIClient\Model\ResourceCollaboratorCreation(); // \Flat\APIClient\Model\ResourceCollaboratorCreation

try {
    $result = $apiInstance->addScoreCollaborator($score, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->addScoreCollaborator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **body** | [**\Flat\APIClient\Model\ResourceCollaboratorCreation**](../Model/ResourceCollaboratorCreation.md)|  | |

### Return type

[**\Flat\APIClient\Model\ResourceCollaborator**](../Model/ResourceCollaborator.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addScoreTrack()`

```php
addScoreTrack($score, $body): \Flat\APIClient\Model\ScoreTrackCreationResponse
```

Add a new video or audio track to the score

Use this method to add a new track to the score. This track can then be played on flat.io or in an embedded score. This API method supports media hosted on SoundCloud, YouTube and Vimeo.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$body = new \Flat\APIClient\Model\ScoreTrackCreation(); // \Flat\APIClient\Model\ScoreTrackCreation

try {
    $result = $apiInstance->addScoreTrack($score, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->addScoreTrack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **body** | [**\Flat\APIClient\Model\ScoreTrackCreation**](../Model/ScoreTrackCreation.md)|  | |

### Return type

[**\Flat\APIClient\Model\ScoreTrackCreationResponse**](../Model/ScoreTrackCreationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createExportTask()`

```php
createExportTask($score, $revision, $format, $sharing_key, $body): \Flat\APIClient\Model\Task
```

Create a new score export task

Some score exports take longer to process than a single API request allows. Use this endpoint to launch a new export of one score hosted on Flat.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$revision = 'revision_example'; // string | Unique identifier of a score revision. You can use `last` to fetch the information related to the last version created.
$format = 'format_example'; // string | The format of the file that will be generated or the target service name where the file will be exported
$sharing_key = 'sharing_key_example'; // string | This sharing key must be specified to access to a score or collection with a `privacy` mode set to `privateLink` and the current user is not a collaborator of the document.
$body = new \Flat\APIClient\Model\TaskExportOptions(); // \Flat\APIClient\Model\TaskExportOptions

try {
    $result = $apiInstance->createExportTask($score, $revision, $format, $sharing_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->createExportTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **revision** | **string**| Unique identifier of a score revision. You can use &#x60;last&#x60; to fetch the information related to the last version created. | |
| **format** | **string**| The format of the file that will be generated or the target service name where the file will be exported | |
| **sharing_key** | **string**| This sharing key must be specified to access to a score or collection with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. | [optional] |
| **body** | [**\Flat\APIClient\Model\TaskExportOptions**](../Model/TaskExportOptions.md)|  | [optional] |

### Return type

[**\Flat\APIClient\Model\Task**](../Model/Task.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createScore()`

```php
createScore($body): \Flat\APIClient\Model\ScoreDetails
```

Create a new score

Use this API method to **create a new music score in the current User account**. This endpoint provides 3 ways to create scores:  * `ScoreCreationBuilderData` : Create a blank score by providing the list of instruments to use. You can optionally customize the initial key signature, time signature, enable TABs, Chord grids, as well as the page layout. * `ScoreCreationFileImport`: Import a file to create the new Flat document.    **Preferred formats**:   * **MusicXML**: `.xml`, `.musicxml`, `.mxl` (compressed) — MIME: `vnd.recordare.musicxml+xml`, `vnd.recordare.musicxml`. This is the only format that preserves all notation data (articulations, dynamics, layout, etc.) with full round-trip support.   * **MIDI**: `.mid`, `.midi` — MIME: `audio/midi`. Only preserves pitch, timing, and instrument data; notation details are lost.    **Also supported** (converted to MusicXML on import, some notation details may be lost):   * **Guitar Pro**: `.gp`, `.gp3`, `.gp4`, `.gp5`, `.gpx`, `.gtp`   * **MuseScore**: `.mscz`, `.mscx`   * **Finale**: `.musx`   * **ABC notation**: `.abc` — MIME: `text/vnd.abc`   * **PowerTab**: `.ptb`   * **Capella**: `.cap`, `.capx`   * **MEI**: `.mei`   * **Overture**: `.ove`   * **TablEdit**: `.tef`   * **Band-in-a-Box**: `.mgu`, `.sgu`   * **Karaoke MIDI**: `.kar`   * **MuseData**: `.md`   * **Score Writer**: `.scw`   * **Bagpipe Music Writer**: `.bmw`, `.bww`   * **Encore**: `.enc`    **Scanned music** (requires `supportsTasks`, runs our music recognition and spends   credits):   * **PDF**: `.pdf`   * **Images**: `.jpg`, `.png`, `.webp`, `.tiff`, `.gif`, `.avif`, `.heic`, `.heif`    The file is identified by its own content, so its extension and any declared type do   not have to match. **One file per request**: a multi-page PDF or a multi-frame TIFF is   fine, but several separate images of the same score (a page photographed at a time)   need `createOmrJob`, which takes many inputs in one job and bills them as a single   document. Its live limits are served by `getOmrCapabilities`. * `ScoreCreationGoogleDriveImport`: Import an existing Google Drive file from the connected Google Drive account.  This API call will automatically create the first revision of the document, the score can then be modified using our web application or by uploading a new revision of this file (`POST /v2/scores/{score}/revisions`).  The currently authenticated user will be the owner of the file and will be able to add other collaborators (users and groups).  If no `collection` is specified, the API will create the score in the most appropriate collection. When using an OAuth2 access token or a personal token, the score will be automatically added to your dedicated app collection in the account (`/v2/collections/app`).  If a `collection` is specified and this one has more public privacy settings than the score (e.g. `public` vs `private` for the score), the privacy settings of the created score will be adjusted to the collection ones.  You can check the adjusted privacy settings in the returned score `privacy`, and optionally adjust these settings if needed using `PUT /scores/{score}`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Flat\APIClient\Model\ScoreCreationBuilderData(); // \Flat\APIClient\Model\ScoreCreation

try {
    $result = $apiInstance->createScore($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->createScore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Flat\APIClient\Model\ScoreCreation**](../Model/ScoreCreation.md)|  | |

### Return type

[**\Flat\APIClient\Model\ScoreDetails**](../Model/ScoreDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createScoreRevision()`

```php
createScoreRevision($score, $body): \Flat\APIClient\Model\ScoreRevision
```

Create a new revision

Update a score by uploading a new revision for this one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$body = new \Flat\APIClient\Model\ScoreRevisionCreation(); // \Flat\APIClient\Model\ScoreRevisionCreation

try {
    $result = $apiInstance->createScoreRevision($score, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->createScoreRevision: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **body** | [**\Flat\APIClient\Model\ScoreRevisionCreation**](../Model/ScoreRevisionCreation.md)|  | |

### Return type

[**\Flat\APIClient\Model\ScoreRevision**](../Model/ScoreRevision.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteScore()`

```php
deleteScore($score, $now)
```

Delete a score

This method can be used by anyone that has at least read access to the document:  - When called by an owner/admin, it will schedule the deletion of the score, its revisions, and complete history. The score won't be accessible anymore after calling this method and the user's quota will directly be updated. - When called by a collaborator, the score will be unshared (i.e. removed from the account & own collections). - When called by another user that has the score in its collections, the score will be removed from all the user's collections.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$now = false; // bool | If `true`, the score deletion will be scheduled as soon as possible

try {
    $apiInstance->deleteScore($score, $now);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->deleteScore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **now** | **bool**| If &#x60;true&#x60;, the score deletion will be scheduled as soon as possible | [optional] [default to false] |

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

## `deleteScoreComment()`

```php
deleteScoreComment($score, $comment, $event_properties, $sharing_key)
```

Delete a comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$comment = 'comment_example'; // string | Unique identifier of a sheet music comment
$event_properties = {"context":"discover","screenLevel0":"home","screenRoute":"/discover"}; // string | Optional analytics properties merged into the analytics events recorded for this request.  JSON-encoded string representing event properties. Example:  - `?eventProperties={\"context\":\"discover\",\"screenLevel0\":\"home\"}`
$sharing_key = 'sharing_key_example'; // string | This sharing key must be specified to access to a score or collection with a `privacy` mode set to `privateLink` and the current user is not a collaborator of the document.

try {
    $apiInstance->deleteScoreComment($score, $comment, $event_properties, $sharing_key);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->deleteScoreComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **comment** | **string**| Unique identifier of a sheet music comment | |
| **event_properties** | **string**| Optional analytics properties merged into the analytics events recorded for this request.  JSON-encoded string representing event properties. Example:  - &#x60;?eventProperties&#x3D;{\&quot;context\&quot;:\&quot;discover\&quot;,\&quot;screenLevel0\&quot;:\&quot;home\&quot;}&#x60; | [optional] |
| **sharing_key** | **string**| This sharing key must be specified to access to a score or collection with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. | [optional] |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteScoreTrack()`

```php
deleteScoreTrack($score, $track)
```

Remove an audio or video track linked to the score

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$track = 'track_example'; // string | Unique identifier of a score audio track

try {
    $apiInstance->deleteScoreTrack($score, $track);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->deleteScoreTrack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **track** | **string**| Unique identifier of a score audio track | |

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

## `editScore()`

```php
editScore($score, $body): \Flat\APIClient\Model\ScoreDetails
```

Edit a score's metadata

This API method allows you to change the metadata of a score document (e.g. its `title` or `privacy`), all the properties are optional.  To edit the file itself, create a new revision using the appropriate method (`POST /v2/scores/{score}/revisions`).  When editing the `title`, `subtitle`, `composer`, `lyricist`, `arranger` or `licenseText`, the metadata is updated immediately, and a real-time action is pushed to update the document lazily. This pending document modification is automatically saved as a new revision, either by a connected client or by Flat.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$body = new \Flat\APIClient\Model\ScoreModification(); // \Flat\APIClient\Model\ScoreModification

try {
    $result = $apiInstance->editScore($score, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->editScore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **body** | [**\Flat\APIClient\Model\ScoreModification**](../Model/ScoreModification.md)|  | |

### Return type

[**\Flat\APIClient\Model\ScoreDetails**](../Model/ScoreDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forkScore()`

```php
forkScore($score, $body, $sharing_key): \Flat\APIClient\Model\ScoreDetails
```

Fork a score

This API call will make a copy of the last revision of the specified score and create a new score. The copy of the score will have a privacy set to `private`.  When using a [Flat for Education](https://flat.io/edu) account, the inline and contextualized comments will be accessible in the child document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$body = new \Flat\APIClient\Model\ScoreFork(); // \Flat\APIClient\Model\ScoreFork
$sharing_key = 'sharing_key_example'; // string | This sharing key must be specified to access to a score or collection with a `privacy` mode set to `privateLink` and the current user is not a collaborator of the document.

try {
    $result = $apiInstance->forkScore($score, $body, $sharing_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->forkScore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **body** | [**\Flat\APIClient\Model\ScoreFork**](../Model/ScoreFork.md)|  | |
| **sharing_key** | **string**| This sharing key must be specified to access to a score or collection with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. | [optional] |

### Return type

[**\Flat\APIClient\Model\ScoreDetails**](../Model/ScoreDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = 'group_example'; // string | Unique identifier of a Flat group
$parent = 'parent_example'; // string | Only return the scores forked from the score `parent`

try {
    $result = $apiInstance->getGroupScores($group, $parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->getGroupScores: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group** | **string**| Unique identifier of a Flat group | |
| **parent** | **string**| Only return the scores forked from the score &#x60;parent&#x60; | [optional] |

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

## `getScore()`

```php
getScore($score, $sharing_key): \Flat\APIClient\Model\ScoreDetails
```

Get a score's metadata

Get the details of a score identified by the `score` parameter in the URL. The currently authenticated user must have at least a read access to the document to use this API call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$sharing_key = 'sharing_key_example'; // string | This sharing key must be specified to access to a score or collection with a `privacy` mode set to `privateLink` and the current user is not a collaborator of the document.

try {
    $result = $apiInstance->getScore($score, $sharing_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->getScore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **sharing_key** | **string**| This sharing key must be specified to access to a score or collection with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. | [optional] |

### Return type

[**\Flat\APIClient\Model\ScoreDetails**](../Model/ScoreDetails.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScoreCollaborator()`

```php
getScoreCollaborator($score, $collaborator, $sharing_key): \Flat\APIClient\Model\ResourceCollaborator
```

Get a collaborator

Get the information about a collaborator (User or Group).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$collaborator = 'collaborator_example'; // string | Unique identifier of a **collaborator permission**, or unique identifier of a **User**, or unique identifier of a **Group**
$sharing_key = 'sharing_key_example'; // string | This sharing key must be specified to access to a score or collection with a `privacy` mode set to `privateLink` and the current user is not a collaborator of the document.

try {
    $result = $apiInstance->getScoreCollaborator($score, $collaborator, $sharing_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->getScoreCollaborator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **collaborator** | **string**| Unique identifier of a **collaborator permission**, or unique identifier of a **User**, or unique identifier of a **Group** | |
| **sharing_key** | **string**| This sharing key must be specified to access to a score or collection with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. | [optional] |

### Return type

[**\Flat\APIClient\Model\ResourceCollaborator**](../Model/ResourceCollaborator.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScoreCollaborators()`

```php
getScoreCollaborators($score, $sharing_key): \Flat\APIClient\Model\ResourceCollaborator[]
```

List the collaborators

This API call will list the different collaborators of a score and their rights on the document. The returned list will at least contain the owner of the document.  Collaborators can be a single user (the object `user` will be populated) or a group (the object `group` will be populated).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$sharing_key = 'sharing_key_example'; // string | This sharing key must be specified to access to a score or collection with a `privacy` mode set to `privateLink` and the current user is not a collaborator of the document.

try {
    $result = $apiInstance->getScoreCollaborators($score, $sharing_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->getScoreCollaborators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **sharing_key** | **string**| This sharing key must be specified to access to a score or collection with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. | [optional] |

### Return type

[**\Flat\APIClient\Model\ResourceCollaborator[]**](../Model/ResourceCollaborator.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScoreComments()`

```php
getScoreComments($score, $type, $sort, $direction, $sharing_key): \Flat\APIClient\Model\ScoreComment[]
```

List comments

This method lists the different comments added on a music score (documents and inline) sorted by their post dates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$type = 'type_example'; // string | Filter the comments by type
$sort = 'sort_example'; // string | Sort
$direction = 'direction_example'; // string | Sort direction
$sharing_key = 'sharing_key_example'; // string | This sharing key must be specified to access to a score or collection with a `privacy` mode set to `privateLink` and the current user is not a collaborator of the document.

try {
    $result = $apiInstance->getScoreComments($score, $type, $sort, $direction, $sharing_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->getScoreComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **type** | **string**| Filter the comments by type | [optional] |
| **sort** | **string**| Sort | [optional] |
| **direction** | **string**| Sort direction | [optional] |
| **sharing_key** | **string**| This sharing key must be specified to access to a score or collection with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. | [optional] |

### Return type

[**\Flat\APIClient\Model\ScoreComment[]**](../Model/ScoreComment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScoreRevision()`

```php
getScoreRevision($score, $revision, $sharing_key): \Flat\APIClient\Model\ScoreRevision
```

Get a score revision

When creating a score or saving a new version of a score, a revision is created in our storage. This method allows you to get a specific revision metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$revision = 'revision_example'; // string | Unique identifier of a score revision. You can use `last` to fetch the information related to the last version created.
$sharing_key = 'sharing_key_example'; // string | This sharing key must be specified to access to a score or collection with a `privacy` mode set to `privateLink` and the current user is not a collaborator of the document.

try {
    $result = $apiInstance->getScoreRevision($score, $revision, $sharing_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->getScoreRevision: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **revision** | **string**| Unique identifier of a score revision. You can use &#x60;last&#x60; to fetch the information related to the last version created. | |
| **sharing_key** | **string**| This sharing key must be specified to access to a score or collection with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. | [optional] |

### Return type

[**\Flat\APIClient\Model\ScoreRevision**](../Model/ScoreRevision.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScoreRevisionData()`

```php
getScoreRevisionData($score, $revision, $format, $sharing_key, $parts, $default_track, $url): \SplFileObject
```

Get a score revision data

Retrieve the file corresponding to a score revision (the following formats are available): Flat JSON `json`, MusicXML `mxl`/`xml`, ABC notation `abc`, MP3 `mp3`, WAV `wav`, MIDI `midi`, Flat `flat`, a thumbnail of the first page `thumbnail.png` or auto sync points `synchronizationPoints`.  ABC notation is a text format that cannot express everything a score contains. Like MIDI, the export is lossy: notation that ABC has no equivalent for is approximated or dropped rather than failing the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$revision = 'revision_example'; // string | Unique identifier of a score revision. You can use `last` to fetch the information related to the last version created.
$format = 'format_example'; // string | The format of the file you will retrieve
$sharing_key = 'sharing_key_example'; // string | This sharing key must be specified to access to a score or collection with a `privacy` mode set to `privateLink` and the current user is not a collaborator of the document.
$parts = 'parts_example'; // string | An optional set of part UUIDs to export. This parameter must be composed of part UUIDs separated by commas. For example \"59df645f-bb1c-f1b4-b573-d2afc4491f94,34ef645f-1aef-f3bc-1564-34cca4492b87\".
$default_track = True; // bool | When `format` is `mp3`, this property is set to true and the score has a default `ScoreTrack` (mp3), this one will be returned instead of the playback file.
$url = True; // bool | Returns a json with the `url` in it instead of redirecting

try {
    $result = $apiInstance->getScoreRevisionData($score, $revision, $format, $sharing_key, $parts, $default_track, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->getScoreRevisionData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **revision** | **string**| Unique identifier of a score revision. You can use &#x60;last&#x60; to fetch the information related to the last version created. | |
| **format** | **string**| The format of the file you will retrieve | |
| **sharing_key** | **string**| This sharing key must be specified to access to a score or collection with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. | [optional] |
| **parts** | **string**| An optional set of part UUIDs to export. This parameter must be composed of part UUIDs separated by commas. For example \&quot;59df645f-bb1c-f1b4-b573-d2afc4491f94,34ef645f-1aef-f3bc-1564-34cca4492b87\&quot;. | [optional] |
| **default_track** | **bool**| When &#x60;format&#x60; is &#x60;mp3&#x60;, this property is set to true and the score has a default &#x60;ScoreTrack&#x60; (mp3), this one will be returned instead of the playback file. | [optional] |
| **url** | **bool**| Returns a json with the &#x60;url&#x60; in it instead of redirecting | [optional] |

### Return type

**\SplFileObject**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.recordare.musicxml+xml`, `application/vnd.recordare.musicxml`, `audio/mp3`, `audio/wav`, `audio/midi`, `image/png`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScoreRevisions()`

```php
getScoreRevisions($score, $sharing_key): \Flat\APIClient\Model\ScoreRevision[]
```

List the revisions

When creating a score or saving a new version of a score, a revision is created in our storage. This method allows you to list all of them, sorted by last modification.  Depending on the plan of the account, this list may be truncated to the most recent revisions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$sharing_key = 'sharing_key_example'; // string | This sharing key must be specified to access to a score or collection with a `privacy` mode set to `privateLink` and the current user is not a collaborator of the document.

try {
    $result = $apiInstance->getScoreRevisions($score, $sharing_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->getScoreRevisions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **sharing_key** | **string**| This sharing key must be specified to access to a score or collection with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. | [optional] |

### Return type

[**\Flat\APIClient\Model\ScoreRevision[]**](../Model/ScoreRevision.md)

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


$apiInstance = new Flat\APIClient\Api\ScoreApi(
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
    echo 'Exception when calling ScoreApi->getScoreSubmissions: ', $e->getMessage(), PHP_EOL;
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

## `getScoreTrack()`

```php
getScoreTrack($score, $track, $sharing_key): \Flat\APIClient\Model\ScoreTrack
```

Retrieve the details of an audio or video track linked to a score

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$track = 'track_example'; // string | Unique identifier of a score audio track
$sharing_key = 'sharing_key_example'; // string | This sharing key must be specified to access to a score or collection with a `privacy` mode set to `privateLink` and the current user is not a collaborator of the document.

try {
    $result = $apiInstance->getScoreTrack($score, $track, $sharing_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->getScoreTrack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **track** | **string**| Unique identifier of a score audio track | |
| **sharing_key** | **string**| This sharing key must be specified to access to a score or collection with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. | [optional] |

### Return type

[**\Flat\APIClient\Model\ScoreTrack**](../Model/ScoreTrack.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserLikes()`

```php
getUserLikes($user, $next, $previous, $limit, $ids): \Flat\APIClient\Model\ScoreDetails[]
```

List liked scores

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 'user_example'; // string | Unique identifier of a Flat user. If you authenticated, you can use `me` to refer to the current user.
$next = 'next_example'; // string | An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.
$previous = 'previous_example'; // string | An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.
$limit = 25; // int | This is the maximum number of objects that may be returned
$ids = True; // bool | Return only the identifiers of the scores

try {
    $result = $apiInstance->getUserLikes($user, $next, $previous, $limit, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->getUserLikes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user** | **string**| Unique identifier of a Flat user. If you authenticated, you can use &#x60;me&#x60; to refer to the current user. | |
| **next** | **string**| An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional] |
| **previous** | **string**| An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional] |
| **limit** | **int**| This is the maximum number of objects that may be returned | [optional] [default to 25] |
| **ids** | **bool**| Return only the identifiers of the scores | [optional] |

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

## `getUserScores()`

```php
getUserScores($user, $paginate, $sort, $direction, $limit, $next, $previous): \Flat\APIClient\Model\ScoreDetails[]
```

List user's scores

Get the list of public scores owned by a User. If you want to access private scores, please use the [Collections API](#tag/Collection). For example `GET /v2/collections/allScores/scores` to list all recently updated scores.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 'user_example'; // string | Unique identifier of a Flat user. If you authenticated, you can use `me` to refer to the current user.
$paginate = false; // bool | When set to `true`, the API will return a paginated result. When set to `false` or unset, the API will return all the scores. If this parameter is unset or false, then limit/sort/direction/next/previous will be ignored.
$sort = 'sort_example'; // string | Sort
$direction = 'direction_example'; // string | Sort direction
$limit = 25; // int | This is the maximum number of objects that may be returned
$next = 'next_example'; // string | An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.
$previous = 'previous_example'; // string | An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.

try {
    $result = $apiInstance->getUserScores($user, $paginate, $sort, $direction, $limit, $next, $previous);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->getUserScores: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user** | **string**| Unique identifier of a Flat user. If you authenticated, you can use &#x60;me&#x60; to refer to the current user. | |
| **paginate** | **bool**| When set to &#x60;true&#x60;, the API will return a paginated result. When set to &#x60;false&#x60; or unset, the API will return all the scores. If this parameter is unset or false, then limit/sort/direction/next/previous will be ignored. | [optional] [default to false] |
| **sort** | **string**| Sort | [optional] |
| **direction** | **string**| Sort direction | [optional] |
| **limit** | **int**| This is the maximum number of objects that may be returned | [optional] [default to 25] |
| **next** | **string**| An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional] |
| **previous** | **string**| An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional] |

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

## `listScoreTracks()`

```php
listScoreTracks($score, $sharing_key, $assignment, $list_auto_track): \Flat\APIClient\Model\ScoreTrack[]
```

List the audio or video tracks linked to a score

List all audio or video tracks linked to a score.  **Access Control for Performance Submission Tracks:**  Tracks with `purpose: 'performanceSubmission'` are filtered based on user role:  * **Students**: Can only see their own performance submission tracks, plus all non-performance tracks * **Teachers and score admins**: Can see all tracks from all students  The `assignment` query parameter can be used to filter tracks for a specific assignment, but the access control rules above still apply.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$sharing_key = 'sharing_key_example'; // string | This sharing key must be specified to access to a score or collection with a `privacy` mode set to `privateLink` and the current user is not a collaborator of the document.
$assignment = 'assignment_example'; // string | Only return the tracks related to this assignment
$list_auto_track = True; // bool | If `true`, and when available, also return the latest MP3 export automatically generated by Flat as an additional track

try {
    $result = $apiInstance->listScoreTracks($score, $sharing_key, $assignment, $list_auto_track);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->listScoreTracks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **sharing_key** | **string**| This sharing key must be specified to access to a score or collection with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. | [optional] |
| **assignment** | **string**| Only return the tracks related to this assignment | [optional] |
| **list_auto_track** | **bool**| If &#x60;true&#x60;, and when available, also return the latest MP3 export automatically generated by Flat as an additional track | [optional] |

### Return type

[**\Flat\APIClient\Model\ScoreTrack[]**](../Model/ScoreTrack.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markScoreCommentResolved()`

```php
markScoreCommentResolved($score, $comment, $sharing_key)
```

Mark the comment as resolved

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$comment = 'comment_example'; // string | Unique identifier of a sheet music comment
$sharing_key = 'sharing_key_example'; // string | This sharing key must be specified to access to a score or collection with a `privacy` mode set to `privateLink` and the current user is not a collaborator of the document.

try {
    $apiInstance->markScoreCommentResolved($score, $comment, $sharing_key);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->markScoreCommentResolved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **comment** | **string**| Unique identifier of a sheet music comment | |
| **sharing_key** | **string**| This sharing key must be specified to access to a score or collection with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. | [optional] |

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

## `markScoreCommentUnresolved()`

```php
markScoreCommentUnresolved($score, $comment, $sharing_key)
```

Mark the comment as unresolved

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$comment = 'comment_example'; // string | Unique identifier of a sheet music comment
$sharing_key = 'sharing_key_example'; // string | This sharing key must be specified to access to a score or collection with a `privacy` mode set to `privateLink` and the current user is not a collaborator of the document.

try {
    $apiInstance->markScoreCommentUnresolved($score, $comment, $sharing_key);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->markScoreCommentUnresolved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **comment** | **string**| Unique identifier of a sheet music comment | |
| **sharing_key** | **string**| This sharing key must be specified to access to a score or collection with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. | [optional] |

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

## `postScoreComment()`

```php
postScoreComment($score, $body, $sharing_key): \Flat\APIClient\Model\ScoreComment
```

Post a new comment

Post a document or a contextualized comment on a document.  Please note that this method includes an anti-spam system for public scores. We don't guarantee that your comments will be accepted and displayed to end users. Comments can be blocked by returning a `403` HTTP error and hidden from other users when the `spam` property is `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$body = new \Flat\APIClient\Model\ScoreCommentCreation(); // \Flat\APIClient\Model\ScoreCommentCreation
$sharing_key = 'sharing_key_example'; // string | This sharing key must be specified to access to a score or collection with a `privacy` mode set to `privateLink` and the current user is not a collaborator of the document.

try {
    $result = $apiInstance->postScoreComment($score, $body, $sharing_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->postScoreComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **body** | [**\Flat\APIClient\Model\ScoreCommentCreation**](../Model/ScoreCommentCreation.md)|  | |
| **sharing_key** | **string**| This sharing key must be specified to access to a score or collection with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. | [optional] |

### Return type

[**\Flat\APIClient\Model\ScoreComment**](../Model/ScoreComment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeScoreCollaborator()`

```php
removeScoreCollaborator($score, $collaborator, $event_properties)
```

Delete a collaborator

Remove the specified collaborator from the score

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$collaborator = 'collaborator_example'; // string | Unique identifier of a **collaborator permission**, or unique identifier of a **User**, or unique identifier of a **Group**
$event_properties = {"context":"discover","screenLevel0":"home","screenRoute":"/discover"}; // string | Optional analytics properties merged into the analytics events recorded for this request.  JSON-encoded string representing event properties. Example:  - `?eventProperties={\"context\":\"discover\",\"screenLevel0\":\"home\"}`

try {
    $apiInstance->removeScoreCollaborator($score, $collaborator, $event_properties);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->removeScoreCollaborator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **collaborator** | **string**| Unique identifier of a **collaborator permission**, or unique identifier of a **User**, or unique identifier of a **Group** | |
| **event_properties** | **string**| Optional analytics properties merged into the analytics events recorded for this request.  JSON-encoded string representing event properties. Example:  - &#x60;?eventProperties&#x3D;{\&quot;context\&quot;:\&quot;discover\&quot;,\&quot;screenLevel0\&quot;:\&quot;home\&quot;}&#x60; | [optional] |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `untrashScore()`

```php
untrashScore($score)
```

Untrash a score

This method will remove the score from the `trash` collection and from the deletion queue, and add it back to the original collections.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).

try {
    $apiInstance->untrashScore($score);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->untrashScore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |

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

## `updateScoreComment()`

```php
updateScoreComment($score, $comment, $body, $sharing_key): \Flat\APIClient\Model\ScoreComment
```

Update an existing comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$comment = 'comment_example'; // string | Unique identifier of a sheet music comment
$body = new \Flat\APIClient\Model\ScoreCommentUpdate(); // \Flat\APIClient\Model\ScoreCommentUpdate
$sharing_key = 'sharing_key_example'; // string | This sharing key must be specified to access to a score or collection with a `privacy` mode set to `privateLink` and the current user is not a collaborator of the document.

try {
    $result = $apiInstance->updateScoreComment($score, $comment, $body, $sharing_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->updateScoreComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **comment** | **string**| Unique identifier of a sheet music comment | |
| **body** | [**\Flat\APIClient\Model\ScoreCommentUpdate**](../Model/ScoreCommentUpdate.md)|  | |
| **sharing_key** | **string**| This sharing key must be specified to access to a score or collection with a &#x60;privacy&#x60; mode set to &#x60;privateLink&#x60; and the current user is not a collaborator of the document. | [optional] |

### Return type

[**\Flat\APIClient\Model\ScoreComment**](../Model/ScoreComment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateScoreTrack()`

```php
updateScoreTrack($score, $track, $body): \Flat\APIClient\Model\ScoreTrack
```

Update an audio or video track linked to a score

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\ScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 'score_example'; // string | Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. `ScoreDetails.id`) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with `drive-` (e.g. `drive-0B000000000`).
$track = 'track_example'; // string | Unique identifier of a score audio track
$body = new \Flat\APIClient\Model\ScoreTrackUpdate(); // \Flat\APIClient\Model\ScoreTrackUpdate

try {
    $result = $apiInstance->updateScoreTrack($score, $track, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScoreApi->updateScoreTrack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **score** | **string**| Unique identifier of the score document. This can be a Flat Score unique identifier (i.e. &#x60;ScoreDetails.id&#x60;) or, if the score is also a Google Drive file, the Drive file unique identifier prefixed with &#x60;drive-&#x60; (e.g. &#x60;drive-0B000000000&#x60;). | |
| **track** | **string**| Unique identifier of a score audio track | |
| **body** | [**\Flat\APIClient\Model\ScoreTrackUpdate**](../Model/ScoreTrackUpdate.md)|  | |

### Return type

[**\Flat\APIClient\Model\ScoreTrack**](../Model/ScoreTrack.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
