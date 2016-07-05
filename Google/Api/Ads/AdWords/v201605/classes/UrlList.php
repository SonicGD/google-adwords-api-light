<?php


/**
 * Wrapper POJO for a list of URLs.  The list can be cleared if a request contains
 * a UrlList with an empty urls list.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class UrlList
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "UrlList";

    /**
     * @access public
     * @var string[]
     */
    public $urls;

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

    public function __construct($urls = null)
    {
        $this->urls = $urls;
    }

}