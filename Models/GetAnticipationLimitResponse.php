<?php
/*
 * PlugAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

/**
 *Anticipation limit
 */
class GetAnticipationLimitResponse implements JsonSerializable
{
    /**
     * Amount
     * @required
     * @var integer $amount public property
     */
    public $amount;

    /**
     * Anticipation fee
     * @required
     * @maps anticipation_fee
     * @var integer $anticipationFee public property
     */
    public $anticipationFee;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $amount          Initialization value for $this->amount
     * @param integer $anticipationFee Initialization value for $this->anticipationFee
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->amount          = func_get_arg(0);
            $this->anticipationFee = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['amount']           = $this->amount;
        $json['anticipation_fee'] = $this->anticipationFee;

        return $json;
    }
}
