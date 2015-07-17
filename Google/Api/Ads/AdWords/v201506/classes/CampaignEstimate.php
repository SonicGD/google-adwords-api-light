<?php


/**
 * Represents the estimate results for a single campaign.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class CampaignEstimate extends Estimate
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201506";
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

    public function __construct($campaignId = null, $adGroupEstimates = null, $EstimateType = null)
    {
        parent::__construct();
        $this->campaignId = $campaignId;
        $this->adGroupEstimates = $adGroupEstimates;
        $this->EstimateType = $EstimateType;
    }

}