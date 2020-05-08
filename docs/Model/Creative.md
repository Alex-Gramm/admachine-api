# # Creative

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** | Creative ID. | [optional] 
**name** | **string** | Creative Name. | [optional] 
**user_id** | **float** | User ID. | [optional] 
**active** | **float** | Status. 1 - Active, 0 - Pause. Required. One of the ID values of parameter &#x60;statuses&#x60; in /constants is added to this parameter. | [optional] 
**iab_attr** | **float[]** |  | [optional] 
**adomain** | **string** | Advertiser domain. | [optional] 
**size** | **float** | Dimension. | [optional] 
**audio** | **float** | Audio. 1 - yes, 0 - no. | [optional] 
**html** | **string** |  | [optional] 
**secure_type** | **float** | Security. | [optional] 
**image_attachment** | **string** |  | [optional] 
**destination_url** | **string** | Click-through URL. | [optional] 
**call_to_action** | **float** | Call To Action. | [optional] 
**image_attachment_logo** | **string** |  | [optional] 
**headline** | **string** | Headline. | [optional] 
**description** | **string** | Description | [optional] 
**brand_name** | **string** | Brand name. | [optional] 
**video_attachment** | **string** |  | [optional] 
**video_api_framework** | **float** | API Framework. | [optional] 
**vast_type** | **float** | 0 - VAST XML, 1 - VAST Wrapper. | [optional] 
**is_1pas** | **float** | PAS flag. | [optional] 
**video_clickthrough** | **string** | Video Clickthrough | [optional] 
**macros_custom_data** | **string** | You can pass this data upon impression using the [CREATIVE_CUSTOM_DATA] macro. | [optional] 
**username** | **string** | User name | [optional] 
**approvals** | [**\OpenAPI\Client\Model\Approval[]**](Approval.md) |  | [optional] 
**created** | **int** | Created timestamp | [optional] 
**updated** | **int** | Updated timestamp | [optional] 
**subdomain_alias** | **string** | Users subdomain alias **Only for Root** | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


