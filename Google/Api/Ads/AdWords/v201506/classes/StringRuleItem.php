<?php


/**
 * An atomic rule fragment composing of string operation.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class StringRuleItem
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201506";
    const XSI_TYPE = "StringRuleItem";

    /**
     * @access public
     * @var StringKey
     */
    public $key;

    /**
     * @access public
     * @var tnsStringRuleItemStringOperator
     */
    public $op;

    /**
     * @access public
     * @var string
     */
    public $value;

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

    public function __construct($key = null, $op = null, $value = null)
    {
        $this->key = $key;
        $this->op = $op;
        $this->value = $value;
    }

}