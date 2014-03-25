<?php


/**
 * Data associated with a rich media ad.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class RichMediaAd extends Ad
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "RichMediaAd";

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var Dimensions
     */
    public $dimensions;

    /**
     * @access public
     * @var string
     */
    public $snippet;

    /**
     * @access public
     * @var string
     */
    public $impressionBeaconUrl;

    /**
     * @access public
     * @var integer
     */
    public $adDuration;

    /**
     * @access public
     * @var integer
     */
    public $certifiedVendorFormatId;

    /**
     * @access public
     * @var string
     */
    public $sourceUrl;

    /**
     * @access public
     * @var tnsRichMediaAdRichMediaAdType
     */
    public $richMediaAdType;

    /**
     * @access public
     * @var tnsRichMediaAdAdAttribute[]
     */
    public $adAttributes;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct(
        $name = null,
        $dimensions = null,
        $snippet = null,
        $impressionBeaconUrl = null,
        $adDuration = null,
        $certifiedVendorFormatId = null,
        $sourceUrl = null,
        $richMediaAdType = null,
        $adAttributes = null,
        $id = null,
        $url = null,
        $displayUrl = null,
        $devicePreference = null,
        $AdType = null
    ) {
        parent::__construct();
        $this->name = $name;
        $this->dimensions = $dimensions;
        $this->snippet = $snippet;
        $this->impressionBeaconUrl = $impressionBeaconUrl;
        $this->adDuration = $adDuration;
        $this->certifiedVendorFormatId = $certifiedVendorFormatId;
        $this->sourceUrl = $sourceUrl;
        $this->richMediaAdType = $richMediaAdType;
        $this->adAttributes = $adAttributes;
        $this->id = $id;
        $this->url = $url;
        $this->displayUrl = $displayUrl;
        $this->devicePreference = $devicePreference;
        $this->AdType = $AdType;
    }
}