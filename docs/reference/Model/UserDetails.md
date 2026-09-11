# UserDetails

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
**followers_count** | **int** | Number of followers the user have | [optional]
**following_count** | **int** | Number of people the user follow | [optional]
**owned_public_scores_count** | **int** | Number of public scores the user have | [optional]
**all_public_scores_count** | **int** | Total number of public scores the user participates in (owned + joined) | [optional]
**likes_count** | **int** | Number of likes on the user published scores | [optional]
**plays_count** | **int** | Number of plays on the user published scores | [optional]
**cover_picture** | **string** | Cover picture (backgroud) for the profile | [optional]
**profile_theme** | **string** | Theme (background) for the profile | [optional]
**links** | [**\Flat\APIClient\Model\UserCommunityProfileLinks**](UserCommunityProfileLinks.md) |  | [optional]
**is_email_verified** | **bool** | Whether the user&#39;s email address has been verified | [optional]
**azure_details** | [**\Flat\APIClient\Model\UserAzureDetails**](UserAzureDetails.md) |  | [optional]
**private_profile** | **bool** | Tell either this user profile is private or not (individual accounts only) | [optional]
**locale** | **string** | The user language. Input values will be automatically normalized to a supported locale code. Unknown locales will default to &#x60;en&#x60;.  Current supported locales include: &#x60;da&#x60;, &#x60;de&#x60;, &#x60;en&#x60;, &#x60;en-GB&#x60;, &#x60;es&#x60;, &#x60;fi&#x60;, &#x60;fil&#x60;, &#x60;fr&#x60;, &#x60;fr-CA&#x60;, &#x60;hi&#x60;, &#x60;id&#x60;, &#x60;it&#x60;, &#x60;ja&#x60;, &#x60;ja-HIRA&#x60;, &#x60;ko&#x60;, &#x60;ms&#x60;, &#x60;nb&#x60;, &#x60;nl&#x60;, &#x60;pl&#x60;, &#x60;pt&#x60;, &#x60;pt-BR&#x60;, &#x60;ro&#x60;, &#x60;ru&#x60;, &#x60;sv&#x60;, &#x60;tr&#x60;, &#x60;zh-Hans&#x60;, &#x60;zh-HK&#x60;, &#x60;zh-TW&#x60; | [optional] [default to 'en']
**groups** | **string[]** | For Flat for Education accounts, list of Group identifiers the user is part of. | [optional]
**picture_file** | **string** | The ID of the user profile picture | [optional]
**cover_picture_file** | **string** | The ID of the user profile cover picture | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
