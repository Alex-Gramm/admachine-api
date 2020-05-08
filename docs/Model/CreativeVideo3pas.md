# # CreativeVideo3pas

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** | Creative ID. | [optional] 
**name** | **string** | Creative Name. | [optional] 
**user_id** | **float** | User ID. | [optional] 
**active** | **float** | Status. 1 - Active, 0 - Pause. Required. One of the ID values of parameter &#x60;statuses&#x60; in /constants is added to this parameter. | [optional] 
**macros_custom_data** | **string** | You can pass this data upon impression using the [CREATIVE_CUSTOM_DATA] macro. | [optional] 
**adomain** | **string** | Advertiser domain. | [optional] 
**video_api_framework** | **float** | API Framework. | [optional] 
**vast_type** | **float** | 0 - VAST XML, 1 - VAST Wrapper | [optional] 
**html** | **string** | Video Asset. | [optional] 
**secure_type** | **float** | Security. | [optional] 
**video_duration** | **float** | The duration of the video in seconds. | [optional] 
**video_mime** | **string** | MIME type. | [optional] 
**video_clickthrough** | **string** | Video Clickthrough | [optional] 
**username** | **string** | User name | [optional] 
**approvals** | [**\OpenAPI\Client\Model\Approval[]**](Approval.md) |  | [optional] 
**created** | **int** | Created timestamp | [optional] 
**updated** | **int** | Updated timestamp | [optional] 
**subdomain_alias** | **string** | Users subdomain alias **Only for Root** | [optional] 
**iab_attr** | **float[]** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


