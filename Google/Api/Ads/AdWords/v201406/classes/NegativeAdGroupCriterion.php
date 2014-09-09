<?php


  /**
   * A negative criterion in an adgroup.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class NegativeAdGroupCriterion extends AdGroupCriterion
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "NegativeAdGroupCriterion";

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

    public function __construct($adGroupId = null, $criterionUse = null, $criterion = null, $labels = null, $forwardCompatibilityMap = null, $AdGroupCriterionType = null)
    {
      parent::__construct();
      $this->adGroupId = $adGroupId;
      $this->criterionUse = $criterionUse;
      $this->criterion = $criterion;
      $this->labels = $labels;
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      $this->AdGroupCriterionType = $AdGroupCriterionType;
    }

  }
