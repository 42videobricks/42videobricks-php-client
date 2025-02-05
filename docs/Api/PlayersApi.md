# Api42Vb\Client\PlayersApi

All URIs are relative to https://api-sbx.42videobricks.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**uploadLogoPlayer()**](PlayersApi.md#uploadLogoPlayer) | **POST** /players/{playerId}/upload | Upload a logo to the player theme |


## `uploadLogoPlayer()`

```php
uploadLogoPlayer($player_id, $file, $description)
```

Upload a logo to the player theme

Upload a logo to the player theme

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\PlayersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$player_id = {{playerId}}; // string | Id of the player
$file = '/path/to/file.txt'; // \SplFileObject
$description = 'description_example'; // string

try {
    $apiInstance->uploadLogoPlayer($player_id, $file, $description);
} catch (Exception $e) {
    echo 'Exception when calling PlayersApi->uploadLogoPlayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **player_id** | **string**| Id of the player | |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **description** | **string**|  | [optional] |

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
