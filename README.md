# Package\Subpackage

42videobricks is a Video Platform As A Service (VPaaS)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Package\Subpackage/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api-sbx.42videobricks.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DataApi* | [**getDataVideoAnalytics**](docs/Api/DataApi.md#getdatavideoanalytics) | **GET** /data/videos/analytics | List Video Analytics KPIs
*DataApi* | [**getDataVideoUsage**](docs/Api/DataApi.md#getdatavideousage) | **GET** /data/videos/usage | List Video Usage KPIs
*LivesApi* | [**addLive**](docs/Api/LivesApi.md#addlive) | **POST** /lives | Create a live event
*LivesApi* | [**addSlateByLiveIdAndName**](docs/Api/LivesApi.md#addslatebyliveidandname) | **POST** /lives/{liveId}/slate/{slateName} | Upload an image file and set it as a slate for a live event
*LivesApi* | [**addThumbnailByLiveId**](docs/Api/LivesApi.md#addthumbnailbyliveid) | **POST** /lives/{liveId}/thumbnail | Upload an image file and set it as the Thumbnail for a video
*LivesApi* | [**deleteLiveById**](docs/Api/LivesApi.md#deletelivebyid) | **DELETE** /lives/{liveId} | Delete a live event
*LivesApi* | [**getLiveById**](docs/Api/LivesApi.md#getlivebyid) | **GET** /lives/{liveId} | Get details of a live event
*LivesApi* | [**getLives**](docs/Api/LivesApi.md#getlives) | **GET** /lives | Retrieve a list of live events
*LivesApi* | [**getLivesCaptureSources**](docs/Api/LivesApi.md#getlivescapturesources) | **GET** /lives/captureSources | Retrieve a list of capture sources
*LivesApi* | [**getScenesByLiveId**](docs/Api/LivesApi.md#getscenesbyliveid) | **GET** /lives/{liveId}/scenes | List of the scenes in the live event
*LivesApi* | [**updateLiveById**](docs/Api/LivesApi.md#updatelivebyid) | **PUT** /lives/{liveId} | Update details of a live event
*LivesApi* | [**updateStateOfScene**](docs/Api/LivesApi.md#updatestateofscene) | **PUT** /lives/{liveId}/scenes/{sceneName}/{state} | Update the state of a scene based on its id
*PlayerApi* | [**addPlayer**](docs/Api/PlayerApi.md#addplayer) | **POST** /players | Add a new player
*PlayerApi* | [**deletePlayers**](docs/Api/PlayerApi.md#deleteplayers) | **DELETE** /players/{playerId} | delete players
*PlayerApi* | [**getPlayers**](docs/Api/PlayerApi.md#getplayers) | **GET** /players | List players
*PlayerApi* | [**updatePlayer**](docs/Api/PlayerApi.md#updateplayer) | **PUT** /players/{playerId} | Update player
*PlayersApi* | [**uploadLogoPlayer**](docs/Api/PlayersApi.md#uploadlogoplayer) | **POST** /players/{playerId}/upload | Upload a logo to the player theme
*PlaylistsApi* | [**addPlaylist**](docs/Api/PlaylistsApi.md#addplaylist) | **POST** /playlists | Add a new playlist
*PlaylistsApi* | [**deletePlaylistById**](docs/Api/PlaylistsApi.md#deleteplaylistbyid) | **DELETE** /playlists/{playlistId} | Delete a playlist
*PlaylistsApi* | [**getPlaylistById**](docs/Api/PlaylistsApi.md#getplaylistbyid) | **GET** /playlists/{playlistId} | Retun a single playlist
*PlaylistsApi* | [**getPlaylists**](docs/Api/PlaylistsApi.md#getplaylists) | **GET** /playlists | List playlists
*PlaylistsApi* | [**updatePlaylistById**](docs/Api/PlaylistsApi.md#updateplaylistbyid) | **PUT** /playlists/{playlistId} | Update an existing playlist
*TagsApi* | [**getTags**](docs/Api/TagsApi.md#gettags) | **GET** /tags | List Video Tags
*VideosApi* | [**addAttachmentByVideoId**](docs/Api/VideosApi.md#addattachmentbyvideoid) | **POST** /videos/{videoId}/attachments/{attachmentType}/{locale} | Upload an attachement
*VideosApi* | [**addThumbnailByVideoId**](docs/Api/VideosApi.md#addthumbnailbyvideoid) | **POST** /videos/{videoId}/thumbnail | Upload a thumbnail
*VideosApi* | [**addVideo**](docs/Api/VideosApi.md#addvideo) | **POST** /videos | Add a new video
*VideosApi* | [**deleteAttachmentByVideoId**](docs/Api/VideosApi.md#deleteattachmentbyvideoid) | **DELETE** /videos/{videoId}/attachments/{attachmentType}/{locale} | Delete an attachment
*VideosApi* | [**deleteExportToVideo**](docs/Api/VideosApi.md#deleteexporttovideo) | **DELETE** /videos/{videoId}/exports/{format} | Delete an export of the video
*VideosApi* | [**deleteLinkToVideo**](docs/Api/VideosApi.md#deletelinktovideo) | **DELETE** /videos/{videoId}/links/{linkType} | Delete a link
*VideosApi* | [**deleteThumbnailByVideoId**](docs/Api/VideosApi.md#deletethumbnailbyvideoid) | **DELETE** /videos/{videoId}/thumbnail | Delete a thumbnail
*VideosApi* | [**deleteVideoById**](docs/Api/VideosApi.md#deletevideobyid) | **DELETE** /videos/{videoId} | Delete a video
*VideosApi* | [**finalizeMultipartUploadVideoById**](docs/Api/VideosApi.md#finalizemultipartuploadvideobyid) | **POST** /videos/{videoId}/multipart-upload/finalize | Multipart upload finalization
*VideosApi* | [**finalizeUploadVideoById**](docs/Api/VideosApi.md#finalizeuploadvideobyid) | **PUT** /videos/{videoId}/upload/finalize | Single file upload finalization
*VideosApi* | [**getAttachmentByVideoId**](docs/Api/VideosApi.md#getattachmentbyvideoid) | **GET** /videos/{videoId}/attachments/{attachmentType}/{locale} | Get the attachment
*VideosApi* | [**getAttachmentFileByVideoId**](docs/Api/VideosApi.md#getattachmentfilebyvideoid) | **GET** /videos/{videoId}/attachments/{attachmentType}/{locale}/file | Get attachement file
*VideosApi* | [**getAttachmentsByVideoId**](docs/Api/VideosApi.md#getattachmentsbyvideoid) | **GET** /videos/{videoId}/attachments | List of attachments
*VideosApi* | [**getDetailToVideoById**](docs/Api/VideosApi.md#getdetailtovideobyid) | **GET** /videos/{videoId}/detail | Get the detail of metadatas
*VideosApi* | [**getExportToVideoById**](docs/Api/VideosApi.md#getexporttovideobyid) | **GET** /videos/{videoId}/exports | Get the list exports of the video
*VideosApi* | [**getExportUrlToVideoById**](docs/Api/VideosApi.md#getexporturltovideobyid) | **GET** /videos/{videoId}/exports/{format} | Get an url of the export of the video
*VideosApi* | [**getVideoById**](docs/Api/VideosApi.md#getvideobyid) | **GET** /videos/{videoId} | Retun a single video
*VideosApi* | [**getVideoStatusById**](docs/Api/VideosApi.md#getvideostatusbyid) | **GET** /videos/{videoId}/status | Retun the detailed status of the video
*VideosApi* | [**getVideos**](docs/Api/VideosApi.md#getvideos) | **GET** /videos | List videos
*VideosApi* | [**initMultipartUploadVideoById**](docs/Api/VideosApi.md#initmultipartuploadvideobyid) | **POST** /videos/{videoId}/multipart-upload/init | Multipart upload intialization
*VideosApi* | [**initUploadVideoById**](docs/Api/VideosApi.md#inituploadvideobyid) | **GET** /videos/{videoId}/upload/init | Single file upload intialization
*VideosApi* | [**moveEnvironmentVideoById**](docs/Api/VideosApi.md#moveenvironmentvideobyid) | **PUT** /videos/{videoId}/moveTo/{environment} | Update environment of video
*VideosApi* | [**postExportToVideo**](docs/Api/VideosApi.md#postexporttovideo) | **POST** /videos/{videoId}/exports/{format} | Add export to the video
*VideosApi* | [**postLinkToVideo**](docs/Api/VideosApi.md#postlinktovideo) | **POST** /videos/{videoId}/links | Add link to the video
*VideosApi* | [**putLinkToVideo**](docs/Api/VideosApi.md#putlinktovideo) | **PUT** /videos/{videoId}/links/{linkType} | Update link to the video
*VideosApi* | [**updateVideoById**](docs/Api/VideosApi.md#updatevideobyid) | **PUT** /videos/{videoId} | Update an existing video
*WebhooksApi* | [**addWebhook**](docs/Api/WebhooksApi.md#addwebhook) | **POST** /webhooks | Add a new webhook
*WebhooksApi* | [**deleteWebhookById**](docs/Api/WebhooksApi.md#deletewebhookbyid) | **DELETE** /webhooks/{webhookId} | Delete a webhook
*WebhooksApi* | [**getWebhookById**](docs/Api/WebhooksApi.md#getwebhookbyid) | **GET** /webhooks/{webhookId} | Retun a single webhook
*WebhooksApi* | [**getWebhooks**](docs/Api/WebhooksApi.md#getwebhooks) | **GET** /webhooks | List webhooks
*WebhooksApi* | [**updateWebhookById**](docs/Api/WebhooksApi.md#updatewebhookbyid) | **PUT** /webhooks/{webhookId} | Update an existing webhook

## Models

- [DataVideoAnalytic](docs/Model/DataVideoAnalytic.md)
- [DataVideoAnalyticList](docs/Model/DataVideoAnalyticList.md)
- [DataVideoUsage](docs/Model/DataVideoUsage.md)
- [DataVideoUsageList](docs/Model/DataVideoUsageList.md)
- [Error](docs/Model/Error.md)
- [Export](docs/Model/Export.md)
- [ExportList](docs/Model/ExportList.md)
- [ExportProperties](docs/Model/ExportProperties.md)
- [GetScenesByLiveId200Response](docs/Model/GetScenesByLiveId200Response.md)
- [Link](docs/Model/Link.md)
- [Live](docs/Model/Live.md)
- [LiveAllOfAssets](docs/Model/LiveAllOfAssets.md)
- [LiveList](docs/Model/LiveList.md)
- [LiveProperties](docs/Model/LiveProperties.md)
- [LiveStatus](docs/Model/LiveStatus.md)
- [MediaTracks](docs/Model/MediaTracks.md)
- [OriginalFileInfos](docs/Model/OriginalFileInfos.md)
- [Pagination](docs/Model/Pagination.md)
- [Player](docs/Model/Player.md)
- [PlayerConfig](docs/Model/PlayerConfig.md)
- [PlayerConfigColors](docs/Model/PlayerConfigColors.md)
- [PlayerConfigControls](docs/Model/PlayerConfigControls.md)
- [PlayerList](docs/Model/PlayerList.md)
- [PlayerProperties](docs/Model/PlayerProperties.md)
- [Playlist](docs/Model/Playlist.md)
- [PlaylistAssets](docs/Model/PlaylistAssets.md)
- [PlaylistList](docs/Model/PlaylistList.md)
- [PlaylistProperties](docs/Model/PlaylistProperties.md)
- [QualityDownloadInfos](docs/Model/QualityDownloadInfos.md)
- [Scene](docs/Model/Scene.md)
- [Slate](docs/Model/Slate.md)
- [TagList](docs/Model/TagList.md)
- [Video](docs/Model/Video.md)
- [VideoAssets](docs/Model/VideoAssets.md)
- [VideoAttachment](docs/Model/VideoAttachment.md)
- [VideoAttachmentList](docs/Model/VideoAttachmentList.md)
- [VideoDetail](docs/Model/VideoDetail.md)
- [VideoList](docs/Model/VideoList.md)
- [VideoMultipartUploadFinalize](docs/Model/VideoMultipartUploadFinalize.md)
- [VideoMultipartUploadFinalizePartsInner](docs/Model/VideoMultipartUploadFinalizePartsInner.md)
- [VideoMultipartUploadInit](docs/Model/VideoMultipartUploadInit.md)
- [VideoMultipartUploadInitResponse](docs/Model/VideoMultipartUploadInitResponse.md)
- [VideoMultipartUploadInitResponsePartsInner](docs/Model/VideoMultipartUploadInitResponsePartsInner.md)
- [VideoProperties](docs/Model/VideoProperties.md)
- [VideoStatus](docs/Model/VideoStatus.md)
- [VideoUploadInitResponse](docs/Model/VideoUploadInitResponse.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookList](docs/Model/WebhookList.md)
- [WebhookProperties](docs/Model/WebhookProperties.md)

## Authorization

Authentication schemes defined for the API:
### api_key

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.7`
    - Package version: `1.7.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
