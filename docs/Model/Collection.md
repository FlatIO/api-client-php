# Collection

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the collection | [optional] 
**title** | [**\Flat\APIClient\Model\CollectionTitle**](CollectionTitle.md) |  | [optional] 
**htmlUrl** | **string** | The url where the collection can be viewed in a web browser | [optional] 
**type** | [**\Flat\APIClient\Model\CollectionType**](CollectionType.md) |  | [optional] 
**privacy** | [**\Flat\APIClient\Model\CollectionPrivacy**](CollectionPrivacy.md) |  | [optional] 
**sharingKey** | **string** | The private sharing key of the collection (available when the &#x60;privacy&#x60; mode is set to &#x60;privateLink&#x60;) | [optional] 
**app** | **string** | If this directory is dedicated to an app, the unique idenfier of this app | [optional] 
**user** | [**\Flat\APIClient\Model\UserPublicSummary**](UserPublicSummary.md) |  | [optional] 
**rights** | [**\Flat\APIClient\Model\ResourceRights**](ResourceRights.md) |  | [optional] 
**collaborators** | [**\Flat\APIClient\Model\ResourceCollaborator[]**](ResourceCollaborator.md) | The list of the collaborators of the collection | [optional] 
**capabilities** | [**\Flat\APIClient\Model\CollectionCapabilities**](CollectionCapabilities.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


