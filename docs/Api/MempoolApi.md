# melmccann

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mempool**](MempoolApi.md#mempool) | **POST** /mempool | Get All Mempool Transactions
[**mempoolTransaction**](MempoolApi.md#mempoolTransaction) | **POST** /mempool/transaction | Get a Mempool Transaction



## mempool

> \melmccann

Get All Mempool Transactions

Get all Transaction Identifiers in the mempool

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mempool_request = new \melmccann

try {
    $result = $apiInstance->mempool($mempool_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MempoolApi->mempool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mempool_request** | [**\melmccann

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


## mempoolTransaction

> \melmccann

Get a Mempool Transaction

Get a transaction in the mempool by its Transaction Identifier. This is a separate request than fetching a block transaction (/block/transaction) because some blockchain nodes need to know that a transaction query is for something in the mempool instead of a transaction in a block.  Transactions may not be fully parsable until they are in a block (ex: may not be possible to determine the fee to pay before a transaction is executed). On this endpoint, it is ok that returned transactions are only estimates of what may actually be included in a block.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mempool_transaction_request = new \melmccann

try {
    $result = $apiInstance->mempoolTransaction($mempool_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MempoolApi->mempoolTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mempool_transaction_request** | [**\melmccann

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
