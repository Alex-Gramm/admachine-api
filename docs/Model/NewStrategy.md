# # NewStrategy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name. | 
**active** | **float** | Status. 1 - Active, 0 - Pause. One of the ID values of parameter &#x60;statuses&#x60; in /constants is added to this parameter. | 
**channel** | **float** | One of the ID values of parameter &#x60;channels&#x60; in /constants is added to this parameter. | 
**use_campaign_start_date** | **float** | Use Campaign Start Date - 1, No - 0. | 
**use_campaign_end_date** | **float** | Use Campaign End Date - 1, No - 0. | 
**start_date_interface** | [**\DateTime**](\DateTime.md) | Start Date. If use_campaign_start_date &#x3D; 0 - Required. | [optional] 
**start_time_interface** | **string** | Start Time. If use_campaign_start_date &#x3D; 0 - Required. Example 23:45:59 | [optional] 
**end_date_interface** | [**\DateTime**](\DateTime.md) | End Date. If use_campaign_end_date &#x3D; 0 - Required. | [optional] 
**end_time_interface** | **string** | End Time. If use_campaign_end_date &#x3D; 0 - Required. Example 23:45:59 | [optional] 
**is_unlimited_budget** | **float** | Unlimited Budget. | 
**total_budget** | **float** | Budget. If is_unlimited_budget &#x3D; 0 - Required. | [optional] 
**max_bid** | **float** | Max. CPM bid. | 
**budget_pacing_type** | **float** | Pacing Type. One of the ID values of parameter &#x60;budget_pacing_types&#x60; in /constants is added to this parameter. | 
**local_budget** | **float** | Budget For Budget Period. | [optional] 
**budget_period** | **float** | Budget Period. One of the ID values of parameter &#x60;budget_pacing_budget_intervals&#x60; in /constants is added to this parameter. | 
**frequency_caps** | [**\OpenAPI\Client\Model\FrequencyCap[]**](FrequencyCap.md) |  | [optional] 
**impressions_cap_is_unlimited** | **float** | Unlimited impressions cap - 0. No - 1. | 
**impressions_cap** | **float** | If impressions_cap_is_unlimited &#x3D; 1 - Required. | [optional] 
**rtb_supply_type_open_or_private** | **float** | Supply Type. One of the ID values of parameter &#x60;rtb_supply_types&#x60; in /constants is added to this parameter. | 
**inventory_types** | **string** | Inventory Types. ID values of parameter &#x60;inventory_types&#x60; in /constants is added to this parameter. For example 1 or 1,2. | 
**any_ssp_is_allowed** | **float** | Run on all Open Supply sources. Run All - 1. Not All - 0. | 
**any_rtb_deal_is_allowed** | **float** | Run on all deals. Run All - 1. Not All - 0. | 
**is_all_days_part** | **float** | Run on all day parts. Run All - 1. Not All - 0. | 
**timezone_type** | **int** | Time Zone Type. One of the ID values of parameter &#x60;day_part_timezones&#x60; in /constants is added to this parameter | [optional] 
**macros_custom_data** | **string** | You can pass this data upon impression using the [STRATEGY_CUSTOM_DATA] macro. | [optional] 
**delivery_type** | **int** | Delivery Type. One of the ID values of parameter &#x60;targeting_delivery_types&#x60; in /constants is added to this parameter | [optional] 
**custom_xml_params** | **string** |  | [optional] 
**datacenter** | **int** | Datacenter. Required. One of the ID values of parameter &#x60;datacenters&#x60; in /constants is added to this parameter | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


