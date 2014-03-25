<?php



/**
 * Object representing double comparison operations. This is usually used within
 * a particular
 * {@link com.google.ads.api.services.targetingideas.search.SearchParameter} to
 * specify the valid values requested for the specific
 * {@link com.google.ads.api.services.common.optimization.attributes.Attribute}.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class DoubleComparisonOperation {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201402";
  const XSI_TYPE = "DoubleComparisonOperation";

  /**
   * @access public
   * @var double
   */
  public $minimum;

  /**
   * @access public
   * @var double
   */
  public $maximum;

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

  public function __construct($minimum = null, $maximum = null) {
    $this->minimum = $minimum;
    $this->maximum = $maximum;
  }
}