<?php



/**
 * Page of media returned by the {@link MediaService} which includes
 * the media.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class MediaPage {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "MediaPage";

  /**
   * @access public
   * @var Media[]
   */
  public $entries;

  /**
   * @access public
   * @var integer
   */
  public $totalNumEntries;

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

  public function __construct($entries = null, $totalNumEntries = null) {
    $this->entries = $entries;
    $this->totalNumEntries = $totalNumEntries;
  }
}