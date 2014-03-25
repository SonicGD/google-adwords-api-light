<?php



/**
 * An operand in a function referring to a value in the request context.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RequestContextOperand extends FunctionArgumentOperand {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "RequestContextOperand";

  /**
   * @access public
   * @var tnsRequestContextOperandContextType
   */
  public $contextType;

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

  public function __construct($contextType = null, $FunctionArgumentOperandType = null) {
    parent::__construct();
    $this->contextType = $contextType;
    $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
  }
}