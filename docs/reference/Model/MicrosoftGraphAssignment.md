# MicrosoftGraphAssignment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifier of the assignment assigned by Microsoft Teams | [optional]
**state** | **string** | State of the assignment on Microsoft Teams.  * &#x60;draft&#x60;: Assignment is in draft mode * &#x60;scheduled&#x60;: Assignment is scheduled to be published at a future date * &#x60;published&#x60;: Assignment has been published to students * &#x60;assigned&#x60;: Assignment has been assigned (legacy status) * &#x60;inactive&#x60;: Assignment is inactive | [optional]
**alternate_link** | **string** | Absolute link to this assignment in the Microsoft Teams web UI | [optional]
**assign_date_time** | **\DateTime** | The date when the assignment will become active on Microsoft Teams.  If set to a future date, the assignment will have status &#x60;scheduled&#x60; and won&#39;t be visible to students until this date. | [optional]
**categories** | **string[]** | List of categories where this assignment is published under | [optional]
**assign_to_type** | **string** | Recipient configuration for this assignment on Microsoft Teams.  * &#x60;class&#x60;: Assignment is visible to all students in the class * &#x60;individual&#x60;: Assignment is visible only to specific assigned students | [optional]
**assigned_students_ms_ids** | **string[]** | When assignToType is &#39;individual&#39;, array of Microsoft Azure user IDs of students assigned to this assignment. These are the students who can see and submit to this assignment on Teams. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
