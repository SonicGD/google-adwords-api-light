<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Represents an item in a feed.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class FeedItem
{
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
        return "https://adwords.google.com/api/adwords/cm/v201306";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "FeedItem";
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