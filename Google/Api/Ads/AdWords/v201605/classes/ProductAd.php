<?php


/**
 * Represents a product ad (known as a <a href=
 * "//support.google.com/adwords/answer/2456103">product
 * listing ad</a> in the AdWords user interface). A product ad displays
 * product data (managed using the Google Merchant Center) that is
 * pulled from the Google base product feed specified in the parent campaign's
 * {@linkplain ShoppingSetting shopping setting}.
 *
 * <p class="caution"><b>Caution:</b> Product ads do not use {@link #url url},
 * {@link #finalUrls finalUrls}, {@link #finalMobileUrls finalMobileUrls},
 * {@link #finalAppUrls finalAppUrls}, or {@link #displayUrl displayUrl};
 * setting these fields on a product ad will cause an error.
 * {@link #urlCustomParameters urlCustomParameters} and
 * {@link #trackingUrlTemplate trackingUrlTemplate} can be set, but it is not
 * recommended, as they will not be used; they should be set at the ad group or
 * campaign level instead.</p>
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class ProductAd extends Ad
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "ProductAd";

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