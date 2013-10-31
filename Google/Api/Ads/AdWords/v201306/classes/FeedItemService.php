<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * FeedItemService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class FeedItemService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
"getResponse" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemServiceGetResponse',
"get" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemServiceGet',
"mutate" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemServiceMutate',
"mutateResponse" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemServiceMutateResponse',
"DateTime" => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
"SoapHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
"AuthenticationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
"ApiError" => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
"AuthorizationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
"BetaError" => '\Google\Api\Ads\AdWords\v201306\classes\BetaError',
"ClientTermsError" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
"DateError" => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
"DateRange" => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
"DistinctError" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
"EntityCountLimitExceeded" => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceeded',
"EntityNotFound" => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
"FeedItemAttributeError" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemAttributeError',
"FeedItemAttributeValue" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemAttributeValue',
"FeedItemDevicePreference" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemDevicePreference',
"FeedItemError" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemError',
"FeedItemSchedule" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemSchedule',
"FeedItemScheduling" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemScheduling',
"IdError" => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
"InternalApiError" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
"NotEmptyError" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
"NotWhitelistedError" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
"NullError" => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
"OperationAccessDenied" => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
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
"FeedItemValidationDetail" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemValidationDetail',
"ApiException" => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
"ApplicationException" => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
"FeedItem" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItem',
"FeedItemOperation" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemOperation',
"Operation" => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
"FeedItemPage" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemPage',
"NullStatsPage" => '\Google\Api\Ads\AdWords\v201306\classes\NullStatsPage',
"FeedItemReturnValue" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemReturnValue',
"ListReturnValue" => '\Google\Api\Ads\AdWords\v201306\classes\ListReturnValue',
"Page" => '\Google\Api\Ads\AdWords\v201306\classes\Page',
"Selector" => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
"AuthenticationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
"AuthorizationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
"BetaError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\BetaErrorReason',
"ClientTermsError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
"DatabaseError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
"DateError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
"DayOfWeek" => '\Google\Api\Ads\AdWords\v201306\classes\DayOfWeek',
"DistinctError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
"EntityCountLimitExceeded.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceededReason',
"EntityNotFound.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
"FeedItem.Status" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemStatus',
"FeedItemError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemErrorReason',
"FeedItemValidationDetail.ApprovalStatus" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemValidationDetailApprovalStatus',
"FeedItemValidationDetail.ValidationStatus" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemValidationDetailValidationStatus',
"IdError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
"InternalApiError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
"MinuteOfHour" => '\Google\Api\Ads\AdWords\v201306\classes\MinuteOfHour',
"NotEmptyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
"NotWhitelistedError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
"NullError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
"OperationAccessDenied.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
"Operator" => '\Google\Api\Ads\AdWords\v201306\classes\Operator',
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
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/FeedItemService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = FeedItemService::$classmap;
    parent::__construct($wsdl, $options, $user, 'FeedItemService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of FeedItems that meet the selector criteria.
   * 
   * @param selector Determines which FeedItems to return. If empty all
   * FeedItems are returned.
   * @return The list of FeedItems.
   * @throws ApiException Indicates a problem with the request.
   */
  public function get($selector) {
    $arg = new FeedItemServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
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
   * Add, remove, and set FeedItems.
   * 
   * @param operations The operations to apply.
   * @return The resulting FeedItems.
   * @throws ApiException Indicates a problem with the request.
   */
  public function mutate($operations) {
    $arg = new FeedItemServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }

}