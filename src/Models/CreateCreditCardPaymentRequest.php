<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 *The settings for creating a credit card payment
 */
class CreateCreditCardPaymentRequest implements JsonSerializable
{
    /**
     * Number of installments
     * @var integer|null $installments public property
     */
    public $installments;

    /**
     * The text that will be shown on the credit card's statement
     * @maps statement_descriptor
     * @var string|null $statementDescriptor public property
     */
    public $statementDescriptor;

    /**
     * Credit card data
     * @var \PagarmeCoreApiLib\Models\CreateCardRequest|null $card public property
     */
    public $card;

    /**
     * The credit card id
     * @maps card_id
     * @var string|null $cardId public property
     */
    public $cardId;

    /**
     * @todo Write general description for this property
     * @maps card_token
     * @var string|null $cardToken public property
     */
    public $cardToken;

    /**
     * Indicates a recurrence
     * @var bool|null $recurrence public property
     */
    public $recurrence;

    /**
     * Indicates if the operation should be only authorization or auth and capture.
     * @var bool|null $capture public property
     */
    public $capture;

    /**
     * Indicates whether the extended label (private label) is enabled
     * @maps extended_limit_enabled
     * @var bool|null $extendedLimitEnabled public property
     */
    public $extendedLimitEnabled;

    /**
     * Extended Limit Code
     * @maps extended_limit_code
     * @var string|null $extendedLimitCode public property
     */
    public $extendedLimitCode;

    /**
     * Customer business segment code
     * @maps merchant_category_code
     * @var integer|null $merchantCategoryCode public property
     */
    public $merchantCategoryCode;

    /**
     * The payment authentication request
     * @var \PagarmeCoreApiLib\Models\CreatePaymentAuthenticationRequest|null $authentication public property
     */
    public $authentication;

    /**
     * The Credit card payment contactless request
     * @var \PagarmeCoreApiLib\Models\CreateCardPaymentContactlessRequest|null $contactless public property
     */
    public $contactless;

    /**
     * Indicates whether a particular payment will enter the offline retry flow
     * @maps auto_recovery
     * @var bool|null $autoRecovery public property
     */
    public $autoRecovery;

    /**
     * AuthOnly, AuthAndCapture, PreAuth
     * @maps operation_type
     * @var string|null $operationType public property
     */
    public $operationType;

    /**
     * Defines whether the card has been used one or more times.
     * @maps recurrency_cycle
     * @var string|null $recurrencyCycle public property
     */
    public $recurrencyCycle;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer                             $installments         Initialization value for $this->installments
     * @param string                              $statementDescriptor  Initialization value for $this-
     *                                                                    >statementDescriptor
     * @param CreateCardRequest                   $card                 Initialization value for $this->card
     * @param string                              $cardId               Initialization value for $this->cardId
     * @param string                              $cardToken            Initialization value for $this->cardToken
     * @param bool                                $recurrence           Initialization value for $this->recurrence
     * @param bool                                $capture              Initialization value for $this->capture
     * @param bool                                $extendedLimitEnabled Initialization value for $this-
     *                                                                    >extendedLimitEnabled
     * @param string                              $extendedLimitCode    Initialization value for $this-
     *                                                                    >extendedLimitCode
     * @param integer                             $merchantCategoryCode Initialization value for $this-
     *                                                                    >merchantCategoryCode
     * @param CreatePaymentAuthenticationRequest  $authentication       Initialization value for $this-
     *                                                                    >authentication
     * @param CreateCardPaymentContactlessRequest $contactless          Initialization value for $this->contactless
     * @param bool                                $autoRecovery         Initialization value for $this->autoRecovery
     * @param string                              $operationType        Initialization value for $this->operationType
     * @param string                              $recurrencyCycle      Initialization value for $this-
     *                                                                    >recurrencyCycle
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 15:
                $this->installments         = func_get_arg(0);
                $this->statementDescriptor  = func_get_arg(1);
                $this->card                 = func_get_arg(2);
                $this->cardId               = func_get_arg(3);
                $this->cardToken            = func_get_arg(4);
                $this->recurrence           = func_get_arg(5);
                $this->capture              = func_get_arg(6);
                $this->extendedLimitEnabled = func_get_arg(7);
                $this->extendedLimitCode    = func_get_arg(8);
                $this->merchantCategoryCode = func_get_arg(9);
                $this->authentication       = func_get_arg(10);
                $this->contactless          = func_get_arg(11);
                $this->autoRecovery         = func_get_arg(12);
                $this->operationType        = func_get_arg(13);
                $this->recurrencyCycle      = func_get_arg(14);
                break;

            default:
                $this->installments = 1;
                $this->capture = true;
                break;
        }
    }


    /**
     * Encode this object to JSON
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $json = array();
        $json['installments']           = $this->installments;
        $json['statement_descriptor']   = $this->statementDescriptor;
        $json['card']                   = $this->card;
        $json['card_id']                = $this->cardId;
        $json['card_token']             = $this->cardToken;
        $json['recurrence']             = $this->recurrence;
        $json['capture']                = $this->capture;
        $json['extended_limit_enabled'] = $this->extendedLimitEnabled;
        $json['extended_limit_code']    = $this->extendedLimitCode;
        $json['merchant_category_code'] = $this->merchantCategoryCode;
        $json['authentication']         = $this->authentication;
        $json['contactless']            = $this->contactless;
        $json['auto_recovery']          = $this->autoRecovery;
        $json['operation_type']         = $this->operationType;
        $json['recurrency_cycle']       = $this->recurrencyCycle;

        return $json;
    }
}
