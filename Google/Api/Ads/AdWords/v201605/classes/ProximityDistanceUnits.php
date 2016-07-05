<?php


/**
 * The radius distance is expressed in either kilometers or miles.
 *
 *
 *
 * Structure to specify an address location.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class ProximityDistanceUnits
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "Proximity.DistanceUnits";

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