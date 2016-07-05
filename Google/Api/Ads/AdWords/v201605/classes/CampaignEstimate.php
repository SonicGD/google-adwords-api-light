<?php


/**
 * Represents the estimate results for a single campaign.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class CampaignEstimate extends Estimate
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "CampaignEstimate";

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var AdGroupEstimate[]
     */
    public $adGroupEstimates;

    /**
     * @access public
     * @var PlatformCampaignEstimate[]
     */
    public $platformEstimates;

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

    public function __construct(
        $campaignId = null,
        $adGroupEstimates = null,
        $platformEstimates = null,
        $EstimateType = null
    ) {
        parent::__construct();
        $this->campaignId = $campaignId;
        $this->adGroupEstimates = $adGroupEstimates;
        $this->platformEstimates = $platformEstimates;
        $this->EstimateType = $EstimateType;
    }

}