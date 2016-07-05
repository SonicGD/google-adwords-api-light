<?php


/**
 * Operation for modifying ManagedCustomer links. See {@link ManagedCustomerService#mutateLink}.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class LinkOperation extends Operation
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201605";
    const XSI_TYPE = "LinkOperation";

    /**
     * @access public
     * @var ManagedCustomerLink
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