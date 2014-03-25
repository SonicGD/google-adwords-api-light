<?php

require_once('MutateJobService.require.php');


/**
 * MutateJobService
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class MutateJobService extends AdWordsSoapClient
{

    const SERVICE_NAME = "MutateJobService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201402/MutateJobService";

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201402/MutateJobService";
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "Ad"                                               => "Ad",
        "AdError"                                          => "AdError",
        "AdExtension"                                      => "AdExtension",
        "AdExtensionError"                                 => "AdExtensionError",
        "AdExtensionOverride"                              => "AdExtensionOverride",
        "AdExtensionOverrideError"                         => "AdExtensionOverrideError",
        "AdExtensionOverrideOperation"                     => "AdExtensionOverrideOperation",
        "AdGroup"                                          => "AdGroup",
        "AdGroupAd"                                        => "AdGroupAd",
        "AdGroupAdCountLimitExceeded"                      => "AdGroupAdCountLimitExceeded",
        "AdGroupAdError"                                   => "AdGroupAdError",
        "AdGroupAdExperimentData"                          => "AdGroupAdExperimentData",
        "AdGroupAdOperation"                               => "AdGroupAdOperation",
        "AdGroupBidModifier"                               => "AdGroupBidModifier",
        "AdGroupBidModifierOperation"                      => "AdGroupBidModifierOperation",
        "AdGroupCriterion"                                 => "AdGroupCriterion",
        "AdGroupCriterionError"                            => "AdGroupCriterionError",
        "AdGroupCriterionExperimentBidMultiplier"          => "AdGroupCriterionExperimentBidMultiplier",
        "AdGroupCriterionLimitExceeded"                    => "AdGroupCriterionLimitExceeded",
        "AdGroupCriterionOperation"                        => "AdGroupCriterionOperation",
        "AdGroupExperimentBidMultipliers"                  => "AdGroupExperimentBidMultipliers",
        "AdGroupExperimentData"                            => "AdGroupExperimentData",
        "AdGroupOperation"                                 => "AdGroupOperation",
        "AdGroupServiceError"                              => "AdGroupServiceError",
        "AdSchedule"                                       => "AdSchedule",
        "AdScheduleTarget"                                 => "AdScheduleTarget",
        "AdScheduleTargetList"                             => "AdScheduleTargetList",
        "AdUnionId"                                        => "AdUnionId",
        "Address"                                          => "Address",
        "AdxError"                                         => "AdxError",
        "AgeRange"                                         => "AgeRange",
        "ApiError"                                         => "ApiError",
        "ApiErrorReason"                                   => "ApiErrorReason",
        "ApiException"                                     => "ApiException",
        "ApplicationException"                             => "ApplicationException",
        "Audio"                                            => "Audio",
        "AuthenticationError"                              => "AuthenticationError",
        "AuthorizationError"                               => "AuthorizationError",
        "Bid"                                              => "Bid",
        "BidMultiplier"                                    => "BidMultiplier",
        "BiddableAdGroupCriterion"                         => "BiddableAdGroupCriterion",
        "BiddableAdGroupCriterionExperimentData"           => "BiddableAdGroupCriterionExperimentData",
        "BiddingError"                                     => "BiddingError",
        "BiddingErrors"                                    => "BiddingErrors",
        "BiddingScheme"                                    => "BiddingScheme",
        "BiddingStrategyConfiguration"                     => "BiddingStrategyConfiguration",
        "BiddingTransitionError"                           => "BiddingTransitionError",
        "Bids"                                             => "Bids",
        "BillingSummary"                                   => "BillingSummary",
        "Budget"                                           => "Budget",
        "BudgetError"                                      => "BudgetError",
        "BudgetOperation"                                  => "BudgetOperation",
        "BudgetOptimizerBiddingScheme"                     => "BudgetOptimizerBiddingScheme",
        "BulkMutateJobError"                               => "BulkMutateJobError",
        "BulkMutateJobPolicy"                              => "BulkMutateJobPolicy",
        "BulkMutateJobSelector"                            => "BulkMutateJobSelector",
        "Campaign"                                         => "Campaign",
        "CampaignAdExtension"                              => "CampaignAdExtension",
        "CampaignAdExtensionError"                         => "CampaignAdExtensionError",
        "CampaignAdExtensionOperation"                     => "CampaignAdExtensionOperation",
        "CampaignCriterion"                                => "CampaignCriterion",
        "CampaignCriterionError"                           => "CampaignCriterionError",
        "CampaignCriterionOperation"                       => "CampaignCriterionOperation",
        "CampaignError"                                    => "CampaignError",
        "CampaignOperation"                                => "CampaignOperation",
        "CampaignTargetOperation"                          => "CampaignTargetOperation",
        "Carrier"                                          => "Carrier",
        "ClientTermsError"                                 => "ClientTermsError",
        "ComparableValue"                                  => "ComparableValue",
        "ContentLabel"                                     => "ContentLabel",
        "ConversionOptimizerBiddingScheme"                 => "ConversionOptimizerBiddingScheme",
        "ConversionOptimizerEligibility"                   => "ConversionOptimizerEligibility",
        "CpaBid"                                           => "CpaBid",
        "CpcBid"                                           => "CpcBid",
        "CpmBid"                                           => "CpmBid",
        "Criterion"                                        => "Criterion",
        "CriterionError"                                   => "CriterionError",
        "CriterionParameter"                               => "CriterionParameter",
        "CriterionPolicyError"                             => "CriterionPolicyError",
        "DatabaseError"                                    => "DatabaseError",
        "DateError"                                        => "DateError",
        "DeprecatedAd"                                     => "DeprecatedAd",
        "Dimensions"                                       => "Dimensions",
        "DistinctError"                                    => "DistinctError",
        "DoubleValue"                                      => "DoubleValue",
        "DynamicSearchAdsSetting"                          => "DynamicSearchAdsSetting",
        "EnhancedCpcBiddingScheme"                         => "EnhancedCpcBiddingScheme",
        "EntityAccessDenied"                               => "EntityAccessDenied",
        "EntityCountLimitExceeded"                         => "EntityCountLimitExceeded",
        "EntityNotFound"                                   => "EntityNotFound",
        "ExemptionRequest"                                 => "ExemptionRequest",
        "ExperimentError"                                  => "ExperimentError",
        "ExplorerAutoOptimizerSetting"                     => "ExplorerAutoOptimizerSetting",
        "FeedItem"                                         => "FeedItem",
        "FeedItemAttributeError"                           => "FeedItemAttributeError",
        "FeedItemAttributeValue"                           => "FeedItemAttributeValue",
        "FeedItemDevicePreference"                         => "FeedItemDevicePreference",
        "FeedItemError"                                    => "FeedItemError",
        "FeedItemOperation"                                => "FeedItemOperation",
        "FeedItemSchedule"                                 => "FeedItemSchedule",
        "FeedItemScheduling"                               => "FeedItemScheduling",
        "FeedItemValidationDetail"                         => "FeedItemValidationDetail",
        "ForwardCompatibilityError"                        => "ForwardCompatibilityError",
        "FrequencyCap"                                     => "FrequencyCap",
        "Function"                                         => "FeedFunction",
        "FunctionError"                                    => "FunctionError",
        "Gender"                                           => "Gender",
        "GeoPoint"                                         => "GeoPoint",
        "GeoTargetOperand"                                 => "GeoTargetOperand",
        "GeoTargetTypeSetting"                             => "GeoTargetTypeSetting",
        "IdError"                                          => "IdError",
        "Image"                                            => "Image",
        "ImageAd"                                          => "ImageAd",
        "ImageError"                                       => "ImageError",
        "IncomeOperand"                                    => "IncomeOperand",
        "InternalApiError"                                 => "InternalApiError",
        "IpBlock"                                          => "IpBlock",
        "Job"                                              => "Job",
        "JobError"                                         => "JobError",
        "JobEvent"                                         => "JobEvent",
        "JobResult"                                        => "JobResult",
        "JobSelector"                                      => "JobSelector",
        "JobStats"                                         => "JobStats",
        "Keyword"                                          => "Keyword",
        "KeywordMatchSetting"                              => "KeywordMatchSetting",
        "Language"                                         => "Language",
        "Location"                                         => "Location",
        "LocationExtension"                                => "LocationExtension",
        "LocationOverrideInfo"                             => "LocationOverrideInfo",
        "LocationSyncExtension"                            => "LocationSyncExtension",
        "LongValue"                                        => "LongValue",
        "ManualCPCAdGroupCriterionExperimentBidMultiplier" => "ManualCPCAdGroupCriterionExperimentBidMultiplier",
        "ManualCPCAdGroupExperimentBidMultipliers"         => "ManualCPCAdGroupExperimentBidMultipliers",
        "ManualCPMAdGroupExperimentBidMultipliers"         => "ManualCPMAdGroupExperimentBidMultipliers",
        "ManualCpcBiddingScheme"                           => "ManualCpcBiddingScheme",
        "ManualCpmBiddingScheme"                           => "ManualCpmBiddingScheme",
        "Media"                                            => "Media",
        "MediaError"                                       => "MediaError",
        "Media_Size_DimensionsMapEntry"                    => "Media_Size_DimensionsMapEntry",
        "Media_Size_StringMapEntry"                        => "Media_Size_StringMapEntry",
        "MobileAd"                                         => "MobileAd",
        "MobileAppCategory"                                => "MobileAppCategory",
        "MobileApplication"                                => "MobileApplication",
        "MobileDevice"                                     => "MobileDevice",
        "MobileImageAd"                                    => "MobileImageAd",
        "Money"                                            => "Money",
        "NegativeAdGroupCriterion"                         => "NegativeAdGroupCriterion",
        "NegativeCampaignCriterion"                        => "NegativeCampaignCriterion",
        "NetworkSetting"                                   => "NetworkSetting",
        "NewEntityCreationError"                           => "NewEntityCreationError",
        "NotEmptyError"                                    => "NotEmptyError",
        "NullError"                                        => "NullError",
        "NumberValue"                                      => "NumberValue",
        "OAuthInfo"                                        => "OAuthInfo",
        "FunctionArgumentOperand"                          => "FunctionArgumentOperand",
        "Operand"                                          => "Operand",
        "OperatingSystemVersion"                           => "OperatingSystemVersion",
        "Operation"                                        => "Operation",
        "OperationAccessDenied"                            => "OperationAccessDenied",
        "OperatorError"                                    => "OperatorError",
        "OverrideInfo"                                     => "OverrideInfo",
        "PageOnePromotedBiddingScheme"                     => "PageOnePromotedBiddingScheme",
        "PagingError"                                      => "PagingError",
        "PercentCpaBid"                                    => "PercentCpaBid",
        "PercentCpaBiddingScheme"                          => "PercentCpaBiddingScheme",
        "PlaceHolder"                                      => "PlaceHolder",
        "Placement"                                        => "Placement",
        "PlacesOfInterestOperand"                          => "PlacesOfInterestOperand",
        "Platform"                                         => "Platform",
        "PolicyViolationError"                             => "PolicyViolationError",
        "PolicyViolationError.Part"                        => "PolicyViolationErrorPart",
        "PolicyViolationKey"                               => "PolicyViolationKey",
        "Product"                                          => "Product",
        "ProductAd"                                        => "ProductAd",
        "ProductAdwordsGrouping"                           => "ProductAdwordsGrouping",
        "ProductAdwordsLabels"                             => "ProductAdwordsLabels",
        "ProductBiddingCategory"                           => "ProductBiddingCategory",
        "ProductBrand"                                     => "ProductBrand",
        "ProductCanonicalCondition"                        => "ProductCanonicalCondition",
        "ProductLegacyCondition"                           => "ProductLegacyCondition",
        "ProductCondition"                                 => "ProductCondition",
        "ProductConditionOperand"                          => "ProductConditionOperand",
        "ProductCustomAttribute"                           => "ProductCustomAttribute",
        "ProductDimension"                                 => "ProductDimension",
        "ProductOfferId"                                   => "ProductOfferId",
        "ProductPartition"                                 => "ProductPartition",
        "ProductSalesChannel"                              => "ProductSalesChannel",
        "ProductScope"                                     => "ProductScope",
        "ProductType"                                      => "ProductType",
        "ProductTypeFull"                                  => "ProductTypeFull",
        "Proximity"                                        => "Proximity",
        "QualityInfo"                                      => "QualityInfo",
        "QueryError"                                       => "QueryError",
        "QuotaCheckError"                                  => "QuotaCheckError",
        "QuotaError"                                       => "QuotaError",
        "RangeError"                                       => "RangeError",
        "RateExceededError"                                => "RateExceededError",
        "ReadOnlyError"                                    => "ReadOnlyError",
        "RealTimeBiddingSetting"                           => "RealTimeBiddingSetting",
        "RegionCodeError"                                  => "RegionCodeError",
        "RejectedError"                                    => "RejectedError",
        "RequestError"                                     => "RequestError",
        "RequiredError"                                    => "RequiredError",
        "RichMediaAd"                                      => "RichMediaAd",
        "SelectorError"                                    => "SelectorError",
        "LocationGroups"                                   => "LocationGroups",
        "Setting"                                          => "Setting",
        "SettingError"                                     => "SettingError",
        "ShoppingSetting"                                  => "ShoppingSetting",
        "SimpleMutateJob"                                  => "SimpleMutateJob",
        "SimpleMutateResult"                               => "SimpleMutateResult",
        "SizeLimitError"                                   => "SizeLimitError",
        "SoapHeader"                                       => "SoapRequestHeader",
        "SoapResponseHeader"                               => "SoapResponseHeader",
        "StatsQueryError"                                  => "StatsQueryError",
        "StringLengthError"                                => "StringLengthError",
        "String_StringMapEntry"                            => "String_StringMapEntry",
        "Target"                                           => "Target",
        "TargetCpaBiddingScheme"                           => "TargetCpaBiddingScheme",
        "TargetError"                                      => "TargetError",
        "TargetList"                                       => "TargetList",
        "TargetingSettingDetail"                           => "TargetingSettingDetail",
        "TargetRoasBiddingScheme"                          => "TargetRoasBiddingScheme",
        "TargetSpendBiddingScheme"                         => "TargetSpendBiddingScheme",
        "TargetingSetting"                                 => "TargetingSetting",
        "TempAdUnionId"                                    => "TempAdUnionId",
        "TemplateAd"                                       => "TemplateAd",
        "TemplateElement"                                  => "TemplateElement",
        "TemplateElementField"                             => "TemplateElementField",
        "TextAd"                                           => "TextAd",
        "ThirdPartyRedirectAd"                             => "ThirdPartyRedirectAd",
        "TrackingSetting"                                  => "TrackingSetting",
        "CriterionUserInterest"                            => "CriterionUserInterest",
        "CriterionUserList"                                => "CriterionUserList",
        "Vertical"                                         => "Vertical",
        "Video"                                            => "Video",
        "Webpage"                                          => "Webpage",
        "WebpageCondition"                                 => "WebpageCondition",
        "WebpageParameter"                                 => "WebpageParameter",
        "DynamicSearchAd"                                  => "DynamicSearchAd",
        "AdError.Reason"                                   => "AdErrorReason",
        "AdExtensionError.Reason"                          => "AdExtensionErrorReason",
        "AdExtensionOverride.ApprovalStatus"               => "AdExtensionOverrideApprovalStatus",
        "AdExtensionOverride.Status"                       => "AdExtensionOverrideStatus",
        "AdExtensionOverrideError.Reason"                  => "AdExtensionOverrideErrorReason",
        "AdGroupAd.ApprovalStatus"                         => "AdGroupAdApprovalStatus",
        "AdGroupAd.Status"                                 => "AdGroupAdStatus",
        "AdGroupAdError.Reason"                            => "AdGroupAdErrorReason",
        "AdGroupCriterionError.Reason"                     => "AdGroupCriterionErrorReason",
        "AdGroupCriterionLimitExceeded.CriteriaLimitType"  => "AdGroupCriterionLimitExceededCriteriaLimitType",
        "AdGroupServiceError.Reason"                       => "AdGroupServiceErrorReason",
        "AdGroup.Status"                                   => "AdGroupStatus",
        "AdServingOptimizationStatus"                      => "AdServingOptimizationStatus",
        "AdvertisingChannelType"                           => "AdvertisingChannelType",
        "AdxError.Reason"                                  => "AdxErrorReason",
        "AgeRange.AgeRangeType"                            => "AgeRangeAgeRangeType",
        "ApprovalStatus"                                   => "ApprovalStatus",
        "AuthenticationError.Reason"                       => "AuthenticationErrorReason",
        "AuthorizationError.Reason"                        => "AuthorizationErrorReason",
        "BasicJobStatus"                                   => "BasicJobStatus",
        "BetaError.Reason"                                 => "BetaErrorReason",
        "BidModifierSource"                                => "BidModifierSource",
        "BidSource"                                        => "BidSource",
        "BiddingError.Reason"                              => "BiddingErrorReason",
        "BiddingErrors.Reason"                             => "BiddingErrorsReason",
        "BiddingStrategySource"                            => "BiddingStrategySource",
        "BiddingStrategyType"                              => "BiddingStrategyType",
        "BiddingTransitionError.Reason"                    => "BiddingTransitionErrorReason",
        "Budget.BudgetDeliveryMethod"                      => "BudgetBudgetDeliveryMethod",
        "Budget.BudgetPeriod"                              => "BudgetBudgetPeriod",
        "Budget.BudgetStatus"                              => "BudgetBudgetStatus",
        "BudgetError.Reason"                               => "BudgetErrorReason",
        "BulkMutateJobError.Reason"                        => "BulkMutateJobErrorReason",
        "CampaignAdExtension.ApprovalStatus"               => "CampaignAdExtensionApprovalStatus",
        "CampaignAdExtension.Status"                       => "CampaignAdExtensionStatus",
        "CampaignAdExtensionError.Reason"                  => "CampaignAdExtensionErrorReason",
        "CampaignCriterionError.Reason"                    => "CampaignCriterionErrorReason",
        "CampaignError.Reason"                             => "CampaignErrorReason",
        "CampaignStatus"                                   => "CampaignStatus",
        "ClientTermsError.Reason"                          => "ClientTermsErrorReason",
        "ContentLabelType"                                 => "ContentLabelType",
        "ConversionOptimizerBiddingScheme.BidType"         => "ConversionOptimizerBiddingSchemeBidType",
        "ConversionOptimizerBiddingScheme.PricingMode"     => "ConversionOptimizerBiddingSchemePricingMode",
        "ConversionOptimizerEligibility.RejectionReason"   => "ConversionOptimizerEligibilityRejectionReason",
        "Criterion.Type"                                   => "CriterionType",
        "CriterionError.Reason"                            => "CriterionErrorReason",
        "CriterionTypeGroup"                               => "CriterionTypeGroup",
        "CriterionUse"                                     => "CriterionUse",
        "DatabaseError.Reason"                             => "DatabaseErrorReason",
        "DateError.Reason"                                 => "DateErrorReason",
        "DayOfWeek"                                        => "DayOfWeek",
        "DeprecatedAd.Type"                                => "DeprecatedAdType",
        "DistinctError.Reason"                             => "DistinctErrorReason",
        "EntityAccessDenied.Reason"                        => "EntityAccessDeniedReason",
        "EntityCountLimitExceeded.Reason"                  => "EntityCountLimitExceededReason",
        "EntityNotFound.Reason"                            => "EntityNotFoundReason",
        "ExperimentDataStatus"                             => "ExperimentDataStatus",
        "ExperimentDeltaStatus"                            => "ExperimentDeltaStatus",
        "ExperimentError.Reason"                           => "ExperimentErrorReason",
        "FeedItem.Status"                                  => "FeedItemStatus",
        "FeedItemError.Reason"                             => "FeedItemErrorReason",
        "FeedItemValidationDetail.ApprovalStatus"          => "FeedItemValidationDetailApprovalStatus",
        "FeedItemValidationDetail.ValidationStatus"        => "FeedItemValidationDetailValidationStatus",
        "ForwardCompatibilityError.Reason"                 => "ForwardCompatibilityErrorReason",
        "Function.Operator"                                => "FunctionOperator",
        "FunctionError.Reason"                             => "FunctionErrorReason",
        "Gender.GenderType"                                => "GenderGenderType",
        "GeoTargetTypeSetting.NegativeGeoTargetType"       => "GeoTargetTypeSettingNegativeGeoTargetType",
        "GeoTargetTypeSetting.PositiveGeoTargetType"       => "GeoTargetTypeSettingPositiveGeoTargetType",
        "IdError.Reason"                                   => "IdErrorReason",
        "ImageError.Reason"                                => "ImageErrorReason",
        "IncomeTier"                                       => "IncomeTier",
        "InternalApiError.Reason"                          => "InternalApiErrorReason",
        "JobError.Reason"                                  => "JobErrorReason",
        "KeywordMatchType"                                 => "KeywordMatchType",
        "Level"                                            => "Level",
        "LocationExtension.Source"                         => "LocationExtensionSource",
        "LocationOverrideInfo.RadiusUnits"                 => "LocationOverrideInfoRadiusUnits",
        "LocationTargetingStatus"                          => "LocationTargetingStatus",
        "MarkupLanguageType"                               => "MarkupLanguageType",
        "Media.MediaType"                                  => "MediaMediaType",
        "Media.MimeType"                                   => "MediaMimeType",
        "Media.Size"                                       => "MediaSize",
        "MediaError.Reason"                                => "MediaErrorReason",
        "MinuteOfHour"                                     => "MinuteOfHour",
        "MobileDevice.DeviceType"                          => "MobileDeviceDeviceType",
        "MultiplierSource"                                 => "MultiplierSource",
        "NewEntityCreationError.Reason"                    => "NewEntityCreationErrorReason",
        "NotEmptyError.Reason"                             => "NotEmptyErrorReason",
        "NullError.Reason"                                 => "NullErrorReason",
        "OperatingSystemVersion.OperatorType"              => "OperatingSystemVersionOperatorType",
        "OperationAccessDenied.Reason"                     => "OperationAccessDeniedReason",
        "Operator"                                         => "Operator",
        "OperatorError.Reason"                             => "OperatorErrorReason",
        "PageOnePromotedBiddingScheme.StrategyGoal"        => "PageOnePromotedBiddingSchemeStrategyGoal",
        "PagingError.Reason"                               => "PagingErrorReason",
        "PlacesOfInterestOperand.Category"                 => "PlacesOfInterestOperandCategory",
        "PolicyViolationError.Reason"                      => "PolicyViolationErrorReason",
        "ProductCanonicalCondition.Condition"              => "ProductCanonicalConditionCondition",
        "ProductDimensionType"                             => "ProductDimensionType",
        "ProductPartitionType"                             => "ProductPartitionType",
        "Proximity.DistanceUnits"                          => "ProximityDistanceUnits",
        "QueryError.Reason"                                => "QueryErrorReason",
        "QuotaCheckError.Reason"                           => "QuotaCheckErrorReason",
        "QuotaError.Reason"                                => "QuotaErrorReason",
        "RangeError.Reason"                                => "RangeErrorReason",
        "RateExceededError.Reason"                         => "RateExceededErrorReason",
        "ReadOnlyError.Reason"                             => "ReadOnlyErrorReason",
        "RegionCodeError.Reason"                           => "RegionCodeErrorReason",
        "RejectedError.Reason"                             => "RejectedErrorReason",
        "RequestError.Reason"                              => "RequestErrorReason",
        "RequiredError.Reason"                             => "RequiredErrorReason",
        "RichMediaAd.AdAttribute"                          => "RichMediaAdAdAttribute",
        "RichMediaAd.RichMediaAdType"                      => "RichMediaAdRichMediaAdType",
        "SelectorError.Reason"                             => "SelectorErrorReason",
        "ServingStatus"                                    => "ServingStatus",
        "SettingError.Reason"                              => "SettingErrorReason",
        "SizeLimitError.Reason"                            => "SizeLimitErrorReason",
        "StatsQueryError.Reason"                           => "StatsQueryErrorReason",
        "StringLengthError.Reason"                         => "StringLengthErrorReason",
        "SystemServingStatus"                              => "SystemServingStatus",
        "TargetError.Reason"                               => "TargetErrorReason",
        "TemplateElementField.Type"                        => "TemplateElementFieldType",
        "ThirdPartyRedirectAd.ExpandingDirection"          => "ThirdPartyRedirectAdExpandingDirection",
        "TimeUnit"                                         => "TimeUnit",
        "CriterionUserList.MembershipStatus"               => "CriterionUserListMembershipStatus",
        "UserStatus"                                       => "UserStatus",
        "VideoType"                                        => "VideoType",
        "WebpageConditionOperand"                          => "WebpageConditionOperand",
        "get"                                              => "MutateJobServiceGet",
        "getResponse"                                      => "MutateJobServiceGetResponse",
        "getResult"                                        => "GetResult",
        "getResultResponse"                                => "GetResultResponse",
        "mutate"                                           => "MutateJobServiceMutate",
        "mutateResponse"                                   => "MutateJobServiceMutateResponse",
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
     * Query the status of existing jobs, both simple and bulk API.
     * <p>Use a {@link JobSelector} to query and return a list which may
     * contain both {@link BulkMutateJob} and/or {@link SimpleMutateJob}.</p>
     */
    public function get($selector)
    {
        $args = new MutateJobServiceGet($selector);
        $result = $this->__soapCall("get", array($args));
        return $result->rval;
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Query mutation results, of a {@code COMPLETED} job.
     * <p>Use a {@link JobSelector} to query and return either a
     * {@link BulkMutateResult} or a {@link SimpleMutateResult}. Submit only one job ID
     * at a time.</p>
     */
    public function getResult($selector)
    {
        $args = new GetResult($selector);
        $result = $this->__soapCall("getResult", array($args));
        return $result->rval;
    }

    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Simplified way of submitting a mutation job. The provided list of
     * operations, if valid, will create a new job with a unique id, which will
     * be returned. This id can later be used in invocations of
     * {@link #get} and {@link #getResult}. Policy can optionally be specified.
     *
     * <p>When this method returns with success, the job will be in
     * {@code PROCESSING} or {@code PENDING} state and no further action is
     * needed for the job to get executed.</p>
     */
    public function mutate($operations, $policy)
    {
        $args = new MutateJobServiceMutate($operations, $policy);
        $result = $this->__soapCall("mutate", array($args));
        return $result->rval;
    }
}