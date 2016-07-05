<?php


/**
 * An operation to create or modify a managed customer.
 * <p class="note"><b>Note:</b>
 * <li><code>ADD</code> operator is supported in all API versions.</li>
 * <li><code>SET</code> operator is supported beginning with v201601.</li>
 * <li><code>REMOVE</code> operator is not supported.</li>
 * </p>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class ManagedCustomerOperation extends Operation
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201605";
    const XSI_TYPE = "ManagedCustomerOperation";

    /**
     * @access public
     * @var ManagedCustomer
     */
    public $operand;

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

    public function __construct($operand = null, $operator = null, $OperationType = null)
    {
        parent::__construct();
        $this->operand = $operand;
        $this->operator = $operator;
        $this->OperationType = $OperationType;
    }

}