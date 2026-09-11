# Task

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the task |
**type** | **string** | Type of the task: * &#x60;audio-export&#x60;: Exports a score to audio format (MP3, WAV) * &#x60;score-save&#x60;: Saves or updates a score document * &#x60;import-omr&#x60;: Processes a PDF through OMR (Optical Music Recognition) and imports it as a score | [optional]
**state** | **string** | State of the Task |
**format** | **string** | For files processing, the file format (e.g. &#x60;mp3&#x60;, &#x60;wav&#x60;) | [optional]
**score** | **string** | The score unique identifier for tasks related to scores | [optional]
**revision** | **string** | The score revision identifier for tasks related to scores | [optional]
**progress** | [**\Flat\APIClient\Model\TaskProgress**](TaskProgress.md) |  | [optional]
**creation_date** | **\DateTime** | The creation date of the task | [optional]
**modification_date** | **\DateTime** | The last modification date of the task | [optional]
**done_date** | **\DateTime** | The date when the task has been completed | [optional]
**result** | [**\Flat\APIClient\Model\TaskResult**](TaskResult.md) |  | [optional]
**error_history** | **string[]** | If any errors happened when processing this task, the list of errors identifiers | [optional]
**is_cancellable** | **bool** | Whether the task can be canceled by the user. Only &#x60;true&#x60; when the task is in &#x60;created&#x60; state (waiting to be processed). | [optional] [readonly]
**children** | [**\Flat\APIClient\Model\Task[]**](Task.md) | Child tasks for hierarchical task structures (e.g., conversion subtasks) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
