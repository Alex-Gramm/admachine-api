# OpenAPI\Client\SettingsApi

All URIs are relative to *https://api.adx1.com/v1.0.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**settingsOrganizationIdAttachmentPost**](SettingsApi.md#settingsOrganizationIdAttachmentPost) | **POST** /settings/{organization_id}/attachment | Upload Settings Attachment
[**settingsOrganizationIdGet**](SettingsApi.md#settingsOrganizationIdGet) | **GET** /settings/{organization_id} | Get Settings
[**settingsOrganizationIdPut**](SettingsApi.md#settingsOrganizationIdPut) | **PUT** /settings/{organization_id} | Update Settings



## settingsOrganizationIdAttachmentPost

> \OpenAPI\Client\Model\SettingsAttachment settingsOrganizationIdAttachmentPost($organization_id, $type, $file)

Upload Settings Attachment

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


$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 56; // int | The numerical ID of Organization
$type = 'type_example'; // string | Attachment type (logo, favicon)
$file = "/path/to/file.txt"; // \SplFileObject | File to upload

try {
    $result = $apiInstance->settingsOrganizationIdAttachmentPost($organization_id, $type, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsOrganizationIdAttachmentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| The numerical ID of Organization |
 **type** | **string**| Attachment type (logo, favicon) | [optional]
 **file** | **\SplFileObject****\SplFileObject**| File to upload | [optional]

### Return type

[**\OpenAPI\Client\Model\SettingsAttachment**](../Model/SettingsAttachment.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## settingsOrganizationIdGet

> \OpenAPI\Client\Model\Settings settingsOrganizationIdGet($organization_id)

Get Settings

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


$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 56; // int | The numerical ID of Organization

try {
    $result = $apiInstance->settingsOrganizationIdGet($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsOrganizationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| The numerical ID of Organization |

### Return type

[**\OpenAPI\Client\Model\Settings**](../Model/Settings.md)

### Authorization

[api_key](../../README.md#api_key), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## settingsOrganizationIdPut

> settingsOrganizationIdPut($organization_id, $body)

Update Settings

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


$apiInstance = new OpenAPI\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 56; // int | The numerical ID of Organization
$body = new \OpenAPI\Client\Model\EditSettings(); // \OpenAPI\Client\Model\EditSettings | Updated Settings object

try {
    $apiInstance->settingsOrganizationIdPut($organization_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsOrganizationIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| The numerical ID of Organization |
 **body** | [**\OpenAPI\Client\Model\EditSettings**](../Model/EditSettings.md)| Updated Settings object |

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

