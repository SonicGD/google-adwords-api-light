<?php


/**
 * Represents an App extension.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class AppFeedItem extends ExtensionFeedItem
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "AppFeedItem";

    /**
     * @access public
     * @var tnsAppFeedItemAppStore
     */
    public $appStore;

    /**
     * @access public
     * @var string
     */
    public $appId;

    /**
     * @access public
     * @var string
     */
    public $appLinkText;

    /**
     * @access public
     * @var string
     */
    public $appUrl;

    /**
     * @access public
     * @var UrlList
     */
    public $appFinalUrls;

    /**
     * @access public
     * @var UrlList
     */
    public $appFinalMobileUrls;

    /**
     * @access public
     * @var string
     */
    public $appTrackingUrlTemplate;

    /**
     * @access public
     * @var CustomParameters
     */
    public $appUrlCustomParameters;

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
        $appStore = null,
        $appId = null,
        $appLinkText = null,
        $appUrl = null,
        $appFinalUrls = null,
        $appFinalMobileUrls = null,
        $appTrackingUrlTemplate = null,
        $appUrlCustomParameters = null,
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
        $this->appStore = $appStore;
        $this->appId = $appId;
        $this->appLinkText = $appLinkText;
        $this->appUrl = $appUrl;
        $this->appFinalUrls = $appFinalUrls;
        $this->appFinalMobileUrls = $appFinalMobileUrls;
        $this->appTrackingUrlTemplate = $appTrackingUrlTemplate;
        $this->appUrlCustomParameters = $appUrlCustomParameters;
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