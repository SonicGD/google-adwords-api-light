<?php


/**
 * An atomic rule fragment composing of number operation.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class NumberRuleItem
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201605";
    const XSI_TYPE = "NumberRuleItem";

    /**
     * @access public
     * @var NumberKey
     */
    public $key;

    /**
     * @access public
     * @var tnsNumberRuleItemNumberOperator
     */
    public $op;

    /**
     * @access public
     * @var double
     */
    public $value;

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

    public function __construct($key = null, $op = null, $value = null)
    {
        $this->key = $key;
        $this->op = $op;
        $this->value = $value;
    }

}