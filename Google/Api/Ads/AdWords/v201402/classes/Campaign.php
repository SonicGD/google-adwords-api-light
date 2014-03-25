<?php



/**
 * Data representing an AdWords campaign.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Campaign {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "Campaign";

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
   * @var tnsCampaignStatus
   */
  public $status;

  /**
   * @access public
   * @var tnsServingStatus
   */
  public $servingStatus;

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
   * @var Budget
   */
  public $budget;

  /**
   * @access public
   * @var ConversionOptimizerEligibility
   */
  public $conversionOptimizerEligibility;

  /**
   * @access public
   * @var tnsAdServingOptimizationStatus
   */
  public $adServingOptimizationStatus;

  /**
   * @access public
   * @var FrequencyCap
   */
  public $frequencyCap;

  /**
   * @access public
   * @var Setting[]
   */
  public $settings;

  /**
   * @access public
   * @var tnsAdvertisingChannelType
   */
  public $advertisingChannelType;

  /**
   * @access public
   * @var NetworkSetting
   */
  public $networkSetting;

  /**
   * @access public
   * @var BiddingStrategyConfiguration
   */
  public $biddingStrategyConfiguration;

  /**
   * @access public
   * @var String_StringMapEntry[]
   */
  public $forwardCompatibilityMap;

  /**
   * @access public
   * @var boolean
   */
  public $displaySelect;

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

  public function __construct($id = null, $name = null, $status = null, $servingStatus = null, $startDate = null, $endDate = null, $budget = null, $conversionOptimizerEligibility = null, $adServingOptimizationStatus = null, $frequencyCap = null, $settings = null, $advertisingChannelType = null, $networkSetting = null, $biddingStrategyConfiguration = null, $forwardCompatibilityMap = null, $displaySelect = null) {
    $this->id = $id;
    $this->name = $name;
    $this->status = $status;
    $this->servingStatus = $servingStatus;
    $this->startDate = $startDate;
    $this->endDate = $endDate;
    $this->budget = $budget;
    $this->conversionOptimizerEligibility = $conversionOptimizerEligibility;
    $this->adServingOptimizationStatus = $adServingOptimizationStatus;
    $this->frequencyCap = $frequencyCap;
    $this->settings = $settings;
    $this->advertisingChannelType = $advertisingChannelType;
    $this->networkSetting = $networkSetting;
    $this->biddingStrategyConfiguration = $biddingStrategyConfiguration;
    $this->forwardCompatibilityMap = $forwardCompatibilityMap;
    $this->displaySelect = $displaySelect;
  }
}