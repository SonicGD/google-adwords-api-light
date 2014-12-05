<?php


  /**
   * Adgroup level bid multipliers used in manual CPC bidding strategies.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ManualCPCAdGroupExperimentBidMultipliers extends AdGroupExperimentBidMultipliers
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "ManualCPCAdGroupExperimentBidMultipliers";

    /**
     * @access public
     * @var BidMultiplier
     */
    public $maxCpcMultiplier;

    /**
     * @access public
     * @var BidMultiplier
     */
    public $maxContentCpcMultiplier;

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

      public function __construct($maxCpcMultiplier = null, $maxContentCpcMultiplier = null, $AdGroupExperimentBidMultipliersType = null)
      {
          parent::__construct();
          $this->maxCpcMultiplier = $maxCpcMultiplier;
          $this->maxContentCpcMultiplier = $maxContentCpcMultiplier;
          $this->AdGroupExperimentBidMultipliersType = $AdGroupExperimentBidMultipliersType;
      }
  }
