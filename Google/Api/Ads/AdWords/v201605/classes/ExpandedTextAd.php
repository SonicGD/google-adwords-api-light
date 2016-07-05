<?php


/**
 * Enhanced text ad format.
 *
 * <p class="caution"><b>Caution:</b> Expanded text ads do not use {@link #url url},
 * {@link #displayUrl displayUrl}, {@link #finalAppUrls finalAppUrls}, or
 * {@link #devicePreference devicePreference};
 * setting these fields on an expanded text ad will cause an error.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class ExpandedTextAd extends Ad
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "ExpandedTextAd";

    /**
     * @access public
     * @var string
     */
    public $headlinePart1;

    /**
     * @access public
     * @var string
     */
    public $headlinePart2;

    /**
     * @access public
     * @var string
     */
    public $description;

    /**
     * @access public
     * @var string
     */
    public $path1;

    /**
     * @access public
     * @var string
     */
    public $path2;

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
        $headlinePart1 = null,
        $headlinePart2 = null,
        $description = null,
        $path1 = null,
        $path2 = null,
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
        $this->headlinePart1 = $headlinePart1;
        $this->headlinePart2 = $headlinePart2;
        $this->description = $description;
        $this->path1 = $path1;
        $this->path2 = $path2;
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