# MediaAttachment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the assignment resolved: * &#x60;rich&#x60;, &#x60;photo&#x60;, &#x60;video&#x60; are attachment types that are automatically resolved from a &#x60;link&#x60; attachment. * A &#x60;flat&#x60; attachment is a score document where the unique identifier will be specified in the &#x60;score&#x60; property. Its sharing mode will be provided in the &#x60;sharingMode&#x60; property. | [optional] 
**score** | **string** | An unique Flat score identifier | [optional] 
**revision** | **string** | An unique revision identifier of a score | [optional] 
**correct** | **bool** | If the attachment is an exercise question, this state will describe if it is correct or not.For exercise assignments only. | [optional] 
**sharingMode** | [**\Flat\APIClient\Model\MediaScoreSharingMode**](MediaScoreSharingMode.md) |  | [optional] 
**title** | **string** | The resolved title of the attachment | [optional] 
**description** | **string** | The resolved description of the attachment | [optional] 
**html** | **string** | If the attachment type is &#x60;rich&#x60; or &#x60;video&#x60;, the HTML code of the media to display | [optional] 
**htmlWidth** | **string** | If the &#x60;html&#x60; is available, the width of the widget | [optional] 
**htmlHeight** | **string** | If the &#x60;html&#x60; is available, the height of the widget | [optional] 
**url** | **string** | The url of the attachment | [optional] 
**thumbnailUrl** | **string** | If the attachment type is &#x60;rich&#x60;, &#x60;video&#x60;, &#x60;photo&#x60; or &#x60;link&#x60;, a displayable thumbnail for this attachment | [optional] 
**thumbnailWidth** | **string** | If the &#x60;thumbnailUrl&#x60; is available, the width of the thumbnail | [optional] 
**thumbnailHeight** | **string** | If the &#x60;thumbnailUrl&#x60; is available, the width of the thumbnail | [optional] 
**authorName** | **string** | The resolved author name of the attachment | [optional] 
**authorUrl** | **string** | The resolved author url of the attachment | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


