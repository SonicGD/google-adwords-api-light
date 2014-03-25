<?php



/**
 * Base interface for types of display ads.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class DisplayType {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201402";
  const XSI_TYPE = "DisplayType";

  /**
   * @access public
   * @var FlashDisplayType
   */
  public $FlashDisplayType;

  /**
   * @access public
   * @var HtmlDisplayType
   */
  public $HtmlDisplayType;

  /**
   * @access public
   * @var ImageDisplayType
   */
  public $ImageDisplayType;

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

  public function __construct($FlashDisplayType = null, $HtmlDisplayType = null, $ImageDisplayType = null) {
    $this->FlashDisplayType = $FlashDisplayType;
    $this->HtmlDisplayType = $HtmlDisplayType;
    $this->ImageDisplayType = $ImageDisplayType;
  }
}