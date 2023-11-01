<?php
/*
 * PlugAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

/**
 *Creates a 3D-S authentication payment
 */
class CreateThreeDSecureRequest implements JsonSerializable
{
    /**
     * The MPI Vendor (MerchantPlugin)
     * @required
     * @var string $mpi public property
     */
    public $mpi;

    /**
     * The Cardholder Authentication Verification value
     * @var string|null $cavv public property
     */
    public $cavv;

    /**
     * The Electronic Commerce Indicator value
     * @var string|null $eci public property
     */
    public $eci;

    /**
     * The TransactionId value (XID)
     * @maps transaction_id
     * @var string|null $transactionId public property
     */
    public $transactionId;

    /**
     * The success URL after the authentication
     * @maps success_url
     * @var string|null $successUrl public property
     */
    public $successUrl;

    /**
     * Directory Service Transaction Identifier
     * @maps ds_transaction_id
     * @var string|null $dsTransactionId public property
     */
    public $dsTransactionId;

    /**
     * ThreeDSecure Version
     * @var string|null $version public property
     */
    public $version;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $mpi             Initialization value for $this->mpi
     * @param string $cavv            Initialization value for $this->cavv
     * @param string $eci             Initialization value for $this->eci
     * @param string $transactionId   Initialization value for $this->transactionId
     * @param string $successUrl      Initialization value for $this->successUrl
     * @param string $dsTransactionId Initialization value for $this->dsTransactionId
     * @param string $version         Initialization value for $this->version
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->mpi             = func_get_arg(0);
            $this->cavv            = func_get_arg(1);
            $this->eci             = func_get_arg(2);
            $this->transactionId   = func_get_arg(3);
            $this->successUrl      = func_get_arg(4);
            $this->dsTransactionId = func_get_arg(5);
            $this->version         = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['mpi']               = $this->mpi;
        $json['cavv']              = $this->cavv;
        $json['eci']               = $this->eci;
        $json['transaction_id']    = $this->transactionId;
        $json['success_url']       = $this->successUrl;
        $json['ds_transaction_id'] = $this->dsTransactionId;
        $json['version']           = $this->version;

        return $json;
    }
}
