<?php


  /**
   * Error for {@link ManagedCustomerService}
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ManagedCustomerServiceError extends ApiError
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201406";
    const XSI_TYPE = "ManagedCustomerServiceError";

    /**
     * @access public
     * @var tnsManagedCustomerServiceErrorReason
     */
    public $reason;

    /**
     * @access public
     * @var integer[]
     */
    public $customerIds;

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

    public function __construct($reason = null, $customerIds = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
    {
      parent::__construct();
      $this->reason = $reason;
      $this->customerIds = $customerIds;
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
    }

  }
