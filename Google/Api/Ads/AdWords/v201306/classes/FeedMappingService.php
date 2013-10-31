<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * FeedMappingService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class FeedMappingService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
"getResponse" => '\Google\Api\Ads\AdWords\v201306\classes\FeedMappingServiceGetResponse',
"get" => '\Google\Api\Ads\AdWords\v201306\classes\FeedMappingServiceGet',
"mutate" => '\Google\Api\Ads\AdWords\v201306\classes\FeedMappingServiceMutate',
"mutateResponse" => '\Google\Api\Ads\AdWords\v201306\classes\FeedMappingServiceMutateResponse',
"DateTime" => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
"SoapHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
"AttributeFieldMapping" => '\Google\Api\Ads\AdWords\v201306\classes\AttributeFieldMapping',
"AuthenticationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
"ApiError" => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
"AuthorizationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
"ClientTermsError" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
"DateRange" => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
"DistinctError" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
"EntityNotFound" => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
"FeedMapping" => '\Google\Api\Ads\AdWords\v201306\classes\FeedMapping',
"FeedMappingError" => '\Google\Api\Ads\AdWords\v201306\classes\FeedMappingError',
"FeedMappingOperation" => '\Google\Api\Ads\AdWords\v201306\classes\FeedMappingOperation',
"Operation" => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
"FeedMappingPage" => '\Google\Api\Ads\AdWords\v201306\classes\FeedMappingPage',
"NullStatsPage" => '\Google\Api\Ads\AdWords\v201306\classes\NullStatsPage',
"FeedMappingReturnValue" => '\Google\Api\Ads\AdWords\v201306\classes\FeedMappingReturnValue',
"ListReturnValue" => '\Google\Api\Ads\AdWords\v201306\classes\ListReturnValue',
"IdError" => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
"InternalApiError" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
"NotEmptyError" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
"NotWhitelistedError" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
"Page" => '\Google\Api\Ads\AdWords\v201306\classes\Page',
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
"DatabaseError" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
"ApiException" => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
"ApplicationException" => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
"Selector" => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
"AuthenticationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
"AuthorizationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
"ClientTermsError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
"DatabaseError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
"DistinctError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
"EntityNotFound.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
"FeedMapping.Status" => '\Google\Api\Ads\AdWords\v201306\classes\FeedMappingStatus',
"FeedMappingError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\FeedMappingErrorReason',
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
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/FeedMappingService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = FeedMappingService::$classmap;
    parent::__construct($wsdl, $options, $user, 'FeedMappingService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of FeedMappings that meet the selector criteria.
   * 
   * @param selector Determines which FeedMappings to return. If empty all
   * FeedMappings are returned.
   * @return The list of FeedMappings.
   * @throws ApiException indicates a problem with the request.
   */
  public function get($selector) {
    $arg = new FeedMappingServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
   * 
   * 
   * 
   * Add and remove FeedMappings.
   * 
   * @param operations The operations to apply.
   * @return The resulting FeedMappings.
   * @throws ApiException indicates a problem with the request.
   */
  public function mutate($operations) {
    $arg = new FeedMappingServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }

}