# ScoreFork

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**collection** | **string** | Unique identifier of a collection where the score will be copied.  If no collection identifier is provided, a virtual collection is used, or &#x60;null&#x60; is provided, the score won&#39;t be added to any collection and will only be visible in the &#x60;allScores&#x60; virtual collection. | [optional]
**google_drive_disabled** | **bool** | If set to &#x60;true&#x60;, the API won&#39;t create the score on Google Drive | [optional] [default to false]
**keep_original_title** | **bool** | Option to keep the original title of the score (i.e. don&#39;t prepend it with \&quot;Copy of \&quot;, or add the student name in assignment usage). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
