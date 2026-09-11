# AssignmentSubmission

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the submission |
**state** | [**\Flat\APIClient\Model\AssignmentSubmissionState**](AssignmentSubmissionState.md) |  |
**classroom** | **string** | Unique identifier of the classroom where the assignment was posted |
**assignment** | **string** | Unique identifier of the assignment |
**creator** | **string** | The User identifier of the student who created the submission |
**creation_date** | **string** | The date when the submission was created |
**attachments** | [**\Flat\APIClient\Model\MediaAttachment[]**](MediaAttachment.md) |  |
**submission_date** | **string** | The date when the student submitted their work | [optional]
**return_date** | **string** | The date when the teacher returned the work | [optional]
**return_creator** | **string** | The User unique identifier of the teacher who returned the submission | [optional]
**grade** | **float** | Optional grade. If unset, no grade was set. | [optional]
**draft_grade** | **float** | Optional grade. If unset, no grade was set. This value is only visible by the teacher, and we will be set to &#x60;grade&#x60; once the teacher returns the submission | [optional]
**max_points** | **float** | Optional max points for the grade. If set, a corresponding &#x60;draftGrade&#x60; or &#x60;grade&#x60; will be set. | [optional]
**exercises_ids** | **string[]** | The ids of exercises when they need to be in a specific order | [optional]
**playback** | [**\Flat\APIClient\Model\AssignmentSubmissionPlayback[]**](AssignmentSubmissionPlayback.md) |  |
**comments** | [**\Flat\APIClient\Model\AssignmentSubmissionComments**](AssignmentSubmissionComments.md) |  |
**google_classroom** | [**\Flat\APIClient\Model\GoogleClassroomSubmission**](GoogleClassroomSubmission.md) |  | [optional]
**microsoft_graph** | [**\Flat\APIClient\Model\MicrosoftGraphSubmission**](MicrosoftGraphSubmission.md) |  | [optional]
**lti** | [**\Flat\APIClient\Model\AssignmentSubmissionLti**](AssignmentSubmissionLti.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
