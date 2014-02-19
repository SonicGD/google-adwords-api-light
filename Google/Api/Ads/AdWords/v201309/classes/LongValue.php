<?php


/**
 * Number value type for constructing long valued ranges.
 *
 *
 *
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class LongValue extends NumberValue
{
    /**
     * @access public
     * @var integer
     */
    public $number;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "LongValue";
    }

    public function __construct($number = null, $ComparableValueType = null)
    {
        parent::__construct();
        $this->number = $number;
        $this->ComparableValueType = $ComparableValueType;
    }
}