<?php

require_once('AdGroupCriterionService.require.php');


/**
 * AdGroupCriterionService
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupCriterionService extends AdWordsSoapClient
{

    const SERVICE_NAME = "AdGroupCriterionService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201402/AdGroupCriterionService";

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public $endpoint = "https://adwords.google.com/api/adwords/cm/v201402/AdGroupCriterionService";
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "AdGroupCriterionError"                            => "AdGroupCriterionError",
        "AdGroupCriterionLimitExceeded"                    => "AdGroupCriterionLimitExceeded",
        "AdxError"                                         => "AdxError",
        "AgeRange"                                         => "AgeRange",
        "AuthenticationError"                              => "AuthenticationError",
        "AuthorizationError"                               => "AuthorizationError",
        "BiddingError"                                     => "BiddingError",
        "BiddingErrors"                                    => "BiddingErrors",
        "ClientTermsError"                                 => "ClientTermsError",
        "ConversionOptimizerBiddingScheme"                 => "ConversionOptimizerBiddingScheme",
        "CriterionError"                                   => "CriterionError",
        "CriterionPolicyError"                             => "CriterionPolicyError",
        "DateError"                                        => "DateError",
        "DateRange"                                        => "DateRange",
        "DistinctError"                                    => "DistinctError",
        "DoubleValue"                                      => "DoubleValue",
        "EnhancedCpcBiddingScheme"                         => "EnhancedCpcBiddingScheme",
        "EntityAccessDenied"                               => "EntityAccessDenied",
        "EntityCountLimitExceeded"                         => "EntityCountLimitExceeded",
        "EntityNotFound"                                   => "EntityNotFound",
        "ExperimentError"                                  => "ExperimentError",
        "ForwardCompatibilityError"                        => "ForwardCompatibilityError",
        "Gender"                                           => "Gender",
        "IdError"                                          => "IdError",
        "InternalApiError"                                 => "InternalApiError",
        "Keyword"                                          => "Keyword",
        "LongValue"                                        => "LongValue",
        "ManualCpcBiddingScheme"                           => "ManualCpcBiddingScheme",
        "ManualCpmBiddingScheme"                           => "ManualCpmBiddingScheme",
        "MobileAppCategory"                                => "MobileAppCategory",
        "MobileApplication"                                => "MobileApplication",
        "Money"                                            => "Money",
        "NegativeAdGroupCriterion"                         => "NegativeAdGroupCriterion",
        "NewEntityCreationError"                           => "NewEntityCreationError",
        "NotEmptyError"                                    => "NotEmptyError",
        "NullError"                                        => "NullError",
        "NumberValue"                                      => "NumberValue",
        "OperationAccessDenied"                            => "OperationAccessDenied",
        "OrderBy"                                          => "OrderBy",
        "Paging"                                           => "Paging",
        "PagingError"                                      => "PagingError",
        "PercentCpaBid"                                    => "PercentCpaBid",
        "PercentCpaBiddingScheme"                          => "PercentCpaBiddingScheme",
        "Placement"                                        => "Placement",
        "PolicyViolationError.Part"                        => "PolicyViolationErrorPart",
        "PolicyViolationKey"                               => "PolicyViolationKey",
        "Predicate"                                        => "Predicate",
        "ProductAdwordsGrouping"                           => "ProductAdwordsGrouping",
        "ProductAdwordsLabels"                             => "ProductAdwordsLabels",
        "ProductBiddingCategory"                           => "ProductBiddingCategory",
        "ProductBrand"                                     => "ProductBrand",
        "ProductCanonicalCondition"                        => "ProductCanonicalCondition",
        "ProductLegacyCondition"                           => "ProductLegacyCondition",
        "ProductConditionOperand"                          => "ProductConditionOperand",
        "ProductCustomAttribute"                           => "ProductCustomAttribute",
        "ProductOfferId"                                   => "ProductOfferId",
        "ProductType"                                      => "ProductType",
        "ProductTypeFull"                                  => "ProductTypeFull",
        "QualityInfo"                                      => "QualityInfo",
        "QueryError"                                       => "QueryError",
        "QuotaCheckError"                                  => "QuotaCheckError",
        "RangeError"                                       => "RangeError",
        "RateExceededError"                                => "RateExceededError",
        "ReadOnlyError"                                    => "ReadOnlyError",
        "RejectedError"                                    => "RejectedError",
        "RequestError"                                     => "RequestError",
        "RequiredError"                                    => "RequiredError",
        "SelectorError"                                    => "SelectorError",
        "SizeLimitError"                                   => "SizeLimitError",
        "SoapHeader"                                       => "SoapRequestHeader",
        "SoapResponseHeader"                               => "SoapResponseHeader",
        "StatsQueryError"                                  => "StatsQueryError",
        "StringLengthError"                                => "StringLengthError",
        "String_StringMapEntry"                            => "String_StringMapEntry",
        "CriterionUserInterest"                            => "CriterionUserInterest",
        "CriterionUserList"                                => "CriterionUserList",
        "Vertical"                                         => "Vertical",
        "WebpageCondition"                                 => "WebpageCondition",
        "WebpageParameter"                                 => "WebpageParameter",
        "ComparableValue"                                  => "ComparableValue",
        "CpaBid"                                           => "CpaBid",
        "CpcBid"                                           => "CpcBid",
        "CpmBid"                                           => "CpmBid",
        "CriterionParameter"                               => "CriterionParameter",
        "DatabaseError"                                    => "DatabaseError",
        "ExemptionRequest"                                 => "ExemptionRequest",
        "PageOnePromotedBiddingScheme"                     => "PageOnePromotedBiddingScheme",
        "PolicyViolationError"                             => "PolicyViolationError",
        "ProductCondition"                                 => "ProductCondition",
        "ProductDimension"                                 => "ProductDimension",
        "ProductPartition"                                 => "ProductPartition",
        "TargetCpaBiddingScheme"                           => "TargetCpaBiddingScheme",
        "TargetRoasBiddingScheme"                          => "TargetRoasBiddingScheme",
        "TargetSpendBiddingScheme"                         => "TargetSpendBiddingScheme",
        "Webpage"                                          => "Webpage",
        "ApiError"                                         => "ApiError",
        "ApiException"                                     => "ApiException",
        "ApplicationException"                             => "ApplicationException",
        "Bid"                                              => "Bid",
        "BidMultiplier"                                    => "BidMultiplier",
        "Bids"                                             => "Bids",
        "BudgetOptimizerBiddingScheme"                     => "BudgetOptimizerBiddingScheme",
        "ManualCPCAdGroupCriterionExperimentBidMultiplier" => "ManualCPCAdGroupCriterionExperimentBidMultiplier",
        "Product"                                          => "Product",
        "Selector"                                         => "Selector",
        "AdGroupCriterionExperimentBidMultiplier"          => "AdGroupCriterionExperimentBidMultiplier",
        "BiddableAdGroupCriterionExperimentData"           => "BiddableAdGroupCriterionExperimentData",
        "BiddingScheme"                                    => "BiddingScheme",
        "BiddingStrategyConfiguration"                     => "BiddingStrategyConfiguration",
        "Criterion"                                        => "Criterion",
        "BiddableAdGroupCriterion"                         => "BiddableAdGroupCriterion",
        "AdGroupCriterion"                                 => "AdGroupCriterion",
        "AdGroupCriterionOperation"                        => "AdGroupCriterionOperation",
        "AdGroupCriterionPage"                             => "AdGroupCriterionPage",
        "AdGroupCriterionReturnValue"                      => "AdGroupCriterionReturnValue",
        "ListReturnValue"                                  => "ListReturnValue",
        "Operation"                                        => "Operation",
        "Page"                                             => "Page",
        "AdGroupCriterionError.Reason"                     => "AdGroupCriterionErrorReason",
        "AdGroupCriterionLimitExceeded.CriteriaLimitType"  => "AdGroupCriterionLimitExceededCriteriaLimitType",
        "AdxError.Reason"                                  => "AdxErrorReason",
        "AgeRange.AgeRangeType"                            => "AgeRangeAgeRangeType",
        "ApprovalStatus"                                   => "ApprovalStatus",
        "AuthenticationError.Reason"                       => "AuthenticationErrorReason",
        "AuthorizationError.Reason"                        => "AuthorizationErrorReason",
        "BidSource"                                        => "BidSource",
        "BiddingError.Reason"                              => "BiddingErrorReason",
        "BiddingErrors.Reason"                             => "BiddingErrorsReason",
        "BiddingStrategySource"                            => "BiddingStrategySource",
        "BiddingStrategyType"                              => "BiddingStrategyType",
        "ClientTermsError.Reason"                          => "ClientTermsErrorReason",
        "ConversionOptimizerBiddingScheme.BidType"         => "ConversionOptimizerBiddingSchemeBidType",
        "ConversionOptimizerBiddingScheme.PricingMode"     => "ConversionOptimizerBiddingSchemePricingMode",
        "Criterion.Type"                                   => "CriterionType",
        "CriterionError.Reason"                            => "CriterionErrorReason",
        "CriterionUse"                                     => "CriterionUse",
        "DatabaseError.Reason"                             => "DatabaseErrorReason",
        "DateError.Reason"                                 => "DateErrorReason",
        "DistinctError.Reason"                             => "DistinctErrorReason",
        "EntityAccessDenied.Reason"                        => "EntityAccessDeniedReason",
        "EntityCountLimitExceeded.Reason"                  => "EntityCountLimitExceededReason",
        "EntityNotFound.Reason"                            => "EntityNotFoundReason",
        "ExperimentDataStatus"                             => "ExperimentDataStatus",
        "ExperimentDeltaStatus"                            => "ExperimentDeltaStatus",
        "ExperimentError.Reason"                           => "ExperimentErrorReason",
        "ForwardCompatibilityError.Reason"                 => "ForwardCompatibilityErrorReason",
        "Gender.GenderType"                                => "GenderGenderType",
        "IdError.Reason"                                   => "IdErrorReason",
        "InternalApiError.Reason"                          => "InternalApiErrorReason",
        "KeywordMatchType"                                 => "KeywordMatchType",
        "MultiplierSource"                                 => "MultiplierSource",
        "NewEntityCreationError.Reason"                    => "NewEntityCreationErrorReason",
        "NotEmptyError.Reason"                             => "NotEmptyErrorReason",
        "NullError.Reason"                                 => "NullErrorReason",
        "OperationAccessDenied.Reason"                     => "OperationAccessDeniedReason",
        "Operator"                                         => "Operator",
        "PageOnePromotedBiddingScheme.StrategyGoal"        => "PageOnePromotedBiddingSchemeStrategyGoal",
        "PagingError.Reason"                               => "PagingErrorReason",
        "Predicate.Operator"                               => "PredicateOperator",
        "ProductCanonicalCondition.Condition"              => "ProductCanonicalConditionCondition",
        "ProductDimensionType"                             => "ProductDimensionType",
        "ProductPartitionType"                             => "ProductPartitionType",
        "QueryError.Reason"                                => "QueryErrorReason",
        "QuotaCheckError.Reason"                           => "QuotaCheckErrorReason",
        "RangeError.Reason"                                => "RangeErrorReason",
        "RateExceededError.Reason"                         => "RateExceededErrorReason",
        "ReadOnlyError.Reason"                             => "ReadOnlyErrorReason",
        "RejectedError.Reason"                             => "RejectedErrorReason",
        "RequestError.Reason"                              => "RequestErrorReason",
        "RequiredError.Reason"                             => "RequiredErrorReason",
        "SelectorError.Reason"                             => "SelectorErrorReason",
        "SizeLimitError.Reason"                            => "SizeLimitErrorReason",
        "SortOrder"                                        => "SortOrder",
        "StatsQueryError.Reason"                           => "StatsQueryErrorReason",
        "StringLengthError.Reason"                         => "StringLengthErrorReason",
        "SystemServingStatus"                              => "SystemServingStatus",
        "CriterionUserList.MembershipStatus"               => "CriterionUserListMembershipStatus",
        "UserStatus"                                       => "UserStatus",
        "WebpageConditionOperand"                          => "WebpageConditionOperand",
        "get"                                              => "AdGroupCriterionServiceGet",
        "getResponse"                                      => "AdGroupCriterionServiceGetResponse",
        "mutate"                                           => "AdGroupCriterionServiceMutate",
        "mutateResponse"                                   => "AdGroupCriterionServiceMutateResponse",
        "query"                                            => "Query",
        "queryResponse"                                    => "QueryResponse",
    );


    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = self::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            self::SERVICE_NAME,
            self::WSDL_NAMESPACE
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Gets adgroup criteria.
     *
     * @param serviceSelector filters the adgroup criteria to be returned.
     *
     * @return a page (subset) view of the criteria selected
     * @throws ApiException when there is at least one error with the request
     */
    public function get($serviceSelector)
    {
        $args = new AdGroupCriterionServiceGet($serviceSelector);
        $result = $this->__soapCall("get", array($args));
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
     *                   during checks on keywords to be added.
     *
     * @return added and updated adgroup criteria (without optional parts)
     * @throws ApiException when there is at least one error with the request
     */
    public function mutate($operations)
    {
        $args = new AdGroupCriterionServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));
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
     *
     * @returns A list of AdGroupCriterion
     * @throws ApiException when the query is invalid or there are errors processing the request.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall("query", array($args));
        return $result->rval;
    }
}