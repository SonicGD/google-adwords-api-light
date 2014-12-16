<?php



  /**
   * Specifies if criteria of this type group should be used to restrict
   * targeting, or if ads can serve anywhere and criteria are only used in
   * determining the bid.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class TargetingSettingDetail {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "TargetingSettingDetail";

    /**
     * @access public
     * @var tnsCriterionTypeGroup
     */
    public $criterionTypeGroup;

    /**
     * @access public
     * @var boolean
     */
    public $targetAll;

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

    public function __construct($criterionTypeGroup = null, $targetAll = null) {
      $this->criterionTypeGroup = $criterionTypeGroup;
      $this->targetAll = $targetAll;
    }

  }