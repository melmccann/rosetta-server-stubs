<?php
/**
 * ConstructionSubmitResponse
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
 * Class representing the ConstructionSubmitResponse model.
 *
 * A TransactionSubmitResponse contains the transaction_identifier of a submitted transaction that was accepted into the mempool.
 *
 * @package melmccann\rosettaserverstubs\Model
 * @author  OpenAPI Generator team
 */
class ConstructionSubmitResponse 
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
     * @param array|null $metadata
     *
     * @return $this
     */
    public function setMetadata(array $metadata = null): ?array
    {
        $this->metadata = $metadata;

        return $this;
    }
}


