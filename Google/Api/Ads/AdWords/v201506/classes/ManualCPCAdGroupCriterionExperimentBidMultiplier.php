<?php


/**
 * AdGroupCriterion level bid multiplier used in manual CPC bidding strategies.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class ManualCPCAdGroupCriterionExperimentBidMultiplier extends AdGroupCriterionExperimentBidMultiplier
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201506";
    const XSI_TYPE = "ManualCPCAdGroupCriterionExperimentBidMultiplier";

    /**
     * @access public
     * @var BidMultiplier
     */
    public $maxCpcMultiplier;

    /**
     * @access public
     * @var tnsMultiplierSource
     */
    public $multiplierSource;

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

    public function __construct(
        $maxCpcMultiplier = null,
        $multiplierSource = null,
        $AdGroupCriterionExperimentBidMultiplierType = null
    ) {
        parent::__construct();
        $this->maxCpcMultiplier = $maxCpcMultiplier;
        $this->multiplierSource = $multiplierSource;
        $this->AdGroupCriterionExperimentBidMultiplierType = $AdGroupCriterionExperimentBidMultiplierType;
    }

}