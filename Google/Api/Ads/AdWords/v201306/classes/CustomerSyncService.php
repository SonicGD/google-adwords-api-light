<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

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
        "getResponse"                => '\Google\Api\Ads\AdWords\v201306\classes\CustomerSyncServiceGetResponse',
        "get"                        => '\Google\Api\Ads\AdWords\v201306\classes\CustomerSyncServiceGet',
        "mutate"                     => '\Google\Api\Ads\AdWords\v201306\classes\CustomerSyncServiceMutate',
        "mutateResponse"             => '\Google\Api\Ads\AdWords\v201306\classes\CustomerSyncServiceMutateResponse',
        "DateTime"                   => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
        "SoapHeader"                 => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
        "AuthenticationError"        => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
        "ApiError"                   => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
        "AuthorizationError"         => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
        "ClientTermsError"           => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
        "DateError"                  => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
        "DateTimeRange"              => '\Google\Api\Ads\AdWords\v201306\classes\DateTimeRange',
        "DistinctError"              => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
        "IdError"                    => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
        "InternalApiError"           => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
        "NotEmptyError"              => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
        "NotWhitelistedError"        => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
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
        "AuthenticationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
        "AuthorizationError.Reason"  => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
        "ClientTermsError.Reason"    => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
        "DatabaseError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
        "DateError.Reason"           => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
        "DistinctError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
        "IdError.Reason"             => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
        "InternalApiError.Reason"    => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
        "NotEmptyError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
        "NotWhitelistedError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
        "QuotaCheckError.Reason"     => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
        "RangeError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
        "RateExceededError.Reason"   => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
        "ReadOnlyError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
        "RequestError.Reason"        => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
        "RequiredError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
        "SizeLimitError.Reason"      => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
        "StringLengthError.Reason"   => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
        "AdGroupChangeData"          => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupChangeData',
        "CampaignChangeData"         => '\Google\Api\Ads\AdWords\v201306\classes\CampaignChangeData',
        "CustomerSyncError"          => '\Google\Api\Ads\AdWords\v201306\classes\CustomerSyncError',
        "FeedChangeData"             => '\Google\Api\Ads\AdWords\v201306\classes\FeedChangeData',
        "CustomerChangeData"         => '\Google\Api\Ads\AdWords\v201306\classes\CustomerChangeData',
        "CustomerSyncSelector"       => '\Google\Api\Ads\AdWords\v201306\classes\CustomerSyncSelector',
        "ChangeStatus"               => '\Google\Api\Ads\AdWords\v201306\classes\ChangeStatus',
        "CustomerSyncError.Reason"   => '\Google\Api\Ads\AdWords\v201306\classes\CustomerSyncErrorReason',
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