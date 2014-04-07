<?php


/**
 * Basic information about a webpage.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class WebpageDescriptor
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201402";
    const XSI_TYPE = "WebpageDescriptor";

    /**
     * @access public
     * @var string
     */
    public $url;

    /**
     * @access public
     * @var string
     */
    public $title;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($url = null, $title = null)
    {
        $this->url = $url;
        $this->title = $title;
    }
}