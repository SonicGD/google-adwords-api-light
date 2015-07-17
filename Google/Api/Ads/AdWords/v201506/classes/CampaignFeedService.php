<?php

require_once('CampaignFeedService.require.php');


/**
 * CampaignFeedService
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class CampaignFeedService extends AdWordsSoapClient
{

  const SERVICE_NAME = "CampaignFeedService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201506";
  const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201506/CampaignFeedService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201506/CampaignFeedService";
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
      "CampaignFeed"                      => "CampaignFeed",
      "CampaignFeedError"                 => "CampaignFeedError",
      "CampaignFeedOperation"             => "CampaignFeedOperation",
      "CampaignFeedPage"                  => "CampaignFeedPage",
      "CampaignFeedReturnValue"           => "CampaignFeedReturnValue",
      "ClientTermsError"                  => "ClientTermsError",
      "CollectionSizeError"               => "CollectionSizeError",
      "ConstantOperand"                   => "ConstantOperand",
      "DatabaseError"                     => "DatabaseError",
      "DateRange"                         => "DateRange",
      "DistinctError"                     => "DistinctError",
      "EntityCountLimitExceeded"          => "EntityCountLimitExceeded",
      "EntityNotFound"                    => "EntityNotFound",
      "FeedAttributeOperand"              => "FeedAttributeOperand",
      "Function"                          => "FeedFunction",
      "FunctionError"                     => "FunctionError",
      "FunctionOperand"                   => "FunctionOperand",
      "IdError"                           => "IdError",
      "InternalApiError"                  => "InternalApiError",
      "ListReturnValue"                   => "ListReturnValue",
      "NotEmptyError"                     => "NotEmptyError",
      "NullError"                         => "NullError",
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
      "StringLengthError"                 => "StringLengthError",
      "AuthenticationError.Reason"        => "AuthenticationErrorReason",
      "AuthorizationError.Reason"         => "AuthorizationErrorReason",
      "CampaignFeed.Status"               => "CampaignFeedStatus",
      "CampaignFeedError.Reason"          => "CampaignFeedErrorReason",
      "ClientTermsError.Reason"           => "ClientTermsErrorReason",
      "CollectionSizeError.Reason"        => "CollectionSizeErrorReason",
      "ConstantOperand.ConstantType"      => "ConstantOperandConstantType",
      "ConstantOperand.Unit"              => "ConstantOperandUnit",
      "DatabaseError.Reason"              => "DatabaseErrorReason",
      "DistinctError.Reason"              => "DistinctErrorReason",
      "EntityCountLimitExceeded.Reason"   => "EntityCountLimitExceededReason",
      "EntityNotFound.Reason"             => "EntityNotFoundReason",
      "Function.Operator"                 => "FunctionOperator",
      "FunctionError.Reason"              => "FunctionErrorReason",
      "IdError.Reason"                    => "IdErrorReason",
      "InternalApiError.Reason"           => "InternalApiErrorReason",
      "NotEmptyError.Reason"              => "NotEmptyErrorReason",
      "NullError.Reason"                  => "NullErrorReason",
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
      "StringLengthError.Reason"          => "StringLengthErrorReason",
      "get"                               => "CampaignFeedServiceGet",
      "getResponse"                       => "CampaignFeedServiceGetResponse",
      "mutate"                            => "CampaignFeedServiceMutate",
      "mutateResponse"                    => "CampaignFeedServiceMutateResponse",
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
   * Returns a list of CampaignFeeds that meet the selector criteria.
   *
   * @param selector Determines which CampaignFeeds to return. If empty all
   *                 Campaign feeds are returned.
   * @return The list of CampaignFeeds.
   * @throws ApiException Indicates a problem with the request.
   */
  public function get($selector)
  {
    $args = new CampaignFeedServiceGet($selector);
    $result = $this->__soapCall("get", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET, REMOVE.</span>
   *
   *
   *
   * Adds, sets or removes CampaignFeeds.
   *
   * @param operations The operations to apply.
   * @return The resulting Feeds.
   * @throws ApiException Indicates a problem with the request.
   */
  public function mutate($operations)
  {
    $args = new CampaignFeedServiceMutate($operations);
    $result = $this->__soapCall("mutate", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns a list of {@link CampaignFeed}s inside a {@link CampaignFeedPage} that matches
   * the query.
   *
   * @param query The SQL-like AWQL query string.
   * @throws ApiException when there are one or more errors with the request.
   */
  public function query($query)
  {
    $args = new Query($query);
    $result = $this->__soapCall("query", [$args]);
    return $result->rval;
  }
}