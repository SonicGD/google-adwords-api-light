<?php



/**
 * A function operand in a matching function.
 * Used to represent nested functions.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class FunctionOperand extends FunctionArgumentOperand {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "FunctionOperand";

  /**
   * @access public
   * @var Function
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

  public function __construct($value = null, $FunctionArgumentOperandType = null) {
    parent::__construct();
    $this->value = $value;
    $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
  }
}