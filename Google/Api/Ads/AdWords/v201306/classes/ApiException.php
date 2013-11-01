<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Exception class for holding a list of service errors.
 *
 *
 *
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ApiException extends ApplicationException
{
    /**
     * @access public
     * @var ApiError[]
     */
    public $errors;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201306";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "";
    }

    public function __construct($errors = null, $message = null, $ApplicationExceptionType = null)
    {
        parent::__construct();
        $this->errors = $errors;
        $this->message = $message;
        $this->ApplicationExceptionType = $ApplicationExceptionType;
    }
}