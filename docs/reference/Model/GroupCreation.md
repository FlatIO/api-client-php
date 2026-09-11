# GroupCreation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of group (currently only classStudentsSubGroup is supported) |
**classroom** | **string** | Classroom ID |
**name** | **string** | Name of the group (optional - auto-generated if not provided).  **Special names:**  * &#x60;edu:testing-students&#x60;: Creates a group tagged for test student accounts. The display name will be localized (e.g., \&quot;Test Students\&quot;) and the group will be tagged with &#x60;edu:testing-students&#x60;. | [optional]
**members** | **string[]** | Array of student IDs to add to the group | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
