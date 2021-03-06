<?php
/**
 * MempoolTransactionRequest
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
 * Class representing the MempoolTransactionRequest model.
 *
 * A MempoolTransactionRequest is utilized to retrieve a transaction from the mempool.
 *
 * @package melmccann\rosettaserverstubs\Model
 * @author  OpenAPI Generator team
 */
class MempoolTransactionRequest 
{
        /**
     * @var melmccann\rosettaserverstubs\Model\NetworkIdentifier
     * @SerializedName("network_identifier")
     * @Assert\NotNull()
     * @Assert\Type("melmccann\rosettaserverstubs\Model\NetworkIdentifier")
     * @Type("melmccann\rosettaserverstubs\Model\NetworkIdentifier")
     */
    protected $networkIdentifier;

    /**
     * @var melmccann\rosettaserverstubs\Model\TransactionIdentifier
     * @SerializedName("transaction_identifier")
     * @Assert\NotNull()
     * @Assert\Type("melmccann\rosettaserverstubs\Model\TransactionIdentifier")
     * @Type("melmccann\rosettaserverstubs\Model\TransactionIdentifier")
     */
    protected $transactionIdentifier;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->networkIdentifier = isset($data['networkIdentifier']) ? $data['networkIdentifier'] : null;
        $this->transactionIdentifier = isset($data['transactionIdentifier']) ? $data['transactionIdentifier'] : null;
    }

    /**
     * Gets networkIdentifier.
     *
     * @return melmccann\rosettaserverstubs\Model\NetworkIdentifier
     */
    public function getNetworkIdentifier(): NetworkIdentifier
    {
        return $this->networkIdentifier;
    }

    /**
     * Sets networkIdentifier.
     *
     * @param melmccann\rosettaserverstubs\Model\NetworkIdentifier $networkIdentifier
     *
     * @return $this
     */
    public function setNetworkIdentifier(NetworkIdentifier $networkIdentifier): NetworkIdentifier
    {
        $this->networkIdentifier = $networkIdentifier;

        return $this;
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
}


