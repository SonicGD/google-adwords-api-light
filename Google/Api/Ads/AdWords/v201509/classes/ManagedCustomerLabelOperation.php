<?php


/**
 * An operation to apply or remove an account label from a managed customer.
 *
 * <p class="note"><b>Note:</b> The {@code SET} operator is not supported.</p>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class ManagedCustomerLabelOperation extends Operation
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201509";
    const XSI_TYPE = "ManagedCustomerLabelOperation";

    /**
     * @access public
     * @var ManagedCustomerLabel
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