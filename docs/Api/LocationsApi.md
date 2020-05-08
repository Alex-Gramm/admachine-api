# OpenAPI\Client\LocationsApi

All URIs are relative to *https://api.adx1.com/v1.0.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**locationsCountriesCountryIdGet**](LocationsApi.md#locationsCountriesCountryIdGet) | **GET** /locations/countries/{country_id} | Country
[**locationsCountriesCountryIdRegionsGet**](LocationsApi.md#locationsCountriesCountryIdRegionsGet) | **GET** /locations/countries/{country_id}/regions | Regions
[**locationsCountriesCountryIdRegionsRegionIdCitiesCityIdGet**](LocationsApi.md#locationsCountriesCountryIdRegionsRegionIdCitiesCityIdGet) | **GET** /locations/countries/{country_id}/regions/{region_id}/cities/{city_id} | Cities
[**locationsCountriesCountryIdRegionsRegionIdCitiesGet**](LocationsApi.md#locationsCountriesCountryIdRegionsRegionIdCitiesGet) | **GET** /locations/countries/{country_id}/regions/{region_id}/cities | Cities
[**locationsCountriesCountryIdRegionsRegionIdGet**](LocationsApi.md#locationsCountriesCountryIdRegionsRegionIdGet) | **GET** /locations/countries/{country_id}/regions/{region_id} | Region
[**locationsCountriesGet**](LocationsApi.md#locationsCountriesGet) | **GET** /locations/countries | Countries
[**locationsGeoGet**](LocationsApi.md#locationsGeoGet) | **GET** /locations/geo | Countries



## locationsCountriesCountryIdGet

> \OpenAPI\Client\Model\Country locationsCountriesCountryIdGet($country_id)

Country

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


$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_id = 3.4; // float | Country ID

try {
    $result = $apiInstance->locationsCountriesCountryIdGet($country_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsCountriesCountryIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_id** | **float**| Country ID |

### Return type

[**\OpenAPI\Client\Model\Country**](../Model/Country.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## locationsCountriesCountryIdRegionsGet

> \OpenAPI\Client\Model\Regions locationsCountriesCountryIdRegionsGet($country_id, $search)

Regions

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


$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_id = 3.4; // float | Country ID
$search = 'search_example'; // string | Search By Name

try {
    $result = $apiInstance->locationsCountriesCountryIdRegionsGet($country_id, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsCountriesCountryIdRegionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_id** | **float**| Country ID |
 **search** | **string**| Search By Name | [optional]

### Return type

[**\OpenAPI\Client\Model\Regions**](../Model/Regions.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## locationsCountriesCountryIdRegionsRegionIdCitiesCityIdGet

> \OpenAPI\Client\Model\Cities locationsCountriesCountryIdRegionsRegionIdCitiesCityIdGet($country_id, $region_id, $city_id)

Cities

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


$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_id = 3.4; // float | Country ID
$region_id = 3.4; // float | Region ID
$city_id = 3.4; // float | City ID

try {
    $result = $apiInstance->locationsCountriesCountryIdRegionsRegionIdCitiesCityIdGet($country_id, $region_id, $city_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsCountriesCountryIdRegionsRegionIdCitiesCityIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_id** | **float**| Country ID |
 **region_id** | **float**| Region ID |
 **city_id** | **float**| City ID |

### Return type

[**\OpenAPI\Client\Model\Cities**](../Model/Cities.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## locationsCountriesCountryIdRegionsRegionIdCitiesGet

> \OpenAPI\Client\Model\Cities locationsCountriesCountryIdRegionsRegionIdCitiesGet($country_id, $region_id, $search)

Cities

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


$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_id = 3.4; // float | Country ID
$region_id = 3.4; // float | Region ID
$search = 'search_example'; // string | Search By Name

try {
    $result = $apiInstance->locationsCountriesCountryIdRegionsRegionIdCitiesGet($country_id, $region_id, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsCountriesCountryIdRegionsRegionIdCitiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_id** | **float**| Country ID |
 **region_id** | **float**| Region ID |
 **search** | **string**| Search By Name | [optional]

### Return type

[**\OpenAPI\Client\Model\Cities**](../Model/Cities.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## locationsCountriesCountryIdRegionsRegionIdGet

> \OpenAPI\Client\Model\Region locationsCountriesCountryIdRegionsRegionIdGet($country_id, $region_id)

Region

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


$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_id = 3.4; // float | Country ID
$region_id = 3.4; // float | Region ID

try {
    $result = $apiInstance->locationsCountriesCountryIdRegionsRegionIdGet($country_id, $region_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsCountriesCountryIdRegionsRegionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_id** | **float**| Country ID |
 **region_id** | **float**| Region ID |

### Return type

[**\OpenAPI\Client\Model\Region**](../Model/Region.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## locationsCountriesGet

> \OpenAPI\Client\Model\Countries locationsCountriesGet($search)

Countries

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


$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search By Name

try {
    $result = $apiInstance->locationsCountriesGet($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsCountriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search By Name | [optional]

### Return type

[**\OpenAPI\Client\Model\Countries**](../Model/Countries.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## locationsGeoGet

> \OpenAPI\Client\Model\GeoSearch locationsGeoGet($search)

Countries

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


$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search By Name

try {
    $result = $apiInstance->locationsGeoGet($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationsGeoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search By Name | [optional]

### Return type

[**\OpenAPI\Client\Model\GeoSearch**](../Model/GeoSearch.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

