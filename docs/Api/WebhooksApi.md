# OpenAPI\Client\WebhooksApi

All URIs are relative to https://api-sbx.42videobricks.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteWebhookById()**](WebhooksApi.md#deleteWebhookById) | **DELETE** /webhooks/{webhookId} | Delete a webhook |
| [**getWebhookById()**](WebhooksApi.md#getWebhookById) | **GET** /webhooks/{webhookId} | Retun a single webhook |
| [**updateWebhookById()**](WebhooksApi.md#updateWebhookById) | **PUT** /webhooks/{webhookId} | Update an existing webhook |
| [**webhooksGet()**](WebhooksApi.md#webhooksGet) | **GET** /webhooks | List webhooks |
| [**webhooksPost()**](WebhooksApi.md#webhooksPost) | **POST** /webhooks | Add a new webhook |


## `deleteWebhookById()`

```php
deleteWebhookById($webhook_id)
```

Delete a webhook

Delete a webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = {{webhookId}}; // string | Id of the webhook

try {
    $apiInstance->deleteWebhookById($webhook_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhookById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**| Id of the webhook | |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhookById()`

```php
getWebhookById($webhook_id): \OpenAPI\Client\Model\Webhook
```

Retun a single webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = {{webhookId}}; // string | Id of the webhook

try {
    $result = $apiInstance->getWebhookById($webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhookById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**| Id of the webhook | |

### Return type

[**\OpenAPI\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhookById()`

```php
updateWebhookById($webhook_id, $webhook_properties): \OpenAPI\Client\Model\Webhook
```

Update an existing webhook

Update a existing webhooks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = {{webhookId}}; // string | Id of the webhook
$webhook_properties = new \OpenAPI\Client\Model\WebhookProperties(); // \OpenAPI\Client\Model\WebhookProperties

try {
    $result = $apiInstance->updateWebhookById($webhook_id, $webhook_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->updateWebhookById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**| Id of the webhook | |
| **webhook_properties** | [**\OpenAPI\Client\Model\WebhookProperties**](../Model/WebhookProperties.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksGet()`

```php
webhooksGet($limit, $offset): \OpenAPI\Client\Model\WebhookList
```

List webhooks

Return the list of webhooks.  Return an empty list it there are no webhook to return.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Number of elements to return (default=10)
$offset = 56; // int | offset for pagination

try {
    $result = $apiInstance->webhooksGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of elements to return (default&#x3D;10) | [optional] |
| **offset** | **int**| offset for pagination | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebhookList**](../Model/WebhookList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksPost()`

```php
webhooksPost($webhook_properties): \OpenAPI\Client\Model\Webhook
```

Add a new webhook

Create a new webhook to configure notification.  Only one hook per url

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_properties = new \OpenAPI\Client\Model\WebhookProperties(); // \OpenAPI\Client\Model\WebhookProperties

try {
    $result = $apiInstance->webhooksPost($webhook_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_properties** | [**\OpenAPI\Client\Model\WebhookProperties**](../Model/WebhookProperties.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
