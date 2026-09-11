# ClassAttachmentCreation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the attachment posted: * &#x60;rich&#x60;, &#x60;photo&#x60;, &#x60;video&#x60; are attachment types that are automatically resolved from a &#x60;link&#x60; attachment. * A &#x60;flat&#x60; attachment is a score document where the unique identifier will be specified in the &#x60;score&#x60; property. Its sharing mode will be provided in the &#x60;sharingMode&#x60; property. | [optional]
**score** | **string** | A unique Flat score identifier. The user creating the assignment must at least have read access to the document. If the user has admin rights, new group permissions will be automatically added for the teachers and students of the class. | [optional]
**worksheet** | **string** | An unique worksheet identifier | [optional]
**revision** | **string** | An unique revision identifier of a score | [optional]
**part_uuid** | **string** | The UUID of the instrument part selected for this attachment (for performance submissions) | [optional]
**sharing_mode** | [**\Flat\APIClient\Model\MediaScoreSharingMode**](MediaScoreSharingMode.md) |  | [optional]
**lock_score_template** | **bool** | To be used with a score attached in &#x60;sharingMode&#x60; &#x60;copy&#x60; (score used as template). If true, students won&#39;t be able to change the original notes of the template. | [optional]
**url** | **string** | The URL of the attachment. | [optional]
**google_drive_file_id** | **string** | The ID of the Google Drive File | [optional]
**teacher_only** | **bool** | Flag indicating if this attachment should only be visible to teachers | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
