# # NewDeal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name Deal. | 
**active** | **float** | Status. 1 - Active, 0 - Pause. One of the ID values of parameter &#x60;statuses&#x60; in /constants is added to this parameter. | 
**user_id** | **float** | User ID. | 
**ssp_id** | **float** | SSP ID for user. | 
**publisher_id** | **float** | Publisher ID. | 
**start_immediately** | **float** | Start Immediately. 1 - Yes, 0 - No. | 
**start_date** | [**\DateTime**](\DateTime.md) | If start_immediately &#x3D; 0 - Required. Start Date. | [optional] 
**is_no_end_date** | **float** | Don&#39;t Used End Date. 1 - Don&#39;t use, 0 - Use. | 
**end_date** | [**\DateTime**](\DateTime.md) | If is_no_end_date &#x3D; 0 - Required. End Date. | [optional] 
**deal_id** | **float** | Deal ID | [optional] 
**bid** | **float** | Bid Type. | 
**bid_type** | **float** | Bid Type. One of the ID values of parameter &#x60;bid_type&#x60; in /constants is added to this parameter. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


