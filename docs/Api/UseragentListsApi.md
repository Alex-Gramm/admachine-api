# OpenAPI\Client\UseragentListsApi

All URIs are relative to *https://api.adx1.com/v1.0.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**useragentListsGet**](UseragentListsApi.md#useragentListsGet) | **GET** /useragent_lists | All Useragent Lists
[**useragentListsPost**](UseragentListsApi.md#useragentListsPost) | **POST** /useragent_lists | Create Useragent List
[**useragentListsUseragentListIdDelete**](UseragentListsApi.md#useragentListsUseragentListIdDelete) | **DELETE** /useragent_lists/{useragent_list_id} | Delete Useragent List
[**useragentListsUseragentListIdGet**](UseragentListsApi.md#useragentListsUseragentListIdGet) | **GET** /useragent_lists/{useragent_list_id} | Useragent List
[**useragentListsUseragentListIdItemsDelete**](UseragentListsApi.md#useragentListsUseragentListIdItemsDelete) | **DELETE** /useragent_lists/{useragent_list_id}/items | Delete Useragent in Useragent List
[**useragentListsUseragentListIdItemsGet**](UseragentListsApi.md#useragentListsUseragentListIdItemsGet) | **GET** /useragent_lists/{useragent_list_id}/items | Useragents in Useragent List
[**useragentListsUseragentListIdItemsPost**](UseragentListsApi.md#useragentListsUseragentListIdItemsPost) | **POST** /useragent_lists/{useragent_list_id}/items | Add Useragents to Useragent List
[**useragentListsUseragentListIdPut**](UseragentListsApi.md#useragentListsUseragentListIdPut) | **PUT** /useragent_lists/{useragent_list_id} | Update Useragent List



## useragentListsGet

> \OpenAPI\Client\Model\UseragentLists useragentListsGet($limit, $offset)

All Useragent Lists

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


$apiInstance = new OpenAPI\Client\Api\UseragentListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 'limit_example'; // string | Limit
$offset = 'offset_example'; // string | Offset

try {
    $result = $apiInstance->useragentListsGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseragentListsApi->useragentListsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **string**| Limit |
 **offset** | **string**| Offset |

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


## useragentListsPost

> useragentListsPost($name, $user_id, $active, $relation_type, $file_name)

Create Useragent List

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


$apiInstance = new OpenAPI\Client\Api\UseragentListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Useragent List Name
$user_id = 3.4; // float | User ID
$active = 3.4; // float | Useragent List status
$relation_type = 3.4; // float | Useragent List type
$file_name = "/path/to/file.txt"; // \SplFileObject | Useragent List to upload

try {
    $apiInstance->useragentListsPost($name, $user_id, $active, $relation_type, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling UseragentListsApi->useragentListsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Useragent List Name |
 **user_id** | **float**| User ID |
 **active** | **float**| Useragent List status |
 **relation_type** | **float**| Useragent List type |
 **file_name** | **\SplFileObject****\SplFileObject**| Useragent List to upload | [optional]

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


## useragentListsUseragentListIdDelete

> useragentListsUseragentListIdDelete($useragent_list_id)

Delete Useragent List

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


$apiInstance = new OpenAPI\Client\Api\UseragentListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$useragent_list_id = 3.4; // float | The numerical ID of Useragent List

try {
    $apiInstance->useragentListsUseragentListIdDelete($useragent_list_id);
} catch (Exception $e) {
    echo 'Exception when calling UseragentListsApi->useragentListsUseragentListIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **useragent_list_id** | **float**| The numerical ID of Useragent List |

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


## useragentListsUseragentListIdGet

> \OpenAPI\Client\Model\UseragentList useragentListsUseragentListIdGet($useragent_list_id)

Useragent List

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


$apiInstance = new OpenAPI\Client\Api\UseragentListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$useragent_list_id = 3.4; // float | The numerical ID of Useragent List

try {
    $result = $apiInstance->useragentListsUseragentListIdGet($useragent_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseragentListsApi->useragentListsUseragentListIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **useragent_list_id** | **float**| The numerical ID of Useragent List |

### Return type

[**\OpenAPI\Client\Model\UseragentList**](../Model/UseragentList.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## useragentListsUseragentListIdItemsDelete

> useragentListsUseragentListIdItemsDelete($useragent_list_id, $body)

Delete Useragent in Useragent List

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


$apiInstance = new OpenAPI\Client\Api\UseragentListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$useragent_list_id = 3.4; // float | The numerical ID of Useragent List
$body = array('body_example'); // string[] | Delete Useragent in Useragent List

try {
    $apiInstance->useragentListsUseragentListIdItemsDelete($useragent_list_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling UseragentListsApi->useragentListsUseragentListIdItemsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **useragent_list_id** | **float**| The numerical ID of Useragent List |
 **body** | [**string[]**](../Model/string.md)| Delete Useragent in Useragent List |

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


## useragentListsUseragentListIdItemsGet

> string[] useragentListsUseragentListIdItemsGet($useragent_list_id, $limit, $offset)

Useragents in Useragent List

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


$apiInstance = new OpenAPI\Client\Api\UseragentListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$useragent_list_id = 3.4; // float | The numerical ID of Useragent List
$limit = 'limit_example'; // string | Limit
$offset = 'offset_example'; // string | Offset

try {
    $result = $apiInstance->useragentListsUseragentListIdItemsGet($useragent_list_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseragentListsApi->useragentListsUseragentListIdItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **useragent_list_id** | **float**| The numerical ID of Useragent List |
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


## useragentListsUseragentListIdItemsPost

> useragentListsUseragentListIdItemsPost($useragent_list_id, $body)

Add Useragents to Useragent List

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


$apiInstance = new OpenAPI\Client\Api\UseragentListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$useragent_list_id = 3.4; // float | The numerical ID of Useragent List
$body = array('body_example'); // string[] | Add Useragents to Useragent List

try {
    $apiInstance->useragentListsUseragentListIdItemsPost($useragent_list_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling UseragentListsApi->useragentListsUseragentListIdItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **useragent_list_id** | **float**| The numerical ID of Useragent List |
 **body** | [**string[]**](../Model/string.md)| Add Useragents to Useragent List |

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


## useragentListsUseragentListIdPut

> useragentListsUseragentListIdPut($useragent_list_id, $name, $active, $relation_type, $file_name)

Update Useragent List

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


$apiInstance = new OpenAPI\Client\Api\UseragentListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$useragent_list_id = 3.4; // float | The numerical ID of Useragent List
$name = 'name_example'; // string | Useragent List Name
$active = 3.4; // float | Useragent List status
$relation_type = 3.4; // float | Useragent List type
$file_name = "/path/to/file.txt"; // \SplFileObject | Useragent List to upload

try {
    $apiInstance->useragentListsUseragentListIdPut($useragent_list_id, $name, $active, $relation_type, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling UseragentListsApi->useragentListsUseragentListIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **useragent_list_id** | **float**| The numerical ID of Useragent List |
 **name** | **string**| Useragent List Name | [optional]
 **active** | **float**| Useragent List status | [optional]
 **relation_type** | **float**| Useragent List type | [optional]
 **file_name** | **\SplFileObject****\SplFileObject**| Useragent List to upload | [optional]

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

