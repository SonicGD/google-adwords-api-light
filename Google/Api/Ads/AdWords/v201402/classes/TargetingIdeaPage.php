<?php



/**
 * Contains a subset of {@link TargetingIdea}s from the search criteria
 * specified by a {@link TargetingIdeaSelector}.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class TargetingIdeaPage {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201402";
  const XSI_TYPE = "TargetingIdeaPage";

  /**
   * @access public
   * @var integer
   */
  public $totalNumEntries;

  /**
   * @access public
   * @var TargetingIdea[]
   */
  public $entries;

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

  public function __construct($totalNumEntries = null, $entries = null) {
    $this->totalNumEntries = $totalNumEntries;
    $this->entries = $entries;
  }
}