<?php

/**
 * CustomerService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class CustomerService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                  => "CustomerServiceGetResponse",
        "get"                          => "CustomerServiceGet",
        "mutate"                       => "CustomerServiceMutate",
        "mutateResponse"               => "CustomerServiceMutateResponse",
        "DateTime"                     => "AdWordsDateTime",
        "SoapHeader"                   => "SoapRequestHeader",
        "AuthenticationError"          => "AuthenticationError",
        "ApiError"                     => "ApiError",
        "AuthorizationError"           => "AuthorizationError",
        "ClientTermsError"             => "ClientTermsError",
        "DistinctError"                => "DistinctError",
        "IdError"                      => "IdError",
        "InternalApiError"             => "InternalApiError",
        "NotEmptyError"                => "NotEmptyError",
        "NotWhitelistedError"          => "NotWhitelistedError",
        "NullError"                    => "NullError",
        "OperationAccessDenied"        => "OperationAccessDenied",
        "OperatorError"                => "OperatorError",
        "QuotaCheckError"              => "QuotaCheckError",
        "RangeError"                   => "RangeError",
        "RateExceededError"            => "RateExceededError",
        "ReadOnlyError"                => "ReadOnlyError",
        "RequestError"                 => "RequestError",
        "RequiredError"                => "RequiredError",
        "SizeLimitError"               => "SizeLimitError",
        "SoapResponseHeader"           => "SoapResponseHeader",
        "StringLengthError"            => "StringLengthError",
        "DatabaseError"                => "DatabaseError",
        "ApiException"                 => "ApiException",
        "ApplicationException"         => "ApplicationException",
        "AuthenticationError.Reason"   => "AuthenticationErrorReason",
        "AuthorizationError.Reason"    => "AuthorizationErrorReason",
        "ClientTermsError.Reason"      => "ClientTermsErrorReason",
        "DatabaseError.Reason"         => "DatabaseErrorReason",
        "DistinctError.Reason"         => "DistinctErrorReason",
        "IdError.Reason"               => "IdErrorReason",
        "InternalApiError.Reason"      => "InternalApiErrorReason",
        "NotEmptyError.Reason"         => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason"   => "NotWhitelistedErrorReason",
        "NullError.Reason"             => "NullErrorReason",
        "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
        "OperatorError.Reason"         => "OperatorErrorReason",
        "QuotaCheckError.Reason"       => "QuotaCheckErrorReason",
        "RangeError.Reason"            => "RangeErrorReason",
        "RateExceededError.Reason"     => "RateExceededErrorReason",
        "ReadOnlyError.Reason"         => "ReadOnlyErrorReason",
        "RequestError.Reason"          => "RequestErrorReason",
        "RequiredError.Reason"         => "RequiredErrorReason",
        "SizeLimitError.Reason"        => "SizeLimitErrorReason",
        "StringLengthError.Reason"     => "StringLengthErrorReason",
        "Customer"                     => "Customer",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/mcm/v201306/CustomerService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = CustomerService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'CustomerService',
            'https://adwords.google.com/api/adwords/mcm/v201306'
        );
    }

    /**
     * Returns details of the authorized customer.
     *
     * @return customer associated with the caller
     */
    public function get()
    {
        $arg = new CustomerServiceGet();
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }

}