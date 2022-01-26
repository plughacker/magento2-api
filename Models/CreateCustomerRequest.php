<?php
/*
 * PlugAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

/**
 *Request for creating a new customer
 */
class CreateCustomerRequest implements JsonSerializable
{
    /**
     * Name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Email
     * @required
     * @var string $email public property
     */
    public $email;

    /**
     * Document number. Only numbers, no special characters.
     * @required
     * @var \PlugHacker\PlugAPILib\Models\CreateDocumentRequest $document public property
     */
    public $document;

    /**
     * The customer's address
     * @required
     * @var \PlugHacker\PlugAPILib\Models\CreateAddressRequest $address public property
     */
    public $address;

    /**
     * Metadata
     * @required
     * @var array $metadata public property
     */
    public $metadata;

    /**
     * @todo Write general description for this property
     * @maps phoneNumber
     * @var string|null $phoneNumber public property
     */
    public $phoneNumber;

    /**
     * Constructor to set initial or default values of member properties
     * @param string               $name         Initialization value for $this->name
     * @param string               $email        Initialization value for $this->email
     * @param string               $document     Initialization value for $this->document
     * @param CreateAddressRequest $address      Initialization value for $this->address
     * @param array                $metadata     Initialization value for $this->metadata
     * @param string               $phoneNumber Initialization value for $this->phoneNumber
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->name         = func_get_arg(0);
            $this->email        = func_get_arg(1);
            $this->document     = func_get_arg(2);
            $this->address      = func_get_arg(3);
            $this->metadata     = func_get_arg(4);
            $this->phoneNumber = func_get_arg(5);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']          = $this->name;
        $json['email']         = $this->email;
        $json['document']      = $this->document;
        $json['address']       = $this->address;
        $json['metadata']      = $this->metadata;
        $json['phone_number'] = $this->phoneNumber;

        return $json;
    }
}
