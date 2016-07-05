<?php

require_once('LocationCriterionService.require.php');


/**
 * LocationCriterionService
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class LocationCriterionService extends AdWordsSoapClient
{

  const SERVICE_NAME = "LocationCriterionService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
  const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201605/LocationCriterionService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201605/LocationCriterionService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = [
      "AdxError"                             => "AdxError",
      "ApiError"                             => "ApiError",
      "ApiException"                         => "ApiException",
      "ApplicationException"                 => "ApplicationException",
      "AuthenticationError"                  => "AuthenticationError",
      "AuthorizationError"                   => "AuthorizationError",
      "ClientTermsError"                     => "ClientTermsError",
      "Criterion"                            => "Criterion",
      "DatabaseError"                        => "DatabaseError",
      "DateError"                            => "DateError",
      "DateRange"                            => "DateRange",
      "DistinctError"                        => "DistinctError",
      "IdError"                              => "IdError",
      "InternalApiError"                     => "InternalApiError",
      "Keyword"                              => "Keyword",
      "Location"                             => "Location",
      "LocationCriterion"                    => "LocationCriterion",
      "LocationCriterionServiceError"        => "LocationCriterionServiceError",
      "MobileAppCategory"                    => "MobileAppCategory",
      "MobileApplication"                    => "MobileApplication",
      "NotEmptyError"                        => "NotEmptyError",
      "NullError"                            => "NullError",
      "OperationAccessDenied"                => "OperationAccessDenied",
      "OperatorError"                        => "OperatorError",
      "OrderBy"                              => "OrderBy",
      "Paging"                               => "Paging",
      "Placement"                            => "Placement",
      "Predicate"                            => "Predicate",
      "QueryError"                           => "QueryError",
      "QuotaCheckError"                      => "QuotaCheckError",
      "RangeError"                           => "RangeError",
      "RateExceededError"                    => "RateExceededError",
      "ReadOnlyError"                        => "ReadOnlyError",
      "RejectedError"                        => "RejectedError",
      "RequestError"                         => "RequestError",
      "RequiredError"                        => "RequiredError",
      "Selector"                             => "Selector",
      "SelectorError"                        => "SelectorError",
      "SizeLimitError"                       => "SizeLimitError",
      "SoapHeader"                           => "SoapRequestHeader",
      "SoapResponseHeader"                   => "SoapResponseHeader",
      "StringFormatError"                    => "StringFormatError",
      "StringLengthError"                    => "StringLengthError",
      "CriterionUserInterest"                => "CriterionUserInterest",
      "CriterionUserList"                    => "CriterionUserList",
      "Vertical"                             => "Vertical",
      "AdxError.Reason"                      => "AdxErrorReason",
      "AuthenticationError.Reason"           => "AuthenticationErrorReason",
      "AuthorizationError.Reason"            => "AuthorizationErrorReason",
      "ClientTermsError.Reason"              => "ClientTermsErrorReason",
      "Criterion.Type"                       => "CriterionType",
      "DatabaseError.Reason"                 => "DatabaseErrorReason",
      "DateError.Reason"                     => "DateErrorReason",
      "DistinctError.Reason"                 => "DistinctErrorReason",
      "IdError.Reason"                       => "IdErrorReason",
      "InternalApiError.Reason"              => "InternalApiErrorReason",
      "KeywordMatchType"                     => "KeywordMatchType",
      "LocationCriterionServiceError.Reason" => "LocationCriterionServiceErrorReason",
      "LocationTargetingStatus"              => "LocationTargetingStatus",
      "NotEmptyError.Reason"                 => "NotEmptyErrorReason",
      "NullError.Reason"                     => "NullErrorReason",
      "OperationAccessDenied.Reason"         => "OperationAccessDeniedReason",
      "OperatorError.Reason"                 => "OperatorErrorReason",
      "Predicate.Operator"                   => "PredicateOperator",
      "QueryError.Reason"                    => "QueryErrorReason",
      "QuotaCheckError.Reason"               => "QuotaCheckErrorReason",
      "RangeError.Reason"                    => "RangeErrorReason",
      "RateExceededError.Reason"             => "RateExceededErrorReason",
      "ReadOnlyError.Reason"                 => "ReadOnlyErrorReason",
      "RejectedError.Reason"                 => "RejectedErrorReason",
      "RequestError.Reason"                  => "RequestErrorReason",
      "RequiredError.Reason"                 => "RequiredErrorReason",
      "SelectorError.Reason"                 => "SelectorErrorReason",
      "SizeLimitError.Reason"                => "SizeLimitErrorReason",
      "SortOrder"                            => "SortOrder",
      "StringFormatError.Reason"             => "StringFormatErrorReason",
      "StringLengthError.Reason"             => "StringLengthErrorReason",
      "CriterionUserList.MembershipStatus"   => "CriterionUserListMembershipStatus",
      "get"                                  => "LocationCriterionServiceGet",
      "getResponse"                          => "LocationCriterionServiceGetResponse",
      "query"                                => "Query",
      "queryResponse"                        => "QueryResponse",
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
   * Returns a list of {@link LocationCriterion}'s that match the specified selector.
   *
   * @param selector filters the LocationCriterion to be returned.
   * @return A list of location criterion.
   * @throws ApiException when there is at least one error with the request.
   */
  public function get($selector)
  {
    $args = new LocationCriterionServiceGet($selector);
    $result = $this->__soapCall("get", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns the list of {@link LocationCriterion}s that match the query.
   *
   * @param query The SQL-like AWQL query string
   * @returns The list of location criteria
   * @throws ApiException when the query is invalid or there are errors processing the request.
   */
  public function query($query)
  {
    $args = new Query($query);
    $result = $this->__soapCall("query", [$args]);
    return $result->rval;
  }
}