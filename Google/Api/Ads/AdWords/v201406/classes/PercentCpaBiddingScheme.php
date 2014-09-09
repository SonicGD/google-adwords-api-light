<?php


  /**
   * Percentage CPA based bidding scheme attributes where user pays a percent of conversions.
   * This bidding strategy is available only to some advertisers.
   * <p>A campaign can only be created with PercentCPA bidding strategy. Existing
   * campaigns with a different bidding strategy cannot be transitioned to PercentCPA.
   * <p>Similarly, once created as a PercentCPA, a campaign cannot be transitioned to
   * any other bidding strategy.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class PercentCpaBiddingScheme extends BiddingScheme
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "PercentCpaBiddingScheme";

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

    public function __construct($BiddingSchemeType = null)
    {
      parent::__construct();
      $this->BiddingSchemeType = $BiddingSchemeType;
    }

  }
