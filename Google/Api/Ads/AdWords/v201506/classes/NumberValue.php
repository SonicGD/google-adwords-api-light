<?php


/**
 * Number value types for constructing number valued ranges.
 *
 *
 *
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class NumberValue extends ComparableValue
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201506";
    const XSI_TYPE = "NumberValue";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($ComparableValueType = null)
    {
        parent::__construct();
        $this->ComparableValueType = $ComparableValueType;
    }

}