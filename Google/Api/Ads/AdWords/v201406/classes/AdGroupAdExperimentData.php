<?php


  /**
   * Data associated with an advertiser experiment for an AdGroupAd
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupAdExperimentData
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "AdGroupAdExperimentData";

    /**
     * @access public
     * @var integer
     */
    public $experimentId;

    /**
     * @access public
     * @var tnsExperimentDeltaStatus
     */
    public $experimentDeltaStatus;

    /**
     * @access public
     * @var tnsExperimentDataStatus
     */
    public $experimentDataStatus;

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

      public function __construct($experimentId = null, $experimentDeltaStatus = null, $experimentDataStatus = null)
      {
          $this->experimentId = $experimentId;
          $this->experimentDeltaStatus = $experimentDeltaStatus;
          $this->experimentDataStatus = $experimentDataStatus;
      }
  }
