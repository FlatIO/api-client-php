# CreditTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the credit transaction |
**type** | **string** | Credit category. &#x60;ai&#x60; covers every AI-powered feature. |
**feature** | **string** | Which product the credits relate to. Set on deductions and on the credits a refund returns, absent on credit-pack top-ups, which are not tied to a single feature. | [optional]
**amount** | **int** | How many credits this entry moved, signed: positive for top-ups (&#x60;+30&#x60; from a credit pack), negative for deductions (&#x60;-2&#x60; for a two-page import). Sum only entries whose &#x60;state&#x60; is &#x60;active&#x60;. |
**source** | **string** | Which pool the credits came from:  * &#x60;subscription&#x60;: the plan&#39;s periodic allowance * &#x60;purchase&#x60;: credits bought as a pack, which do not expire with the billing period * &#x60;free_tier&#x60;: promotional grants * &#x60;support&#x60;: a manual adjustment made by Flat&#39;s support team  A single import can produce two entries when it spans two pools: the plan allowance is drawn down first, and the remainder comes from &#x60;purchase&#x60;. |
**state** | **string** | Whether the entry still counts:  * &#x60;active&#x60;: in effect * &#x60;canceled&#x60;: reversed, and no longer affecting the balance. Deductions are   canceled when the import they paid for fails or is refunded. |
**job** | **string** | Identifier of the import this entry belongs to, when it relates to one.  Present on an import&#39;s deduction, on its reversal, and on credits returned when an import is refunded. Absent on credit-pack top-ups and manual adjustments. | [optional]
**creation_date** | **\DateTime** | When the transaction was created |
**modification_date** | **\DateTime** | When the transaction was last modified |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
