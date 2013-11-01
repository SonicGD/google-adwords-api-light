<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * AdGroupCriterionService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class AdGroupCriterionService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                                      => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionServiceGetResponse',
        "get"                                              => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionServiceGet',
        "mutate"                                           => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionServiceMutate',
        "mutateResponse"                                   => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionServiceMutateResponse',
        "DateTime"                                         => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
        "SoapHeader"                                       => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
        "AdGroupCriterionError"                            => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionError',
        "ApiError"                                         => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
        "AdGroupCriterionLimitExceeded"                    => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionLimitExceeded',
        "EntityCountLimitExceeded"                         => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceeded',
        "AdxError"                                         => '\Google\Api\Ads\AdWords\v201306\classes\AdxError',
        "AgeRange"                                         => '\Google\Api\Ads\AdWords\v201306\classes\AgeRange',
        "Criterion"                                        => '\Google\Api\Ads\AdWords\v201306\classes\Criterion',
        "AuthenticationError"                              => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
        "AuthorizationError"                               => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
        "BetaError"                                        => '\Google\Api\Ads\AdWords\v201306\classes\BetaError',
        "BiddingError"                                     => '\Google\Api\Ads\AdWords\v201306\classes\BiddingError',
        "BiddingErrors"                                    => '\Google\Api\Ads\AdWords\v201306\classes\BiddingErrors',
        "ClientTermsError"                                 => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
        "ConversionOptimizerBiddingScheme"                 => '\Google\Api\Ads\AdWords\v201306\classes\ConversionOptimizerBiddingScheme',
        "BiddingScheme"                                    => '\Google\Api\Ads\AdWords\v201306\classes\BiddingScheme',
        "CriterionError"                                   => '\Google\Api\Ads\AdWords\v201306\classes\CriterionError',
        "CriterionPolicyError"                             => '\Google\Api\Ads\AdWords\v201306\classes\CriterionPolicyError',
        "PolicyViolationError"                             => '\Google\Api\Ads\AdWords\v201306\classes\PolicyViolationError',
        "DateError"                                        => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
        "DateRange"                                        => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
        "DistinctError"                                    => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
        "DoubleValue"                                      => '\Google\Api\Ads\AdWords\v201306\classes\DoubleValue',
        "NumberValue"                                      => '\Google\Api\Ads\AdWords\v201306\classes\NumberValue',
        "EnhancedCpcBiddingScheme"                         => '\Google\Api\Ads\AdWords\v201306\classes\EnhancedCpcBiddingScheme',
        "EntityAccessDenied"                               => '\Google\Api\Ads\AdWords\v201306\classes\EntityAccessDenied',
        "EntityNotFound"                                   => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
        "ForwardCompatibilityError"                        => '\Google\Api\Ads\AdWords\v201306\classes\ForwardCompatibilityError',
        "Gender"                                           => '\Google\Api\Ads\AdWords\v201306\classes\Gender',
        "IdError"                                          => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
        "InternalApiError"                                 => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
        "Keyword"                                          => '\Google\Api\Ads\AdWords\v201306\classes\Keyword',
        "LongValue"                                        => '\Google\Api\Ads\AdWords\v201306\classes\LongValue',
        "ManualCpcBiddingScheme"                           => '\Google\Api\Ads\AdWords\v201306\classes\ManualCpcBiddingScheme',
        "ManualCpmBiddingScheme"                           => '\Google\Api\Ads\AdWords\v201306\classes\ManualCpmBiddingScheme',
        "MobileAppCategory"                                => '\Google\Api\Ads\AdWords\v201306\classes\MobileAppCategory',
        "MobileApplication"                                => '\Google\Api\Ads\AdWords\v201306\classes\MobileApplication',
        "Money"                                            => '\Google\Api\Ads\AdWords\v201306\classes\Money',
        "ComparableValue"                                  => '\Google\Api\Ads\AdWords\v201306\classes\ComparableValue',
        "NegativeAdGroupCriterion"                         => '\Google\Api\Ads\AdWords\v201306\classes\NegativeAdGroupCriterion',
        "AdGroupCriterion"                                 => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterion',
        "NewEntityCreationError"                           => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationError',
        "NotEmptyError"                                    => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
        "NotWhitelistedError"                              => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
        "NullError"                                        => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
        "OperationAccessDenied"                            => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
        "OrderBy"                                          => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
        "Paging"                                           => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
        "PagingError"                                      => '\Google\Api\Ads\AdWords\v201306\classes\PagingError',
        "PercentCpaBid"                                    => '\Google\Api\Ads\AdWords\v201306\classes\PercentCpaBid',
        "Bids"                                             => '\Google\Api\Ads\AdWords\v201306\classes\Bids',
        "PercentCpaBiddingScheme"                          => '\Google\Api\Ads\AdWords\v201306\classes\PercentCpaBiddingScheme',
        "Placement"                                        => '\Google\Api\Ads\AdWords\v201306\classes\Placement',
        "PolicyViolationError.Part"                        => '\Google\Api\Ads\AdWords\v201306\classes\PolicyViolationErrorPart',
        "PolicyViolationKey"                               => '\Google\Api\Ads\AdWords\v201306\classes\PolicyViolationKey',
        "Predicate"                                        => '\Google\Api\Ads\AdWords\v201306\classes\Predicate',
        "ProductConditionOperand"                          => '\Google\Api\Ads\AdWords\v201306\classes\ProductConditionOperand',
        "QualityInfo"                                      => '\Google\Api\Ads\AdWords\v201306\classes\QualityInfo',
        "QueryError"                                       => '\Google\Api\Ads\AdWords\v201306\classes\QueryError',
        "QuotaCheckError"                                  => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
        "RangeError"                                       => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
        "RateExceededError"                                => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
        "ReadOnlyError"                                    => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
        "RejectedError"                                    => '\Google\Api\Ads\AdWords\v201306\classes\RejectedError',
        "RequestError"                                     => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
        "RequiredError"                                    => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
        "SelectorError"                                    => '\Google\Api\Ads\AdWords\v201306\classes\SelectorError',
        "SizeLimitError"                                   => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
        "SoapResponseHeader"                               => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
        "StatsQueryError"                                  => '\Google\Api\Ads\AdWords\v201306\classes\StatsQueryError',
        "StringLengthError"                                => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
        "String_StringMapEntry"                            => '\Google\Api\Ads\AdWords\v201306\classes\String_StringMapEntry',
        "CriterionUserInterest"                            => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserInterest',
        "CriterionUserList"                                => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserList',
        "Vertical"                                         => '\Google\Api\Ads\AdWords\v201306\classes\Vertical',
        "WebpageCondition"                                 => '\Google\Api\Ads\AdWords\v201306\classes\WebpageCondition',
        "WebpageParameter"                                 => '\Google\Api\Ads\AdWords\v201306\classes\WebpageParameter',
        "CriterionParameter"                               => '\Google\Api\Ads\AdWords\v201306\classes\CriterionParameter',
        "CpaBid"                                           => '\Google\Api\Ads\AdWords\v201306\classes\CpaBid',
        "CpcBid"                                           => '\Google\Api\Ads\AdWords\v201306\classes\CpcBid',
        "CpmBid"                                           => '\Google\Api\Ads\AdWords\v201306\classes\CpmBid',
        "DatabaseError"                                    => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
        "ExemptionRequest"                                 => '\Google\Api\Ads\AdWords\v201306\classes\ExemptionRequest',
        "PageOnePromotedBiddingScheme"                     => '\Google\Api\Ads\AdWords\v201306\classes\PageOnePromotedBiddingScheme',
        "ProductCondition"                                 => '\Google\Api\Ads\AdWords\v201306\classes\ProductCondition',
        "Stats"                                            => '\Google\Api\Ads\AdWords\v201306\classes\Stats',
        "TargetCpaBiddingScheme"                           => '\Google\Api\Ads\AdWords\v201306\classes\TargetCpaBiddingScheme',
        "TargetSpendBiddingScheme"                         => '\Google\Api\Ads\AdWords\v201306\classes\TargetSpendBiddingScheme',
        "Webpage"                                          => '\Google\Api\Ads\AdWords\v201306\classes\Webpage',
        "ApiException"                                     => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
        "ApplicationException"                             => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
        "Bid"                                              => '\Google\Api\Ads\AdWords\v201306\classes\Bid',
        "BidMultiplier"                                    => '\Google\Api\Ads\AdWords\v201306\classes\BidMultiplier',
        "BudgetOptimizerBiddingScheme"                     => '\Google\Api\Ads\AdWords\v201306\classes\BudgetOptimizerBiddingScheme',
        "ManualCPCAdGroupCriterionExperimentBidMultiplier" => '\Google\Api\Ads\AdWords\v201306\classes\ManualCPCAdGroupCriterionExperimentBidMultiplier',
        "AdGroupCriterionExperimentBidMultiplier"          => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionExperimentBidMultiplier',
        "Product"                                          => '\Google\Api\Ads\AdWords\v201306\classes\Product',
        "Selector"                                         => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
        "BiddableAdGroupCriterionExperimentData"           => '\Google\Api\Ads\AdWords\v201306\classes\BiddableAdGroupCriterionExperimentData',
        "BiddingStrategyConfiguration"                     => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategyConfiguration',
        "BiddableAdGroupCriterion"                         => '\Google\Api\Ads\AdWords\v201306\classes\BiddableAdGroupCriterion',
        "AdGroupCriterionOperation"                        => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionOperation',
        "Operation"                                        => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
        "AdGroupCriterionPage"                             => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionPage',
        "Page"                                             => '\Google\Api\Ads\AdWords\v201306\classes\Page',
        "AdGroupCriterionReturnValue"                      => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionReturnValue',
        "ListReturnValue"                                  => '\Google\Api\Ads\AdWords\v201306\classes\ListReturnValue',
        "AdGroupCriterionError.Reason"                     => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionErrorReason',
        "AdGroupCriterionLimitExceeded.CriteriaLimitType"  => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionLimitExceededCriteriaLimitType',
        "AdxError.Reason"                                  => '\Google\Api\Ads\AdWords\v201306\classes\AdxErrorReason',
        "AgeRange.AgeRangeType"                            => '\Google\Api\Ads\AdWords\v201306\classes\AgeRangeAgeRangeType',
        "ApprovalStatus"                                   => '\Google\Api\Ads\AdWords\v201306\classes\ApprovalStatus',
        "AuthenticationError.Reason"                       => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
        "AuthorizationError.Reason"                        => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
        "BetaError.Reason"                                 => '\Google\Api\Ads\AdWords\v201306\classes\BetaErrorReason',
        "BidSource"                                        => '\Google\Api\Ads\AdWords\v201306\classes\BidSource',
        "BiddingError.Reason"                              => '\Google\Api\Ads\AdWords\v201306\classes\BiddingErrorReason',
        "BiddingErrors.Reason"                             => '\Google\Api\Ads\AdWords\v201306\classes\BiddingErrorsReason',
        "BiddingStrategySource"                            => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategySource',
        "BiddingStrategyType"                              => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategyType',
        "ClientTermsError.Reason"                          => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
        "ConversionOptimizerBiddingScheme.BidType"         => '\Google\Api\Ads\AdWords\v201306\classes\ConversionOptimizerBiddingSchemeBidType',
        "ConversionOptimizerBiddingScheme.PricingMode"     => '\Google\Api\Ads\AdWords\v201306\classes\ConversionOptimizerBiddingSchemePricingMode',
        "Criterion.Type"                                   => '\Google\Api\Ads\AdWords\v201306\classes\CriterionType',
        "CriterionError.Reason"                            => '\Google\Api\Ads\AdWords\v201306\classes\CriterionErrorReason',
        "CriterionUse"                                     => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUse',
        "DatabaseError.Reason"                             => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
        "DateError.Reason"                                 => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
        "DistinctError.Reason"                             => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
        "EntityAccessDenied.Reason"                        => '\Google\Api\Ads\AdWords\v201306\classes\EntityAccessDeniedReason',
        "EntityCountLimitExceeded.Reason"                  => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceededReason',
        "EntityNotFound.Reason"                            => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
        "ExperimentDataStatus"                             => '\Google\Api\Ads\AdWords\v201306\classes\ExperimentDataStatus',
        "ExperimentDeltaStatus"                            => '\Google\Api\Ads\AdWords\v201306\classes\ExperimentDeltaStatus',
        "ForwardCompatibilityError.Reason"                 => '\Google\Api\Ads\AdWords\v201306\classes\ForwardCompatibilityErrorReason',
        "Gender.GenderType"                                => '\Google\Api\Ads\AdWords\v201306\classes\GenderGenderType',
        "IdError.Reason"                                   => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
        "InternalApiError.Reason"                          => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
        "KeywordMatchType"                                 => '\Google\Api\Ads\AdWords\v201306\classes\KeywordMatchType',
        "MultiplierSource"                                 => '\Google\Api\Ads\AdWords\v201306\classes\MultiplierSource',
        "NewEntityCreationError.Reason"                    => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationErrorReason',
        "NotEmptyError.Reason"                             => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
        "NotWhitelistedError.Reason"                       => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
        "NullError.Reason"                                 => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
        "OperationAccessDenied.Reason"                     => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
        "Operator"                                         => '\Google\Api\Ads\AdWords\v201306\classes\Operator',
        "PageOnePromotedBiddingScheme.StrategyGoal"        => '\Google\Api\Ads\AdWords\v201306\classes\PageOnePromotedBiddingSchemeStrategyGoal',
        "PagingError.Reason"                               => '\Google\Api\Ads\AdWords\v201306\classes\PagingErrorReason',
        "Predicate.Operator"                               => '\Google\Api\Ads\AdWords\v201306\classes\PredicateOperator',
        "QueryError.Reason"                                => '\Google\Api\Ads\AdWords\v201306\classes\QueryErrorReason',
        "QuotaCheckError.Reason"                           => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
        "RangeError.Reason"                                => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
        "RateExceededError.Reason"                         => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
        "ReadOnlyError.Reason"                             => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
        "RejectedError.Reason"                             => '\Google\Api\Ads\AdWords\v201306\classes\RejectedErrorReason',
        "RequestError.Reason"                              => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
        "RequiredError.Reason"                             => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
        "SelectorError.Reason"                             => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
        "SizeLimitError.Reason"                            => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
        "SortOrder"                                        => '\Google\Api\Ads\AdWords\v201306\classes\SortOrder',
        "Stats.Network"                                    => '\Google\Api\Ads\AdWords\v201306\classes\StatsNetwork',
        "StatsQueryError.Reason"                           => '\Google\Api\Ads\AdWords\v201306\classes\StatsQueryErrorReason',
        "StringLengthError.Reason"                         => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
        "SystemServingStatus"                              => '\Google\Api\Ads\AdWords\v201306\classes\SystemServingStatus',
        "CriterionUserList.MembershipStatus"               => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserListMembershipStatus',
        "UserStatus"                                       => '\Google\Api\Ads\AdWords\v201306\classes\UserStatus',
        "WebpageConditionOperand"                          => '\Google\Api\Ads\AdWords\v201306\classes\WebpageConditionOperand',
        "query"                                            => '\Google\Api\Ads\AdWords\v201306\classes\query',
        "queryResponse"                                    => '\Google\Api\Ads\AdWords\v201306\classes\queryResponse',
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/AdGroupCriterionService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = AdGroupCriterionService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'AdGroupCriterionService',
            'https://adwords.google.com/api/adwords/cm/v201306'
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
     *                   during checks on keywords to be added.
     *
     * @return added and updated adgroup criteria (without optional parts)
     * @throws ApiException when there is at least one error with the request
     */
    public function mutate($operations)
    {
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
     *
     * @returns A list of AdGroupCriterion
     * @throws ApiException when the query is invalid or there are errors processing the request.
     */
    public function query($query)
    {
        $arg = new query($query);
        $result = $this->__soapCall("query", array($arg));
        return $result->rval;
    }

}