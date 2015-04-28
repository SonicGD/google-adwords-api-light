<?php


/**
 * A placement response object which provides information about one of the ad formats
 * supported by a placement.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class AdFormatSpec
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201502";
    const XSI_TYPE = "AdFormatSpec";

    /**
     * @access public
     * @var tnsSiteConstantsAdFormat
     */
    public $format;

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

    public function __construct($format = null)
    {
        $this->format = $format;
    }
}
