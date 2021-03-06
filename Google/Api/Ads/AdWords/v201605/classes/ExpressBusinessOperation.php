<?php


/**
 * A typed {@link Operation} class that uses an instance of {@link ExpressBusiness} as its operand.
 *
 * <p class="note"><b>Note:</b> The <code>REMOVE</code> operator is not
 * supported. To remove an {@link ExpressBusiness}, set its {@link ExpressBusiness#status status}
 * to <code>DELETED</code>.</p>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class ExpressBusinessOperation extends Operation
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201605";
    const XSI_TYPE = "ExpressBusinessOperation";

    /**
     * @access public
     * @var ExpressBusiness
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