<?php


/**
 * Contains base extension feed item data for an extension in an extension feed managed by AdWords.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class ExtensionFeedItem
{

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
  const XSI_TYPE = "ExtensionFeedItem";

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
   * @var tnsFeedType
   */
  public $feedType;

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
   * @var FeedItemDevicePreference
   */
  public $devicePreference;

  /**
   * @access public
   * @var FeedItemScheduling
   */
  public $scheduling;

  /**
   * @access public
   * @var FeedItemCampaignTargeting
   */
  public $campaignTargeting;

  /**
   * @access public
   * @var FeedItemAdGroupTargeting
   */
  public $adGroupTargeting;

  /**
   * @access public
   * @var Keyword
   */
  public $keywordTargeting;

  /**
   * @access public
   * @var Location
   */
  public $geoTargeting;

  /**
   * @access public
   * @var FeedItemPolicyData[]
   */
  public $policyData;

  /**
   * @access public
   * @var string
   */
  public $ExtensionFeedItemType;
  private $_parameterMap = [
      "ExtensionFeedItem.Type" => "ExtensionFeedItemType",
  ];

  /**
   * Provided for setting non-php-standard named variables
   * @param $var   Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value)
  {
    $this->{$this->_parameterMap[$var]} = $value;
  }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get
   * @return mixed Variable value
   */
  public function __get($var)
  {
    if (!isset($this->_parameterMap[$var])) {
      return null;
    }
    return $this->{$this->_parameterMap[$var]};
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap()
  {
    return $this->_parameterMap;
  }

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
      $feedId = null,
      $feedItemId = null,
      $status = null,
      $feedType = null,
      $startTime = null,
      $endTime = null,
      $devicePreference = null,
      $scheduling = null,
      $campaignTargeting = null,
      $adGroupTargeting = null,
      $keywordTargeting = null,
      $geoTargeting = null,
      $policyData = null,
      $ExtensionFeedItemType = null
  ) {
    $this->feedId = $feedId;
    $this->feedItemId = $feedItemId;
    $this->status = $status;
    $this->feedType = $feedType;
    $this->startTime = $startTime;
    $this->endTime = $endTime;
    $this->devicePreference = $devicePreference;
    $this->scheduling = $scheduling;
    $this->campaignTargeting = $campaignTargeting;
    $this->adGroupTargeting = $adGroupTargeting;
    $this->keywordTargeting = $keywordTargeting;
    $this->geoTargeting = $geoTargeting;
    $this->policyData = $policyData;
    $this->ExtensionFeedItemType = $ExtensionFeedItemType;
  }

}