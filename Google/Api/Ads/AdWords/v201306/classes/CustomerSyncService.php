<?php

/**
 * CustomerSyncService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class CustomerSyncService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                => "CustomerSyncServiceGetResponse",
        "get"                        => "CustomerSyncServiceGet",
        "mutate"                     => "CustomerSyncServiceMutate",
        "mutateResponse"             => "CustomerSyncServiceMutateResponse",
        "DateTime"                   => "AdWordsDateTime",
        "SoapHeader"                 => "SoapRequestHeader",
        "AuthenticationError"        => "AuthenticationError",
        "ApiError"                   => "ApiError",
        "AuthorizationError"         => "AuthorizationError",
        "ClientTermsError"           => "ClientTermsError",
        "DateError"                  => "DateError",
        "DateTimeRange"              => "DateTimeRange",
        "DistinctError"              => "DistinctError",
        "IdError"                    => "IdError",
        "InternalApiError"           => "InternalApiError",
        "NotEmptyError"              => "NotEmptyError",
        "NotWhitelistedError"        => "NotWhitelistedError",
        "QuotaCheckError"            => "QuotaCheckError",
        "RangeError"                 => "RangeError",
        "RateExceededError"          => "RateExceededError",
        "ReadOnlyError"              => "ReadOnlyError",
        "RequestError"               => "RequestError",
        "RequiredError"              => "RequiredError",
        "SizeLimitError"             => "SizeLimitError",
        "SoapResponseHeader"         => "SoapResponseHeader",
        "StringLengthError"          => "StringLengthError",
        "DatabaseError"              => "DatabaseError",
        "ApiException"               => "ApiException",
        "ApplicationException"       => "ApplicationException",
        "AuthenticationError.Reason" => "AuthenticationErrorReason",
        "AuthorizationError.Reason"  => "AuthorizationErrorReason",
        "ClientTermsError.Reason"    => "ClientTermsErrorReason",
        "DatabaseError.Reason"       => "DatabaseErrorReason",
        "DateError.Reason"           => "DateErrorReason",
        "DistinctError.Reason"       => "DistinctErrorReason",
        "IdError.Reason"             => "IdErrorReason",
        "InternalApiError.Reason"    => "InternalApiErrorReason",
        "NotEmptyError.Reason"       => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
        "QuotaCheckError.Reason"     => "QuotaCheckErrorReason",
        "RangeError.Reason"          => "RangeErrorReason",
        "RateExceededError.Reason"   => "RateExceededErrorReason",
        "ReadOnlyError.Reason"       => "ReadOnlyErrorReason",
        "RequestError.Reason"        => "RequestErrorReason",
        "RequiredError.Reason"       => "RequiredErrorReason",
        "SizeLimitError.Reason"      => "SizeLimitErrorReason",
        "StringLengthError.Reason"   => "StringLengthErrorReason",
        "AdGroupChangeData"          => "AdGroupChangeData",
        "CampaignChangeData"         => "CampaignChangeData",
        "CustomerSyncError"          => "CustomerSyncError",
        "FeedChangeData"             => "FeedChangeData",
        "CustomerChangeData"         => "CustomerChangeData",
        "CustomerSyncSelector"       => "CustomerSyncSelector",
        "ChangeStatus"               => "ChangeStatus",
        "CustomerSyncError.Reason"   => "CustomerSyncErrorReason",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/ch/v201306/CustomerSyncService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = CustomerSyncService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'CustomerSyncService',
            'https://adwords.google.com/api/adwords/ch/v201306'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns information about changed entities inside a customer's account.
     *
     * @param selector Specifies the filter for selecting changehistory events for a customer.
     *
     * @return A Customer->Campaign->AdGroup hierarchy containing information about the objects
     * changed at each level.  All Campaigns that are requested in the selector will be returned,
     * regardless of whether or not they have changed, but unchanged AdGroups will be ignored.
     */
    public function get($selector)
    {
        $arg = new CustomerSyncServiceGet($selector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }

}