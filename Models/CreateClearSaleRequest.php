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
class CreateClearSaleRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps custom_sla
     * @var integer $customSla public property
     */
    public $customSla;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $customSla Initialization value for $this->customSla
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->customSla = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['custom_sla'] = $this->customSla;

        return $json;
    }
}
