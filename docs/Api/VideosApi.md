# Api42Vb\Client\VideosApi

All URIs are relative to https://api-sbx.42videobricks.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAttachmentByVideoId()**](VideosApi.md#addAttachmentByVideoId) | **POST** /videos/{videoId}/attachments/{attachmentType}/{locale} | Upload an attachement |
| [**addThumbnailByVideoId()**](VideosApi.md#addThumbnailByVideoId) | **POST** /videos/{videoId}/thumbnail | Upload a thumbnail |
| [**addVideo()**](VideosApi.md#addVideo) | **POST** /videos | Add a new video |
| [**deleteAttachmentByVideoId()**](VideosApi.md#deleteAttachmentByVideoId) | **DELETE** /videos/{videoId}/attachments/{attachmentType}/{locale} | Delete an attachment |
| [**deleteExportToVideo()**](VideosApi.md#deleteExportToVideo) | **DELETE** /videos/{videoId}/exports/{format} | Delete an export of the video |
| [**deleteLinkToVideo()**](VideosApi.md#deleteLinkToVideo) | **DELETE** /videos/{videoId}/links/{linkType} | Delete a link |
| [**deleteThumbnailByVideoId()**](VideosApi.md#deleteThumbnailByVideoId) | **DELETE** /videos/{videoId}/thumbnail | Delete a thumbnail |
| [**deleteVideoById()**](VideosApi.md#deleteVideoById) | **DELETE** /videos/{videoId} | Delete a video |
| [**finalizeMultipartUploadVideoById()**](VideosApi.md#finalizeMultipartUploadVideoById) | **POST** /videos/{videoId}/multipart-upload/finalize | Multipart upload finalization |
| [**finalizeUploadVideoById()**](VideosApi.md#finalizeUploadVideoById) | **PUT** /videos/{videoId}/upload/finalize | Single file upload finalization |
| [**getAttachmentByVideoId()**](VideosApi.md#getAttachmentByVideoId) | **GET** /videos/{videoId}/attachments/{attachmentType}/{locale} | Get the attachment |
| [**getAttachmentFileByVideoId()**](VideosApi.md#getAttachmentFileByVideoId) | **GET** /videos/{videoId}/attachments/{attachmentType}/{locale}/file | Get attachement file |
| [**getAttachmentsByVideoId()**](VideosApi.md#getAttachmentsByVideoId) | **GET** /videos/{videoId}/attachments | List of attachments |
| [**getDetailToVideoById()**](VideosApi.md#getDetailToVideoById) | **GET** /videos/{videoId}/detail | Get the detail of metadatas |
| [**getExportToVideoById()**](VideosApi.md#getExportToVideoById) | **GET** /videos/{videoId}/exports | Get the list exports of the video |
| [**getExportUrlToVideoById()**](VideosApi.md#getExportUrlToVideoById) | **GET** /videos/{videoId}/exports/{format} | Get an url of the export of the video |
| [**getVideoById()**](VideosApi.md#getVideoById) | **GET** /videos/{videoId} | Retun a single video |
| [**getVideoStatusById()**](VideosApi.md#getVideoStatusById) | **GET** /videos/{videoId}/status | Retun the detailed status of the video |
| [**getVideos()**](VideosApi.md#getVideos) | **GET** /videos | List videos |
| [**initMultipartUploadVideoById()**](VideosApi.md#initMultipartUploadVideoById) | **POST** /videos/{videoId}/multipart-upload/init | Multipart upload intialization |
| [**initUploadVideoById()**](VideosApi.md#initUploadVideoById) | **GET** /videos/{videoId}/upload/init | Single file upload intialization |
| [**moveEnvironmentVideoById()**](VideosApi.md#moveEnvironmentVideoById) | **PUT** /videos/{videoId}/moveTo/{environment} | Update environment of video |
| [**postExportToVideo()**](VideosApi.md#postExportToVideo) | **POST** /videos/{videoId}/exports/{format} | Add export to the video |
| [**postLinkToVideo()**](VideosApi.md#postLinkToVideo) | **POST** /videos/{videoId}/links | Add link to the video |
| [**putLinkToVideo()**](VideosApi.md#putLinkToVideo) | **PUT** /videos/{videoId}/links/{linkType} | Update link to the video |
| [**updateVideoById()**](VideosApi.md#updateVideoById) | **PUT** /videos/{videoId} | Update an existing video |


## `addAttachmentByVideoId()`

```php
addAttachmentByVideoId($video_id, $attachment_type, $locale, $file)
```

Upload an attachement

Upload an attachment file and associate it with the video. - Supported attachment types: \"subtitle\" and \"caption\" (closed captions). - Supported file formats: SRT (text/plain), VTT (text/vtt).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video
$attachment_type = {{attachmentType}}; // string | Type of attachment
$locale = {{locale}}; // string | Le locale value of the attachment
$file = '/path/to/file.txt'; // \SplFileObject | The file to upload

try {
    $apiInstance->addAttachmentByVideoId($video_id, $attachment_type, $locale, $file);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->addAttachmentByVideoId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |
| **attachment_type** | **string**| Type of attachment | |
| **locale** | **string**| Le locale value of the attachment | |
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

## `addThumbnailByVideoId()`

```php
addThumbnailByVideoId($video_id, $file)
```

Upload a thumbnail

Upload an image and set it as the video’s thumbnail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video
$file = '/path/to/file.txt'; // \SplFileObject | The file to upload

try {
    $apiInstance->addThumbnailByVideoId($video_id, $file);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->addThumbnailByVideoId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |
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

## `addVideo()`

```php
addVideo($video_properties): \Api42Vb\Client\Model\Video
```

Add a new video

Create a new video object.  Once created, you can upload a video file to this object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_properties = new \Api42Vb\Client\Model\VideoProperties(); // \Api42Vb\Client\Model\VideoProperties

try {
    $result = $apiInstance->addVideo($video_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->addVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_properties** | [**\Api42Vb\Client\Model\VideoProperties**](../Model/VideoProperties.md)|  | |

### Return type

[**\Api42Vb\Client\Model\Video**](../Model/Video.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAttachmentByVideoId()`

```php
deleteAttachmentByVideoId($video_id, $attachment_type, $locale)
```

Delete an attachment

Remove an attachment and its associated file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video
$attachment_type = {{attachmentType}}; // string | Type of attachment
$locale = {{locale}}; // string | Le locale value of the attachment

try {
    $apiInstance->deleteAttachmentByVideoId($video_id, $attachment_type, $locale);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->deleteAttachmentByVideoId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |
| **attachment_type** | **string**| Type of attachment | |
| **locale** | **string**| Le locale value of the attachment | |

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

## `deleteExportToVideo()`

```php
deleteExportToVideo($video_id, $format, $export_id)
```

Delete an export of the video

Delete a video export by format or export ID. If no export ID is provided, the deletion follows the LIFO (Last In, First Out) pattern.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video
$format = GIF; // string | The format to export - GIF : animated image file - BACKGROUND : a light format video
$export_id = 56; // int | exportId

try {
    $apiInstance->deleteExportToVideo($video_id, $format, $export_id);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->deleteExportToVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |
| **format** | **string**| The format to export - GIF : animated image file - BACKGROUND : a light format video | |
| **export_id** | **int**| exportId | [optional] |

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

## `deleteLinkToVideo()`

```php
deleteLinkToVideo($video_id, $link_type)
```

Delete a link

Remove a link from the video.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video
$link_type = {{linkType}}; // string | Type of attachment

try {
    $apiInstance->deleteLinkToVideo($video_id, $link_type);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->deleteLinkToVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |
| **link_type** | **string**| Type of attachment | [default to &#39;ads&#39;] |

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

## `deleteThumbnailByVideoId()`

```php
deleteThumbnailByVideoId($video_id)
```

Delete a thumbnail

Remove the thumbnail from the video.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video

try {
    $apiInstance->deleteThumbnailByVideoId($video_id);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->deleteThumbnailByVideoId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |

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

## `deleteVideoById()`

```php
deleteVideoById($video_id)
```

Delete a video

Delete a specific video.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video

try {
    $apiInstance->deleteVideoById($video_id);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->deleteVideoById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |

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

## `finalizeMultipartUploadVideoById()`

```php
finalizeMultipartUploadVideoById($video_id, $video_multipart_upload_finalize)
```

Multipart upload finalization

Finalize the multipart upload and request file transcoding.  Uploading a new file replaces the existing one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video
$video_multipart_upload_finalize = new \Api42Vb\Client\Model\VideoMultipartUploadFinalize(); // \Api42Vb\Client\Model\VideoMultipartUploadFinalize

try {
    $apiInstance->finalizeMultipartUploadVideoById($video_id, $video_multipart_upload_finalize);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->finalizeMultipartUploadVideoById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |
| **video_multipart_upload_finalize** | [**\Api42Vb\Client\Model\VideoMultipartUploadFinalize**](../Model/VideoMultipartUploadFinalize.md)|  | [optional] |

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

## `finalizeUploadVideoById()`

```php
finalizeUploadVideoById($video_id)
```

Single file upload finalization

Finalize the upload by triggering the transcoding process. Applies to the last signed URL provided.  Uploading a new file replaces the existing one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video

try {
    $apiInstance->finalizeUploadVideoById($video_id);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->finalizeUploadVideoById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |

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

## `getAttachmentByVideoId()`

```php
getAttachmentByVideoId($video_id, $attachment_type, $locale)
```

Get the attachment

Retrieve a specific attachment object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video
$attachment_type = {{attachmentType}}; // string | Type of attachment
$locale = {{locale}}; // string | Le locale value of the attachment

try {
    $apiInstance->getAttachmentByVideoId($video_id, $attachment_type, $locale);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getAttachmentByVideoId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |
| **attachment_type** | **string**| Type of attachment | |
| **locale** | **string**| Le locale value of the attachment | |

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

## `getAttachmentFileByVideoId()`

```php
getAttachmentFileByVideoId($video_id, $attachment_type, $locale)
```

Get attachement file

Retrieve the attachment file. - Only text/plain files are supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video
$attachment_type = {{attachmentType}}; // string | Type of attachment
$locale = {{locale}}; // string | Le locale value of the attachment

try {
    $apiInstance->getAttachmentFileByVideoId($video_id, $attachment_type, $locale);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getAttachmentFileByVideoId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |
| **attachment_type** | **string**| Type of attachment | |
| **locale** | **string**| Le locale value of the attachment | |

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

## `getAttachmentsByVideoId()`

```php
getAttachmentsByVideoId($video_id, $attachment_type, $locale, $limit, $offset): \Api42Vb\Client\Model\VideoAttachmentList
```

List of attachments

Retrieve a list of all attachments related to a video.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video
$attachment_type = 'attachment_type_example'; // string | The type of attachments
$locale = 'locale_example'; // string | The locale
$limit = 56; // int | Number of elements to return (default=10)
$offset = 56; // int | offset for pagination

try {
    $result = $apiInstance->getAttachmentsByVideoId($video_id, $attachment_type, $locale, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getAttachmentsByVideoId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |
| **attachment_type** | **string**| The type of attachments | [optional] |
| **locale** | **string**| The locale | [optional] |
| **limit** | **int**| Number of elements to return (default&#x3D;10) | [optional] |
| **offset** | **int**| offset for pagination | [optional] |

### Return type

[**\Api42Vb\Client\Model\VideoAttachmentList**](../Model/VideoAttachmentList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDetailToVideoById()`

```php
getDetailToVideoById($video_id): \Api42Vb\Client\Model\VideoDetail
```

Get the detail of metadatas

Get the detail of metadatas

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video

try {
    $result = $apiInstance->getDetailToVideoById($video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getDetailToVideoById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |

### Return type

[**\Api42Vb\Client\Model\VideoDetail**](../Model/VideoDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExportToVideoById()`

```php
getExportToVideoById($video_id, $format, $limit, $offset): \Api42Vb\Client\Model\ExportList
```

Get the list exports of the video

Retrieve a list of exports associated with the video.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video
$format = {{format}}; // string | format
$limit = 56; // int | Number of elements to return (default=10)
$offset = 56; // int | offset for pagination

try {
    $result = $apiInstance->getExportToVideoById($video_id, $format, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getExportToVideoById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |
| **format** | **string**| format | [optional] |
| **limit** | **int**| Number of elements to return (default&#x3D;10) | [optional] |
| **offset** | **int**| offset for pagination | [optional] |

### Return type

[**\Api42Vb\Client\Model\ExportList**](../Model/ExportList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExportUrlToVideoById()`

```php
getExportUrlToVideoById($video_id, $format, $export_id)
```

Get an url of the export of the video

Retrieve the URL of a video export by format or export ID. If no export ID is provided, the URL retrieval follows the LIFO pattern.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video
$format = GIF; // string | The format to export - GIF : animated image file - BACKGROUND : a light format video
$export_id = 56; // int | exportId

try {
    $apiInstance->getExportUrlToVideoById($video_id, $format, $export_id);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getExportUrlToVideoById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |
| **format** | **string**| The format to export - GIF : animated image file - BACKGROUND : a light format video | |
| **export_id** | **int**| exportId | [optional] |

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

## `getVideoById()`

```php
getVideoById($video_id, $token): \Api42Vb\Client\Model\Video
```

Retun a single video

Retrieve details of a specific video by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video
$token = true; // bool | add a token to assets to alloaw access to private video

try {
    $result = $apiInstance->getVideoById($video_id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideoById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |
| **token** | **bool**| add a token to assets to alloaw access to private video | [optional] |

### Return type

[**\Api42Vb\Client\Model\Video**](../Model/Video.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVideoStatusById()`

```php
getVideoStatusById($video_id): \Api42Vb\Client\Model\VideoStatus
```

Retun the detailed status of the video

Retrieve detailed information about the video’s status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video

try {
    $result = $apiInstance->getVideoStatusById($video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideoStatusById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |

### Return type

[**\Api42Vb\Client\Model\VideoStatus**](../Model/VideoStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVideos()`

```php
getVideos($limit, $offset, $search, $sort, $tags): \Api42Vb\Client\Model\VideoList
```

List videos

Retrieve a list of all videos.  Returns an empty list if no videos are available.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Number of elements to return (default=10)
$offset = 56; // int | offset for pagination
$search = {{search}}; // string | Keywords search in all indexed fields
$sort = ctime:asc; // string | Sorting results
$tags = array('tags_example'); // string[] | Keywords search in all indexed fields

try {
    $result = $apiInstance->getVideos($limit, $offset, $search, $sort, $tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of elements to return (default&#x3D;10) | [optional] |
| **offset** | **int**| offset for pagination | [optional] |
| **search** | **string**| Keywords search in all indexed fields | [optional] |
| **sort** | **string**| Sorting results | [optional] |
| **tags** | [**string[]**](../Model/string.md)| Keywords search in all indexed fields | [optional] |

### Return type

[**\Api42Vb\Client\Model\VideoList**](../Model/VideoList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initMultipartUploadVideoById()`

```php
initMultipartUploadVideoById($video_id, $video_multipart_upload_init): \Api42Vb\Client\Model\VideoMultipartUploadInitResponse
```

Multipart upload intialization

Retrieve signed URLs for uploading a large video file in multiple parts. After uploading, you must finalize the multipart upload process.  Uploading a new file replaces the existing one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video
$video_multipart_upload_init = new \Api42Vb\Client\Model\VideoMultipartUploadInit(); // \Api42Vb\Client\Model\VideoMultipartUploadInit

try {
    $result = $apiInstance->initMultipartUploadVideoById($video_id, $video_multipart_upload_init);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->initMultipartUploadVideoById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |
| **video_multipart_upload_init** | [**\Api42Vb\Client\Model\VideoMultipartUploadInit**](../Model/VideoMultipartUploadInit.md)|  | [optional] |

### Return type

[**\Api42Vb\Client\Model\VideoMultipartUploadInitResponse**](../Model/VideoMultipartUploadInitResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initUploadVideoById()`

```php
initUploadVideoById($video_id): \Api42Vb\Client\Model\VideoUploadInitResponse
```

Single file upload intialization

Retrieve a signed URL for uploading a video file. After uploading, you must finalize the upload process.  Supported formats: avi, mov, mp4, mpeg, mpg, mxf, ts. Uploading a new file replaces the existing one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video

try {
    $result = $apiInstance->initUploadVideoById($video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->initUploadVideoById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |

### Return type

[**\Api42Vb\Client\Model\VideoUploadInitResponse**](../Model/VideoUploadInitResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveEnvironmentVideoById()`

```php
moveEnvironmentVideoById($video_id, $environment)
```

Update environment of video

Move a video to a different environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video
$environment = {{environment}}; // string | Name of environment

try {
    $apiInstance->moveEnvironmentVideoById($video_id, $environment);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->moveEnvironmentVideoById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |
| **environment** | **string**| Name of environment | |

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

## `postExportToVideo()`

```php
postExportToVideo($video_id, $format, $export_properties)
```

Add export to the video

Generate a new export of the video in a specific format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video
$format = GIF; // string | The format to export - GIF : animated image file - BACKGROUND : a light format video
$export_properties = new \Api42Vb\Client\Model\ExportProperties(); // \Api42Vb\Client\Model\ExportProperties

try {
    $apiInstance->postExportToVideo($video_id, $format, $export_properties);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->postExportToVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |
| **format** | **string**| The format to export - GIF : animated image file - BACKGROUND : a light format video | |
| **export_properties** | [**\Api42Vb\Client\Model\ExportProperties**](../Model/ExportProperties.md)|  | |

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

## `postLinkToVideo()`

```php
postLinkToVideo($video_id, $link)
```

Add link to the video

Add a new link to the video.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video
$link = new \Api42Vb\Client\Model\Link(); // \Api42Vb\Client\Model\Link

try {
    $apiInstance->postLinkToVideo($video_id, $link);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->postLinkToVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |
| **link** | [**\Api42Vb\Client\Model\Link**](../Model/Link.md)|  | |

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

## `putLinkToVideo()`

```php
putLinkToVideo($video_id, $link_type, $link)
```

Update link to the video

Update an existing link of the video.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video
$link_type = {{linkType}}; // string | Type of attachment
$link = new \Api42Vb\Client\Model\Link(); // \Api42Vb\Client\Model\Link

try {
    $apiInstance->putLinkToVideo($video_id, $link_type, $link);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->putLinkToVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |
| **link_type** | **string**| Type of attachment | [default to &#39;ads&#39;] |
| **link** | [**\Api42Vb\Client\Model\Link**](../Model/Link.md)|  | |

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

## `updateVideoById()`

```php
updateVideoById($video_id, $video_properties)
```

Update an existing video

Update the properties of a video.  Only the provided properties will be updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Api42Vb\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = {{videoId}}; // string | Id of the video
$video_properties = new \Api42Vb\Client\Model\VideoProperties(); // \Api42Vb\Client\Model\VideoProperties

try {
    $apiInstance->updateVideoById($video_id, $video_properties);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->updateVideoById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Id of the video | |
| **video_properties** | [**\Api42Vb\Client\Model\VideoProperties**](../Model/VideoProperties.md)|  | |

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
