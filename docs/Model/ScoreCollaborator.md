# ScoreCollaborator

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the score permission | [optional] 
**score** | **string** | The unique identifier of the score | [optional] 
**user** | [**\Flat\APIClient\Model\UserPublic**](UserPublic.md) |  | [optional] 
**group** | [**\Flat\APIClient\Model\Group**](Group.md) |  | [optional] 
**userEmail** | **string** | If the collaborator is not a user of Flat yet, this field will contain his email. | [optional] 
**aclRead** | **bool** | &#x60;True&#x60; if the related user can read the score. (probably true if the user has a permission on the document). | [optional] [default to true]
**aclWrite** | **bool** | &#x60;True&#x60; if the related user can modify the score. | [optional] [default to false]
**aclAdmin** | **bool** | &#x60;True&#x60; if the related user can can manage the current document, i.e. changing the document permissions and deleting the document | [optional] [default to false]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


