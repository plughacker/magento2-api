<?php
/*
 * PlugAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class CreateDocumentRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps number
     * @var string|null $number public property
     */
    public $number;

    /**
     * @todo Write general description for this property
     * @var string|null $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @var string|null $country public property
     */
    public $country;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $document Initialization value for $this->document
     * @param string $type      Initialization value for $this->type
     * @param string $country      Initialization value for $this->country
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->number = func_get_arg(0);
            $this->type      = func_get_arg(1);
            $this->country      = func_get_arg(2);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['number'] = $this->number;
        $json['type']     = $this->type;
        $json['country']  = $this->country;

        return $json;
    }
}
