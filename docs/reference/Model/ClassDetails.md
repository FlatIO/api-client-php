# ClassDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the class |
**state** | [**\Flat\APIClient\Model\ClassState**](ClassState.md) |  |
**name** | **string** | The name of the class |
**section** | **string** | The section of the class | [optional]
**description** | **string** | An optional description for this class | [optional]
**organization** | **string** | The unique identifier of the Organization owning this class | [optional]
**owner** | **string** | The unique identifier of the User owning this class | [optional]
**creation_date** | **\DateTime** | The date when the class was created |
**modification_date** | **\DateTime** | The date when the class was last modified | [optional]
**enrollment_code** | **string** | [Teachers only] The enrollment code that can be used by the students to join the class | [optional]
**theme** | **string** | The theme identifier used in the Flat user interface | [optional]
**assignments_count** | **float** | The number of assignments created in the class | [optional]
**students_group** | [**\Flat\APIClient\Model\GroupDetails**](GroupDetails.md) |  | [optional]
**teachers_group** | [**\Flat\APIClient\Model\GroupDetails**](GroupDetails.md) |  | [optional]
**issues** | [**\Flat\APIClient\Model\ClassDetailsIssues**](ClassDetailsIssues.md) |  | [optional]
**google_classroom** | [**\Flat\APIClient\Model\ClassDetailsGoogleClassroom**](ClassDetailsGoogleClassroom.md) |  | [optional]
**google_drive** | [**\Flat\APIClient\Model\ClassDetailsGoogleDrive**](ClassDetailsGoogleDrive.md) |  | [optional]
**microsoft_graph** | [**\Flat\APIClient\Model\ClassDetailsMicrosoftGraph**](ClassDetailsMicrosoftGraph.md) |  | [optional]
**lti** | [**\Flat\APIClient\Model\ClassDetailsLti**](ClassDetailsLti.md) |  | [optional]
**canvas** | [**\Flat\APIClient\Model\ClassDetailsCanvas**](ClassDetailsCanvas.md) |  | [optional]
**mfc** | [**\Flat\APIClient\Model\ClassDetailsMfc**](ClassDetailsMfc.md) |  | [optional]
**clever** | [**\Flat\APIClient\Model\ClassDetailsClever**](ClassDetailsClever.md) |  | [optional]
**level** | [**\Flat\APIClient\Model\ClassGradeLevel**](ClassGradeLevel.md) |  | [optional]
**skills_focused** | **string[]** | Specific skills that will be focused in classroom | [optional]
**size** | **float** | Number of students in the classroom | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
