<?php


/**
 * Represents an App extension.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class AppFeedItem extends ExtensionFeedItem
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
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
        $appStore = null,
        $appId = null,
        $appLinkText = null,
        $appUrl = null,
        $feedId = null,
        $feedItemId = null,
        $status = null,
        $feedType = null,
        $startTime = null,
        $endTime = null,
        $devicePreference = null,
        $scheduling = null,
        $ExtensionFeedItemType = null
    ) {
        parent::__construct();
        $this->appStore = $appStore;
        $this->appId = $appId;
        $this->appLinkText = $appLinkText;
        $this->appUrl = $appUrl;
        $this->feedId = $feedId;
        $this->feedItemId = $feedItemId;
        $this->status = $status;
        $this->feedType = $feedType;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->devicePreference = $devicePreference;
        $this->scheduling = $scheduling;
        $this->ExtensionFeedItemType = $ExtensionFeedItemType;
    }
}
