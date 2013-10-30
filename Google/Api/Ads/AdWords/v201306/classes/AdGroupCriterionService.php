<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * AdGroupCriterionService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class AdGroupCriterionService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" => "AdGroupCriterionServiceGetResponse",
    "get" => "AdGroupCriterionServiceGet",
    "mutate" => "AdGroupCriterionServiceMutate",
    "mutateResponse" => "AdGroupCriterionServiceMutateResponse",
    "DateTime" => "AdWordsDateTime",
    "SoapHeader" => "SoapRequestHeader",
    "AdGroupCriterionError" => "AdGroupCriterionError",
    "ApiError" => "ApiError",
    "AdGroupCriterionLimitExceeded" => "AdGroupCriterionLimitExceeded",
    "EntityCountLimitExceeded" => "EntityCountLimitExceeded",
    "AdxError" => "AdxError",
    "AgeRange" => "AgeRange",
    "Criterion" => "Criterion",
    "AuthenticationError" => "AuthenticationError",
    "AuthorizationError" => "AuthorizationError",
    "BetaError" => "BetaError",
    "BiddingError" => "BiddingError",
    "BiddingErrors" => "BiddingErrors",
    "ClientTermsError" => "ClientTermsError",
    "ConversionOptimizerBiddingScheme" => "ConversionOptimizerBiddingScheme",
    "BiddingScheme" => "BiddingScheme",
    "CriterionError" => "CriterionError",
    "CriterionPolicyError" => "CriterionPolicyError",
    "PolicyViolationError" => "PolicyViolationError",
    "DateError" => "DateError",
    "DateRange" => "DateRange",
    "DistinctError" => "DistinctError",
    "DoubleValue" => "DoubleValue",
    "NumberValue" => "NumberValue",
    "EnhancedCpcBiddingScheme" => "EnhancedCpcBiddingScheme",
    "EntityAccessDenied" => "EntityAccessDenied",
    "EntityNotFound" => "EntityNotFound",
    "ForwardCompatibilityError" => "ForwardCompatibilityError",
    "Gender" => "Gender",
    "IdError" => "IdError",
    "InternalApiError" => "InternalApiError",
    "Keyword" => "Keyword",
    "LongValue" => "LongValue",
    "ManualCpcBiddingScheme" => "ManualCpcBiddingScheme",
    "ManualCpmBiddingScheme" => "ManualCpmBiddingScheme",
    "MobileAppCategory" => "MobileAppCategory",
    "MobileApplication" => "MobileApplication",
    "Money" => "Money",
    "ComparableValue" => "ComparableValue",
    "NegativeAdGroupCriterion" => "NegativeAdGroupCriterion",
    "AdGroupCriterion" => "AdGroupCriterion",
    "NewEntityCreationError" => "NewEntityCreationError",
    "NotEmptyError" => "NotEmptyError",
    "NotWhitelistedError" => "NotWhitelistedError",
    "NullError" => "NullError",
    "OperationAccessDenied" => "OperationAccessDenied",
    "OrderBy" => "OrderBy",
    "Paging" => "Paging",
    "PagingError" => "PagingError",
    "PercentCpaBid" => "PercentCpaBid",
    "Bids" => "Bids",
    "PercentCpaBiddingScheme" => "PercentCpaBiddingScheme",
    "Placement" => "Placement",
    "PolicyViolationError.Part" => "PolicyViolationErrorPart",
    "PolicyViolationKey" => "PolicyViolationKey",
    "Predicate" => "Predicate",
    "ProductConditionOperand" => "ProductConditionOperand",
    "QualityInfo" => "QualityInfo",
    "QueryError" => "QueryError",
    "QuotaCheckError" => "QuotaCheckError",
    "RangeError" => "RangeError",
    "RateExceededError" => "RateExceededError",
    "ReadOnlyError" => "ReadOnlyError",
    "RejectedError" => "RejectedError",
    "RequestError" => "RequestError",
    "RequiredError" => "RequiredError",
    "SelectorError" => "SelectorError",
    "SizeLimitError" => "SizeLimitError",
    "SoapResponseHeader" => "SoapResponseHeader",
    "StatsQueryError" => "StatsQueryError",
    "StringLengthError" => "StringLengthError",
    "String_StringMapEntry" => "String_StringMapEntry",
    "CriterionUserInterest" => "CriterionUserInterest",
    "CriterionUserList" => "CriterionUserList",
    "Vertical" => "Vertical",
    "WebpageCondition" => "WebpageCondition",
    "WebpageParameter" => "WebpageParameter",
    "CriterionParameter" => "CriterionParameter",
    "CpaBid" => "CpaBid",
    "CpcBid" => "CpcBid",
    "CpmBid" => "CpmBid",
    "DatabaseError" => "DatabaseError",
    "ExemptionRequest" => "ExemptionRequest",
    "PageOnePromotedBiddingScheme" => "PageOnePromotedBiddingScheme",
    "ProductCondition" => "ProductCondition",
    "Stats" => "Stats",
    "TargetCpaBiddingScheme" => "TargetCpaBiddingScheme",
    "TargetSpendBiddingScheme" => "TargetSpendBiddingScheme",
    "Webpage" => "Webpage",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "Bid" => "Bid",
    "BidMultiplier" => "BidMultiplier",
    "BudgetOptimizerBiddingScheme" => "BudgetOptimizerBiddingScheme",
    "ManualCPCAdGroupCriterionExperimentBidMultiplier" => "ManualCPCAdGroupCriterionExperimentBidMultiplier",
    "AdGroupCriterionExperimentBidMultiplier" => "AdGroupCriterionExperimentBidMultiplier",
    "Product" => "Product",
    "Selector" => "Selector",
    "BiddableAdGroupCriterionExperimentData" => "BiddableAdGroupCriterionExperimentData",
    "BiddingStrategyConfiguration" => "BiddingStrategyConfiguration",
    "BiddableAdGroupCriterion" => "BiddableAdGroupCriterion",
    "AdGroupCriterionOperation" => "AdGroupCriterionOperation",
    "Operation" => "Operation",
    "AdGroupCriterionPage" => "AdGroupCriterionPage",
    "Page" => "Page",
    "AdGroupCriterionReturnValue" => "AdGroupCriterionReturnValue",
    "ListReturnValue" => "ListReturnValue",
    "AdGroupCriterionError.Reason" => "AdGroupCriterionErrorReason",
    "AdGroupCriterionLimitExceeded.CriteriaLimitType" => "AdGroupCriterionLimitExceededCriteriaLimitType",
    "AdxError.Reason" => "AdxErrorReason",
    "AgeRange.AgeRangeType" => "AgeRangeAgeRangeType",
    "ApprovalStatus" => "ApprovalStatus",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "AuthorizationError.Reason" => "AuthorizationErrorReason",
    "BetaError.Reason" => "BetaErrorReason",
    "BidSource" => "BidSource",
    "BiddingError.Reason" => "BiddingErrorReason",
    "BiddingErrors.Reason" => "BiddingErrorsReason",
    "BiddingStrategySource" => "BiddingStrategySource",
    "BiddingStrategyType" => "BiddingStrategyType",
    "ClientTermsError.Reason" => "ClientTermsErrorReason",
    "ConversionOptimizerBiddingScheme.BidType" => "ConversionOptimizerBiddingSchemeBidType",
    "ConversionOptimizerBiddingScheme.PricingMode" => "ConversionOptimizerBiddingSchemePricingMode",
    "Criterion.Type" => "CriterionType",
    "CriterionError.Reason" => "CriterionErrorReason",
    "CriterionUse" => "CriterionUse",
    "DatabaseError.Reason" => "DatabaseErrorReason",
    "DateError.Reason" => "DateErrorReason",
    "DistinctError.Reason" => "DistinctErrorReason",
    "EntityAccessDenied.Reason" => "EntityAccessDeniedReason",
    "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
    "EntityNotFound.Reason" => "EntityNotFoundReason",
    "ExperimentDataStatus" => "ExperimentDataStatus",
    "ExperimentDeltaStatus" => "ExperimentDeltaStatus",
    "ForwardCompatibilityError.Reason" => "ForwardCompatibilityErrorReason",
    "Gender.GenderType" => "GenderGenderType",
    "IdError.Reason" => "IdErrorReason",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "KeywordMatchType" => "KeywordMatchType",
    "MultiplierSource" => "MultiplierSource",
    "NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
    "NotEmptyError.Reason" => "NotEmptyErrorReason",
    "NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
    "NullError.Reason" => "NullErrorReason",
    "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
    "Operator" => "Operator",
    "PageOnePromotedBiddingScheme.StrategyGoal" => "PageOnePromotedBiddingSchemeStrategyGoal",
    "PagingError.Reason" => "PagingErrorReason",
    "Predicate.Operator" => "PredicateOperator",
    "QueryError.Reason" => "QueryErrorReason",
    "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
    "RangeError.Reason" => "RangeErrorReason",
    "RateExceededError.Reason" => "RateExceededErrorReason",
    "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
    "RejectedError.Reason" => "RejectedErrorReason",
    "RequestError.Reason" => "RequestErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "SelectorError.Reason" => "SelectorErrorReason",
    "SizeLimitError.Reason" => "SizeLimitErrorReason",
    "SortOrder" => "SortOrder",
    "Stats.Network" => "StatsNetwork",
    "StatsQueryError.Reason" => "StatsQueryErrorReason",
    "StringLengthError.Reason" => "StringLengthErrorReason",
    "SystemServingStatus" => "SystemServingStatus",
    "CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
    "UserStatus" => "UserStatus",
    "WebpageConditionOperand" => "WebpageConditionOperand",
    "query" => "query",
    "queryResponse" => "queryResponse",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/AdGroupCriterionService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = AdGroupCriterionService::$classmap;
    parent::__construct($wsdl, $options, $user, 'AdGroupCriterionService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Gets adgroup criteria.
   * 
   * @param serviceSelector filters the adgroup criteria to be returned.
   * @return a page (subset) view of the criteria selected
   * @throws ApiException when there is at least one error with the request
   */
  public function get($serviceSelector) {
    $arg = new AdGroupCriterionServiceGet($serviceSelector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET, REMOVE.</span>
   * 
   * 
   * 
   * Adds, removes or updates adgroup criteria.
   * 
   * @param operations operations to do
   * during checks on keywords to be added.
   * @return added and updated adgroup criteria (without optional parts)
   * @throws ApiException when there is at least one error with the request
   */
  public function mutate($operations) {
    $arg = new AdGroupCriterionServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns the list of AdGroupCriterion that match the query.
   * 
   * @param query The SQL-like AWQL query string
   * @returns A list of AdGroupCriterion
   * @throws ApiException when the query is invalid or there are errors processing the request.
   */
  public function query($query) {
    $arg = new query($query);
    $result = $this->__soapCall("query", array($arg));
    return $result->rval;
  }

}