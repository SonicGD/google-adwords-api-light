<?php


  /**
   * Data associated with rich media extension attributes.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ThirdPartyRedirectAd extends RichMediaAd
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "ThirdPartyRedirectAd";

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

      public function __construct($isCookieTargeted = null, $isUserInterestTargeted = null, $isTagged = null, $videoTypes = null, $expandingDirections = null, $name = null, $dimensions = null, $snippet = null, $impressionBeaconUrl = null, $adDuration = null, $certifiedVendorFormatId = null, $sourceUrl = null, $richMediaAdType = null, $adAttributes = null)
      {
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
      }
  }
