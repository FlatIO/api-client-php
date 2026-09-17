# OrganizationInvitation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The invitation unique identifier | [optional]
**creation_date** | **\DateTime** | The creation date of the invitation | [optional]
**organization** | **string** | The unique identifier of the Organization this invitation belongs to |
**organization_role** | [**\Flat\APIClient\Model\OrganizationRoles**](OrganizationRoles.md) |  |
**custom_code** | **string** | Enrollment code to use when joining this organization |
**email** | **string** | The email address this invitation was sent to | [optional]
**invited_by** | **string** | The unique identifier of the User who created this invitation | [optional]
**html_url** | **string** | URL to join the organization using this invitation | [optional]
**allow_multiple_use** | **bool** | If true, the invitation can be used multiple times. If false, the invitation can only be used once. |
**used_by** | **string[]** | List of users who used this invitation | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
