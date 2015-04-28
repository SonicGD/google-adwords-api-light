<?php


/**
 * Represents a FeedItem device preference.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class FeedItemDevicePreference
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "FeedItemDevicePreference";

    /**
     * @access public
     * @var integer
     */
    public $devicePreference;

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

    public function __construct($devicePreference = null)
    {
        $this->devicePreference = $devicePreference;
    }
}