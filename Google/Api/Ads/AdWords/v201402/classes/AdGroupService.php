<?php

require_once('AdGroupService.require.php');


/**
 * AdGroupService
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupService extends AdWordsSoapClient {

  const SERVICE_NAME = "AdGroupService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201402/AdGroupService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201402/AdGroupService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "AdGroupServiceError" => "AdGroupServiceError",
    "AdxError" => "AdxError",
    "AuthenticationError" => "AuthenticationError",
    "AuthorizationError" => "AuthorizationError",
    "BiddingError" => "BiddingError",
    "BiddingErrors" => "BiddingErrors",
    "ClientTermsError" => "ClientTermsError",
    "ConversionOptimizerBiddingScheme" => "ConversionOptimizerBiddingScheme",
    "DateError" => "DateError",
    "DateRange" => "DateRange",
    "DistinctError" => "DistinctError",
    "DoubleValue" => "DoubleValue",
    "EnhancedCpcBiddingScheme" => "EnhancedCpcBiddingScheme",
    "EntityCountLimitExceeded" => "EntityCountLimitExceeded",
    "EntityNotFound" => "EntityNotFound",
    "ExperimentError" => "ExperimentError",
    "ExplorerAutoOptimizerSetting" => "ExplorerAutoOptimizerSetting",
    "ForwardCompatibilityError" => "ForwardCompatibilityError",
    "IdError" => "IdError",
    "InternalApiError" => "InternalApiError",
    "LongValue" => "LongValue",
    "ManualCpcBiddingScheme" => "ManualCpcBiddingScheme",
    "ManualCpmBiddingScheme" => "ManualCpmBiddingScheme",
    "Money" => "Money",
    "NewEntityCreationError" => "NewEntityCreationError",
    "NotEmptyError" => "NotEmptyError",
    "NullError" => "NullError",
    "NumberValue" => "NumberValue",
    "OperationAccessDenied" => "OperationAccessDenied",
    "OperatorError" => "OperatorError",
    "OrderBy" => "OrderBy",
    "Paging" => "Paging",
    "PercentCpaBid" => "PercentCpaBid",
    "PercentCpaBiddingScheme" => "PercentCpaBiddingScheme",
    "Predicate" => "Predicate",
    "QueryError" => "QueryError",
    "QuotaCheckError" => "QuotaCheckError",
    "QuotaError" => "QuotaError",
    "RangeError" => "RangeError",
    "RateExceededError" => "RateExceededError",
    "ReadOnlyError" => "ReadOnlyError",
    "RejectedError" => "RejectedError",
    "RequestError" => "RequestError",
    "RequiredError" => "RequiredError",
    "SelectorError" => "SelectorError",
    "SettingError" => "SettingError",
    "SizeLimitError" => "SizeLimitError",
    "SoapHeader" => "SoapRequestHeader",
    "SoapResponseHeader" => "SoapResponseHeader",
    "StatsQueryError" => "StatsQueryError",
    "StringLengthError" => "StringLengthError",
    "String_StringMapEntry" => "String_StringMapEntry",
    "TargetingSettingDetail" => "TargetingSettingDetail",
    "TargetingSetting" => "TargetingSetting",
    "ComparableValue" => "ComparableValue",
    "CpaBid" => "CpaBid",
    "CpcBid" => "CpcBid",
    "CpmBid" => "CpmBid",
    "DatabaseError" => "DatabaseError",
    "PageOnePromotedBiddingScheme" => "PageOnePromotedBiddingScheme",
    "Setting" => "Setting",
    "TargetCpaBiddingScheme" => "TargetCpaBiddingScheme",
    "TargetRoasBiddingScheme" => "TargetRoasBiddingScheme",
    "TargetSpendBiddingScheme" => "TargetSpendBiddingScheme",
    "ApiError" => "ApiError",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "Bid" => "Bid",
    "BidMultiplier" => "BidMultiplier",
    "Bids" => "Bids",
    "BudgetOptimizerBiddingScheme" => "BudgetOptimizerBiddingScheme",
    "ManualCPCAdGroupExperimentBidMultipliers" => "ManualCPCAdGroupExperimentBidMultipliers",
    "ManualCPMAdGroupExperimentBidMultipliers" => "ManualCPMAdGroupExperimentBidMultipliers",
    "Selector" => "Selector",
    "AdGroupExperimentBidMultipliers" => "AdGroupExperimentBidMultipliers",
    "AdGroupExperimentData" => "AdGroupExperimentData",
    "BiddingScheme" => "BiddingScheme",
    "BiddingStrategyConfiguration" => "BiddingStrategyConfiguration",
    "AdGroup" => "AdGroup",
    "AdGroupOperation" => "AdGroupOperation",
    "AdGroupPage" => "AdGroupPage",
    "AdGroupReturnValue" => "AdGroupReturnValue",
    "ListReturnValue" => "ListReturnValue",
    "Operation" => "Operation",
    "Page" => "Page",
    "AdGroupServiceError.Reason" => "AdGroupServiceErrorReason",
    "AdGroup.Status" => "AdGroupStatus",
    "AdxError.Reason" => "AdxErrorReason",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "AuthorizationError.Reason" => "AuthorizationErrorReason",
    "BidSource" => "BidSource",
    "BiddingError.Reason" => "BiddingErrorReason",
    "BiddingErrors.Reason" => "BiddingErrorsReason",
    "BiddingStrategySource" => "BiddingStrategySource",
    "BiddingStrategyType" => "BiddingStrategyType",
    "ClientTermsError.Reason" => "ClientTermsErrorReason",
    "ConversionOptimizerBiddingScheme.BidType" => "ConversionOptimizerBiddingSchemeBidType",
    "ConversionOptimizerBiddingScheme.PricingMode" => "ConversionOptimizerBiddingSchemePricingMode",
    "CriterionTypeGroup" => "CriterionTypeGroup",
    "DatabaseError.Reason" => "DatabaseErrorReason",
    "DateError.Reason" => "DateErrorReason",
    "DistinctError.Reason" => "DistinctErrorReason",
    "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
    "EntityNotFound.Reason" => "EntityNotFoundReason",
    "ExperimentDataStatus" => "ExperimentDataStatus",
    "ExperimentDeltaStatus" => "ExperimentDeltaStatus",
    "ExperimentError.Reason" => "ExperimentErrorReason",
    "ForwardCompatibilityError.Reason" => "ForwardCompatibilityErrorReason",
    "IdError.Reason" => "IdErrorReason",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
    "NotEmptyError.Reason" => "NotEmptyErrorReason",
    "NullError.Reason" => "NullErrorReason",
    "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
    "Operator" => "Operator",
    "OperatorError.Reason" => "OperatorErrorReason",
    "PageOnePromotedBiddingScheme.StrategyGoal" => "PageOnePromotedBiddingSchemeStrategyGoal",
    "Predicate.Operator" => "PredicateOperator",
    "QueryError.Reason" => "QueryErrorReason",
    "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
    "QuotaError.Reason" => "QuotaErrorReason",
    "RangeError.Reason" => "RangeErrorReason",
    "RateExceededError.Reason" => "RateExceededErrorReason",
    "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
    "RejectedError.Reason" => "RejectedErrorReason",
    "RequestError.Reason" => "RequestErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "SelectorError.Reason" => "SelectorErrorReason",
    "SettingError.Reason" => "SettingErrorReason",
    "SizeLimitError.Reason" => "SizeLimitErrorReason",
    "SortOrder" => "SortOrder",
    "StatsQueryError.Reason" => "StatsQueryErrorReason",
    "StringLengthError.Reason" => "StringLengthErrorReason",
    "get" => "AdGroupServiceGet",
    "getResponse" => "AdGroupServiceGetResponse",
    "mutate" => "AdGroupServiceMutate",
    "mutateResponse" => "AdGroupServiceMutateResponse",
    "query" => "Query",
    "queryResponse" => "QueryResponse",
  );


  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = self::$classmap;
    parent::__construct($wsdl, $options, $user, self::SERVICE_NAME,
        self::WSDL_NAMESPACE);
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
    $args = new AdGroupServiceGet($serviceSelector);
    $result = $this->__soapCall("get", array($args));
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
    $args = new AdGroupServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($args));
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
    $args = new Query($query);
    $result = $this->__soapCall("query", array($args));
    return $result->rval;
  }}