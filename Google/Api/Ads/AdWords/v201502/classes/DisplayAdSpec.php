<?php


/**
 * Placement request/response object which provides details about display
 * ad types, options, and other available configuration variables.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class DisplayAdSpec
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201502";
    const XSI_TYPE = "DisplayAdSpec";

    /**
     * @access public
     * @var DisplayType[]
     */
    public $displayTypes;

    /**
     * @access public
     * @var tnsDisplayAdSpecActivationOption[]
     */
    public $activationOptions;

    /**
     * @access public
     * @var DisplayAdSpecAdSizeSpec[]
     */
    public $adSizeSpecs;

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

    public function __construct($displayTypes = null, $activationOptions = null, $adSizeSpecs = null)
    {
        $this->displayTypes = $displayTypes;
        $this->activationOptions = $activationOptions;
        $this->adSizeSpecs = $adSizeSpecs;
    }
}
