<?php


/**
 * Represents a range of values that has either an upper or a lower bound.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class Range
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "Range";

    /**
     * @access public
     * @var ComparableValue
     */
    public $min;

    /**
     * @access public
     * @var ComparableValue
     */
    public $max;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($min = null, $max = null)
    {
        $this->min = $min;
        $this->max = $max;
    }

}