<?php

/**
 * Represents a money amount.
 *
 *
 *
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Money extends ComparableValue
{
    /**
     * @access public
     * @var integer
     */
    public $microAmount;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201306";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "Money";
    }

    public function __construct($microAmount = null, $ComparableValueType = null)
    {
        parent::__construct();
        $this->microAmount = $microAmount;
        $this->ComparableValueType = $ComparableValueType;
    }
}