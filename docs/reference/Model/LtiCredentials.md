# LtiCredentials

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of this couple of credentials | [optional]
**name** | **string** | Name of the couple of credentials | [optional]
**lms** | [**\Flat\APIClient\Model\LmsName**](LmsName.md) |  | [optional]
**organization** | **string** | The unique identifier of the Organization associated to these credentials | [optional]
**creator** | **string** | Unique identifier of the user who created these credentials | [optional]
**creation_date** | **\DateTime** | The creation date of thse credentials | [optional]
**last_usage** | **\DateTime** | The last time these credentials were used | [optional]
**consumer_key** | **string** | OAuth 1 Consumer Key | [optional]
**consumer_secret** | **string** | OAuth 1 Consumer Secret | [optional]
**enable_email_matching** | **bool** | Enable email-based user matching during LTI authentication.  When true (default): If a user with the same email exists in the organization, they will be matched and logged in instead of creating a new account.  When false: Email matching is disabled. Only LTI ID matching is used, which means multiple LTI users can share the same email address and have separate Flat accounts. This is useful for cases like siblings sharing a parent email in the LMS. | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
