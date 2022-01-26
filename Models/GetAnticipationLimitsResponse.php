<?php
/*
 * PlugAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

/**
 *Anticipation limits
 */
class GetAnticipationLimitsResponse implements JsonSerializable
{
    /**
     * Max limit
     * @required
     * @var \PlugHacker\PlugAPILib\Models\GetAnticipationLimitResponse $max public property
     */
    public $max;

    /**
     * Min limit
     * @required
     * @var \PlugHacker\PlugAPILib\Models\GetAnticipationLimitResponse $min public property
     */
    public $min;

    /**
     * Constructor to set initial or default values of member properties
     * @param GetAnticipationLimitResponse $max Initialization value for $this->max
     * @param GetAnticipationLimitResponse $min Initialization value for $this->min
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->max = func_get_arg(0);
            $this->min = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['max'] = $this->max;
        $json['min'] = $this->min;

        return $json;
    }
}
