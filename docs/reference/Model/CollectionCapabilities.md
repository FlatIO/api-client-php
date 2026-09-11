# CollectionCapabilities

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can_edit** | **bool** | Whether the current user can modify the metadata for the collection |
**can_share** | **bool** | Whether the current user can modify the sharing settings for the collection |
**can_delete** | **bool** | Whether the current user can delete the collection |
**can_add_scores** | **bool** | Whether the current user can add scores to the collection  If this collection has the &#x60;type&#x60; &#x60;trash&#x60;, this property will be set to &#x60;false&#x60;. Use &#x60;DELETE /v2/scores/{score}&#x60; to trash a score. |
**can_delete_scores** | **bool** | Whether the current user can delete scores from the collection  If this collection has the &#x60;type&#x60; &#x60;trash&#x60;, this property will be set to &#x60;false&#x60;. Use &#x60;POST /v2/scores/{score}/untrash&#x60; to restore a score. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
