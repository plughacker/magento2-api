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
 *Response object for getting an Order
 */
class GetOrderResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $orderId public property
     */
    public $orderId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps created_at
     * @factory \PlugHacker\PlugAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdAt public property
     */
    public $createdAt;

    /**
     * @todo Write general description for this property
     * @required
     * @var float $amount public property
     */
    public $amount;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $currency public property
     */
    public $currency;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $statementDescriptor public property
     */
    public $statementDescriptor;

    /**
     * @todo Write general description for this property
     * @required
     * @var boolean $capture public property
     */
    public $capture;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PlugHacker\PlugAPILib\Models\GetTransactionRequestsResponse[] $transactionRequests public property
     */
    public $transactionRequests;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PlugHacker\PlugAPILib\Models\GetPaymentMethodResponse $paymentMethod public property
     */
    public $paymentMethod;

    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->id         = func_get_arg(0);
            $this->orderId       = func_get_arg(1);
            $this->createdAt  = func_get_arg(2);
            $this->amount  = func_get_arg(3);
            $this->currency   = func_get_arg(4);
            $this->statementDescriptor   = func_get_arg(5);
            $this->capture      = func_get_arg(6);
            $this->status     = func_get_arg(7);
            $this->transactionRequests  = func_get_arg(8);
            $this->paymentMethod  = func_get_arg(9);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['id']                     = $this->id;
        $json['orderId']                = $this->orderId;
        $json['createdAt']              = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['amount']                 = $this->amount;
        $json['currency']               = $this->currency;
        $json['statementDescriptor']    = $this->statementDescriptor;
        $json['capture']                = $this->capture;
        $json['status']                 = $this->status;
        $json['transactionRequests']    = $this->transactionRequests;
        $json['paymentMethod']          = $this->paymentMethod;

        return $json;
    }
}
