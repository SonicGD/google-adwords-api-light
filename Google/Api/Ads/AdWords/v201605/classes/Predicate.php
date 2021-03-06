<?php


/**
 * Specifies how an entity (eg. adgroup, campaign, criterion, ad) should be filtered.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class Predicate
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "Predicate";

    /**
     * @access public
     * @var string
     */
    public $field;

    /**
     * @access public
     * @var tnsPredicateOperator
     */
    public $operator;

    /**
     * @access public
     * @var string[]
     */
    public $values;

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

    public function __construct($field = null, $operator = null, $values = null)
    {
        $this->field = $field;
        $this->operator = $operator;
        $this->values = $values;
    }

}