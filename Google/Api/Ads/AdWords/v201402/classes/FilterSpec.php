<?php


/**
 * Describes how a result set of alerts should be filtered based on the triggering account's
 * ability to manage clients.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class FilterSpec
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201402";
    const XSI_TYPE = "FilterSpec";

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     *
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