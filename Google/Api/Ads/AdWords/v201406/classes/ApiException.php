<?php


  /**
   * Exception class for holding a list of service errors.
   *
   *
   *
   * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ApiException extends ApplicationException
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "ApiException";

    /**
     * @access public
     * @var ApiError[]
     */
    public $errors;

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

      public function __construct($errors = null, $message = null, $ApplicationExceptionType = null)
      {
          parent::__construct();
          $this->errors = $errors;
          $this->message = $message;
          $this->ApplicationExceptionType = $ApplicationExceptionType;
      }
  }
