<?php


/**
 * Exception class for holding a list of service errors.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class ApiException extends ApplicationException
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "ApiException";

    /**
     * @access public
     * @var ApiError[]
     */
    public $errors;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
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