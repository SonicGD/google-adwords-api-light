<?php


/**
 * Describes how unbranded pharma ads will be displayed.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class VanityPharma
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "VanityPharma";

    /**
     * @access public
     * @var tnsVanityPharmaDisplayUrlMode
     */
    public $vanityPharmaDisplayUrlMode;

    /**
     * @access public
     * @var tnsVanityPharmaText
     */
    public $vanityPharmaText;

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

    public function __construct($vanityPharmaDisplayUrlMode = null, $vanityPharmaText = null)
    {
        $this->vanityPharmaDisplayUrlMode = $vanityPharmaDisplayUrlMode;
        $this->vanityPharmaText = $vanityPharmaText;
    }

}