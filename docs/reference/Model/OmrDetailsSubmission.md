# OmrDetailsSubmission

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**step** | **string** | Discriminator for &#x60;OmrStepSubmission&#x60;; always &#x60;details&#x60; for this submission. |
**title** | **string** | Override the detected work title. | [optional]
**main_language** | **string** | Override the main language (BCP 47) used for lyric and text reading on resume. Defaults to the job locale (&#x60;locales&#x60;); set this to correct it on the review screen. | [optional]
**instruments** | [**\Flat\APIClient\Model\OmrInstrumentOverride[]**](OmrInstrumentOverride.md) | Per-part overrides, each matched to a detected part by &#x60;index&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
