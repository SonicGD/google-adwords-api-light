<?php


/**
 * Conversion deduplication mode for Conversion Optimizer. That is, whether to
 * optimize for number of clicks that get at least one conversion, or total number
 * of conversions per click.
 *
 *
 *
 * Errors returned when Authentication failed.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class ConversionDeduplicationMode
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "ConversionDeduplicationMode";

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

    public function __construct()
    {
    }

}