<?php
require_once 'Ad.php';
require_once 'AdExtension.php';
require_once 'AdGroup.php';
require_once 'AdGroupAd.php';
require_once 'AdGroupAdExperimentData.php';
require_once 'AdGroupAdLabel.php';
require_once 'AdGroupBidModifier.php';
require_once 'AdGroupCriterion.php';
require_once 'AdGroupCriterionExperimentBidMultiplier.php';
require_once 'AdGroupCriterionLabel.php';
require_once 'AdGroupExperimentBidMultipliers.php';
require_once 'AdGroupExperimentData.php';
require_once 'AdGroupLabel.php';
require_once 'AdUnionId.php';
require_once 'Address.php';
require_once 'ApiError.php';
require_once 'ApiErrorReason.php';
require_once 'AppUrl.php';
require_once 'AppUrlList.php';
require_once 'ApplicationException.php';
require_once 'AuthenticationError.php';
require_once 'AuthorizationError.php';
require_once 'Bid.php';
require_once 'BidMultiplier.php';
require_once 'BiddableAdGroupCriterion.php';
require_once 'BiddableAdGroupCriterionExperimentData.php';
require_once 'BiddingError.php';
require_once 'BiddingErrors.php';
require_once 'BiddingScheme.php';
require_once 'BiddingStrategyConfiguration.php';
require_once 'Bids.php';
require_once 'BillingSummary.php';
require_once 'Budget.php';
require_once 'BudgetError.php';
require_once 'BudgetOptimizerBiddingScheme.php';
require_once 'BulkMutateJobError.php';
require_once 'BulkMutateJobPolicy.php';
require_once 'CallOnlyAd.php';
require_once 'Campaign.php';
require_once 'CampaignAdExtension.php';
require_once 'CampaignAdExtensionError.php';
require_once 'CampaignCriterion.php';
require_once 'CampaignCriterionError.php';
require_once 'CampaignError.php';
require_once 'CampaignLabel.php';
require_once 'ClientTermsError.php';
require_once 'CollectionSizeError.php';
require_once 'ComparableValue.php';
require_once 'ConversionOptimizerBiddingScheme.php';
require_once 'ConversionOptimizerEligibility.php';
require_once 'CpaBid.php';
require_once 'CpcBid.php';
require_once 'CpmBid.php';
require_once 'Criterion.php';
require_once 'CriterionError.php';
require_once 'CriterionParameter.php';
require_once 'CustomParameter.php';
require_once 'CustomParameters.php';
require_once 'DatabaseError.php';
require_once 'DateError.php';
require_once 'DateRangeError.php';
require_once 'DeprecatedAd.php';
require_once 'Dimensions.php';
require_once 'DisapprovalReason.php';
require_once 'DistinctError.php';
require_once 'EnhancedCpcBiddingScheme.php';
require_once 'EntityAccessDenied.php';
require_once 'EntityCountLimitExceeded.php';
require_once 'EntityNotFound.php';
require_once 'ExemptionRequest.php';
require_once 'ExperimentError.php';
require_once 'FeedAttributeReferenceError.php';
require_once 'FeedItem.php';
require_once 'FeedItemAdGroupTargeting.php';
require_once 'FeedItemAttributeError.php';
require_once 'FeedItemAttributeValue.php';
require_once 'FeedItemCampaignTargeting.php';
require_once 'FeedItemDevicePreference.php';
require_once 'FeedItemError.php';
require_once 'FeedItemSchedule.php';
require_once 'FeedItemScheduling.php';
require_once 'ForwardCompatibilityError.php';
require_once 'FrequencyCap.php';
require_once 'FeedFunction.php';
require_once 'FunctionError.php';
require_once 'FunctionParsingError.php';
require_once 'Gender.php';
require_once 'GeoPoint.php';
require_once 'IdError.php';
require_once 'ImageAd.php';
require_once 'ImageError.php';
require_once 'InternalApiError.php';
require_once 'IpBlock.php';
require_once 'Job.php';
require_once 'JobError.php';
require_once 'JobEvent.php';
require_once 'JobResult.php';
require_once 'JobSelector.php';
require_once 'JobStats.php';
require_once 'Keyword.php';
require_once 'Label.php';
require_once 'Language.php';
require_once 'Location.php';
require_once 'LocationExtension.php';
require_once 'LocationSyncExtension.php';
require_once 'ManualCPCAdGroupCriterionExperimentBidMultiplier.php';
require_once 'ManualCPCAdGroupExperimentBidMultipliers.php';
require_once 'ManualCPMAdGroupExperimentBidMultipliers.php';
require_once 'ManualCpcBiddingScheme.php';
require_once 'ManualCpmBiddingScheme.php';
require_once 'Media.php';
require_once 'MediaError.php';
require_once 'Media_Size_DimensionsMapEntry.php';
require_once 'Media_Size_StringMapEntry.php';
require_once 'MobileAd.php';
require_once 'MobileAppCategory.php';
require_once 'MobileApplication.php';
require_once 'MobileDevice.php';
require_once 'MobileImageAd.php';
require_once 'Money.php';
require_once 'MultiplierError.php';
require_once 'NegativeAdGroupCriterion.php';
require_once 'NegativeCampaignCriterion.php';
require_once 'NetworkSetting.php';
require_once 'NewEntityCreationError.php';
require_once 'NotEmptyError.php';
require_once 'NullError.php';
require_once 'NumberValue.php';
require_once 'OAuthInfo.php';
require_once 'FunctionArgumentOperand.php';
require_once 'Operand.php';
require_once 'OperatingSystemVersion.php';
require_once 'Operation.php';
require_once 'OperationAccessDenied.php';
require_once 'OperatorError.php';
require_once 'PageOnePromotedBiddingScheme.php';
require_once 'PagingError.php';
require_once 'PlaceHolder.php';
require_once 'Placement.php';
require_once 'PlacesOfInterestOperand.php';
require_once 'Platform.php';
require_once 'PolicyData.php';
require_once 'PolicyViolationError.php';
require_once 'PolicyViolationErrorPart.php';
require_once 'PolicyViolationKey.php';
require_once 'ProductAd.php';
require_once 'ProductDimension.php';
require_once 'ProductOfferId.php';
require_once 'ProductPartition.php';
require_once 'ProductScope.php';
require_once 'ProductType.php';
require_once 'ProductTypeFull.php';
require_once 'Proximity.php';
require_once 'QualityInfo.php';
require_once 'QueryError.php';
require_once 'QuotaCheckError.php';
require_once 'RangeError.php';
require_once 'RateExceededError.php';
require_once 'ReadOnlyError.php';
require_once 'RegionCodeError.php';
require_once 'RejectedError.php';
require_once 'RequestError.php';
require_once 'RequiredError.php';
require_once 'RichMediaAd.php';
require_once 'SelectorError.php';
require_once 'LocationGroups.php';
require_once 'Setting.php';
require_once 'SettingError.php';
require_once 'ShoppingSetting.php';
require_once 'SimpleMutateJob.php';
require_once 'SimpleMutateResult.php';
require_once 'SizeLimitError.php';
require_once 'SoapRequestHeader.php';
require_once 'SoapResponseHeader.php';
require_once 'StatsQueryError.php';
require_once 'StringFormatError.php';
require_once 'StringLengthError.php';
require_once 'String_StringMapEntry.php';
require_once 'Target.php';
require_once 'TargetCpaBiddingScheme.php';
require_once 'TargetError.php';
require_once 'TargetList.php';
require_once 'TargetOutrankShareBiddingScheme.php';
require_once 'TargetingSettingDetail.php';
require_once 'TargetRoasBiddingScheme.php';
require_once 'TargetSpendBiddingScheme.php';
require_once 'TargetingSetting.php';
require_once 'TempAdUnionId.php';
require_once 'TemplateAd.php';
require_once 'TemplateElement.php';
require_once 'TemplateElementField.php';
require_once 'TextAd.php';
require_once 'ThirdPartyRedirectAd.php';
require_once 'TrackingSetting.php';
require_once 'UrlError.php';
require_once 'UrlList.php';
require_once 'CriterionUserInterest.php';
require_once 'CriterionUserList.php';
require_once 'Vertical.php';
require_once 'Video.php';
require_once 'Webpage.php';
require_once 'WebpageCondition.php';
require_once 'WebpageParameter.php';
require_once 'DynamicSearchAd.php';
require_once 'YouTubeChannel.php';
require_once 'YouTubeVideo.php';
require_once 'AdCustomizerErrorReason.php';
require_once 'AdErrorReason.php';
require_once 'AdExtensionErrorReason.php';
require_once 'AdGroupAdApprovalStatus.php';
require_once 'AdGroupAdStatus.php';
require_once 'AdGroupAdErrorReason.php';
require_once 'AdGroupCriterionErrorReason.php';
require_once 'AdGroupCriterionLimitExceededCriteriaLimitType.php';
require_once 'AdGroupServiceErrorReason.php';
require_once 'AdGroupStatus.php';
require_once 'AdServingOptimizationStatus.php';
require_once 'AdvertisingChannelSubType.php';
require_once 'AdvertisingChannelType.php';
require_once 'AdxErrorReason.php';
require_once 'AgeRangeAgeRangeType.php';
require_once 'AppPaymentModelAppPaymentModelType.php';
require_once 'AppUrlOsType.php';
require_once 'ApprovalStatus.php';
require_once 'AuthenticationErrorReason.php';
require_once 'AuthorizationErrorReason.php';
require_once 'BasicJobStatus.php';
require_once 'BetaErrorReason.php';
require_once 'BidModifierSource.php';
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
require_once 'BulkMutateJobErrorReason.php';
require_once 'CampaignAdExtensionApprovalStatus.php';
require_once 'CampaignAdExtensionStatus.php';
require_once 'CampaignAdExtensionErrorReason.php';
require_once 'CampaignCriterionErrorReason.php';
require_once 'CampaignErrorReason.php';
require_once 'CampaignStatus.php';
require_once 'ClientTermsErrorReason.php';
require_once 'CollectionSizeErrorReason.php';
require_once 'ConstantOperandConstantType.php';
require_once 'ConstantOperandUnit.php';
require_once 'ContentLabelType.php';
require_once 'ConversionOptimizerBiddingSchemeBidType.php';
require_once 'ConversionOptimizerBiddingSchemePricingMode.php';
require_once 'ConversionOptimizerEligibilityRejectionReason.php';
require_once 'CriterionType.php';
require_once 'CriterionErrorReason.php';
require_once 'CriterionTypeGroup.php';
require_once 'CriterionUse.php';
require_once 'DatabaseErrorReason.php';
require_once 'DateErrorReason.php';
require_once 'DateRangeErrorReason.php';
require_once 'DayOfWeek.php';
require_once 'DeprecatedAdType.php';
require_once 'DistinctErrorReason.php';
require_once 'EntityAccessDeniedReason.php';
require_once 'EntityCountLimitExceededReason.php';
require_once 'EntityNotFoundReason.php';
require_once 'ExperimentDataStatus.php';
require_once 'ExperimentDeltaStatus.php';
require_once 'ExperimentErrorReason.php';
require_once 'FeedAttributeReferenceErrorReason.php';
require_once 'FeedItemStatus.php';
require_once 'FeedItemApprovalStatus.php';
require_once 'FeedItemErrorReason.php';
require_once 'FeedItemValidationStatus.php';
require_once 'ForwardCompatibilityErrorReason.php';
require_once 'FunctionOperator.php';
require_once 'FunctionErrorReason.php';
require_once 'FunctionParsingErrorReason.php';
require_once 'GenderGenderType.php';
require_once 'GeoTargetTypeSettingNegativeGeoTargetType.php';
require_once 'GeoTargetTypeSettingPositiveGeoTargetType.php';
require_once 'IdErrorReason.php';
require_once 'ImageErrorReason.php';
require_once 'IncomeTier.php';
require_once 'InternalApiErrorReason.php';
require_once 'JobErrorReason.php';
require_once 'KeywordMatchType.php';
require_once 'LabelStatus.php';
require_once 'Level.php';
require_once 'LocationExtensionSource.php';
require_once 'LocationTargetingStatus.php';
require_once 'MarkupLanguageType.php';
require_once 'MediaMediaType.php';
require_once 'MediaMimeType.php';
require_once 'MediaSize.php';
require_once 'MediaErrorReason.php';
require_once 'MinuteOfHour.php';
require_once 'MobileDeviceDeviceType.php';
require_once 'MultiplierErrorReason.php';
require_once 'MultiplierSource.php';
require_once 'NewEntityCreationErrorReason.php';
require_once 'NotEmptyErrorReason.php';
require_once 'NullErrorReason.php';
require_once 'OperatingSystemVersionOperatorType.php';
require_once 'OperationAccessDeniedReason.php';
require_once 'Operator.php';
require_once 'OperatorErrorReason.php';
require_once 'PageOnePromotedBiddingSchemeStrategyGoal.php';
require_once 'PagingErrorReason.php';
require_once 'PlacesOfInterestOperandCategory.php';
require_once 'PolicyViolationErrorReason.php';
require_once 'ProductCanonicalConditionCondition.php';
require_once 'ProductDimensionType.php';
require_once 'ProductPartitionType.php';
require_once 'ProximityDistanceUnits.php';
require_once 'QueryErrorReason.php';
require_once 'QuotaCheckErrorReason.php';
require_once 'RangeErrorReason.php';
require_once 'RateExceededErrorReason.php';
require_once 'ReadOnlyErrorReason.php';
require_once 'RegionCodeErrorReason.php';
require_once 'RejectedErrorReason.php';
require_once 'RequestErrorReason.php';
require_once 'RequiredErrorReason.php';
require_once 'RichMediaAdAdAttribute.php';
require_once 'RichMediaAdRichMediaAdType.php';
require_once 'SelectorErrorReason.php';
require_once 'ServingStatus.php';
require_once 'SettingErrorReason.php';
require_once 'ShoppingProductChannel.php';
require_once 'ShoppingProductChannelExclusivity.php';
require_once 'SizeLimitErrorReason.php';
require_once 'StatsQueryErrorReason.php';
require_once 'StringFormatErrorReason.php';
require_once 'StringLengthErrorReason.php';
require_once 'SystemServingStatus.php';
require_once 'TargetErrorReason.php';
require_once 'TemplateElementFieldType.php';
require_once 'ThirdPartyRedirectAdExpandingDirection.php';
require_once 'TimeUnit.php';
require_once 'UrlErrorReason.php';
require_once 'CriterionUserListMembershipStatus.php';
require_once 'UserStatus.php';
require_once 'VideoType.php';
require_once 'WebpageConditionOperand.php';
require_once 'MutateJobServiceGet.php';
require_once 'MutateJobServiceGetResponse.php';
require_once 'GetResult.php';
require_once 'GetResultResponse.php';
require_once 'MutateJobServiceMutate.php';
require_once 'MutateJobServiceMutateResponse.php';
require_once 'AdCustomizerError.php';
require_once 'AdError.php';
require_once 'AdExtensionError.php';
require_once 'AdGroupAdCountLimitExceeded.php';
require_once 'AdGroupAdError.php';
require_once 'AdGroupAdLabelOperation.php';
require_once 'AdGroupAdOperation.php';
require_once 'AdGroupBidModifierOperation.php';
require_once 'AdGroupCriterionError.php';
require_once 'AdGroupCriterionLabelOperation.php';
require_once 'AdGroupCriterionLimitExceeded.php';
require_once 'AdGroupCriterionOperation.php';
require_once 'AdGroupLabelOperation.php';
require_once 'AdGroupOperation.php';
require_once 'AdGroupServiceError.php';
require_once 'AdSchedule.php';
require_once 'AdScheduleTarget.php';
require_once 'AdScheduleTargetList.php';
require_once 'AdxError.php';
require_once 'AgeRange.php';
require_once 'ApiException.php';
require_once 'AppPaymentModel.php';
require_once 'Audio.php';
require_once 'BudgetOperation.php';
require_once 'BulkMutateJobSelector.php';
require_once 'CampaignAdExtensionOperation.php';
require_once 'CampaignCriterionOperation.php';
require_once 'CampaignLabelOperation.php';
require_once 'TextLabel.php';
require_once 'CampaignOperation.php';
require_once 'CampaignTargetOperation.php';
require_once 'Carrier.php';
require_once 'ConstantOperand.php';
require_once 'ContentLabel.php';
require_once 'CriterionPolicyError.php';
require_once 'DoubleValue.php';
require_once 'DynamicSearchAdsSetting.php';
require_once 'ExplorerAutoOptimizerSetting.php';
require_once 'FeedItemOperation.php';
require_once 'FeedItemPolicyData.php';
require_once 'GeoTargetOperand.php';
require_once 'GeoTargetTypeSetting.php';
require_once 'Image.php';
require_once 'IncomeOperand.php';
require_once 'LocationExtensionOperand.php';
require_once 'LongValue.php';
require_once 'ProductAdwordsGrouping.php';
require_once 'ProductAdwordsLabels.php';
require_once 'ProductBiddingCategory.php';
require_once 'ProductBrand.php';
require_once 'ProductCanonicalCondition.php';
require_once 'ProductChannel.php';
require_once 'ProductChannelExclusivity.php';
require_once 'ProductLegacyCondition.php';
require_once 'ProductCustomAttribute.php';
require_once 'RealTimeBiddingSetting.php';
