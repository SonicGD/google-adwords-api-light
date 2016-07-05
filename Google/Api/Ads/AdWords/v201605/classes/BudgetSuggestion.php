<?php


/**
 * A budget suggestion and its associated data (all are estimates).
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class BudgetSuggestion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201605";
    const XSI_TYPE = "BudgetSuggestion";

    /**
     * @access public
     * @var Money
     */
    public $cpc;

    /**
     * @access public
     * @var Money
     */
    public $minCpc;

    /**
     * @access public
     * @var Money
     */
    public $maxCpc;

    /**
     * @access public
     * @var Money
     */
    public $cpm;

    /**
     * @access public
     * @var Money
     */
    public $suggestedBudget;

    /**
     * @access public
     * @var Money
     */
    public $minBudget;

    /**
     * @access public
     * @var Money
     */
    public $maxBudget;

    /**
     * @access public
     * @var integer
     */
    public $impressions;

    /**
     * @access public
     * @var tnsCurrencyCode
     */
    public $currencyCode;

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
        $cpc = null,
        $minCpc = null,
        $maxCpc = null,
        $cpm = null,
        $suggestedBudget = null,
        $minBudget = null,
        $maxBudget = null,
        $impressions = null,
        $currencyCode = null
    ) {
        $this->cpc = $cpc;
        $this->minCpc = $minCpc;
        $this->maxCpc = $maxCpc;
        $this->cpm = $cpm;
        $this->suggestedBudget = $suggestedBudget;
        $this->minBudget = $minBudget;
        $this->maxBudget = $maxBudget;
        $this->impressions = $impressions;
        $this->currencyCode = $currencyCode;
    }

}