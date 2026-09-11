# OmrJobRetention

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expiry_date** | **\DateTime** | When this job&#39;s uploaded files and recognition results become eligible for erasure. Fixed when the job is created: changing the account&#39;s retention period does not move the deadline of jobs that already exist. |
**expired_date** | **\DateTime** | When the job&#39;s stored files were actually erased. Present only once that happened.  An expired job keeps the &#x60;status&#x60; it finished with and stays listable, but its &#x60;result&#x60; is no longer served and downloads fail with &#x60;OMR_JOB_EXPIRED&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
