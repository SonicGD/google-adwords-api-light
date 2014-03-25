<?php


/**
 * Contains a list of campaigns to perform a traffic estimate on.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class TrafficEstimatorSelector
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201402";
    const XSI_TYPE = "TrafficEstimatorSelector";

    /**
     * @access public
     * @var CampaignEstimateRequest[]
     */
    public $campaignEstimateRequests;

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

    public function __construct($campaignEstimateRequests = null)
    {
        $this->campaignEstimateRequests = $campaignEstimateRequests;
    }
}