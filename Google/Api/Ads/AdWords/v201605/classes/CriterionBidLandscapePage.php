<?php


/**
 * Contains a subset of {@link CriterionBidLandscapePage} objects resulting from the
 * filtering and paging of {@link DataService#getCriterionBidLandscape} call.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class CriterionBidLandscapePage extends NoStatsPage
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "CriterionBidLandscapePage";

    /**
     * @access public
     * @var CriterionBidLandscape[]
     */
    public $entries;

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

    public function __construct($entries = null)
    {
        parent::__construct();
        $this->entries = $entries;
    }

}