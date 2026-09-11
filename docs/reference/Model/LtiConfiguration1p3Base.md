# LtiConfiguration1p3Base

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mode** | **string** | LTI 1.3 configuration mode | [optional]
**platform_iss** | **string** | Platform issuer URL | [optional]
**platform_name** | **string** | Platform display name | [optional]
**client_id** | **string** | OAuth2 client_id allocated by the platform | [optional]
**deployment_id** | **string** | Deployment ID linking the tool to a tenant/class (varies by platform) | [optional]
**access_token_url** | **string** | OAuth2 token endpoint (for AGS/NRPS) | [optional]
**authorization_url** | **string** | OIDC authorization/login endpoint | [optional]
**jwks_url** | **string** | Platform JWKS endpoint (public keys) | [optional]
**deployment_mode** | **string** | Deployment mode (single for organization-specific, multi for shared parent platforms) | [optional]
**supported_services** | [**\Flat\APIClient\Model\LtiConfiguration1p3BaseSupportedServices**](LtiConfiguration1p3BaseSupportedServices.md) |  | [optional]
**tool** | [**\Flat\APIClient\Model\LtiConfiguration1p3BaseTool**](LtiConfiguration1p3BaseTool.md) |  | [optional]
**public_keyset_url** | **string** | Public keyset URL for the platform to retrieve Flat&#39;s public keys | [optional]
**initiate_login_url** | **string** | URL for the platform to initiate LTI login | [optional]
**redirect_uris** | **string[]** | Allowed redirect URIs for LTI launches | [optional]
**enable_email_matching** | **bool** | Enable email-based user matching during LTI authentication.  When true (default): If a user with the same email exists in the organization, they will be matched and logged in instead of creating a new account.  When false: Email matching is disabled. Only LTI ID matching is used, which means multiple LTI users can share the same email address and have separate Flat accounts. This is useful for cases like siblings sharing a parent email in the LMS. | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
