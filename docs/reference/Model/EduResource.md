# EduResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Resource unique identifier |
**creator** | **string** | The User identifier of the resource creator | [optional]
**type** | [**\Flat\APIClient\Model\EduResourceType**](EduResourceType.md) |  |
**privacy** | [**\Flat\APIClient\Model\EduResourcePrivacy**](EduResourcePrivacy.md) |  | [optional]
**tags** | **string[]** | Specific attributes for the resource (e.g. sample resources with custom design) | [optional]
**parent** | **string** | Identifier of the parent resource, e.g. a folder or root | [optional]
**title** | **string** | Title of the resource |
**sharing_description** | **string** | Sharing description of this resource | [optional]
**sharing_description_html** | **string** | HTML version of sharing description with rich text formatting.  Supports safe HTML tags: p, br, strong, b, em, i, u, a. | [optional]
**creation_date** | **\DateTime** | The date when the resource was created | [optional]
**update_date** | **\DateTime** | The date when the resource was updated | [optional]
**resource** | [**\Flat\APIClient\Model\EduResourceResource**](EduResourceResource.md) |  | [optional]
**capabilities** | [**\Flat\APIClient\Model\EduResourceCapabilities**](EduResourceCapabilities.md) |  |
**subjects** | [**\Flat\APIClient\Model\TeachingTheme[]**](TeachingTheme.md) | The subjects of this resource, or the subjects of the resources included in the folder | [optional]
**grades** | [**\Flat\APIClient\Model\Grade[]**](Grade.md) | The grades of this resource, or the grades of the resources included in the folder. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
