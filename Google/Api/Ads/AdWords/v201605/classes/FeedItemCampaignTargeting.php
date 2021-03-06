<?php


/**
 * Specifies the campaign the request context must match in order for
 * the feed item to be considered eligible for serving (aka the targeted campaign).
 * E.g., if the below campaign targeting is set to campaignId = X, then the feed
 * item can only serve under campaign X.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class FeedItemCampaignTargeting
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "FeedItemCampaignTargeting";

    /**
     * @access public
     * @var integer
     */
    public $TargetingCampaignId;

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

    public function __construct($TargetingCampaignId = null)
    {
        $this->TargetingCampaignId = $TargetingCampaignId;
    }

}