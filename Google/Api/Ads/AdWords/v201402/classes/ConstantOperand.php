<?php


/**
 * A constant operand in a matching function.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ConstantOperand extends FunctionArgumentOperand
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "ConstantOperand";

    /**
     * @access public
     * @var tnsConstantOperandConstantType
     */
    public $type;

    /**
     * @access public
     * @var integer
     */
    public $longValue;

    /**
     * @access public
     * @var boolean
     */
    public $booleanValue;

    /**
     * @access public
     * @var double
     */
    public $doubleValue;

    /**
     * @access public
     * @var string
     */
    public $stringValue;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct(
        $type = null,
        $longValue = null,
        $booleanValue = null,
        $doubleValue = null,
        $stringValue = null,
        $FunctionArgumentOperandType = null
    ) {
        parent::__construct();
        $this->type = $type;
        $this->longValue = $longValue;
        $this->booleanValue = $booleanValue;
        $this->doubleValue = $doubleValue;
        $this->stringValue = $stringValue;
        $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
    }
}