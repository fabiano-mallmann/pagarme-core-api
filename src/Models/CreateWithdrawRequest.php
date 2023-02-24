<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class CreateWithdrawRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var integer $amount public property
     */
    public $amount;

    /**
     * @todo Write general description for this property
     * @var array|null $metadata public property
     */
    public $metadata;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $amount   Initialization value for $this->amount
     * @param array   $metadata Initialization value for $this->metadata
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->amount   = func_get_arg(0);
            $this->metadata = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $json = array();
        $json['amount']   = $this->amount;
        $json['metadata'] = $this->metadata;

        return $json;
    }
}
