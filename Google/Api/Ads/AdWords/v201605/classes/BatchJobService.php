<?php

require_once('BatchJobService.require.php');


/**
 * BatchJobService
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class BatchJobService extends AdWordsSoapClient
{

  const SERVICE_NAME = "BatchJobService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
  const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201605/BatchJobService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201605/BatchJobService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = [
      "AuthenticationError"            => "AuthenticationError",
      "AuthorizationError"             => "AuthorizationError",
      "BatchJobError"                  => "BatchJobError",
      "BatchJobProcessingError"        => "BatchJobProcessingError",
      "ClientTermsError"               => "ClientTermsError",
      "DateRange"                      => "DateRange",
      "DistinctError"                  => "DistinctError",
      "IdError"                        => "IdError",
      "InternalApiError"               => "InternalApiError",
      "NotEmptyError"                  => "NotEmptyError",
      "OperationAccessDenied"          => "OperationAccessDenied",
      "OperatorError"                  => "OperatorError",
      "OrderBy"                        => "OrderBy",
      "Paging"                         => "Paging",
      "Predicate"                      => "Predicate",
      "ProgressStats"                  => "ProgressStats",
      "QuotaCheckError"                => "QuotaCheckError",
      "RangeError"                     => "RangeError",
      "RateExceededError"              => "RateExceededError",
      "ReadOnlyError"                  => "ReadOnlyError",
      "RejectedError"                  => "RejectedError",
      "RequestError"                   => "RequestError",
      "RequiredError"                  => "RequiredError",
      "SelectorError"                  => "SelectorError",
      "SizeLimitError"                 => "SizeLimitError",
      "SoapHeader"                     => "SoapRequestHeader",
      "SoapResponseHeader"             => "SoapResponseHeader",
      "StringFormatError"              => "StringFormatError",
      "StringLengthError"              => "StringLengthError",
      "TemporaryUrl"                   => "TemporaryUrl",
      "DatabaseError"                  => "DatabaseError",
      "ApiError"                       => "ApiError",
      "ApiException"                   => "ApiException",
      "ApplicationException"           => "ApplicationException",
      "BatchJob"                       => "BatchJob",
      "BatchJobOperation"              => "BatchJobOperation",
      "BatchJobPage"                   => "BatchJobPage",
      "BatchJobReturnValue"            => "BatchJobReturnValue",
      "ListReturnValue"                => "ListReturnValue",
      "Operation"                      => "Operation",
      "Page"                           => "Page",
      "Selector"                       => "Selector",
      "AuthenticationError.Reason"     => "AuthenticationErrorReason",
      "AuthorizationError.Reason"      => "AuthorizationErrorReason",
      "BatchJobError.Reason"           => "BatchJobErrorReason",
      "BatchJobProcessingError.Reason" => "BatchJobProcessingErrorReason",
      "BatchJobStatus"                 => "BatchJobStatus",
      "ClientTermsError.Reason"        => "ClientTermsErrorReason",
      "DatabaseError.Reason"           => "DatabaseErrorReason",
      "DistinctError.Reason"           => "DistinctErrorReason",
      "IdError.Reason"                 => "IdErrorReason",
      "InternalApiError.Reason"        => "InternalApiErrorReason",
      "NotEmptyError.Reason"           => "NotEmptyErrorReason",
      "OperationAccessDenied.Reason"   => "OperationAccessDeniedReason",
      "Operator"                       => "Operator",
      "OperatorError.Reason"           => "OperatorErrorReason",
      "Predicate.Operator"             => "PredicateOperator",
      "QuotaCheckError.Reason"         => "QuotaCheckErrorReason",
      "RangeError.Reason"              => "RangeErrorReason",
      "RateExceededError.Reason"       => "RateExceededErrorReason",
      "ReadOnlyError.Reason"           => "ReadOnlyErrorReason",
      "RejectedError.Reason"           => "RejectedErrorReason",
      "RequestError.Reason"            => "RequestErrorReason",
      "RequiredError.Reason"           => "RequiredErrorReason",
      "SelectorError.Reason"           => "SelectorErrorReason",
      "SizeLimitError.Reason"          => "SizeLimitErrorReason",
      "SortOrder"                      => "SortOrder",
      "StringFormatError.Reason"       => "StringFormatErrorReason",
      "StringLengthError.Reason"       => "StringLengthErrorReason",
      "get"                            => "BatchJobServiceGet",
      "getResponse"                    => "BatchJobServiceGetResponse",
      "mutate"                         => "BatchJobServiceMutate",
      "mutateResponse"                 => "BatchJobServiceMutateResponse",
      "query"                          => "Query",
      "queryResponse"                  => "QueryResponse",
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
   * Query the status of existing {@code BatchJob}s.
   *
   * @param selector The selector specifying the {@code BatchJob}s to return.
   * @return The list of selected jobs.
   * @throws ApiException
   */
  public function get($selector)
  {
    $args = new BatchJobServiceGet($selector);
    $result = $this->__soapCall("get", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
   *
   *
   *
   * Creates or updates a {@code BatchJob}.
   *
   * <p class="note"><b>Note:</b> {@link BatchJobOperation} does not support the
   * {@code REMOVE} operator. It is not necessary to remove BatchJobs.
   *
   * @param operations A list of operations.
   * @return The list of created or updated jobs.
   * @throws ApiException
   */
  public function mutate($operations)
  {
    $args = new BatchJobServiceMutate($operations);
    $result = $this->__soapCall("mutate", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns the list of {@code BatchJob}s that match the query.
   *
   * @param query The SQL-like AWQL query string.
   * @return The list of selected jobs.
   * @throws ApiException if problems occur while parsing the query or fetching
   *              batchjob information.
   */
  public function query($query)
  {
    $args = new Query($query);
    $result = $this->__soapCall("query", [$args]);
    return $result->rval;
  }
}