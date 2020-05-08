# # Pixel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** | Id Pixel | [optional] 
**name** | **string** | Name Pixel. | [optional] 
**active** | **float** | Status. 1 - Active, 0 - Pause. One of the ID values of parameter &#x60;statuses&#x60; in /constants is added to this parameter. | [optional] 
**user_id** | **float** | User ID. | [optional] 
**default_ext** | **float** | External Segment ID. Use in &#x60;Data&#x60; type (type &#x3D; 0). | [optional] 
**ext_segment_id** | **string** | External Segment ID. Use if default_ext &#x3D; 0. | [optional] 
**user_ttl_days** | **float** | Lifetime, days | [optional] 
**type** | **float** | Type Pixel. Required. One of the ID values of parameter &#x60;pixel_type&#x60; in /constants is added to this parameter. | [optional] 
**default_conversion_value** | **float** | Default conversion value. Use in &#x60;Event&#x60; type (type &#x3D; 1). | [optional] 
**username** | **string** | Username | [optional] 
**is_shared** | **float** | Is Shared. Only Root, only Data Pixel. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


