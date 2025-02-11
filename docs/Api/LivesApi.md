# Api42Vb\Client\LivesApi

All URIs are relative to https://api-sbx.42videobricks.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addLive()**](LivesApi.md#addLive) | **POST** /lives | Create a live event |
| [**addSlateByLiveIdAndName()**](LivesApi.md#addSlateByLiveIdAndName) | **POST** /lives/{liveId}/slate/{slateName} | Upload an image file and set it as a slate for a live event |
| [**addThumbnailByLiveId()**](LivesApi.md#addThumbnailByLiveId) | **POST** /lives/{liveId}/thumbnail | Upload an image file and set it as the Thumbnail for a video |
| [**deleteLiveById()**](LivesApi.md#deleteLiveById) | **DELETE** /lives/{liveId} | Delete a live event |
| [**getLiveById()**](LivesApi.md#getLiveById) | **GET** /lives/{liveId} | Get details of a live event |
| [**getLives()**](LivesApi.md#getLives) | **GET** /lives | Retrieve a list of live events |
| [**getLivesCaptureSources()**](LivesApi.md#getLivesCaptureSources) | **GET** /lives/captureSources | Retrieve a list of capture sources |
| [**getScenesByLiveId()**](LivesApi.md#getScenesByLiveId) | **GET** /lives/{liveId}/scenes | List of the scenes in the live event |
| [**updateLiveById()**](LivesApi.md#updateLiveById) | **PUT** /lives/{liveId} | Update details of a live event |
| [**updateStateOfScene()**](LivesApi.md#updateStateOfScene) | **PUT** /lives/{liveId}/scenes/{sceneName}/{state} | Update the state of a scene based on its id |


## `addLive()`

```php
addLive($live_properties): \Api42Vb\Client\Model\Live
```

Create a live event

Create a new live event and return its details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\LivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_properties = new \Api42Vb\Client\Model\LiveProperties(); // \Api42Vb\Client\Model\LiveProperties

try {
    $result = $apiInstance->addLive($live_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivesApi->addLive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_properties** | [**\Api42Vb\Client\Model\LiveProperties**](../Model/LiveProperties.md)|  | |

### Return type

[**\Api42Vb\Client\Model\Live**](../Model/Live.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addSlateByLiveIdAndName()`

```php
addSlateByLiveIdAndName($live_id, $slate_name, $file)
```

Upload an image file and set it as a slate for a live event

Upload an image and set it as a slate for the live event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\LivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_id = {{liveId}}; // string | Id of the live
$slate_name = {{slateName}}; // string | The name of slate
$file = '/path/to/file.txt'; // \SplFileObject | The file to upload

try {
    $apiInstance->addSlateByLiveIdAndName($live_id, $slate_name, $file);
} catch (Exception $e) {
    echo 'Exception when calling LivesApi->addSlateByLiveIdAndName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_id** | **string**| Id of the live | |
| **slate_name** | **string**| The name of slate | |
| **file** | **\SplFileObject****\SplFileObject**| The file to upload | [optional] |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addThumbnailByLiveId()`

```php
addThumbnailByLiveId($live_id, $file)
```

Upload an image file and set it as the Thumbnail for a video

Upload an image file and set it as the live event’s thumbnail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\LivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_id = {{liveId}}; // string | Id of the live
$file = '/path/to/file.txt'; // \SplFileObject | The file to upload

try {
    $apiInstance->addThumbnailByLiveId($live_id, $file);
} catch (Exception $e) {
    echo 'Exception when calling LivesApi->addThumbnailByLiveId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_id** | **string**| Id of the live | |
| **file** | **\SplFileObject****\SplFileObject**| The file to upload | [optional] |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLiveById()`

```php
deleteLiveById($live_id)
```

Delete a live event

Delete a specific live event. Returns a 204 HTTP response on success.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\LivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_id = {{liveId}}; // string | Id of the live

try {
    $apiInstance->deleteLiveById($live_id);
} catch (Exception $e) {
    echo 'Exception when calling LivesApi->deleteLiveById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_id** | **string**| Id of the live | |

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

## `getLiveById()`

```php
getLiveById($live_id): \Api42Vb\Client\Model\Live
```

Get details of a live event

Retrieve detailed information about a specific live event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\LivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_id = {{liveId}}; // string | Id of the live

try {
    $result = $apiInstance->getLiveById($live_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivesApi->getLiveById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_id** | **string**| Id of the live | |

### Return type

[**\Api42Vb\Client\Model\Live**](../Model/Live.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLives()`

```php
getLives($limit, $offset): \Api42Vb\Client\Model\LiveList
```

Retrieve a list of live events

Retrieve a list of all available live events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\LivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Number of elements to return (default=10)
$offset = 56; // int | offset for pagination

try {
    $result = $apiInstance->getLives($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivesApi->getLives: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of elements to return (default&#x3D;10) | [optional] |
| **offset** | **int**| offset for pagination | [optional] |

### Return type

[**\Api42Vb\Client\Model\LiveList**](../Model/LiveList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLivesCaptureSources()`

```php
getLivesCaptureSources(): string[]
```

Retrieve a list of capture sources

Retrieve a list of all available capture sources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\LivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLivesCaptureSources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivesApi->getLivesCaptureSources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScenesByLiveId()`

```php
getScenesByLiveId($live_id): \Api42Vb\Client\Model\GetScenesByLiveId200Response
```

List of the scenes in the live event

Retrieve a list of scenes available for the live event: - FEED: The main stream and its state. - IN: The slate shown before the stream starts. - OUT: The slate displayed after the stream ends. - ERROR: The slate shown in case of a streaming error.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\LivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_id = {{liveId}}; // string | Id of the live

try {
    $result = $apiInstance->getScenesByLiveId($live_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivesApi->getScenesByLiveId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_id** | **string**| Id of the live | |

### Return type

[**\Api42Vb\Client\Model\GetScenesByLiveId200Response**](../Model/GetScenesByLiveId200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLiveById()`

```php
updateLiveById($live_id, $live_properties)
```

Update details of a live event

Update the details of a specific live event. Returns a 202 HTTP response on success.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\LivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_id = {{liveId}}; // string | Id of the live
$live_properties = new \Api42Vb\Client\Model\LiveProperties(); // \Api42Vb\Client\Model\LiveProperties

try {
    $apiInstance->updateLiveById($live_id, $live_properties);
} catch (Exception $e) {
    echo 'Exception when calling LivesApi->updateLiveById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_id** | **string**| Id of the live | |
| **live_properties** | [**\Api42Vb\Client\Model\LiveProperties**](../Model/LiveProperties.md)|  | |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStateOfScene()`

```php
updateStateOfScene($live_id, $scene_name, $state)
```

Update the state of a scene based on its id

Update the state of a scene.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\LivesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_id = {{liveId}}; // string | Id of the live
$scene_name = {{sceneName}}; // string | The name of scene
$state = {{state}}; // string | The state of a slate

try {
    $apiInstance->updateStateOfScene($live_id, $scene_name, $state);
} catch (Exception $e) {
    echo 'Exception when calling LivesApi->updateStateOfScene: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_id** | **string**| Id of the live | |
| **scene_name** | **string**| The name of scene | |
| **state** | **string**| The state of a slate | [default to &#39;ENABLE&#39;] |

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
