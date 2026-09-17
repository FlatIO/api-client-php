# GroupDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the group |
**name** | **string** | The displayable name of the group |
**type** | [**\Flat\APIClient\Model\GroupType**](GroupType.md) |  |
**organization** | **string** | The unique identifier of the Organization owning the group | [optional]
**classroom** | **string** | The unique identifier of the classroom owning the group. Only available for groups of type &#39;classStudentsSubGroup&#39; or &#39;assignmentStudentsSubGroup&#39; | [optional]
**assignment** | **string** | The unique identifier of the assignment owning the group. Only available for groups of type &#39;assignmentStudentsSubGroup&#39;. | [optional]
**parent** | **string** | The unique identifier of the parent class group. Only available for groups of type &#39;assignmentStudentsSubGroup&#39;. May be null if the parent class group was deleted. | [optional]
**creation_date** | **\DateTime** | The date when the group was created |
**users_count** | **float** | The number of students in this group |
**read_only** | **bool** | &#x60;true&#x60; if the properties and members of this group are read-only |
**tags** | **string[]** | Tags for categorizing groups.  * &#x60;edu:testing-students&#x60;: Marks this group as containing test student accounts |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
