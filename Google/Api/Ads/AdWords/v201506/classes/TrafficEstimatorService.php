<?php

require_once('TrafficEstimatorService.require.php');


/**
 * TrafficEstimatorService
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class TrafficEstimatorService extends AdWordsSoapClient
{

  const SERVICE_NAME = "TrafficEstimatorService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201506";
  const ENDPOINT = "https://adwords.google.com/api/adwords/o/v201506/TrafficEstimatorService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/o/v201506/TrafficEstimatorService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = [
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
      "DatabaseError"                      => "DatabaseError",
      "DateError"                          => "DateError",
      "DistinctError"                      => "DistinctError",
      "DoubleValue"                        => "DoubleValue",
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
      "NullError"                          => "NullError",
      "NumberValue"                        => "NumberValue",
      "OperationAccessDenied"              => "OperationAccessDenied",
      "OperatorError"                      => "OperatorError",
      "Placement"                          => "Placement",
      "Platform"                           => "Platform",
      "QuotaCheckError"                    => "QuotaCheckError",
      "RangeError"                         => "RangeError",
      "RateExceededError"                  => "RateExceededError",
      "ReadOnlyError"                      => "ReadOnlyError",
      "RegionCodeError"                    => "RegionCodeError",
      "RejectedError"                      => "RejectedError",
      "RequestError"                       => "RequestError",
      "RequiredError"                      => "RequiredError",
      "SizeLimitError"                     => "SizeLimitError",
      "SoapHeader"                         => "SoapRequestHeader",
      "SoapResponseHeader"                 => "SoapResponseHeader",
      "StringFormatError"                  => "StringFormatError",
      "StringLengthError"                  => "StringLengthError",
      "CriterionUserInterest"              => "CriterionUserInterest",
      "CriterionUserList"                  => "CriterionUserList",
      "Vertical"                           => "Vertical",
      "AdxError.Reason"                    => "AdxErrorReason",
      "AuthenticationError.Reason"         => "AuthenticationErrorReason",
      "AuthorizationError.Reason"          => "AuthorizationErrorReason",
      "ClientTermsError.Reason"            => "ClientTermsErrorReason",
      "CollectionSizeError.Reason"         => "CollectionSizeErrorReason",
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
      "StringFormatError.Reason"           => "StringFormatErrorReason",
      "StringLengthError.Reason"           => "StringLengthErrorReason",
      "CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
      "AdGroupEstimate"                    => "AdGroupEstimate",
      "AdGroupEstimateRequest"             => "AdGroupEstimateRequest",
      "CampaignEstimate"                   => "CampaignEstimate",
      "CampaignEstimateRequest"            => "CampaignEstimateRequest",
      "CurrencyCodeError"                  => "CurrencyCodeError",
      "Estimate"                           => "Estimate",
      "EstimateRequest"                    => "EstimateRequest",
      "KeywordEstimate"                    => "KeywordEstimate",
      "KeywordEstimateRequest"             => "KeywordEstimateRequest",
      "StatsEstimate"                      => "StatsEstimate",
      "TrafficEstimatorError"              => "TrafficEstimatorError",
      "TrafficEstimatorResult"             => "TrafficEstimatorResult",
      "TrafficEstimatorSelector"           => "TrafficEstimatorSelector",
      "CurrencyCodeError.Reason"           => "CurrencyCodeErrorReason",
      "TrafficEstimatorError.Reason"       => "TrafficEstimatorErrorReason",
      "get"                                => "TrafficEstimatorServiceGet",
      "getResponse"                        => "TrafficEstimatorServiceGetResponse",
  ];


  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl    WSDL location for this service
   * @param array  $options Options for the SoapClient
   */
  public function __construct($wsdl, $options, $user)
  {
    $options["classmap"] = self::$classmap;
    parent::__construct($wsdl, $options, $user, self::SERVICE_NAME,
        self::WSDL_NAMESPACE);
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
   * @return Traffic estimation results.
   * @throws ApiException if problems occurred while retrieving estimates
   */
  public function get($selector)
  {
    $args = new TrafficEstimatorServiceGet($selector);
    $result = $this->__soapCall("get", [$args]);
    return $result->rval;
  }
}