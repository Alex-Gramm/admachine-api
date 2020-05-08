# OpenAPI\Client\ZipListsApi

All URIs are relative to *https://api.adx1.com/v1.0.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**zipListsGet**](ZipListsApi.md#zipListsGet) | **GET** /zip_lists | All Zip Lists
[**zipListsPost**](ZipListsApi.md#zipListsPost) | **POST** /zip_lists | Create Zip List
[**zipListsZipListIdDelete**](ZipListsApi.md#zipListsZipListIdDelete) | **DELETE** /zip_lists/{zip_list_id} | Delete Zip List
[**zipListsZipListIdGet**](ZipListsApi.md#zipListsZipListIdGet) | **GET** /zip_lists/{zip_list_id} | Zip List
[**zipListsZipListIdItemsDelete**](ZipListsApi.md#zipListsZipListIdItemsDelete) | **DELETE** /zip_lists/{zip_list_id}/items | Delete Zip in Zip List
[**zipListsZipListIdItemsGet**](ZipListsApi.md#zipListsZipListIdItemsGet) | **GET** /zip_lists/{zip_list_id}/items | Zips in Zip List
[**zipListsZipListIdItemsPost**](ZipListsApi.md#zipListsZipListIdItemsPost) | **POST** /zip_lists/{zip_list_id}/items | Add Zip codes to Zip List
[**zipListsZipListIdPut**](ZipListsApi.md#zipListsZipListIdPut) | **PUT** /zip_lists/{zip_list_id} | Update Zip List



## zipListsGet

> \OpenAPI\Client\Model\GeneralLists zipListsGet($limit, $offset)

All Zip Lists

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


$apiInstance = new OpenAPI\Client\Api\ZipListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 'limit_example'; // string | Limit
$offset = 'offset_example'; // string | Offset

try {
    $result = $apiInstance->zipListsGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZipListsApi->zipListsGet: ', $e->getMessage(), PHP_EOL;
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


## zipListsPost

> zipListsPost($name, $user_id, $active, $relation_type, $file_name)

Create Zip List

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


$apiInstance = new OpenAPI\Client\Api\ZipListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Zip List Name
$user_id = 3.4; // float | User ID
$active = 3.4; // float | Zip List status
$relation_type = 3.4; // float | Zip List type
$file_name = "/path/to/file.txt"; // \SplFileObject | Zip List to upload

try {
    $apiInstance->zipListsPost($name, $user_id, $active, $relation_type, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ZipListsApi->zipListsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Zip List Name |
 **user_id** | **float**| User ID |
 **active** | **float**| Zip List status |
 **relation_type** | **float**| Zip List type |
 **file_name** | **\SplFileObject****\SplFileObject**| Zip List to upload |

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


## zipListsZipListIdDelete

> zipListsZipListIdDelete($zip_list_id)

Delete Zip List

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


$apiInstance = new OpenAPI\Client\Api\ZipListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zip_list_id = 3.4; // float | The numerical ID of Zip List

try {
    $apiInstance->zipListsZipListIdDelete($zip_list_id);
} catch (Exception $e) {
    echo 'Exception when calling ZipListsApi->zipListsZipListIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zip_list_id** | **float**| The numerical ID of Zip List |

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


## zipListsZipListIdGet

> \OpenAPI\Client\Model\GeneralList zipListsZipListIdGet($zip_list_id)

Zip List

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


$apiInstance = new OpenAPI\Client\Api\ZipListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zip_list_id = 3.4; // float | The numerical ID of Zip List

try {
    $result = $apiInstance->zipListsZipListIdGet($zip_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZipListsApi->zipListsZipListIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zip_list_id** | **float**| The numerical ID of Zip List |

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


## zipListsZipListIdItemsDelete

> zipListsZipListIdItemsDelete($zip_list_id, $body)

Delete Zip in Zip List

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


$apiInstance = new OpenAPI\Client\Api\ZipListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zip_list_id = 3.4; // float | The numerical ID of Zip List
$body = array('body_example'); // string[] | Delete Zip in Zip List

try {
    $apiInstance->zipListsZipListIdItemsDelete($zip_list_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ZipListsApi->zipListsZipListIdItemsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zip_list_id** | **float**| The numerical ID of Zip List |
 **body** | [**string[]**](../Model/string.md)| Delete Zip in Zip List |

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


## zipListsZipListIdItemsGet

> string[] zipListsZipListIdItemsGet($zip_list_id, $limit, $offset)

Zips in Zip List

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


$apiInstance = new OpenAPI\Client\Api\ZipListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zip_list_id = 3.4; // float | The numerical ID of Zip List
$limit = 'limit_example'; // string | Limit
$offset = 'offset_example'; // string | Offset

try {
    $result = $apiInstance->zipListsZipListIdItemsGet($zip_list_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZipListsApi->zipListsZipListIdItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zip_list_id** | **float**| The numerical ID of Zip List |
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


## zipListsZipListIdItemsPost

> zipListsZipListIdItemsPost($zip_list_id, $body)

Add Zip codes to Zip List

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


$apiInstance = new OpenAPI\Client\Api\ZipListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zip_list_id = 3.4; // float | The numerical ID of Zip List
$body = array('body_example'); // string[] | Add Zip codes to Zip List

try {
    $apiInstance->zipListsZipListIdItemsPost($zip_list_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ZipListsApi->zipListsZipListIdItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zip_list_id** | **float**| The numerical ID of Zip List |
 **body** | [**string[]**](../Model/string.md)| Add Zip codes to Zip List |

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


## zipListsZipListIdPut

> zipListsZipListIdPut($zip_list_id, $name, $active, $relation_type, $file_name)

Update Zip List

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


$apiInstance = new OpenAPI\Client\Api\ZipListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zip_list_id = 3.4; // float | The numerical ID of Zip List
$name = 'name_example'; // string | Zip List Name
$active = 3.4; // float | Zip List status
$relation_type = 3.4; // float | Zip List type
$file_name = "/path/to/file.txt"; // \SplFileObject | Zip List to upload

try {
    $apiInstance->zipListsZipListIdPut($zip_list_id, $name, $active, $relation_type, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ZipListsApi->zipListsZipListIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zip_list_id** | **float**| The numerical ID of Zip List |
 **name** | **string**| Zip List Name | [optional]
 **active** | **float**| Zip List status | [optional]
 **relation_type** | **float**| Zip List type | [optional]
 **file_name** | **\SplFileObject****\SplFileObject**| Zip List to upload | [optional]

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

