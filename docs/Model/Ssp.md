# # Ssp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | SSP ID | [optional] 
**status** | **int** | Status. 1 - Active, 0 - Pause. Required. One of the ID values of parameter &#x60;statuses&#x60; in /constants is added to this parameter | [optional] 
**name** | **string** | RTB Name for endpoint (should only contain word characters, numbers, dashes, underscores. Should starts and ends with character or number) | [optional] 
**ui_name** | **string** | RTB Name for interface | [optional] 
**test_mode** | **int** | Test Mode. One of the ID values of parameter &#x60;test_mode&#x60; in /constants is added to this parameter | [optional] 
**supply_types** | **int[]** | Supply Types. One or more of the ID values of parameter &#x60;channels&#x60; in /constants is added to this parameter | [optional] 
**max_response_time** | **int** | Max response time | [optional] 
**associated_user_id** | **int** | Associated User ID | [optional] 
**ssp_email** | **string** | SSP email | [optional] 
**vendor_ids** | **int[]** | New implementation of required approval vendors. One or more vendor IDs given from response ssps/vendors | [optional] 
**impressions_counter_type** | **int** | Impressions counter type. One of the ID values of parameter &#x60;impressions_counter_type&#x60; in /constants is added to this parameter | [optional] 
**user_sync_url_options** | [**\OpenAPI\Client\Model\SspUserSyncUrlOptions**](SspUserSyncUrlOptions.md) |  | [optional] 
**ssp_endpoint_url** | **string** | SSP endpoint URL | [optional] 
**ssp_users_sync_url** | **string** | SSP users sync URL | [optional] 
**exchange** | **bool** | Exchange | [optional] 
**ssp_click_macro** | [**\OpenAPI\Client\Model\SspSspClickMacro**](SspSspClickMacro.md) |  | [optional] 
**blacklists** | **int** | Blacklist ID | [optional] 
**integration_type** | **int** | Integration type. One of the ID values of parameter &#x60;rtb_integration_types&#x60; in /constants is added to this parameter | [optional] 
**forensiq** | [**\OpenAPI\Client\Model\SspForensiq**](SspForensiq.md) |  | [optional] 
**forbid** | [**\OpenAPI\Client\Model\SspForbid**](SspForbid.md) |  | [optional] 
**subdomain_id** | **int** | Subdomain ID. **Only for Root** | [optional] 
**subdomain_name** | **string** | Subdomain Name. **Only for Root** | [optional] 
**report_url** | **string** | SSP report URL (appears when requested for single SSP). **Only For Root/Admins** | [optional] 
**ssp_group** | [**\OpenAPI\Client\Model\InlineResponse2005Vendor**](InlineResponse2005Vendor.md) |  | [optional] 
**datacenter** | **int** | Datacenter | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


