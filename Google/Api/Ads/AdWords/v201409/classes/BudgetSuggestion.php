<?php



  /**
   * A budget suggestion and its associated data (all are estimates).
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class BudgetSuggestion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201409";
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
     * @var Money[]
     */
    public $budgetQuantiles;

    /**
     * @access public
     * @var integer
     */
    public $impressions;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($cpc = null, $minCpc = null, $maxCpc = null, $cpm = null, $suggestedBudget = null, $minBudget = null, $maxBudget = null, $budgetQuantiles = null, $impressions = null) {
      $this->cpc = $cpc;
      $this->minCpc = $minCpc;
      $this->maxCpc = $maxCpc;
      $this->cpm = $cpm;
      $this->suggestedBudget = $suggestedBudget;
      $this->minBudget = $minBudget;
      $this->maxBudget = $maxBudget;
      $this->budgetQuantiles = $budgetQuantiles;
      $this->impressions = $impressions;
    }

  }