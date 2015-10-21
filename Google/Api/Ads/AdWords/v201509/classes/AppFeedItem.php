<?php


/**
 * Represents an App extension.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class AppFeedItem extends ExtensionFeedItem
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
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

    public function __construct($appStore = null, $appId = null, $appLinkText = null, $appUrl = null, $appFinalUrls = null, $appFinalMobileUrls = null, $appTrackingUrlTemplate = null, $appUrlCustomParameters = null, $feedId = null, $feedItemId = null, $status = null, $feedType = null, $startTime = null, $endTime = null, $devicePreference = null, $scheduling = null, $policyData = null, $ExtensionFeedItemType = null)
    {
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
        $this->policyData = $policyData;
        $this->ExtensionFeedItemType = $ExtensionFeedItemType;
    }

}