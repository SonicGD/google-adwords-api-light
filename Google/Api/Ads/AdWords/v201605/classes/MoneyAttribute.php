<?php


/**
 * {@link Attribute} type that contains a {@link Money} value.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class MoneyAttribute extends Attribute
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "MoneyAttribute";

    /**
     * @access public
     * @var Money
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

    public function __construct($value = null, $AttributeType = null)
    {
        parent::__construct();
        $this->value = $value;
        $this->AttributeType = $AttributeType;
    }

}