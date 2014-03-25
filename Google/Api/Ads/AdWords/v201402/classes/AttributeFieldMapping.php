<?php



/**
 * Represents a mapping between a feed attribute and a placeholder field.
 * 
 * <p>For a list of feed placeholders, see
 * <a href="/adwords/api/docs/appendix/placeholders">
 * https://developers.google.com/adwords/api/docs/appendix/placeholders
 * </a></p>
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AttributeFieldMapping {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AttributeFieldMapping";

  /**
   * @access public
   * @var integer
   */
  public $feedAttributeId;

  /**
   * @access public
   * @var integer
   */
  public $fieldId;

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

  public function __construct($feedAttributeId = null, $fieldId = null) {
    $this->feedAttributeId = $feedAttributeId;
    $this->fieldId = $fieldId;
  }
}