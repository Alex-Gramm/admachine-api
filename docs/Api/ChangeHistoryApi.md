# OpenAPI\Client\ChangeHistoryApi

All URIs are relative to *https://api.adx1.com/v1.0.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeHistoryGet**](ChangeHistoryApi.md#changeHistoryGet) | **GET** /change_history | Get Change History
[**changeHistoryObjectsGet**](ChangeHistoryApi.md#changeHistoryObjectsGet) | **GET** /change_history/objects | Get Change History Objects List
[**changeHistoryParentsGet**](ChangeHistoryApi.md#changeHistoryParentsGet) | **GET** /change_history/parents | Get Change History Parents List



## changeHistoryGet

> \OpenAPI\Client\Model\Changes changeHistoryGet($limit, $offset, $user_id, $action, $object, $object_id, $parent, $parent_id, $browser, $os)

Get Change History

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


$apiInstance = new OpenAPI\Client\Api\ChangeHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 'limit_example'; // string | Limit
$offset = 'offset_example'; // string | Offset
$user_id = 3.4; // float | User ID
$action = 'action_example'; // string | Action: CREATE, SET, CHANGE, DELETE
$object = 'object_example'; // string | Object name
$object_id = 3.4; // float | Object ID
$parent = 'parent_example'; // string | Parent object name
$parent_id = 3.4; // float | Parent object ID
$browser = 'browser_example'; // string | Browser: Chrome, Firefox, IE, Opera, Safari, Unknown
$os = 3.4; // float | Operating system: Android, Linux, OS X, Windows, Windows Phone, iOS, Unknown

try {
    $result = $apiInstance->changeHistoryGet($limit, $offset, $user_id, $action, $object, $object_id, $parent, $parent_id, $browser, $os);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeHistoryApi->changeHistoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **string**| Limit |
 **offset** | **string**| Offset |
 **user_id** | **float**| User ID | [optional]
 **action** | **string**| Action: CREATE, SET, CHANGE, DELETE | [optional]
 **object** | **string**| Object name | [optional]
 **object_id** | **float**| Object ID | [optional]
 **parent** | **string**| Parent object name | [optional]
 **parent_id** | **float**| Parent object ID | [optional]
 **browser** | **string**| Browser: Chrome, Firefox, IE, Opera, Safari, Unknown | [optional]
 **os** | **float**| Operating system: Android, Linux, OS X, Windows, Windows Phone, iOS, Unknown | [optional]

### Return type

[**\OpenAPI\Client\Model\Changes**](../Model/Changes.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## changeHistoryObjectsGet

> \OpenAPI\Client\Model\HistoryObjects changeHistoryObjectsGet()

Get Change History Objects List

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


$apiInstance = new OpenAPI\Client\Api\ChangeHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->changeHistoryObjectsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeHistoryApi->changeHistoryObjectsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\HistoryObjects**](../Model/HistoryObjects.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## changeHistoryParentsGet

> \OpenAPI\Client\Model\HistoryObjects changeHistoryParentsGet()

Get Change History Parents List

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


$apiInstance = new OpenAPI\Client\Api\ChangeHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->changeHistoryParentsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeHistoryApi->changeHistoryParentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\HistoryObjects**](../Model/HistoryObjects.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

