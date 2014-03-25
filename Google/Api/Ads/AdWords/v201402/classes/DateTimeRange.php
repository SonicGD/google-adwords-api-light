<?php



/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class DateTimeRange {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "DateTimeRange";

  /**
   * @access public
   * @var string
   */
  public $min;

  /**
   * @access public
   * @var string
   */
  public $max;

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

  public function __construct($min = null, $max = null) {
    $this->min = $min;
    $this->max = $max;
  }
}