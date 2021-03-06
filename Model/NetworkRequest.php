<?php
/**
 * NetworkRequest
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
 * Class representing the NetworkRequest model.
 *
 * A NetworkRequest is utilized to retrieve some data specific exclusively to a NetworkIdentifier.
 *
 * @package melmccann\rosettaserverstubs\Model
 * @author  OpenAPI Generator team
 */
class NetworkRequest 
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
        $this->networkIdentifier = isset($data['networkIdentifier']) ? $data['networkIdentifier'] : null;
        $this->metadata = isset($data['metadata']) ? $data['metadata'] : null;
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


