<?php



/**
 * Holds information about a changed campaign and any ad groups under
 * that have changed.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CampaignChangeData {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201402";
  const XSI_TYPE = "CampaignChangeData";

  /**
   * @access public
   * @var integer
   */
  public $campaignId;

  /**
   * @access public
   * @var tnsChangeStatus
   */
  public $campaignChangeStatus;

  /**
   * @access public
   * @var AdGroupChangeData[]
   */
  public $changedAdGroups;

  /**
   * @access public
   * @var integer[]
   */
  public $addedCampaignCriteria;

  /**
   * @access public
   * @var integer[]
   */
  public $deletedCampaignCriteria;

  /**
   * @access public
   * @var integer[]
   */
  public $addedAdExtensions;

  /**
   * @access public
   * @var integer[]
   */
  public $deletedAdExtensions;

  /**
   * @access public
   * @var integer[]
   */
  public $changedFeeds;

  /**
   * @access public
   * @var integer[]
   */
  public $deletedFeeds;

  /**
   * @access public
   * @var boolean
   */
  public $campaignTargetingChanged;

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

  public function __construct($campaignId = null, $campaignChangeStatus = null, $changedAdGroups = null, $addedCampaignCriteria = null, $deletedCampaignCriteria = null, $addedAdExtensions = null, $deletedAdExtensions = null, $changedFeeds = null, $deletedFeeds = null, $campaignTargetingChanged = null) {
    $this->campaignId = $campaignId;
    $this->campaignChangeStatus = $campaignChangeStatus;
    $this->changedAdGroups = $changedAdGroups;
    $this->addedCampaignCriteria = $addedCampaignCriteria;
    $this->deletedCampaignCriteria = $deletedCampaignCriteria;
    $this->addedAdExtensions = $addedAdExtensions;
    $this->deletedAdExtensions = $deletedAdExtensions;
    $this->changedFeeds = $changedFeeds;
    $this->deletedFeeds = $deletedFeeds;
    $this->campaignTargetingChanged = $campaignTargetingChanged;
  }
}