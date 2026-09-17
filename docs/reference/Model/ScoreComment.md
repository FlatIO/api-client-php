# ScoreComment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The comment unique identifier |
**type** | **string** | The type of the comment |
**user** | **string** | The author unique identifier |
**score** | **string** | The unique identifier of the score where the comment was posted |
**revision** | **string** | The unique identifier of the revision where the comment was posted | [optional]
**reply_to** | **string** | When the comment is a reply to another comment, the unique identifier of the parent comment | [optional]
**date** | **\DateTime** | The date when the comment was posted |
**modification_date** | **\DateTime** | The date of the last comment modification | [optional]
**comment** | **string** | The comment text that can include mentions using the following format: &#x60;@[id:username]&#x60;. |
**raw_comment** | **string** | A raw version of the comment, that can be displayed without parsing the mentions. |
**context** | [**\Flat\APIClient\Model\ScoreCommentContext**](ScoreCommentContext.md) |  | [optional]
**mentions** | **string[]** | The list of user identifiers mentioned in this comment | [optional]
**resolved** | **bool** | For inline comments, the comment can be marked as resolved and will be hidden in the future responses | [optional]
**resolved_by** | **string** | If the comment is marked as resolved, this will contain the unique identifier of the User who marked this comment as resolved | [optional]
**moderation** | [**\Flat\APIClient\Model\ScoreCommentModeration**](ScoreCommentModeration.md) |  | [optional]
**spam** | **bool** | &#x60;true&#x60; if the message has been detected as spam and hidden from other users | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
