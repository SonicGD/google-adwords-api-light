<?php

require_once('SharedCriterionService.require.php');


/**
 * SharedCriterionService
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class SharedCriterionService extends AdWordsSoapClient
{

  const SERVICE_NAME = "SharedCriterionService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
  const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201605/SharedCriterionService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201605/SharedCriterionService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = [
      "AuthenticationError"                => "AuthenticationError",
      "AuthorizationError"                 => "AuthorizationError",
      "ClientTermsError"                   => "ClientTermsError",
      "CriterionError"                     => "CriterionError",
      "DateRange"                          => "DateRange",
      "DistinctError"                      => "DistinctError",
      "EntityCountLimitExceeded"           => "EntityCountLimitExceeded",
      "EntityNotFound"                     => "EntityNotFound",
      "IdError"                            => "IdError",
      "InternalApiError"                   => "InternalApiError",
      "Keyword"                            => "Keyword",
      "MobileAppCategory"                  => "MobileAppCategory",
      "MobileApplication"                  => "MobileApplication",
      "NotEmptyError"                      => "NotEmptyError",
      "NullError"                          => "NullError",
      "OperationAccessDenied"              => "OperationAccessDenied",
      "OperatorError"                      => "OperatorError",
      "OrderBy"                            => "OrderBy",
      "Paging"                             => "Paging",
      "Placement"                          => "Placement",
      "Predicate"                          => "Predicate",
      "QueryError"                         => "QueryError",
      "QuotaCheckError"                    => "QuotaCheckError",
      "RangeError"                         => "RangeError",
      "RateExceededError"                  => "RateExceededError",
      "ReadOnlyError"                      => "ReadOnlyError",
      "RejectedError"                      => "RejectedError",
      "RequestError"                       => "RequestError",
      "RequiredError"                      => "RequiredError",
      "SelectorError"                      => "SelectorError",
      "SharedCriterionError"               => "SharedCriterionError",
      "SizeLimitError"                     => "SizeLimitError",
      "SoapHeader"                         => "SoapRequestHeader",
      "SoapResponseHeader"                 => "SoapResponseHeader",
      "StringFormatError"                  => "StringFormatError",
      "StringLengthError"                  => "StringLengthError",
      "CriterionUserInterest"              => "CriterionUserInterest",
      "CriterionUserList"                  => "CriterionUserList",
      "Vertical"                           => "Vertical",
      "YouTubeChannel"                     => "YouTubeChannel",
      "YouTubeVideo"                       => "YouTubeVideo",
      "DatabaseError"                      => "DatabaseError",
      "ApiError"                           => "ApiError",
      "ApiException"                       => "ApiException",
      "ApplicationException"               => "ApplicationException",
      "Selector"                           => "Selector",
      "Criterion"                          => "Criterion",
      "SharedCriterion"                    => "SharedCriterion",
      "SharedCriterionOperation"           => "SharedCriterionOperation",
      "SharedCriterionPage"                => "SharedCriterionPage",
      "SharedCriterionReturnValue"         => "SharedCriterionReturnValue",
      "ListReturnValue"                    => "ListReturnValue",
      "Operation"                          => "Operation",
      "Page"                               => "Page",
      "AuthenticationError.Reason"         => "AuthenticationErrorReason",
      "AuthorizationError.Reason"          => "AuthorizationErrorReason",
      "ClientTermsError.Reason"            => "ClientTermsErrorReason",
      "Criterion.Type"                     => "CriterionType",
      "CriterionError.Reason"              => "CriterionErrorReason",
      "DatabaseError.Reason"               => "DatabaseErrorReason",
      "DistinctError.Reason"               => "DistinctErrorReason",
      "EntityCountLimitExceeded.Reason"    => "EntityCountLimitExceededReason",
      "EntityNotFound.Reason"              => "EntityNotFoundReason",
      "IdError.Reason"                     => "IdErrorReason",
      "InternalApiError.Reason"            => "InternalApiErrorReason",
      "KeywordMatchType"                   => "KeywordMatchType",
      "NotEmptyError.Reason"               => "NotEmptyErrorReason",
      "NullError.Reason"                   => "NullErrorReason",
      "OperationAccessDenied.Reason"       => "OperationAccessDeniedReason",
      "Operator"                           => "Operator",
      "OperatorError.Reason"               => "OperatorErrorReason",
      "Predicate.Operator"                 => "PredicateOperator",
      "QueryError.Reason"                  => "QueryErrorReason",
      "QuotaCheckError.Reason"             => "QuotaCheckErrorReason",
      "RangeError.Reason"                  => "RangeErrorReason",
      "RateExceededError.Reason"           => "RateExceededErrorReason",
      "ReadOnlyError.Reason"               => "ReadOnlyErrorReason",
      "RejectedError.Reason"               => "RejectedErrorReason",
      "RequestError.Reason"                => "RequestErrorReason",
      "RequiredError.Reason"               => "RequiredErrorReason",
      "SelectorError.Reason"               => "SelectorErrorReason",
      "SharedCriterionError.Reason"        => "SharedCriterionErrorReason",
      "SizeLimitError.Reason"              => "SizeLimitErrorReason",
      "SortOrder"                          => "SortOrder",
      "StringFormatError.Reason"           => "StringFormatErrorReason",
      "StringLengthError.Reason"           => "StringLengthErrorReason",
      "CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
      "get"                                => "SharedCriterionServiceGet",
      "getResponse"                        => "SharedCriterionServiceGetResponse",
      "mutate"                             => "SharedCriterionServiceMutate",
      "mutateResponse"                     => "SharedCriterionServiceMutateResponse",
      "query"                              => "Query",
      "queryResponse"                      => "QueryResponse",
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
   * Returns a list of SharedCriterion that meets the selector criteria.
   *
   * @param selector filters the criteria returned
   * @return The list of SharedCriterion
   * @throws ApiException
   */
  public function get($selector)
  {
    $args = new SharedCriterionServiceGet($selector);
    $result = $this->__soapCall("get", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
   *
   *
   *
   * Adds, removes criteria in a shared set.
   *
   * @param operations A list of unique operations
   * @return The list of updated SharedCriterion, returned in the same order as the
   *                   {@code operations} array.
   * @throws ApiException
   */
  public function mutate($operations)
  {
    $args = new SharedCriterionServiceMutate($operations);
    $result = $this->__soapCall("mutate", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns the list of SharedCriterion that match the query.
   *
   * @param query The SQL-like AWQL query string.
   * @return A list of SharedCriterion.
   * @throws ApiException
   */
  public function query($query)
  {
    $args = new Query($query);
    $result = $this->__soapCall("query", [$args]);
    return $result->rval;
  }
}