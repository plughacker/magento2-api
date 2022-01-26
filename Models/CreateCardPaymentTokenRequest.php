<?php
/*
 * PlugAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

/**
 *The card payment token request
 */
class CreateCardPaymentTokenRequest implements JsonSerializable
{
    /**
     * The authentication type
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * The ApplePay authentication request
     * @required
     * @maps apple_pay
     * @var \PlugHacker\PlugAPILib\Models\CreateApplePayRequest $applePay public property
     */
    public $applePay;

    /**
     * The GooglePay authentication request
     * @required
     * @maps google_pay
     * @var \PlugHacker\PlugAPILib\Models\CreateGooglePayRequest $googlePay public property
     */
    public $googlePay;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                 $type      Initialization value for $this->type
     * @param CreateApplePayRequest  $applePay  Initialization value for $this->applePay
     * @param CreateGooglePayRequest $googlePay Initialization value for $this->googlePay
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->type      = func_get_arg(0);
            $this->applePay  = func_get_arg(1);
            $this->googlePay = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type']       = $this->type;
        $json['apple_pay']  = $this->applePay;
        $json['google_pay'] = $this->googlePay;

        return $json;
    }
}