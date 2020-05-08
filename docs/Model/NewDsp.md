# # NewDsp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **int** | Status. 1 - Active, 0 - Pause. Required. One of the ID values of parameter &#x60;statuses&#x60; in /constants is added to this parameter | 
**name** | **string** | RTB Name for endpoint (should only contain word characters, numbers, dashes, underscores. Should starts and ends with character or number) | 
**ui_name** | **string** | RTB Name for interface | 
**test_mode** | **int** | Test Mode. One of the ID values of parameter &#x60;test_mode&#x60; in /constants is added to this parameter | 
**supply_types** | **int[]** | Supply Types. One or more of the ID values of parameter &#x60;channels&#x60; in /constants is added to this parameter | 
**max_response_time** | **int** | Max response time | 
**max_qps** | **int** | Max queries per second | [optional] 
**url_request** | **string** | URL request | 
**user_sync_url_options** | [**\OpenAPI\Client\Model\NewDspUserSyncUrlOptions**](NewDspUserSyncUrlOptions.md) |  | [optional] 
**dsp_users_sync_url** | **string** | DSP users sync URL | [optional] 
**exchange** | **bool** | Exchange | 
**subdomain_id** | **int** | Subdomain ID. **Only for Root** | 
**datacenter** | **int** | Datacenter. Required. One of the ID values of parameter &#x60;datacenters&#x60; in /constants is added to this parameter | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


