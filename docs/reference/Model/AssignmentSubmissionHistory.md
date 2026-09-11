# AssignmentSubmissionHistory

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **\DateTime** | The date when the submission was changed |
**classroom** | **string** | The classroom unique identifier where the submission was changed | [optional]
**assignment** | **string** | The assignment unique identifier where the submission was changed | [optional]
**submission** | **string** | The submission unique identifier | [optional]
**users** | **string[]** | The user(s) unique identifier(s) who made the change |
**source** | **string** | The source of the change if the change was made by a third-party software | [optional]
**state** | [**\Flat\APIClient\Model\AssignmentSubmissionHistoryState**](AssignmentSubmissionHistoryState.md) |  | [optional]
**draft_grade** | **float** | The numerator of the grade at this time in the submission grade history | [optional]
**grade** | **float** | The numerator of the grade at this time in the submission grade history | [optional]
**max_points** | **float** | The denominator of the grade at this time in the submission grade history | [optional]
**comment** | **string** | The comment that is made to this submission | [optional]
**due_date** | **\DateTime** | The due date of this assignment | [optional]
**attachment** | [**\Flat\APIClient\Model\AssignmentSubmissionHistoryAttachment**](AssignmentSubmissionHistoryAttachment.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
