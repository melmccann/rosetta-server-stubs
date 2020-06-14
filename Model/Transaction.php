<?php
/**
 * Transaction
 *
 * PHP version 5
 *
 * @category Class
 * @package  melmccann\rosettaserverstubs\Model
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Rosetta
 *
 * A Standard for Blockchain Interaction
 *
 * The version of the OpenAPI document: 1.3.1
 * 
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace melmccann\rosettaserverstubs\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the Transaction model.
 *
 * Transactions contain an array of Operations that are attributable to the same TransactionIdentifier.
 *
 * @package melmccann\rosettaserverstubs\Model
 * @author  OpenAPI Generator team
 */
class Transaction 
{
        /**
     * @var melmccann\rosettaserverstubs\Model\TransactionIdentifier
     * @SerializedName("transaction_identifier")
     * @Assert\NotNull()
     * @Assert\Type("melmccann\rosettaserverstubs\Model\TransactionIdentifier")
     * @Type("melmccann\rosettaserverstubs\Model\TransactionIdentifier")
     */
    protected $transactionIdentifier;

    /**
     * @var melmccann\rosettaserverstubs\Model\Operation[]
     * @SerializedName("operations")
     * @Assert\NotNull()
     * @Assert\All({
     *   @Assert\Type("melmccann\rosettaserverstubs\Model\Operation")
     * })
     * @Type("array<melmccann\rosettaserverstubs\Model\Operation>")
     */
    protected $operations;

    /**
     * Transactions that are related to other transactions (like a cross-shard transactioin) should include the tranaction_identifier of these transactions in the metadata.
     *
     * @var array|null
     * @SerializedName("metadata")
     * @Assert\Type("array")
     * @Type("array")
     */
    protected $metadata;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->transactionIdentifier = isset($data['transactionIdentifier']) ? $data['transactionIdentifier'] : null;
        $this->operations = isset($data['operations']) ? $data['operations'] : null;
        $this->metadata = isset($data['metadata']) ? $data['metadata'] : null;
    }

    /**
     * Gets transactionIdentifier.
     *
     * @return melmccann\rosettaserverstubs\Model\TransactionIdentifier
     */
    public function getTransactionIdentifier(): TransactionIdentifier
    {
        return $this->transactionIdentifier;
    }

    /**
     * Sets transactionIdentifier.
     *
     * @param melmccann\rosettaserverstubs\Model\TransactionIdentifier $transactionIdentifier
     *
     * @return $this
     */
    public function setTransactionIdentifier(TransactionIdentifier $transactionIdentifier): TransactionIdentifier
    {
        $this->transactionIdentifier = $transactionIdentifier;

        return $this;
    }

    /**
     * Gets operations.
     *
     * @return melmccann\rosettaserverstubs\Model\Operation[]
     */
    public function getOperations(): array
    {
        return $this->operations;
    }

    /**
     * Sets operations.
     *
     * @param melmccann\rosettaserverstubs\Model\Operation[] $operations
     *
     * @return $this
     */
    public function setOperations(array $operations): array
    {
        $this->operations = $operations;

        return $this;
    }

    /**
     * Gets metadata.
     *
     * @return array|null
     */
    public function getMetadata(): ?array
    {
        return $this->metadata;
    }

    /**
     * Sets metadata.
     *
     * @param array|null $metadata  Transactions that are related to other transactions (like a cross-shard transactioin) should include the tranaction_identifier of these transactions in the metadata.
     *
     * @return $this
     */
    public function setMetadata(array $metadata = null): ?array
    {
        $this->metadata = $metadata;

        return $this;
    }
}

