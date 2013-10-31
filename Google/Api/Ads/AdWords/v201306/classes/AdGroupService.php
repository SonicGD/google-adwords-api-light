<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * AdGroupService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class AdGroupService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
"getResponse" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupServiceGetResponse',
"get" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupServiceGet',
"mutate" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupServiceMutate',
"mutateResponse" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupServiceMutateResponse',
"DateTime" => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
"SoapHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
"AdGroupServiceError" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupServiceError',
"ApiError" => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
"AdxError" => '\Google\Api\Ads\AdWords\v201306\classes\AdxError',
"AuthenticationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
"AuthorizationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
"BetaError" => '\Google\Api\Ads\AdWords\v201306\classes\BetaError',
"BiddingError" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingError',
"BiddingErrors" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingErrors',
"ClientTermsError" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
"ConversionOptimizerBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionOptimizerBiddingScheme',
"BiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingScheme',
"DateError" => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
"DateRange" => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
"DistinctError" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
"DoubleValue" => '\Google\Api\Ads\AdWords\v201306\classes\DoubleValue',
"NumberValue" => '\Google\Api\Ads\AdWords\v201306\classes\NumberValue',
"EnhancedCpcBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\EnhancedCpcBiddingScheme',
"EntityCountLimitExceeded" => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceeded',
"EntityNotFound" => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
"ForwardCompatibilityError" => '\Google\Api\Ads\AdWords\v201306\classes\ForwardCompatibilityError',
"IdError" => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
"InternalApiError" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
"LongValue" => '\Google\Api\Ads\AdWords\v201306\classes\LongValue',
"ManualCpcBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\ManualCpcBiddingScheme',
"ManualCpmBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\ManualCpmBiddingScheme',
"Money" => '\Google\Api\Ads\AdWords\v201306\classes\Money',
"ComparableValue" => '\Google\Api\Ads\AdWords\v201306\classes\ComparableValue',
"NewEntityCreationError" => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationError',
"NotEmptyError" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
"NotWhitelistedError" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
"NullError" => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
"OperationAccessDenied" => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
"OperatorError" => '\Google\Api\Ads\AdWords\v201306\classes\OperatorError',
"OrderBy" => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
"Paging" => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
"PercentCpaBid" => '\Google\Api\Ads\AdWords\v201306\classes\PercentCpaBid',
"Bids" => '\Google\Api\Ads\AdWords\v201306\classes\Bids',
"PercentCpaBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\PercentCpaBiddingScheme',
"Predicate" => '\Google\Api\Ads\AdWords\v201306\classes\Predicate',
"QueryError" => '\Google\Api\Ads\AdWords\v201306\classes\QueryError',
"QuotaCheckError" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
"QuotaError" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaError',
"RangeError" => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
"RateExceededError" => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
"ReadOnlyError" => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
"RejectedError" => '\Google\Api\Ads\AdWords\v201306\classes\RejectedError',
"RequestError" => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
"RequiredError" => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
"SelectorError" => '\Google\Api\Ads\AdWords\v201306\classes\SelectorError',
"SettingError" => '\Google\Api\Ads\AdWords\v201306\classes\SettingError',
"SizeLimitError" => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
"SoapResponseHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
"StatsQueryError" => '\Google\Api\Ads\AdWords\v201306\classes\StatsQueryError',
"StringLengthError" => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
"String_StringMapEntry" => '\Google\Api\Ads\AdWords\v201306\classes\String_StringMapEntry',
"TargetingSettingDetail" => '\Google\Api\Ads\AdWords\v201306\classes\TargetingSettingDetail',
"TargetingSetting" => '\Google\Api\Ads\AdWords\v201306\classes\TargetingSetting',
"Setting" => '\Google\Api\Ads\AdWords\v201306\classes\Setting',
"CpaBid" => '\Google\Api\Ads\AdWords\v201306\classes\CpaBid',
"CpcBid" => '\Google\Api\Ads\AdWords\v201306\classes\CpcBid',
"CpmBid" => '\Google\Api\Ads\AdWords\v201306\classes\CpmBid',
"DatabaseError" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
"PageOnePromotedBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\PageOnePromotedBiddingScheme',
"Stats" => '\Google\Api\Ads\AdWords\v201306\classes\Stats',
"TargetCpaBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\TargetCpaBiddingScheme',
"TargetSpendBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\TargetSpendBiddingScheme',
"ApiException" => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
"ApplicationException" => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
"Bid" => '\Google\Api\Ads\AdWords\v201306\classes\Bid',
"BidMultiplier" => '\Google\Api\Ads\AdWords\v201306\classes\BidMultiplier',
"BudgetOptimizerBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\BudgetOptimizerBiddingScheme',
"ManualCPCAdGroupExperimentBidMultipliers" => '\Google\Api\Ads\AdWords\v201306\classes\ManualCPCAdGroupExperimentBidMultipliers',
"AdGroupExperimentBidMultipliers" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupExperimentBidMultipliers',
"ManualCPMAdGroupExperimentBidMultipliers" => '\Google\Api\Ads\AdWords\v201306\classes\ManualCPMAdGroupExperimentBidMultipliers',
"Selector" => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
"AdGroupExperimentData" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupExperimentData',
"BiddingStrategyConfiguration" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategyConfiguration',
"AdGroup" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroup',
"AdGroupOperation" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupOperation',
"Operation" => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
"AdGroupPage" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupPage',
"Page" => '\Google\Api\Ads\AdWords\v201306\classes\Page',
"AdGroupReturnValue" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupReturnValue',
"ListReturnValue" => '\Google\Api\Ads\AdWords\v201306\classes\ListReturnValue',
"AdGroupServiceError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupServiceErrorReason',
"AdGroup.Status" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupStatus',
"AdxError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AdxErrorReason',
"AuthenticationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
"AuthorizationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
"BetaError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\BetaErrorReason',
"BidSource" => '\Google\Api\Ads\AdWords\v201306\classes\BidSource',
"BiddingError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingErrorReason',
"BiddingErrors.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingErrorsReason',
"BiddingStrategySource" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategySource',
"BiddingStrategyType" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategyType',
"ClientTermsError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
"ConversionOptimizerBiddingScheme.BidType" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionOptimizerBiddingSchemeBidType',
"ConversionOptimizerBiddingScheme.PricingMode" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionOptimizerBiddingSchemePricingMode',
"CriterionTypeGroup" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionTypeGroup',
"DatabaseError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
"DateError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
"DistinctError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
"EntityCountLimitExceeded.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceededReason',
"EntityNotFound.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
"ExperimentDataStatus" => '\Google\Api\Ads\AdWords\v201306\classes\ExperimentDataStatus',
"ExperimentDeltaStatus" => '\Google\Api\Ads\AdWords\v201306\classes\ExperimentDeltaStatus',
"ForwardCompatibilityError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ForwardCompatibilityErrorReason',
"IdError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
"InternalApiError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
"NewEntityCreationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationErrorReason',
"NotEmptyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
"NotWhitelistedError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
"NullError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
"OperationAccessDenied.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
"Operator" => '\Google\Api\Ads\AdWords\v201306\classes\Operator',
"OperatorError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\OperatorErrorReason',
"PageOnePromotedBiddingScheme.StrategyGoal" => '\Google\Api\Ads\AdWords\v201306\classes\PageOnePromotedBiddingSchemeStrategyGoal',
"Predicate.Operator" => '\Google\Api\Ads\AdWords\v201306\classes\PredicateOperator',
"QueryError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\QueryErrorReason',
"QuotaCheckError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
"QuotaError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaErrorReason',
"RangeError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
"RateExceededError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
"ReadOnlyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
"RejectedError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RejectedErrorReason',
"RequestError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
"RequiredError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
"SelectorError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
"SettingError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SettingErrorReason',
"SizeLimitError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
"SortOrder" => '\Google\Api\Ads\AdWords\v201306\classes\SortOrder',
"Stats.Network" => '\Google\Api\Ads\AdWords\v201306\classes\StatsNetwork',
"StatsQueryError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\StatsQueryErrorReason',
"StringLengthError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
"query" => '\Google\Api\Ads\AdWords\v201306\classes\query',
"queryResponse" => '\Google\Api\Ads\AdWords\v201306\classes\queryResponse',);

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/AdGroupService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = AdGroupService::$classmap;
    parent::__construct($wsdl, $options, $user, 'AdGroupService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of all the ad groups specified by the selector
   * from the target customer's account.
   * 
   * @param serviceSelector The selector specifying the {@link AdGroup}s to return.
   * @return List of adgroups identified by the selector.
   * @throws ApiException when there is at least one error with the request.
   */
  public function get($serviceSelector) {
    $arg = new AdGroupServiceGet($serviceSelector);
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
   * Adds, updates, or deletes ad groups.
   * <p class="note"><b>Note:</b> {@link AdGroupOperation} does not support the
   * {@code REMOVE} operator. To delete an ad group, set its
   * {@link AdGroup#status status} to {@code DELETED}.</p>
   * 
   * @param operations List of unique operations. The same ad group cannot be
   * specified in more than one operation.
   * @return The updated adgroups.
   */
  public function mutate($operations) {
    $arg = new AdGroupServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns the list of ad groups that match the query.
   * 
   * @param query The SQL-like AWQL query string
   * @return A list of adgroups
   * @throws ApiException
   */
  public function query($query) {
    $arg = new query($query);
    $result = $this->__soapCall("query", array($arg));
    return $result->rval;
  }

}