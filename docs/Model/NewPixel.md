# # NewPixel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name Pixel. | 
**active** | **float** | Status. 1 - Active, 0 - Pause. One of the ID values of parameter &#x60;statuses&#x60; in /constants is added to this parameter. | 
**user_id** | **float** | User ID. | 
**type** | **float** | Type Pixle. One of the ID values of parameter &#x60;pixel_type&#x60; in /constants is added to this parameter. | [optional] 
**default_ext** | **float** | External Segment ID. Use in &#x60;Data&#x60; type (type &#x3D; 0). | [optional] 
**ext_segment_id** | **string** | Use in  &#x60;Data&#x60; type (type &#x3D; 0) if default_ext &#x3D; 0.  External Segment ID | [optional] 
**user_ttl_days** | **float** | Lifetime, days | [optional] 
**default_conversion_value** | **float** | Default conversion value. Use in &#x60;Event&#x60; type (type &#x3D; 1). | [optional] 
**is_shared** | **float** | Is Shared. Only Root, only Data Pixel. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


