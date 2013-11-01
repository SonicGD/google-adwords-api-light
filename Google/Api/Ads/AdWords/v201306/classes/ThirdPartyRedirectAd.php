<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Data associated with rich media extension attributes.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ThirdPartyRedirectAd extends RichMediaAd
{
    /**
     * @access public
     * @var boolean
     */
    public $isCookieTargeted;

    /**
     * @access public
     * @var boolean
     */
    public $isUserInterestTargeted;

    /**
     * @access public
     * @var boolean
     */
    public $isTagged;

    /**
     * @access public
     * @var tnsVideoType[]
     */
    public $videoTypes;

    /**
     * @access public
     * @var tnsThirdPartyRedirectAdExpandingDirection[]
     */
    public $expandingDirections;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201306";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "";
    }

    public function __construct(
        $isCookieTargeted = null,
        $isUserInterestTargeted = null,
        $isTagged = null,
        $videoTypes = null,
        $expandingDirections = null,
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
        $disapprovalReasons = null,
        $AdType = null
    ) {
        parent::__construct();
        $this->isCookieTargeted = $isCookieTargeted;
        $this->isUserInterestTargeted = $isUserInterestTargeted;
        $this->isTagged = $isTagged;
        $this->videoTypes = $videoTypes;
        $this->expandingDirections = $expandingDirections;
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
        $this->disapprovalReasons = $disapprovalReasons;
        $this->AdType = $AdType;
    }
}