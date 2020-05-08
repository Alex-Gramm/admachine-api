# OpenAPI\Client\OrganizationsApi

All URIs are relative to *https://api.adx1.com/v1.0.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**organizationsGet**](OrganizationsApi.md#organizationsGet) | **GET** /organizations | Organizations. **Only for Root**
[**organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdGet**](OrganizationsApi.md#organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdGet) | **GET** /organizations/{organization_id}/agencies/{agency_id}/advertisers/{advertiser_id} | Advertisers.
[**organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdPut**](OrganizationsApi.md#organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdPut) | **PUT** /organizations/{organization_id}/agencies/{agency_id}/advertisers/{advertiser_id} | Update Advertiser.
[**organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdSspsGet**](OrganizationsApi.md#organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdSspsGet) | **GET** /organizations/{organization_id}/agencies/{agency_id}/advertisers/{advertiser_id}/ssps | Advertiser Locked SSP. Only For Admins.
[**organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdSspsPut**](OrganizationsApi.md#organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdSspsPut) | **PUT** /organizations/{organization_id}/agencies/{agency_id}/advertisers/{advertiser_id}/ssps | Update Advertiser Locked SSP. Only For Admins.
[**organizationsOrganizationIdAgenciesAgencyIdAdvertisersGet**](OrganizationsApi.md#organizationsOrganizationIdAgenciesAgencyIdAdvertisersGet) | **GET** /organizations/{organization_id}/agencies/{agency_id}/advertisers | Advertisers.
[**organizationsOrganizationIdAgenciesAgencyIdAdvertisersPost**](OrganizationsApi.md#organizationsOrganizationIdAgenciesAgencyIdAdvertisersPost) | **POST** /organizations/{organization_id}/agencies/{agency_id}/advertisers | Create Advertiser.
[**organizationsOrganizationIdAgenciesAgencyIdGet**](OrganizationsApi.md#organizationsOrganizationIdAgenciesAgencyIdGet) | **GET** /organizations/{organization_id}/agencies/{agency_id} | Agency.
[**organizationsOrganizationIdAgenciesAgencyIdPut**](OrganizationsApi.md#organizationsOrganizationIdAgenciesAgencyIdPut) | **PUT** /organizations/{organization_id}/agencies/{agency_id} | Update Agency.
[**organizationsOrganizationIdAgenciesGet**](OrganizationsApi.md#organizationsOrganizationIdAgenciesGet) | **GET** /organizations/{organization_id}/agencies | Organization agencies.
[**organizationsOrganizationIdAgenciesPost**](OrganizationsApi.md#organizationsOrganizationIdAgenciesPost) | **POST** /organizations/{organization_id}/agencies | Create Agency.
[**organizationsOrganizationIdGet**](OrganizationsApi.md#organizationsOrganizationIdGet) | **GET** /organizations/{organization_id} | Organization. **Only for Admins**
[**organizationsOrganizationIdPut**](OrganizationsApi.md#organizationsOrganizationIdPut) | **PUT** /organizations/{organization_id} | Update Organization. Only for Root.
[**organizationsPost**](OrganizationsApi.md#organizationsPost) | **POST** /organizations | Create Organization. **Only For Root**



## organizationsGet

> \OpenAPI\Client\Model\Organizations organizationsGet($limit, $offset)

Organizations. **Only for Root**

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


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 'limit_example'; // string | Limit
$offset = 'offset_example'; // string | Offset

try {
    $result = $apiInstance->organizationsGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->organizationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **string**| Limit |
 **offset** | **string**| Offset |

### Return type

[**\OpenAPI\Client\Model\Organizations**](../Model/Organizations.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdGet

> \OpenAPI\Client\Model\Advertiser organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdGet($organization_id, $agency_id, $advertiser_id)

Advertisers.

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


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 3.4; // float | The numerical ID of Organization
$agency_id = 3.4; // float | The numerical ID of Agency
$advertiser_id = 3.4; // float | The numerical ID of Advertiser

try {
    $result = $apiInstance->organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdGet($organization_id, $agency_id, $advertiser_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **float**| The numerical ID of Organization |
 **agency_id** | **float**| The numerical ID of Agency |
 **advertiser_id** | **float**| The numerical ID of Advertiser |

### Return type

[**\OpenAPI\Client\Model\Advertiser**](../Model/Advertiser.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdPut

> organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdPut($organization_id, $agency_id, $advertiser_id, $body)

Update Advertiser.

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


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 3.4; // float | The numerical ID of Organization
$agency_id = 3.4; // float | The numerical ID of Agency
$advertiser_id = 3.4; // float | The numerical ID of Advertiser
$body = new \OpenAPI\Client\Model\NewAdvertiser(); // \OpenAPI\Client\Model\NewAdvertiser | Updated Advertiser object

try {
    $apiInstance->organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdPut($organization_id, $agency_id, $advertiser_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **float**| The numerical ID of Organization |
 **agency_id** | **float**| The numerical ID of Agency |
 **advertiser_id** | **float**| The numerical ID of Advertiser |
 **body** | [**\OpenAPI\Client\Model\NewAdvertiser**](../Model/NewAdvertiser.md)| Updated Advertiser object |

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


## organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdSspsGet

> float[] organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdSspsGet($organization_id, $agency_id, $advertiser_id)

Advertiser Locked SSP. Only For Admins.

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


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 3.4; // float | The numerical ID of Organization
$agency_id = 3.4; // float | The numerical ID of Agency
$advertiser_id = 3.4; // float | The numerical ID of Advertiser

try {
    $result = $apiInstance->organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdSspsGet($organization_id, $agency_id, $advertiser_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdSspsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **float**| The numerical ID of Organization |
 **agency_id** | **float**| The numerical ID of Agency |
 **advertiser_id** | **float**| The numerical ID of Advertiser |

### Return type

**float[]**

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdSspsPut

> organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdSspsPut($organization_id, $agency_id, $advertiser_id, $body)

Update Advertiser Locked SSP. Only For Admins.

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


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 3.4; // float | The numerical ID of Organization
$agency_id = 3.4; // float | The numerical ID of Agency
$advertiser_id = 3.4; // float | The numerical ID of Advertiser
$body = array(3.4); // float[] | Updated SSP object

try {
    $apiInstance->organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdSspsPut($organization_id, $agency_id, $advertiser_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->organizationsOrganizationIdAgenciesAgencyIdAdvertisersAdvertiserIdSspsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **float**| The numerical ID of Organization |
 **agency_id** | **float**| The numerical ID of Agency |
 **advertiser_id** | **float**| The numerical ID of Advertiser |
 **body** | [**float[]**](../Model/float.md)| Updated SSP object |

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


## organizationsOrganizationIdAgenciesAgencyIdAdvertisersGet

> \OpenAPI\Client\Model\Advertisers organizationsOrganizationIdAgenciesAgencyIdAdvertisersGet($organization_id, $agency_id)

Advertisers.

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


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 3.4; // float | The numerical ID of Organization
$agency_id = 3.4; // float | The numerical ID of Agency

try {
    $result = $apiInstance->organizationsOrganizationIdAgenciesAgencyIdAdvertisersGet($organization_id, $agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->organizationsOrganizationIdAgenciesAgencyIdAdvertisersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **float**| The numerical ID of Organization |
 **agency_id** | **float**| The numerical ID of Agency |

### Return type

[**\OpenAPI\Client\Model\Advertisers**](../Model/Advertisers.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## organizationsOrganizationIdAgenciesAgencyIdAdvertisersPost

> organizationsOrganizationIdAgenciesAgencyIdAdvertisersPost($organization_id, $agency_id, $body)

Create Advertiser.

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


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 3.4; // float | The numerical ID of Organization
$agency_id = 3.4; // float | The numerical ID of Agency
$body = new \OpenAPI\Client\Model\NewAdvertiser(); // \OpenAPI\Client\Model\NewAdvertiser | Created Advertiser.

try {
    $apiInstance->organizationsOrganizationIdAgenciesAgencyIdAdvertisersPost($organization_id, $agency_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->organizationsOrganizationIdAgenciesAgencyIdAdvertisersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **float**| The numerical ID of Organization |
 **agency_id** | **float**| The numerical ID of Agency |
 **body** | [**\OpenAPI\Client\Model\NewAdvertiser**](../Model/NewAdvertiser.md)| Created Advertiser. |

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


## organizationsOrganizationIdAgenciesAgencyIdGet

> \OpenAPI\Client\Model\Agency organizationsOrganizationIdAgenciesAgencyIdGet($organization_id, $agency_id)

Agency.

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


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 3.4; // float | The numerical ID of Organization
$agency_id = 3.4; // float | The numerical ID of Agency

try {
    $result = $apiInstance->organizationsOrganizationIdAgenciesAgencyIdGet($organization_id, $agency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->organizationsOrganizationIdAgenciesAgencyIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **float**| The numerical ID of Organization |
 **agency_id** | **float**| The numerical ID of Agency |

### Return type

[**\OpenAPI\Client\Model\Agency**](../Model/Agency.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## organizationsOrganizationIdAgenciesAgencyIdPut

> organizationsOrganizationIdAgenciesAgencyIdPut($organization_id, $agency_id, $body)

Update Agency.

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


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 3.4; // float | The numerical ID of Organization
$agency_id = 3.4; // float | The numerical ID of Agency
$body = new \OpenAPI\Client\Model\NewAgency(); // \OpenAPI\Client\Model\NewAgency | Updated Organization object

try {
    $apiInstance->organizationsOrganizationIdAgenciesAgencyIdPut($organization_id, $agency_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->organizationsOrganizationIdAgenciesAgencyIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **float**| The numerical ID of Organization |
 **agency_id** | **float**| The numerical ID of Agency |
 **body** | [**\OpenAPI\Client\Model\NewAgency**](../Model/NewAgency.md)| Updated Organization object |

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


## organizationsOrganizationIdAgenciesGet

> \OpenAPI\Client\Model\Agencies organizationsOrganizationIdAgenciesGet($organization_id)

Organization agencies.

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


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 3.4; // float | The numerical ID of Organization

try {
    $result = $apiInstance->organizationsOrganizationIdAgenciesGet($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->organizationsOrganizationIdAgenciesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **float**| The numerical ID of Organization |

### Return type

[**\OpenAPI\Client\Model\Agencies**](../Model/Agencies.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## organizationsOrganizationIdAgenciesPost

> organizationsOrganizationIdAgenciesPost($organization_id, $body)

Create Agency.

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


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 3.4; // float | The numerical ID of Organization
$body = new \OpenAPI\Client\Model\NewAgency(); // \OpenAPI\Client\Model\NewAgency | Created Agency.

try {
    $apiInstance->organizationsOrganizationIdAgenciesPost($organization_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->organizationsOrganizationIdAgenciesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **float**| The numerical ID of Organization |
 **body** | [**\OpenAPI\Client\Model\NewAgency**](../Model/NewAgency.md)| Created Agency. |

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


## organizationsOrganizationIdGet

> \OpenAPI\Client\Model\Organization organizationsOrganizationIdGet($organization_id)

Organization. **Only for Admins**

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


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 3.4; // float | The numerical ID of Organization

try {
    $result = $apiInstance->organizationsOrganizationIdGet($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->organizationsOrganizationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **float**| The numerical ID of Organization |

### Return type

[**\OpenAPI\Client\Model\Organization**](../Model/Organization.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## organizationsOrganizationIdPut

> organizationsOrganizationIdPut($organization_id, $body)

Update Organization. Only for Root.

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


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 3.4; // float | The numerical ID of Organization
$body = new \OpenAPI\Client\Model\NewOrganization(); // \OpenAPI\Client\Model\NewOrganization | Updated Organization object

try {
    $apiInstance->organizationsOrganizationIdPut($organization_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->organizationsOrganizationIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **float**| The numerical ID of Organization |
 **body** | [**\OpenAPI\Client\Model\NewOrganization**](../Model/NewOrganization.md)| Updated Organization object |

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


## organizationsPost

> organizationsPost($body)

Create Organization. **Only For Root**

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


$apiInstance = new OpenAPI\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\NewOrganization(); // \OpenAPI\Client\Model\NewOrganization | Created Organization. **Only For Root**

try {
    $apiInstance->organizationsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->organizationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\NewOrganization**](../Model/NewOrganization.md)| Created Organization. **Only For Root** |

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

