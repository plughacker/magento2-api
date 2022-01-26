<?php
/*
 * PlugAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

/**
 *Request for capturing a charge
 */
class CreateCaptureChargeRequest implements JsonSerializable
{
    /**
     * Code for the charge. Sending this field will update the code send on the charge and order creation.
     * @required
     * @var string $code public property
     */
    public $code;

    /**
     * The amount that will be captured
     * @var integer|null $amount public property
     */
    public $amount;

    /**
     * Splits
     * @var \PlugHacker\PlugAPILib\Models\CreateSplitRequest[]|null $split public property
     */
    public $split;

    /**
     * @todo Write general description for this property
     * @required
     * @maps operation_reference
     * @var string $operationReference public property
     */
    public $operationReference;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $code               Initialization value for $this->code
     * @param integer $amount             Initialization value for $this->amount
     * @param array   $split              Initialization value for $this->split
     * @param string  $operationReference Initialization value for $this->operationReference
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->code               = func_get_arg(0);
            $this->amount             = func_get_arg(1);
            $this->split              = func_get_arg(2);
            $this->operationReference = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['code']                = $this->code;
        $json['amount']              = $this->amount;
        $json['split']               = $this->split;
        $json['operation_reference'] = $this->operationReference;

        return $json;
    }
}