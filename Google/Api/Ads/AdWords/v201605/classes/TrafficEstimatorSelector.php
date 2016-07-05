<?php


/**
 * Contains a list of campaigns to perform a traffic estimate on.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class TrafficEstimatorSelector
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "TrafficEstimatorSelector";

    /**
     * @access public
     * @var CampaignEstimateRequest[]
     */
    public $campaignEstimateRequests;

    /**
     * @access public
     * @var boolean
     */
    public $platformEstimateRequested;

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

    public function __construct($campaignEstimateRequests = null, $platformEstimateRequested = null)
    {
        $this->campaignEstimateRequests = $campaignEstimateRequests;
        $this->platformEstimateRequested = $platformEstimateRequested;
    }

}