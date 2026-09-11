# ApiAccessToken

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of this private token | [optional]
**name** | **string** | Name of the personal access token | [optional]
**token** | **string** | The token. This token will only be returned once, then only the first 4 characters will be returned. | [optional]
**issued_date** | **\DateTime** | The date then this token was issued | [optional]
**expiration_date** | **\DateTime** | The date then this token will expire | [optional]
**scopes** | [**\Flat\APIClient\Model\AppScopes[]**](AppScopes.md) | The list of scopes associated to the token | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
