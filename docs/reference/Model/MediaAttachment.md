# MediaAttachment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The resolved type of the attachment: * &#x60;rich&#x60;, &#x60;photo&#x60;, &#x60;video&#x60; are automatically resolved as &#x60;link&#x60; * A &#x60;flat&#x60; attachment is a score document where the unique identifier will be specified in the &#x60;score&#x60; property. Its sharing mode will be provided in the &#x60;sharingMode&#x60; property. |
**score** | **string** | A unique Flat score identifier | [optional]
**revision** | **string** | A unique revision identifier of a score | [optional]
**worksheet** | **string** | A unique worksheet identifier | [optional]
**dedicated** | **bool** | True if the resource is dedicated for the assignment (for scores and worksheets), meaning on the user-side this one is stored in the assignment | [optional]
**track** | **string** | A unique track identifier | [optional]
**part_uuid** | **string** | The UUID of the instrument part selected for this attachment (for performance submissions) | [optional]
**sharing_mode** | [**\Flat\APIClient\Model\MediaScoreSharingMode**](MediaScoreSharingMode.md) |  | [optional]
**lock_score_template** | **bool** | To be used with a score attached in &#x60;sharingMode&#x60; &#x60;copy&#x60; (score used as template). If true, students won&#39;t be able to change the original notes of the template. | [optional]
**title** | **string** | The resolved title of the attachment | [optional]
**description** | **string** | The resolved description of the attachment | [optional]
**html** | **string** | If the attachment type is &#x60;rich&#x60; or &#x60;video&#x60;, the HTML code of the media to display | [optional]
**html_width** | **float** | If the &#x60;html&#x60; is available, the width of the widget | [optional]
**html_height** | **float** | If the &#x60;html&#x60; is available, the height of the widget | [optional]
**url** | **string** | The url of the attachment | [optional]
**thumbnail_url** | **string** | If the attachment type is &#x60;rich&#x60;, &#x60;video&#x60;, &#x60;photo&#x60; or &#x60;link&#x60;, a displayable thumbnail for this attachment | [optional]
**thumbnail_width** | **int** | If the &#x60;thumbnailUrl&#x60; is available, the width of the thumbnail | [optional]
**thumbnail_height** | **int** | If the &#x60;thumbnailUrl&#x60; is available, the height of the thumbnail | [optional]
**author_name** | **string** | The resolved author name of the attachment | [optional]
**author_url** | **string** | The resolved author url of the attachment | [optional]
**icon_url** | **string** | The URL of the icon | [optional]
**mime_type** | **string** | The MIME type of the file | [optional]
**google_drive_file_id** | **string** | The ID of the Google Drive File | [optional]
**teacher_only** | **bool** | If true, this attachment is only visible to teachers. When students view the assignment, attachments with this flag will be filtered out. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
