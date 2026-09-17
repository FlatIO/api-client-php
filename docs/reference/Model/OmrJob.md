# OmrJob

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the OMR job. |
**status** | [**\Flat\APIClient\Model\OmrJobStatus**](OmrJobStatus.md) |  |
**output** | [**\Flat\APIClient\Model\OmrJobOutput**](OmrJobOutput.md) |  |
**interactive_steps** | [**\Flat\APIClient\Model\OmrStepName[]**](OmrStepName.md) | Steps this job pauses at for client input, echoing the value set at creation. |
**auto_rotate** | **bool** | Whether the job was created with &#x60;autoRotate&#x60;, echoing the value set at creation. | [optional]
**locales** | **string[]** | Locale hints (BCP 47) the job was created with, used for OCR and as the default main language at the &#x60;details&#x60; step. | [optional]
**current_step** | [**\Flat\APIClient\Model\OmrStepName**](OmrStepName.md) | The pending step when &#x60;status&#x60; is &#x60;awaitingInput&#x60;. Omitted otherwise. | [optional]
**pending_step** | [**\Flat\APIClient\Model\OmrPendingStep**](OmrPendingStep.md) |  | [optional]
**estimated_credits** | **int** | Credits that will be or were charged at start (page-based), so a client can show a confirmation before charging. | [optional]
**progress** | [**\Flat\APIClient\Model\OmrJobProgress**](OmrJobProgress.md) |  | [optional]
**original_file_metadata** | [**\Flat\APIClient\Model\OmrJobFileMetadata**](OmrJobFileMetadata.md) |  | [optional]
**imported_metadata** | [**\Flat\APIClient\Model\OmrImportedMetadata**](OmrImportedMetadata.md) |  | [optional]
**result** | [**\Flat\APIClient\Model\OmrJobResult**](OmrJobResult.md) |  | [optional]
**retention** | [**\Flat\APIClient\Model\OmrJobRetention**](OmrJobRetention.md) |  | [optional]
**error_code** | **string** | Stable, engine-agnostic failure code, present when &#x60;status&#x60; is &#x60;error&#x60;. Branch on this for custom handling, and render &#x60;errorMessage&#x60; for the user-facing text.  This is an open string: new codes may be added over time, so keep a generic fallback and never hardcode an exhaustive switch. Current values:  * &#x60;NO_MUSIC_DETECTED&#x60;: no musical content found (poor scan, rotated page, or tablature). * &#x60;CORRUPTED_FILE&#x60;: the input file is corrupted and could not be read. * &#x60;UNSUPPORTED_FORMAT&#x60;: the file format or notation is not supported yet. * &#x60;UNSUPPORTED_TABLATURE&#x60;: the file is guitar tablature, not supported yet. * &#x60;ENCRYPTED_PDF&#x60;: the PDF is password-protected. * &#x60;TOO_LARGE&#x60;: the document is too large or has an unusual shape to process. * &#x60;ENGINE_TIMEOUT&#x60;: recognition took longer than expected and was stopped. * &#x60;GENERIC&#x60;: unspecified failure. | [optional]
**error_message** | **string** | Localized, user-facing error message, present when &#x60;status&#x60; is &#x60;error&#x60;. Rendered in the caller&#39;s locale and safe to display as-is. Pair with &#x60;errorCode&#x60; for branching. | [optional]
**creation_date** | **\DateTime** | When the job was created. | [optional]
**modification_date** | **\DateTime** | When the job was last updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
