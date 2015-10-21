<?php


/**
 * Contains how many changes were made associated with an experiment at
 * the adgroup, critieria and creative levels
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class ExperimentSummaryStats
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "ExperimentSummaryStats";

    /**
     * @access public
     * @var integer
     */
    public $adGroupsCount;

    /**
     * @access public
     * @var integer
     */
    public $adGroupCriteriaCount;

    /**
     * @access public
     * @var integer
     */
    public $adGroupAdsCount;

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

    public function __construct($adGroupsCount = null, $adGroupCriteriaCount = null, $adGroupAdsCount = null)
    {
        $this->adGroupsCount = $adGroupsCount;
        $this->adGroupCriteriaCount = $adGroupCriteriaCount;
        $this->adGroupAdsCount = $adGroupAdsCount;
    }

}