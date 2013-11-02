<?php

/**
 * AlertService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class AlertService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                => "AlertServiceGetResponse",
        "get"                        => "AlertServiceGet",
        "mutate"                     => "AlertServiceMutate",
        "mutateResponse"             => "AlertServiceMutateResponse",
        "DateTime"                   => "AdWordsDateTime",
        "SoapHeader"                 => "SoapRequestHeader",
        "AuthenticationError"        => "AuthenticationError",
        "ApiError"                   => "ApiError",
        "AuthorizationError"         => "AuthorizationError",
        "ClientTermsError"           => "ClientTermsError",
        "DateError"                  => "DateError",
        "DistinctError"              => "DistinctError",
        "IdError"                    => "IdError",
        "InternalApiError"           => "InternalApiError",
        "NotWhitelistedError"        => "NotWhitelistedError",
        "Paging"                     => "Paging",
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
        "Page"                       => "Page",
        "AuthenticationError.Reason" => "AuthenticationErrorReason",
        "AuthorizationError.Reason"  => "AuthorizationErrorReason",
        "ClientTermsError.Reason"    => "ClientTermsErrorReason",
        "DatabaseError.Reason"       => "DatabaseErrorReason",
        "DateError.Reason"           => "DateErrorReason",
        "DistinctError.Reason"       => "DistinctErrorReason",
        "IdError.Reason"             => "IdErrorReason",
        "InternalApiError.Reason"    => "InternalApiErrorReason",
        "NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
        "QuotaCheckError.Reason"     => "QuotaCheckErrorReason",
        "RangeError.Reason"          => "RangeErrorReason",
        "RateExceededError.Reason"   => "RateExceededErrorReason",
        "ReadOnlyError.Reason"       => "ReadOnlyErrorReason",
        "RequestError.Reason"        => "RequestErrorReason",
        "RequiredError.Reason"       => "RequiredErrorReason",
        "SizeLimitError.Reason"      => "SizeLimitErrorReason",
        "StringLengthError.Reason"   => "StringLengthErrorReason",
        "AlertError"                 => "AlertError",
        "AlertQuery"                 => "AlertQuery",
        "Detail"                     => "Detail",
        "Alert"                      => "Alert",
        "AlertPage"                  => "AlertPage",
        "NoStatsPage"                => "NoStatsPage",
        "AlertSelector"              => "AlertSelector",
        "AlertError.Reason"          => "AlertErrorReason",
        "AlertSeverity"              => "AlertSeverity",
        "AlertType"                  => "AlertType",
        "ClientSpec"                 => "ClientSpec",
        "FilterSpec"                 => "FilterSpec",
        "TriggerTimeSpec"            => "TriggerTimeSpec",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/mcm/v201306/AlertService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = AlertService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'AlertService',
            'https://adwords.google.com/api/adwords/mcm/v201306'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Gets the list of alerts matching the specified clients and time period.
     *
     * @param selector selects the alerts for which to search.
     *
     * @return a page of alerts.
     * @throws ApiException if an error occurs
     */
    public function get($selector)
    {
        $arg = new AlertServiceGet($selector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }

}