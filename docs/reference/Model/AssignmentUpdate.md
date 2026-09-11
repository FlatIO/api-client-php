# AssignmentUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\Flat\APIClient\Model\AssignmentType**](AssignmentType.md) |  | [optional]
**title** | **string** | Title of the assignment | [optional]
**description** | **string** | Student instructions and content of the assignment (plain text) | [optional]
**description_html** | **string** | HTML version of student instructions. Pasted images may be sent as inline base64 &#x60;data:&#x60; URIs; they are uploaded to storage and rewritten to hosted URLs on save. The final HTML is limited to 100000 characters. When provided, the plain text version will be automatically extracted for compatibility. | [optional]
**teacher_instructions** | **string** | Teacher-only instructions (plain text) | [optional]
**teacher_instructions_html** | **string** | HTML version of teacher-only instructions. Pasted images may be sent as inline base64 &#x60;data:&#x60; URIs; they are uploaded to storage and rewritten to hosted URLs on save. The final HTML is limited to 100000 characters. When provided, the plain text version will be automatically extracted for compatibility. | [optional]
**attachments** | [**\Flat\APIClient\Model\ClassAttachmentCreation[]**](ClassAttachmentCreation.md) | The complete attachment list. Omitting this property on an update leaves the existing attachments alone; sending it replaces them.  Dropping a dedicated score from the list deletes the students&#39; copies of it, so send the full set you want to keep rather than only the additions. Duplicates, judged by &#x60;url&#x60;, &#x60;score&#x60;, &#x60;worksheet&#x60; or &#x60;googleDriveFileId&#x60;, are discarded silently, and exceeding the per-assignment limit fails with &#x60;ASSIGNMENT_ATTACHMENTS_LIMIT&#x60;. | [optional]
**nb_playback_authorized** | **float** | The number of playback authorized on the scores of the assignment. | [optional]
**restrict_play_note** | **bool** | Restrict the ability to get an audio feedback every time a student adds or selects a note. | [optional]
**restrict_to_audio_tracks** | **bool** | Restrict the audio source to provided audio tracks on a score. Students won&#39;t be able to use the editor playback. | [optional]
**toolset** | **string** | The id of the toolset to apply to this assignment. The toolset will be copied to the assignment as a dedicated object to prevent unexpected changes when making modifications to the template toolset. This property can be set to null to delete the linked toolset and switch back to all the tools available for this assignment. | [optional]
**cover_file** | **string** | The id of the cover to display | [optional]
**cover** | **string** | The URL of the cover to display | [optional]
**max_points** | **float** | If set, the grading will be enabled for the assignement with this value as the maximum of points | [optional]
**release_grades** | **string** | For worksheets, how grading will work for the assignment: - If set to &#x60;auto&#x60;, the grades will be automatically released when the student submits the submissions - If set to &#x60;manual&#x60;, the grades will only be set as &#x60;draftGrade&#x60; and will be released when the teacher returns the submissions | [optional]
**shuffle_exercises** | **bool** | Mixing worksheets exercises for each student | [optional]
**submission_students_mode** | [**\Flat\APIClient\Model\AssignmentSubmissionStudentsMode**](AssignmentSubmissionStudentsMode.md) |  | [optional]
**recording_type** | **string** | For performance assignments: recording type that will be either &#39;audio&#39; or &#39;video&#39;.  * &#x60;audio&#x60;: Only audio will be required during the recording. * &#x60;video&#x60;: Camera will be required during the recording.  Only set when type is &#39;performance&#39;. | [optional]
**allow_metronome** | **bool** | For performance assignments: Enable students to use the metronome while they are recording, helping them stay in time. Only set when type is &#39;performance&#39;. | [optional]
**allow_backing_track** | **bool** | For performance assignments: Enable students to listen to the accompaniment without their instrument part while they are playing. Only set when type is &#39;performance&#39;. | [optional]
**allow_speed_change** | **bool** | For performance assignments: whether students can adjust the playback speed of the score during recording.  * &#x60;true&#x60;: Students can change the tempo/speed during practice and recording * &#x60;false&#x60;: Tempo is fixed to the original score tempo  Only set when type is &#39;performance&#39;. | [optional]
**free_record** | **bool** | For performance assignments: \&quot;Free Record\&quot; mode.  When &#x60;true&#x60;, no score is attached to the assignment. Students freely record a varied repertoire or an ensemble performance without being constrained by a single score&#39;s structure or duration, and all score-dependent options (playback, metronome, backtracking, speed control) are hidden.  Only set when type is &#39;performance&#39;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
