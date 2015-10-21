<?php


/**
 * Represents a callout extension.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class CalloutFeedItem extends ExtensionFeedItem
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "CalloutFeedItem";

    /**
     * @access public
     * @var string
     */
    public $calloutText;

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
        $calloutText = null,
        $feedId = null,
        $feedItemId = null,
        $status = null,
        $feedType = null,
        $startTime = null,
        $endTime = null,
        $devicePreference = null,
        $scheduling = null,
        $policyData = null,
        $ExtensionFeedItemType = null
    ) {
        parent::__construct();
        $this->calloutText = $calloutText;
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