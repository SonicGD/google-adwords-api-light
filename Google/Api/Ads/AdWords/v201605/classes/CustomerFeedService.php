<?php

require_once('CustomerFeedService.require.php');


/**
 * CustomerFeedService
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class CustomerFeedService extends AdWordsSoapClient
{

  const SERVICE_NAME = "CustomerFeedService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
  const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201605/CustomerFeedService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201605/CustomerFeedService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = [
      "ApiError"                          => "ApiError",
      "ApiException"                      => "ApiException",
      "ApplicationException"              => "ApplicationException",
      "AuthenticationError"               => "AuthenticationError",
      "AuthorizationError"                => "AuthorizationError",
      "ClientTermsError"                  => "ClientTermsError",
      "CollectionSizeError"               => "CollectionSizeError",
      "ConstantOperand"                   => "ConstantOperand",
      "CustomerFeed"                      => "CustomerFeed",
      "CustomerFeedError"                 => "CustomerFeedError",
      "CustomerFeedOperation"             => "CustomerFeedOperation",
      "CustomerFeedPage"                  => "CustomerFeedPage",
      "CustomerFeedReturnValue"           => "CustomerFeedReturnValue",
      "DatabaseError"                     => "DatabaseError",
      "DateRange"                         => "DateRange",
      "DistinctError"                     => "DistinctError",
      "EntityNotFound"                    => "EntityNotFound",
      "FeedAttributeOperand"              => "FeedAttributeOperand",
      "Function"                          => "FeedFunction",
      "FunctionError"                     => "FunctionError",
      "FunctionOperand"                   => "FunctionOperand",
      "IdError"                           => "IdError",
      "InternalApiError"                  => "InternalApiError",
      "ListReturnValue"                   => "ListReturnValue",
      "NotEmptyError"                     => "NotEmptyError",
      "NullStatsPage"                     => "NullStatsPage",
      "FunctionArgumentOperand"           => "FunctionArgumentOperand",
      "Operation"                         => "Operation",
      "OperationAccessDenied"             => "OperationAccessDenied",
      "OperatorError"                     => "OperatorError",
      "OrderBy"                           => "OrderBy",
      "Page"                              => "Page",
      "Paging"                            => "Paging",
      "Predicate"                         => "Predicate",
      "QueryError"                        => "QueryError",
      "QuotaCheckError"                   => "QuotaCheckError",
      "RangeError"                        => "RangeError",
      "RateExceededError"                 => "RateExceededError",
      "ReadOnlyError"                     => "ReadOnlyError",
      "RejectedError"                     => "RejectedError",
      "RequestContextOperand"             => "RequestContextOperand",
      "RequestError"                      => "RequestError",
      "RequiredError"                     => "RequiredError",
      "Selector"                          => "Selector",
      "SelectorError"                     => "SelectorError",
      "SizeLimitError"                    => "SizeLimitError",
      "SoapHeader"                        => "SoapRequestHeader",
      "SoapResponseHeader"                => "SoapResponseHeader",
      "StringFormatError"                 => "StringFormatError",
      "StringLengthError"                 => "StringLengthError",
      "AuthenticationError.Reason"        => "AuthenticationErrorReason",
      "AuthorizationError.Reason"         => "AuthorizationErrorReason",
      "ClientTermsError.Reason"           => "ClientTermsErrorReason",
      "CollectionSizeError.Reason"        => "CollectionSizeErrorReason",
      "ConstantOperand.ConstantType"      => "ConstantOperandConstantType",
      "ConstantOperand.Unit"              => "ConstantOperandUnit",
      "CustomerFeed.Status"               => "CustomerFeedStatus",
      "CustomerFeedError.Reason"          => "CustomerFeedErrorReason",
      "DatabaseError.Reason"              => "DatabaseErrorReason",
      "DistinctError.Reason"              => "DistinctErrorReason",
      "EntityNotFound.Reason"             => "EntityNotFoundReason",
      "Function.Operator"                 => "FunctionOperator",
      "FunctionError.Reason"              => "FunctionErrorReason",
      "IdError.Reason"                    => "IdErrorReason",
      "InternalApiError.Reason"           => "InternalApiErrorReason",
      "NotEmptyError.Reason"              => "NotEmptyErrorReason",
      "OperationAccessDenied.Reason"      => "OperationAccessDeniedReason",
      "Operator"                          => "Operator",
      "OperatorError.Reason"              => "OperatorErrorReason",
      "Predicate.Operator"                => "PredicateOperator",
      "QueryError.Reason"                 => "QueryErrorReason",
      "QuotaCheckError.Reason"            => "QuotaCheckErrorReason",
      "RangeError.Reason"                 => "RangeErrorReason",
      "RateExceededError.Reason"          => "RateExceededErrorReason",
      "ReadOnlyError.Reason"              => "ReadOnlyErrorReason",
      "RejectedError.Reason"              => "RejectedErrorReason",
      "RequestContextOperand.ContextType" => "RequestContextOperandContextType",
      "RequestError.Reason"               => "RequestErrorReason",
      "RequiredError.Reason"              => "RequiredErrorReason",
      "SelectorError.Reason"              => "SelectorErrorReason",
      "SizeLimitError.Reason"             => "SizeLimitErrorReason",
      "SortOrder"                         => "SortOrder",
      "StringFormatError.Reason"          => "StringFormatErrorReason",
      "StringLengthError.Reason"          => "StringLengthErrorReason",
      "get"                               => "CustomerFeedServiceGet",
      "getResponse"                       => "CustomerFeedServiceGetResponse",
      "mutate"                            => "CustomerFeedServiceMutate",
      "mutateResponse"                    => "CustomerFeedServiceMutateResponse",
      "query"                             => "Query",
      "queryResponse"                     => "QueryResponse",
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
   * Returns a list of customer feeds that meet the selector criteria.
   *
   * @param selector Determines which customer feeds to return. If empty, all
   *                 customer feeds are returned.
   * @return The list of customer feeds.
   * @throws ApiException Indicates a problem with the request.
   */
  public function get($selector)
  {
    $args = new CustomerFeedServiceGet($selector);
    $result = $this->__soapCall("get", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Adds, sets, or removes customer feeds.
   *
   * @param operations The operations to apply.
   * @return The resulting feeds.
   * @throws ApiException Indicates a problem with the request.
   */
  public function mutate($operations)
  {
    $args = new CustomerFeedServiceMutate($operations);
    $result = $this->__soapCall("mutate", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns the list of customer feeds that match the query.
   *
   * @param query The SQL-like AWQL query string.
   * @return A list of CustomerFeed.
   * @throws ApiException If problems occur while parsing the query or fetching CustomerFeed.
   */
  public function query($query)
  {
    $args = new Query($query);
    $result = $this->__soapCall("query", [$args]);
    return $result->rval;
  }
}