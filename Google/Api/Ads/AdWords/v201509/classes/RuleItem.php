<?php


/**
 * An atomic rule fragment.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class RuleItem
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201509";
    const XSI_TYPE = "RuleItem";

    /**
     * @access public
     * @var DateRuleItem
     */
    public $DateRuleItem;

    /**
     * @access public
     * @var NumberRuleItem
     */
    public $NumberRuleItem;

    /**
     * @access public
     * @var StringRuleItem
     */
    public $StringRuleItem;

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

    public function __construct($DateRuleItem = null, $NumberRuleItem = null, $StringRuleItem = null)
    {
        $this->DateRuleItem = $DateRuleItem;
        $this->NumberRuleItem = $NumberRuleItem;
        $this->StringRuleItem = $StringRuleItem;
    }

}