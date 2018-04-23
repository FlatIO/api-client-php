# ScoreTrack

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the score track | [optional] 
**title** | **string** | Title of the track | [optional] 
**score** | **string** | The unique identifier of the score | [optional] 
**creator** | **string** | The unique identifier of the track creator | [optional] 
**creationDate** | [**\DateTime**](\DateTime.md) | The creation date of the track | [optional] 
**modificationDate** | [**\DateTime**](\DateTime.md) | The modification date of the track | [optional] 
**default** | **bool** | True if the track should be used as default audio source | [optional] 
**state** | [**\Flat\APIClient\Model\ScoreTrackState**](ScoreTrackState.md) |  | [optional] 
**type** | [**\Flat\APIClient\Model\ScoreTrackType**](ScoreTrackType.md) |  | [optional] 
**url** | **string** | The URL of the track | [optional] 
**mediaId** | **string** | The unique identifier of the track when hosted on an external service. For example, if the url is &#x60;https://www.youtube.com/watch?v&#x3D;dQw4w9WgXcQ&#x60;, &#x60;mediaId&#x60; will be &#x60;dQw4w9WgXcQ&#x60; | [optional] 
**synchronizationPoints** | [**\Flat\APIClient\Model\ScoreTrackPoint[]**](ScoreTrackPoint.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


