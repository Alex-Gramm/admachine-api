# OpenAPI\Client\KeywordListsApi

All URIs are relative to *https://api.adx1.com/v1.0.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**keywordListsGet**](KeywordListsApi.md#keywordListsGet) | **GET** /keyword_lists | All Keyword Lists
[**keywordListsKeywordListIdDelete**](KeywordListsApi.md#keywordListsKeywordListIdDelete) | **DELETE** /keyword_lists/{keyword_list_id} | Delete Keyword List
[**keywordListsKeywordListIdGet**](KeywordListsApi.md#keywordListsKeywordListIdGet) | **GET** /keyword_lists/{keyword_list_id} | Keyword List
[**keywordListsKeywordListIdKeywordsDelete**](KeywordListsApi.md#keywordListsKeywordListIdKeywordsDelete) | **DELETE** /keyword_lists/{keyword_list_id}/keywords | Delete Keyword in Keyword List
[**keywordListsKeywordListIdKeywordsGet**](KeywordListsApi.md#keywordListsKeywordListIdKeywordsGet) | **GET** /keyword_lists/{keyword_list_id}/keywords | Keywords in Keyword List
[**keywordListsKeywordListIdKeywordsPost**](KeywordListsApi.md#keywordListsKeywordListIdKeywordsPost) | **POST** /keyword_lists/{keyword_list_id}/keywords | Add Keywords to Keyword List
[**keywordListsKeywordListIdPut**](KeywordListsApi.md#keywordListsKeywordListIdPut) | **PUT** /keyword_lists/{keyword_list_id} | Update Keyword List
[**keywordListsPost**](KeywordListsApi.md#keywordListsPost) | **POST** /keyword_lists | Create Keyword List
[**keywordListsTopKeywordsGet**](KeywordListsApi.md#keywordListsTopKeywordsGet) | **GET** /keyword_lists/top_keywords | Top Keyword Lists



## keywordListsGet

> \OpenAPI\Client\Model\KeywordLists keywordListsGet($limit, $offset)

All Keyword Lists

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


$apiInstance = new OpenAPI\Client\Api\KeywordListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 'limit_example'; // string | Limit
$offset = 'offset_example'; // string | Offset

try {
    $result = $apiInstance->keywordListsGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordListsApi->keywordListsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **string**| Limit |
 **offset** | **string**| Offset |

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


## keywordListsKeywordListIdDelete

> keywordListsKeywordListIdDelete($keyword_list_id)

Delete Keyword List

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


$apiInstance = new OpenAPI\Client\Api\KeywordListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keyword_list_id = 3.4; // float | The numerical ID of Keyword List

try {
    $apiInstance->keywordListsKeywordListIdDelete($keyword_list_id);
} catch (Exception $e) {
    echo 'Exception when calling KeywordListsApi->keywordListsKeywordListIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyword_list_id** | **float**| The numerical ID of Keyword List |

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


## keywordListsKeywordListIdGet

> \OpenAPI\Client\Model\KeywordList keywordListsKeywordListIdGet($keyword_list_id)

Keyword List

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


$apiInstance = new OpenAPI\Client\Api\KeywordListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keyword_list_id = 3.4; // float | The numerical ID of Keyword List

try {
    $result = $apiInstance->keywordListsKeywordListIdGet($keyword_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordListsApi->keywordListsKeywordListIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyword_list_id** | **float**| The numerical ID of Keyword List |

### Return type

[**\OpenAPI\Client\Model\KeywordList**](../Model/KeywordList.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## keywordListsKeywordListIdKeywordsDelete

> keywordListsKeywordListIdKeywordsDelete($keyword_list_id, $body)

Delete Keyword in Keyword List

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


$apiInstance = new OpenAPI\Client\Api\KeywordListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keyword_list_id = 3.4; // float | The numerical ID of Keyword List
$body = array('body_example'); // string[] | Delete Keyword in Keyword List

try {
    $apiInstance->keywordListsKeywordListIdKeywordsDelete($keyword_list_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling KeywordListsApi->keywordListsKeywordListIdKeywordsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyword_list_id** | **float**| The numerical ID of Keyword List |
 **body** | [**string[]**](../Model/string.md)| Delete Keyword in Keyword List |

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


## keywordListsKeywordListIdKeywordsGet

> string[] keywordListsKeywordListIdKeywordsGet($keyword_list_id, $limit, $offset)

Keywords in Keyword List

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


$apiInstance = new OpenAPI\Client\Api\KeywordListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keyword_list_id = 3.4; // float | The numerical ID of Keyword List
$limit = 'limit_example'; // string | Limit
$offset = 'offset_example'; // string | Offset

try {
    $result = $apiInstance->keywordListsKeywordListIdKeywordsGet($keyword_list_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordListsApi->keywordListsKeywordListIdKeywordsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyword_list_id** | **float**| The numerical ID of Keyword List |
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


## keywordListsKeywordListIdKeywordsPost

> keywordListsKeywordListIdKeywordsPost($keyword_list_id, $body)

Add Keywords to Keyword List

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


$apiInstance = new OpenAPI\Client\Api\KeywordListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keyword_list_id = 3.4; // float | The numerical ID of Keyword List
$body = array('body_example'); // string[] | Add Keywords to Keyword List

try {
    $apiInstance->keywordListsKeywordListIdKeywordsPost($keyword_list_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling KeywordListsApi->keywordListsKeywordListIdKeywordsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyword_list_id** | **float**| The numerical ID of Keyword List |
 **body** | [**string[]**](../Model/string.md)| Add Keywords to Keyword List |

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


## keywordListsKeywordListIdPut

> keywordListsKeywordListIdPut($keyword_list_id, $name, $active, $relation_type, $file_name)

Update Keyword List

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


$apiInstance = new OpenAPI\Client\Api\KeywordListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keyword_list_id = 3.4; // float | The numerical ID of Keyword List
$name = 'name_example'; // string | Keyword List Name
$active = 3.4; // float | Keyword List status
$relation_type = 3.4; // float | Keyword List type
$file_name = "/path/to/file.txt"; // \SplFileObject | Keyword List to upload

try {
    $apiInstance->keywordListsKeywordListIdPut($keyword_list_id, $name, $active, $relation_type, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling KeywordListsApi->keywordListsKeywordListIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyword_list_id** | **float**| The numerical ID of Keyword List |
 **name** | **string**| Keyword List Name | [optional]
 **active** | **float**| Keyword List status | [optional]
 **relation_type** | **float**| Keyword List type | [optional]
 **file_name** | **\SplFileObject****\SplFileObject**| Keyword List to upload | [optional]

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


## keywordListsPost

> keywordListsPost($name, $user_id, $active, $relation_type, $file_name)

Create Keyword List

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


$apiInstance = new OpenAPI\Client\Api\KeywordListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Keyword List Name
$user_id = 3.4; // float | User ID
$active = 3.4; // float | Keyword List status
$relation_type = 3.4; // float | Keyword List type
$file_name = "/path/to/file.txt"; // \SplFileObject | Keyword List to upload

try {
    $apiInstance->keywordListsPost($name, $user_id, $active, $relation_type, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling KeywordListsApi->keywordListsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Keyword List Name |
 **user_id** | **float**| User ID |
 **active** | **float**| Keyword List status |
 **relation_type** | **float**| Keyword List type |
 **file_name** | **\SplFileObject****\SplFileObject**| Keyword List to upload |

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


## keywordListsTopKeywordsGet

> \OpenAPI\Client\Model\InlineResponse2004[] keywordListsTopKeywordsGet($like)

Top Keyword Lists

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


$apiInstance = new OpenAPI\Client\Api\KeywordListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$like = 'like_example'; // string | Like

try {
    $result = $apiInstance->keywordListsTopKeywordsGet($like);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordListsApi->keywordListsTopKeywordsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **like** | **string**| Like | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2004[]**](../Model/InlineResponse2004.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

