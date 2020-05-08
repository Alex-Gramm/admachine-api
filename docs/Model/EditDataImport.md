# # EditDataImport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **float** | Status. 1 - Active, 0 - Pause. One of the ID values of parameter &#x60;statuses&#x60; in /constants is added to this parameter. | [optional] 
**ssp_id** | **float** | Ssp ID. | [optional] 
**segment_id** | **float** | Pixel ID. | [optional] 
**recurring_import** | **float** | Recurring Import. | [optional] 
**device_based** | **float** | Device Based. | [optional] 
**data_storage** | **float** | Data Storage.  Status. One of the ID values of parameter &#x60;data_storages&#x60; in /constants is added to this parameter. | 
**bucket** | **string** | Object Path. Used if data_storage &#x3D; 1(S3 in data_storages). | [optional] 
**object_path** | **string** | Object Path. If data_storage &#x3D; 1(S3 in data_storages) - Required. | [optional] 
**access_key** | **string** | Access key. If data_storage &#x3D; 1(S3 in data_storages) - Required. | [optional] 
**secret_key** | **string** | Secret key. If data_storage &#x3D; 1(S3 in data_storages) - Required. | [optional] 
**move_to_processed_dir** | **float** | Move to processed dir after import. If data_storage &#x3D; 1(S3 in data_storages) - Required | [optional] 
**public_url** | **string** | Public Url. If data_storage &#x3D; 2(URL in data_storages) - Required. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


