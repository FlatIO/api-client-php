# Flat\APIClient\OMRApi

All URIs are relative to https://api.flat.io/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addOmrJobFile()**](OMRApi.md#addOmrJobFile) | **POST** /omr/jobs/{job}/files | Add a file to an OMR job |
| [**cancelOmrJob()**](OMRApi.md#cancelOmrJob) | **POST** /omr/jobs/{job}/cancel | Cancel an OMR job |
| [**createOmrJob()**](OMRApi.md#createOmrJob) | **POST** /omr/jobs | Create an OMR job |
| [**deleteOmrJob()**](OMRApi.md#deleteOmrJob) | **DELETE** /omr/jobs/{job} | Delete an OMR job&#39;s data |
| [**getOmrCapabilities()**](OMRApi.md#getOmrCapabilities) | **GET** /omr/capabilities | OMR capabilities and limits |
| [**getOmrJob()**](OMRApi.md#getOmrJob) | **GET** /omr/jobs/{job} | Get an OMR job |
| [**getOmrJobExport()**](OMRApi.md#getOmrJobExport) | **GET** /omr/jobs/{job}/exports/{format} | Download the finalized result |
| [**getOmrJobFile()**](OMRApi.md#getOmrJobFile) | **GET** /omr/jobs/{job}/files/{index} | Get an input page image |
| [**listBillingCreditsHistory()**](OMRApi.md#listBillingCreditsHistory) | **GET** /billing/credits/history | List credit history |
| [**listOmrJobs()**](OMRApi.md#listOmrJobs) | **GET** /omr/jobs | List OMR jobs |
| [**startOmrJob()**](OMRApi.md#startOmrJob) | **POST** /omr/jobs/{job}/start | Start an OMR job |
| [**submitOmrJobStep()**](OMRApi.md#submitOmrJobStep) | **POST** /omr/jobs/{job}/steps/{step} | Submit an interactive step |


## `addOmrJobFile()`

```php
addOmrJobFile($job, $omr_job_file_upload, $x_flat_locale): \Flat\APIClient\Model\OmrJobFileUploadResult
```

Add a file to an OMR job

Add one image or PDF to a draft job. Call once per file; files keep their upload order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\OMRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job = 'job_example'; // string | Unique identifier of the OMR job
$omr_job_file_upload = new \Flat\APIClient\Model\OmrJobFileUpload(); // \Flat\APIClient\Model\OmrJobFileUpload
$x_flat_locale = fr; // string | Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to `en`).  Supported normalized locales: `da`, `de`, `en`, `en-GB`, `es`, `fi`, `fil`, `fr`, `fr-CA`, `hi`, `id`, `it`, `ja`, `ko`, `ms`, `nl`, `nb`, `pl`, `pt`, `pt-BR`, `ro`, `ru`, `sv`, `tr`, `zh-Hans`, `zh-HK`, `zh-TW`.  Precedence (highest first): this `X-Flat-Locale` header, the authenticated user's account locale, the `Accept-Language` header, then `en`.

try {
    $result = $apiInstance->addOmrJobFile($job, $omr_job_file_upload, $x_flat_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OMRApi->addOmrJobFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job** | **string**| Unique identifier of the OMR job | |
| **omr_job_file_upload** | [**\Flat\APIClient\Model\OmrJobFileUpload**](../Model/OmrJobFileUpload.md)|  | |
| **x_flat_locale** | **string**| Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to &#x60;en&#x60;).  Supported normalized locales: &#x60;da&#x60;, &#x60;de&#x60;, &#x60;en&#x60;, &#x60;en-GB&#x60;, &#x60;es&#x60;, &#x60;fi&#x60;, &#x60;fil&#x60;, &#x60;fr&#x60;, &#x60;fr-CA&#x60;, &#x60;hi&#x60;, &#x60;id&#x60;, &#x60;it&#x60;, &#x60;ja&#x60;, &#x60;ko&#x60;, &#x60;ms&#x60;, &#x60;nl&#x60;, &#x60;nb&#x60;, &#x60;pl&#x60;, &#x60;pt&#x60;, &#x60;pt-BR&#x60;, &#x60;ro&#x60;, &#x60;ru&#x60;, &#x60;sv&#x60;, &#x60;tr&#x60;, &#x60;zh-Hans&#x60;, &#x60;zh-HK&#x60;, &#x60;zh-TW&#x60;.  Precedence (highest first): this &#x60;X-Flat-Locale&#x60; header, the authenticated user&#39;s account locale, the &#x60;Accept-Language&#x60; header, then &#x60;en&#x60;. | [optional] |

### Return type

[**\Flat\APIClient\Model\OmrJobFileUploadResult**](../Model/OmrJobFileUploadResult.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelOmrJob()`

```php
cancelOmrJob($job, $x_flat_locale): \Flat\APIClient\Model\OmrJob
```

Cancel an OMR job

Cancel a draft or in-flight job. Any charged credits are reversed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\OMRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job = 'job_example'; // string | Unique identifier of the OMR job
$x_flat_locale = fr; // string | Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to `en`).  Supported normalized locales: `da`, `de`, `en`, `en-GB`, `es`, `fi`, `fil`, `fr`, `fr-CA`, `hi`, `id`, `it`, `ja`, `ko`, `ms`, `nl`, `nb`, `pl`, `pt`, `pt-BR`, `ro`, `ru`, `sv`, `tr`, `zh-Hans`, `zh-HK`, `zh-TW`.  Precedence (highest first): this `X-Flat-Locale` header, the authenticated user's account locale, the `Accept-Language` header, then `en`.

try {
    $result = $apiInstance->cancelOmrJob($job, $x_flat_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OMRApi->cancelOmrJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job** | **string**| Unique identifier of the OMR job | |
| **x_flat_locale** | **string**| Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to &#x60;en&#x60;).  Supported normalized locales: &#x60;da&#x60;, &#x60;de&#x60;, &#x60;en&#x60;, &#x60;en-GB&#x60;, &#x60;es&#x60;, &#x60;fi&#x60;, &#x60;fil&#x60;, &#x60;fr&#x60;, &#x60;fr-CA&#x60;, &#x60;hi&#x60;, &#x60;id&#x60;, &#x60;it&#x60;, &#x60;ja&#x60;, &#x60;ko&#x60;, &#x60;ms&#x60;, &#x60;nl&#x60;, &#x60;nb&#x60;, &#x60;pl&#x60;, &#x60;pt&#x60;, &#x60;pt-BR&#x60;, &#x60;ro&#x60;, &#x60;ru&#x60;, &#x60;sv&#x60;, &#x60;tr&#x60;, &#x60;zh-Hans&#x60;, &#x60;zh-HK&#x60;, &#x60;zh-TW&#x60;.  Precedence (highest first): this &#x60;X-Flat-Locale&#x60; header, the authenticated user&#39;s account locale, the &#x60;Accept-Language&#x60; header, then &#x60;en&#x60;. | [optional] |

### Return type

[**\Flat\APIClient\Model\OmrJob**](../Model/OmrJob.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOmrJob()`

```php
createOmrJob($omr_job_creation, $x_flat_locale): \Flat\APIClient\Model\OmrJob
```

Create an OMR job

Create an Optical Music Recognition job. There are two ways to call this endpoint:  * **Draft:** send the parameters without `files` to create an empty job, then add   files with `addOmrJobFile`, then run it with `startOmrJob`. Best for multiple   images or incremental mobile capture. * **One-shot:** include `files` and `autoStart: true` to import in a single request.   Best for a single PDF or a third-party integration.  Declare the interactive steps your client supports in `interactiveSteps`: the pipeline runs fully automatically and only pauses at the steps you list. Steps you do not list, including ones added in the future, are auto-resolved with server defaults, so older clients never break.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\OMRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$omr_job_creation = new \Flat\APIClient\Model\OmrJobCreation(); // \Flat\APIClient\Model\OmrJobCreation
$x_flat_locale = fr; // string | Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to `en`).  Supported normalized locales: `da`, `de`, `en`, `en-GB`, `es`, `fi`, `fil`, `fr`, `fr-CA`, `hi`, `id`, `it`, `ja`, `ko`, `ms`, `nl`, `nb`, `pl`, `pt`, `pt-BR`, `ro`, `ru`, `sv`, `tr`, `zh-Hans`, `zh-HK`, `zh-TW`.  Precedence (highest first): this `X-Flat-Locale` header, the authenticated user's account locale, the `Accept-Language` header, then `en`.

try {
    $result = $apiInstance->createOmrJob($omr_job_creation, $x_flat_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OMRApi->createOmrJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **omr_job_creation** | [**\Flat\APIClient\Model\OmrJobCreation**](../Model/OmrJobCreation.md)|  | |
| **x_flat_locale** | **string**| Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to &#x60;en&#x60;).  Supported normalized locales: &#x60;da&#x60;, &#x60;de&#x60;, &#x60;en&#x60;, &#x60;en-GB&#x60;, &#x60;es&#x60;, &#x60;fi&#x60;, &#x60;fil&#x60;, &#x60;fr&#x60;, &#x60;fr-CA&#x60;, &#x60;hi&#x60;, &#x60;id&#x60;, &#x60;it&#x60;, &#x60;ja&#x60;, &#x60;ko&#x60;, &#x60;ms&#x60;, &#x60;nl&#x60;, &#x60;nb&#x60;, &#x60;pl&#x60;, &#x60;pt&#x60;, &#x60;pt-BR&#x60;, &#x60;ro&#x60;, &#x60;ru&#x60;, &#x60;sv&#x60;, &#x60;tr&#x60;, &#x60;zh-Hans&#x60;, &#x60;zh-HK&#x60;, &#x60;zh-TW&#x60;.  Precedence (highest first): this &#x60;X-Flat-Locale&#x60; header, the authenticated user&#39;s account locale, the &#x60;Accept-Language&#x60; header, then &#x60;en&#x60;. | [optional] |

### Return type

[**\Flat\APIClient\Model\OmrJob**](../Model/OmrJob.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOmrJob()`

```php
deleteOmrJob($job, $x_flat_locale): \Flat\APIClient\Model\OmrJob
```

Delete an OMR job's data

Erase a job's uploaded files and recognition results now, instead of waiting for its retention deadline. Use this to serve a deletion request from your own end user.  Reaches the same end state as the scheduled cleanup: the files are gone, the job keeps the `status` it finished with, stays listable, and reports `retention.expiredDate`. Downloads then fail with `OMR_JOB_EXPIRED`.  Only available for jobs whose `output` is `musicxml`. Library imports are not covered by the retention policy and are rejected with `OMR_JOB_NOT_EXPIRABLE`; delete the resulting score instead.  The job must have finished (`done`, `error` or `canceled`). A draft or in-flight job is rejected with `OMR_JOB_IN_PROGRESS`: cancel it first, then delete. Deleting never cancels on your behalf, because cancellation reverses charged credits and that must not happen as a side effect of erasing data.  Calling this again on an already-erased job succeeds and changes nothing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\OMRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job = 'job_example'; // string | Unique identifier of the OMR job
$x_flat_locale = fr; // string | Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to `en`).  Supported normalized locales: `da`, `de`, `en`, `en-GB`, `es`, `fi`, `fil`, `fr`, `fr-CA`, `hi`, `id`, `it`, `ja`, `ko`, `ms`, `nl`, `nb`, `pl`, `pt`, `pt-BR`, `ro`, `ru`, `sv`, `tr`, `zh-Hans`, `zh-HK`, `zh-TW`.  Precedence (highest first): this `X-Flat-Locale` header, the authenticated user's account locale, the `Accept-Language` header, then `en`.

try {
    $result = $apiInstance->deleteOmrJob($job, $x_flat_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OMRApi->deleteOmrJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job** | **string**| Unique identifier of the OMR job | |
| **x_flat_locale** | **string**| Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to &#x60;en&#x60;).  Supported normalized locales: &#x60;da&#x60;, &#x60;de&#x60;, &#x60;en&#x60;, &#x60;en-GB&#x60;, &#x60;es&#x60;, &#x60;fi&#x60;, &#x60;fil&#x60;, &#x60;fr&#x60;, &#x60;fr-CA&#x60;, &#x60;hi&#x60;, &#x60;id&#x60;, &#x60;it&#x60;, &#x60;ja&#x60;, &#x60;ko&#x60;, &#x60;ms&#x60;, &#x60;nl&#x60;, &#x60;nb&#x60;, &#x60;pl&#x60;, &#x60;pt&#x60;, &#x60;pt-BR&#x60;, &#x60;ro&#x60;, &#x60;ru&#x60;, &#x60;sv&#x60;, &#x60;tr&#x60;, &#x60;zh-Hans&#x60;, &#x60;zh-HK&#x60;, &#x60;zh-TW&#x60;.  Precedence (highest first): this &#x60;X-Flat-Locale&#x60; header, the authenticated user&#39;s account locale, the &#x60;Accept-Language&#x60; header, then &#x60;en&#x60;. | [optional] |

### Return type

[**\Flat\APIClient\Model\OmrJob**](../Model/OmrJob.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOmrCapabilities()`

```php
getOmrCapabilities($x_flat_locale): \Flat\APIClient\Model\OmrCapabilities
```

OMR capabilities and limits

Advertises the supported steps, export formats, limits, cost-per-page, remaining credits and locales, so clients can feature-detect instead of hardcoding behavior.  Authentication is optional: called without an account, the limits are those of the free plan and `remainingCredits` is omitted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\OMRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_flat_locale = fr; // string | Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to `en`).  Supported normalized locales: `da`, `de`, `en`, `en-GB`, `es`, `fi`, `fil`, `fr`, `fr-CA`, `hi`, `id`, `it`, `ja`, `ko`, `ms`, `nl`, `nb`, `pl`, `pt`, `pt-BR`, `ro`, `ru`, `sv`, `tr`, `zh-Hans`, `zh-HK`, `zh-TW`.  Precedence (highest first): this `X-Flat-Locale` header, the authenticated user's account locale, the `Accept-Language` header, then `en`.

try {
    $result = $apiInstance->getOmrCapabilities($x_flat_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OMRApi->getOmrCapabilities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_flat_locale** | **string**| Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to &#x60;en&#x60;).  Supported normalized locales: &#x60;da&#x60;, &#x60;de&#x60;, &#x60;en&#x60;, &#x60;en-GB&#x60;, &#x60;es&#x60;, &#x60;fi&#x60;, &#x60;fil&#x60;, &#x60;fr&#x60;, &#x60;fr-CA&#x60;, &#x60;hi&#x60;, &#x60;id&#x60;, &#x60;it&#x60;, &#x60;ja&#x60;, &#x60;ko&#x60;, &#x60;ms&#x60;, &#x60;nl&#x60;, &#x60;nb&#x60;, &#x60;pl&#x60;, &#x60;pt&#x60;, &#x60;pt-BR&#x60;, &#x60;ro&#x60;, &#x60;ru&#x60;, &#x60;sv&#x60;, &#x60;tr&#x60;, &#x60;zh-Hans&#x60;, &#x60;zh-HK&#x60;, &#x60;zh-TW&#x60;.  Precedence (highest first): this &#x60;X-Flat-Locale&#x60; header, the authenticated user&#39;s account locale, the &#x60;Accept-Language&#x60; header, then &#x60;en&#x60;. | [optional] |

### Return type

[**\Flat\APIClient\Model\OmrCapabilities**](../Model/OmrCapabilities.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOmrJob()`

```php
getOmrJob($job, $wait, $x_flat_locale): \Flat\APIClient\Model\OmrJob
```

Get an OMR job

Get the current state of an OMR job. This is the primary polling endpoint. Pass `wait` to long-poll until the state changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\OMRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job = 'job_example'; // string | Unique identifier of the OMR job
$wait = 56; // int | Long-poll up to this many seconds for a state change before returning.
$x_flat_locale = fr; // string | Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to `en`).  Supported normalized locales: `da`, `de`, `en`, `en-GB`, `es`, `fi`, `fil`, `fr`, `fr-CA`, `hi`, `id`, `it`, `ja`, `ko`, `ms`, `nl`, `nb`, `pl`, `pt`, `pt-BR`, `ro`, `ru`, `sv`, `tr`, `zh-Hans`, `zh-HK`, `zh-TW`.  Precedence (highest first): this `X-Flat-Locale` header, the authenticated user's account locale, the `Accept-Language` header, then `en`.

try {
    $result = $apiInstance->getOmrJob($job, $wait, $x_flat_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OMRApi->getOmrJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job** | **string**| Unique identifier of the OMR job | |
| **wait** | **int**| Long-poll up to this many seconds for a state change before returning. | [optional] |
| **x_flat_locale** | **string**| Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to &#x60;en&#x60;).  Supported normalized locales: &#x60;da&#x60;, &#x60;de&#x60;, &#x60;en&#x60;, &#x60;en-GB&#x60;, &#x60;es&#x60;, &#x60;fi&#x60;, &#x60;fil&#x60;, &#x60;fr&#x60;, &#x60;fr-CA&#x60;, &#x60;hi&#x60;, &#x60;id&#x60;, &#x60;it&#x60;, &#x60;ja&#x60;, &#x60;ko&#x60;, &#x60;ms&#x60;, &#x60;nl&#x60;, &#x60;nb&#x60;, &#x60;pl&#x60;, &#x60;pt&#x60;, &#x60;pt-BR&#x60;, &#x60;ro&#x60;, &#x60;ru&#x60;, &#x60;sv&#x60;, &#x60;tr&#x60;, &#x60;zh-Hans&#x60;, &#x60;zh-HK&#x60;, &#x60;zh-TW&#x60;.  Precedence (highest first): this &#x60;X-Flat-Locale&#x60; header, the authenticated user&#39;s account locale, the &#x60;Accept-Language&#x60; header, then &#x60;en&#x60;. | [optional] |

### Return type

[**\Flat\APIClient\Model\OmrJob**](../Model/OmrJob.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOmrJobExport()`

```php
getOmrJobExport($job, $format, $x_flat_locale): \SplFileObject
```

Download the finalized result

Stream the finalized result in the requested format. Available once the job is `done`. For `output: musicxml` jobs this is the primary way to retrieve the result; no library score is created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\OMRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job = 'job_example'; // string | Unique identifier of the OMR job
$format = 'format_example'; // string | Export format. New formats may be added over time; request what your client supports.  * `musicxml`: Uncompressed MusicXML (plain text `.xml`, `application/vnd.recordare.musicxml+xml`). * `mxl`: Compressed MusicXML (zip archive `.mxl`, `application/vnd.recordare.musicxml`), the same notation as `musicxml` but smaller to download. * `midi`: Standard MIDI file (`.mid`, `audio/midi`). * `thumbnail.png`: PNG preview of the first page (`image/png`).
$x_flat_locale = fr; // string | Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to `en`).  Supported normalized locales: `da`, `de`, `en`, `en-GB`, `es`, `fi`, `fil`, `fr`, `fr-CA`, `hi`, `id`, `it`, `ja`, `ko`, `ms`, `nl`, `nb`, `pl`, `pt`, `pt-BR`, `ro`, `ru`, `sv`, `tr`, `zh-Hans`, `zh-HK`, `zh-TW`.  Precedence (highest first): this `X-Flat-Locale` header, the authenticated user's account locale, the `Accept-Language` header, then `en`.

try {
    $result = $apiInstance->getOmrJobExport($job, $format, $x_flat_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OMRApi->getOmrJobExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job** | **string**| Unique identifier of the OMR job | |
| **format** | **string**| Export format. New formats may be added over time; request what your client supports.  * &#x60;musicxml&#x60;: Uncompressed MusicXML (plain text &#x60;.xml&#x60;, &#x60;application/vnd.recordare.musicxml+xml&#x60;). * &#x60;mxl&#x60;: Compressed MusicXML (zip archive &#x60;.mxl&#x60;, &#x60;application/vnd.recordare.musicxml&#x60;), the same notation as &#x60;musicxml&#x60; but smaller to download. * &#x60;midi&#x60;: Standard MIDI file (&#x60;.mid&#x60;, &#x60;audio/midi&#x60;). * &#x60;thumbnail.png&#x60;: PNG preview of the first page (&#x60;image/png&#x60;). | |
| **x_flat_locale** | **string**| Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to &#x60;en&#x60;).  Supported normalized locales: &#x60;da&#x60;, &#x60;de&#x60;, &#x60;en&#x60;, &#x60;en-GB&#x60;, &#x60;es&#x60;, &#x60;fi&#x60;, &#x60;fil&#x60;, &#x60;fr&#x60;, &#x60;fr-CA&#x60;, &#x60;hi&#x60;, &#x60;id&#x60;, &#x60;it&#x60;, &#x60;ja&#x60;, &#x60;ko&#x60;, &#x60;ms&#x60;, &#x60;nl&#x60;, &#x60;nb&#x60;, &#x60;pl&#x60;, &#x60;pt&#x60;, &#x60;pt-BR&#x60;, &#x60;ro&#x60;, &#x60;ru&#x60;, &#x60;sv&#x60;, &#x60;tr&#x60;, &#x60;zh-Hans&#x60;, &#x60;zh-HK&#x60;, &#x60;zh-TW&#x60;.  Precedence (highest first): this &#x60;X-Flat-Locale&#x60; header, the authenticated user&#39;s account locale, the &#x60;Accept-Language&#x60; header, then &#x60;en&#x60;. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOmrJobFile()`

```php
getOmrJobFile($job, $index, $x_flat_locale): \SplFileObject
```

Get an input page image

Fetch one of the job's input files (a page image or PDF) by index, for the review UI.  Once data retention has erased the job, this returns 409 `OMR_JOB_EXPIRED`. Read `retention.expiredDate` on the job to tell that case apart before requesting a file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\OMRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job = 'job_example'; // string | Unique identifier of the OMR job
$index = 56; // int | 0-based index of the input file (page) to fetch.
$x_flat_locale = fr; // string | Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to `en`).  Supported normalized locales: `da`, `de`, `en`, `en-GB`, `es`, `fi`, `fil`, `fr`, `fr-CA`, `hi`, `id`, `it`, `ja`, `ko`, `ms`, `nl`, `nb`, `pl`, `pt`, `pt-BR`, `ro`, `ru`, `sv`, `tr`, `zh-Hans`, `zh-HK`, `zh-TW`.  Precedence (highest first): this `X-Flat-Locale` header, the authenticated user's account locale, the `Accept-Language` header, then `en`.

try {
    $result = $apiInstance->getOmrJobFile($job, $index, $x_flat_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OMRApi->getOmrJobFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job** | **string**| Unique identifier of the OMR job | |
| **index** | **int**| 0-based index of the input file (page) to fetch. | |
| **x_flat_locale** | **string**| Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to &#x60;en&#x60;).  Supported normalized locales: &#x60;da&#x60;, &#x60;de&#x60;, &#x60;en&#x60;, &#x60;en-GB&#x60;, &#x60;es&#x60;, &#x60;fi&#x60;, &#x60;fil&#x60;, &#x60;fr&#x60;, &#x60;fr-CA&#x60;, &#x60;hi&#x60;, &#x60;id&#x60;, &#x60;it&#x60;, &#x60;ja&#x60;, &#x60;ko&#x60;, &#x60;ms&#x60;, &#x60;nl&#x60;, &#x60;nb&#x60;, &#x60;pl&#x60;, &#x60;pt&#x60;, &#x60;pt-BR&#x60;, &#x60;ro&#x60;, &#x60;ru&#x60;, &#x60;sv&#x60;, &#x60;tr&#x60;, &#x60;zh-Hans&#x60;, &#x60;zh-HK&#x60;, &#x60;zh-TW&#x60;.  Precedence (highest first): this &#x60;X-Flat-Locale&#x60; header, the authenticated user&#39;s account locale, the &#x60;Accept-Language&#x60; header, then &#x60;en&#x60;. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/jpeg`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBillingCreditsHistory()`

```php
listBillingCreditsHistory($limit, $next, $previous): \Flat\APIClient\Model\CreditTransaction[]
```

List credit history

The credit ledger of the authenticated account, sorted by creation date descending (most recent entry first).  Every entry that moved the balance is listed: the deductions taken when an import runs, and the top-ups added by a credit pack.  Reversing a deduction does not add an entry, it flips the original one's `state` to `canceled`. Canceled entries stay in the list, so an import that was charged and then failed still shows its deduction rather than disappearing. Read `state` to tell the two apart, and sum only `active` entries. A refund can additionally add a positive entry when cancelling alone could not restore the full cost, for instance because the plan's allowance has since reset.  The current balance is not computed from this list: read it from `getOmrCapabilities`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\OMRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | This is the maximum number of objects that may be returned
$next = 'next_example'; // string | An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.
$previous = 'previous_example'; // string | An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.

try {
    $result = $apiInstance->listBillingCreditsHistory($limit, $next, $previous);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OMRApi->listBillingCreditsHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| This is the maximum number of objects that may be returned | [optional] [default to 50] |
| **next** | **string**| An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional] |
| **previous** | **string**| An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional] |

### Return type

[**\Flat\APIClient\Model\CreditTransaction[]**](../Model/CreditTransaction.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOmrJobs()`

```php
listOmrJobs($status, $expired, $limit, $next, $previous, $x_flat_locale): \Flat\APIClient\Model\OmrJob[]
```

List OMR jobs

List the caller's OMR jobs, for resuming work or cleaning up abandoned drafts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\OMRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = new \Flat\APIClient\Model\\Flat\APIClient\Model\OmrJobStatus(); // \Flat\APIClient\Model\OmrJobStatus | Filter jobs by status
$expired = True; // bool | Filter by data-retention state, independently of `status`.  * `true`: only jobs whose files have been erased. * `false`: only jobs that still hold their files.  Omit to get both. A job keeps the `status` it finished with after erasure, so this is the only way to tell the two apart.
$limit = 50; // int | This is the maximum number of objects that may be returned
$next = 'next_example'; // string | An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.
$previous = 'previous_example'; // string | An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the `Link` header when requesting the API. These URLs will contain a `next` and `previous` cursor based on the available data.
$x_flat_locale = fr; // string | Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to `en`).  Supported normalized locales: `da`, `de`, `en`, `en-GB`, `es`, `fi`, `fil`, `fr`, `fr-CA`, `hi`, `id`, `it`, `ja`, `ko`, `ms`, `nl`, `nb`, `pl`, `pt`, `pt-BR`, `ro`, `ru`, `sv`, `tr`, `zh-Hans`, `zh-HK`, `zh-TW`.  Precedence (highest first): this `X-Flat-Locale` header, the authenticated user's account locale, the `Accept-Language` header, then `en`.

try {
    $result = $apiInstance->listOmrJobs($status, $expired, $limit, $next, $previous, $x_flat_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OMRApi->listOmrJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | [**\Flat\APIClient\Model\OmrJobStatus**](../Model/.md)| Filter jobs by status | [optional] |
| **expired** | **bool**| Filter by data-retention state, independently of &#x60;status&#x60;.  * &#x60;true&#x60;: only jobs whose files have been erased. * &#x60;false&#x60;: only jobs that still hold their files.  Omit to get both. A job keeps the &#x60;status&#x60; it finished with after erasure, so this is the only way to tell the two apart. | [optional] |
| **limit** | **int**| This is the maximum number of objects that may be returned | [optional] [default to 50] |
| **next** | **string**| An opaque string cursor to fetch the next page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional] |
| **previous** | **string**| An opaque string cursor to fetch the previous page of data. The paginated API URLs are returned in the &#x60;Link&#x60; header when requesting the API. These URLs will contain a &#x60;next&#x60; and &#x60;previous&#x60; cursor based on the available data. | [optional] |
| **x_flat_locale** | **string**| Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to &#x60;en&#x60;).  Supported normalized locales: &#x60;da&#x60;, &#x60;de&#x60;, &#x60;en&#x60;, &#x60;en-GB&#x60;, &#x60;es&#x60;, &#x60;fi&#x60;, &#x60;fil&#x60;, &#x60;fr&#x60;, &#x60;fr-CA&#x60;, &#x60;hi&#x60;, &#x60;id&#x60;, &#x60;it&#x60;, &#x60;ja&#x60;, &#x60;ko&#x60;, &#x60;ms&#x60;, &#x60;nl&#x60;, &#x60;nb&#x60;, &#x60;pl&#x60;, &#x60;pt&#x60;, &#x60;pt-BR&#x60;, &#x60;ro&#x60;, &#x60;ru&#x60;, &#x60;sv&#x60;, &#x60;tr&#x60;, &#x60;zh-Hans&#x60;, &#x60;zh-HK&#x60;, &#x60;zh-TW&#x60;.  Precedence (highest first): this &#x60;X-Flat-Locale&#x60; header, the authenticated user&#39;s account locale, the &#x60;Accept-Language&#x60; header, then &#x60;en&#x60;. | [optional] |

### Return type

[**\Flat\APIClient\Model\OmrJob[]**](../Model/OmrJob.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startOmrJob()`

```php
startOmrJob($job, $x_flat_locale): \Flat\APIClient\Model\OmrJob
```

Start an OMR job

Validate the attached files, run the permission, quota and credit checks, then queue the job for processing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\OMRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job = 'job_example'; // string | Unique identifier of the OMR job
$x_flat_locale = fr; // string | Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to `en`).  Supported normalized locales: `da`, `de`, `en`, `en-GB`, `es`, `fi`, `fil`, `fr`, `fr-CA`, `hi`, `id`, `it`, `ja`, `ko`, `ms`, `nl`, `nb`, `pl`, `pt`, `pt-BR`, `ro`, `ru`, `sv`, `tr`, `zh-Hans`, `zh-HK`, `zh-TW`.  Precedence (highest first): this `X-Flat-Locale` header, the authenticated user's account locale, the `Accept-Language` header, then `en`.

try {
    $result = $apiInstance->startOmrJob($job, $x_flat_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OMRApi->startOmrJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job** | **string**| Unique identifier of the OMR job | |
| **x_flat_locale** | **string**| Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to &#x60;en&#x60;).  Supported normalized locales: &#x60;da&#x60;, &#x60;de&#x60;, &#x60;en&#x60;, &#x60;en-GB&#x60;, &#x60;es&#x60;, &#x60;fi&#x60;, &#x60;fil&#x60;, &#x60;fr&#x60;, &#x60;fr-CA&#x60;, &#x60;hi&#x60;, &#x60;id&#x60;, &#x60;it&#x60;, &#x60;ja&#x60;, &#x60;ko&#x60;, &#x60;ms&#x60;, &#x60;nl&#x60;, &#x60;nb&#x60;, &#x60;pl&#x60;, &#x60;pt&#x60;, &#x60;pt-BR&#x60;, &#x60;ro&#x60;, &#x60;ru&#x60;, &#x60;sv&#x60;, &#x60;tr&#x60;, &#x60;zh-Hans&#x60;, &#x60;zh-HK&#x60;, &#x60;zh-TW&#x60;.  Precedence (highest first): this &#x60;X-Flat-Locale&#x60; header, the authenticated user&#39;s account locale, the &#x60;Accept-Language&#x60; header, then &#x60;en&#x60;. | [optional] |

### Return type

[**\Flat\APIClient\Model\OmrJob**](../Model/OmrJob.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitOmrJobStep()`

```php
submitOmrJobStep($job, $step, $body, $x_flat_locale): \Flat\APIClient\Model\OmrJob
```

Submit an interactive step

Resolve the step the job is currently awaiting and resume the pipeline. The request body shape depends on `step` (a `oneOf` discriminated by the step name).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Flat\APIClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Flat\APIClient\Api\OMRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job = 'job_example'; // string | Unique identifier of the OMR job
$step = new \Flat\APIClient\Model\\Flat\APIClient\Model\OmrStepName(); // \Flat\APIClient\Model\OmrStepName | The pending step being submitted
$body = new \Flat\APIClient\Model\OmrDetailsSubmission(); // \Flat\APIClient\Model\OmrDetailsSubmission
$x_flat_locale = fr; // string | Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to `en`).  Supported normalized locales: `da`, `de`, `en`, `en-GB`, `es`, `fi`, `fil`, `fr`, `fr-CA`, `hi`, `id`, `it`, `ja`, `ko`, `ms`, `nl`, `nb`, `pl`, `pt`, `pt-BR`, `ro`, `ru`, `sv`, `tr`, `zh-Hans`, `zh-HK`, `zh-TW`.  Precedence (highest first): this `X-Flat-Locale` header, the authenticated user's account locale, the `Accept-Language` header, then `en`.

try {
    $result = $apiInstance->submitOmrJobStep($job, $step, $body, $x_flat_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OMRApi->submitOmrJobStep: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job** | **string**| Unique identifier of the OMR job | |
| **step** | [**\Flat\APIClient\Model\OmrStepName**](../Model/.md)| The pending step being submitted | |
| **body** | **\Flat\APIClient\Model\OmrDetailsSubmission**|  | |
| **x_flat_locale** | **string**| Preferred locale for localized content in the response (translated error messages, emails, etc.).  Accepts any IETF language tag. The API best-matches the value to a supported locale and never rejects an unknown one (it falls back to the closest match, then to &#x60;en&#x60;).  Supported normalized locales: &#x60;da&#x60;, &#x60;de&#x60;, &#x60;en&#x60;, &#x60;en-GB&#x60;, &#x60;es&#x60;, &#x60;fi&#x60;, &#x60;fil&#x60;, &#x60;fr&#x60;, &#x60;fr-CA&#x60;, &#x60;hi&#x60;, &#x60;id&#x60;, &#x60;it&#x60;, &#x60;ja&#x60;, &#x60;ko&#x60;, &#x60;ms&#x60;, &#x60;nl&#x60;, &#x60;nb&#x60;, &#x60;pl&#x60;, &#x60;pt&#x60;, &#x60;pt-BR&#x60;, &#x60;ro&#x60;, &#x60;ru&#x60;, &#x60;sv&#x60;, &#x60;tr&#x60;, &#x60;zh-Hans&#x60;, &#x60;zh-HK&#x60;, &#x60;zh-TW&#x60;.  Precedence (highest first): this &#x60;X-Flat-Locale&#x60; header, the authenticated user&#39;s account locale, the &#x60;Accept-Language&#x60; header, then &#x60;en&#x60;. | [optional] |

### Return type

[**\Flat\APIClient\Model\OmrJob**](../Model/OmrJob.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
