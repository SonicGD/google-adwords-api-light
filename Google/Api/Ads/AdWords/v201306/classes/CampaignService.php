<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

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
        "getResponse"                                    => '\Google\Api\Ads\AdWords\v201306\classes\CampaignServiceGetResponse',
        "get"                                            => '\Google\Api\Ads\AdWords\v201306\classes\CampaignServiceGet',
        "mutate"                                         => '\Google\Api\Ads\AdWords\v201306\classes\CampaignServiceMutate',
        "mutateResponse"                                 => '\Google\Api\Ads\AdWords\v201306\classes\CampaignServiceMutateResponse',
        "DateTime"                                       => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
        "SoapHeader"                                     => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
        "AdxError"                                       => '\Google\Api\Ads\AdWords\v201306\classes\AdxError',
        "ApiError"                                       => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
        "AuthenticationError"                            => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
        "AuthorizationError"                             => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
        "BetaError"                                      => '\Google\Api\Ads\AdWords\v201306\classes\BetaError',
        "BiddingError"                                   => '\Google\Api\Ads\AdWords\v201306\classes\BiddingError',
        "BiddingErrors"                                  => '\Google\Api\Ads\AdWords\v201306\classes\BiddingErrors',
        "BiddingTransitionError"                         => '\Google\Api\Ads\AdWords\v201306\classes\BiddingTransitionError',
        "BudgetError"                                    => '\Google\Api\Ads\AdWords\v201306\classes\BudgetError',
        "CampaignError"                                  => '\Google\Api\Ads\AdWords\v201306\classes\CampaignError',
        "CampaignStats"                                  => '\Google\Api\Ads\AdWords\v201306\classes\CampaignStats',
        "Stats"                                          => '\Google\Api\Ads\AdWords\v201306\classes\Stats',
        "ClientTermsError"                               => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
        "ConversionOptimizerBiddingScheme"               => '\Google\Api\Ads\AdWords\v201306\classes\ConversionOptimizerBiddingScheme',
        "BiddingScheme"                                  => '\Google\Api\Ads\AdWords\v201306\classes\BiddingScheme',
        "ConversionOptimizerEligibility"                 => '\Google\Api\Ads\AdWords\v201306\classes\ConversionOptimizerEligibility',
        "DateError"                                      => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
        "DateRange"                                      => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
        "DistinctError"                                  => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
        "DoubleValue"                                    => '\Google\Api\Ads\AdWords\v201306\classes\DoubleValue',
        "NumberValue"                                    => '\Google\Api\Ads\AdWords\v201306\classes\NumberValue',
        "EnhancedCpcBiddingScheme"                       => '\Google\Api\Ads\AdWords\v201306\classes\EnhancedCpcBiddingScheme',
        "EntityCountLimitExceeded"                       => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceeded',
        "EntityNotFound"                                 => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
        "ForwardCompatibilityError"                      => '\Google\Api\Ads\AdWords\v201306\classes\ForwardCompatibilityError',
        "FrequencyCap"                                   => '\Google\Api\Ads\AdWords\v201306\classes\FrequencyCap',
        "GeoTargetTypeSetting"                           => '\Google\Api\Ads\AdWords\v201306\classes\GeoTargetTypeSetting',
        "Setting"                                        => '\Google\Api\Ads\AdWords\v201306\classes\Setting',
        "IdError"                                        => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
        "InternalApiError"                               => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
        "KeywordMatchSetting"                            => '\Google\Api\Ads\AdWords\v201306\classes\KeywordMatchSetting',
        "LongValue"                                      => '\Google\Api\Ads\AdWords\v201306\classes\LongValue',
        "ManualCpcBiddingScheme"                         => '\Google\Api\Ads\AdWords\v201306\classes\ManualCpcBiddingScheme',
        "ManualCpmBiddingScheme"                         => '\Google\Api\Ads\AdWords\v201306\classes\ManualCpmBiddingScheme',
        "Money"                                          => '\Google\Api\Ads\AdWords\v201306\classes\Money',
        "ComparableValue"                                => '\Google\Api\Ads\AdWords\v201306\classes\ComparableValue',
        "NetworkSetting"                                 => '\Google\Api\Ads\AdWords\v201306\classes\NetworkSetting',
        "NewEntityCreationError"                         => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationError',
        "NotEmptyError"                                  => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
        "NotWhitelistedError"                            => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
        "NullError"                                      => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
        "OperationAccessDenied"                          => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
        "OperatorError"                                  => '\Google\Api\Ads\AdWords\v201306\classes\OperatorError',
        "OrderBy"                                        => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
        "Paging"                                         => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
        "PercentCpaBid"                                  => '\Google\Api\Ads\AdWords\v201306\classes\PercentCpaBid',
        "Bids"                                           => '\Google\Api\Ads\AdWords\v201306\classes\Bids',
        "PercentCpaBiddingScheme"                        => '\Google\Api\Ads\AdWords\v201306\classes\PercentCpaBiddingScheme',
        "Predicate"                                      => '\Google\Api\Ads\AdWords\v201306\classes\Predicate',
        "QueryError"                                     => '\Google\Api\Ads\AdWords\v201306\classes\QueryError',
        "QuotaCheckError"                                => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
        "QuotaError"                                     => '\Google\Api\Ads\AdWords\v201306\classes\QuotaError',
        "RangeError"                                     => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
        "RateExceededError"                              => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
        "ReadOnlyError"                                  => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
        "RealTimeBiddingSetting"                         => '\Google\Api\Ads\AdWords\v201306\classes\RealTimeBiddingSetting',
        "RejectedError"                                  => '\Google\Api\Ads\AdWords\v201306\classes\RejectedError',
        "RequestError"                                   => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
        "RequiredError"                                  => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
        "SelectorError"                                  => '\Google\Api\Ads\AdWords\v201306\classes\SelectorError',
        "SettingError"                                   => '\Google\Api\Ads\AdWords\v201306\classes\SettingError',
        "SizeLimitError"                                 => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
        "SoapResponseHeader"                             => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
        "StatsQueryError"                                => '\Google\Api\Ads\AdWords\v201306\classes\StatsQueryError',
        "StringLengthError"                              => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
        "String_StringMapEntry"                          => '\Google\Api\Ads\AdWords\v201306\classes\String_StringMapEntry',
        "TargetError"                                    => '\Google\Api\Ads\AdWords\v201306\classes\TargetError',
        "TrackingSetting"                                => '\Google\Api\Ads\AdWords\v201306\classes\TrackingSetting',
        "CpaBid"                                         => '\Google\Api\Ads\AdWords\v201306\classes\CpaBid',
        "CpcBid"                                         => '\Google\Api\Ads\AdWords\v201306\classes\CpcBid',
        "CpmBid"                                         => '\Google\Api\Ads\AdWords\v201306\classes\CpmBid',
        "DatabaseError"                                  => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
        "PageOnePromotedBiddingScheme"                   => '\Google\Api\Ads\AdWords\v201306\classes\PageOnePromotedBiddingScheme',
        "TargetCpaBiddingScheme"                         => '\Google\Api\Ads\AdWords\v201306\classes\TargetCpaBiddingScheme',
        "TargetSpendBiddingScheme"                       => '\Google\Api\Ads\AdWords\v201306\classes\TargetSpendBiddingScheme',
        "ApiException"                                   => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
        "ApplicationException"                           => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
        "Budget"                                         => '\Google\Api\Ads\AdWords\v201306\classes\Budget',
        "BudgetOptimizerBiddingScheme"                   => '\Google\Api\Ads\AdWords\v201306\classes\BudgetOptimizerBiddingScheme',
        "Selector"                                       => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
        "BiddingStrategyConfiguration"                   => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategyConfiguration',
        "Campaign"                                       => '\Google\Api\Ads\AdWords\v201306\classes\Campaign',
        "CampaignOperation"                              => '\Google\Api\Ads\AdWords\v201306\classes\CampaignOperation',
        "Operation"                                      => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
        "CampaignPage"                                   => '\Google\Api\Ads\AdWords\v201306\classes\CampaignPage',
        "Page"                                           => '\Google\Api\Ads\AdWords\v201306\classes\Page',
        "CampaignReturnValue"                            => '\Google\Api\Ads\AdWords\v201306\classes\CampaignReturnValue',
        "ListReturnValue"                                => '\Google\Api\Ads\AdWords\v201306\classes\ListReturnValue',
        "AdServingOptimizationStatus"                    => '\Google\Api\Ads\AdWords\v201306\classes\AdServingOptimizationStatus',
        "AdxError.Reason"                                => '\Google\Api\Ads\AdWords\v201306\classes\AdxErrorReason',
        "AuthenticationError.Reason"                     => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
        "AuthorizationError.Reason"                      => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
        "BetaError.Reason"                               => '\Google\Api\Ads\AdWords\v201306\classes\BetaErrorReason',
        "BidSource"                                      => '\Google\Api\Ads\AdWords\v201306\classes\BidSource',
        "BiddingError.Reason"                            => '\Google\Api\Ads\AdWords\v201306\classes\BiddingErrorReason',
        "BiddingErrors.Reason"                           => '\Google\Api\Ads\AdWords\v201306\classes\BiddingErrorsReason',
        "BiddingStrategySource"                          => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategySource',
        "BiddingStrategyType"                            => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategyType',
        "BiddingTransitionError.Reason"                  => '\Google\Api\Ads\AdWords\v201306\classes\BiddingTransitionErrorReason',
        "Budget.BudgetDeliveryMethod"                    => '\Google\Api\Ads\AdWords\v201306\classes\BudgetBudgetDeliveryMethod',
        "Budget.BudgetPeriod"                            => '\Google\Api\Ads\AdWords\v201306\classes\BudgetBudgetPeriod',
        "Budget.BudgetStatus"                            => '\Google\Api\Ads\AdWords\v201306\classes\BudgetBudgetStatus',
        "BudgetError.Reason"                             => '\Google\Api\Ads\AdWords\v201306\classes\BudgetErrorReason',
        "CampaignError.Reason"                           => '\Google\Api\Ads\AdWords\v201306\classes\CampaignErrorReason',
        "CampaignStatus"                                 => '\Google\Api\Ads\AdWords\v201306\classes\CampaignStatus',
        "ClientTermsError.Reason"                        => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
        "ConversionOptimizerBiddingScheme.BidType"       => '\Google\Api\Ads\AdWords\v201306\classes\ConversionOptimizerBiddingSchemeBidType',
        "ConversionOptimizerBiddingScheme.PricingMode"   => '\Google\Api\Ads\AdWords\v201306\classes\ConversionOptimizerBiddingSchemePricingMode',
        "ConversionOptimizerEligibility.RejectionReason" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionOptimizerEligibilityRejectionReason',
        "DatabaseError.Reason"                           => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
        "DateError.Reason"                               => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
        "DistinctError.Reason"                           => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
        "EntityCountLimitExceeded.Reason"                => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceededReason',
        "EntityNotFound.Reason"                          => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
        "ForwardCompatibilityError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\ForwardCompatibilityErrorReason',
        "GeoTargetTypeSetting.NegativeGeoTargetType"     => '\Google\Api\Ads\AdWords\v201306\classes\GeoTargetTypeSettingNegativeGeoTargetType',
        "GeoTargetTypeSetting.PositiveGeoTargetType"     => '\Google\Api\Ads\AdWords\v201306\classes\GeoTargetTypeSettingPositiveGeoTargetType',
        "IdError.Reason"                                 => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
        "InternalApiError.Reason"                        => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
        "Level"                                          => '\Google\Api\Ads\AdWords\v201306\classes\Level',
        "NewEntityCreationError.Reason"                  => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationErrorReason',
        "NotEmptyError.Reason"                           => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
        "NotWhitelistedError.Reason"                     => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
        "NullError.Reason"                               => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
        "OperationAccessDenied.Reason"                   => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
        "Operator"                                       => '\Google\Api\Ads\AdWords\v201306\classes\Operator',
        "OperatorError.Reason"                           => '\Google\Api\Ads\AdWords\v201306\classes\OperatorErrorReason',
        "PageOnePromotedBiddingScheme.StrategyGoal"      => '\Google\Api\Ads\AdWords\v201306\classes\PageOnePromotedBiddingSchemeStrategyGoal',
        "Predicate.Operator"                             => '\Google\Api\Ads\AdWords\v201306\classes\PredicateOperator',
        "QueryError.Reason"                              => '\Google\Api\Ads\AdWords\v201306\classes\QueryErrorReason',
        "QuotaCheckError.Reason"                         => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
        "QuotaError.Reason"                              => '\Google\Api\Ads\AdWords\v201306\classes\QuotaErrorReason',
        "RangeError.Reason"                              => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
        "RateExceededError.Reason"                       => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
        "ReadOnlyError.Reason"                           => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
        "RejectedError.Reason"                           => '\Google\Api\Ads\AdWords\v201306\classes\RejectedErrorReason',
        "RequestError.Reason"                            => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
        "RequiredError.Reason"                           => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
        "SelectorError.Reason"                           => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
        "ServingStatus"                                  => '\Google\Api\Ads\AdWords\v201306\classes\ServingStatus',
        "SettingError.Reason"                            => '\Google\Api\Ads\AdWords\v201306\classes\SettingErrorReason',
        "SizeLimitError.Reason"                          => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
        "SortOrder"                                      => '\Google\Api\Ads\AdWords\v201306\classes\SortOrder',
        "Stats.Network"                                  => '\Google\Api\Ads\AdWords\v201306\classes\StatsNetwork',
        "StatsQueryError.Reason"                         => '\Google\Api\Ads\AdWords\v201306\classes\StatsQueryErrorReason',
        "StringLengthError.Reason"                       => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
        "TargetError.Reason"                             => '\Google\Api\Ads\AdWords\v201306\classes\TargetErrorReason',
        "TimeUnit"                                       => '\Google\Api\Ads\AdWords\v201306\classes\TimeUnit',
        "query"                                          => '\Google\Api\Ads\AdWords\v201306\classes\query',
        "queryResponse"                                  => '\Google\Api\Ads\AdWords\v201306\classes\queryResponse',
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