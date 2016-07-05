<?php


/**
 * This operand specifies the income bracket a household falls under.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class IncomeOperand extends FunctionArgumentOperand
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "IncomeOperand";

    /**
     * @access public
     * @var tnsIncomeTier
     */
    public $tier;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($tier = null, $FunctionArgumentOperandType = null)
    {
        parent::__construct();
        $this->tier = $tier;
        $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
    }

}