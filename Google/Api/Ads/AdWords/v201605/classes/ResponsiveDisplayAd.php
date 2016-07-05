<?php


/**
 * Enhanced display ad format.
 *
 * <p class="caution"><b>Caution:</b> Responsive display ads do not use {@link #url url},
 * {@link #displayUrl displayUrl}, {@link #finalAppUrls finalAppUrls}, or
 * {@link #devicePreference devicePreference};
 * setting these fields on a responsive display ad will cause an error.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class ResponsiveDisplayAd extends Ad
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "ResponsiveDisplayAd";

    /**
     * @access public
     * @var Image
     */
    public $marketingImage;

    /**
     * @access public
     * @var Image
     */
    public $logoImage;

    /**
     * @access public
     * @var string
     */
    public $shortHeadline;

    /**
     * @access public
     * @var string
     */
    public $longHeadline;

    /**
     * @access public
     * @var string
     */
    public $description;

    /**
     * @access public
     * @var string
     */
    public $businessName;

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
        $marketingImage = null,
        $logoImage = null,
        $shortHeadline = null,
        $longHeadline = null,
        $description = null,
        $businessName = null,
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
        $this->marketingImage = $marketingImage;
        $this->logoImage = $logoImage;
        $this->shortHeadline = $shortHeadline;
        $this->longHeadline = $longHeadline;
        $this->description = $description;
        $this->businessName = $businessName;
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