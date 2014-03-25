<?php



/**
 * Holds information about a changed feed and any feeds items within the feed.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class FeedChangeData {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201402";
  const XSI_TYPE = "FeedChangeData";

  /**
   * @access public
   * @var integer
   */
  public $feedId;

  /**
   * @access public
   * @var tnsChangeStatus
   */
  public $feedChangeStatus;

  /**
   * @access public
   * @var integer[]
   */
  public $changedFeedItems;

  /**
   * @access public
   * @var integer[]
   */
  public $deletedFeedItems;

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

  public function __construct($feedId = null, $feedChangeStatus = null, $changedFeedItems = null, $deletedFeedItems = null) {
    $this->feedId = $feedId;
    $this->feedChangeStatus = $feedChangeStatus;
    $this->changedFeedItems = $changedFeedItems;
    $this->deletedFeedItems = $deletedFeedItems;
  }
}