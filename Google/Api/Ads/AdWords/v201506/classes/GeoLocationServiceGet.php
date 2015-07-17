<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Retrieves the geographic location information for the address specified.
 *
 * @param selector specifies the addresses.
 * @return list of {@link GeoLocation} objects. Returns {@link InvalidGeoLocation} object if
 *                 the address cannot be geocoded.
 * @throws ApiException if problems occurred while retrieving the location information
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class GeoLocationServiceGet
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201506";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var GeoLocationSelector
     */
    public $selector;

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

    public function __construct($selector = null)
    {
        $this->selector = $selector;
    }

}