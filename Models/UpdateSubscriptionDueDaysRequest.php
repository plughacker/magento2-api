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
class UpdateSubscriptionDueDaysRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps boleto_due_days
     * @var integer $boletoDueDays public property
     */
    public $boletoDueDays;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $boletoDueDays Initialization value for $this->boletoDueDays
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->boletoDueDays = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['boleto_due_days'] = $this->boletoDueDays;

        return $json;
    }
}
