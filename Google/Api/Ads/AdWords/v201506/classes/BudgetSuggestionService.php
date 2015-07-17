<?php

require_once('BudgetSuggestionService.require.php');


/**
 * BudgetSuggestionService
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class BudgetSuggestionService extends AdWordsSoapClient
{

  const SERVICE_NAME = "BudgetSuggestionService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201506";
  const ENDPOINT = "https://adwords.google.com/api/adwords/express/v201506/BudgetSuggestionService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/express/v201506/BudgetSuggestionService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = [
      "Address"                            => "Address",
      "ApiError"                           => "ApiError",
      "ApiException"                       => "ApiException",
      "ApplicationException"               => "ApplicationException",
      "AuthenticationError"                => "AuthenticationError",
      "AuthorizationError"                 => "AuthorizationError",
      "ClientTermsError"                   => "ClientTermsError",
      "ComparableValue"                    => "ComparableValue",
      "Criterion"                          => "Criterion",
      "DatabaseError"                      => "DatabaseError",
      "DistinctError"                      => "DistinctError",
      "DoubleValue"                        => "DoubleValue",
      "GeoPoint"                           => "GeoPoint",
      "IdError"                            => "IdError",
      "InternalApiError"                   => "InternalApiError",
      "Keyword"                            => "Keyword",
      "Language"                           => "Language",
      "Location"                           => "Location",
      "LongValue"                          => "LongValue",
      "MobileAppCategory"                  => "MobileAppCategory",
      "MobileApplication"                  => "MobileApplication",
      "Money"                              => "Money",
      "NotEmptyError"                      => "NotEmptyError",
      "NumberValue"                        => "NumberValue",
      "OperationAccessDenied"              => "OperationAccessDenied",
      "Placement"                          => "Placement",
      "Proximity"                          => "Proximity",
      "QuotaCheckError"                    => "QuotaCheckError",
      "RangeError"                         => "RangeError",
      "RateExceededError"                  => "RateExceededError",
      "ReadOnlyError"                      => "ReadOnlyError",
      "RejectedError"                      => "RejectedError",
      "RequestError"                       => "RequestError",
      "RequiredError"                      => "RequiredError",
      "SizeLimitError"                     => "SizeLimitError",
      "SoapHeader"                         => "SoapRequestHeader",
      "SoapResponseHeader"                 => "SoapResponseHeader",
      "StringLengthError"                  => "StringLengthError",
      "CriterionUserInterest"              => "CriterionUserInterest",
      "CriterionUserList"                  => "CriterionUserList",
      "Vertical"                           => "Vertical",
      "AuthenticationError.Reason"         => "AuthenticationErrorReason",
      "AuthorizationError.Reason"          => "AuthorizationErrorReason",
      "ClientTermsError.Reason"            => "ClientTermsErrorReason",
      "Criterion.Type"                     => "CriterionType",
      "DatabaseError.Reason"               => "DatabaseErrorReason",
      "DistinctError.Reason"               => "DistinctErrorReason",
      "IdError.Reason"                     => "IdErrorReason",
      "InternalApiError.Reason"            => "InternalApiErrorReason",
      "KeywordMatchType"                   => "KeywordMatchType",
      "LocationTargetingStatus"            => "LocationTargetingStatus",
      "NotEmptyError.Reason"               => "NotEmptyErrorReason",
      "OperationAccessDenied.Reason"       => "OperationAccessDeniedReason",
      "Proximity.DistanceUnits"            => "ProximityDistanceUnits",
      "QuotaCheckError.Reason"             => "QuotaCheckErrorReason",
      "RangeError.Reason"                  => "RangeErrorReason",
      "RateExceededError.Reason"           => "RateExceededErrorReason",
      "ReadOnlyError.Reason"               => "ReadOnlyErrorReason",
      "RejectedError.Reason"               => "RejectedErrorReason",
      "RequestError.Reason"                => "RequestErrorReason",
      "RequiredError.Reason"               => "RequiredErrorReason",
      "SizeLimitError.Reason"              => "SizeLimitErrorReason",
      "StringLengthError.Reason"           => "StringLengthErrorReason",
      "CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
      "BudgetSuggestion"                   => "BudgetSuggestion",
      "BudgetSuggestionSelector"           => "BudgetSuggestionSelector",
      "ExpressSoapHeader"                  => "ExpressSoapHeader",
      "KeywordGroup"                       => "KeywordGroup",
      "KeywordSet"                         => "KeywordSet",
      "NegativeCriterion"                  => "NegativeCriterion",
      "NegativeKeyword"                    => "NegativeKeyword",
      "ProductService"                     => "ProductService",
      "CurrencyCode"                       => "CurrencyCode",
      "get"                                => "BudgetSuggestionServiceGet",
      "getResponse"                        => "BudgetSuggestionServiceGetResponse",
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
   * Retrieves the budget suggestion for the specified criteria in the given selector based on
   * co-trigger data.
   * @param selector the selector specifying the budget suggestion to return
   * @return budget suggestion identified by the selector
   */
  public function get($selector)
  {
    $args = new BudgetSuggestionServiceGet($selector);
    $result = $this->__soapCall("get", [$args]);
    return $result->rval;
  }
}