# UserBasics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The user unique identifier |
**type** | **string** | The type of user account |
**product** | [**\Flat\APIClient\Model\TutteoProduct**](TutteoProduct.md) |  |
**username** | **string** | The user name (unique for the organization) |
**printable_name** | **string** | The name that can be directly printed (name, firstname &amp; lastname, or username) | [optional]
**firstname** | **string** | Firstname of the user (for education users) | [optional]
**lastname** | **string** | Lastname of the user (for education users) | [optional]
**name** | **string** | A displayable name for the user (for consumer users) | [optional]
**picture** | **string** | The URL of the picture to display |
**badges** | **string[]** | List of badges for the user profile:  - &#x60;power&#x60; - &#x60;staff&#x60; - &#x60;composerOfTheMonth&#x60; - &#x60;ambassador&#x60; - &#x60;challenge&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
