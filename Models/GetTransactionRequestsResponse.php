<?php
/*
 * PlugAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;
use PlugHacker\PlugAPILib\Utils\DateTimeHelper;
use PlugHacker\PlugAPILib\Models\GetProviderErrorResponse;

/**
 *Response object for getting the shipping data
 */
class GetTransactionRequestsResponse implements JsonSerializable
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
     * @maps createdAt
     * @var string $createdAt public property
     */
    public $createdAt;

    /**
     * @todo Write general description for this property
     * @required
     * @maps updatedAt
     * @var string $updatedAt public property
     */
    public $updatedAt;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $idempotencyKey public property
     */
    public $idempotencyKey;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $providerId public property
     */
    public $providerId;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $providerType public property
     */
    public $providerType;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $transactionId public property
     */
    public $transactionId;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $amount public property
     */
    public $amount;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $authorizationCode public property
     */
    public $authorizationCode;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $authorizationNsu public property
     */
    public $authorizationNsu;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $requestStatus public property
     */
    public $requestStatus;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $requestType public property
     */
    public $requestType;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $responseTs public property
     */
    public $responseTs;

    /**
     * @var GetProviderErrorResponse
     */
    public $providerError;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct()
    {
        if (13 == func_num_args()) {
            $this->id = func_get_arg(0);
            $this->createdAt = func_get_arg(1);
            $this->updatedAt = func_get_arg(2);
            $this->idempotencyKey = func_get_arg(3);
            $this->providerId = func_get_arg(4);
            $this->providerType = func_get_arg(5);
            $this->transactionId = func_get_arg(6);
            $this->amount = func_get_arg(7);
            $this->authorizationCode = func_get_arg(8);
            $this->authorizationNsu = func_get_arg(9);
            $this->requestStatus = func_get_arg(10);
            $this->requestType = func_get_arg(11);
            $this->responseTs = func_get_arg(12);
            $this->providerError = func_get_arg(13);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['id'] = $this->id;
        $json['createdAt'] = $this->createdAt;
        $json['updatedAt'] = $this->updatedAt;
        $json['idempotencyKey'] = $this->idempotencyKey;
        $json['providerId'] = $this->providerId;
        $json['providerType'] = $this->providerType;
        $json['transactionId'] = $this->transactionId;
        $json['amount'] = $this->amount;
        $json['authorizationCode'] = $this->authorizationCode;
        $json['authorizationNsu'] = $this->authorizationNsu;
        $json['requestStatus'] = $this->requestStatus;
        $json['requestType'] = $this->requestType;
        $json['responseTs'] = $this->responseTs;
        $json['providerError'] = $this->providerError;

        return $json;
    }
}
