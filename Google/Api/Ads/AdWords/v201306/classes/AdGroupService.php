<?php

require_once('AdGroupService.require.php');


/**
 * AdGroupService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class AdGroupService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                                  => "AdGroupServiceGetResponse",
        "get"                                          => "AdGroupServiceGet",
        "mutate"                                       => "AdGroupServiceMutate",
        "mutateResponse"                               => "AdGroupServiceMutateResponse",
        "DateTime"                                     => "AdWordsDateTime",
        "SoapHeader"                                   => "SoapRequestHeader",
        "AdGroupServiceError"                          => "AdGroupServiceError",
        "ApiError"                                     => "ApiError",
        "AdxError"                                     => "AdxError",
        "AuthenticationError"                          => "AuthenticationError",
        "AuthorizationError"                           => "AuthorizationError",
        "BetaError"                                    => "BetaError",
        "BiddingError"                                 => "BiddingError",
        "BiddingErrors"                                => "BiddingErrors",
        "ClientTermsError"                             => "ClientTermsError",
        "ConversionOptimizerBiddingScheme"             => "ConversionOptimizerBiddingScheme",
        "BiddingScheme"                                => "BiddingScheme",
        "DateError"                                    => "DateError",
        "DateRange"                                    => "DateRange",
        "DistinctError"                                => "DistinctError",
        "DoubleValue"                                  => "DoubleValue",
        "NumberValue"                                  => "NumberValue",
        "EnhancedCpcBiddingScheme"                     => "EnhancedCpcBiddingScheme",
        "EntityCountLimitExceeded"                     => "EntityCountLimitExceeded",
        "EntityNotFound"                               => "EntityNotFound",
        "ForwardCompatibilityError"                    => "ForwardCompatibilityError",
        "IdError"                                      => "IdError",
        "InternalApiError"                             => "InternalApiError",
        "LongValue"                                    => "LongValue",
        "ManualCpcBiddingScheme"                       => "ManualCpcBiddingScheme",
        "ManualCpmBiddingScheme"                       => "ManualCpmBiddingScheme",
        "Money"                                        => "Money",
        "ComparableValue"                              => "ComparableValue",
        "NewEntityCreationError"                       => "NewEntityCreationError",
        "NotEmptyError"                                => "NotEmptyError",
        "NotWhitelistedError"                          => "NotWhitelistedError",
        "NullError"                                    => "NullError",
        "OperationAccessDenied"                        => "OperationAccessDenied",
        "OperatorError"                                => "OperatorError",
        "OrderBy"                                      => "OrderBy",
        "Paging"                                       => "Paging",
        "PercentCpaBid"                                => "PercentCpaBid",
        "Bids"                                         => "Bids",
        "PercentCpaBiddingScheme"                      => "PercentCpaBiddingScheme",
        "Predicate"                                    => "Predicate",
        "QueryError"                                   => "QueryError",
        "QuotaCheckError"                              => "QuotaCheckError",
        "QuotaError"                                   => "QuotaError",
        "RangeError"                                   => "RangeError",
        "RateExceededError"                            => "RateExceededError",
        "ReadOnlyError"                                => "ReadOnlyError",
        "RejectedError"                                => "RejectedError",
        "RequestError"                                 => "RequestError",
        "RequiredError"                                => "RequiredError",
        "SelectorError"                                => "SelectorError",
        "SettingError"                                 => "SettingError",
        "SizeLimitError"                               => "SizeLimitError",
        "SoapResponseHeader"                           => "SoapResponseHeader",
        "StatsQueryError"                              => "StatsQueryError",
        "StringLengthError"                            => "StringLengthError",
        "String_StringMapEntry"                        => "String_StringMapEntry",
        "TargetingSettingDetail"                       => "TargetingSettingDetail",
        "TargetingSetting"                             => "TargetingSetting",
        "Setting"                                      => "Setting",
        "CpaBid"                                       => "CpaBid",
        "CpcBid"                                       => "CpcBid",
        "CpmBid"                                       => "CpmBid",
        "DatabaseError"                                => "DatabaseError",
        "PageOnePromotedBiddingScheme"                 => "PageOnePromotedBiddingScheme",
        "Stats"                                        => "Stats",
        "TargetCpaBiddingScheme"                       => "TargetCpaBiddingScheme",
        "TargetSpendBiddingScheme"                     => "TargetSpendBiddingScheme",
        "ApiException"                                 => "ApiException",
        "ApplicationException"                         => "ApplicationException",
        "Bid"                                          => "Bid",
        "BidMultiplier"                                => "BidMultiplier",
        "BudgetOptimizerBiddingScheme"                 => "BudgetOptimizerBiddingScheme",
        "ManualCPCAdGroupExperimentBidMultipliers"     => "ManualCPCAdGroupExperimentBidMultipliers",
        "AdGroupExperimentBidMultipliers"              => "AdGroupExperimentBidMultipliers",
        "ManualCPMAdGroupExperimentBidMultipliers"     => "ManualCPMAdGroupExperimentBidMultipliers",
        "Selector"                                     => "Selector",
        "AdGroupExperimentData"                        => "AdGroupExperimentData",
        "BiddingStrategyConfiguration"                 => "BiddingStrategyConfiguration",
        "AdGroup"                                      => "AdGroup",
        "AdGroupOperation"                             => "AdGroupOperation",
        "Operation"                                    => "Operation",
        "AdGroupPage"                                  => "AdGroupPage",
        "Page"                                         => "Page",
        "AdGroupReturnValue"                           => "AdGroupReturnValue",
        "ListReturnValue"                              => "ListReturnValue",
        "AdGroupServiceError.Reason"                   => "AdGroupServiceErrorReason",
        "AdGroup.Status"                               => "AdGroupStatus",
        "AdxError.Reason"                              => "AdxErrorReason",
        "AuthenticationError.Reason"                   => "AuthenticationErrorReason",
        "AuthorizationError.Reason"                    => "AuthorizationErrorReason",
        "BetaError.Reason"                             => "BetaErrorReason",
        "BidSource"                                    => "BidSource",
        "BiddingError.Reason"                          => "BiddingErrorReason",
        "BiddingErrors.Reason"                         => "BiddingErrorsReason",
        "BiddingStrategySource"                        => "BiddingStrategySource",
        "BiddingStrategyType"                          => "BiddingStrategyType",
        "ClientTermsError.Reason"                      => "ClientTermsErrorReason",
        "ConversionOptimizerBiddingScheme.BidType"     => "ConversionOptimizerBiddingSchemeBidType",
        "ConversionOptimizerBiddingScheme.PricingMode" => "ConversionOptimizerBiddingSchemePricingMode",
        "CriterionTypeGroup"                           => "CriterionTypeGroup",
        "DatabaseError.Reason"                         => "DatabaseErrorReason",
        "DateError.Reason"                             => "DateErrorReason",
        "DistinctError.Reason"                         => "DistinctErrorReason",
        "EntityCountLimitExceeded.Reason"              => "EntityCountLimitExceededReason",
        "EntityNotFound.Reason"                        => "EntityNotFoundReason",
        "ExperimentDataStatus"                         => "ExperimentDataStatus",
        "ExperimentDeltaStatus"                        => "ExperimentDeltaStatus",
        "ForwardCompatibilityError.Reason"             => "ForwardCompatibilityErrorReason",
        "IdError.Reason"                               => "IdErrorReason",
        "InternalApiError.Reason"                      => "InternalApiErrorReason",
        "NewEntityCreationError.Reason"                => "NewEntityCreationErrorReason",
        "NotEmptyError.Reason"                         => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason"                   => "NotWhitelistedErrorReason",
        "NullError.Reason"                             => "NullErrorReason",
        "OperationAccessDenied.Reason"                 => "OperationAccessDeniedReason",
        "Operator"                                     => "Operator",
        "OperatorError.Reason"                         => "OperatorErrorReason",
        "PageOnePromotedBiddingScheme.StrategyGoal"    => "PageOnePromotedBiddingSchemeStrategyGoal",
        "Predicate.Operator"                           => "PredicateOperator",
        "QueryError.Reason"                            => "QueryErrorReason",
        "QuotaCheckError.Reason"                       => "QuotaCheckErrorReason",
        "QuotaError.Reason"                            => "QuotaErrorReason",
        "RangeError.Reason"                            => "RangeErrorReason",
        "RateExceededError.Reason"                     => "RateExceededErrorReason",
        "ReadOnlyError.Reason"                         => "ReadOnlyErrorReason",
        "RejectedError.Reason"                         => "RejectedErrorReason",
        "RequestError.Reason"                          => "RequestErrorReason",
        "RequiredError.Reason"                         => "RequiredErrorReason",
        "SelectorError.Reason"                         => "SelectorErrorReason",
        "SettingError.Reason"                          => "SettingErrorReason",
        "SizeLimitError.Reason"                        => "SizeLimitErrorReason",
        "SortOrder"                                    => "SortOrder",
        "Stats.Network"                                => "StatsNetwork",
        "StatsQueryError.Reason"                       => "StatsQueryErrorReason",
        "StringLengthError.Reason"                     => "StringLengthErrorReason",
        "query"                                        => "query",
        "queryResponse"                                => "queryResponse",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/AdGroupService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = AdGroupService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'AdGroupService',
            'https://adwords.google.com/api/adwords/cm/v201306'
        );
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
     *
     * @return List of adgroups identified by the selector.
     * @throws ApiException when there is at least one error with the request.
     */
    public function get($serviceSelector)
    {
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
     *                   specified in more than one operation.
     *
     * @return The updated adgroups.
     */
    public function mutate($operations)
    {
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
     *
     * @return A list of adgroups
     * @throws ApiException
     */
    public function query($query)
    {
        $arg = new query($query);
        $result = $this->__soapCall("query", array($arg));
        return $result->rval;
    }

}