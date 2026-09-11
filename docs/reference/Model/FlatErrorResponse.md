# FlatErrorResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | A corresponding code for this error |
**message** | **string** | A printable message for this error |
**id** | **string** | An unique error identifier generated for the request | [optional]
**param** | **string** | The related parameter that caused the error | [optional]
**provider_message** | **string** | The untranslated error message returned by an external provider (e.g. Google Classroom), when the error originates from one. Only set on errors forwarded from a third party.  Meant for support and IT: display it alongside &#x60;message&#x60;, never in place of it. &#x60;message&#x60; is the localized, user-facing text; this field is raw provider output and is always in English. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
