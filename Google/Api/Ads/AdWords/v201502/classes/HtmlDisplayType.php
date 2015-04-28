<?php


/**
 * HTML-specific options for display ads are contained within
 * this class.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class HtmlDisplayType
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201502";
    const XSI_TYPE = "HtmlDisplayType";

    /**
     * @access public
     * @var tnsHtmlDisplayTypeHtmlOption
     */
    public $htmlOption;

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

    public function __construct($htmlOption = null)
    {
        $this->htmlOption = $htmlOption;
    }
}
