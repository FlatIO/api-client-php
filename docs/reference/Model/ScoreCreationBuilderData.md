# ScoreCreationBuilderData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The title of the new score. If the title is too long, the API may trim this one.  If this title is not specified, the API will try to (in this order):   - Use the title contained in the file (e.g. [&#x60;movement-title&#x60;](https://usermanuals.musicxml.com/MusicXML/Content/EL-MusicXML-movement-title.htm) or [&#x60;credit-words&#x60;](https://usermanuals.musicxml.com/MusicXML/Content/EL-MusicXML-credit-words.htm) for [MusicXML](http://www.musicxml.com/) files).   - Use the name of the file for files from a specified &#x60;source&#x60; (e.g. Google Drive) or the one in the &#x60;filename&#x60; property   - Set a default title (e.g. \&quot;New Music Score\&quot;) | [optional]
**privacy** | [**\Flat\APIClient\Model\ScorePrivacy**](ScorePrivacy.md) |  | [optional]
**collection** | **string** | Unique identifier of a collection where the score will be created. If no collection identifier is provided, the score will not be added to any collection and will only be visible in the &#x60;allScores&#x60; virtual collection. | [optional]
**google_drive_folder** | **string** | If the user uses Google Drive and this property is specified, the file will be created in this directory. The user creating the file must have write access to this directory. | [optional]
**builder_data** | [**\Flat\APIClient\Model\ScoreCreationBuilderDataAllOfBuilderData**](ScoreCreationBuilderDataAllOfBuilderData.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
