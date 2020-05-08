# OpenAPI\Client\UrlListsApi

All URIs are relative to *https://api.adx1.com/v1.0.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**urlListsGet**](UrlListsApi.md#urlListsGet) | **GET** /url_lists | All Url Lists
[**urlListsPost**](UrlListsApi.md#urlListsPost) | **POST** /url_lists | Create Url List
[**urlListsUrlListIdDelete**](UrlListsApi.md#urlListsUrlListIdDelete) | **DELETE** /url_lists/{url_list_id} | Delete Url List
[**urlListsUrlListIdGet**](UrlListsApi.md#urlListsUrlListIdGet) | **GET** /url_lists/{url_list_id} | Url List
[**urlListsUrlListIdItemsDelete**](UrlListsApi.md#urlListsUrlListIdItemsDelete) | **DELETE** /url_lists/{url_list_id}/items | Delete Url in Url List
[**urlListsUrlListIdItemsGet**](UrlListsApi.md#urlListsUrlListIdItemsGet) | **GET** /url_lists/{url_list_id}/items | Urls in Url List
[**urlListsUrlListIdItemsPost**](UrlListsApi.md#urlListsUrlListIdItemsPost) | **POST** /url_lists/{url_list_id}/items | Add Urls to Url List
[**urlListsUrlListIdPut**](UrlListsApi.md#urlListsUrlListIdPut) | **PUT** /url_lists/{url_list_id} | Update Url List



## urlListsGet

> \OpenAPI\Client\Model\GeneralLists urlListsGet($limit, $offset)

All Url Lists

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


$apiInstance = new OpenAPI\Client\Api\UrlListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 'limit_example'; // string | Limit
$offset = 'offset_example'; // string | Offset

try {
    $result = $apiInstance->urlListsGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UrlListsApi->urlListsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **string**| Limit |
 **offset** | **string**| Offset |

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


## urlListsPost

> urlListsPost($name, $user_id, $active, $relation_type, $file_name)

Create Url List

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


$apiInstance = new OpenAPI\Client\Api\UrlListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Url List Name
$user_id = 3.4; // float | User ID
$active = 3.4; // float | Url List status
$relation_type = 3.4; // float | Url List type
$file_name = "/path/to/file.txt"; // \SplFileObject | Url List to upload

try {
    $apiInstance->urlListsPost($name, $user_id, $active, $relation_type, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling UrlListsApi->urlListsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Url List Name |
 **user_id** | **float**| User ID |
 **active** | **float**| Url List status |
 **relation_type** | **float**| Url List type |
 **file_name** | **\SplFileObject****\SplFileObject**| Url List to upload |

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


## urlListsUrlListIdDelete

> urlListsUrlListIdDelete($url_list_id)

Delete Url List

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


$apiInstance = new OpenAPI\Client\Api\UrlListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url_list_id = 3.4; // float | The numerical ID of Url List

try {
    $apiInstance->urlListsUrlListIdDelete($url_list_id);
} catch (Exception $e) {
    echo 'Exception when calling UrlListsApi->urlListsUrlListIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url_list_id** | **float**| The numerical ID of Url List |

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


## urlListsUrlListIdGet

> \OpenAPI\Client\Model\GeneralList urlListsUrlListIdGet($url_list_id)

Url List

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


$apiInstance = new OpenAPI\Client\Api\UrlListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url_list_id = 3.4; // float | The numerical ID of Url List

try {
    $result = $apiInstance->urlListsUrlListIdGet($url_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UrlListsApi->urlListsUrlListIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url_list_id** | **float**| The numerical ID of Url List |

### Return type

[**\OpenAPI\Client\Model\GeneralList**](../Model/GeneralList.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## urlListsUrlListIdItemsDelete

> urlListsUrlListIdItemsDelete($url_list_id, $body)

Delete Url in Url List

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


$apiInstance = new OpenAPI\Client\Api\UrlListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url_list_id = 3.4; // float | The numerical ID of Url List
$body = array('body_example'); // string[] | Delete Url in Url List

try {
    $apiInstance->urlListsUrlListIdItemsDelete($url_list_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling UrlListsApi->urlListsUrlListIdItemsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url_list_id** | **float**| The numerical ID of Url List |
 **body** | [**string[]**](../Model/string.md)| Delete Url in Url List |

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


## urlListsUrlListIdItemsGet

> string[] urlListsUrlListIdItemsGet($url_list_id, $limit, $offset)

Urls in Url List

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


$apiInstance = new OpenAPI\Client\Api\UrlListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url_list_id = 3.4; // float | The numerical ID of Url List
$limit = 'limit_example'; // string | Limit
$offset = 'offset_example'; // string | Offset

try {
    $result = $apiInstance->urlListsUrlListIdItemsGet($url_list_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UrlListsApi->urlListsUrlListIdItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url_list_id** | **float**| The numerical ID of Url List |
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


## urlListsUrlListIdItemsPost

> urlListsUrlListIdItemsPost($url_list_id, $body)

Add Urls to Url List

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


$apiInstance = new OpenAPI\Client\Api\UrlListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url_list_id = 3.4; // float | The numerical ID of Url List
$body = array('body_example'); // string[] | Add Urls to Url List

try {
    $apiInstance->urlListsUrlListIdItemsPost($url_list_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling UrlListsApi->urlListsUrlListIdItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url_list_id** | **float**| The numerical ID of Url List |
 **body** | [**string[]**](../Model/string.md)| Add Urls to Url List |

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


## urlListsUrlListIdPut

> urlListsUrlListIdPut($url_list_id, $name, $active, $relation_type, $file_name)

Update Url List

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


$apiInstance = new OpenAPI\Client\Api\UrlListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url_list_id = 3.4; // float | The numerical ID of Url List
$name = 'name_example'; // string | Url List Name
$active = 3.4; // float | Url List status
$relation_type = 3.4; // float | Url List type
$file_name = "/path/to/file.txt"; // \SplFileObject | Url List to upload

try {
    $apiInstance->urlListsUrlListIdPut($url_list_id, $name, $active, $relation_type, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling UrlListsApi->urlListsUrlListIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url_list_id** | **float**| The numerical ID of Url List |
 **name** | **string**| Url List Name | [optional]
 **active** | **float**| Url List status | [optional]
 **relation_type** | **float**| Url List type | [optional]
 **file_name** | **\SplFileObject****\SplFileObject**| Url List to upload | [optional]

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

