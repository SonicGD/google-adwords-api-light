<?php


/**
 * A {@link SearchParameter} for {@code PLACEMENT} {@link IdeaType}s
 * used to filter results based on the type of website, known as
 * {@link com.google.ads.api.services.targetingideas.attributes.Type#PLACEMENT_TYPE},
 * that they appear in. For example, searches may be limited to find
 * results that only appear within mobile websites or feeds.
 * <p>This element is supported by following {@link IdeaType}s: PLACEMENT.
 * <p>This element is supported by following {@link RequestType}s: IDEAS.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class PlacementTypeSearchParameter extends SearchParameter
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201402";
    const XSI_TYPE = "PlacementTypeSearchParameter";

    /**
     * @access public
     * @var tnsSiteConstantsPlacementType[]
     */
    public $placementTypes;

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

    public function __construct($placementTypes = null, $SearchParameterType = null)
    {
        parent::__construct();
        $this->placementTypes = $placementTypes;
        $this->SearchParameterType = $SearchParameterType;
    }
}