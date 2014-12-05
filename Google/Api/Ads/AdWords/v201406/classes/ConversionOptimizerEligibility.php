<?php


  /**
   * Eligibility data for Campaign to transition to Conversion Optimizer
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ConversionOptimizerEligibility
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "ConversionOptimizerEligibility";

    /**
     * @access public
     * @var boolean
     */
    public $eligible;

    /**
     * @access public
     * @var tnsConversionOptimizerEligibilityRejectionReason[]
     */
    public $rejectionReasons;

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

      public function __construct($eligible = null, $rejectionReasons = null)
      {
          $this->eligible = $eligible;
          $this->rejectionReasons = $rejectionReasons;
      }
  }
