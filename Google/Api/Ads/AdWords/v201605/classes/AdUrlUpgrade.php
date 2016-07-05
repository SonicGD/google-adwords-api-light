<?php


/**
 * Represents an upgrade operation to upgrade Ad.url.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class AdUrlUpgrade
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "AdUrlUpgrade";

    /**
     * @access public
     * @var integer
     */
    public $adId;

    /**
     * @access public
     * @var string
     */
    public $finalUrl;

    /**
     * @access public
     * @var string
     */
    public $finalMobileUrl;

    /**
     * @access public
     * @var string
     */
    public $trackingUrlTemplate;

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

    public function __construct($adId = null, $finalUrl = null, $finalMobileUrl = null, $trackingUrlTemplate = null)
    {
        $this->adId = $adId;
        $this->finalUrl = $finalUrl;
        $this->finalMobileUrl = $finalMobileUrl;
        $this->trackingUrlTemplate = $trackingUrlTemplate;
    }

}