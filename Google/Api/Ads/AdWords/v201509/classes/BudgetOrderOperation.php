<?php


/**
 * Operation for {@link BudgetOrder}.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class BudgetOrderOperation extends Operation
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/billing/v201509";
    const XSI_TYPE = "BudgetOrderOperation";

    /**
     * @access public
     * @var BudgetOrder
     */
    public $operand;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($operand = null, $operator = null, $OperationType = null)
    {
        parent::__construct();
        $this->operand = $operand;
        $this->operator = $operator;
        $this->OperationType = $OperationType;
    }

}