# ClassDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the class | [optional] 
**state** | [**\Flat\APIClient\Model\ClassState**](ClassState.md) |  | [optional] 
**name** | **string** | The name of the class | [optional] 
**section** | **string** | The section of the class | [optional] 
**description** | **string** | An optionnal description for this class | [optional] 
**organization** | **string** | The unique identifier of the Organization owning this class | [optional] 
**owner** | **string** | The unique identifier of the User owning this class | [optional] 
**creationDate** | [**\DateTime**](\DateTime.md) | The date when the class was create | [optional] 
**enrollmentCode** | **string** | [Teachers only] The enrollment code that can be used by the students to join the class | [optional] 
**theme** | **string** | The theme identifier using in Flat User Interface | [optional] 
**assignmentsCount** | **float** | The number of assignments created in the class | [optional] 
**studentsGroup** | [**\Flat\APIClient\Model\GroupDetails**](GroupDetails.md) |  | [optional] 
**teachersGroup** | [**\Flat\APIClient\Model\GroupDetails**](GroupDetails.md) |  | [optional] 
**googleClassroom** | [**\Flat\APIClient\Model\ClassDetailsGoogleClassroom**](ClassDetailsGoogleClassroom.md) |  | [optional] 
**googleDrive** | [**\Flat\APIClient\Model\ClassDetailsGoogleDrive**](ClassDetailsGoogleDrive.md) |  | [optional] 
**lti** | [**\Flat\APIClient\Model\ClassDetailsLti**](ClassDetailsLti.md) |  | [optional] 
**canvas** | [**\Flat\APIClient\Model\ClassDetailsCanvas**](ClassDetailsCanvas.md) |  | [optional] 
**clever** | [**\Flat\APIClient\Model\ClassDetailsClever**](ClassDetailsClever.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


