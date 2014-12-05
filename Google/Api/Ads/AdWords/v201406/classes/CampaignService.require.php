<?php
require_once 'ApiError.php';
require_once 'ApplicationException.php';
require_once 'AuthenticationError.php';
require_once 'AuthorizationError.php';
require_once 'BiddingError.php';
require_once 'BiddingErrors.php';
require_once 'BiddingScheme.php';
require_once 'BiddingStrategyConfiguration.php';
require_once 'BiddingTransitionError.php';
require_once 'Bids.php';
require_once 'Budget.php';
require_once 'BudgetError.php';
require_once 'BudgetOptimizerBiddingScheme.php';
require_once 'Campaign.php';
require_once 'CampaignError.php';
require_once 'CampaignLabel.php';
require_once 'ClientTermsError.php';
require_once 'ComparableValue.php';
require_once 'ConversionOptimizerBiddingScheme.php';
require_once 'ConversionOptimizerEligibility.php';
require_once 'CpaBid.php';
require_once 'CpcBid.php';
require_once 'CpmBid.php';
require_once 'CustomParameter.php';
require_once 'CustomParameters.php';
require_once 'DatabaseError.php';
require_once 'DateError.php';
require_once 'DateRange.php';
require_once 'DateRangeError.php';
require_once 'DistinctError.php';
require_once 'EnhancedCpcBiddingScheme.php';
require_once 'EntityAccessDenied.php';
require_once 'EntityCountLimitExceeded.php';
require_once 'EntityNotFound.php';
require_once 'ForwardCompatibilityError.php';
require_once 'FrequencyCap.php';
require_once 'IdError.php';
require_once 'InternalApiError.php';
require_once 'Label.php';
require_once 'ListReturnValue.php';
require_once 'ManualCpcBiddingScheme.php';
require_once 'ManualCpmBiddingScheme.php';
require_once 'Money.php';
require_once 'NetworkSetting.php';
require_once 'NewEntityCreationError.php';
require_once 'NotEmptyError.php';
require_once 'NullError.php';
require_once 'NumberValue.php';
require_once 'Operation.php';
require_once 'OperationAccessDenied.php';
require_once 'OperatorError.php';
require_once 'OrderBy.php';
require_once 'Page.php';
require_once 'PageOnePromotedBiddingScheme.php';
require_once 'Paging.php';
require_once 'PercentCpaBid.php';
require_once 'PercentCpaBiddingScheme.php';
require_once 'Predicate.php';
require_once 'QueryError.php';
require_once 'QuotaCheckError.php';
require_once 'QuotaError.php';
require_once 'RangeError.php';
require_once 'RateExceededError.php';
require_once 'ReadOnlyError.php';
require_once 'RejectedError.php';
require_once 'RequestError.php';
require_once 'RequiredError.php';
require_once 'Selector.php';
require_once 'SelectorError.php';
require_once 'Setting.php';
require_once 'SettingError.php';
require_once 'ShoppingSetting.php';
require_once 'SizeLimitError.php';
require_once 'SoapRequestHeader.php';
require_once 'SoapResponseHeader.php';
require_once 'StatsQueryError.php';
require_once 'StringLengthError.php';
require_once 'String_StringMapEntry.php';
require_once 'TargetCpaBiddingScheme.php';
require_once 'TargetError.php';
require_once 'TargetRoasBiddingScheme.php';
require_once 'TargetSpendBiddingScheme.php';
require_once 'TrackingSetting.php';
require_once 'UrlError.php';
require_once 'AdServingOptimizationStatus.php';
require_once 'AdvertisingChannelType.php';
require_once 'AdxErrorReason.php';
require_once 'AuthenticationErrorReason.php';
require_once 'AuthorizationErrorReason.php';
require_once 'BidSource.php';
require_once 'BiddingErrorReason.php';
require_once 'BiddingErrorsReason.php';
require_once 'BiddingStrategySource.php';
require_once 'BiddingStrategyType.php';
require_once 'BiddingTransitionErrorReason.php';
require_once 'BudgetBudgetDeliveryMethod.php';
require_once 'BudgetBudgetPeriod.php';
require_once 'BudgetBudgetStatus.php';
require_once 'BudgetErrorReason.php';
require_once 'CampaignErrorReason.php';
require_once 'CampaignStatus.php';
require_once 'ClientTermsErrorReason.php';
require_once 'ConversionOptimizerBiddingSchemeBidType.php';
require_once 'ConversionOptimizerBiddingSchemePricingMode.php';
require_once 'ConversionOptimizerEligibilityRejectionReason.php';
require_once 'DatabaseErrorReason.php';
require_once 'DateErrorReason.php';
require_once 'DateRangeErrorReason.php';
require_once 'DistinctErrorReason.php';
require_once 'EntityAccessDeniedReason.php';
require_once 'EntityCountLimitExceededReason.php';
require_once 'EntityNotFoundReason.php';
require_once 'ForwardCompatibilityErrorReason.php';
require_once 'GeoTargetTypeSettingNegativeGeoTargetType.php';
require_once 'GeoTargetTypeSettingPositiveGeoTargetType.php';
require_once 'IdErrorReason.php';
require_once 'InternalApiErrorReason.php';
require_once 'LabelStatus.php';
require_once 'Level.php';
require_once 'NewEntityCreationErrorReason.php';
require_once 'NotEmptyErrorReason.php';
require_once 'NullErrorReason.php';
require_once 'OperationAccessDeniedReason.php';
require_once 'Operator.php';
require_once 'OperatorErrorReason.php';
require_once 'PageOnePromotedBiddingSchemeStrategyGoal.php';
require_once 'PredicateOperator.php';
require_once 'QueryErrorReason.php';
require_once 'QuotaCheckErrorReason.php';
require_once 'QuotaErrorReason.php';
require_once 'RangeErrorReason.php';
require_once 'RateExceededErrorReason.php';
require_once 'ReadOnlyErrorReason.php';
require_once 'RejectedErrorReason.php';
require_once 'RequestErrorReason.php';
require_once 'RequiredErrorReason.php';
require_once 'SelectorErrorReason.php';
require_once 'ServingStatus.php';
require_once 'SettingErrorReason.php';
require_once 'SizeLimitErrorReason.php';
require_once 'SortOrder.php';
require_once 'StatsQueryErrorReason.php';
require_once 'StringLengthErrorReason.php';
require_once 'TargetErrorReason.php';
require_once 'TimeUnit.php';
require_once 'UrlErrorReason.php';
require_once 'CampaignServiceGet.php';
require_once 'CampaignServiceGetResponse.php';
require_once 'CampaignServiceMutate.php';
require_once 'CampaignServiceMutateResponse.php';
require_once 'MutateLabel.php';
require_once 'MutateLabelResponse.php';
require_once 'Query.php';
require_once 'QueryResponse.php';
require_once 'AdxError.php';
require_once 'ApiException.php';
require_once 'CampaignLabelOperation.php';
require_once 'CampaignLabelReturnValue.php';
require_once 'TextLabel.php';
require_once 'CampaignOperation.php';
require_once 'CampaignPage.php';
require_once 'CampaignReturnValue.php';
require_once 'DoubleValue.php';
require_once 'DynamicSearchAdsSetting.php';
require_once 'GeoTargetTypeSetting.php';
require_once 'KeywordMatchSetting.php';
require_once 'LongValue.php';
require_once 'RealTimeBiddingSetting.php';
