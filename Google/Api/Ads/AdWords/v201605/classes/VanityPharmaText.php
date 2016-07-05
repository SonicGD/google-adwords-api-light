<?php


/**
 * Static text for Vanity Pharma URLs. This text with website descriptions will be
 * shown in the display URL when website description option for vanity pharma URLs
 * is selected.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class VanityPharmaText
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "VanityPharmaText";

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