<?php


/**
 * A group of rule items that are ANDed together.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class RuleItemGroup
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201506";
    const XSI_TYPE = "RuleItemGroup";

    /**
     * @access public
     * @var RuleItem[]
     */
    public $items;

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

    public function __construct($items = null)
    {
        $this->items = $items;
    }

}