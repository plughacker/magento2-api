<?php
/*
 * PlugAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

/**
 * Webhook data
 */
class CreateWebhookRequest implements JsonSerializable
{
    /**
     * Webhook event
     * @required
     * @var string $event public property
     */
    public $event;

    /**
     * Webhook endpoint
     * @required
     * @var string $endpoint public property
     */
    public $endpoint;

    /**
     * Webhook version
     * @var string $version public property
     */
    public $version;

    /**
     * Webhook status
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $type Initialization value for $this->type
     * @param string $endpoint Initialization value for $this->endpoint
     * @param string $version Initialization value for $this->version
     * @param string $status Initialization value for $this->status
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 4:
                $this->event = func_get_arg(0);
                $this->endpoint = func_get_arg(1);
                $this->version = func_get_arg(2);
                $this->status = func_get_arg(3);
                break;
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['event'] = $this->event;
        $json['endpoint'] = $this->endpoint;
        $json['version'] = $this->version;
        $json['status'] = $this->status;

        return $json;
    }
}
