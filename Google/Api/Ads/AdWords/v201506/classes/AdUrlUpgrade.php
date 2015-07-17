<?php


/**
 * Represents an upgrade operation to upgrade Ad.url.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class AdUrlUpgrade
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201506";
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

    public function __construct($adId = null, $finalUrl = null, $finalMobileUrl = null, $trackingUrlTemplate = null)
    {
        $this->adId = $adId;
        $this->finalUrl = $finalUrl;
        $this->finalMobileUrl = $finalMobileUrl;
        $this->trackingUrlTemplate = $trackingUrlTemplate;
    }

}