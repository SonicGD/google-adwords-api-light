<?php



/**
 * Represents additional override info with which to augment the override
 * extension.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class OverrideInfo {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "OverrideInfo";

  /**
   * @access public
   * @var LocationOverrideInfo
   */
  public $LocationOverrideInfo;

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

  public function __construct($LocationOverrideInfo = null) {
    $this->LocationOverrideInfo = $LocationOverrideInfo;
  }
}