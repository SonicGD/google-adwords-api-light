<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * TrafficEstimatorService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class TrafficEstimatorService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                        => '\Google\Api\Ads\AdWords\v201306\classes\TrafficEstimatorServiceGetResponse',
        "get"                                => '\Google\Api\Ads\AdWords\v201306\classes\TrafficEstimatorServiceGet',
        "mutate"                             => '\Google\Api\Ads\AdWords\v201306\classes\TrafficEstimatorServiceMutate',
        "mutateResponse"                     => '\Google\Api\Ads\AdWords\v201306\classes\TrafficEstimatorServiceMutateResponse',
        "DateTime"                           => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
        "SoapHeader"                         => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
        "AdxError"                           => '\Google\Api\Ads\AdWords\v201306\classes\AdxError',
        "ApiError"                           => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
        "ApiException"                       => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
        "ApplicationException"               => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
        "AuthenticationError"                => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
        "AuthorizationError"                 => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
        "ClientTermsError"                   => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
        "CollectionSizeError"                => '\Google\Api\Ads\AdWords\v201306\classes\CollectionSizeError',
        "ComparableValue"                    => '\Google\Api\Ads\AdWords\v201306\classes\ComparableValue',
        "Criterion"                          => '\Google\Api\Ads\AdWords\v201306\classes\Criterion',
        "CriterionParameter"                 => '\Google\Api\Ads\AdWords\v201306\classes\CriterionParameter',
        "DatabaseError"                      => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
        "DateError"                          => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
        "DistinctError"                      => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
        "DoubleValue"                        => '\Google\Api\Ads\AdWords\v201306\classes\DoubleValue',
        "NumberValue"                        => '\Google\Api\Ads\AdWords\v201306\classes\NumberValue',
        "EntityAccessDenied"                 => '\Google\Api\Ads\AdWords\v201306\classes\EntityAccessDenied',
        "EntityNotFound"                     => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
        "IdError"                            => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
        "InternalApiError"                   => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
        "Keyword"                            => '\Google\Api\Ads\AdWords\v201306\classes\Keyword',
        "Language"                           => '\Google\Api\Ads\AdWords\v201306\classes\Language',
        "Location"                           => '\Google\Api\Ads\AdWords\v201306\classes\Location',
        "LongValue"                          => '\Google\Api\Ads\AdWords\v201306\classes\LongValue',
        "MobileAppCategory"                  => '\Google\Api\Ads\AdWords\v201306\classes\MobileAppCategory',
        "MobileApplication"                  => '\Google\Api\Ads\AdWords\v201306\classes\MobileApplication',
        "Money"                              => '\Google\Api\Ads\AdWords\v201306\classes\Money',
        "NetworkSetting"                     => '\Google\Api\Ads\AdWords\v201306\classes\NetworkSetting',
        "NotEmptyError"                      => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
        "NotWhitelistedError"                => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
        "NullError"                          => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
        "OperationAccessDenied"              => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
        "OperatorError"                      => '\Google\Api\Ads\AdWords\v201306\classes\OperatorError',
        "Placement"                          => '\Google\Api\Ads\AdWords\v201306\classes\Placement',
        "Product"                            => '\Google\Api\Ads\AdWords\v201306\classes\Product',
        "ProductCondition"                   => '\Google\Api\Ads\AdWords\v201306\classes\ProductCondition',
        "ProductConditionOperand"            => '\Google\Api\Ads\AdWords\v201306\classes\ProductConditionOperand',
        "QuotaCheckError"                    => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
        "RangeError"                         => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
        "RateExceededError"                  => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
        "ReadOnlyError"                      => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
        "RegionCodeError"                    => '\Google\Api\Ads\AdWords\v201306\classes\RegionCodeError',
        "RejectedError"                      => '\Google\Api\Ads\AdWords\v201306\classes\RejectedError',
        "RequestError"                       => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
        "RequiredError"                      => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
        "SizeLimitError"                     => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
        "SoapResponseHeader"                 => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
        "StringLengthError"                  => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
        "TargetError"                        => '\Google\Api\Ads\AdWords\v201306\classes\TargetError',
        "CriterionUserInterest"              => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserInterest',
        "CriterionUserList"                  => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserList',
        "Vertical"                           => '\Google\Api\Ads\AdWords\v201306\classes\Vertical',
        "Webpage"                            => '\Google\Api\Ads\AdWords\v201306\classes\Webpage',
        "WebpageCondition"                   => '\Google\Api\Ads\AdWords\v201306\classes\WebpageCondition',
        "WebpageParameter"                   => '\Google\Api\Ads\AdWords\v201306\classes\WebpageParameter',
        "AdxError.Reason"                    => '\Google\Api\Ads\AdWords\v201306\classes\AdxErrorReason',
        "AuthenticationError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
        "AuthorizationError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
        "ClientTermsError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
        "Criterion.Type"                     => '\Google\Api\Ads\AdWords\v201306\classes\CriterionType',
        "DatabaseError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
        "DateError.Reason"                   => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
        "DistinctError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
        "EntityAccessDenied.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\EntityAccessDeniedReason',
        "EntityNotFound.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
        "IdError.Reason"                     => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
        "InternalApiError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
        "KeywordMatchType"                   => '\Google\Api\Ads\AdWords\v201306\classes\KeywordMatchType',
        "LocationTargetingStatus"            => '\Google\Api\Ads\AdWords\v201306\classes\LocationTargetingStatus',
        "NotEmptyError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
        "NotWhitelistedError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
        "NullError.Reason"                   => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
        "OperationAccessDenied.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
        "OperatorError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\OperatorErrorReason',
        "QuotaCheckError.Reason"             => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
        "RangeError.Reason"                  => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
        "RateExceededError.Reason"           => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
        "ReadOnlyError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
        "RegionCodeError.Reason"             => '\Google\Api\Ads\AdWords\v201306\classes\RegionCodeErrorReason',
        "RejectedError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\RejectedErrorReason',
        "RequestError.Reason"                => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
        "RequiredError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
        "SizeLimitError.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
        "StringLengthError.Reason"           => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
        "TargetError.Reason"                 => '\Google\Api\Ads\AdWords\v201306\classes\TargetErrorReason',
        "CriterionUserList.MembershipStatus" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserListMembershipStatus',
        "WebpageConditionOperand"            => '\Google\Api\Ads\AdWords\v201306\classes\WebpageConditionOperand',
        "AdGroupEstimate"                    => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupEstimate',
        "Estimate"                           => '\Google\Api\Ads\AdWords\v201306\classes\Estimate',
        "AdGroupEstimateRequest"             => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupEstimateRequest',
        "EstimateRequest"                    => '\Google\Api\Ads\AdWords\v201306\classes\EstimateRequest',
        "CampaignEstimate"                   => '\Google\Api\Ads\AdWords\v201306\classes\CampaignEstimate',
        "CampaignEstimateRequest"            => '\Google\Api\Ads\AdWords\v201306\classes\CampaignEstimateRequest',
        "CurrencyCodeError"                  => '\Google\Api\Ads\AdWords\v201306\classes\CurrencyCodeError',
        "KeywordEstimate"                    => '\Google\Api\Ads\AdWords\v201306\classes\KeywordEstimate',
        "KeywordEstimateRequest"             => '\Google\Api\Ads\AdWords\v201306\classes\KeywordEstimateRequest',
        "MatchesRegexError"                  => '\Google\Api\Ads\AdWords\v201306\classes\MatchesRegexError',
        "StatsEstimate"                      => '\Google\Api\Ads\AdWords\v201306\classes\StatsEstimate',
        "TrafficEstimatorError"              => '\Google\Api\Ads\AdWords\v201306\classes\TrafficEstimatorError',
        "TrafficEstimatorResult"             => '\Google\Api\Ads\AdWords\v201306\classes\TrafficEstimatorResult',
        "TrafficEstimatorSelector"           => '\Google\Api\Ads\AdWords\v201306\classes\TrafficEstimatorSelector',
        "CurrencyCodeError.Reason"           => '\Google\Api\Ads\AdWords\v201306\classes\CurrencyCodeErrorReason',
        "MatchesRegexError.Reason"           => '\Google\Api\Ads\AdWords\v201306\classes\MatchesRegexErrorReason',
        "TrafficEstimatorError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\TrafficEstimatorErrorReason',
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/o/v201306/TrafficEstimatorService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = TrafficEstimatorService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'TrafficEstimatorService',
            'https://adwords.google.com/api/adwords/o/v201306'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns traffic estimates for specified criteria.
     *
     * @param selector Campaigns, ad groups and keywords for which traffic
     *                 should be estimated.
     *
     * @return Traffic estimation results.
     * @throws ApiException if problems occurred while retrieving estimates
     */
    public function get($selector)
    {
        $arg = new TrafficEstimatorServiceGet($selector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }

}