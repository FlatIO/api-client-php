# EduResourceCreation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\Flat\APIClient\Model\EduResourceType**](EduResourceType.md) |  |
**title** | **string** | Title of the resource |
**parent** | **string** | Identifier of the parent resource where the new one will created, e.g. a folder id or &#x60;root&#x60; | [optional] [default to 'root']
**sharing_description** | **string** | Sharing description of the resource | [optional]
**sharing_description_html** | **string** | HTML version of sharing description with rich text formatting.  Supports safe HTML tags: p, br, strong, b, em, i, u, a. | [optional]
**resource** | [**\Flat\APIClient\Model\EduResourceAssignmentCreation**](EduResourceAssignmentCreation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
