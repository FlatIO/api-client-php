# LtiConfigurationCreate1p3Deployment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mode** | **string** | LTI 1.3 deployment-based creation mode |
**deployment_type** | **string** | Parent platform key (e.g., canvas, blackboard, schoology, classlink) |
**deployment_id** | **string** | Deployment identifier provided by the platform |
**client_id** | **string** | OAuth2 client_id for the tenant; required for ClassLink deployments | [optional]
**deployment_breakdown_id** | **string** | Value of the custom claim that identifies this specific tenant (for multi-tenant platforms like Schoology) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
