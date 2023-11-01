<?php
/*
 * PlugAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

/**
 *Request for updating the card from a subscription
 */
class UpdateSubscriptionCardRequest implements JsonSerializable
{
    /**
     * Credit card data
     * @required
     * @var \PlugHacker\PlugAPILib\Models\CreateCardRequest $card public property
     */
    public $card;

    /**
     * Credit card id
     * @required
     * @maps card_id
     * @var string $cardId public property
     */
    public $cardId;

    /**
     * Constructor to set initial or default values of member properties
     * @param CreateCardRequest $card   Initialization value for $this->card
     * @param string            $cardId Initialization value for $this->cardId
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->card   = func_get_arg(0);
            $this->cardId = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['card']    = $this->card;
        $json['card_id'] = $this->cardId;

        return $json;
    }
}
