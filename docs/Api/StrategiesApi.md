# OpenAPI\Client\StrategiesApi

All URIs are relative to *https://api.adx1.com/v1.0.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**strategiesGet**](StrategiesApi.md#strategiesGet) | **GET** /strategies | All Strategies
[**strategiesSpendInfoGet**](StrategiesApi.md#strategiesSpendInfoGet) | **GET** /strategies/spend_info | Strategies Spend Info
[**strategiesStrategyIdCarriersGet**](StrategiesApi.md#strategiesStrategyIdCarriersGet) | **GET** /strategies/{strategy_id}/carriers | Carriers in Strategy
[**strategiesStrategyIdCarriersPost**](StrategiesApi.md#strategiesStrategyIdCarriersPost) | **POST** /strategies/{strategy_id}/carriers | Include and Exclude Carriers to Strategy
[**strategiesStrategyIdChecklistGet**](StrategiesApi.md#strategiesStrategyIdChecklistGet) | **GET** /strategies/{strategy_id}/checklist | Check Status Strategy
[**strategiesStrategyIdContextualProvidersGet**](StrategiesApi.md#strategiesStrategyIdContextualProvidersGet) | **GET** /strategies/{strategy_id}/contextual_providers | Contextual in Strategy
[**strategiesStrategyIdContextualProvidersPost**](StrategiesApi.md#strategiesStrategyIdContextualProvidersPost) | **POST** /strategies/{strategy_id}/contextual_providers | Include and Exclude Contextual Segments to Strategy
[**strategiesStrategyIdCreativesGet**](StrategiesApi.md#strategiesStrategyIdCreativesGet) | **GET** /strategies/{strategy_id}/creatives | Creatives in Strategy
[**strategiesStrategyIdCreativesPost**](StrategiesApi.md#strategiesStrategyIdCreativesPost) | **POST** /strategies/{strategy_id}/creatives | Add Creatives to Strategy
[**strategiesStrategyIdDataProvidersGet**](StrategiesApi.md#strategiesStrategyIdDataProvidersGet) | **GET** /strategies/{strategy_id}/data_providers | Data Providers in Strategy
[**strategiesStrategyIdDataProvidersPost**](StrategiesApi.md#strategiesStrategyIdDataProvidersPost) | **POST** /strategies/{strategy_id}/data_providers | Include and Exclude Data Providers to Strategy
[**strategiesStrategyIdDaypartsGet**](StrategiesApi.md#strategiesStrategyIdDaypartsGet) | **GET** /strategies/{strategy_id}/dayparts | Day Part in Strategy
[**strategiesStrategyIdDaypartsPost**](StrategiesApi.md#strategiesStrategyIdDaypartsPost) | **POST** /strategies/{strategy_id}/dayparts | Add Day Parts to Strategy
[**strategiesStrategyIdDealsGet**](StrategiesApi.md#strategiesStrategyIdDealsGet) | **GET** /strategies/{strategy_id}/deals | Deals in Strategy
[**strategiesStrategyIdDealsPost**](StrategiesApi.md#strategiesStrategyIdDealsPost) | **POST** /strategies/{strategy_id}/deals | Add Deals to Strategy
[**strategiesStrategyIdDelete**](StrategiesApi.md#strategiesStrategyIdDelete) | **DELETE** /strategies/{strategy_id} | Delete Strategy
[**strategiesStrategyIdDspsGet**](StrategiesApi.md#strategiesStrategyIdDspsGet) | **GET** /strategies/{strategy_id}/dsps | DSP in Strategy
[**strategiesStrategyIdDspsPost**](StrategiesApi.md#strategiesStrategyIdDspsPost) | **POST** /strategies/{strategy_id}/dsps | Add DSP to Strategy
[**strategiesStrategyIdGet**](StrategiesApi.md#strategiesStrategyIdGet) | **GET** /strategies/{strategy_id} | Strategy
[**strategiesStrategyIdIpListsGet**](StrategiesApi.md#strategiesStrategyIdIpListsGet) | **GET** /strategies/{strategy_id}/ip_lists | Ip Lists in Strategy
[**strategiesStrategyIdIpListsPost**](StrategiesApi.md#strategiesStrategyIdIpListsPost) | **POST** /strategies/{strategy_id}/ip_lists | Add Ip Lists to Strategy
[**strategiesStrategyIdKeywordListsGet**](StrategiesApi.md#strategiesStrategyIdKeywordListsGet) | **GET** /strategies/{strategy_id}/keyword_lists | Keyword Lists in Strategy
[**strategiesStrategyIdKeywordListsPost**](StrategiesApi.md#strategiesStrategyIdKeywordListsPost) | **POST** /strategies/{strategy_id}/keyword_lists | Add Keyword Lists to Strategy
[**strategiesStrategyIdLocationsGet**](StrategiesApi.md#strategiesStrategyIdLocationsGet) | **GET** /strategies/{strategy_id}/locations | Location in Strategy
[**strategiesStrategyIdLocationsPost**](StrategiesApi.md#strategiesStrategyIdLocationsPost) | **POST** /strategies/{strategy_id}/locations | Include and Exclude Locations to Strategy
[**strategiesStrategyIdPixelsGet**](StrategiesApi.md#strategiesStrategyIdPixelsGet) | **GET** /strategies/{strategy_id}/pixels | Pixel in Strategy
[**strategiesStrategyIdPixelsPost**](StrategiesApi.md#strategiesStrategyIdPixelsPost) | **POST** /strategies/{strategy_id}/pixels | Include and Exclude Pixels to Strategy
[**strategiesStrategyIdPut**](StrategiesApi.md#strategiesStrategyIdPut) | **PUT** /strategies/{strategy_id} | Add Site Lists to Campaign
[**strategiesStrategyIdReportBidsGet**](StrategiesApi.md#strategiesStrategyIdReportBidsGet) | **GET** /strategies/{strategy_id}/report_bids | Report Bids Strategy
[**strategiesStrategyIdRulesGet**](StrategiesApi.md#strategiesStrategyIdRulesGet) | **GET** /strategies/{strategy_id}/rules | All Strategy Optimization rules
[**strategiesStrategyIdRulesPost**](StrategiesApi.md#strategiesStrategyIdRulesPost) | **POST** /strategies/{strategy_id}/rules | Update Rules
[**strategiesStrategyIdSiteListsGet**](StrategiesApi.md#strategiesStrategyIdSiteListsGet) | **GET** /strategies/{strategy_id}/site_lists | Site Lists in Strategy
[**strategiesStrategyIdSiteListsPost**](StrategiesApi.md#strategiesStrategyIdSiteListsPost) | **POST** /strategies/{strategy_id}/site_lists | Add Site Lists to Strategy
[**strategiesStrategyIdSspsGet**](StrategiesApi.md#strategiesStrategyIdSspsGet) | **GET** /strategies/{strategy_id}/ssps | Ssp in Strategy
[**strategiesStrategyIdSspsPost**](StrategiesApi.md#strategiesStrategyIdSspsPost) | **POST** /strategies/{strategy_id}/ssps | Add Ssp to Strategy
[**strategiesStrategyIdTechnologiesBrowsersGet**](StrategiesApi.md#strategiesStrategyIdTechnologiesBrowsersGet) | **GET** /strategies/{strategy_id}/technologies/browsers | Browsers in Strategy
[**strategiesStrategyIdTechnologiesBrowsersPost**](StrategiesApi.md#strategiesStrategyIdTechnologiesBrowsersPost) | **POST** /strategies/{strategy_id}/technologies/browsers | Include and Exclude Browsers to Strategy
[**strategiesStrategyIdTechnologiesConnectionTypesGet**](StrategiesApi.md#strategiesStrategyIdTechnologiesConnectionTypesGet) | **GET** /strategies/{strategy_id}/technologies/connection_types | Connection Types in Strategy
[**strategiesStrategyIdTechnologiesConnectionTypesPost**](StrategiesApi.md#strategiesStrategyIdTechnologiesConnectionTypesPost) | **POST** /strategies/{strategy_id}/technologies/connection_types | Include and Exclude Connection Types to Strategy
[**strategiesStrategyIdTechnologiesDevicesGet**](StrategiesApi.md#strategiesStrategyIdTechnologiesDevicesGet) | **GET** /strategies/{strategy_id}/technologies/devices | Devices in Strategy
[**strategiesStrategyIdTechnologiesDevicesPost**](StrategiesApi.md#strategiesStrategyIdTechnologiesDevicesPost) | **POST** /strategies/{strategy_id}/technologies/devices | Include and Exclude Devices to Strategy
[**strategiesStrategyIdTechnologiesOssGet**](StrategiesApi.md#strategiesStrategyIdTechnologiesOssGet) | **GET** /strategies/{strategy_id}/technologies/oss | Os in Strategy
[**strategiesStrategyIdTechnologiesOssPost**](StrategiesApi.md#strategiesStrategyIdTechnologiesOssPost) | **POST** /strategies/{strategy_id}/technologies/oss | Include and Exclude Os to Strategy
[**strategiesStrategyIdUrlListsGet**](StrategiesApi.md#strategiesStrategyIdUrlListsGet) | **GET** /strategies/{strategy_id}/url_lists | Url Lists in Strategy
[**strategiesStrategyIdUrlListsPost**](StrategiesApi.md#strategiesStrategyIdUrlListsPost) | **POST** /strategies/{strategy_id}/url_lists | Add Url Lists to Strategy
[**strategiesStrategyIdUseragentListsGet**](StrategiesApi.md#strategiesStrategyIdUseragentListsGet) | **GET** /strategies/{strategy_id}/useragent_lists | Useragent Lists in Strategy
[**strategiesStrategyIdUseragentListsPost**](StrategiesApi.md#strategiesStrategyIdUseragentListsPost) | **POST** /strategies/{strategy_id}/useragent_lists | Add Useragent Lists to Strategy
[**strategiesStrategyIdVideoPlayerOptionsGet**](StrategiesApi.md#strategiesStrategyIdVideoPlayerOptionsGet) | **GET** /strategies/{strategy_id}/video_player_options | Video Options in Strategy
[**strategiesStrategyIdVideoPlayerOptionsPost**](StrategiesApi.md#strategiesStrategyIdVideoPlayerOptionsPost) | **POST** /strategies/{strategy_id}/video_player_options | Include and Exclude Video to Strategy
[**strategiesStrategyIdZipListsGet**](StrategiesApi.md#strategiesStrategyIdZipListsGet) | **GET** /strategies/{strategy_id}/zip_lists | Zip Lists in Strategy
[**strategiesStrategyIdZipListsPost**](StrategiesApi.md#strategiesStrategyIdZipListsPost) | **POST** /strategies/{strategy_id}/zip_lists | Add Zip Lists to Strategy



## strategiesGet

> \OpenAPI\Client\Model\StrategiesWithCampaign strategiesGet($limit, $offset)

All Strategies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 'limit_example'; // string | Limit
$offset = 'offset_example'; // string | Offset

try {
    $result = $apiInstance->strategiesGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **string**| Limit |
 **offset** | **string**| Offset |

### Return type

[**\OpenAPI\Client\Model\StrategiesWithCampaign**](../Model/StrategiesWithCampaign.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesSpendInfoGet

> \OpenAPI\Client\Model\StrategiesSpendInfo strategiesSpendInfoGet($ids)

Strategies Spend Info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = 'ids_example'; // string | Strategy IDs (comma separated)

try {
    $result = $apiInstance->strategiesSpendInfoGet($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesSpendInfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| Strategy IDs (comma separated) |

### Return type

[**\OpenAPI\Client\Model\StrategiesSpendInfo**](../Model/StrategiesSpendInfo.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdCarriersGet

> \OpenAPI\Client\Model\CarrierStrategy strategiesStrategyIdCarriersGet($strategy_id)

Carriers in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdCarriersGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdCarriersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\CarrierStrategy**](../Model/CarrierStrategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdCarriersPost

> \OpenAPI\Client\Model\CarrierStrategy strategiesStrategyIdCarriersPost($strategy_id, $body)

Include and Exclude Carriers to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = new \OpenAPI\Client\Model\IncludedExcludedCarriers(); // \OpenAPI\Client\Model\IncludedExcludedCarriers | Include and Exclude Carriers Names array

try {
    $result = $apiInstance->strategiesStrategyIdCarriersPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdCarriersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**\OpenAPI\Client\Model\IncludedExcludedCarriers**](../Model/IncludedExcludedCarriers.md)| Include and Exclude Carriers Names array |

### Return type

[**\OpenAPI\Client\Model\CarrierStrategy**](../Model/CarrierStrategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdChecklistGet

> \OpenAPI\Client\Model\InlineResponse2002 strategiesStrategyIdChecklistGet($strategy_id)

Check Status Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdChecklistGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdChecklistGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdContextualProvidersGet

> \OpenAPI\Client\Model\ContextualStrategy strategiesStrategyIdContextualProvidersGet($strategy_id)

Contextual in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdContextualProvidersGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdContextualProvidersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\ContextualStrategy**](../Model/ContextualStrategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdContextualProvidersPost

> \OpenAPI\Client\Model\ContextualStrategy strategiesStrategyIdContextualProvidersPost($strategy_id, $body)

Include and Exclude Contextual Segments to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = new \OpenAPI\Client\Model\IncludedExcludedIDS(); // \OpenAPI\Client\Model\IncludedExcludedIDS | Include and Exclude Contextual Segments IDs array

try {
    $result = $apiInstance->strategiesStrategyIdContextualProvidersPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdContextualProvidersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**\OpenAPI\Client\Model\IncludedExcludedIDS**](../Model/IncludedExcludedIDS.md)| Include and Exclude Contextual Segments IDs array |

### Return type

[**\OpenAPI\Client\Model\ContextualStrategy**](../Model/ContextualStrategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdCreativesGet

> \OpenAPI\Client\Model\Creatives strategiesStrategyIdCreativesGet($strategy_id)

Creatives in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdCreativesGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdCreativesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\Creatives**](../Model/Creatives.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdCreativesPost

> \OpenAPI\Client\Model\Creatives strategiesStrategyIdCreativesPost($strategy_id, $body)

Add Creatives to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = array(3.4); // float[] | Creatives IDs array

try {
    $result = $apiInstance->strategiesStrategyIdCreativesPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdCreativesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**float[]**](../Model/float.md)| Creatives IDs array |

### Return type

[**\OpenAPI\Client\Model\Creatives**](../Model/Creatives.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdDataProvidersGet

> \OpenAPI\Client\Model\DataProviderStrategy strategiesStrategyIdDataProvidersGet($strategy_id)

Data Providers in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdDataProvidersGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdDataProvidersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\DataProviderStrategy**](../Model/DataProviderStrategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdDataProvidersPost

> \OpenAPI\Client\Model\DataProviderStrategy strategiesStrategyIdDataProvidersPost($strategy_id, $body)

Include and Exclude Data Providers to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = new \OpenAPI\Client\Model\IncludedExcludedIDS(); // \OpenAPI\Client\Model\IncludedExcludedIDS | Include and Exclude Data Providers IDs array

try {
    $result = $apiInstance->strategiesStrategyIdDataProvidersPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdDataProvidersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**\OpenAPI\Client\Model\IncludedExcludedIDS**](../Model/IncludedExcludedIDS.md)| Include and Exclude Data Providers IDs array |

### Return type

[**\OpenAPI\Client\Model\DataProviderStrategy**](../Model/DataProviderStrategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdDaypartsGet

> \OpenAPI\Client\Model\DayParts strategiesStrategyIdDaypartsGet($strategy_id)

Day Part in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdDaypartsGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdDaypartsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\DayParts**](../Model/DayParts.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdDaypartsPost

> \OpenAPI\Client\Model\DayParts strategiesStrategyIdDaypartsPost($strategy_id, $body)

Add Day Parts to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = array(new \OpenAPI\Client\Model\DayPartAddStrategy()); // \OpenAPI\Client\Model\DayPartAddStrategy[] | Add Day Parts array

try {
    $result = $apiInstance->strategiesStrategyIdDaypartsPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdDaypartsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**\OpenAPI\Client\Model\DayPartAddStrategy[]**](../Model/DayPartAddStrategy.md)| Add Day Parts array |

### Return type

[**\OpenAPI\Client\Model\DayParts**](../Model/DayParts.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdDealsGet

> \OpenAPI\Client\Model\Deals strategiesStrategyIdDealsGet($strategy_id)

Deals in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdDealsGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdDealsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\Deals**](../Model/Deals.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdDealsPost

> \OpenAPI\Client\Model\Deals strategiesStrategyIdDealsPost($strategy_id, $body)

Add Deals to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = array(3.4); // float[] | Deals IDs array

try {
    $result = $apiInstance->strategiesStrategyIdDealsPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdDealsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**float[]**](../Model/float.md)| Deals IDs array |

### Return type

[**\OpenAPI\Client\Model\Deals**](../Model/Deals.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdDelete

> strategiesStrategyIdDelete($strategy_id)

Delete Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $apiInstance->strategiesStrategyIdDelete($strategy_id);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdDspsGet

> \OpenAPI\Client\Model\SspDspItems strategiesStrategyIdDspsGet($strategy_id)

DSP in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdDspsGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdDspsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\SspDspItems**](../Model/SspDspItems.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdDspsPost

> \OpenAPI\Client\Model\SspDspItems strategiesStrategyIdDspsPost($strategy_id, $body)

Add DSP to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = array(3.4); // float[] | Ssp IDs array

try {
    $result = $apiInstance->strategiesStrategyIdDspsPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdDspsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**float[]**](../Model/float.md)| Ssp IDs array |

### Return type

[**\OpenAPI\Client\Model\SspDspItems**](../Model/SspDspItems.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdGet

> \OpenAPI\Client\Model\StrategyWithCampaign strategiesStrategyIdGet($strategy_id)

Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\StrategyWithCampaign**](../Model/StrategyWithCampaign.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdIpListsGet

> \OpenAPI\Client\Model\IpLists strategiesStrategyIdIpListsGet($strategy_id)

Ip Lists in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdIpListsGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdIpListsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\IpLists**](../Model/IpLists.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdIpListsPost

> \OpenAPI\Client\Model\IpLists strategiesStrategyIdIpListsPost($strategy_id, $body)

Add Ip Lists to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = array(3.4); // float[] | Ip List IDs array

try {
    $result = $apiInstance->strategiesStrategyIdIpListsPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdIpListsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**float[]**](../Model/float.md)| Ip List IDs array |

### Return type

[**\OpenAPI\Client\Model\IpLists**](../Model/IpLists.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdKeywordListsGet

> \OpenAPI\Client\Model\KeywordLists strategiesStrategyIdKeywordListsGet($strategy_id)

Keyword Lists in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdKeywordListsGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdKeywordListsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\KeywordLists**](../Model/KeywordLists.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdKeywordListsPost

> \OpenAPI\Client\Model\KeywordLists strategiesStrategyIdKeywordListsPost($strategy_id, $body)

Add Keyword Lists to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = array(3.4); // float[] | Keyword List IDs array

try {
    $result = $apiInstance->strategiesStrategyIdKeywordListsPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdKeywordListsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**float[]**](../Model/float.md)| Keyword List IDs array |

### Return type

[**\OpenAPI\Client\Model\KeywordLists**](../Model/KeywordLists.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdLocationsGet

> \OpenAPI\Client\Model\LocationStrategy strategiesStrategyIdLocationsGet($strategy_id)

Location in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdLocationsGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdLocationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\LocationStrategy**](../Model/LocationStrategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdLocationsPost

> \OpenAPI\Client\Model\LocationStrategy strategiesStrategyIdLocationsPost($strategy_id, $body)

Include and Exclude Locations to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = new \OpenAPI\Client\Model\LocationIncludedExcluded(); // \OpenAPI\Client\Model\LocationIncludedExcluded | Include and Exclude Locations IDs array

try {
    $result = $apiInstance->strategiesStrategyIdLocationsPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdLocationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**\OpenAPI\Client\Model\LocationIncludedExcluded**](../Model/LocationIncludedExcluded.md)| Include and Exclude Locations IDs array |

### Return type

[**\OpenAPI\Client\Model\LocationStrategy**](../Model/LocationStrategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdPixelsGet

> \OpenAPI\Client\Model\PixelStrategy strategiesStrategyIdPixelsGet($strategy_id)

Pixel in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdPixelsGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdPixelsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\PixelStrategy**](../Model/PixelStrategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdPixelsPost

> \OpenAPI\Client\Model\PixelStrategy strategiesStrategyIdPixelsPost($strategy_id, $body)

Include and Exclude Pixels to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = new \OpenAPI\Client\Model\IncludedExcludedIDS(); // \OpenAPI\Client\Model\IncludedExcludedIDS | Include and Exclude Pixels IDs array

try {
    $result = $apiInstance->strategiesStrategyIdPixelsPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdPixelsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**\OpenAPI\Client\Model\IncludedExcludedIDS**](../Model/IncludedExcludedIDS.md)| Include and Exclude Pixels IDs array |

### Return type

[**\OpenAPI\Client\Model\PixelStrategy**](../Model/PixelStrategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdPut

> \OpenAPI\Client\Model\Strategy strategiesStrategyIdPut($strategy_id, $body)

Add Site Lists to Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = new \OpenAPI\Client\Model\EditStrategy(); // \OpenAPI\Client\Model\EditStrategy | Update Strategy

try {
    $result = $apiInstance->strategiesStrategyIdPut($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**\OpenAPI\Client\Model\EditStrategy**](../Model/EditStrategy.md)| Update Strategy |

### Return type

[**\OpenAPI\Client\Model\Strategy**](../Model/Strategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdReportBidsGet

> \OpenAPI\Client\Model\ReportBids strategiesStrategyIdReportBidsGet($strategy_id)

Report Bids Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdReportBidsGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdReportBidsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\ReportBids**](../Model/ReportBids.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdRulesGet

> \OpenAPI\Client\Model\Rules strategiesStrategyIdRulesGet($strategy_id)

All Strategy Optimization rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of strategy

try {
    $result = $apiInstance->strategiesStrategyIdRulesGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdRulesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of strategy |

### Return type

[**\OpenAPI\Client\Model\Rules**](../Model/Rules.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdRulesPost

> \OpenAPI\Client\Model\Rules strategiesStrategyIdRulesPost($strategy_id, $body)

Update Rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = new \OpenAPI\Client\Model\Rules(); // \OpenAPI\Client\Model\Rules | Array of string rules

try {
    $result = $apiInstance->strategiesStrategyIdRulesPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdRulesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**\OpenAPI\Client\Model\Rules**](../Model/Rules.md)| Array of string rules |

### Return type

[**\OpenAPI\Client\Model\Rules**](../Model/Rules.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdSiteListsGet

> \OpenAPI\Client\Model\SiteLists strategiesStrategyIdSiteListsGet($strategy_id)

Site Lists in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdSiteListsGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdSiteListsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\SiteLists**](../Model/SiteLists.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdSiteListsPost

> \OpenAPI\Client\Model\SiteLists strategiesStrategyIdSiteListsPost($strategy_id, $body)

Add Site Lists to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = array(3.4); // float[] | Site List IDs array

try {
    $result = $apiInstance->strategiesStrategyIdSiteListsPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdSiteListsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**float[]**](../Model/float.md)| Site List IDs array |

### Return type

[**\OpenAPI\Client\Model\SiteLists**](../Model/SiteLists.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdSspsGet

> \OpenAPI\Client\Model\SspDspItems strategiesStrategyIdSspsGet($strategy_id)

Ssp in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdSspsGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdSspsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\SspDspItems**](../Model/SspDspItems.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdSspsPost

> \OpenAPI\Client\Model\SspDspItems strategiesStrategyIdSspsPost($strategy_id, $body)

Add Ssp to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = array(3.4); // float[] | Ssp IDs array

try {
    $result = $apiInstance->strategiesStrategyIdSspsPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdSspsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**float[]**](../Model/float.md)| Ssp IDs array |

### Return type

[**\OpenAPI\Client\Model\SspDspItems**](../Model/SspDspItems.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdTechnologiesBrowsersGet

> \OpenAPI\Client\Model\BrowserStrategy strategiesStrategyIdTechnologiesBrowsersGet($strategy_id)

Browsers in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdTechnologiesBrowsersGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdTechnologiesBrowsersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\BrowserStrategy**](../Model/BrowserStrategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdTechnologiesBrowsersPost

> \OpenAPI\Client\Model\BrowserStrategy strategiesStrategyIdTechnologiesBrowsersPost($strategy_id, $body)

Include and Exclude Browsers to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = new \OpenAPI\Client\Model\BrowserAdd(); // \OpenAPI\Client\Model\BrowserAdd | Include and Exclude Browsers

try {
    $result = $apiInstance->strategiesStrategyIdTechnologiesBrowsersPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdTechnologiesBrowsersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**\OpenAPI\Client\Model\BrowserAdd**](../Model/BrowserAdd.md)| Include and Exclude Browsers |

### Return type

[**\OpenAPI\Client\Model\BrowserStrategy**](../Model/BrowserStrategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdTechnologiesConnectionTypesGet

> \OpenAPI\Client\Model\ConnectionTypeStrategy strategiesStrategyIdTechnologiesConnectionTypesGet($strategy_id)

Connection Types in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdTechnologiesConnectionTypesGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdTechnologiesConnectionTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\ConnectionTypeStrategy**](../Model/ConnectionTypeStrategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdTechnologiesConnectionTypesPost

> \OpenAPI\Client\Model\ConnectionTypeStrategy strategiesStrategyIdTechnologiesConnectionTypesPost($strategy_id, $body)

Include and Exclude Connection Types to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = new \OpenAPI\Client\Model\IncludedExcludedIDS(); // \OpenAPI\Client\Model\IncludedExcludedIDS | Include and Exclude Connection Types

try {
    $result = $apiInstance->strategiesStrategyIdTechnologiesConnectionTypesPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdTechnologiesConnectionTypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**\OpenAPI\Client\Model\IncludedExcludedIDS**](../Model/IncludedExcludedIDS.md)| Include and Exclude Connection Types |

### Return type

[**\OpenAPI\Client\Model\ConnectionTypeStrategy**](../Model/ConnectionTypeStrategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdTechnologiesDevicesGet

> \OpenAPI\Client\Model\DeviceStrategy strategiesStrategyIdTechnologiesDevicesGet($strategy_id)

Devices in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdTechnologiesDevicesGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdTechnologiesDevicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\DeviceStrategy**](../Model/DeviceStrategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdTechnologiesDevicesPost

> \OpenAPI\Client\Model\DeviceStrategy strategiesStrategyIdTechnologiesDevicesPost($strategy_id, $body)

Include and Exclude Devices to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = new \OpenAPI\Client\Model\DeviceAdd(); // \OpenAPI\Client\Model\DeviceAdd | Include and Exclude Devices

try {
    $result = $apiInstance->strategiesStrategyIdTechnologiesDevicesPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdTechnologiesDevicesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**\OpenAPI\Client\Model\DeviceAdd**](../Model/DeviceAdd.md)| Include and Exclude Devices |

### Return type

[**\OpenAPI\Client\Model\DeviceStrategy**](../Model/DeviceStrategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdTechnologiesOssGet

> \OpenAPI\Client\Model\OsStrategy strategiesStrategyIdTechnologiesOssGet($strategy_id)

Os in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdTechnologiesOssGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdTechnologiesOssGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\OsStrategy**](../Model/OsStrategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdTechnologiesOssPost

> \OpenAPI\Client\Model\OsStrategy strategiesStrategyIdTechnologiesOssPost($strategy_id, $body)

Include and Exclude Os to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = new \OpenAPI\Client\Model\OsAdd(); // \OpenAPI\Client\Model\OsAdd | Include and Exclude Os

try {
    $result = $apiInstance->strategiesStrategyIdTechnologiesOssPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdTechnologiesOssPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**\OpenAPI\Client\Model\OsAdd**](../Model/OsAdd.md)| Include and Exclude Os |

### Return type

[**\OpenAPI\Client\Model\OsStrategy**](../Model/OsStrategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdUrlListsGet

> \OpenAPI\Client\Model\GeneralLists strategiesStrategyIdUrlListsGet($strategy_id)

Url Lists in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdUrlListsGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdUrlListsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\GeneralLists**](../Model/GeneralLists.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdUrlListsPost

> \OpenAPI\Client\Model\GeneralLists strategiesStrategyIdUrlListsPost($strategy_id, $body)

Add Url Lists to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = array(3.4); // float[] | Url List IDs array

try {
    $result = $apiInstance->strategiesStrategyIdUrlListsPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdUrlListsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**float[]**](../Model/float.md)| Url List IDs array |

### Return type

[**\OpenAPI\Client\Model\GeneralLists**](../Model/GeneralLists.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdUseragentListsGet

> \OpenAPI\Client\Model\UseragentLists strategiesStrategyIdUseragentListsGet($strategy_id)

Useragent Lists in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdUseragentListsGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdUseragentListsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\UseragentLists**](../Model/UseragentLists.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdUseragentListsPost

> \OpenAPI\Client\Model\UseragentLists strategiesStrategyIdUseragentListsPost($strategy_id, $body)

Add Useragent Lists to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = array(3.4); // float[] | Useragent List IDs array

try {
    $result = $apiInstance->strategiesStrategyIdUseragentListsPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdUseragentListsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**float[]**](../Model/float.md)| Useragent List IDs array |

### Return type

[**\OpenAPI\Client\Model\UseragentLists**](../Model/UseragentLists.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdVideoPlayerOptionsGet

> \OpenAPI\Client\Model\VideoStrategy strategiesStrategyIdVideoPlayerOptionsGet($strategy_id)

Video Options in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdVideoPlayerOptionsGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdVideoPlayerOptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\VideoStrategy**](../Model/VideoStrategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdVideoPlayerOptionsPost

> \OpenAPI\Client\Model\VideoStrategy strategiesStrategyIdVideoPlayerOptionsPost($strategy_id, $body)

Include and Exclude Video to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = new \OpenAPI\Client\Model\IncludedExcludedIDS(); // \OpenAPI\Client\Model\IncludedExcludedIDS | Include and Exclude Video IDs array

try {
    $result = $apiInstance->strategiesStrategyIdVideoPlayerOptionsPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdVideoPlayerOptionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**\OpenAPI\Client\Model\IncludedExcludedIDS**](../Model/IncludedExcludedIDS.md)| Include and Exclude Video IDs array |

### Return type

[**\OpenAPI\Client\Model\VideoStrategy**](../Model/VideoStrategy.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdZipListsGet

> \OpenAPI\Client\Model\GeneralLists strategiesStrategyIdZipListsGet($strategy_id)

Zip Lists in Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy

try {
    $result = $apiInstance->strategiesStrategyIdZipListsGet($strategy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdZipListsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |

### Return type

[**\OpenAPI\Client\Model\GeneralLists**](../Model/GeneralLists.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## strategiesStrategyIdZipListsPost

> \OpenAPI\Client\Model\GeneralLists strategiesStrategyIdZipListsPost($strategy_id, $body)

Add Zip Lists to Strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StrategiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 3.4; // float | The numerical ID of Strategy
$body = array(3.4); // float[] | Zip List IDs array

try {
    $result = $apiInstance->strategiesStrategyIdZipListsPost($strategy_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StrategiesApi->strategiesStrategyIdZipListsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strategy_id** | **float**| The numerical ID of Strategy |
 **body** | [**float[]**](../Model/float.md)| Zip List IDs array |

### Return type

[**\OpenAPI\Client\Model\GeneralLists**](../Model/GeneralLists.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

