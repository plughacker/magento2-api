<?php
/*
 * PlugAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

/**
 *Payment data
 */
class CreatePaymentSourceRequest implements JsonSerializable
{
    /**
     * Payment type
     * @required
     * @maps source_type
     * @var string $sourceType public property
     */
    public $sourceType;

    /**
     * Token Id
     * @maps tokenId
     * @var string|null $tokenId public property
     */
    public $tokenId;

    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->sourceType   = func_get_arg(0);
            $this->tokenId      = func_get_arg(1);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['sourceType'] = $this->sourceType;
        $json['tokenId']     = $this->tokenId;

        return $json;
    }
}
