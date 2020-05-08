# # InlineResponse2006Data

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** | Creative ID. | [optional] 
**name** | **string** | Creative Name. | [optional] 
**user_id** | **float** | User ID. | [optional] 
**active** | **float** | Status. 1 - Active, 0 - Pause. Required. One of the ID values of parameter &#x60;statuses&#x60; in /constants is added to this parameter. | [optional] 
**image_attachment** | **string** | Image to upload. Only &#39;.png, .jpg, .jpeg&#39; is allowed. | [optional] 
**image_attachment_logo** | **string** | Logo Image to upload. Only &#39;.png, .jpg, .jpeg&#39; is allowed. | [optional] 
**headline** | **string** | Headline. | [optional] 
**description** | **string** | Description. | [optional] 
**destination_url** | **string** | Click-through URL. For example http://example.com. | [optional] 
**macros_custom_data** | **string** | You can pass this data upon impression using the [CREATIVE_CUSTOM_DATA] macro. | [optional] 
**username** | **string** | User name | [optional] 
**approvals** | [**\OpenAPI\Client\Model\InlineResponse2005Approvals[]**](InlineResponse2005Approvals.md) |  | [optional] 
**created** | **int** | Created timestamp | [optional] 
**updated** | **int** | Updated timestamp | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


