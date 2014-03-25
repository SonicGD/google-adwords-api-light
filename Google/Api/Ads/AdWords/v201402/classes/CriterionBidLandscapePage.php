<?php


/**
 * Contains a subset of {@link CriterionBidLandscapePage} objects resulting from the
 * filtering and paging of
 * {@link com.google.ads.api.services.campaignmgmt.data.DataService#getCriterionBidLandscape}
 * call.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CriterionBidLandscapePage extends NoStatsPage
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "CriterionBidLandscapePage";

    /**
     * @access public
     * @var CriterionBidLandscape[]
     */
    public $entries;

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

    public function __construct($entries = null)
    {
        parent::__construct();
        $this->entries = $entries;
    }
}