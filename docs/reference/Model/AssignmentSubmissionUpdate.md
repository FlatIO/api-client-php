# AssignmentSubmissionUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attachments** | [**\Flat\APIClient\Model\ClassAttachmentCreation[]**](ClassAttachmentCreation.md) |  | [optional]
**playback** | [**\Flat\APIClient\Model\AssignmentSubmissionPlayback[]**](AssignmentSubmissionPlayback.md) |  | [optional]
**submit** | **bool** | If &#x60;true&#x60;, the submission will be marked as done | [optional]
**draft_grade** | **float** | Optional grade. If unset, no grade was set. This value is only visible by the teacher, and we will be set to &#x60;grade&#x60; once the teacher returns the submission | [optional]
**grade** | **float** | Optional grade. If unset, no grade was set. | [optional]
**exercises_ids** | **string[]** | The ids of exercises when they need to be in a specific order | [optional]
**return** | **bool** | If &#x60;true&#x60;, the submission will be marked as done | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
