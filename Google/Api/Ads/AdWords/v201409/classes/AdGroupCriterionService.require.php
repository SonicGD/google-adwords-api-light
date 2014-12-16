<?php
require_once('AdGroupCriterion.php');
require_once('AdGroupCriterionExperimentBidMultiplier.php');
require_once('AdGroupCriterionLabel.php');
require_once('ApiError.php');
require_once('AppUrl.php');
require_once('AppUrlList.php');
require_once('ApplicationException.php');
require_once('AuthenticationError.php');
require_once('AuthorizationError.php');
require_once('Bid.php');
require_once('BidMultiplier.php');
require_once('BiddableAdGroupCriterion.php');
require_once('BiddableAdGroupCriterionExperimentData.php');
require_once('BiddingError.php');
require_once('BiddingErrors.php');
require_once('BiddingScheme.php');
require_once('BiddingStrategyConfiguration.php');
require_once('Bids.php');
require_once('BudgetOptimizerBiddingScheme.php');
require_once('ClientTermsError.php');
require_once('CollectionSizeError.php');
require_once('ComparableValue.php');
require_once('ConversionOptimizerBiddingScheme.php');
require_once('CpaBid.php');
require_once('CpcBid.php');
require_once('CpmBid.php');
require_once('Criterion.php');
require_once('CriterionError.php');
require_once('CriterionParameter.php');
require_once('CustomParameter.php');
require_once('CustomParameters.php');
require_once('DatabaseError.php');
require_once('DateError.php');
require_once('DateRange.php');
require_once('DistinctError.php');
require_once('EnhancedCpcBiddingScheme.php');
require_once('EntityAccessDenied.php');
require_once('EntityCountLimitExceeded.php');
require_once('EntityNotFound.php');
require_once('ExemptionRequest.php');
require_once('ExperimentError.php');
require_once('ForwardCompatibilityError.php');
require_once('Gender.php');
require_once('IdError.php');
require_once('InternalApiError.php');
require_once('Keyword.php');
require_once('Label.php');
require_once('ListReturnValue.php');
require_once('ManualCPCAdGroupCriterionExperimentBidMultiplier.php');
require_once('ManualCpcBiddingScheme.php');
require_once('ManualCpmBiddingScheme.php');
require_once('MobileAppCategory.php');
require_once('MobileApplication.php');
require_once('Money.php');
require_once('MultiplierError.php');
require_once('NegativeAdGroupCriterion.php');
require_once('NewEntityCreationError.php');
require_once('NotEmptyError.php');
require_once('NullError.php');
require_once('NumberValue.php');
require_once('Operation.php');
require_once('OperationAccessDenied.php');
require_once('OrderBy.php');
require_once('Page.php');
require_once('PageOnePromotedBiddingScheme.php');
require_once('Paging.php');
require_once('PagingError.php');
require_once('Placement.php');
require_once('PolicyViolationError.php');
require_once('PolicyViolationErrorPart.php');
require_once('PolicyViolationKey.php');
require_once('Predicate.php');
require_once('Product.php');
require_once('ProductCondition.php');
require_once('ProductConditionOperand.php');
require_once('ProductDimension.php');
require_once('ProductOfferId.php');
require_once('ProductPartition.php');
require_once('ProductType.php');
require_once('ProductTypeFull.php');
require_once('QualityInfo.php');
require_once('QueryError.php');
require_once('QuotaCheckError.php');
require_once('RangeError.php');
require_once('RateExceededError.php');
require_once('ReadOnlyError.php');
require_once('RejectedError.php');
require_once('RequestError.php');
require_once('RequiredError.php');
require_once('Selector.php');
require_once('SelectorError.php');
require_once('SizeLimitError.php');
require_once('SoapRequestHeader.php');
require_once('SoapResponseHeader.php');
require_once('StatsQueryError.php');
require_once('StringFormatError.php');
require_once('StringLengthError.php');
require_once('String_StringMapEntry.php');
require_once('TargetCpaBiddingScheme.php');
require_once('TargetRoasBiddingScheme.php');
require_once('TargetSpendBiddingScheme.php');
require_once('UrlError.php');
require_once('UrlList.php');
require_once('CriterionUserInterest.php');
require_once('CriterionUserList.php');
require_once('Vertical.php');
require_once('Webpage.php');
require_once('WebpageCondition.php');
require_once('WebpageParameter.php');
require_once('AdGroupCriterionErrorReason.php');
require_once('AdGroupCriterionLimitExceededCriteriaLimitType.php');
require_once('AdxErrorReason.php');
require_once('AgeRangeAgeRangeType.php');
require_once('AppPaymentModelAppPaymentModelType.php');
require_once('AppUrlOsType.php');
require_once('ApprovalStatus.php');
require_once('AuthenticationErrorReason.php');
require_once('AuthorizationErrorReason.php');
require_once('BidSource.php');
require_once('BiddingErrorReason.php');
require_once('BiddingErrorsReason.php');
require_once('BiddingStrategySource.php');
require_once('BiddingStrategyType.php');
require_once('ClientTermsErrorReason.php');
require_once('CollectionSizeErrorReason.php');
require_once('ConversionOptimizerBiddingSchemeBidType.php');
require_once('ConversionOptimizerBiddingSchemePricingMode.php');
require_once('CriterionType.php');
require_once('CriterionErrorReason.php');
require_once('CriterionUse.php');
require_once('DatabaseErrorReason.php');
require_once('DateErrorReason.php');
require_once('DistinctErrorReason.php');
require_once('EntityAccessDeniedReason.php');
require_once('EntityCountLimitExceededReason.php');
require_once('EntityNotFoundReason.php');
require_once('ExperimentDataStatus.php');
require_once('ExperimentDeltaStatus.php');
require_once('ExperimentErrorReason.php');
require_once('ForwardCompatibilityErrorReason.php');
require_once('GenderGenderType.php');
require_once('IdErrorReason.php');
require_once('InternalApiErrorReason.php');
require_once('KeywordMatchType.php');
require_once('LabelStatus.php');
require_once('MultiplierErrorReason.php');
require_once('MultiplierSource.php');
require_once('NewEntityCreationErrorReason.php');
require_once('NotEmptyErrorReason.php');
require_once('NullErrorReason.php');
require_once('OperationAccessDeniedReason.php');
require_once('Operator.php');
require_once('PageOnePromotedBiddingSchemeStrategyGoal.php');
require_once('PagingErrorReason.php');
require_once('PredicateOperator.php');
require_once('ProductCanonicalConditionCondition.php');
require_once('ProductDimensionType.php');
require_once('ProductPartitionType.php');
require_once('QueryErrorReason.php');
require_once('QuotaCheckErrorReason.php');
require_once('RangeErrorReason.php');
require_once('RateExceededErrorReason.php');
require_once('ReadOnlyErrorReason.php');
require_once('RejectedErrorReason.php');
require_once('RequestErrorReason.php');
require_once('RequiredErrorReason.php');
require_once('SelectorErrorReason.php');
require_once('SizeLimitErrorReason.php');
require_once('SortOrder.php');
require_once('StatsQueryErrorReason.php');
require_once('StringFormatErrorReason.php');
require_once('StringLengthErrorReason.php');
require_once('SystemServingStatus.php');
require_once('UrlErrorReason.php');
require_once('CriterionUserListMembershipStatus.php');
require_once('UserStatus.php');
require_once('WebpageConditionOperand.php');
require_once('AdGroupCriterionServiceGet.php');
require_once('AdGroupCriterionServiceGetResponse.php');
require_once('AdGroupCriterionServiceMutate.php');
require_once('AdGroupCriterionServiceMutateResponse.php');
require_once('MutateLabel.php');
require_once('MutateLabelResponse.php');
require_once('Query.php');
require_once('QueryResponse.php');
require_once('AdGroupCriterionError.php');
require_once('AdGroupCriterionLabelOperation.php');
require_once('AdGroupCriterionLabelReturnValue.php');
require_once('AdGroupCriterionLimitExceeded.php');
require_once('AdGroupCriterionOperation.php');
require_once('AdGroupCriterionPage.php');
require_once('AdGroupCriterionReturnValue.php');
require_once('AdxError.php');
require_once('AgeRange.php');
require_once('ApiException.php');
require_once('AppPaymentModel.php');
require_once('TextLabel.php');
require_once('CriterionPolicyError.php');
require_once('DoubleValue.php');
require_once('LongValue.php');
require_once('ProductAdwordsGrouping.php');
require_once('ProductAdwordsLabels.php');
require_once('ProductBiddingCategory.php');
require_once('ProductBrand.php');
require_once('ProductCanonicalCondition.php');
require_once('ProductLegacyCondition.php');
require_once('ProductCustomAttribute.php');
