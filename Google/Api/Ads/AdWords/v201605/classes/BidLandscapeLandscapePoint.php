<?php


/**
 * A set of estimates for a criterion's performance for a specific bid
 * amount.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class BidLandscapeLandscapePoint
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "BidLandscape.LandscapePoint";

    /**
     * @access public
     * @var Money
     */
    public $bid;

    /**
     * @access public
     * @var integer
     */
    public $clicks;

    /**
     * @access public
     * @var Money
     */
    public $cost;

    /**
     * @access public
     * @var integer
     */
    public $impressions;

    /**
     * @access public
     * @var integer
     */
    public $promotedImpressions;

    /**
     * @access public
     * @var Money
     */
    public $requiredBudget;

    /**
     * @access public
     * @var double
     */
    public $bidModifier;

    /**
     * @access public
     * @var integer
     */
    public $totalLocalImpressions;

    /**
     * @access public
     * @var integer
     */
    public $totalLocalClicks;

    /**
     * @access public
     * @var Money
     */
    public $totalLocalCost;

    /**
     * @access public
     * @var integer
     */
    public $totalLocalPromotedImpressions;

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
        $bid = null,
        $clicks = null,
        $cost = null,
        $impressions = null,
        $promotedImpressions = null,
        $requiredBudget = null,
        $bidModifier = null,
        $totalLocalImpressions = null,
        $totalLocalClicks = null,
        $totalLocalCost = null,
        $totalLocalPromotedImpressions = null
    ) {
        $this->bid = $bid;
        $this->clicks = $clicks;
        $this->cost = $cost;
        $this->impressions = $impressions;
        $this->promotedImpressions = $promotedImpressions;
        $this->requiredBudget = $requiredBudget;
        $this->bidModifier = $bidModifier;
        $this->totalLocalImpressions = $totalLocalImpressions;
        $this->totalLocalClicks = $totalLocalClicks;
        $this->totalLocalCost = $totalLocalCost;
        $this->totalLocalPromotedImpressions = $totalLocalPromotedImpressions;
    }

}