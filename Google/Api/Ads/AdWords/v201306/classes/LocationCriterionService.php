<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * LocationCriterionService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class LocationCriterionService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
"getResponse" => '\Google\Api\Ads\AdWords\v201306\classes\LocationCriterionServiceGetResponse',
"get" => '\Google\Api\Ads\AdWords\v201306\classes\LocationCriterionServiceGet',
"mutate" => '\Google\Api\Ads\AdWords\v201306\classes\LocationCriterionServiceMutate',
"mutateResponse" => '\Google\Api\Ads\AdWords\v201306\classes\LocationCriterionServiceMutateResponse',
"DateTime" => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
"SoapHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
"AdxError" => '\Google\Api\Ads\AdWords\v201306\classes\AdxError',
"ApiError" => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
"ApiException" => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
"ApplicationException" => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
"AuthenticationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
"AuthorizationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
"ClientTermsError" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
"Criterion" => '\Google\Api\Ads\AdWords\v201306\classes\Criterion',
"CriterionParameter" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionParameter',
"DatabaseError" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
"Date" => '\Google\Api\Ads\AdWords\v201306\classes\Date',
"DateError" => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
"DateRange" => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
"DistinctError" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
"IdError" => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
"InternalApiError" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
"Keyword" => '\Google\Api\Ads\AdWords\v201306\classes\Keyword',
"Location" => '\Google\Api\Ads\AdWords\v201306\classes\Location',
"LocationCriterion" => '\Google\Api\Ads\AdWords\v201306\classes\LocationCriterion',
"LocationCriterionServiceError" => '\Google\Api\Ads\AdWords\v201306\classes\LocationCriterionServiceError',
"MobileAppCategory" => '\Google\Api\Ads\AdWords\v201306\classes\MobileAppCategory',
"MobileApplication" => '\Google\Api\Ads\AdWords\v201306\classes\MobileApplication',
"NotEmptyError" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
"NotWhitelistedError" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
"NullError" => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
"OperationAccessDenied" => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
"OrderBy" => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
"Paging" => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
"Placement" => '\Google\Api\Ads\AdWords\v201306\classes\Placement',
"Predicate" => '\Google\Api\Ads\AdWords\v201306\classes\Predicate',
"Product" => '\Google\Api\Ads\AdWords\v201306\classes\Product',
"ProductCondition" => '\Google\Api\Ads\AdWords\v201306\classes\ProductCondition',
"ProductConditionOperand" => '\Google\Api\Ads\AdWords\v201306\classes\ProductConditionOperand',
"QuotaCheckError" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
"RangeError" => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
"RateExceededError" => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
"ReadOnlyError" => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
"RejectedError" => '\Google\Api\Ads\AdWords\v201306\classes\RejectedError',
"RequestError" => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
"RequiredError" => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
"Selector" => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
"SelectorError" => '\Google\Api\Ads\AdWords\v201306\classes\SelectorError',
"SizeLimitError" => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
"SoapResponseHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
"StringLengthError" => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
"CriterionUserInterest" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserInterest',
"CriterionUserList" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserList',
"Vertical" => '\Google\Api\Ads\AdWords\v201306\classes\Vertical',
"Webpage" => '\Google\Api\Ads\AdWords\v201306\classes\Webpage',
"WebpageCondition" => '\Google\Api\Ads\AdWords\v201306\classes\WebpageCondition',
"WebpageParameter" => '\Google\Api\Ads\AdWords\v201306\classes\WebpageParameter',
"AdxError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AdxErrorReason',
"AuthenticationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
"AuthorizationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
"ClientTermsError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
"Criterion.Type" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionType',
"DatabaseError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
"DateError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
"DistinctError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
"IdError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
"InternalApiError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
"KeywordMatchType" => '\Google\Api\Ads\AdWords\v201306\classes\KeywordMatchType',
"LocationCriterionServiceError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\LocationCriterionServiceErrorReason',
"LocationTargetingStatus" => '\Google\Api\Ads\AdWords\v201306\classes\LocationTargetingStatus',
"NotEmptyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
"NotWhitelistedError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
"NullError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
"OperationAccessDenied.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
"Predicate.Operator" => '\Google\Api\Ads\AdWords\v201306\classes\PredicateOperator',
"QuotaCheckError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
"RangeError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
"RateExceededError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
"ReadOnlyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
"RejectedError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RejectedErrorReason',
"RequestError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
"RequiredError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
"SelectorError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
"SizeLimitError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
"SortOrder" => '\Google\Api\Ads\AdWords\v201306\classes\SortOrder',
"StringLengthError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
"CriterionUserList.MembershipStatus" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserListMembershipStatus',
"WebpageConditionOperand" => '\Google\Api\Ads\AdWords\v201306\classes\WebpageConditionOperand',);

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/LocationCriterionService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = LocationCriterionService::$classmap;
    parent::__construct($wsdl, $options, $user, 'LocationCriterionService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of {@link LocationCriterion}'s that match the specified selector.
   * 
   * @param selector filters the LocationCriterion to be returned.
   * @return A list of location criterion.
   * @throws ApiException when there is at least one error with the request.
   */
  public function get($selector) {
    $arg = new LocationCriterionServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }

}