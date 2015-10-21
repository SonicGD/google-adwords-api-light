<?php


/**
 * Operation for moving ManagedCustomer links. See {@link ManagedCustomerService#mutateManager}.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class MoveOperation extends Operation
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201509";
    const XSI_TYPE = "MoveOperation";

    /**
     * @access public
     * @var ManagedCustomerLink
     */
    public $operand;

    /**
     * @access public
     * @var integer
     */
    public $oldManagerCustomerId;

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

    public function __construct($operand = null, $oldManagerCustomerId = null, $operator = null, $OperationType = null)
    {
        parent::__construct();
        $this->operand = $operand;
        $this->oldManagerCustomerId = $oldManagerCustomerId;
        $this->operator = $operator;
        $this->OperationType = $OperationType;
    }

}