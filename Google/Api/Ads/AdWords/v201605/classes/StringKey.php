<?php


/**
 * Custom parameter of type string. For websites, there are two built-in parameters
 * URL (name = 'url__') and referrer URL (name = 'ref_url__').
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class StringKey
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201605";
    const XSI_TYPE = "StringKey";

    /**
     * @access public
     * @var string
     */
    public $name;

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

    public function __construct($name = null)
    {
        $this->name = $name;
    }

}