# Api42Vb\Client\DataApi

All URIs are relative to https://api-sbx.42videobricks.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDataVideoAnalytics()**](DataApi.md#getDataVideoAnalytics) | **GET** /data/videos/analytics | List Video Analytics KPIs |
| [**getDataVideoUsage()**](DataApi.md#getDataVideoUsage) | **GET** /data/videos/usage | List Video Usage KPIs |


## `getDataVideoAnalytics()`

```php
getDataVideoAnalytics($limit, $offset, $start_date, $end_date): \Api42Vb\Client\Model\DataVideoAnalyticList
```

List Video Analytics KPIs

Retrieve key performance indicators (KPIs) for video analytics.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Number of elements to return (default=10)
$offset = 56; // int | offset for pagination
$start_date = {{starDate}}; // string | Start date for the period
$end_date = {{endDate}}; // string | End date for the period

try {
    $result = $apiInstance->getDataVideoAnalytics($limit, $offset, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDataVideoAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of elements to return (default&#x3D;10) | [optional] |
| **offset** | **int**| offset for pagination | [optional] |
| **start_date** | **string**| Start date for the period | [optional] |
| **end_date** | **string**| End date for the period | [optional] |

### Return type

[**\Api42Vb\Client\Model\DataVideoAnalyticList**](../Model/DataVideoAnalyticList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDataVideoUsage()`

```php
getDataVideoUsage($limit, $offset, $interval, $start_date, $end_date): \Api42Vb\Client\Model\DataVideoUsageList
```

List Video Usage KPIs

Retrieve platform resource usage statistics.  By default, returns monthly usage. The unit (daily, weekly, or monthly) can be specified. For the current period, usage is calculated up to the present moment. Optional filters include start and end dates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Number of elements to return (default=10)
$offset = 56; // int | offset for pagination
$interval = {{interval}}; // string | Period unit (day|week|month)
$start_date = {{starDate}}; // string | Start date for the period
$end_date = {{endDate}}; // string | End date for the period

try {
    $result = $apiInstance->getDataVideoUsage($limit, $offset, $interval, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDataVideoUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of elements to return (default&#x3D;10) | [optional] |
| **offset** | **int**| offset for pagination | [optional] |
| **interval** | **string**| Period unit (day|week|month) | [optional] |
| **start_date** | **string**| Start date for the period | [optional] |
| **end_date** | **string**| End date for the period | [optional] |

### Return type

[**\Api42Vb\Client\Model\DataVideoUsageList**](../Model/DataVideoUsageList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
