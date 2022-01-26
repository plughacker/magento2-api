<?php
/*
 * PlugAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;
use PlugHacker\PlugAPILib\Utils\DateTimeHelper;

/**
 * @todo Write general description for this model
 */
class CreateCheckoutBoletoPaymentRequest implements JsonSerializable
{
    /**
     * Bank identifier
     * @required
     * @var string $bank public property
     */
    public $bank;

    /**
     * Instructions
     * @required
     * @var string $instructions public property
     */
    public $instructions;

    /**
     * Due date
     * @required
     * @maps due_at
     * @factory \PlugHacker\PlugAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $dueAt public property
     */
    public $dueAt;

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $bank         Initialization value for $this->bank
     * @param string    $instructions Initialization value for $this->instructions
     * @param \DateTime $dueAt        Initialization value for $this->dueAt
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->bank         = func_get_arg(0);
            $this->instructions = func_get_arg(1);
            $this->dueAt        = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['bank']         = $this->bank;
        $json['instructions'] = $this->instructions;
        $json['due_at']       = DateTimeHelper::toRfc3339DateTime($this->dueAt);

        return $json;
    }
}
