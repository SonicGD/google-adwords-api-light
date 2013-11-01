<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

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
        "getResponse"                => '\Google\Api\Ads\AdWords\v201306\classes\AlertServiceGetResponse',
        "get"                        => '\Google\Api\Ads\AdWords\v201306\classes\AlertServiceGet',
        "mutate"                     => '\Google\Api\Ads\AdWords\v201306\classes\AlertServiceMutate',
        "mutateResponse"             => '\Google\Api\Ads\AdWords\v201306\classes\AlertServiceMutateResponse',
        "DateTime"                   => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
        "SoapHeader"                 => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
        "AuthenticationError"        => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
        "ApiError"                   => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
        "AuthorizationError"         => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
        "ClientTermsError"           => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
        "DateError"                  => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
        "DistinctError"              => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
        "IdError"                    => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
        "InternalApiError"           => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
        "NotWhitelistedError"        => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
        "Paging"                     => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
        "QuotaCheckError"            => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
        "RangeError"                 => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
        "RateExceededError"          => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
        "ReadOnlyError"              => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
        "RequestError"               => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
        "RequiredError"              => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
        "SizeLimitError"             => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
        "SoapResponseHeader"         => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
        "StringLengthError"          => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
        "DatabaseError"              => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
        "ApiException"               => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
        "ApplicationException"       => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
        "Page"                       => '\Google\Api\Ads\AdWords\v201306\classes\Page',
        "AuthenticationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
        "AuthorizationError.Reason"  => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
        "ClientTermsError.Reason"    => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
        "DatabaseError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
        "DateError.Reason"           => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
        "DistinctError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
        "IdError.Reason"             => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
        "InternalApiError.Reason"    => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
        "NotWhitelistedError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
        "QuotaCheckError.Reason"     => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
        "RangeError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
        "RateExceededError.Reason"   => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
        "ReadOnlyError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
        "RequestError.Reason"        => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
        "RequiredError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
        "SizeLimitError.Reason"      => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
        "StringLengthError.Reason"   => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
        "AlertError"                 => '\Google\Api\Ads\AdWords\v201306\classes\AlertError',
        "AlertQuery"                 => '\Google\Api\Ads\AdWords\v201306\classes\AlertQuery',
        "Detail"                     => '\Google\Api\Ads\AdWords\v201306\classes\Detail',
        "Alert"                      => '\Google\Api\Ads\AdWords\v201306\classes\Alert',
        "AlertPage"                  => '\Google\Api\Ads\AdWords\v201306\classes\AlertPage',
        "NoStatsPage"                => '\Google\Api\Ads\AdWords\v201306\classes\NoStatsPage',
        "AlertSelector"              => '\Google\Api\Ads\AdWords\v201306\classes\AlertSelector',
        "AlertError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\AlertErrorReason',
        "AlertSeverity"              => '\Google\Api\Ads\AdWords\v201306\classes\AlertSeverity',
        "AlertType"                  => '\Google\Api\Ads\AdWords\v201306\classes\AlertType',
        "ClientSpec"                 => '\Google\Api\Ads\AdWords\v201306\classes\ClientSpec',
        "FilterSpec"                 => '\Google\Api\Ads\AdWords\v201306\classes\FilterSpec',
        "TriggerTimeSpec"            => '\Google\Api\Ads\AdWords\v201306\classes\TriggerTimeSpec',
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