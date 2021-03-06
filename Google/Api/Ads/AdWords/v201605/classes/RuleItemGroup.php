<?php


/**
 * A group of rule items that are ANDed together.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class RuleItemGroup
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201605";
    const XSI_TYPE = "RuleItemGroup";

    /**
     * @access public
     * @var RuleItem[]
     */
    public $items;

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

    public function __construct($items = null)
    {
        $this->items = $items;
    }

}