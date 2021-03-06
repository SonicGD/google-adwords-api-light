<?php


/**
 * Represents a Review extension.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class ReviewFeedItem extends ExtensionFeedItem
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "ReviewFeedItem";

    /**
     * @access public
     * @var string
     */
    public $reviewText;

    /**
     * @access public
     * @var string
     */
    public $reviewSourceName;

    /**
     * @access public
     * @var string
     */
    public $reviewSourceUrl;

    /**
     * @access public
     * @var boolean
     */
    public $reviewTextExactlyQuoted;

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
        $reviewText = null,
        $reviewSourceName = null,
        $reviewSourceUrl = null,
        $reviewTextExactlyQuoted = null,
        $feedId = null,
        $feedItemId = null,
        $status = null,
        $feedType = null,
        $startTime = null,
        $endTime = null,
        $devicePreference = null,
        $scheduling = null,
        $campaignTargeting = null,
        $adGroupTargeting = null,
        $keywordTargeting = null,
        $geoTargeting = null,
        $policyData = null,
        $ExtensionFeedItemType = null
    ) {
        parent::__construct();
        $this->reviewText = $reviewText;
        $this->reviewSourceName = $reviewSourceName;
        $this->reviewSourceUrl = $reviewSourceUrl;
        $this->reviewTextExactlyQuoted = $reviewTextExactlyQuoted;
        $this->feedId = $feedId;
        $this->feedItemId = $feedItemId;
        $this->status = $status;
        $this->feedType = $feedType;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->devicePreference = $devicePreference;
        $this->scheduling = $scheduling;
        $this->campaignTargeting = $campaignTargeting;
        $this->adGroupTargeting = $adGroupTargeting;
        $this->keywordTargeting = $keywordTargeting;
        $this->geoTargeting = $geoTargeting;
        $this->policyData = $policyData;
        $this->ExtensionFeedItemType = $ExtensionFeedItemType;
    }

}