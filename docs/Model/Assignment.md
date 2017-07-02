# Assignment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | **string** | State of the assignment | [optional] 
**title** | **string** | Title of the assignment | [optional] 
**classroom** | **string** | The unique identifier of the class where this assignment was posted | [optional] 
**description** | **string** | Description and content of the assignment | [optional] 
**attachments** | [**\Flat\APIClient\Model\MediaAttachment[]**](MediaAttachment.md) |  | [optional] 
**submissions** | [**\Flat\APIClient\Model\AssignmentSubmission[]**](AssignmentSubmission.md) |  | [optional] 
**creator** | **string** | The User unique identifier of the creator of this assignment | [optional] 
**creationDate** | [**\DateTime**](\DateTime.md) | The creation date of this assignment | [optional] 
**scheduledDate** | [**\DateTime**](\DateTime.md) | The publication (scheduled) date of the assignment. If this one is specified, the assignment will only be listed to the teachers of the class. | [optional] 
**dueDate** | [**\DateTime**](\DateTime.md) | The due date of this assignment, late submissions will be marked as paste due. | [optional] 
**googleClassroom** | [**\Flat\APIClient\Model\GoogleClassroomCoursework**](GoogleClassroomCoursework.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


