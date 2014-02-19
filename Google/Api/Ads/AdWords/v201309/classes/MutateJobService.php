<?php

require_once('MutateJobService.require.php');


/**
 * MutateJobService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 * @author     WSDLInterpreter
 */
class MutateJobService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                                      => "MutateJobServiceGetResponse",
        "get"                                              => "MutateJobServiceGet",
        "mutate"                                           => "MutateJobServiceMutate",
        "mutateResponse"                                   => "MutateJobServiceMutateResponse",
        "mutateCallToAction"                               => "MutateJobServiceMutateCallToAction",
        "search"                                           => "MutateJobServiceSearch",
        "Function"                                         => "FeedFunction",
        "DateTime"                                         => "AdWordsDateTime",
        "SoapHeader"                                       => "SoapRequestHeader",
        "Ad"                                               => "Ad",
        "AdError"                                          => "AdError",
        "ApiError"                                         => "ApiError",
        "AdExtension"                                      => "AdExtension",
        "AdExtensionError"                                 => "AdExtensionError",
        "AdExtensionOverride"                              => "AdExtensionOverride",
        "AdExtensionOverrideError"                         => "AdExtensionOverrideError",
        "AdExtensionOverrideOperation"                     => "AdExtensionOverrideOperation",
        "Operation"                                        => "Operation",
        "AdGroup"                                          => "AdGroup",
        "AdGroupAd"                                        => "AdGroupAd",
        "AdGroupAdCountLimitExceeded"                      => "AdGroupAdCountLimitExceeded",
        "EntityCountLimitExceeded"                         => "EntityCountLimitExceeded",
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
        "Criterion"                                        => "Criterion",
        "AdScheduleTarget"                                 => "AdScheduleTarget",
        "Target"                                           => "Target",
        "AdScheduleTargetList"                             => "AdScheduleTargetList",
        "TargetList"                                       => "TargetList",
        "AdUnionId"                                        => "AdUnionId",
        "Address"                                          => "Address",
        "AdxError"                                         => "AdxError",
        "AgeRange"                                         => "AgeRange",
        "ApiErrorReason"                                   => "ApiErrorReason",
        "ApiException"                                     => "ApiException",
        "ApplicationException"                             => "ApplicationException",
        "Audio"                                            => "Audio",
        "Media"                                            => "Media",
        "AuthenticationError"                              => "AuthenticationError",
        "AuthorizationError"                               => "AuthorizationError",
        "BatchFailureResult"                               => "BatchFailureResult",
        "OperationResult"                                  => "OperationResult",
        "BetaError"                                        => "BetaError",
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
        "BulkMutateJob"                                    => "BulkMutateJob",
        "Job"                                              => "Job",
        "BulkMutateJobError"                               => "BulkMutateJobError",
        "BulkMutateJobEvent"                               => "BulkMutateJobEvent",
        "JobEvent"                                         => "JobEvent",
        "BulkMutateJobPolicy"                              => "BulkMutateJobPolicy",
        "BulkMutateJobSelector"                            => "BulkMutateJobSelector",
        "JobSelector"                                      => "JobSelector",
        "BulkMutateJobStats"                               => "BulkMutateJobStats",
        "JobStats"                                         => "JobStats",
        "BulkMutateRequest"                                => "BulkMutateRequest",
        "BulkMutateResult"                                 => "BulkMutateResult",
        "Campaign"                                         => "Campaign",
        "CampaignAdExtension"                              => "CampaignAdExtension",
        "CampaignAdExtensionError"                         => "CampaignAdExtensionError",
        "CampaignAdExtensionOperation"                     => "CampaignAdExtensionOperation",
        "CampaignCriterion"                                => "CampaignCriterion",
        "CampaignCriterionError"                           => "CampaignCriterionError",
        "CampaignCriterionLimitExceeded"                   => "CampaignCriterionLimitExceeded",
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
        "CriterionError"                                   => "CriterionError",
        "CriterionParameter"                               => "CriterionParameter",
        "CriterionPolicyError"                             => "CriterionPolicyError",
        "PolicyViolationError"                             => "PolicyViolationError",
        "DatabaseError"                                    => "DatabaseError",
        "DateError"                                        => "DateError",
        "DeprecatedAd"                                     => "DeprecatedAd",
        "Dimensions"                                       => "Dimensions",
        "DistinctError"                                    => "DistinctError",
        "DomainInfoExtension"                              => "DomainInfoExtension",
        "DoubleValue"                                      => "DoubleValue",
        "NumberValue"                                      => "NumberValue",
        "EnhancedCpcBiddingScheme"                         => "EnhancedCpcBiddingScheme",
        "EntityAccessDenied"                               => "EntityAccessDenied",
        "EntityId"                                         => "EntityId",
        "EntityNotFound"                                   => "EntityNotFound",
        "ExemptionRequest"                                 => "ExemptionRequest",
        "ExplorerAutoOptimizerSetting"                     => "ExplorerAutoOptimizerSetting",
        "Setting"                                          => "Setting",
        "FailureResult"                                    => "FailureResult",
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
        "Gender"                                           => "Gender",
        "GeoPoint"                                         => "GeoPoint",
        "GeoTargetTypeSetting"                             => "GeoTargetTypeSetting",
        "IdError"                                          => "IdError",
        "Image"                                            => "Image",
        "ImageAd"                                          => "ImageAd",
        "ImageError"                                       => "ImageError",
        "InAppLinkExtension"                               => "InAppLinkExtension",
        "InternalApiError"                                 => "InternalApiError",
        "JobError"                                         => "JobError",
        "JobResult"                                        => "JobResult",
        "Keyword"                                          => "Keyword",
        "KeywordMatchSetting"                              => "KeywordMatchSetting",
        "Language"                                         => "Language",
        "Location"                                         => "Location",
        "LocationExtension"                                => "LocationExtension",
        "LocationOverrideInfo"                             => "LocationOverrideInfo",
        "LocationSyncExtension"                            => "LocationSyncExtension",
        "LongValue"                                        => "LongValue",
        "LostResult"                                       => "LostResult",
        "ManualCPCAdGroupCriterionExperimentBidMultiplier" => "ManualCPCAdGroupCriterionExperimentBidMultiplier",
        "ManualCPCAdGroupExperimentBidMultipliers"         => "ManualCPCAdGroupExperimentBidMultipliers",
        "ManualCPMAdGroupExperimentBidMultipliers"         => "ManualCPMAdGroupExperimentBidMultipliers",
        "ManualCpcBiddingScheme"                           => "ManualCpcBiddingScheme",
        "ManualCpmBiddingScheme"                           => "ManualCpmBiddingScheme",
        "MediaError"                                       => "MediaError",
        "Media_Size_DimensionsMapEntry"                    => "Media_Size_DimensionsMapEntry",
        "Media_Size_StringMapEntry"                        => "Media_Size_StringMapEntry",
        "MobileAd"                                         => "MobileAd",
        "MobileAppCategory"                                => "MobileAppCategory",
        "MobileApplication"                                => "MobileApplication",
        "MobileDevice"                                     => "MobileDevice",
        "MobileExtension"                                  => "MobileExtension",
        "MobileImageAd"                                    => "MobileImageAd",
        "Money"                                            => "Money",
        "NegativeAdGroupCriterion"                         => "NegativeAdGroupCriterion",
        "NegativeCampaignCriterion"                        => "NegativeCampaignCriterion",
        "NetworkSetting"                                   => "NetworkSetting",
        "NewEntityCreationError"                           => "NewEntityCreationError",
        "NotEmptyError"                                    => "NotEmptyError",
        "NotWhitelistedError"                              => "NotWhitelistedError",
        "NullError"                                        => "NullError",
        "OAuthInfo"                                        => "OAuthInfo",
        "Operand"                                          => "Operand",
        "OperatingSystemVersion"                           => "OperatingSystemVersion",
        "OperationAccessDenied"                            => "OperationAccessDenied",
        "OperationStream"                                  => "OperationStream",
        "OperationStreamResult"                            => "OperationStreamResult",
        "OperatorError"                                    => "OperatorError",
        "OverrideInfo"                                     => "OverrideInfo",
        "PageOnePromotedBiddingScheme"                     => "PageOnePromotedBiddingScheme",
        "PagingError"                                      => "PagingError",
        "PercentCpaBid"                                    => "PercentCpaBid",
        "PercentCpaBiddingScheme"                          => "PercentCpaBiddingScheme",
        "PlaceHolder"                                      => "PlaceHolder",
        "Placement"                                        => "Placement",
        "Platform"                                         => "Platform",
        "PolicyViolationError.Part"                        => "PolicyViolationErrorPart",
        "PolicyViolationKey"                               => "PolicyViolationKey",
        "Product"                                          => "Product",
        "ProductAd"                                        => "ProductAd",
        "ProductCondition"                                 => "ProductCondition",
        "ProductConditionOperand"                          => "ProductConditionOperand",
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
        "ReturnValueResult"                                => "ReturnValueResult",
        "RichMediaAd"                                      => "RichMediaAd",
        "SelectorError"                                    => "SelectorError",
        "SettingError"                                     => "SettingError",
        "SimpleMutateJob"                                  => "SimpleMutateJob",
        "SimpleMutateResult"                               => "SimpleMutateResult",
        "Sitelink"                                         => "Sitelink",
        "SitelinksExtension"                               => "SitelinksExtension",
        "SizeLimitError"                                   => "SizeLimitError",
        "SoapResponseHeader"                               => "SoapResponseHeader",
        "StatsQueryError"                                  => "StatsQueryError",
        "StringLengthError"                                => "StringLengthError",
        "String_StringMapEntry"                            => "String_StringMapEntry",
        "TargetCpaBiddingScheme"                           => "TargetCpaBiddingScheme",
        "TargetError"                                      => "TargetError",
        "TargetingSettingDetail"                           => "TargetingSettingDetail",
        "TargetSpendBiddingScheme"                         => "TargetSpendBiddingScheme",
        "TargetingSetting"                                 => "TargetingSetting",
        "TempAdUnionId"                                    => "TempAdUnionId",
        "TemplateAd"                                       => "TemplateAd",
        "TemplateElement"                                  => "TemplateElement",
        "TemplateElementField"                             => "TemplateElementField",
        "TextAd"                                           => "TextAd",
        "ThirdPartyRedirectAd"                             => "ThirdPartyRedirectAd",
        "TrackingSetting"                                  => "TrackingSetting",
        "UnprocessedResult"                                => "UnprocessedResult",
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
        "CampaignCriterionLimitExceeded.CriteriaLimitType" => "CampaignCriterionLimitExceededCriteriaLimitType",
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
        "EntityId.Type"                                    => "EntityIdType",
        "EntityNotFound.Reason"                            => "EntityNotFoundReason",
        "ExperimentDataStatus"                             => "ExperimentDataStatus",
        "ExperimentDeltaStatus"                            => "ExperimentDeltaStatus",
        "FeedItem.Status"                                  => "FeedItemStatus",
        "FeedItemError.Reason"                             => "FeedItemErrorReason",
        "FeedItemValidationDetail.ApprovalStatus"          => "FeedItemValidationDetailApprovalStatus",
        "FeedItemValidationDetail.ValidationStatus"        => "FeedItemValidationDetailValidationStatus",
        "ForwardCompatibilityError.Reason"                 => "ForwardCompatibilityErrorReason",
        "Gender.GenderType"                                => "GenderGenderType",
        "GeoTargetTypeSetting.NegativeGeoTargetType"       => "GeoTargetTypeSettingNegativeGeoTargetType",
        "GeoTargetTypeSetting.PositiveGeoTargetType"       => "GeoTargetTypeSettingPositiveGeoTargetType",
        "IdError.Reason"                                   => "IdErrorReason",
        "ImageError.Reason"                                => "ImageErrorReason",
        "InAppLinkExtension.AppStore"                      => "InAppLinkExtensionAppStore",
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
        "NotWhitelistedError.Reason"                       => "NotWhitelistedErrorReason",
        "NullError.Reason"                                 => "NullErrorReason",
        "OperatingSystemVersion.OperatorType"              => "OperatingSystemVersionOperatorType",
        "OperationAccessDenied.Reason"                     => "OperationAccessDeniedReason",
        "Operator"                                         => "Operator",
        "OperatorError.Reason"                             => "OperatorErrorReason",
        "PageOnePromotedBiddingScheme.StrategyGoal"        => "PageOnePromotedBiddingSchemeStrategyGoal",
        "PagingError.Reason"                               => "PagingErrorReason",
        "PolicyViolationError.Reason"                      => "PolicyViolationErrorReason",
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
        "getResult"                                        => "getResult",
        "getResultResponse"                                => "getResultResponse",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201309/MutateJobService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = MutateJobService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'MutateJobService',
            'https://adwords.google.com/api/adwords/cm/v201309'
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
        $arg = new MutateJobServiceGet($selector);
        $result = $this->__soapCall("get", array($arg));
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
        $arg = new getResult($selector);
        $result = $this->__soapCall("getResult", array($arg));
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
        $arg = new MutateJobServiceMutate($operations, $policy);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }

}