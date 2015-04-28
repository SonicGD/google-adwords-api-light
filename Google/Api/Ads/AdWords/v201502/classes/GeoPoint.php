<?php


/**
 * Specifies a geo location with the supplied latitude/longitude.
 *
 *
 *
 * Structure to specify an address location.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class GeoPoint
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "GeoPoint";

    /**
     * @access public
     * @var integer
     */
    public $latitudeInMicroDegrees;

    /**
     * @access public
     * @var integer
     */
    public $longitudeInMicroDegrees;

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

    public function __construct($latitudeInMicroDegrees = null, $longitudeInMicroDegrees = null)
    {
        $this->latitudeInMicroDegrees = $latitudeInMicroDegrees;
        $this->longitudeInMicroDegrees = $longitudeInMicroDegrees;
    }
}
