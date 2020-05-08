# OpenAPI\Client\SiteListsApi

All URIs are relative to *https://api.adx1.com/v1.0.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**siteListsGet**](SiteListsApi.md#siteListsGet) | **GET** /site_lists | All Site Lists
[**siteListsPost**](SiteListsApi.md#siteListsPost) | **POST** /site_lists | Create Site List
[**siteListsSiteListIdDelete**](SiteListsApi.md#siteListsSiteListIdDelete) | **DELETE** /site_lists/{site_list_id} | Delete Site List
[**siteListsSiteListIdGet**](SiteListsApi.md#siteListsSiteListIdGet) | **GET** /site_lists/{site_list_id} | Site List
[**siteListsSiteListIdPut**](SiteListsApi.md#siteListsSiteListIdPut) | **PUT** /site_lists/{site_list_id} | Update Site List
[**siteListsSiteListIdSitesDelete**](SiteListsApi.md#siteListsSiteListIdSitesDelete) | **DELETE** /site_lists/{site_list_id}/sites | Delete Site in Site List
[**siteListsSiteListIdSitesGet**](SiteListsApi.md#siteListsSiteListIdSitesGet) | **GET** /site_lists/{site_list_id}/sites | Sites in Site List
[**siteListsSiteListIdSitesPost**](SiteListsApi.md#siteListsSiteListIdSitesPost) | **POST** /site_lists/{site_list_id}/sites | Add Sites to Site List
[**siteListsTopSitesGet**](SiteListsApi.md#siteListsTopSitesGet) | **GET** /site_lists/top_sites | Top Site Lists



## siteListsGet

> \OpenAPI\Client\Model\SiteLists siteListsGet($limit, $offset)

All Site Lists

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


$apiInstance = new OpenAPI\Client\Api\SiteListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 'limit_example'; // string | Limit
$offset = 'offset_example'; // string | Offset

try {
    $result = $apiInstance->siteListsGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteListsApi->siteListsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **string**| Limit |
 **offset** | **string**| Offset |

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


## siteListsPost

> siteListsPost($name, $user_id, $active, $relation_type, $shared, $file_name)

Create Site List

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


$apiInstance = new OpenAPI\Client\Api\SiteListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Site List Name
$user_id = 3.4; // float | User ID
$active = 3.4; // float | Site List status
$relation_type = 3.4; // float | Site List type
$shared = 3.4; // float | Is Site List shared **Only for ROOT**
$file_name = "/path/to/file.txt"; // \SplFileObject | Site List to upload

try {
    $apiInstance->siteListsPost($name, $user_id, $active, $relation_type, $shared, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling SiteListsApi->siteListsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Site List Name |
 **user_id** | **float**| User ID |
 **active** | **float**| Site List status |
 **relation_type** | **float**| Site List type |
 **shared** | **float**| Is Site List shared **Only for ROOT** | [optional]
 **file_name** | **\SplFileObject****\SplFileObject**| Site List to upload | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## siteListsSiteListIdDelete

> siteListsSiteListIdDelete($site_list_id)

Delete Site List

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


$apiInstance = new OpenAPI\Client\Api\SiteListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_list_id = 3.4; // float | The numerical ID of Site List

try {
    $apiInstance->siteListsSiteListIdDelete($site_list_id);
} catch (Exception $e) {
    echo 'Exception when calling SiteListsApi->siteListsSiteListIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_list_id** | **float**| The numerical ID of Site List |

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


## siteListsSiteListIdGet

> \OpenAPI\Client\Model\SiteList siteListsSiteListIdGet($site_list_id)

Site List

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


$apiInstance = new OpenAPI\Client\Api\SiteListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_list_id = 3.4; // float | The numerical ID of Site List

try {
    $result = $apiInstance->siteListsSiteListIdGet($site_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteListsApi->siteListsSiteListIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_list_id** | **float**| The numerical ID of Site List |

### Return type

[**\OpenAPI\Client\Model\SiteList**](../Model/SiteList.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## siteListsSiteListIdPut

> siteListsSiteListIdPut($site_list_id, $name, $active, $relation_type, $file_name)

Update Site List

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


$apiInstance = new OpenAPI\Client\Api\SiteListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_list_id = 3.4; // float | The numerical ID of Site List
$name = 'name_example'; // string | Site List Name
$active = 3.4; // float | Site List status
$relation_type = 3.4; // float | Site List type
$file_name = "/path/to/file.txt"; // \SplFileObject | Site List to upload

try {
    $apiInstance->siteListsSiteListIdPut($site_list_id, $name, $active, $relation_type, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling SiteListsApi->siteListsSiteListIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_list_id** | **float**| The numerical ID of Site List |
 **name** | **string**| Site List Name | [optional]
 **active** | **float**| Site List status | [optional]
 **relation_type** | **float**| Site List type | [optional]
 **file_name** | **\SplFileObject****\SplFileObject**| Site List to upload | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## siteListsSiteListIdSitesDelete

> siteListsSiteListIdSitesDelete($site_list_id, $body)

Delete Site in Site List

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


$apiInstance = new OpenAPI\Client\Api\SiteListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_list_id = 3.4; // float | The numerical ID of Site List
$body = array('body_example'); // string[] | Delete Site in Site List

try {
    $apiInstance->siteListsSiteListIdSitesDelete($site_list_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SiteListsApi->siteListsSiteListIdSitesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_list_id** | **float**| The numerical ID of Site List |
 **body** | [**string[]**](../Model/string.md)| Delete Site in Site List |

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


## siteListsSiteListIdSitesGet

> string[] siteListsSiteListIdSitesGet($site_list_id, $limit, $offset)

Sites in Site List

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


$apiInstance = new OpenAPI\Client\Api\SiteListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_list_id = 3.4; // float | The numerical ID of Site List
$limit = 'limit_example'; // string | Limit
$offset = 'offset_example'; // string | Offset

try {
    $result = $apiInstance->siteListsSiteListIdSitesGet($site_list_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteListsApi->siteListsSiteListIdSitesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_list_id** | **float**| The numerical ID of Site List |
 **limit** | **string**| Limit |
 **offset** | **string**| Offset |

### Return type

**string[]**

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## siteListsSiteListIdSitesPost

> siteListsSiteListIdSitesPost($site_list_id, $body)

Add Sites to Site List

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


$apiInstance = new OpenAPI\Client\Api\SiteListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_list_id = 3.4; // float | The numerical ID of Site List
$body = array('body_example'); // string[] | Add Sites to Site List

try {
    $apiInstance->siteListsSiteListIdSitesPost($site_list_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SiteListsApi->siteListsSiteListIdSitesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_list_id** | **float**| The numerical ID of Site List |
 **body** | [**string[]**](../Model/string.md)| Add Sites to Site List |

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


## siteListsTopSitesGet

> \OpenAPI\Client\Model\InlineResponse2003[] siteListsTopSitesGet($like)

Top Site Lists

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


$apiInstance = new OpenAPI\Client\Api\SiteListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$like = 'like_example'; // string | Like

try {
    $result = $apiInstance->siteListsTopSitesGet($like);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteListsApi->siteListsTopSitesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **like** | **string**| Like | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2003[]**](../Model/InlineResponse2003.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

