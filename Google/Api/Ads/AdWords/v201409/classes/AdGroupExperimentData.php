<?php



  /**
   * Data associated with an advertiser experiment for this adgroup.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class AdGroupExperimentData {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "AdGroupExperimentData";

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
     * @access public
     * @var AdGroupExperimentBidMultipliers
     */
    public $experimentBidMultipliers;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($experimentId = null, $experimentDeltaStatus = null, $experimentDataStatus = null, $experimentBidMultipliers = null) {
      $this->experimentId = $experimentId;
      $this->experimentDeltaStatus = $experimentDeltaStatus;
      $this->experimentDataStatus = $experimentDataStatus;
      $this->experimentBidMultipliers = $experimentBidMultipliers;
    }

  }