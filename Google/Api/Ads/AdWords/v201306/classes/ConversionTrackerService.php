<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * ConversionTrackerService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class ConversionTrackerService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" => "ConversionTrackerServiceGetResponse",
    "get" => "ConversionTrackerServiceGet",
    "mutate" => "ConversionTrackerServiceMutate",
    "mutateResponse" => "ConversionTrackerServiceMutateResponse",
    "DateTime" => "AdWordsDateTime",
    "SoapHeader" => "SoapRequestHeader",
    "AdWordsConversionTracker" => "AdWordsConversionTracker",
    "ConversionTracker" => "ConversionTracker",
    "AppConversion" => "AppConversion",
    "AuthenticationError" => "AuthenticationError",
    "ApiError" => "ApiError",
    "AuthorizationError" => "AuthorizationError",
    "ClientTermsError" => "ClientTermsError",
    "ConversionTrackingError" => "ConversionTrackingError",
    "DateError" => "DateError",
    "DateRange" => "DateRange",
    "DistinctError" => "DistinctError",
    "DoubleValue" => "DoubleValue",
    "NumberValue" => "NumberValue",
    "IdError" => "IdError",
    "InternalApiError" => "InternalApiError",
    "LongValue" => "LongValue",
    "Money" => "Money",
    "ComparableValue" => "ComparableValue",
    "NotEmptyError" => "NotEmptyError",
    "NotWhitelistedError" => "NotWhitelistedError",
    "OperationAccessDenied" => "OperationAccessDenied",
    "OperatorError" => "OperatorError",
    "OrderBy" => "OrderBy",
    "Paging" => "Paging",
    "Predicate" => "Predicate",
    "QuotaCheckError" => "QuotaCheckError",
    "RangeError" => "RangeError",
    "RateExceededError" => "RateExceededError",
    "ReadOnlyError" => "ReadOnlyError",
    "RequestError" => "RequestError",
    "RequiredError" => "RequiredError",
    "SelectorError" => "SelectorError",
    "SizeLimitError" => "SizeLimitError",
    "SoapResponseHeader" => "SoapResponseHeader",
    "StringLengthError" => "StringLengthError",
    "ConversionTrackerStats" => "ConversionTrackerStats",
    "ConversionTrackerOperation" => "ConversionTrackerOperation",
    "Operation" => "Operation",
    "ConversionTrackerReturnValue" => "ConversionTrackerReturnValue",
    "ListReturnValue" => "ListReturnValue",
    "DatabaseError" => "DatabaseError",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "ConversionTrackerPage" => "ConversionTrackerPage",
    "NoStatsPage" => "NoStatsPage",
    "Page" => "Page",
    "Selector" => "Selector",
    "AdWordsConversionTracker.MarkupLanguage" => "AdWordsConversionTrackerMarkupLanguage",
    "AdWordsConversionTracker.TextFormat" => "AdWordsConversionTrackerTextFormat",
    "AdWordsConversionTracker.TrackingCodeType" => "AdWordsConversionTrackerTrackingCodeType",
    "AppConversion.AppConversionType" => "AppConversionAppConversionType",
    "AppConversion.AppPlatform" => "AppConversionAppPlatform",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "AuthorizationError.Reason" => "AuthorizationErrorReason",
    "ClientTermsError.Reason" => "ClientTermsErrorReason",
    "ConversionTracker.Category" => "ConversionTrackerCategory",
    "ConversionTracker.Status" => "ConversionTrackerStatus",
    "ConversionTrackingError.Reason" => "ConversionTrackingErrorReason",
    "DatabaseError.Reason" => "DatabaseErrorReason",
    "DateError.Reason" => "DateErrorReason",
    "DistinctError.Reason" => "DistinctErrorReason",
    "IdError.Reason" => "IdErrorReason",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "NotEmptyError.Reason" => "NotEmptyErrorReason",
    "NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
    "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
    "Operator" => "Operator",
    "OperatorError.Reason" => "OperatorErrorReason",
    "Predicate.Operator" => "PredicateOperator",
    "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
    "RangeError.Reason" => "RangeErrorReason",
    "RateExceededError.Reason" => "RateExceededErrorReason",
    "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
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
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/ConversionTrackerService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = ConversionTrackerService::$classmap;
    parent::__construct($wsdl, $options, $user, 'ConversionTrackerService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of the conversion trackers that match the selector. The
   * actual objects contained in the page's list of entries will be specific
   * subclasses of the abstract {@link ConversionTracker} class.
   * 
   * @param serviceSelector The selector specifying the
   * {@link ConversionTracker}s to return.
   * @return List of conversion trackers specified by the selector.
   * @throws com.google.ads.api.services.common.error.ApiException if problems
   * occurred while retrieving results.
   */
  public function get($serviceSelector) {
    $arg = new ConversionTrackerServiceGet($serviceSelector);
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
   * Applies the list of mutate operations such as adding or updating conversion trackers.
   * <p class="note"><b>Note:</b> {@link ConversionTrackerOperation} does not support the
   * <code>REMOVE</code> operator.</p>
   * 
   * @param operations A list of mutate operations to perform.
   * @return The list of the conversion trackers as they appear after mutation,
   * in the same order as they appeared in the list of operations.
   * @throws com.google.ads.api.services.common.error.ApiException if problems
   * occurred while updating the data.
   */
  public function mutate($operations) {
    $arg = new ConversionTrackerServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }

}