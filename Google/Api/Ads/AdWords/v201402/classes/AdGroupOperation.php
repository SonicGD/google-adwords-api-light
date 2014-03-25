<?php



/**
 * AdGroup operations for adding/updating/removing adgroups.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupOperation extends Operation {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AdGroupOperation";

  /**
   * @access public
   * @var AdGroup
   */
  public $operand;

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

  public function __construct($operand = null, $operator = null, $OperationType = null) {
    parent::__construct();
    $this->operand = $operand;
    $this->operator = $operator;
    $this->OperationType = $OperationType;
  }
}