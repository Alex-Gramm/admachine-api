# # Dsp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | DSP ID | [optional] 
**status** | **int** | Status. 1 - Active, 0 - Pause. Required. One of the ID values of parameter &#x60;statuses&#x60; in /constants is added to this parameter | [optional] 
**name** | **string** | RTB Name for endpoint (should only contain word characters, numbers, dashes, underscores. Should starts and ends with character or number) | [optional] 
**ui_name** | **string** | RTB Name for interface | [optional] 
**test_mode** | **int** | Test Mode. One of the ID values of parameter &#x60;test_mode&#x60; in /constants is added to this parameter | [optional] 
**supply_types** | **int[]** | Supply Types. One or more of the ID values of parameter &#x60;channels&#x60; in /constants is added to this parameter | [optional] 
**max_qps** | **int** | Max queries per second | [optional] 
**url_request** | **string** | URL request | [optional] 
**user_sync_url_options** | [**\OpenAPI\Client\Model\SspUserSyncUrlOptions**](SspUserSyncUrlOptions.md) |  | [optional] 
**dsp_users_sync_url** | **string** | DSP users sync URL | [optional] 
**exchange** | **bool** | Exchange | [optional] 
**subdomain_id** | **int** | Subdomain ID. **Only for Root** | [optional] 
**subdomain_name** | **string** | Subdomain Name. **Only for Root** | [optional] 
**datacenter** | **int** | Datacenter | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


