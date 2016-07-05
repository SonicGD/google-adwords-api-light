<?php


/**
 * Network settings for a Campaign.
 *
 *
 *
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class NetworkSetting
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "NetworkSetting";

    /**
     * @access public
     * @var boolean
     */
    public $targetGoogleSearch;

    /**
     * @access public
     * @var boolean
     */
    public $targetSearchNetwork;

    /**
     * @access public
     * @var boolean
     */
    public $targetContentNetwork;

    /**
     * @access public
     * @var boolean
     */
    public $targetPartnerSearchNetwork;

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

    public function __construct(
        $targetGoogleSearch = null,
        $targetSearchNetwork = null,
        $targetContentNetwork = null,
        $targetPartnerSearchNetwork = null
    ) {
        $this->targetGoogleSearch = $targetGoogleSearch;
        $this->targetSearchNetwork = $targetSearchNetwork;
        $this->targetContentNetwork = $targetContentNetwork;
        $this->targetPartnerSearchNetwork = $targetPartnerSearchNetwork;
    }

}