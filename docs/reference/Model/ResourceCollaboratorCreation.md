# ResourceCollaboratorCreation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | **string** | The unique identifier of a Flat user | [optional]
**group** | **string** | The unique identifier of a Flat group | [optional]
**user_email** | **string** | Fill this field to invite an individual user by email. | [optional]
**user_token** | **string** | Token received in an invitation to join the score. | [optional]
**acl_read** | **bool** | &#x60;True&#x60; if the related user can read the score. (probably true if the user has a permission on the document). | [optional] [default to true]
**acl_write** | **bool** | &#x60;True&#x60; if the related user can modify the score. | [optional] [default to false]
**acl_admin** | **bool** | &#x60;True&#x60; if the related user can can manage the current document, i.e. changing the document permissions and deleting the document | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
