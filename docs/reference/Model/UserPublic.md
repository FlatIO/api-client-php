# UserPublic

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The user unique identifier |
**type** | **string** | The type of user account |
**product** | [**\Flat\APIClient\Model\TutteoProduct**](TutteoProduct.md) |  |
**username** | **string** | The user name (unique for the organization) |
**printable_name** | **string** | The name that can be directly printed (name, firstname &amp; lastname, or username) | [optional]
**firstname** | **string** | Firstname of the user (for education users) | [optional]
**lastname** | **string** | Lastname of the user (for education users) | [optional]
**name** | **string** | A displayable name for the user (for consumer users) | [optional]
**picture** | **string** | The URL of the picture to display |
**badges** | **string[]** | List of badges for the user profile:  - &#x60;power&#x60; - &#x60;staff&#x60; - &#x60;composerOfTheMonth&#x60; - &#x60;ambassador&#x60; - &#x60;challenge&#x60; | [optional]
**organization** | **string** | Organization ID (for Edu users only) | [optional]
**organization_role** | [**\Flat\APIClient\Model\OrganizationRoles**](OrganizationRoles.md) |  | [optional]
**class_role** | [**\Flat\APIClient\Model\ClassRoles**](ClassRoles.md) |  | [optional]
**html_url** | **string** | Link to user profile (for Indiv. users only) | [optional]
**bio** | **string** | User&#39;s biography | [optional]
**registration_date** | **\DateTime** | Date the user signed up | [optional]
**liked_scores_count** | **int** | Number of the scores liked by the user | [optional]
**followers_count** | **int** | Number of followers the user has | [optional]
**following_count** | **int** | Number of people the user follows | [optional]
**owned_public_scores_count** | **int** | Number of public scores the user owns | [optional]
**all_public_scores_count** | **int** | Total number of public scores the user participates in (owned + joined) | [optional]
**likes_count** | **int** | Number of likes on the user published scores | [optional]
**plays_count** | **int** | Number of plays on the user published scores | [optional]
**cover_picture** | **string** | Cover picture (background) for the profile | [optional]
**profile_theme** | **string** | Theme (background) for the profile | [optional]
**links** | [**\Flat\APIClient\Model\UserCommunityProfileLinks**](UserCommunityProfileLinks.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
