# # StrategyWithCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** | Don&#39;t use for Create or Update. | [optional] 
**name** | **string** | Name. Required. | [optional] 
**active** | **float** | Status. 1 - Active, 0 - Pause. Required. One of the ID values of parameter &#x60;statuses&#x60; in /constants is added to this parameter. | [optional] 
**channel** | **float** | Required. One of the ID values of parameter &#x60;channels&#x60; in /constants is added to this parameter. | [optional] 
**use_campaign_start_date** | **float** | Use Campaign Start Date - 1, No - 0. Required. | [optional] 
**use_campaign_end_date** | **float** | Use Campaign End Date - 1, No - 0. Required. | [optional] 
**start_date_interface** | [**\DateTime**](\DateTime.md) | Start Date. If use_campaign_start_date &#x3D; 0 - Required. | [optional] 
**start_time_interface** | **string** | Start Time. If use_campaign_start_date &#x3D; 0 - Required. Example 23:45:59 | [optional] 
**end_date_interface** | [**\DateTime**](\DateTime.md) | End Date. If use_campaign_end_date &#x3D; 0 - Required. | [optional] 
**end_time_interface** | **string** | End Time. If use_campaign_end_date &#x3D; 0 - Required. Example 23:45:59 | [optional] 
**is_unlimited_budget** | **float** | Unlimited Budget. Required. | [optional] 
**total_budget** | **float** | Budget. If is_unlimited_budget &#x3D; 0 - Required. | [optional] 
**max_bid** | **float** | Max. CPM bid. Required. | [optional] 
**budget_pacing_type** | **float** | Pacing Type. Required. One of the ID values of parameter &#x60;budget_pacing_types&#x60; in /constants is added to this parameter. | [optional] 
**local_budget** | **float** | Budget For Budget Period. | [optional] 
**budget_period** | **float** | Budget Period. Required. One of the ID values of parameter &#x60;budget_pacing_budget_intervals&#x60; in /constants is added to this parameter. | [optional] 
**frequency_caps** | [**\OpenAPI\Client\Model\FrequencyCap[]**](FrequencyCap.md) |  | [optional] 
**impressions_cap_is_unlimited** | **float** | Unlimited impressions cap - 0. No - 1 Required. | [optional] 
**impressions_cap** | **float** | If impressions_cap_is_unlimited &#x3D; 1 - Required. | [optional] 
**rtb_supply_type_open_or_private** | **float** | Supply Type. Required. One of the ID values of parameter &#x60;rtb_supply_types&#x60; in /constants is added to this parameter. | [optional] 
**inventory_types** | **string** | Inventory Types. Required. ID values of parameter &#x60;inventory_types&#x60; in /constants is added to this parameter. For example 1 or 1,2. | [optional] 
**any_ssp_is_allowed** | **float** | Run on all Open Supply sources. Run All - 1. Not All - 0. Required. | [optional] 
**any_rtb_deal_is_allowed** | **float** | Run on all deals. Run All - 1. Not All - 0. Required. | [optional] 
**is_all_days_part** | **float** | Run on all day parts. Run All - 1. Not All - 0. Required. | [optional] 
**timezone_type** | **int** | Time Zone Type. One of the ID values of parameter &#x60;day_part_timezones&#x60; in /constants is added to this parameter | [optional] 
**contextual_cpm** | **float** | Contextual CPM | [optional] 
**macros_custom_data** | **string** | You can pass this data upon impression using the [STRATEGY_CUSTOM_DATA] macro. | [optional] 
**delivery_type** | **int** | Delivery Type. One of the ID values of parameter &#x60;targeting_delivery_types&#x60; in /constants is added to this parameter | [optional] 
**campaign** | [**\OpenAPI\Client\Model\StrategyWithCampaignCampaign**](StrategyWithCampaignCampaign.md) |  | [optional] 
**datacenter** | **int** | Datacenter | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


