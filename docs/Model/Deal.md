# # Deal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** |  | [optional] 
**name** | **string** | Name Deal. Required. | [optional] 
**active** | **float** | Status. 1 - Active, 0 - Pause. Required. One of the ID values of parameter &#x60;statuses&#x60; in /constants is added to this parameter. | [optional] 
**user_id** | **float** | User ID. Required. | [optional] 
**ssp_id** | **float** | SSP ID for user. Required. | [optional] 
**publisher_id** | **float** | Publisher ID. Required. | [optional] 
**start_immediately** | **float** | Start Immediately. Required. 1 - Yes, 0 - No. | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | If start_immediately &#x3D; 0 - Required. Start Date. | [optional] 
**is_no_end_date** | **float** | Don&#39;t Used End Date. Required. 1 - Don&#39;t use, 0 - Use. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | If is_no_end_date &#x3D; 0 - Required. End Date. | [optional] 
**deal_id** | **float** | Deal ID | [optional] 
**bid** | **float** | Bid Type. Required. | [optional] 
**bid_type** | **float** | Bid Type. Required. One of the ID values of parameter &#x60;bid_type&#x60; in /constants is added to this parameter. | [optional] 
**username** | **string** | Username | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


