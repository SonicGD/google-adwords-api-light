<?php



  /**
   * A container for return values from the {@link AdGroupService#mutateLabel} call.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class AdGroupLabelReturnValue extends ListReturnValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "AdGroupLabelReturnValue";

    /**
     * @access public
     * @var AdGroupLabel[]
     */
    public $value;

    /**
     * @access public
     * @var ApiError[]
     */
    public $partialFailureErrors;

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

    public function __construct($value = null, $partialFailureErrors = null, $ListReturnValueType = null) {
      parent::__construct();
      $this->value = $value;
      $this->partialFailureErrors = $partialFailureErrors;
      $this->ListReturnValueType = $ListReturnValueType;
    }

  }