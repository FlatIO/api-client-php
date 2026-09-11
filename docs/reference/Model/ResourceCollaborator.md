# ResourceCollaborator

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**acl_read** | **bool** | &#x60;True&#x60; if the current user can read the current document | [default to false]
**acl_write** | **bool** | &#x60;True&#x60; if the current user can modify the current document.  If this is a right of a Collection, the capabilities of the associated user can be lower than this permission, check out the &#x60;capabilities&#x60; property as the end-user to have the complete possibilities with the collection. | [default to false]
**acl_admin** | **bool** | &#x60;True&#x60; if the current user can manage the current document (i.e. share, delete)  If this is a right of a Collection, the capabilities of the associated user can be lower than this permission, check out the &#x60;capabilities&#x60; property as the end-user to have the complete possibilities with the collection. | [default to false]
**is_collaborator** | **bool** | &#x60;True&#x60; if the current user is a collaborator of the current document (direct or via group). | [optional] [default to false]
**collaborator_type** | **string** | The type of the collaborator for the resource | [optional]
**id** | **string** | The unique identifier of the permission | [optional]
**date** | **\DateTime** | The date when the permission was added | [optional]
**score** | **string** | If this object is a permission of a score, this property will contain the unique identifier of the score | [optional]
**collection** | **string** | If this object is a permission of a collection, this property will contain the unique identifier of the collection | [optional]
**user** | [**\Flat\APIClient\Model\UserPublic**](UserPublic.md) |  | [optional]
**group** | [**\Flat\APIClient\Model\Group**](Group.md) |  | [optional]
**user_email** | **string** | If the collaborator is not a user of Flat yet, this field will contain their email. | [optional]
**invited** | **bool** | If this property is &#x60;true&#x60;, this is still a pending invitation | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
