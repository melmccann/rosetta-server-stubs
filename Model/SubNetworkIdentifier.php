<?php
/**
 * SubNetworkIdentifier
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
 * Class representing the SubNetworkIdentifier model.
 *
 * In blockchains with sharded state, the SubNetworkIdentifier is required to query some object on a specific shard. This identifier is optional for all non-sharded blockchains.
 *
 * @package melmccann\rosettaserverstubs\Model
 * @author  OpenAPI Generator team
 */
class SubNetworkIdentifier 
{
        /**
     * @var string
     * @SerializedName("network")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $network;

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
        $this->network = isset($data['network']) ? $data['network'] : null;
        $this->metadata = isset($data['metadata']) ? $data['metadata'] : null;
    }

    /**
     * Gets network.
     *
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Sets network.
     *
     * @param string $network
     *
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->network = $network;

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


