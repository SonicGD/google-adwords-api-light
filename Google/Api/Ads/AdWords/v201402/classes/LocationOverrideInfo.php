<?php


/**
 * Represents override info for ad level LocationExtension overrides.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class LocationOverrideInfo
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "LocationOverrideInfo";

    /**
     * @access public
     * @var integer
     */
    public $radius;

    /**
     * @access public
     * @var tnsLocationOverrideInfoRadiusUnits
     */
    public $radiusUnits;

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

    public function __construct($radius = null, $radiusUnits = null)
    {
        $this->radius = $radius;
        $this->radiusUnits = $radiusUnits;
    }
}