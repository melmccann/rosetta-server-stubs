# # Operation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**operation_identifier** | [**\melmccann
**related_operations** | [**\melmccann
**type** | **string** | The network-specific type of the operation. Ensure that any type that can be returned here is also specified in the NetowrkStatus. This can be very useful to downstream consumers that parse all block data. | 
**status** | **string** | The network-specific status of the operation. Status is not defined on the transaction object because blockchains with smart contracts may have transactions that partially apply.  Blockchains with atomic transactions (all operations succeed or all operations fail) will have the same status for each operation. | 
**account** | [**\melmccann
**amount** | [**\melmccann
**metadata** | [**object**](.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

