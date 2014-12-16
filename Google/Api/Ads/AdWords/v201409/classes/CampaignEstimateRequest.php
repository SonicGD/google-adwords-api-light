<?php



  /**
   * Represents a campaign that will be estimated.<p>
   * 
   * Returns traffic estimates for the requested set of campaigns.
   * The campaigns can be all new or all existing, or a mixture of
   * new and existing. Only existing campaigns may contain estimates for existing
   * ad groups.<p>
   * 
   * For existing campaigns, the campaign and optionally the ad group will be
   * used as context to produce more accurate estimates. Traffic estimates may
   * only be requested on keywords, so regardless of whether campaign and ad group
   * IDs are provided or left blank, at least one keyword is required to estimate
   * traffic.<p>
   * 
   * To make a keyword estimates request in which estimates do not consider
   * existing account information (e.g. historical ad group performance), set
   * {@link #campaignId} to {@code null}.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class CampaignEstimateRequest extends EstimateRequest {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201409";
    const XSI_TYPE = "CampaignEstimateRequest";

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var AdGroupEstimateRequest[]
     */
    public $adGroupEstimateRequests;

    /**
     * @access public
     * @var Criterion[]
     */
    public $criteria;

    /**
     * @access public
     * @var NetworkSetting
     */
    public $networkSetting;

    /**
     * @access public
     * @var Money
     */
    public $dailyBudget;

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

    public function __construct($campaignId = null, $adGroupEstimateRequests = null, $criteria = null, $networkSetting = null, $dailyBudget = null, $EstimateRequestType = null) {
      parent::__construct();
      $this->campaignId = $campaignId;
      $this->adGroupEstimateRequests = $adGroupEstimateRequests;
      $this->criteria = $criteria;
      $this->networkSetting = $networkSetting;
      $this->dailyBudget = $dailyBudget;
      $this->EstimateRequestType = $EstimateRequestType;
    }

  }