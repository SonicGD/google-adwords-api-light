<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * CampaignCriterionService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class CampaignCriterionService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
"getResponse" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignCriterionServiceGetResponse',
"get" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignCriterionServiceGet',
"mutate" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignCriterionServiceMutate',
"mutateResponse" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignCriterionServiceMutateResponse',
"DateTime" => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
"SoapHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
"AdSchedule" => '\Google\Api\Ads\AdWords\v201306\classes\AdSchedule',
"Criterion" => '\Google\Api\Ads\AdWords\v201306\classes\Criterion',
"Address" => '\Google\Api\Ads\AdWords\v201306\classes\Address',
"AdxError" => '\Google\Api\Ads\AdWords\v201306\classes\AdxError',
"ApiError" => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
"AgeRange" => '\Google\Api\Ads\AdWords\v201306\classes\AgeRange',
"ApiException" => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
"ApplicationException" => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
"AuthenticationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
"AuthorizationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
"BetaError" => '\Google\Api\Ads\AdWords\v201306\classes\BetaError',
"CampaignCriterion" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignCriterion',
"CampaignCriterionError" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignCriterionError',
"CampaignCriterionLimitExceeded" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignCriterionLimitExceeded',
"EntityCountLimitExceeded" => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceeded',
"CampaignCriterionOperation" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignCriterionOperation',
"Operation" => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
"CampaignCriterionPage" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignCriterionPage',
"Page" => '\Google\Api\Ads\AdWords\v201306\classes\Page',
"CampaignCriterionReturnValue" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignCriterionReturnValue',
"ListReturnValue" => '\Google\Api\Ads\AdWords\v201306\classes\ListReturnValue',
"Carrier" => '\Google\Api\Ads\AdWords\v201306\classes\Carrier',
"ClientTermsError" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
"ContentLabel" => '\Google\Api\Ads\AdWords\v201306\classes\ContentLabel',
"CriterionError" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionError',
"CriterionParameter" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionParameter',
"DatabaseError" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
"DateRange" => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
"DistinctError" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
"EntityNotFound" => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
"Gender" => '\Google\Api\Ads\AdWords\v201306\classes\Gender',
"GeoPoint" => '\Google\Api\Ads\AdWords\v201306\classes\GeoPoint',
"IdError" => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
"InternalApiError" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
"Keyword" => '\Google\Api\Ads\AdWords\v201306\classes\Keyword',
"Language" => '\Google\Api\Ads\AdWords\v201306\classes\Language',
"Location" => '\Google\Api\Ads\AdWords\v201306\classes\Location',
"MobileAppCategory" => '\Google\Api\Ads\AdWords\v201306\classes\MobileAppCategory',
"MobileApplication" => '\Google\Api\Ads\AdWords\v201306\classes\MobileApplication',
"MobileDevice" => '\Google\Api\Ads\AdWords\v201306\classes\MobileDevice',
"NegativeCampaignCriterion" => '\Google\Api\Ads\AdWords\v201306\classes\NegativeCampaignCriterion',
"NewEntityCreationError" => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationError',
"NotEmptyError" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
"NotWhitelistedError" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
"NullError" => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
"OperatingSystemVersion" => '\Google\Api\Ads\AdWords\v201306\classes\OperatingSystemVersion',
"OperationAccessDenied" => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
"OperatorError" => '\Google\Api\Ads\AdWords\v201306\classes\OperatorError',
"OrderBy" => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
"Paging" => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
"PagingError" => '\Google\Api\Ads\AdWords\v201306\classes\PagingError',
"Placement" => '\Google\Api\Ads\AdWords\v201306\classes\Placement',
"Platform" => '\Google\Api\Ads\AdWords\v201306\classes\Platform',
"Predicate" => '\Google\Api\Ads\AdWords\v201306\classes\Predicate',
"Product" => '\Google\Api\Ads\AdWords\v201306\classes\Product',
"ProductCondition" => '\Google\Api\Ads\AdWords\v201306\classes\ProductCondition',
"ProductConditionOperand" => '\Google\Api\Ads\AdWords\v201306\classes\ProductConditionOperand',
"Proximity" => '\Google\Api\Ads\AdWords\v201306\classes\Proximity',
"QueryError" => '\Google\Api\Ads\AdWords\v201306\classes\QueryError',
"QuotaCheckError" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
"RangeError" => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
"RateExceededError" => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
"ReadOnlyError" => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
"RegionCodeError" => '\Google\Api\Ads\AdWords\v201306\classes\RegionCodeError',
"RequestError" => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
"RequiredError" => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
"Selector" => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
"SelectorError" => '\Google\Api\Ads\AdWords\v201306\classes\SelectorError',
"SizeLimitError" => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
"SoapResponseHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
"StringLengthError" => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
"String_StringMapEntry" => '\Google\Api\Ads\AdWords\v201306\classes\String_StringMapEntry',
"CriterionUserInterest" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserInterest',
"CriterionUserList" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserList',
"Vertical" => '\Google\Api\Ads\AdWords\v201306\classes\Vertical',
"Webpage" => '\Google\Api\Ads\AdWords\v201306\classes\Webpage',
"WebpageCondition" => '\Google\Api\Ads\AdWords\v201306\classes\WebpageCondition',
"WebpageParameter" => '\Google\Api\Ads\AdWords\v201306\classes\WebpageParameter',
"AdxError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AdxErrorReason',
"AgeRange.AgeRangeType" => '\Google\Api\Ads\AdWords\v201306\classes\AgeRangeAgeRangeType',
"AuthenticationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
"AuthorizationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
"BetaError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\BetaErrorReason',
"CampaignCriterionError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignCriterionErrorReason',
"CampaignCriterionLimitExceeded.CriteriaLimitType" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignCriterionLimitExceededCriteriaLimitType',
"ClientTermsError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
"ContentLabelType" => '\Google\Api\Ads\AdWords\v201306\classes\ContentLabelType',
"Criterion.Type" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionType',
"CriterionError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionErrorReason',
"DatabaseError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
"DayOfWeek" => '\Google\Api\Ads\AdWords\v201306\classes\DayOfWeek',
"DistinctError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
"EntityCountLimitExceeded.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceededReason',
"EntityNotFound.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
"Gender.GenderType" => '\Google\Api\Ads\AdWords\v201306\classes\GenderGenderType',
"IdError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
"InternalApiError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
"KeywordMatchType" => '\Google\Api\Ads\AdWords\v201306\classes\KeywordMatchType',
"LocationTargetingStatus" => '\Google\Api\Ads\AdWords\v201306\classes\LocationTargetingStatus',
"MinuteOfHour" => '\Google\Api\Ads\AdWords\v201306\classes\MinuteOfHour',
"MobileDevice.DeviceType" => '\Google\Api\Ads\AdWords\v201306\classes\MobileDeviceDeviceType',
"NewEntityCreationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationErrorReason',
"NotEmptyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
"NotWhitelistedError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
"NullError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
"OperatingSystemVersion.OperatorType" => '\Google\Api\Ads\AdWords\v201306\classes\OperatingSystemVersionOperatorType',
"OperationAccessDenied.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
"Operator" => '\Google\Api\Ads\AdWords\v201306\classes\Operator',
"OperatorError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\OperatorErrorReason',
"PagingError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\PagingErrorReason',
"Predicate.Operator" => '\Google\Api\Ads\AdWords\v201306\classes\PredicateOperator',
"Proximity.DistanceUnits" => '\Google\Api\Ads\AdWords\v201306\classes\ProximityDistanceUnits',
"QueryError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\QueryErrorReason',
"QuotaCheckError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
"RangeError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
"RateExceededError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
"ReadOnlyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
"RegionCodeError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RegionCodeErrorReason',
"RequestError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
"RequiredError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
"SelectorError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
"SizeLimitError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
"SortOrder" => '\Google\Api\Ads\AdWords\v201306\classes\SortOrder',
"StringLengthError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
"CriterionUserList.MembershipStatus" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserListMembershipStatus',
"WebpageConditionOperand" => '\Google\Api\Ads\AdWords\v201306\classes\WebpageConditionOperand',
"query" => '\Google\Api\Ads\AdWords\v201306\classes\query',
"queryResponse" => '\Google\Api\Ads\AdWords\v201306\classes\queryResponse',);

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/CampaignCriterionService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = CampaignCriterionService::$classmap;
    parent::__construct($wsdl, $options, $user, 'CampaignCriterionService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Gets campaign criteria.
   * 
   * @param serviceSelector The selector specifying the {@link CampaignCriterion}s to return.
   * @return A list of campaign criteria.
   * @throws ApiException when there is at least one error with the request.
   */
  public function get($serviceSelector) {
    $arg = new CampaignCriterionServiceGet($serviceSelector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE, SET.</span>
   * 
   * 
   * 
   * Adds, removes or updates campaign criteria.
   * 
   * @param operations The operations to apply.
   * @return The added campaign criteria (without any optional parts).
   * @throws ApiException when there is at least one error with the request.
   */
  public function mutate($operations) {
    $arg = new CampaignCriterionServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns the list of campaign criteria that match the query.
   * 
   * @param query The SQL-like AWQL query string.
   * @return A list of campaign criteria.
   * @throws ApiException if problems occur while parsing the query or fetching campaign criteria.
   */
  public function query($query) {
    $arg = new query($query);
    $result = $this->__soapCall("query", array($arg));
    return $result->rval;
  }

}