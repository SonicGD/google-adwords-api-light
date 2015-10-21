<?php


/**
 * Wrapper object for a list of AppUrls. The list can be cleared if a request contains
 * an AppUrlList with an empty urls list.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class AppUrlList
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "AppUrlList";

    /**
     * @access public
     * @var AppUrl[]
     */
    public $appUrls;

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

    public function __construct($appUrls = null)
    {
        $this->appUrls = $appUrls;
    }

}