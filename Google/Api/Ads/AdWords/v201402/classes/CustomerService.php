<?php

require_once('CustomerService.require.php');


/**
 * CustomerService
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CustomerService extends AdWordsSoapClient
{

    const SERVICE_NAME = "CustomerService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201402";
    const ENDPOINT = "https://adwords.google.com/api/adwords/mcm/v201402/CustomerService";

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/mcm/v201402/CustomerService";
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "AuthenticationError"          => "AuthenticationError",
        "AuthorizationError"           => "AuthorizationError",
        "ClientTermsError"             => "ClientTermsError",
        "DistinctError"                => "DistinctError",
        "IdError"                      => "IdError",
        "InternalApiError"             => "InternalApiError",
        "NotEmptyError"                => "NotEmptyError",
        "NullError"                    => "NullError",
        "OperationAccessDenied"        => "OperationAccessDenied",
        "OperatorError"                => "OperatorError",
        "QuotaCheckError"              => "QuotaCheckError",
        "RangeError"                   => "RangeError",
        "RateExceededError"            => "RateExceededError",
        "ReadOnlyError"                => "ReadOnlyError",
        "RejectedError"                => "RejectedError",
        "RequestError"                 => "RequestError",
        "RequiredError"                => "RequiredError",
        "SizeLimitError"               => "SizeLimitError",
        "SoapHeader"                   => "SoapRequestHeader",
        "SoapResponseHeader"           => "SoapResponseHeader",
        "StringLengthError"            => "StringLengthError",
        "DatabaseError"                => "DatabaseError",
        "ApiError"                     => "ApiError",
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
        "NullError.Reason"             => "NullErrorReason",
        "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
        "OperatorError.Reason"         => "OperatorErrorReason",
        "QuotaCheckError.Reason"       => "QuotaCheckErrorReason",
        "RangeError.Reason"            => "RangeErrorReason",
        "RateExceededError.Reason"     => "RateExceededErrorReason",
        "ReadOnlyError.Reason"         => "ReadOnlyErrorReason",
        "RejectedError.Reason"         => "RejectedErrorReason",
        "RequestError.Reason"          => "RequestErrorReason",
        "RequiredError.Reason"         => "RequiredErrorReason",
        "SizeLimitError.Reason"        => "SizeLimitErrorReason",
        "StringLengthError.Reason"     => "StringLengthErrorReason",
        "Customer"                     => "Customer",
        "get"                          => "CustomerServiceGet",
        "getResponse"                  => "CustomerServiceGetResponse",
        "mutate"                       => "CustomerServiceMutate",
        "mutateResponse"               => "CustomerServiceMutateResponse",
    );


    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = self::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            self::SERVICE_NAME,
            self::WSDL_NAMESPACE
        );
    }

    /**
     * Returns details of the authorized customer.
     *
     * @return customer associated with the caller
     */
    public function get()
    {
        $args = new CustomerServiceGet();
        $result = $this->__soapCall("get", array($args));
        return $result->rval;
    }

    /**
     * Update an authorized customer. The only update currently provided is to enable or disable <a
     * href="https://support.google.com/analytics/answer/1033981?hl=en"> auto-tagging </a>; see that
     * link for special cases affecting the use of auto-tagging.
     *
     * @param customer the requested updated value for the customer.
     *
     * @throws ApiException
     */
    public function mutate($customer)
    {
        $args = new CustomerServiceMutate($customer);
        $result = $this->__soapCall("mutate", array($args));
        return $result->rval;
    }
}