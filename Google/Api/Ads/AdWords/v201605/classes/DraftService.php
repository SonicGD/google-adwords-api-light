<?php

require_once('DraftService.require.php');


/**
 * DraftService
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class DraftService extends AdWordsSoapClient
{

  const SERVICE_NAME = "DraftService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
  const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201605/DraftService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201605/DraftService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = [
      "AuthenticationError"             => "AuthenticationError",
      "AuthorizationError"              => "AuthorizationError",
      "BiddingErrors"                   => "BiddingErrors",
      "ClientTermsError"                => "ClientTermsError",
      "Date"                            => "Date",
      "DateError"                       => "DateError",
      "DateRange"                       => "DateRange",
      "DistinctError"                   => "DistinctError",
      "Draft"                           => "Draft",
      "DraftError"                      => "DraftError",
      "DraftOperation"                  => "DraftOperation",
      "DraftPage"                       => "DraftPage",
      "DraftReturnValue"                => "DraftReturnValue",
      "EntityCountLimitExceeded"        => "EntityCountLimitExceeded",
      "EntityNotFound"                  => "EntityNotFound",
      "IdError"                         => "IdError",
      "InternalApiError"                => "InternalApiError",
      "ListReturnValue"                 => "ListReturnValue",
      "NotEmptyError"                   => "NotEmptyError",
      "NullError"                       => "NullError",
      "NullStatsPage"                   => "NullStatsPage",
      "Operation"                       => "Operation",
      "OperationAccessDenied"           => "OperationAccessDenied",
      "OperatorError"                   => "OperatorError",
      "OrderBy"                         => "OrderBy",
      "Page"                            => "Page",
      "Paging"                          => "Paging",
      "Predicate"                       => "Predicate",
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
      "Selector"                        => "Selector",
      "AuthenticationError.Reason"      => "AuthenticationErrorReason",
      "AuthorizationError.Reason"       => "AuthorizationErrorReason",
      "BiddingErrors.Reason"            => "BiddingErrorsReason",
      "ClientTermsError.Reason"         => "ClientTermsErrorReason",
      "DraftStatus"                     => "DraftStatus",
      "DatabaseError.Reason"            => "DatabaseErrorReason",
      "DateError.Reason"                => "DateErrorReason",
      "DistinctError.Reason"            => "DistinctErrorReason",
      "DraftError.Reason"               => "DraftErrorReason",
      "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
      "EntityNotFound.Reason"           => "EntityNotFoundReason",
      "IdError.Reason"                  => "IdErrorReason",
      "InternalApiError.Reason"         => "InternalApiErrorReason",
      "NotEmptyError.Reason"            => "NotEmptyErrorReason",
      "NullError.Reason"                => "NullErrorReason",
      "OperationAccessDenied.Reason"    => "OperationAccessDeniedReason",
      "Operator"                        => "Operator",
      "OperatorError.Reason"            => "OperatorErrorReason",
      "Predicate.Operator"              => "PredicateOperator",
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
      "get"                             => "DraftServiceGet",
      "getResponse"                     => "DraftServiceGetResponse",
      "mutate"                          => "DraftServiceMutate",
      "mutateResponse"                  => "DraftServiceMutateResponse",
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
   * Returns a DraftPage that contains a list of Draft objects matching the selector.
   *
   * @throws {#link com.google.ads.api.services.common.error.ApiException} if problems occurred
   * while retrieving the results.
   */
  public function get($selector)
  {
    $args = new DraftServiceGet($selector);
    $result = $this->__soapCall("get", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
   *
   *
   *
   * The mutate action is used for creating new Drafts and controlling the life cycle of Drafts,
   * such as abandoning or promoting Drafts.
   *
   * @return The list of updated Drafts, in the same order as the {@code operations} list.
   * @throws {#link com.google.ads.api.services.common.error.ApiException} if problems occurred
   * while processing the request.
   */
  public function mutate($operations)
  {
    $args = new DraftServiceMutate($operations);
    $result = $this->__soapCall("mutate", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns a DraftPage that contains a list of Draft objects matching the query.
   *
   * @throws {#link com.google.ads.api.services.common.error.ApiException} if problems occurred
   * while retrieving the results.
   */
  public function query($query)
  {
    $args = new Query($query);
    $result = $this->__soapCall("query", [$args]);
    return $result->rval;
  }
}