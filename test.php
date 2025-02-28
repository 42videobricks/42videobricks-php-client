<?php
require_once(__DIR__ . '/vendor/autoload.php');
$env = "ioana";

switch ($env) {
    case "moi":
        $apikey = "9fb23747ff2521ff94f34eabedba2b05af1dea0b4b55e0789418dd9b6e642ed9";
        $host = "https://api.42videobricks.com";
        $product = "NG03OVk1enc5cmtodVZYMw==";
        break;
    case "ioana":
        $apikey = "18f684142c03889bb8c16fa3ec4177390bb72e54f595caf20a8c21a917b2d89d";
        $host = "https://api.42videobricks.com";
        $product = "UUxTM2dyNEgvNStVbUtYRA==";
        $product = "UUxTM2dyNEgvNStYT2xMKw==";
        break;
    case "dev":
    default:
        $apikey = "f0b0133c7ab51bd004bc07db9a58b621a4c6f3d3122e978cd345b6eb65bc7d51";
        $host = "https://127.0.0.1:8000";
        $product = "MWNzMFlDdklWT3g4Um1JUw==";
}

$config = Api42Vb\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', $apikey)
    ->setHost($host);

$apiInstance = new Api42Vb\Client\Api\VideosApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$apiLiveInstance = new Api42Vb\Client\Api\LivesApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

var_export($apiInstance->getAttachmentByVideoId($product, "chapter", "en-GB"));

//$apiInstance->postExportToVideo($product,"GIF", new \Api42Vb\Client\Model\ExportProperties(["resolution"=>640]));
//var_export($apiInstance->getExportToVideoById($product,"GIF"));
//$apiLiveInstance->addLive(new \Api42Vb\Client\Model\LiveProperties());


//https://api.42videobricks.com/videos/UUxTM2dyNEgvNStVbUtYRA%3D%3D/attachments/subtitle/fr-FR` resulted in a `400 Bad Request` response: {"code":10030,"message":"The family \u0027VOD_SUBTITLES_\u0027 does not exist"}