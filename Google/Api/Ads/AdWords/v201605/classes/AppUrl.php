<?php


/**
 * A URL for deep linking into an app for the given operating system.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class AppUrl
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "AppUrl";

    /**
     * @access public
     * @var string
     */
    public $url;

    /**
     * @access public
     * @var tnsAppUrlOsType
     */
    public $osType;

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

    public function __construct($url = null, $osType = null)
    {
        $this->url = $url;
        $this->osType = $osType;
    }

}