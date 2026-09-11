# Collection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the collection |
**title** | **string** | The title of the collection |
**html_url** | **string** | The url where the collection can be viewed in a web browser |
**type** | [**\Flat\APIClient\Model\CollectionType**](CollectionType.md) |  |
**label_key** | **string** | Product-specific translation key for the collection type.  Only set for specific collection types: * For &#x60;regular&#x60; type: &#x60;playlist&#x60; (Flat) or &#x60;collection&#x60; (Flat for Education) * For &#x60;collaborations&#x60; type: &#x60;collaboration&#x60; (Flat) or &#x60;shared-scores&#x60; (Flat for Education)  Not set for other collection types. | [optional]
**privacy** | [**\Flat\APIClient\Model\CollectionPrivacy**](CollectionPrivacy.md) |  |
**sharing_key** | **string** | The private sharing key of the collection (available when the &#x60;privacy&#x60; mode is set to &#x60;privateLink&#x60;) | [optional]
**app** | [**\Flat\APIClient\Model\CollectionApp**](CollectionApp.md) |  | [optional]
**creation_date** | **\DateTime** | The date when the collection was created |
**modification_date** | **\DateTime** | The date when the collection was last modified | [optional]
**user** | [**\Flat\APIClient\Model\UserPublicSummary**](UserPublicSummary.md) |  | [optional]
**organization** | **string** | If the score has been created in an organization, the identifier of this organization. | [optional]
**rights** | [**\Flat\APIClient\Model\ResourceRights**](ResourceRights.md) |  | [optional]
**collaborators** | [**\Flat\APIClient\Model\ResourceCollaborator[]**](ResourceCollaborator.md) | The list of the collaborators of the collection | [optional]
**is_pinned** | **bool** | Whether the collection is pinned by the owner | [optional]
**contents** | [**\Flat\APIClient\Model\CollectionContents**](CollectionContents.md) |  |
**capabilities** | [**\Flat\APIClient\Model\CollectionCapabilities**](CollectionCapabilities.md) |  |
**collections** | **string[]** | The List of parent collections, which includes all the collections this score is included. Please note that you might not have access to all of them. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
