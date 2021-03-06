<?php

require_once('LabelService.require.php');


/**
 * LabelService
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class LabelService extends AdWordsSoapClient
{

  const SERVICE_NAME = "LabelService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
  const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201605/LabelService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201605/LabelService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = [
      "AuthenticationError"             => "AuthenticationError",
      "AuthorizationError"              => "AuthorizationError",
      "TextLabel"                       => "TextLabel",
      "DisplayAttribute"                => "DisplayAttribute",
      "ClientTermsError"                => "ClientTermsError",
      "DateError"                       => "DateError",
      "DateRange"                       => "DateRange",
      "DistinctError"                   => "DistinctError",
      "EntityCountLimitExceeded"        => "EntityCountLimitExceeded",
      "EntityNotFound"                  => "EntityNotFound",
      "IdError"                         => "IdError",
      "InternalApiError"                => "InternalApiError",
      "LabelError"                      => "LabelError",
      "NewEntityCreationError"          => "NewEntityCreationError",
      "NotEmptyError"                   => "NotEmptyError",
      "NullError"                       => "NullError",
      "OperationAccessDenied"           => "OperationAccessDenied",
      "OperatorError"                   => "OperatorError",
      "OrderBy"                         => "OrderBy",
      "Paging"                          => "Paging",
      "PagingError"                     => "PagingError",
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
      "DatabaseError"                   => "DatabaseError",
      "ApiError"                        => "ApiError",
      "ApiException"                    => "ApiException",
      "ApplicationException"            => "ApplicationException",
      "LabelAttribute"                  => "LabelAttribute",
      "Label"                           => "Label",
      "LabelOperation"                  => "LabelOperation",
      "LabelPage"                       => "LabelPage",
      "LabelReturnValue"                => "LabelReturnValue",
      "ListReturnValue"                 => "ListReturnValue",
      "NoStatsPage"                     => "NoStatsPage",
      "Operation"                       => "Operation",
      "Page"                            => "Page",
      "Selector"                        => "Selector",
      "AuthenticationError.Reason"      => "AuthenticationErrorReason",
      "AuthorizationError.Reason"       => "AuthorizationErrorReason",
      "ClientTermsError.Reason"         => "ClientTermsErrorReason",
      "DatabaseError.Reason"            => "DatabaseErrorReason",
      "DateError.Reason"                => "DateErrorReason",
      "DistinctError.Reason"            => "DistinctErrorReason",
      "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
      "EntityNotFound.Reason"           => "EntityNotFoundReason",
      "IdError.Reason"                  => "IdErrorReason",
      "InternalApiError.Reason"         => "InternalApiErrorReason",
      "Label.Status"                    => "LabelStatus",
      "LabelError.Reason"               => "LabelErrorReason",
      "NewEntityCreationError.Reason"   => "NewEntityCreationErrorReason",
      "NotEmptyError.Reason"            => "NotEmptyErrorReason",
      "NullError.Reason"                => "NullErrorReason",
      "OperationAccessDenied.Reason"    => "OperationAccessDeniedReason",
      "Operator"                        => "Operator",
      "OperatorError.Reason"            => "OperatorErrorReason",
      "PagingError.Reason"              => "PagingErrorReason",
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
      "get"                             => "LabelServiceGet",
      "getResponse"                     => "LabelServiceGetResponse",
      "mutate"                          => "LabelServiceMutate",
      "mutateResponse"                  => "LabelServiceMutateResponse",
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
   * Returns a list of {@link Label}s.
   *
   * @param serviceSelector The selector specifying the {@link Label}s to return.
   * @return The page containing the {@link Label}s which meet the criteria specified by the
   * selector.
   * @throws ApiException when there is at least one error with the request
   */
  public function get($serviceSelector)
  {
    $args = new LabelServiceGet($serviceSelector);
    $result = $this->__soapCall("get", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : ADD, SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET, REMOVE.</span>
   *
   *
   *
   * Applies the list of mutate operations.
   *
   * @param operations The operations to apply. The same {@link Label} cannot be specified in
   * more than one operation.
   * @return The applied {@link Label}s.
   * @throws ApiException when there is at least one error with the request
   */
  public function mutate($operations)
  {
    $args = new LabelServiceMutate($operations);
    $result = $this->__soapCall("mutate", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns the list of {@link Label}s that match the query.
   *
   * @param query The SQL-like AWQL query string
   * @returns  The page containing the {@link Label}s which match the query.
   * @throws ApiException when the query is invalid or there are errors processing the request.
   */
  public function query($query)
  {
    $args = new Query($query);
    $result = $this->__soapCall("query", [$args]);
    return $result->rval;
  }
}