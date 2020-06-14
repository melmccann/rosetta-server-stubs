# melmccann

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**networkList**](NetworkApi.md#networkList) | **POST** /network/list | Get List of Available Networks
[**networkOptions**](NetworkApi.md#networkOptions) | **POST** /network/options | Get Network Options
[**networkStatus**](NetworkApi.md#networkStatus) | **POST** /network/status | Get Network Status



## networkList

> \melmccann

Get List of Available Networks

This endpoint returns a list of NetworkIdentifiers that the Rosetta server can handle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$metadata_request = new \melmccann

try {
    $result = $apiInstance->networkList($metadata_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->networkList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metadata_request** | [**\melmccann

### Return type

[**\melmccann

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## networkOptions

> \melmccann

Get Network Options

This endpoint returns the version information and allowed network-specific types for a NetworkIdentifier. Any NetworkIdentifier returned by /network/list should be accessible here.  Because options are retrievable in the context of a NetworkIdentifier, it is possible to define unique options for each network.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$network_request = new \melmccann

try {
    $result = $apiInstance->networkOptions($network_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->networkOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network_request** | [**\melmccann

### Return type

[**\melmccann

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## networkStatus

> \melmccann

Get Network Status

This endpoint returns the current status of the network requested. Any NetworkIdentifier returned by /network/list should be accessible here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$network_request = new \melmccann

try {
    $result = $apiInstance->networkStatus($network_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->networkStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network_request** | [**\melmccann

### Return type

[**\melmccann

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)
