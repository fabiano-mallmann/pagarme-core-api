<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 *Options for creating the card
 */
class CreateCardOptionsRequest implements JsonSerializable
{
    /**
     * Indicates if the card should be verified before creation. If true, executes an authorization before
     * saving the card.
     * @required
     * @maps verify_card
     * @var bool $verifyCard public property
     */
    public $verifyCard;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool $verifyCard Initialization value for $this->verifyCard
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->verifyCard = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $json = array();
        $json['verify_card'] = $this->verifyCard;

        return $json;
    }
}
