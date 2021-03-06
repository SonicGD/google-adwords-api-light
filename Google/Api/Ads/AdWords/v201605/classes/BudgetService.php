<?php

require_once('BudgetService.require.php');


/**
 * BudgetService
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class BudgetService extends AdWordsSoapClient
{

  const SERVICE_NAME = "BudgetService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
  const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201605/BudgetService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201605/BudgetService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = [
      "AuthenticationError"             => "AuthenticationError",
      "AuthorizationError"              => "AuthorizationError",
      "BudgetError"                     => "BudgetError",
      "ClientTermsError"                => "ClientTermsError",
      "DateError"                       => "DateError",
      "DateRange"                       => "DateRange",
      "DateRangeError"                  => "DateRangeError",
      "DistinctError"                   => "DistinctError",
      "DoubleValue"                     => "DoubleValue",
      "EntityCountLimitExceeded"        => "EntityCountLimitExceeded",
      "EntityNotFound"                  => "EntityNotFound",
      "IdError"                         => "IdError",
      "InternalApiError"                => "InternalApiError",
      "LongValue"                       => "LongValue",
      "Money"                           => "Money",
      "NewEntityCreationError"          => "NewEntityCreationError",
      "NotEmptyError"                   => "NotEmptyError",
      "NullError"                       => "NullError",
      "NumberValue"                     => "NumberValue",
      "OperationAccessDenied"           => "OperationAccessDenied",
      "OperatorError"                   => "OperatorError",
      "OrderBy"                         => "OrderBy",
      "Paging"                          => "Paging",
      "Predicate"                       => "Predicate",
      "QueryError"                      => "QueryError",
      "QuotaCheckError"                 => "QuotaCheckError",
      "RangeError"                      => "RangeError",
      "RateExceededError"               => "RateExceededError",
      "ReadOnlyError"                   => "ReadOnlyError",
      "RejectedError"                   => "RejectedError",
      "RequestError"                    => "RequestError",
      "RequiredError"                   => "RequiredError",
      "SelectorError"                   => "SelectorError",
      "SizeLimitError"                  => "SizeLimitError",
      "SoapHeader"                      => "SoapRequestHeader",
      "SoapResponseHeader"              => "SoapResponseHeader",
      "StringFormatError"               => "StringFormatError",
      "StringLengthError"               => "StringLengthError",
      "ComparableValue"                 => "ComparableValue",
      "DatabaseError"                   => "DatabaseError",
      "ApiError"                        => "ApiError",
      "ApiException"                    => "ApiException",
      "ApplicationException"            => "ApplicationException",
      "Selector"                        => "Selector",
      "Budget"                          => "Budget",
      "BudgetOperation"                 => "BudgetOperation",
      "BudgetPage"                      => "BudgetPage",
      "BudgetReturnValue"               => "BudgetReturnValue",
      "ListReturnValue"                 => "ListReturnValue",
      "Operation"                       => "Operation",
      "Page"                            => "Page",
      "AuthenticationError.Reason"      => "AuthenticationErrorReason",
      "AuthorizationError.Reason"       => "AuthorizationErrorReason",
      "Budget.BudgetDeliveryMethod"     => "BudgetBudgetDeliveryMethod",
      "Budget.BudgetStatus"             => "BudgetBudgetStatus",
      "BudgetError.Reason"              => "BudgetErrorReason",
      "ClientTermsError.Reason"         => "ClientTermsErrorReason",
      "DatabaseError.Reason"            => "DatabaseErrorReason",
      "DateError.Reason"                => "DateErrorReason",
      "DateRangeError.Reason"           => "DateRangeErrorReason",
      "DistinctError.Reason"            => "DistinctErrorReason",
      "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
      "EntityNotFound.Reason"           => "EntityNotFoundReason",
      "IdError.Reason"                  => "IdErrorReason",
      "InternalApiError.Reason"         => "InternalApiErrorReason",
      "NewEntityCreationError.Reason"   => "NewEntityCreationErrorReason",
      "NotEmptyError.Reason"            => "NotEmptyErrorReason",
      "NullError.Reason"                => "NullErrorReason",
      "OperationAccessDenied.Reason"    => "OperationAccessDeniedReason",
      "Operator"                        => "Operator",
      "OperatorError.Reason"            => "OperatorErrorReason",
      "Predicate.Operator"              => "PredicateOperator",
      "QueryError.Reason"               => "QueryErrorReason",
      "QuotaCheckError.Reason"          => "QuotaCheckErrorReason",
      "RangeError.Reason"               => "RangeErrorReason",
      "RateExceededError.Reason"        => "RateExceededErrorReason",
      "ReadOnlyError.Reason"            => "ReadOnlyErrorReason",
      "RejectedError.Reason"            => "RejectedErrorReason",
      "RequestError.Reason"             => "RequestErrorReason",
      "RequiredError.Reason"            => "RequiredErrorReason",
      "SelectorError.Reason"            => "SelectorErrorReason",
      "SizeLimitError.Reason"           => "SizeLimitErrorReason",
      "SortOrder"                       => "SortOrder",
      "StringFormatError.Reason"        => "StringFormatErrorReason",
      "StringLengthError.Reason"        => "StringLengthErrorReason",
      "get"                             => "BudgetServiceGet",
      "getResponse"                     => "BudgetServiceGetResponse",
      "mutate"                          => "BudgetServiceMutate",
      "mutateResponse"                  => "BudgetServiceMutateResponse",
      "query"                           => "Query",
      "queryResponse"                   => "QueryResponse",
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
   * Returns a list of budgets that match the selector.
   *
   * @return List of budgets specified by the selector.
   * @throws com.google.ads.api.services.common.error.ApiException if problems
   * occurred while retrieving results.
   */
  public function get($selector)
  {
    $args = new BudgetServiceGet($selector);
    $result = $this->__soapCall("get", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Applies the list of mutate operations.
   *
   * @param operations The operations to apply.
   * @return The modified list of Budgets, returned in the same order as <code>operations</code>.
   * @throws ApiException
   */
  public function mutate($operations)
  {
    $args = new BudgetServiceMutate($operations);
    $result = $this->__soapCall("mutate", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns the list of budgets that match the query.
   *
   * @param query The SQL-like AWQL query string
   * @returns A list of Budget
   * @throws ApiException when the query is invalid or there are errors processing the request.
   */
  public function query($query)
  {
    $args = new Query($query);
    $result = $this->__soapCall("query", [$args]);
    return $result->rval;
  }
}