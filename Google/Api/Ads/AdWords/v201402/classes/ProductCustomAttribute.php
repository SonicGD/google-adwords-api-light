<?php



/**
 * A custom attribute value. As a product can have multiple custom attributes, the user must specify
 * a dimension type that indicates the index of the attribute by which to subdivide. All cases of
 * the same subdivision must have the same dimension type (attribute index).
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ProductCustomAttribute extends ProductDimension {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ProductCustomAttribute";

  /**
   * @access public
   * @var tnsProductDimensionType
   */
  public $type;

  /**
   * @access public
   * @var string
   */
  public $value;

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

  public function __construct($type = null, $value = null, $ProductDimensionType = null) {
    parent::__construct();
    $this->type = $type;
    $this->value = $value;
    $this->ProductDimensionType = $ProductDimensionType;
  }
}