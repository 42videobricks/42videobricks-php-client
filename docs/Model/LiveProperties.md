# # LiveProperties

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | title of the live |
**description** | **string** | description of the live | [optional]
**public** | **bool** | Define if the live is public (it can be accessible by anybody with the live url). Default &#x3D; tue | [optional]
**stream_restriction** | **string[]** | the iso code 3306-1 on code-alpha2 if empty all the world can be read the live | [optional]
**streaming_type** | **string** | RTMP (Real-Time Messaging Protocol): A streaming protocol developed by Adobe for transmitting audio, video, and data streams in real-time over the Internet. SRT (Secure Reliable Transport): An open-source protocol that optimizes live video streaming over unstable networks, ensuring security and reliability. HLS (HTTP Live Streaming): An HTTP-based adaptive streaming communications protocol developed by Apple for streaming media over the internet. | [optional] [default to 'SRT']
**input_stream** | **string** | URL of the HLS stream input. Required if streamingType is HLS. | [optional]
**capture_source** | **string** | The closest source to capture the live stream, see /lives/captureSources | [optional]
**start_at** | **int** | The start datetime of the live in timestamp format | [optional]
**end_at** | **int** | The end datetime of the live in timestamp format | [optional]
**player_id** | **string** | Video player theme id | [optional] [default to '']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
