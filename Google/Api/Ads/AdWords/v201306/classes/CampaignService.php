<?php

/**
 * CampaignService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class CampaignService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                                    => "CampaignServiceGetResponse",
        "get"                                            => "CampaignServiceGet",
        "mutate"                                         => "CampaignServiceMutate",
        "mutateResponse"                                 => "CampaignServiceMutateResponse",
        "DateTime"                                       => "AdWordsDateTime",
        "SoapHeader"                                     => "SoapRequestHeader",
        "AdxError"                                       => "AdxError",
        "ApiError"                                       => "ApiError",
        "AuthenticationError"                            => "AuthenticationError",
        "AuthorizationError"                             => "AuthorizationError",
        "BetaError"                                      => "BetaError",
        "BiddingError"                                   => "BiddingError",
        "BiddingErrors"                                  => "BiddingErrors",
        "BiddingTransitionError"                         => "BiddingTransitionError",
        "BudgetError"                                    => "BudgetError",
        "CampaignError"                                  => "CampaignError",
        "CampaignStats"                                  => "CampaignStats",
        "Stats"                                          => "Stats",
        "ClientTermsError"                               => "ClientTermsError",
        "ConversionOptimizerBiddingScheme"               => "ConversionOptimizerBiddingScheme",
        "BiddingScheme"                                  => "BiddingScheme",
        "ConversionOptimizerEligibility"                 => "ConversionOptimizerEligibility",
        "DateError"                                      => "DateError",
        "DateRange"                                      => "DateRange",
        "DistinctError"                                  => "DistinctError",
        "DoubleValue"                                    => "DoubleValue",
        "NumberValue"                                    => "NumberValue",
        "EnhancedCpcBiddingScheme"                       => "EnhancedCpcBiddingScheme",
        "EntityCountLimitExceeded"                       => "EntityCountLimitExceeded",
        "EntityNotFound"                                 => "EntityNotFound",
        "ForwardCompatibilityError"                      => "ForwardCompatibilityError",
        "FrequencyCap"                                   => "FrequencyCap",
        "GeoTargetTypeSetting"                           => "GeoTargetTypeSetting",
        "Setting"                                        => "Setting",
        "IdError"                                        => "IdError",
        "InternalApiError"                               => "InternalApiError",
        "KeywordMatchSetting"                            => "KeywordMatchSetting",
        "LongValue"                                      => "LongValue",
        "ManualCpcBiddingScheme"                         => "ManualCpcBiddingScheme",
        "ManualCpmBiddingScheme"                         => "ManualCpmBiddingScheme",
        "Money"                                          => "Money",
        "ComparableValue"                                => "ComparableValue",
        "NetworkSetting"                                 => "NetworkSetting",
        "NewEntityCreationError"                         => "NewEntityCreationError",
        "NotEmptyError"                                  => "NotEmptyError",
        "NotWhitelistedError"                            => "NotWhitelistedError",
        "NullError"                                      => "NullError",
        "OperationAccessDenied"                          => "OperationAccessDenied",
        "OperatorError"                                  => "OperatorError",
        "OrderBy"                                        => "OrderBy",
        "Paging"                                         => "Paging",
        "PercentCpaBid"                                  => "PercentCpaBid",
        "Bids"                                           => "Bids",
        "PercentCpaBiddingScheme"                        => "PercentCpaBiddingScheme",
        "Predicate"                                      => "Predicate",
        "QueryError"                                     => "QueryError",
        "QuotaCheckError"                                => "QuotaCheckError",
        "QuotaError"                                     => "QuotaError",
        "RangeError"                                     => "RangeError",
        "RateExceededError"                              => "RateExceededError",
        "ReadOnlyError"                                  => "ReadOnlyError",
        "RealTimeBiddingSetting"                         => "RealTimeBiddingSetting",
        "RejectedError"                                  => "RejectedError",
        "RequestError"                                   => "RequestError",
        "RequiredError"                                  => "RequiredError",
        "SelectorError"                                  => "SelectorError",
        "SettingError"                                   => "SettingError",
        "SizeLimitError"                                 => "SizeLimitError",
        "SoapResponseHeader"                             => "SoapResponseHeader",
        "StatsQueryError"                                => "StatsQueryError",
        "StringLengthError"                              => "StringLengthError",
        "String_StringMapEntry"                          => "String_StringMapEntry",
        "TargetError"                                    => "TargetError",
        "TrackingSetting"                                => "TrackingSetting",
        "CpaBid"                                         => "CpaBid",
        "CpcBid"                                         => "CpcBid",
        "CpmBid"                                         => "CpmBid",
        "DatabaseError"                                  => "DatabaseError",
        "PageOnePromotedBiddingScheme"                   => "PageOnePromotedBiddingScheme",
        "TargetCpaBiddingScheme"                         => "TargetCpaBiddingScheme",
        "TargetSpendBiddingScheme"                       => "TargetSpendBiddingScheme",
        "ApiException"                                   => "ApiException",
        "ApplicationException"                           => "ApplicationException",
        "Budget"                                         => "Budget",
        "BudgetOptimizerBiddingScheme"                   => "BudgetOptimizerBiddingScheme",
        "Selector"                                       => "Selector",
        "BiddingStrategyConfiguration"                   => "BiddingStrategyConfiguration",
        "Campaign"                                       => "Campaign",
        "CampaignOperation"                              => "CampaignOperation",
        "Operation"                                      => "Operation",
        "CampaignPage"                                   => "CampaignPage",
        "Page"                                           => "Page",
        "CampaignReturnValue"                            => "CampaignReturnValue",
        "ListReturnValue"                                => "ListReturnValue",
        "AdServingOptimizationStatus"                    => "AdServingOptimizationStatus",
        "AdxError.Reason"                                => "AdxErrorReason",
        "AuthenticationError.Reason"                     => "AuthenticationErrorReason",
        "AuthorizationError.Reason"                      => "AuthorizationErrorReason",
        "BetaError.Reason"                               => "BetaErrorReason",
        "BidSource"                                      => "BidSource",
        "BiddingError.Reason"                            => "BiddingErrorReason",
        "BiddingErrors.Reason"                           => "BiddingErrorsReason",
        "BiddingStrategySource"                          => "BiddingStrategySource",
        "BiddingStrategyType"                            => "BiddingStrategyType",
        "BiddingTransitionError.Reason"                  => "BiddingTransitionErrorReason",
        "Budget.BudgetDeliveryMethod"                    => "BudgetBudgetDeliveryMethod",
        "Budget.BudgetPeriod"                            => "BudgetBudgetPeriod",
        "Budget.BudgetStatus"                            => "BudgetBudgetStatus",
        "BudgetError.Reason"                             => "BudgetErrorReason",
        "CampaignError.Reason"                           => "CampaignErrorReason",
        "CampaignStatus"                                 => "CampaignStatus",
        "ClientTermsError.Reason"                        => "ClientTermsErrorReason",
        "ConversionOptimizerBiddingScheme.BidType"       => "ConversionOptimizerBiddingSchemeBidType",
        "ConversionOptimizerBiddingScheme.PricingMode"   => "ConversionOptimizerBiddingSchemePricingMode",
        "ConversionOptimizerEligibility.RejectionReason" => "ConversionOptimizerEligibilityRejectionReason",
        "DatabaseError.Reason"                           => "DatabaseErrorReason",
        "DateError.Reason"                               => "DateErrorReason",
        "DistinctError.Reason"                           => "DistinctErrorReason",
        "EntityCountLimitExceeded.Reason"                => "EntityCountLimitExceededReason",
        "EntityNotFound.Reason"                          => "EntityNotFoundReason",
        "ForwardCompatibilityError.Reason"               => "ForwardCompatibilityErrorReason",
        "GeoTargetTypeSetting.NegativeGeoTargetType"     => "GeoTargetTypeSettingNegativeGeoTargetType",
        "GeoTargetTypeSetting.PositiveGeoTargetType"     => "GeoTargetTypeSettingPositiveGeoTargetType",
        "IdError.Reason"                                 => "IdErrorReason",
        "InternalApiError.Reason"                        => "InternalApiErrorReason",
        "Level"                                          => "Level",
        "NewEntityCreationError.Reason"                  => "NewEntityCreationErrorReason",
        "NotEmptyError.Reason"                           => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason"                     => "NotWhitelistedErrorReason",
        "NullError.Reason"                               => "NullErrorReason",
        "OperationAccessDenied.Reason"                   => "OperationAccessDeniedReason",
        "Operator"                                       => "Operator",
        "OperatorError.Reason"                           => "OperatorErrorReason",
        "PageOnePromotedBiddingScheme.StrategyGoal"      => "PageOnePromotedBiddingSchemeStrategyGoal",
        "Predicate.Operator"                             => "PredicateOperator",
        "QueryError.Reason"                              => "QueryErrorReason",
        "QuotaCheckError.Reason"                         => "QuotaCheckErrorReason",
        "QuotaError.Reason"                              => "QuotaErrorReason",
        "RangeError.Reason"                              => "RangeErrorReason",
        "RateExceededError.Reason"                       => "RateExceededErrorReason",
        "ReadOnlyError.Reason"                           => "ReadOnlyErrorReason",
        "RejectedError.Reason"                           => "RejectedErrorReason",
        "RequestError.Reason"                            => "RequestErrorReason",
        "RequiredError.Reason"                           => "RequiredErrorReason",
        "SelectorError.Reason"                           => "SelectorErrorReason",
        "ServingStatus"                                  => "ServingStatus",
        "SettingError.Reason"                            => "SettingErrorReason",
        "SizeLimitError.Reason"                          => "SizeLimitErrorReason",
        "SortOrder"                                      => "SortOrder",
        "Stats.Network"                                  => "StatsNetwork",
        "StatsQueryError.Reason"                         => "StatsQueryErrorReason",
        "StringLengthError.Reason"                       => "StringLengthErrorReason",
        "TargetError.Reason"                             => "TargetErrorReason",
        "TimeUnit"                                       => "TimeUnit",
        "query"                                          => "query",
        "queryResponse"                                  => "queryResponse",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/CampaignService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = CampaignService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'CampaignService',
            'https://adwords.google.com/api/adwords/cm/v201306'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the list of campaigns that meet the selector criteria.
     *
     * @param serviceSelector the selector specifying the {@link Campaign}s to return.
     *
     * @return A list of campaigns.
     * @throws ApiException if problems occurred while fetching campaign information.
     */
    public function get($serviceSelector)
    {
        $arg = new CampaignServiceGet($serviceSelector);
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
     * Adds, updates, or deletes campaigns.
     * <p class="note"><b>Note:</b> {@link CampaignOperation} does not support the
     * <code>REMOVE</code> operator. To delete a campaign, set its
     * {@link Campaign#status status} to <code>DELETED</code>.</p>
     *
     * @param operations A list of unique operations.
     *                   The same campaign cannot be specified in more than one operation.
     *
     * @return The list of updated campaigns, returned in the same order as the
     * <code>operations</code> array.
     * @throws ApiException if problems occurred while updating campaign information.
     */
    public function mutate($operations)
    {
        $arg = new CampaignServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }


    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the list of campaigns that match the query.
     *
     * @param query The SQL-like AWQL query string.
     *
     * @return A list of campaigns.
     * @throws ApiException if problems occur while parsing the query or fetching campaign
     * information.
     */
    public function query($query)
    {
        $arg = new query($query);
        $result = $this->__soapCall("query", array($arg));
        return $result->rval;
    }

}