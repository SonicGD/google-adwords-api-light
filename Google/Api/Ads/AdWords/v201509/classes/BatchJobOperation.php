<?php


/**
 * An operation on a {@code BatchJob}.
 *
 * <p class="note"><b>Note:</b> Only the <code>ADD</code> and <code>SET</code>
 * operators are supported.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class BatchJobOperation extends Operation
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "BatchJobOperation";

    /**
     * @access public
     * @var BatchJob
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