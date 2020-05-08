# # CreativeDisplay1pas

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** | Creative ID. | [optional] 
**name** | **string** | Creative Name. | [optional] 
**user_id** | **float** | User ID. | [optional] 
**active** | **float** | Status. 1 - Active, 0 - Pause. Required. One of the ID values of parameter &#x60;statuses&#x60; in /constants is added to this parameter. | [optional] 
**iab_attr** | **float[]** |  | [optional] 
**image_attachment** | **string** | Image to upload. Only &#39;.gif, .png, .jpg, .jpeg&#39; is allowed. | [optional] 
**destination_url** | **string** | Click-through URL. For example http://example.com. | [optional] 
**adomain** | **string** | Advertiser domain. | [optional] 
**macros_custom_data** | **string** | You can pass this data upon impression using the [CREATIVE_CUSTOM_DATA] macro. | [optional] 
**size** | **float** | Dimensions. | [optional] 
**username** | **string** | User name | [optional] 
**approvals** | [**\OpenAPI\Client\Model\Approval[]**](Approval.md) |  | [optional] 
**created** | **int** | Created timestamp | [optional] 
**updated** | **int** | Updated timestamp | [optional] 
**subdomain_alias** | **string** | Users subdomain alias **Only for Root** | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


