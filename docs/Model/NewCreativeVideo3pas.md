# # NewCreativeVideo3pas

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Creative Name. | 
**user_id** | **float** | User ID. | 
**active** | **float** | Status. 1 - Active, 0 - Pause. Required. One of the ID values of parameter &#x60;statuses&#x60; in /constants is added to this parameter. | 
**macros_custom_data** | **string** | You can pass this data upon impression using the [CREATIVE_CUSTOM_DATA] macro. | [optional] 
**adomain** | **string** | Advertiser domain. | 
**video_api_framework** | **float** | API Framework. | 
**vast_type** | **float** | 0 - VAST XML, 1 - VAST Wrapper. | 
**html** | **string** | Video Asset. | 
**secure_type** | **float** | Security. | 
**video_duration** | **float** | The duration of the video in seconds. Required, if not specified in the XML. | [optional] 
**video_mime** | **string** | MIME type. Required, if not specified in the XML. | [optional] 
**video_clickthrough** | **string** | Video Clickthrough. | [optional] 
**iab_attr** | **float[]** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


