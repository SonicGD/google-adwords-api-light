<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Represents data about a bid landscape for an ad group or criterion.
 *
 *
 *
 * Represents data about a bidlandscape for an adgroup.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BidLandscape extends DataEntry
{
    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var string
     */
    public $startDate;

    /**
     * @access public
     * @var string
     */
    public $endDate;

    /**
     * @access public
     * @var BidLandscapeLandscapePoint[]
     */
    public $landscapePoints;

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
        return "";
    }

    public function __construct(
        $campaignId = null,
        $adGroupId = null,
        $startDate = null,
        $endDate = null,
        $landscapePoints = null,
        $DataEntryType = null
    ) {
        parent::__construct();
        $this->campaignId = $campaignId;
        $this->adGroupId = $adGroupId;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->landscapePoints = $landscapePoints;
        $this->DataEntryType = $DataEntryType;
    }
}