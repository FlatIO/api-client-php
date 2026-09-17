# ScoreDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the score |
**sharing_key** | **string** | The private sharing key of the score (available when the &#x60;privacy&#x60; mode is set to &#x60;privateLink&#x60;) | [optional]
**title** | **string** | The title of the score |
**privacy** | [**\Flat\APIClient\Model\ScorePrivacy**](ScorePrivacy.md) |  |
**user** | [**\Flat\APIClient\Model\UserPublic**](UserPublic.md) |  |
**html_url** | **string** | The url where the score can be viewed in a web browser |
**edit_html_url** | **string** | The url where the score can be edited in a web browser |
**subtitle** | **string** | Subtitle of the score | [optional]
**lyricist** | **string** | Lyricist of the score | [optional]
**arranger** | **string** | Arranger of the score | [optional]
**composer** | **string** | Composer of the score | [optional]
**description** | **string** | Description of the creation | [optional]
**tags** | **string[]** | Tags describing the score | [optional]
**creation_type** | [**\Flat\APIClient\Model\ScoreCreationType**](ScoreCreationType.md) |  | [optional]
**license** | [**\Flat\APIClient\Model\ScoreLicense**](ScoreLicense.md) |  | [optional]
**license_text** | **string** | Additional license text written on the exported/printed score | [optional]
**duration_time** | **float** | In seconds, an approximate duration of the score | [optional]
**number_measures** | **int** | The number of measures in the score | [optional]
**main_tempo_qpm** | **float** | The main tempo of the score (in QPM) | [optional]
**main_key_signature** | **float** | The main key signature of the score (expressed between -7 and 7). | [optional]
**rights** | [**\Flat\APIClient\Model\ResourceRights**](ResourceRights.md) |  | [optional]
**collaborators** | [**\Flat\APIClient\Model\ResourceCollaborator[]**](ResourceCollaborator.md) | The list of the collaborators of the score |
**creation_date** | **\DateTime** | The date when the score was created |
**modification_date** | **\DateTime** | The date of the last revision of the score | [optional]
**publication_date** | **\DateTime** | The date when the score was published on Flat | [optional]
**scheduled_deletion_date** | **\DateTime** | The date when the score will be definitively deleted. This date can be in the past if the score will be deleted at the next deletion batch, in this case you can display something like \&quot;Deleted shortly\&quot;.  Schedule:  * For all paying users, the scores will be definitively deleted after 90 days. * For free users, the scores are no longer available after 24 hours, and can be restored with a paying account up to 90 days. | [optional]
**highlighted_date** | **\DateTime** | The date when the score was highlighted (featured) on our community | [optional]
**organization** | **string** | If the score has been created in an organization, the identifier of this organization. This property is especially used with the score privacy &#x60;organizationPublic&#x60;. | [optional]
**parent_score** | **string** | If the score has been forked, the unique identifier of the parent score. | [optional]
**instruments** | **string[]** | An array of the instrument identifiers used in the last version of the score. This is mainly used to display a list of the instruments in Flat&#39;s UI or instruments icons. The format of the strings is &#x60;{instrument-group}.{instrument-id}&#x60;. |
**instruments_names** | **string[]** | An array of the instrument names used in the last version of the score. This list is localized and ready-to-display and will match the indexes from the &#x60;instruments&#x60; list. |
**samples** | **string[]** | An array of the audio sample identifiers used by the different score parts. The format of the strings is &#x60;{instrument-group}.{sample-id}&#x60;. |
**google_drive_file_id** | **string** | If the user uses Google Drive and the score exists on Google Drive, this field will contain the unique identifier of the Flat score on Google Drive. You can access the document using the url: &#x60;https://drive.google.com/open?id&#x3D;{googleDriveFileId}&#x60; | [optional]
**likes** | [**\Flat\APIClient\Model\ScoreLikesCounts**](ScoreLikesCounts.md) |  | [optional]
**comments** | [**\Flat\APIClient\Model\ScoreCommentsCounts**](ScoreCommentsCounts.md) |  | [optional]
**views** | [**\Flat\APIClient\Model\ScoreViewsCounts**](ScoreViewsCounts.md) |  | [optional]
**plays** | [**\Flat\APIClient\Model\ScorePlaysCounts**](ScorePlaysCounts.md) |  | [optional]
**collections** | **string[]** | The list of parent collections this score is included in. Please note that you might not have access to all of them. | [optional]
**me** | [**\Flat\APIClient\Model\ScoreDetailsAllOfMe**](ScoreDetailsAllOfMe.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
