<?php


/**
 * Represents data that encapsulates a location criterion.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class LocationCriterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "LocationCriterion";

    /**
     * @access public
     * @var Location
     */
    public $location;

    /**
     * @access public
     * @var string
     */
    public $canonicalName;

    /**
     * @access public
     * @var integer
     */
    public $reach;

    /**
     * @access public
     * @var string
     */
    public $locale;

    /**
     * @access public
     * @var string
     */
    public $searchTerm;

    /**
     * @access public
     * @var string
     */
    public $countryCode;

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

    public function __construct(
        $location = null,
        $canonicalName = null,
        $reach = null,
        $locale = null,
        $searchTerm = null,
        $countryCode = null
    ) {
        $this->location = $location;
        $this->canonicalName = $canonicalName;
        $this->reach = $reach;
        $this->locale = $locale;
        $this->searchTerm = $searchTerm;
        $this->countryCode = $countryCode;
    }
}