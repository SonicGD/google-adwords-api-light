<?php


/**
 * Represents a TextAd.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class TextAd extends Ad
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "TextAd";

    /**
     * @access public
     * @var string
     */
    public $headline;

    /**
     * @access public
     * @var string
     */
    public $description1;

    /**
     * @access public
     * @var string
     */
    public $description2;

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
        $headline = null,
        $description1 = null,
        $description2 = null,
        $id = null,
        $url = null,
        $displayUrl = null,
        $finalUrls = null,
        $finalMobileUrls = null,
        $finalAppUrls = null,
        $trackingUrlTemplate = null,
        $urlCustomParameters = null,
        $type = null,
        $devicePreference = null,
        $AdType = null
    ) {
        parent::__construct();
        $this->headline = $headline;
        $this->description1 = $description1;
        $this->description2 = $description2;
        $this->id = $id;
        $this->url = $url;
        $this->displayUrl = $displayUrl;
        $this->finalUrls = $finalUrls;
        $this->finalMobileUrls = $finalMobileUrls;
        $this->finalAppUrls = $finalAppUrls;
        $this->trackingUrlTemplate = $trackingUrlTemplate;
        $this->urlCustomParameters = $urlCustomParameters;
        $this->type = $type;
        $this->devicePreference = $devicePreference;
        $this->AdType = $AdType;
    }

}