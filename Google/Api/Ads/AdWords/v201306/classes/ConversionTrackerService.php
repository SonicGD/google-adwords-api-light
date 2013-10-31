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
"getResponse" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionTrackerServiceGetResponse',
"get" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionTrackerServiceGet',
"mutate" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionTrackerServiceMutate',
"mutateResponse" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionTrackerServiceMutateResponse',
"DateTime" => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
"SoapHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
"AdWordsConversionTracker" => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsConversionTracker',
"ConversionTracker" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionTracker',
"AppConversion" => '\Google\Api\Ads\AdWords\v201306\classes\AppConversion',
"AuthenticationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
"ApiError" => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
"AuthorizationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
"ClientTermsError" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
"ConversionTrackingError" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionTrackingError',
"DateError" => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
"DateRange" => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
"DistinctError" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
"DoubleValue" => '\Google\Api\Ads\AdWords\v201306\classes\DoubleValue',
"NumberValue" => '\Google\Api\Ads\AdWords\v201306\classes\NumberValue',
"IdError" => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
"InternalApiError" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
"LongValue" => '\Google\Api\Ads\AdWords\v201306\classes\LongValue',
"Money" => '\Google\Api\Ads\AdWords\v201306\classes\Money',
"ComparableValue" => '\Google\Api\Ads\AdWords\v201306\classes\ComparableValue',
"NotEmptyError" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
"NotWhitelistedError" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
"OperationAccessDenied" => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
"OperatorError" => '\Google\Api\Ads\AdWords\v201306\classes\OperatorError',
"OrderBy" => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
"Paging" => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
"Predicate" => '\Google\Api\Ads\AdWords\v201306\classes\Predicate',
"QuotaCheckError" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
"RangeError" => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
"RateExceededError" => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
"ReadOnlyError" => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
"RequestError" => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
"RequiredError" => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
"SelectorError" => '\Google\Api\Ads\AdWords\v201306\classes\SelectorError',
"SizeLimitError" => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
"SoapResponseHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
"StringLengthError" => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
"ConversionTrackerStats" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionTrackerStats',
"ConversionTrackerOperation" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionTrackerOperation',
"Operation" => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
"ConversionTrackerReturnValue" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionTrackerReturnValue',
"ListReturnValue" => '\Google\Api\Ads\AdWords\v201306\classes\ListReturnValue',
"DatabaseError" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
"ApiException" => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
"ApplicationException" => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
"ConversionTrackerPage" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionTrackerPage',
"NoStatsPage" => '\Google\Api\Ads\AdWords\v201306\classes\NoStatsPage',
"Page" => '\Google\Api\Ads\AdWords\v201306\classes\Page',
"Selector" => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
"AdWordsConversionTracker.MarkupLanguage" => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsConversionTrackerMarkupLanguage',
"AdWordsConversionTracker.TextFormat" => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsConversionTrackerTextFormat',
"AdWordsConversionTracker.TrackingCodeType" => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsConversionTrackerTrackingCodeType',
"AppConversion.AppConversionType" => '\Google\Api\Ads\AdWords\v201306\classes\AppConversionAppConversionType',
"AppConversion.AppPlatform" => '\Google\Api\Ads\AdWords\v201306\classes\AppConversionAppPlatform',
"AuthenticationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
"AuthorizationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
"ClientTermsError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
"ConversionTracker.Category" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionTrackerCategory',
"ConversionTracker.Status" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionTrackerStatus',
"ConversionTrackingError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionTrackingErrorReason',
"DatabaseError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
"DateError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
"DistinctError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
"IdError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
"InternalApiError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
"NotEmptyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
"NotWhitelistedError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
"OperationAccessDenied.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
"Operator" => '\Google\Api\Ads\AdWords\v201306\classes\Operator',
"OperatorError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\OperatorErrorReason',
"Predicate.Operator" => '\Google\Api\Ads\AdWords\v201306\classes\PredicateOperator',
"QuotaCheckError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
"RangeError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
"RateExceededError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
"ReadOnlyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
"RequestError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
"RequiredError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
"SelectorError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
"SizeLimitError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
"SortOrder" => '\Google\Api\Ads\AdWords\v201306\classes\SortOrder',
"StringLengthError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',);

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