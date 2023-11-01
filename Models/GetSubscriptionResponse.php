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
class GetSubscriptionResponse implements JsonSerializable
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
     * @var string $code public property
     */
    public $code;

    /**
     * @todo Write general description for this property
     * @required
     * @maps start_at
     * @factory \PlugHacker\PlugAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $startAt public property
     */
    public $startAt;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $interval public property
     */
    public $interval;

    /**
     * @todo Write general description for this property
     * @required
     * @maps interval_count
     * @var integer $intervalCount public property
     */
    public $intervalCount;

    /**
     * @todo Write general description for this property
     * @required
     * @maps billing_type
     * @var string $billingType public property
     */
    public $billingType;

    /**
     * @todo Write general description for this property
     * @maps current_cycle
     * @var \PlugHacker\PlugAPILib\Models\GetPeriodResponse|null $currentCycle public property
     */
    public $currentCycle;

    /**
     * @todo Write general description for this property
     * @required
     * @maps payment_method
     * @var string $paymentMethod public property
     */
    public $paymentMethod;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $currency public property
     */
    public $currency;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $installments public property
     */
    public $installments;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $status public property
     */
    public $status;

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
     * @maps updated_at
     * @factory \PlugHacker\PlugAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $updatedAt public property
     */
    public $updatedAt;

    /**
     * @todo Write general description for this property
     * @var \PlugHacker\PlugAPILib\Models\GetCustomerResponse|null $customer public property
     */
    public $customer;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PlugHacker\PlugAPILib\Models\GetCardResponse $card public property
     */
    public $card;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PlugHacker\PlugAPILib\Models\GetSubscriptionItemResponse[] $items public property
     */
    public $items;

    /**
     * @todo Write general description for this property
     * @required
     * @maps statement_descriptor
     * @var string $statementDescriptor public property
     */
    public $statementDescriptor;

    /**
     * @todo Write general description for this property
     * @required
     * @var array $metadata public property
     */
    public $metadata;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PlugHacker\PlugAPILib\Models\GetSetupResponse $setup public property
     */
    public $setup;

    /**
     * Affiliation Code
     * @required
     * @maps gateway_affiliation_id
     * @var string $gatewayAffiliationId public property
     */
    public $gatewayAffiliationId;

    /**
     * @todo Write general description for this property
     * @maps next_billing_at
     * @factory \PlugHacker\PlugAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $nextBillingAt public property
     */
    public $nextBillingAt;

    /**
     * @todo Write general description for this property
     * @maps billing_day
     * @var integer|null $billingDay public property
     */
    public $billingDay;

    /**
     * @todo Write general description for this property
     * @maps minimum_price
     * @var integer|null $minimumPrice public property
     */
    public $minimumPrice;

    /**
     * @todo Write general description for this property
     * @maps canceled_at
     * @factory \PlugHacker\PlugAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $canceledAt public property
     */
    public $canceledAt;

    /**
     * Subscription discounts
     * @var \PlugHacker\PlugAPILib\Models\GetDiscountResponse[]|null $discounts public property
     */
    public $discounts;

    /**
     * Subscription increments
     * @required
     * @var \PlugHacker\PlugAPILib\Models\GetIncrementResponse[] $increments public property
     */
    public $increments;

    /**
     * Days until boleto expires
     * @maps boleto_due_days
     * @var integer|null $boletoDueDays public property
     */
    public $boletoDueDays;

    /**
     * Constructor to set initial or default values of member properties
     * @param string               $id                   Initialization value for $this->id
     * @param string               $code                 Initialization value for $this->code
     * @param \DateTime            $startAt              Initialization value for $this->startAt
     * @param string               $interval             Initialization value for $this->interval
     * @param integer              $intervalCount        Initialization value for $this->intervalCount
     * @param string               $billingType          Initialization value for $this->billingType
     * @param GetPeriodResponse    $currentCycle         Initialization value for $this->currentCycle
     * @param string               $paymentMethod        Initialization value for $this->paymentMethod
     * @param string               $currency             Initialization value for $this->currency
     * @param integer              $installments         Initialization value for $this->installments
     * @param string               $status               Initialization value for $this->status
     * @param \DateTime            $createdAt            Initialization value for $this->createdAt
     * @param \DateTime            $updatedAt            Initialization value for $this->updatedAt
     * @param GetCustomerResponse  $customer             Initialization value for $this->customer
     * @param GetCardResponse      $card                 Initialization value for $this->card
     * @param array                $items                Initialization value for $this->items
     * @param string               $statementDescriptor  Initialization value for $this->statementDescriptor
     * @param array                $metadata             Initialization value for $this->metadata
     * @param GetSetupResponse     $setup                Initialization value for $this->setup
     * @param string               $gatewayAffiliationId Initialization value for $this->gatewayAffiliationId
     * @param \DateTime            $nextBillingAt        Initialization value for $this->nextBillingAt
     * @param integer              $billingDay           Initialization value for $this->billingDay
     * @param integer              $minimumPrice         Initialization value for $this->minimumPrice
     * @param \DateTime            $canceledAt           Initialization value for $this->canceledAt
     * @param array                $discounts            Initialization value for $this->discounts
     * @param array                $increments           Initialization value for $this->increments
     * @param integer              $boletoDueDays        Initialization value for $this->boletoDueDays
     */
    public function __construct()
    {
        if (27 == func_num_args()) {
            $this->id                   = func_get_arg(0);
            $this->code                 = func_get_arg(1);
            $this->startAt              = func_get_arg(2);
            $this->interval             = func_get_arg(3);
            $this->intervalCount        = func_get_arg(4);
            $this->billingType          = func_get_arg(5);
            $this->currentCycle         = func_get_arg(6);
            $this->paymentMethod        = func_get_arg(7);
            $this->currency             = func_get_arg(8);
            $this->installments         = func_get_arg(9);
            $this->status               = func_get_arg(10);
            $this->createdAt            = func_get_arg(11);
            $this->updatedAt            = func_get_arg(12);
            $this->customer             = func_get_arg(13);
            $this->card                 = func_get_arg(14);
            $this->items                = func_get_arg(15);
            $this->statementDescriptor  = func_get_arg(16);
            $this->metadata             = func_get_arg(17);
            $this->setup                = func_get_arg(18);
            $this->gatewayAffiliationId = func_get_arg(19);
            $this->nextBillingAt        = func_get_arg(20);
            $this->billingDay           = func_get_arg(21);
            $this->minimumPrice         = func_get_arg(22);
            $this->canceledAt           = func_get_arg(23);
            $this->discounts            = func_get_arg(24);
            $this->increments           = func_get_arg(25);
            $this->boletoDueDays        = func_get_arg(26);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['id']                     = $this->id;
        $json['code']                   = $this->code;
        $json['start_at']               = DateTimeHelper::toRfc3339DateTime($this->startAt);
        $json['interval']               = $this->interval;
        $json['interval_count']         = $this->intervalCount;
        $json['billing_type']           = $this->billingType;
        $json['current_cycle']          = $this->currentCycle;
        $json['payment_method']         = $this->paymentMethod;
        $json['currency']               = $this->currency;
        $json['installments']           = $this->installments;
        $json['status']                 = $this->status;
        $json['created_at']             = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['updated_at']             = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        $json['customer']               = $this->customer;
        $json['card']                   = $this->card;
        $json['items']                  = $this->items;
        $json['statement_descriptor']   = $this->statementDescriptor;
        $json['metadata']               = $this->metadata;
        $json['setup']                  = $this->setup;
        $json['gateway_affiliation_id'] = $this->gatewayAffiliationId;
        $json['next_billing_at']        = isset($this->nextBillingAt) ?
            DateTimeHelper::toRfc3339DateTime($this->nextBillingAt) : null;
        $json['billing_day']            = $this->billingDay;
        $json['minimum_price']          = $this->minimumPrice;
        $json['canceled_at']            = isset($this->canceledAt) ?
            DateTimeHelper::toRfc3339DateTime($this->canceledAt) : null;
        $json['discounts']              = $this->discounts;
        $json['increments']             = $this->increments;
        $json['boleto_due_days']        = $this->boletoDueDays;

        return $json;
    }
}
