<?php


/**
 * Specification for a text ad. The presence of a {@code TextAdSpec} in a
 * request indicates that text ads are a desired result, and the presence
 * of a {@code TextAdSpec} in a response indicates that there are text
 * ads available in the requested inventory.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class TextAdSpec
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201502";
    const XSI_TYPE = "TextAdSpec";

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

    public function __construct()
    {
    }
}
