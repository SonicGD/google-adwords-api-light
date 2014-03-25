<?php


/**
 * Represents an item in a feed.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class FeedItem
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "FeedItem";

    /**
     * @access public
     * @var integer
     */
    public $feedId;

    /**
     * @access public
     * @var integer
     */
    public $feedItemId;

    /**
     * @access public
     * @var tnsFeedItemStatus
     */
    public $status;

    /**
     * @access public
     * @var string
     */
    public $startTime;

    /**
     * @access public
     * @var string
     */
    public $endTime;

    /**
     * @access public
     * @var FeedItemAttributeValue[]
     */
    public $attributeValues;

    /**
     * @access public
     * @var FeedItemValidationDetail[]
     */
    public $validationDetails;

    /**
     * @access public
     * @var FeedItemDevicePreference
     */
    public $devicePreference;

    /**
     * @access public
     * @var FeedItemScheduling
     */
    public $scheduling;

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

    public function __construct(
        $feedId = null,
        $feedItemId = null,
        $status = null,
        $startTime = null,
        $endTime = null,
        $attributeValues = null,
        $validationDetails = null,
        $devicePreference = null,
        $scheduling = null
    ) {
        $this->feedId = $feedId;
        $this->feedItemId = $feedItemId;
        $this->status = $status;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->attributeValues = $attributeValues;
        $this->validationDetails = $validationDetails;
        $this->devicePreference = $devicePreference;
        $this->scheduling = $scheduling;
    }
}