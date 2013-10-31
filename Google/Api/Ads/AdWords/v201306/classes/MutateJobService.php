<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * MutateJobService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class MutateJobService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
"getResponse" => '\Google\Api\Ads\AdWords\v201306\classes\MutateJobServiceGetResponse',
"get" => '\Google\Api\Ads\AdWords\v201306\classes\MutateJobServiceGet',
"mutate" => '\Google\Api\Ads\AdWords\v201306\classes\MutateJobServiceMutate',
"mutateResponse" => '\Google\Api\Ads\AdWords\v201306\classes\MutateJobServiceMutateResponse',
"DateTime" => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
"SoapHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
"Ad" => '\Google\Api\Ads\AdWords\v201306\classes\Ad',
"AdError" => '\Google\Api\Ads\AdWords\v201306\classes\AdError',
"ApiError" => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
"AdExtension" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtension',
"AdExtensionError" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionError',
"AdExtensionOverride" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverride',
"AdExtensionOverrideError" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverrideError',
"AdExtensionOverrideOperation" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverrideOperation',
"Operation" => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
"AdExtensionOverrideStats" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverrideStats',
"Stats" => '\Google\Api\Ads\AdWords\v201306\classes\Stats',
"AdGroup" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroup',
"AdGroupAd" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAd',
"AdGroupAdCountLimitExceeded" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAdCountLimitExceeded',
"EntityCountLimitExceeded" => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceeded',
"AdGroupAdError" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAdError',
"AdGroupAdExperimentData" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAdExperimentData',
"AdGroupAdOperation" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAdOperation',
"AdGroupBidModifier" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupBidModifier',
"AdGroupBidModifierOperation" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupBidModifierOperation',
"AdGroupCriterion" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterion',
"AdGroupCriterionError" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionError',
"AdGroupCriterionExperimentBidMultiplier" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionExperimentBidMultiplier',
"AdGroupCriterionLimitExceeded" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionLimitExceeded',
"AdGroupCriterionOperation" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionOperation',
"AdGroupExperimentBidMultipliers" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupExperimentBidMultipliers',
"AdGroupExperimentData" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupExperimentData',
"AdGroupOperation" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupOperation',
"AdGroupServiceError" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupServiceError',
"AdSchedule" => '\Google\Api\Ads\AdWords\v201306\classes\AdSchedule',
"Criterion" => '\Google\Api\Ads\AdWords\v201306\classes\Criterion',
"AdScheduleTarget" => '\Google\Api\Ads\AdWords\v201306\classes\AdScheduleTarget',
"Target" => '\Google\Api\Ads\AdWords\v201306\classes\Target',
"AdScheduleTargetList" => '\Google\Api\Ads\AdWords\v201306\classes\AdScheduleTargetList',
"TargetList" => '\Google\Api\Ads\AdWords\v201306\classes\TargetList',
"AdStats" => '\Google\Api\Ads\AdWords\v201306\classes\AdStats',
"AdUnionId" => '\Google\Api\Ads\AdWords\v201306\classes\AdUnionId',
"Address" => '\Google\Api\Ads\AdWords\v201306\classes\Address',
"AdxError" => '\Google\Api\Ads\AdWords\v201306\classes\AdxError',
"AgeRange" => '\Google\Api\Ads\AdWords\v201306\classes\AgeRange',
"ApiErrorReason" => '\Google\Api\Ads\AdWords\v201306\classes\ApiErrorReason',
"ApiException" => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
"ApplicationException" => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
"Audio" => '\Google\Api\Ads\AdWords\v201306\classes\Audio',
"Media" => '\Google\Api\Ads\AdWords\v201306\classes\Media',
"AuthenticationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
"AuthorizationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
"BatchFailureResult" => '\Google\Api\Ads\AdWords\v201306\classes\BatchFailureResult',
"OperationResult" => '\Google\Api\Ads\AdWords\v201306\classes\OperationResult',
"BetaError" => '\Google\Api\Ads\AdWords\v201306\classes\BetaError',
"Bid" => '\Google\Api\Ads\AdWords\v201306\classes\Bid',
"BidMultiplier" => '\Google\Api\Ads\AdWords\v201306\classes\BidMultiplier',
"BiddableAdGroupCriterion" => '\Google\Api\Ads\AdWords\v201306\classes\BiddableAdGroupCriterion',
"BiddableAdGroupCriterionExperimentData" => '\Google\Api\Ads\AdWords\v201306\classes\BiddableAdGroupCriterionExperimentData',
"BiddingError" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingError',
"BiddingErrors" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingErrors',
"BiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingScheme',
"BiddingStrategyConfiguration" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategyConfiguration',
"BiddingTransitionError" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingTransitionError',
"Bids" => '\Google\Api\Ads\AdWords\v201306\classes\Bids',
"BillingSummary" => '\Google\Api\Ads\AdWords\v201306\classes\BillingSummary',
"Budget" => '\Google\Api\Ads\AdWords\v201306\classes\Budget',
"BudgetError" => '\Google\Api\Ads\AdWords\v201306\classes\BudgetError',
"BudgetOperation" => '\Google\Api\Ads\AdWords\v201306\classes\BudgetOperation',
"BudgetOptimizerBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\BudgetOptimizerBiddingScheme',
"BulkMutateJob" => '\Google\Api\Ads\AdWords\v201306\classes\BulkMutateJob',
"Job" => '\Google\Api\Ads\AdWords\v201306\classes\Job',
"BulkMutateJobError" => '\Google\Api\Ads\AdWords\v201306\classes\BulkMutateJobError',
"BulkMutateJobEvent" => '\Google\Api\Ads\AdWords\v201306\classes\BulkMutateJobEvent',
"JobEvent" => '\Google\Api\Ads\AdWords\v201306\classes\JobEvent',
"BulkMutateJobPolicy" => '\Google\Api\Ads\AdWords\v201306\classes\BulkMutateJobPolicy',
"BulkMutateJobSelector" => '\Google\Api\Ads\AdWords\v201306\classes\BulkMutateJobSelector',
"JobSelector" => '\Google\Api\Ads\AdWords\v201306\classes\JobSelector',
"BulkMutateJobStats" => '\Google\Api\Ads\AdWords\v201306\classes\BulkMutateJobStats',
"JobStats" => '\Google\Api\Ads\AdWords\v201306\classes\JobStats',
"BulkMutateRequest" => '\Google\Api\Ads\AdWords\v201306\classes\BulkMutateRequest',
"BulkMutateResult" => '\Google\Api\Ads\AdWords\v201306\classes\BulkMutateResult',
"Campaign" => '\Google\Api\Ads\AdWords\v201306\classes\Campaign',
"CampaignAdExtension" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignAdExtension',
"CampaignAdExtensionError" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignAdExtensionError',
"CampaignAdExtensionOperation" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignAdExtensionOperation',
"CampaignAdExtensionStats" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignAdExtensionStats',
"CampaignCriterion" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignCriterion',
"CampaignCriterionError" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignCriterionError',
"CampaignCriterionLimitExceeded" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignCriterionLimitExceeded',
"CampaignCriterionOperation" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignCriterionOperation',
"CampaignError" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignError',
"CampaignOperation" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignOperation',
"CampaignStats" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignStats',
"CampaignTargetOperation" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignTargetOperation',
"Carrier" => '\Google\Api\Ads\AdWords\v201306\classes\Carrier',
"ClientTermsError" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
"ComparableValue" => '\Google\Api\Ads\AdWords\v201306\classes\ComparableValue',
"ContentLabel" => '\Google\Api\Ads\AdWords\v201306\classes\ContentLabel',
"ConversionOptimizerBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionOptimizerBiddingScheme',
"ConversionOptimizerEligibility" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionOptimizerEligibility',
"CpaBid" => '\Google\Api\Ads\AdWords\v201306\classes\CpaBid',
"CpcBid" => '\Google\Api\Ads\AdWords\v201306\classes\CpcBid',
"CpmBid" => '\Google\Api\Ads\AdWords\v201306\classes\CpmBid',
"CriterionError" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionError',
"CriterionParameter" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionParameter',
"CriterionPolicyError" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionPolicyError',
"PolicyViolationError" => '\Google\Api\Ads\AdWords\v201306\classes\PolicyViolationError',
"DatabaseError" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
"DateError" => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
"DeprecatedAd" => '\Google\Api\Ads\AdWords\v201306\classes\DeprecatedAd',
"Dimensions" => '\Google\Api\Ads\AdWords\v201306\classes\Dimensions',
"DistinctError" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
"DomainInfoExtension" => '\Google\Api\Ads\AdWords\v201306\classes\DomainInfoExtension',
"DoubleValue" => '\Google\Api\Ads\AdWords\v201306\classes\DoubleValue',
"NumberValue" => '\Google\Api\Ads\AdWords\v201306\classes\NumberValue',
"EnhancedCpcBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\EnhancedCpcBiddingScheme',
"EntityAccessDenied" => '\Google\Api\Ads\AdWords\v201306\classes\EntityAccessDenied',
"EntityId" => '\Google\Api\Ads\AdWords\v201306\classes\EntityId',
"EntityNotFound" => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
"ExemptionRequest" => '\Google\Api\Ads\AdWords\v201306\classes\ExemptionRequest',
"FailureResult" => '\Google\Api\Ads\AdWords\v201306\classes\FailureResult',
"FeedItem" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItem',
"FeedItemAttributeError" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemAttributeError',
"FeedItemAttributeValue" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemAttributeValue',
"FeedItemDevicePreference" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemDevicePreference',
"FeedItemError" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemError',
"FeedItemOperation" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemOperation',
"FeedItemSchedule" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemSchedule',
"FeedItemScheduling" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemScheduling',
"FeedItemValidationDetail" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemValidationDetail',
"ForwardCompatibilityError" => '\Google\Api\Ads\AdWords\v201306\classes\ForwardCompatibilityError',
"FrequencyCap" => '\Google\Api\Ads\AdWords\v201306\classes\FrequencyCap',
"Gender" => '\Google\Api\Ads\AdWords\v201306\classes\Gender',
"GeoPoint" => '\Google\Api\Ads\AdWords\v201306\classes\GeoPoint',
"GeoTargetTypeSetting" => '\Google\Api\Ads\AdWords\v201306\classes\GeoTargetTypeSetting',
"Setting" => '\Google\Api\Ads\AdWords\v201306\classes\Setting',
"IdError" => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
"Image" => '\Google\Api\Ads\AdWords\v201306\classes\Image',
"ImageAd" => '\Google\Api\Ads\AdWords\v201306\classes\ImageAd',
"ImageError" => '\Google\Api\Ads\AdWords\v201306\classes\ImageError',
"InAppLinkExtension" => '\Google\Api\Ads\AdWords\v201306\classes\InAppLinkExtension',
"InternalApiError" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
"JobError" => '\Google\Api\Ads\AdWords\v201306\classes\JobError',
"JobResult" => '\Google\Api\Ads\AdWords\v201306\classes\JobResult',
"Keyword" => '\Google\Api\Ads\AdWords\v201306\classes\Keyword',
"KeywordMatchSetting" => '\Google\Api\Ads\AdWords\v201306\classes\KeywordMatchSetting',
"Language" => '\Google\Api\Ads\AdWords\v201306\classes\Language',
"Location" => '\Google\Api\Ads\AdWords\v201306\classes\Location',
"LocationExtension" => '\Google\Api\Ads\AdWords\v201306\classes\LocationExtension',
"LocationOverrideInfo" => '\Google\Api\Ads\AdWords\v201306\classes\LocationOverrideInfo',
"LocationSyncExtension" => '\Google\Api\Ads\AdWords\v201306\classes\LocationSyncExtension',
"LongValue" => '\Google\Api\Ads\AdWords\v201306\classes\LongValue',
"LostResult" => '\Google\Api\Ads\AdWords\v201306\classes\LostResult',
"ManualCPCAdGroupCriterionExperimentBidMultiplier" => '\Google\Api\Ads\AdWords\v201306\classes\ManualCPCAdGroupCriterionExperimentBidMultiplier',
"ManualCPCAdGroupExperimentBidMultipliers" => '\Google\Api\Ads\AdWords\v201306\classes\ManualCPCAdGroupExperimentBidMultipliers',
"ManualCPMAdGroupExperimentBidMultipliers" => '\Google\Api\Ads\AdWords\v201306\classes\ManualCPMAdGroupExperimentBidMultipliers',
"ManualCpcBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\ManualCpcBiddingScheme',
"ManualCpmBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\ManualCpmBiddingScheme',
"MediaError" => '\Google\Api\Ads\AdWords\v201306\classes\MediaError',
"Media_Size_DimensionsMapEntry" => '\Google\Api\Ads\AdWords\v201306\classes\Media_Size_DimensionsMapEntry',
"Media_Size_StringMapEntry" => '\Google\Api\Ads\AdWords\v201306\classes\Media_Size_StringMapEntry',
"MobileAd" => '\Google\Api\Ads\AdWords\v201306\classes\MobileAd',
"MobileAppCategory" => '\Google\Api\Ads\AdWords\v201306\classes\MobileAppCategory',
"MobileApplication" => '\Google\Api\Ads\AdWords\v201306\classes\MobileApplication',
"MobileDevice" => '\Google\Api\Ads\AdWords\v201306\classes\MobileDevice',
"MobileExtension" => '\Google\Api\Ads\AdWords\v201306\classes\MobileExtension',
"MobileImageAd" => '\Google\Api\Ads\AdWords\v201306\classes\MobileImageAd',
"Money" => '\Google\Api\Ads\AdWords\v201306\classes\Money',
"NegativeAdGroupCriterion" => '\Google\Api\Ads\AdWords\v201306\classes\NegativeAdGroupCriterion',
"NegativeCampaignCriterion" => '\Google\Api\Ads\AdWords\v201306\classes\NegativeCampaignCriterion',
"NetworkSetting" => '\Google\Api\Ads\AdWords\v201306\classes\NetworkSetting',
"NewEntityCreationError" => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationError',
"NotEmptyError" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
"NotWhitelistedError" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
"NullError" => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
"OAuthInfo" => '\Google\Api\Ads\AdWords\v201306\classes\OAuthInfo',
"Operand" => '\Google\Api\Ads\AdWords\v201306\classes\Operand',
"OperatingSystemVersion" => '\Google\Api\Ads\AdWords\v201306\classes\OperatingSystemVersion',
"OperationAccessDenied" => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
"OperationStream" => '\Google\Api\Ads\AdWords\v201306\classes\OperationStream',
"OperationStreamResult" => '\Google\Api\Ads\AdWords\v201306\classes\OperationStreamResult',
"OperatorError" => '\Google\Api\Ads\AdWords\v201306\classes\OperatorError',
"OverrideInfo" => '\Google\Api\Ads\AdWords\v201306\classes\OverrideInfo',
"PageOnePromotedBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\PageOnePromotedBiddingScheme',
"PagingError" => '\Google\Api\Ads\AdWords\v201306\classes\PagingError',
"PercentCpaBid" => '\Google\Api\Ads\AdWords\v201306\classes\PercentCpaBid',
"PercentCpaBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\PercentCpaBiddingScheme',
"PlaceHolder" => '\Google\Api\Ads\AdWords\v201306\classes\PlaceHolder',
"Placement" => '\Google\Api\Ads\AdWords\v201306\classes\Placement',
"Platform" => '\Google\Api\Ads\AdWords\v201306\classes\Platform',
"PolicyViolationError.Part" => '\Google\Api\Ads\AdWords\v201306\classes\PolicyViolationErrorPart',
"PolicyViolationKey" => '\Google\Api\Ads\AdWords\v201306\classes\PolicyViolationKey',
"Product" => '\Google\Api\Ads\AdWords\v201306\classes\Product',
"ProductAd" => '\Google\Api\Ads\AdWords\v201306\classes\ProductAd',
"ProductCondition" => '\Google\Api\Ads\AdWords\v201306\classes\ProductCondition',
"ProductConditionOperand" => '\Google\Api\Ads\AdWords\v201306\classes\ProductConditionOperand',
"Proximity" => '\Google\Api\Ads\AdWords\v201306\classes\Proximity',
"QualityInfo" => '\Google\Api\Ads\AdWords\v201306\classes\QualityInfo',
"QueryError" => '\Google\Api\Ads\AdWords\v201306\classes\QueryError',
"QuotaCheckError" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
"QuotaError" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaError',
"RangeError" => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
"RateExceededError" => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
"ReadOnlyError" => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
"RealTimeBiddingSetting" => '\Google\Api\Ads\AdWords\v201306\classes\RealTimeBiddingSetting',
"RegionCodeError" => '\Google\Api\Ads\AdWords\v201306\classes\RegionCodeError',
"RejectedError" => '\Google\Api\Ads\AdWords\v201306\classes\RejectedError',
"RequestError" => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
"RequiredError" => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
"ReturnValueResult" => '\Google\Api\Ads\AdWords\v201306\classes\ReturnValueResult',
"RichMediaAd" => '\Google\Api\Ads\AdWords\v201306\classes\RichMediaAd',
"SelectorError" => '\Google\Api\Ads\AdWords\v201306\classes\SelectorError',
"SettingError" => '\Google\Api\Ads\AdWords\v201306\classes\SettingError',
"SimpleMutateJob" => '\Google\Api\Ads\AdWords\v201306\classes\SimpleMutateJob',
"SimpleMutateResult" => '\Google\Api\Ads\AdWords\v201306\classes\SimpleMutateResult',
"Sitelink" => '\Google\Api\Ads\AdWords\v201306\classes\Sitelink',
"SitelinksExtension" => '\Google\Api\Ads\AdWords\v201306\classes\SitelinksExtension',
"SizeLimitError" => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
"SoapResponseHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
"StatsQueryError" => '\Google\Api\Ads\AdWords\v201306\classes\StatsQueryError',
"StringLengthError" => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
"String_StringMapEntry" => '\Google\Api\Ads\AdWords\v201306\classes\String_StringMapEntry',
"TargetCpaBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\TargetCpaBiddingScheme',
"TargetError" => '\Google\Api\Ads\AdWords\v201306\classes\TargetError',
"TargetingSettingDetail" => '\Google\Api\Ads\AdWords\v201306\classes\TargetingSettingDetail',
"TargetSpendBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\TargetSpendBiddingScheme',
"TargetingSetting" => '\Google\Api\Ads\AdWords\v201306\classes\TargetingSetting',
"TempAdUnionId" => '\Google\Api\Ads\AdWords\v201306\classes\TempAdUnionId',
"TemplateAd" => '\Google\Api\Ads\AdWords\v201306\classes\TemplateAd',
"TemplateElement" => '\Google\Api\Ads\AdWords\v201306\classes\TemplateElement',
"TemplateElementField" => '\Google\Api\Ads\AdWords\v201306\classes\TemplateElementField',
"TextAd" => '\Google\Api\Ads\AdWords\v201306\classes\TextAd',
"ThirdPartyRedirectAd" => '\Google\Api\Ads\AdWords\v201306\classes\ThirdPartyRedirectAd',
"TrackingSetting" => '\Google\Api\Ads\AdWords\v201306\classes\TrackingSetting',
"UnprocessedResult" => '\Google\Api\Ads\AdWords\v201306\classes\UnprocessedResult',
"CriterionUserInterest" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserInterest',
"CriterionUserList" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserList',
"Vertical" => '\Google\Api\Ads\AdWords\v201306\classes\Vertical',
"Video" => '\Google\Api\Ads\AdWords\v201306\classes\Video',
"Webpage" => '\Google\Api\Ads\AdWords\v201306\classes\Webpage',
"WebpageCondition" => '\Google\Api\Ads\AdWords\v201306\classes\WebpageCondition',
"WebpageParameter" => '\Google\Api\Ads\AdWords\v201306\classes\WebpageParameter',
"DynamicSearchAd" => '\Google\Api\Ads\AdWords\v201306\classes\DynamicSearchAd',
"AdError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AdErrorReason',
"AdExtensionError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionErrorReason',
"AdExtensionOverride.ApprovalStatus" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverrideApprovalStatus',
"AdExtensionOverride.Status" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverrideStatus',
"AdExtensionOverrideError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverrideErrorReason',
"AdGroupAd.ApprovalStatus" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAdApprovalStatus',
"AdGroupAd.Status" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAdStatus',
"AdGroupAdError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAdErrorReason',
"AdGroupCriterionError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionErrorReason',
"AdGroupCriterionLimitExceeded.CriteriaLimitType" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionLimitExceededCriteriaLimitType',
"AdGroupServiceError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupServiceErrorReason',
"AdGroup.Status" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupStatus',
"AdServingOptimizationStatus" => '\Google\Api\Ads\AdWords\v201306\classes\AdServingOptimizationStatus',
"AdxError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AdxErrorReason',
"AgeRange.AgeRangeType" => '\Google\Api\Ads\AdWords\v201306\classes\AgeRangeAgeRangeType',
"ApprovalStatus" => '\Google\Api\Ads\AdWords\v201306\classes\ApprovalStatus',
"AuthenticationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
"AuthorizationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
"BasicJobStatus" => '\Google\Api\Ads\AdWords\v201306\classes\BasicJobStatus',
"BetaError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\BetaErrorReason',
"BidModifierSource" => '\Google\Api\Ads\AdWords\v201306\classes\BidModifierSource',
"BidSource" => '\Google\Api\Ads\AdWords\v201306\classes\BidSource',
"BiddingError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingErrorReason',
"BiddingErrors.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingErrorsReason',
"BiddingStrategySource" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategySource',
"BiddingStrategyType" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategyType',
"BiddingTransitionError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingTransitionErrorReason',
"Budget.BudgetDeliveryMethod" => '\Google\Api\Ads\AdWords\v201306\classes\BudgetBudgetDeliveryMethod',
"Budget.BudgetPeriod" => '\Google\Api\Ads\AdWords\v201306\classes\BudgetBudgetPeriod',
"Budget.BudgetStatus" => '\Google\Api\Ads\AdWords\v201306\classes\BudgetBudgetStatus',
"BudgetError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\BudgetErrorReason',
"BulkMutateJobError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\BulkMutateJobErrorReason',
"CampaignAdExtension.ApprovalStatus" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignAdExtensionApprovalStatus',
"CampaignAdExtension.Status" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignAdExtensionStatus',
"CampaignAdExtensionError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignAdExtensionErrorReason',
"CampaignCriterionError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignCriterionErrorReason',
"CampaignCriterionLimitExceeded.CriteriaLimitType" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignCriterionLimitExceededCriteriaLimitType',
"CampaignError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignErrorReason',
"CampaignStatus" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignStatus',
"ClientTermsError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
"ContentLabelType" => '\Google\Api\Ads\AdWords\v201306\classes\ContentLabelType',
"ConversionOptimizerBiddingScheme.BidType" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionOptimizerBiddingSchemeBidType',
"ConversionOptimizerBiddingScheme.PricingMode" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionOptimizerBiddingSchemePricingMode',
"ConversionOptimizerEligibility.RejectionReason" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionOptimizerEligibilityRejectionReason',
"Criterion.Type" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionType',
"CriterionError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionErrorReason',
"CriterionTypeGroup" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionTypeGroup',
"CriterionUse" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUse',
"DatabaseError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
"DateError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
"DayOfWeek" => '\Google\Api\Ads\AdWords\v201306\classes\DayOfWeek',
"DeprecatedAd.Type" => '\Google\Api\Ads\AdWords\v201306\classes\DeprecatedAdType',
"DistinctError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
"EntityAccessDenied.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\EntityAccessDeniedReason',
"EntityCountLimitExceeded.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceededReason',
"EntityId.Type" => '\Google\Api\Ads\AdWords\v201306\classes\EntityIdType',
"EntityNotFound.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
"ExperimentDataStatus" => '\Google\Api\Ads\AdWords\v201306\classes\ExperimentDataStatus',
"ExperimentDeltaStatus" => '\Google\Api\Ads\AdWords\v201306\classes\ExperimentDeltaStatus',
"FeedItem.Status" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemStatus',
"FeedItemError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemErrorReason',
"FeedItemValidationDetail.ApprovalStatus" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemValidationDetailApprovalStatus',
"FeedItemValidationDetail.ValidationStatus" => '\Google\Api\Ads\AdWords\v201306\classes\FeedItemValidationDetailValidationStatus',
"ForwardCompatibilityError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ForwardCompatibilityErrorReason',
"Gender.GenderType" => '\Google\Api\Ads\AdWords\v201306\classes\GenderGenderType',
"GeoTargetTypeSetting.NegativeGeoTargetType" => '\Google\Api\Ads\AdWords\v201306\classes\GeoTargetTypeSettingNegativeGeoTargetType',
"GeoTargetTypeSetting.PositiveGeoTargetType" => '\Google\Api\Ads\AdWords\v201306\classes\GeoTargetTypeSettingPositiveGeoTargetType',
"IdError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
"ImageError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ImageErrorReason',
"InAppLinkExtension.AppStore" => '\Google\Api\Ads\AdWords\v201306\classes\InAppLinkExtensionAppStore',
"InternalApiError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
"JobError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\JobErrorReason',
"KeywordMatchType" => '\Google\Api\Ads\AdWords\v201306\classes\KeywordMatchType',
"Level" => '\Google\Api\Ads\AdWords\v201306\classes\Level',
"LocationExtension.Source" => '\Google\Api\Ads\AdWords\v201306\classes\LocationExtensionSource',
"LocationOverrideInfo.RadiusUnits" => '\Google\Api\Ads\AdWords\v201306\classes\LocationOverrideInfoRadiusUnits',
"LocationTargetingStatus" => '\Google\Api\Ads\AdWords\v201306\classes\LocationTargetingStatus',
"MarkupLanguageType" => '\Google\Api\Ads\AdWords\v201306\classes\MarkupLanguageType',
"Media.MediaType" => '\Google\Api\Ads\AdWords\v201306\classes\MediaMediaType',
"Media.MimeType" => '\Google\Api\Ads\AdWords\v201306\classes\MediaMimeType',
"Media.Size" => '\Google\Api\Ads\AdWords\v201306\classes\MediaSize',
"MediaError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\MediaErrorReason',
"MinuteOfHour" => '\Google\Api\Ads\AdWords\v201306\classes\MinuteOfHour',
"MobileDevice.DeviceType" => '\Google\Api\Ads\AdWords\v201306\classes\MobileDeviceDeviceType',
"MultiplierSource" => '\Google\Api\Ads\AdWords\v201306\classes\MultiplierSource',
"NewEntityCreationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationErrorReason',
"NotEmptyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
"NotWhitelistedError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
"NullError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
"OperatingSystemVersion.OperatorType" => '\Google\Api\Ads\AdWords\v201306\classes\OperatingSystemVersionOperatorType',
"OperationAccessDenied.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
"Operator" => '\Google\Api\Ads\AdWords\v201306\classes\Operator',
"OperatorError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\OperatorErrorReason',
"PageOnePromotedBiddingScheme.StrategyGoal" => '\Google\Api\Ads\AdWords\v201306\classes\PageOnePromotedBiddingSchemeStrategyGoal',
"PagingError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\PagingErrorReason',
"PolicyViolationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\PolicyViolationErrorReason',
"Proximity.DistanceUnits" => '\Google\Api\Ads\AdWords\v201306\classes\ProximityDistanceUnits',
"QueryError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\QueryErrorReason',
"QuotaCheckError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
"QuotaError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaErrorReason',
"RangeError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
"RateExceededError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
"ReadOnlyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
"RegionCodeError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RegionCodeErrorReason',
"RejectedError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RejectedErrorReason',
"RequestError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
"RequiredError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
"RichMediaAd.AdAttribute" => '\Google\Api\Ads\AdWords\v201306\classes\RichMediaAdAdAttribute',
"RichMediaAd.RichMediaAdType" => '\Google\Api\Ads\AdWords\v201306\classes\RichMediaAdRichMediaAdType',
"SelectorError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
"ServingStatus" => '\Google\Api\Ads\AdWords\v201306\classes\ServingStatus',
"SettingError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SettingErrorReason',
"SizeLimitError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
"Stats.Network" => '\Google\Api\Ads\AdWords\v201306\classes\StatsNetwork',
"StatsQueryError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\StatsQueryErrorReason',
"StringLengthError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
"SystemServingStatus" => '\Google\Api\Ads\AdWords\v201306\classes\SystemServingStatus',
"TargetError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\TargetErrorReason',
"TemplateElementField.Type" => '\Google\Api\Ads\AdWords\v201306\classes\TemplateElementFieldType',
"ThirdPartyRedirectAd.ExpandingDirection" => '\Google\Api\Ads\AdWords\v201306\classes\ThirdPartyRedirectAdExpandingDirection',
"TimeUnit" => '\Google\Api\Ads\AdWords\v201306\classes\TimeUnit',
"CriterionUserList.MembershipStatus" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserListMembershipStatus',
"UserStatus" => '\Google\Api\Ads\AdWords\v201306\classes\UserStatus',
"VideoType" => '\Google\Api\Ads\AdWords\v201306\classes\VideoType',
"WebpageConditionOperand" => '\Google\Api\Ads\AdWords\v201306\classes\WebpageConditionOperand',
"getResult" => '\Google\Api\Ads\AdWords\v201306\classes\getResult',
"getResultResponse" => '\Google\Api\Ads\AdWords\v201306\classes\getResultResponse',);

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/MutateJobService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = MutateJobService::$classmap;
    parent::__construct($wsdl, $options, $user, 'MutateJobService', 'https://adwords.google.com/api/adwords/cm/v201306');
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
  public function get($selector) {
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
  public function getResult($selector) {
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
   * 
   * <p>You should not use the returned {@link BulkMutateJobId} with bulk API
   * {@link BulkMutateJobService#mutate} method.</p>
   */
  public function mutate($operations, $policy) {
    $arg = new MutateJobServiceMutate($operations, $policy);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }

}