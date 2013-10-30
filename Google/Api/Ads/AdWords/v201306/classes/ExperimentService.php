<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * ExperimentService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class ExperimentService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" => "ExperimentServiceGetResponse",
    "get" => "ExperimentServiceGet",
    "mutate" => "ExperimentServiceMutate",
    "mutateResponse" => "ExperimentServiceMutateResponse",
    "DateTime" => "AdWordsDateTime",
    "SoapHeader" => "SoapRequestHeader",
    "AdxError" => "AdxError",
    "ApiError" => "ApiError",
    "AuthenticationError" => "AuthenticationError",
    "AuthorizationError" => "AuthorizationError",
    "BudgetError" => "BudgetError",
    "ClientTermsError" => "ClientTermsError",
    "DateError" => "DateError",
    "DateRange" => "DateRange",
    "DistinctError" => "DistinctError",
    "EntityNotFound" => "EntityNotFound",
    "ExperimentServiceError" => "ExperimentServiceError",
    "ExperimentSummaryStats" => "ExperimentSummaryStats",
    "IdError" => "IdError",
    "InternalApiError" => "InternalApiError",
    "NewEntityCreationError" => "NewEntityCreationError",
    "NotEmptyError" => "NotEmptyError",
    "NotWhitelistedError" => "NotWhitelistedError",
    "NullError" => "NullError",
    "OperationAccessDenied" => "OperationAccessDenied",
    "OperatorError" => "OperatorError",
    "OrderBy" => "OrderBy",
    "Paging" => "Paging",
    "Predicate" => "Predicate",
    "QuotaCheckError" => "QuotaCheckError",
    "QuotaError" => "QuotaError",
    "RangeError" => "RangeError",
    "RateExceededError" => "RateExceededError",
    "ReadOnlyError" => "ReadOnlyError",
    "RejectedError" => "RejectedError",
    "RequestError" => "RequestError",
    "RequiredError" => "RequiredError",
    "SelectorError" => "SelectorError",
    "SizeLimitError" => "SizeLimitError",
    "SoapResponseHeader" => "SoapResponseHeader",
    "StringLengthError" => "StringLengthError",
    "DatabaseError" => "DatabaseError",
    "Experiment" => "Experiment",
    "ExperimentOperation" => "ExperimentOperation",
    "Operation" => "Operation",
    "ExperimentReturnValue" => "ExperimentReturnValue",
    "ListReturnValue" => "ListReturnValue",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "ExperimentPage" => "ExperimentPage",
    "Page" => "Page",
    "Selector" => "Selector",
    "AdxError.Reason" => "AdxErrorReason",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "AuthorizationError.Reason" => "AuthorizationErrorReason",
    "BudgetError.Reason" => "BudgetErrorReason",
    "ClientTermsError.Reason" => "ClientTermsErrorReason",
    "DatabaseError.Reason" => "DatabaseErrorReason",
    "DateError.Reason" => "DateErrorReason",
    "DistinctError.Reason" => "DistinctErrorReason",
    "EntityNotFound.Reason" => "EntityNotFoundReason",
    "ExperimentServiceError.Reason" => "ExperimentServiceErrorReason",
    "ExperimentServingStatus" => "ExperimentServingStatus",
    "ExperimentStatus" => "ExperimentStatus",
    "IdError.Reason" => "IdErrorReason",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
    "NotEmptyError.Reason" => "NotEmptyErrorReason",
    "NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
    "NullError.Reason" => "NullErrorReason",
    "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
    "Operator" => "Operator",
    "OperatorError.Reason" => "OperatorErrorReason",
    "Predicate.Operator" => "PredicateOperator",
    "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
    "QuotaError.Reason" => "QuotaErrorReason",
    "RangeError.Reason" => "RangeErrorReason",
    "RateExceededError.Reason" => "RateExceededErrorReason",
    "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
    "RejectedError.Reason" => "RejectedErrorReason",
    "RequestError.Reason" => "RequestErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "SelectorError.Reason" => "SelectorErrorReason",
    "SizeLimitError.Reason" => "SizeLimitErrorReason",
    "SortOrder" => "SortOrder",
    "StringLengthError.Reason" => "StringLengthErrorReason",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/ExperimentService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = ExperimentService::$classmap;
    parent::__construct($wsdl, $options, $user, 'ExperimentService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of experiments specified by the experiment selector from
   * the customer's account.
   * @param serviceSelector The selector specifying the {@link Experiment}s to return.
   * If selector is empty, all experiments are returned.
   * @return List of experiments meeting all the criteria of each selector.
   * @throws ApiException if problems occurred while fetching experiment information.
   */
  public function get($serviceSelector) {
    $arg = new ExperimentServiceGet($serviceSelector);
    $result = $this->__soapCall("get", array($arg));
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
   * Mutates (add, update or remove) experiments.
   * <b>Note:</b> To REMOVE use SET and mark status to DELETED.
   * @param operations A list of unique operations.
   * The same experiment cannot be specified in more than one operation.
   * @return The updated experiments. The list of experiments is returned in
   * the same order in which it came in as input.
   * @throws ApiException if problems occurred while updating experiment information.
   */
  public function mutate($operations) {
    $arg = new ExperimentServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }

}