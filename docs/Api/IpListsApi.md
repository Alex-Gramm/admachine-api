# OpenAPI\Client\IpListsApi

All URIs are relative to *https://api.adx1.com/v1.0.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ipListsGet**](IpListsApi.md#ipListsGet) | **GET** /ip_lists | All Ip Lists
[**ipListsIpListIdDelete**](IpListsApi.md#ipListsIpListIdDelete) | **DELETE** /ip_lists/{ip_list_id} | Delete Ip List
[**ipListsIpListIdGet**](IpListsApi.md#ipListsIpListIdGet) | **GET** /ip_lists/{ip_list_id} | Ip List
[**ipListsIpListIdIpsDelete**](IpListsApi.md#ipListsIpListIdIpsDelete) | **DELETE** /ip_lists/{ip_list_id}/ips | Delete IP in Ip List
[**ipListsIpListIdIpsGet**](IpListsApi.md#ipListsIpListIdIpsGet) | **GET** /ip_lists/{ip_list_id}/ips | IPs in Ip List
[**ipListsIpListIdIpsPost**](IpListsApi.md#ipListsIpListIdIpsPost) | **POST** /ip_lists/{ip_list_id}/ips | Add IPs to Ip List
[**ipListsIpListIdPut**](IpListsApi.md#ipListsIpListIdPut) | **PUT** /ip_lists/{ip_list_id} | Update Ip List
[**ipListsPost**](IpListsApi.md#ipListsPost) | **POST** /ip_lists | Create Ip List



## ipListsGet

> \OpenAPI\Client\Model\IpLists ipListsGet($limit, $offset)

All Ip Lists

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


$apiInstance = new OpenAPI\Client\Api\IpListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 'limit_example'; // string | Limit
$offset = 'offset_example'; // string | Offset

try {
    $result = $apiInstance->ipListsGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpListsApi->ipListsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **string**| Limit |
 **offset** | **string**| Offset |

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


## ipListsIpListIdDelete

> ipListsIpListIdDelete($ip_list_id)

Delete Ip List

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


$apiInstance = new OpenAPI\Client\Api\IpListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ip_list_id = 3.4; // float | The numerical ID of Ip List

try {
    $apiInstance->ipListsIpListIdDelete($ip_list_id);
} catch (Exception $e) {
    echo 'Exception when calling IpListsApi->ipListsIpListIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ip_list_id** | **float**| The numerical ID of Ip List |

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


## ipListsIpListIdGet

> \OpenAPI\Client\Model\IpList ipListsIpListIdGet($ip_list_id)

Ip List

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


$apiInstance = new OpenAPI\Client\Api\IpListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ip_list_id = 3.4; // float | The numerical ID of Ip List

try {
    $result = $apiInstance->ipListsIpListIdGet($ip_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpListsApi->ipListsIpListIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ip_list_id** | **float**| The numerical ID of Ip List |

### Return type

[**\OpenAPI\Client\Model\IpList**](../Model/IpList.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## ipListsIpListIdIpsDelete

> ipListsIpListIdIpsDelete($ip_list_id, $body)

Delete IP in Ip List

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


$apiInstance = new OpenAPI\Client\Api\IpListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ip_list_id = 3.4; // float | The numerical ID of Ip List
$body = array('body_example'); // string[] | Delete IP in Ip List

try {
    $apiInstance->ipListsIpListIdIpsDelete($ip_list_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling IpListsApi->ipListsIpListIdIpsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ip_list_id** | **float**| The numerical ID of Ip List |
 **body** | [**string[]**](../Model/string.md)| Delete IP in Ip List |

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


## ipListsIpListIdIpsGet

> string[] ipListsIpListIdIpsGet($ip_list_id, $limit, $offset)

IPs in Ip List

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


$apiInstance = new OpenAPI\Client\Api\IpListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ip_list_id = 3.4; // float | The numerical ID of Ip List
$limit = 'limit_example'; // string | Limit
$offset = 'offset_example'; // string | Offset

try {
    $result = $apiInstance->ipListsIpListIdIpsGet($ip_list_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpListsApi->ipListsIpListIdIpsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ip_list_id** | **float**| The numerical ID of Ip List |
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


## ipListsIpListIdIpsPost

> ipListsIpListIdIpsPost($ip_list_id, $body)

Add IPs to Ip List

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


$apiInstance = new OpenAPI\Client\Api\IpListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ip_list_id = 3.4; // float | The numerical ID of Ip List
$body = array('body_example'); // string[] | Add IPs to Ip List

try {
    $apiInstance->ipListsIpListIdIpsPost($ip_list_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling IpListsApi->ipListsIpListIdIpsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ip_list_id** | **float**| The numerical ID of Ip List |
 **body** | [**string[]**](../Model/string.md)| Add IPs to Ip List |

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


## ipListsIpListIdPut

> ipListsIpListIdPut($ip_list_id, $name, $active, $relation_type, $file_name)

Update Ip List

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


$apiInstance = new OpenAPI\Client\Api\IpListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ip_list_id = 3.4; // float | The numerical ID of Ip List
$name = 'name_example'; // string | Ip List Name
$active = 3.4; // float | Ip List status
$relation_type = 3.4; // float | Ip List type
$file_name = "/path/to/file.txt"; // \SplFileObject | Ip List to upload

try {
    $apiInstance->ipListsIpListIdPut($ip_list_id, $name, $active, $relation_type, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling IpListsApi->ipListsIpListIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ip_list_id** | **float**| The numerical ID of Ip List |
 **name** | **string**| Ip List Name | [optional]
 **active** | **float**| Ip List status | [optional]
 **relation_type** | **float**| Ip List type | [optional]
 **file_name** | **\SplFileObject****\SplFileObject**| Ip List to upload | [optional]

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


## ipListsPost

> ipListsPost($name, $user_id, $active, $relation_type, $file_name)

Create Ip List

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


$apiInstance = new OpenAPI\Client\Api\IpListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Ip List Name
$user_id = 3.4; // float | User ID
$active = 3.4; // float | Ip List status
$relation_type = 3.4; // float | Ip List type
$file_name = "/path/to/file.txt"; // \SplFileObject | Ip List to upload

try {
    $apiInstance->ipListsPost($name, $user_id, $active, $relation_type, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling IpListsApi->ipListsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Ip List Name |
 **user_id** | **float**| User ID |
 **active** | **float**| Ip List status |
 **relation_type** | **float**| Ip List type |
 **file_name** | **\SplFileObject****\SplFileObject**| Ip List to upload | [optional]

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

