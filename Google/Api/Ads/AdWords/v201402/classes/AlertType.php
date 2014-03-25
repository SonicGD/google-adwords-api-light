<?php


/**
 * Type of an alert.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AlertType
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201402";
    const XSI_TYPE = "AlertType";

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