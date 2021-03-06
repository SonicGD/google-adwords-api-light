<?php

require_once('CampaignSharedSetService.require.php');


/**
 * CampaignSharedSetService
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class CampaignSharedSetService extends AdWordsSoapClient
{

  const SERVICE_NAME = "CampaignSharedSetService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
  const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201605/CampaignSharedSetService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201605/CampaignSharedSetService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = [
      "AuthenticationError"             => "AuthenticationError",
      "AuthorizationError"              => "AuthorizationError",
      "CampaignSharedSet"               => "CampaignSharedSet",
      "CampaignSharedSetError"          => "CampaignSharedSetError",
      "CampaignSharedSetOperation"      => "CampaignSharedSetOperation",
      "CampaignSharedSetPage"           => "CampaignSharedSetPage",
      "CampaignSharedSetReturnValue"    => "CampaignSharedSetReturnValue",
      "ClientTermsError"                => "ClientTermsError",
      "DateError"                       => "DateError",
      "DateRange"                       => "DateRange",
      "DistinctError"                   => "DistinctError",
      "EntityCountLimitExceeded"        => "EntityCountLimitExceeded",
      "EntityNotFound"                  => "EntityNotFound",
      "IdError"                         => "IdError",
      "InternalApiError"                => "InternalApiError",
      "ListReturnValue"                 => "ListReturnValue",
      "NewEntityCreationError"          => "NewEntityCreationError",
      "NotEmptyError"                   => "NotEmptyError",
      "NullError"                       => "NullError",
      "NullStatsPage"                   => "NullStatsPage",
      "Operation"                       => "Operation",
      "OperationAccessDenied"           => "OperationAccessDenied",
      "OperatorError"                   => "OperatorError",
      "OrderBy"                         => "OrderBy",
      "Page"                            => "Page",
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
      "Selector"                        => "Selector",
      "AuthenticationError.Reason"      => "AuthenticationErrorReason",
      "AuthorizationError.Reason"       => "AuthorizationErrorReason",
      "CampaignSharedSet.Status"        => "CampaignSharedSetStatus",
      "CampaignSharedSetError.Reason"   => "CampaignSharedSetErrorReason",
      "ClientTermsError.Reason"         => "ClientTermsErrorReason",
      "DatabaseError.Reason"            => "DatabaseErrorReason",
      "DateError.Reason"                => "DateErrorReason",
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
      "SharedSetType"                   => "SharedSetType",
      "SizeLimitError.Reason"           => "SizeLimitErrorReason",
      "SortOrder"                       => "SortOrder",
      "StringFormatError.Reason"        => "StringFormatErrorReason",
      "StringLengthError.Reason"        => "StringLengthErrorReason",
      "get"                             => "CampaignSharedSetServiceGet",
      "getResponse"                     => "CampaignSharedSetServiceGetResponse",
      "mutate"                          => "CampaignSharedSetServiceMutate",
      "mutateResponse"                  => "CampaignSharedSetServiceMutateResponse",
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
   * Returns a list of CampaignSharedSets based on the given selector.
   * @param selector the selector specifying the query
   * @return a list of CampaignSharedSet entities that meet the criterion specified
   *                 by the selector
   * @throws ApiException
   */
  public function get($selector)
  {
    $args = new CampaignSharedSetServiceGet($selector);
    $result = $this->__soapCall("get", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : ADD, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
   *
   *
   *
   * Applies the list of mutate operations.
   * @param operations the operations to apply
   * @return the modified list of CampaignSharedSet associations
   * @throws ApiException
   */
  public function mutate($operations)
  {
    $args = new CampaignSharedSetServiceMutate($operations);
    $result = $this->__soapCall("mutate", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns the list of CampaignSharedSets that match the query.
   *
   * @param query The SQL-like AWQL query string
   * @returns A list of CampaignSharedSets
   * @throws ApiException when the query is invalid or there are errors processing the request.
   */
  public function query($query)
  {
    $args = new Query($query);
    $result = $this->__soapCall("query", [$args]);
    return $result->rval;
  }
}