# ScoreDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the score | [optional] 
**sharingKey** | **string** | The private sharing key of the score (available when the &#x60;privacy&#x60; mode is set to &#x60;privateLink&#x60;) | [optional] 
**title** | **string** | The title of the score | [optional] 
**privacy** | [**\Flat\APIClient\Model\ScorePrivacy**](ScorePrivacy.md) |  | [optional] 
**user** | [**\Flat\APIClient\Model\UserPublicSummary**](UserPublicSummary.md) |  | [optional] 
**htmlUrl** | **string** | The url where the score can be viewed in a web browser | [optional] 
**subtitle** | **string** | Subtitle of the score | [optional] 
**lyricist** | **string** | Lyricist of the score | [optional] 
**composer** | **string** | Composer of the score | [optional] 
**description** | **string** | Description of the creation | [optional] 
**tags** | **string[]** | Tags describing the score | [optional] 
**creationType** | [**\Flat\APIClient\Model\ScoreCreationType**](ScoreCreationType.md) |  | [optional] 
**license** | [**\Flat\APIClient\Model\ScoreLicense**](ScoreLicense.md) |  | [optional] 
**licenseText** | **string** | Additional license text written on the exported/printed score | [optional] 
**durationTime** | **int** | In seconds, an approximative duration of the score | [optional] 
**numberMeasures** | **int** | The number of measures in the score | [optional] 
**mainTempoQpm** | **int** | The main tempo of the score (in QPM) | [optional] 
**rights** | [**\Flat\APIClient\Model\ResourceRights**](ResourceRights.md) |  | [optional] 
**collaborators** | [**\Flat\APIClient\Model\ResourceCollaborator[]**](ResourceCollaborator.md) | The list of the collaborators of the score | [optional] 
**creationDate** | [**\DateTime**](\DateTime.md) | The date when the score was created | [optional] 
**modificationDate** | [**\DateTime**](\DateTime.md) | The date of the last revision of the score | [optional] 
**publicationDate** | [**\DateTime**](\DateTime.md) | The date when the score was published on Flat | [optional] 
**organization** | **string** | If the score has been created in an organization, the identifier of this organization. This property is especially used with the score privacy &#x60;organizationPublic&#x60;. | [optional] 
**parentScore** | **string** | If the score has been forked, the unique identifier of the parent score. | [optional] 
**instruments** | **string[]** | An array of the instrument identifiers used in the last version of the score. This is mainly used to display a list of the instruments in the Flat&#39;s UI or instruments icons. The format of the strings is &#x60;{instrument-group}.{instrument-id}&#x60;. | [optional] 
**googleDriveFileId** | **string** | If the user uses Google Drive and the score exists on Google Drive, this field will contain the unique identifier of the Flat score on Google Drive. You can access the document using the url: &#x60;https://drive.google.com/open?id&#x3D;{googleDriveFileId}&#x60; | [optional] 
**likes** | [**\Flat\APIClient\Model\ScoreLikesCounts**](ScoreLikesCounts.md) |  | [optional] 
**comments** | [**\Flat\APIClient\Model\ScoreCommentsCounts**](ScoreCommentsCounts.md) |  | [optional] 
**views** | [**\Flat\APIClient\Model\ScoreViewsCounts**](ScoreViewsCounts.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


