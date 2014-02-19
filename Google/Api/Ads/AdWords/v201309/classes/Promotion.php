<?php


/**
 * A promotion for a business. It contains all the user specified data as needed by AdWords Express
 * to generate AdWords campaigns.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Promotion
{
    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsPromotionStatus
     */
    public $status;

    /**
     * @access public
     * @var Creative[]
     */
    public $creatives;

    /**
     * @access public
     * @var string
     */
    public $destinationUrl;

    /**
     * @access public
     * @var boolean
     */
    public $streetAddressVisible;

    /**
     * @access public
     * @var boolean
     */
    public $callTrackingEnabled;

    /**
     * @access public
     * @var Money
     */
    public $budget;

    /**
     * @access public
     * @var Criterion[]
     */
    public $criteria;

    /**
     * @access public
     * @var integer[]
     */
    public $campaignIds;

    /**
     * @access public
     * @var Money
     */
    public $remainingBudget;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/express/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "Promotion";
    }

    public function __construct(
        $id = null,
        $name = null,
        $status = null,
        $creatives = null,
        $destinationUrl = null,
        $streetAddressVisible = null,
        $callTrackingEnabled = null,
        $budget = null,
        $criteria = null,
        $campaignIds = null,
        $remainingBudget = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->creatives = $creatives;
        $this->destinationUrl = $destinationUrl;
        $this->streetAddressVisible = $streetAddressVisible;
        $this->callTrackingEnabled = $callTrackingEnabled;
        $this->budget = $budget;
        $this->criteria = $criteria;
        $this->campaignIds = $campaignIds;
        $this->remainingBudget = $remainingBudget;
    }
}