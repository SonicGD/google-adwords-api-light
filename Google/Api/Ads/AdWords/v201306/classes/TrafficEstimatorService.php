<?php

require_once('TrafficEstimatorService.require.php');


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
        "getResponse"                        => "TrafficEstimatorServiceGetResponse",
        "get"                                => "TrafficEstimatorServiceGet",
        "mutate"                             => "TrafficEstimatorServiceMutate",
        "mutateResponse"                     => "TrafficEstimatorServiceMutateResponse",
        "DateTime"                           => "AdWordsDateTime",
        "SoapHeader"                         => "SoapRequestHeader",
        "AdxError"                           => "AdxError",
        "ApiError"                           => "ApiError",
        "ApiException"                       => "ApiException",
        "ApplicationException"               => "ApplicationException",
        "AuthenticationError"                => "AuthenticationError",
        "AuthorizationError"                 => "AuthorizationError",
        "ClientTermsError"                   => "ClientTermsError",
        "CollectionSizeError"                => "CollectionSizeError",
        "ComparableValue"                    => "ComparableValue",
        "Criterion"                          => "Criterion",
        "CriterionParameter"                 => "CriterionParameter",
        "DatabaseError"                      => "DatabaseError",
        "DateError"                          => "DateError",
        "DistinctError"                      => "DistinctError",
        "DoubleValue"                        => "DoubleValue",
        "NumberValue"                        => "NumberValue",
        "EntityAccessDenied"                 => "EntityAccessDenied",
        "EntityNotFound"                     => "EntityNotFound",
        "IdError"                            => "IdError",
        "InternalApiError"                   => "InternalApiError",
        "Keyword"                            => "Keyword",
        "Language"                           => "Language",
        "Location"                           => "Location",
        "LongValue"                          => "LongValue",
        "MobileAppCategory"                  => "MobileAppCategory",
        "MobileApplication"                  => "MobileApplication",
        "Money"                              => "Money",
        "NetworkSetting"                     => "NetworkSetting",
        "NotEmptyError"                      => "NotEmptyError",
        "NotWhitelistedError"                => "NotWhitelistedError",
        "NullError"                          => "NullError",
        "OperationAccessDenied"              => "OperationAccessDenied",
        "OperatorError"                      => "OperatorError",
        "Placement"                          => "Placement",
        "Product"                            => "Product",
        "ProductCondition"                   => "ProductCondition",
        "ProductConditionOperand"            => "ProductConditionOperand",
        "QuotaCheckError"                    => "QuotaCheckError",
        "RangeError"                         => "RangeError",
        "RateExceededError"                  => "RateExceededError",
        "ReadOnlyError"                      => "ReadOnlyError",
        "RegionCodeError"                    => "RegionCodeError",
        "RejectedError"                      => "RejectedError",
        "RequestError"                       => "RequestError",
        "RequiredError"                      => "RequiredError",
        "SizeLimitError"                     => "SizeLimitError",
        "SoapResponseHeader"                 => "SoapResponseHeader",
        "StringLengthError"                  => "StringLengthError",
        "TargetError"                        => "TargetError",
        "CriterionUserInterest"              => "CriterionUserInterest",
        "CriterionUserList"                  => "CriterionUserList",
        "Vertical"                           => "Vertical",
        "Webpage"                            => "Webpage",
        "WebpageCondition"                   => "WebpageCondition",
        "WebpageParameter"                   => "WebpageParameter",
        "AdxError.Reason"                    => "AdxErrorReason",
        "AuthenticationError.Reason"         => "AuthenticationErrorReason",
        "AuthorizationError.Reason"          => "AuthorizationErrorReason",
        "ClientTermsError.Reason"            => "ClientTermsErrorReason",
        "Criterion.Type"                     => "CriterionType",
        "DatabaseError.Reason"               => "DatabaseErrorReason",
        "DateError.Reason"                   => "DateErrorReason",
        "DistinctError.Reason"               => "DistinctErrorReason",
        "EntityAccessDenied.Reason"          => "EntityAccessDeniedReason",
        "EntityNotFound.Reason"              => "EntityNotFoundReason",
        "IdError.Reason"                     => "IdErrorReason",
        "InternalApiError.Reason"            => "InternalApiErrorReason",
        "KeywordMatchType"                   => "KeywordMatchType",
        "LocationTargetingStatus"            => "LocationTargetingStatus",
        "NotEmptyError.Reason"               => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason"         => "NotWhitelistedErrorReason",
        "NullError.Reason"                   => "NullErrorReason",
        "OperationAccessDenied.Reason"       => "OperationAccessDeniedReason",
        "OperatorError.Reason"               => "OperatorErrorReason",
        "QuotaCheckError.Reason"             => "QuotaCheckErrorReason",
        "RangeError.Reason"                  => "RangeErrorReason",
        "RateExceededError.Reason"           => "RateExceededErrorReason",
        "ReadOnlyError.Reason"               => "ReadOnlyErrorReason",
        "RegionCodeError.Reason"             => "RegionCodeErrorReason",
        "RejectedError.Reason"               => "RejectedErrorReason",
        "RequestError.Reason"                => "RequestErrorReason",
        "RequiredError.Reason"               => "RequiredErrorReason",
        "SizeLimitError.Reason"              => "SizeLimitErrorReason",
        "StringLengthError.Reason"           => "StringLengthErrorReason",
        "TargetError.Reason"                 => "TargetErrorReason",
        "CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
        "WebpageConditionOperand"            => "WebpageConditionOperand",
        "AdGroupEstimate"                    => "AdGroupEstimate",
        "Estimate"                           => "Estimate",
        "AdGroupEstimateRequest"             => "AdGroupEstimateRequest",
        "EstimateRequest"                    => "EstimateRequest",
        "CampaignEstimate"                   => "CampaignEstimate",
        "CampaignEstimateRequest"            => "CampaignEstimateRequest",
        "CurrencyCodeError"                  => "CurrencyCodeError",
        "KeywordEstimate"                    => "KeywordEstimate",
        "KeywordEstimateRequest"             => "KeywordEstimateRequest",
        "MatchesRegexError"                  => "MatchesRegexError",
        "StatsEstimate"                      => "StatsEstimate",
        "TrafficEstimatorError"              => "TrafficEstimatorError",
        "TrafficEstimatorResult"             => "TrafficEstimatorResult",
        "TrafficEstimatorSelector"           => "TrafficEstimatorSelector",
        "CurrencyCodeError.Reason"           => "CurrencyCodeErrorReason",
        "MatchesRegexError.Reason"           => "MatchesRegexErrorReason",
        "TrafficEstimatorError.Reason"       => "TrafficEstimatorErrorReason",
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