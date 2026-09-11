# ScoreTrack

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the score track |
**title** | **string** | Title of the track | [optional]
**score** | **string** | The unique identifier of the score. Absent for Free Record performance submissions, which are recorded without an attached score. | [optional]
**creator** | **string** | The unique identifier of the track creator |
**creation_date** | **\DateTime** | The creation date of the track |
**modification_date** | **\DateTime** | The modification date of the track |
**default** | **bool** | True if the track should be used as default audio source |
**state** | [**\Flat\APIClient\Model\ScoreTrackState**](ScoreTrackState.md) |  |
**type** | [**\Flat\APIClient\Model\ScoreTrackType**](ScoreTrackType.md) |  |
**purpose** | [**\Flat\APIClient\Model\ScoreTrackPurpose**](ScoreTrackPurpose.md) |  |
**url** | **string** | The URL of the track | [optional]
**media_id** | **string** | The unique identifier of the track when hosted on an external service. For example, if the url is &#x60;https://www.youtube.com/watch?v&#x3D;dQw4w9WgXcQ&#x60;, &#x60;mediaId&#x60; will be &#x60;dQw4w9WgXcQ&#x60; | [optional]
**synchronization_points** | [**\Flat\APIClient\Model\ScoreTrackPoint[]**](ScoreTrackPoint.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
