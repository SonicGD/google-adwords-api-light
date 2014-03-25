<?php


/**
 * The various signals a negative location target may use.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class GeoTargetTypeSettingNegativeGeoTargetType
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "GeoTargetTypeSetting.NegativeGeoTargetType";

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