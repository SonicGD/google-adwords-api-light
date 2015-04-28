<?php


/**
 * Adgroup level bid multipliers used in manual CPM bidding strategy.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class ManualCPMAdGroupExperimentBidMultipliers extends AdGroupExperimentBidMultipliers
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "ManualCPMAdGroupExperimentBidMultipliers";

    /**
     * @access public
     * @var BidMultiplier
     */
    public $maxCpmMultiplier;

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

    public function __construct($maxCpmMultiplier = null, $AdGroupExperimentBidMultipliersType = null)
    {
        parent::__construct();
        $this->maxCpmMultiplier = $maxCpmMultiplier;
        $this->AdGroupExperimentBidMultipliersType = $AdGroupExperimentBidMultipliersType;
    }
}
