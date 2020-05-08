# # NewCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name. | 
**user_id** | **float** | Advertiser. | 
**iab_category** | **string[]** | IAB Category. Required. ID values of parameter &#x60;iab_categories&#x60; in /constants is added to this parameter. | 
**time_zone** | **float** | Time Zone. One of the ID values of parameter &#x60;time_zones&#x60; in /constants is added to this parameter. | 
**active** | **float** | Status. 1 - Active, 0 - Pause. One of the ID values of parameter &#x60;statuses&#x60; in /constants is added to this parameter. | 
**is_unlimited_budget** | **float** | Budget Flights. 1 - Unlimited, 0 - Use Flights. | 
**daily_budget_is_unlimited** | **float** | Daily Spend Cap. 1 - Unlimited, 0 - Use daily_budget. | 
**daily_budget** | **float** | If daily_budget_is_unlimited &#x3D; 0 - Required. | [optional] 
**frequency_cap** | **float** | Required. | 
**frequency_cap_type** | **float** | Conversion Event Pixel. If frequency_cap &gt; 0 - Required. One of the ID values of parameter &#x60;frequency_cap_types&#x60; in /constants is added to this parameter. | [optional] 
**frequency_cap_period** | **float** | Conversion Event Pixel. If frequency_cap &gt; 0 - Required. One of the ID values of parameter &#x60;frequency_cap_periods&#x60; in /constants is added to this parameter. | [optional] 
**macros_custom_data** | **string** | You can pass this data upon impression using the [CAMPAIGN_CUSTOM_DATA] macro. | [optional] 
**attribution_enabled** | **float** | Attribution &amp; tracking. 1 - Use Attribution &amp; tracking, 0 - Not use. | [optional] 
**conversion_pixel_id** | **float** | One Of the Conversion Pixel. One of the ID values in pixels this campaign user. | [optional] 
**pixel_events_repeat** | **float** | Repeat Conversion Events. If Use Attribution &amp; tracking - Required. One of the ID values of parameter &#x60;pixel_events_repeats&#x60; in /constants is added to this parameter. | [optional] 
**pixel_events_repeat_time** | **float** | If Use Attribution &amp; tracking and pixel_events_repeat &#x3D; 1 - Required. | [optional] 
**pixel_events_repeat_period** | **float** | If Use Attribution &amp; tracking and pixel_events_repeat &#x3D; 1 - Required. One of the ID values of parameter &#x60;repeat_merit_event_periods&#x60; in /constants is added to this parameter. | [optional] 
**post_click_window_enabled** | **float** | Post-Click Conversion Interval. If Use Attribution &amp; tracking - Required. | [optional] 
**post_click_window_period** | **float** | Interval. If Use Attribution &amp; tracking and post_click_window_enabled &#x3D; 1 - Required. One of the ID values of parameter &#x60;post_window_intervals&#x60; in /constants is added to this parameter. | [optional] 
**post_click_window** | **float** | Number. If Use Attribution &amp; tracking and post_click_window_enabled &#x3D; 1 - Required. | [optional] 
**post_view_window_enabled** | **float** | Post-View Conversion Interval. If Use Attribution &amp; tracking - Required. | [optional] 
**post_view_window_period** | **float** | Interval. If Use Attribution &amp; tracking and post_view_window_enabled &#x3D; 1 - Required. One of the ID values of parameter &#x60;post_window_intervals&#x60; in /constants is added to this parameter. | [optional] 
**post_view_window** | **float** | Number. If Use Attribution &amp; tracking and post_view_window_enabled &#x3D; 1 - Required. | [optional] 
**ssp_test_phase** | **int** | SSP Test Phase. **Only for Admins** | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


