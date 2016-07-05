<?php


/**
 * AdGroupFeeds are used to link a feed to an adgroup using a matching function,
 * making the feed's feed items available in the adgroup's ads for substitution.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class AdGroupFeed
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "AdGroupFeed";

    /**
     * @access public
     * @var integer
     */
    public $feedId;

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var Function
     */
    public $matchingFunction;

    /**
     * @access public
     * @var integer[]
     */
    public $placeholderTypes;

    /**
     * @access public
     * @var tnsAdGroupFeedStatus
     */
    public $status;

    /**
     * @access public
     * @var integer
     */
    public $baseCampaignId;

    /**
     * @access public
     * @var integer
     */
    public $baseAdGroupId;

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
        $feedId = null,
        $adGroupId = null,
        $matchingFunction = null,
        $placeholderTypes = null,
        $status = null,
        $baseCampaignId = null,
        $baseAdGroupId = null
    ) {
        $this->feedId = $feedId;
        $this->adGroupId = $adGroupId;
        $this->matchingFunction = $matchingFunction;
        $this->placeholderTypes = $placeholderTypes;
        $this->status = $status;
        $this->baseCampaignId = $baseCampaignId;
        $this->baseAdGroupId = $baseAdGroupId;
    }

}