# ScoreComment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The comment unique identifier | [optional] 
**type** | **string** | The type of the comment | [optional] 
**user** | **string** | The author unique identifier | [optional] 
**score** | **string** | The unique identifier of the score where the comment was posted | [optional] 
**revision** | **string** | The unique identifier of revision the comment was posted | [optional] 
**replyTo** | **string** | When the comment is a reply to another comment, the unique identifier of the parent comment | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date when the comment was posted | [optional] 
**modificationDate** | [**\DateTime**](\DateTime.md) | The date of the last comment modification | [optional] 
**comment** | **string** | The comment text that can includes mentions using the following format: &#x60;@[id:username]&#x60;. | [optional] 
**rawComment** | **string** | A raw version of the comment, that can be displayed without parsing the mentions. | [optional] 
**context** | [**\Flat\APIClient\Model\ScoreCommentContext**](ScoreCommentContext.md) |  | [optional] 
**mentions** | **string[]** | The list of user identifier mentioned on the score | [optional] 
**resolved** | **bool** | For inline comments, the comment can be marked as resolved and will be hidden in the future responses | [optional] 
**resolvedBy** | **string** | If the user is marked as resolved, this will contain the unique identifier of the User who marked this comment as resolved | [optional] 
**spam** | **bool** | &#x60;true  if the message has been detected as spam and hidden from other users | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


