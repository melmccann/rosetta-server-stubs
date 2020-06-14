<?php
/**
 * AccountIdentifier
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
 * Class representing the AccountIdentifier model.
 *
 * The account_identifier uniquely identifies an account within a network. All fields in the account_identifier are utilized to determine this uniqueness (including the metadata field, if populated).
 *
 * @package melmccann\rosettaserverstubs\Model
 * @author  OpenAPI Generator team
 */
class AccountIdentifier 
{
        /**
     * The address may be a cryptographic public key (or some encoding of it) or a provided username.
     *
     * @var string
     * @SerializedName("address")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $address;

    /**
     * @var melmccann\rosettaserverstubs\Model\SubAccountIdentifier|null
     * @SerializedName("sub_account")
     * @Assert\Type("melmccann\rosettaserverstubs\Model\SubAccountIdentifier")
     * @Type("melmccann\rosettaserverstubs\Model\SubAccountIdentifier")
     */
    protected $subAccount;

    /**
     * Blockchains that utilize a username model (where the address is not a derivative of a cryptographic public key) should specify the public key(s) owned by the address in metadata.
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
        $this->address = isset($data['address']) ? $data['address'] : null;
        $this->subAccount = isset($data['subAccount']) ? $data['subAccount'] : null;
        $this->metadata = isset($data['metadata']) ? $data['metadata'] : null;
    }

    /**
     * Gets address.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets address.
     *
     * @param string $address  The address may be a cryptographic public key (or some encoding of it) or a provided username.
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Gets subAccount.
     *
     * @return melmccann\rosettaserverstubs\Model\SubAccountIdentifier|null
     */
    public function getSubAccount(): ?SubAccountIdentifier
    {
        return $this->subAccount;
    }

    /**
     * Sets subAccount.
     *
     * @param melmccann\rosettaserverstubs\Model\SubAccountIdentifier|null $subAccount
     *
     * @return $this
     */
    public function setSubAccount(SubAccountIdentifier $subAccount = null): ?SubAccountIdentifier
    {
        $this->subAccount = $subAccount;

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
     * @param array|null $metadata  Blockchains that utilize a username model (where the address is not a derivative of a cryptographic public key) should specify the public key(s) owned by the address in metadata.
     *
     * @return $this
     */
    public function setMetadata(array $metadata = null): ?array
    {
        $this->metadata = $metadata;

        return $this;
    }
}

