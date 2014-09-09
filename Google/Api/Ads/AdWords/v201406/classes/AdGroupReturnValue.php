<?php


  /**
   * A container for return values from the AdGroupService.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupReturnValue extends ListReturnValue
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupReturnValue";

    /**
     * @access public
     * @var AdGroup[]
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

    public function __construct($value = null, $partialFailureErrors = null, $ListReturnValueType = null)
    {
      parent::__construct();
      $this->value = $value;
      $this->partialFailureErrors = $partialFailureErrors;
      $this->ListReturnValueType = $ListReturnValueType;
    }

  }
