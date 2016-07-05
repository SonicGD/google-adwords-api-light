<?php

require_once('TrialService.require.php');


/**
 * TrialService
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class TrialService extends AdWordsSoapClient
{

  const SERVICE_NAME = "TrialService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
  const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201605/TrialService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201605/TrialService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = [
      "AuthenticationError"             => "AuthenticationError",
      "AuthorizationError"              => "AuthorizationError",
      "BiddingErrors"                   => "BiddingErrors",
      "BudgetError"                     => "BudgetError",
      "CampaignError"                   => "CampaignError",
      "ClientTermsError"                => "ClientTermsError",
      "DateError"                       => "DateError",
      "DateRange"                       => "DateRange",
      "DateRangeError"                  => "DateRangeError",
      "DistinctError"                   => "DistinctError",
      "EntityCountLimitExceeded"        => "EntityCountLimitExceeded",
      "EntityNotFound"                  => "EntityNotFound",
      "IdError"                         => "IdError",
      "InternalApiError"                => "InternalApiError",
      "NotEmptyError"                   => "NotEmptyError",
      "NullError"                       => "NullError",
      "OperationAccessDenied"           => "OperationAccessDenied",
      "OperatorError"                   => "OperatorError",
      "OrderBy"                         => "OrderBy",
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
      "Trial"                           => "Trial",
      "TrialError"                      => "TrialError",
      "TrialOperation"                  => "TrialOperation",
      "TrialPage"                       => "TrialPage",
      "DatabaseError"                   => "DatabaseError",
      "Operation"                       => "Operation",
      "Page"                            => "Page",
      "ApiError"                        => "ApiError",
      "ApiException"                    => "ApiException",
      "ApplicationException"            => "ApplicationException",
      "Selector"                        => "Selector",
      "TrialReturnValue"                => "TrialReturnValue",
      "ListReturnValue"                 => "ListReturnValue",
      "AuthenticationError.Reason"      => "AuthenticationErrorReason",
      "AuthorizationError.Reason"       => "AuthorizationErrorReason",
      "BiddingErrors.Reason"            => "BiddingErrorsReason",
      "BudgetError.Reason"              => "BudgetErrorReason",
      "CampaignError.Reason"            => "CampaignErrorReason",
      "ClientTermsError.Reason"         => "ClientTermsErrorReason",
      "DatabaseError.Reason"            => "DatabaseErrorReason",
      "DateError.Reason"                => "DateErrorReason",
      "DateRangeError.Reason"           => "DateRangeErrorReason",
      "DistinctError.Reason"            => "DistinctErrorReason",
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
      "TrialError.Reason"               => "TrialErrorReason",
      "TrialStatus"                     => "TrialStatus",
      "get"                             => "TrialServiceGet",
      "getResponse"                     => "TrialServiceGetResponse",
      "mutate"                          => "TrialServiceMutate",
      "mutateResponse"                  => "TrialServiceMutateResponse",
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
   * Loads a TrialPage containing a list of {@link Trial} objects matching the selector.
   *
   * @param selector defines which subset of all available trials to return, the sort order, and
   *                 which fields to include
   *
   * @return Returns a page of matching trial objects.
   * @throws com.google.ads.api.services.common.error.ApiException if errors occurred while
   * retrieving the results.
   */
  public function get($selector)
  {
    $args = new TrialServiceGet($selector);
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
   * Creates new trials, updates properties and controls the life cycle of existing trials.
   * See {@link TrialService} for details on the trial life cycle.
   *
   * @return Returns the list of updated Trials, in the same order as the {@code operations} list.
   * @throws com.google.ads.api.services.common.error.ApiException if errors occurred while
   * processing the request.
   */
  public function mutate($operations)
  {
    $args = new TrialServiceMutate($operations);
    $result = $this->__soapCall("mutate", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Loads a TrialPage containing a list of {@link Trial} objects matching the query.
   *
   * @param query defines which subset of all available trials to return, the sort order, and
   *              which fields to include
   *
   * @return Returns a page of matching trial objects.
   * @throws com.google.ads.api.services.common.error.ApiException if errors occurred while
   * retrieving the results.
   */
  public function query($query)
  {
    $args = new Query($query);
    $result = $this->__soapCall("query", [$args]);
    return $result->rval;
  }
}