<?php


/**
 * A {@link SearchParameter} used to indicate the locations being targeted.
 * This can be used, for example, to search for {@code KEYWORD}
 * {@link IdeaType}s that are best for Japan and Los Angeles.
 *
 * <p>This parameter replaces the {@code CountryTargetSearchParameter}.</p>
 *
 * <p>See the
 * <a href="https://developers.google.com/adwords/api/docs/appendix/geotargeting">Geographical
 * Targeting</a> page for the complete list of supported geo target types for this service.</p>
 *
 * <p>The service allows up to 10 locations to be targeted for KEYWORD requests and 50 locations
 * for PLACEMENT requests.</p>
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class LocationSearchParameter extends SearchParameter
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "LocationSearchParameter";

    /**
     * @access public
     * @var Location[]
     */
    public $locations;

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

    public function __construct($locations = null, $SearchParameterType = null)
    {
        parent::__construct();
        $this->locations = $locations;
        $this->SearchParameterType = $SearchParameterType;
    }

}