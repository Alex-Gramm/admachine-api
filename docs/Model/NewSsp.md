# # NewSsp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **int** | Status. 1 - Active, 0 - Pause. Required. One of the ID values of parameter &#x60;statuses&#x60; in /constants is added to this parameter | 
**name** | **string** | RTB Name for endpoint (should only contain word characters, numbers, dashes, underscores. Should starts and ends with character or number) | 
**ui_name** | **string** | RTB Name for interface | 
**test_mode** | **int** | Test Mode. One of the ID values of parameter &#x60;test_mode&#x60; in /constants is added to this parameter | 
**supply_types** | **int[]** | Supply Types. One or more of the ID values of parameter &#x60;channels&#x60; in /constants is added to this parameter | 
**max_response_time** | **int** | Max response time | 
**ssp_email** | **string** | SSP email | [optional] 
**vendor_ids** | **int[]** | New implementation of required approval vendors. One or more vendor IDs given from response ssps/vendors | [optional] 
**impressions_counter_type** | **int** | Impressions counter type. One of the ID values of parameter &#x60;impressions_counter_type&#x60; in /constants is added to this parameter | 
**user_sync_url_options** | [**\OpenAPI\Client\Model\SspUserSyncUrlOptions**](SspUserSyncUrlOptions.md) |  | [optional] 
**exchange** | **bool** | Exchange | [optional] 
**ssp_click_macro** | [**\OpenAPI\Client\Model\SspSspClickMacro**](SspSspClickMacro.md) |  | [optional] 
**blacklists** | **int** | Blacklist ID | [optional] 
**integration_type** | **int** | Integration type. One of the ID values of parameter &#x60;rtb_integration_types&#x60; in /constants is added to this parameter | [optional] 
**forensiq** | [**\OpenAPI\Client\Model\SspForensiq**](SspForensiq.md) |  | [optional] 
**forbid** | [**\OpenAPI\Client\Model\SspForbid**](SspForbid.md) |  | [optional] 
**subdomain_id** | **int** | Subdomain ID. **Only for Root** | [optional] 
**group_id** | **int** | Ssp group ID. **Only for Root** | [optional] 
**datacenter** | **int** | Datacenter. Required. One of the ID values of parameter &#x60;datacenters&#x60; in /constants is added to this parameter | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


