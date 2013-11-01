<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

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
        "getResponse"                  => '\Google\Api\Ads\AdWords\v201306\classes\CustomerServiceGetResponse',
        "get"                          => '\Google\Api\Ads\AdWords\v201306\classes\CustomerServiceGet',
        "mutate"                       => '\Google\Api\Ads\AdWords\v201306\classes\CustomerServiceMutate',
        "mutateResponse"               => '\Google\Api\Ads\AdWords\v201306\classes\CustomerServiceMutateResponse',
        "DateTime"                     => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
        "SoapHeader"                   => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
        "AuthenticationError"          => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
        "ApiError"                     => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
        "AuthorizationError"           => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
        "ClientTermsError"             => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
        "DistinctError"                => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
        "IdError"                      => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
        "InternalApiError"             => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
        "NotEmptyError"                => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
        "NotWhitelistedError"          => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
        "NullError"                    => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
        "OperationAccessDenied"        => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
        "OperatorError"                => '\Google\Api\Ads\AdWords\v201306\classes\OperatorError',
        "QuotaCheckError"              => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
        "RangeError"                   => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
        "RateExceededError"            => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
        "ReadOnlyError"                => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
        "RequestError"                 => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
        "RequiredError"                => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
        "SizeLimitError"               => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
        "SoapResponseHeader"           => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
        "StringLengthError"            => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
        "DatabaseError"                => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
        "ApiException"                 => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
        "ApplicationException"         => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
        "AuthenticationError.Reason"   => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
        "AuthorizationError.Reason"    => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
        "ClientTermsError.Reason"      => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
        "DatabaseError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
        "DistinctError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
        "IdError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
        "InternalApiError.Reason"      => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
        "NotEmptyError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
        "NotWhitelistedError.Reason"   => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
        "NullError.Reason"             => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
        "OperationAccessDenied.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
        "OperatorError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\OperatorErrorReason',
        "QuotaCheckError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
        "RangeError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
        "RateExceededError.Reason"     => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
        "ReadOnlyError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
        "RequestError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
        "RequiredError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
        "SizeLimitError.Reason"        => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
        "StringLengthError.Reason"     => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
        "Customer"                     => '\Google\Api\Ads\AdWords\v201306\classes\Customer',
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