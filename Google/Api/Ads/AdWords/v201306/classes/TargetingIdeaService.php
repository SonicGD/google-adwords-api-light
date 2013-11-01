<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * TargetingIdeaService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class TargetingIdeaService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                                     => '\Google\Api\Ads\AdWords\v201306\classes\TargetingIdeaServiceGetResponse',
        "get"                                             => '\Google\Api\Ads\AdWords\v201306\classes\TargetingIdeaServiceGet',
        "mutate"                                          => '\Google\Api\Ads\AdWords\v201306\classes\TargetingIdeaServiceMutate',
        "mutateResponse"                                  => '\Google\Api\Ads\AdWords\v201306\classes\TargetingIdeaServiceMutateResponse',
        "DateTime"                                        => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
        "SoapHeader"                                      => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
        "AdGroupBidLandscape"                             => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupBidLandscape',
        "BidLandscape"                                    => '\Google\Api\Ads\AdWords\v201306\classes\BidLandscape',
        "AdGroupCriterionError"                           => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionError',
        "ApiError"                                        => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
        "AdGroupCriterionLimitExceeded"                   => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionLimitExceeded',
        "EntityCountLimitExceeded"                        => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceeded',
        "AdxError"                                        => '\Google\Api\Ads\AdWords\v201306\classes\AdxError',
        "ApiException"                                    => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
        "ApplicationException"                            => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
        "AuthenticationError"                             => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
        "AuthorizationError"                              => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
        "DataEntry"                                       => '\Google\Api\Ads\AdWords\v201306\classes\DataEntry',
        "BidLandscape.LandscapePoint"                     => '\Google\Api\Ads\AdWords\v201306\classes\BidLandscapeLandscapePoint',
        "BiddingError"                                    => '\Google\Api\Ads\AdWords\v201306\classes\BiddingError',
        "BudgetError"                                     => '\Google\Api\Ads\AdWords\v201306\classes\BudgetError',
        "ClientTermsError"                                => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
        "CollectionSizeError"                             => '\Google\Api\Ads\AdWords\v201306\classes\CollectionSizeError',
        "ComparableValue"                                 => '\Google\Api\Ads\AdWords\v201306\classes\ComparableValue',
        "Criterion"                                       => '\Google\Api\Ads\AdWords\v201306\classes\Criterion',
        "CriterionBidLandscape"                           => '\Google\Api\Ads\AdWords\v201306\classes\CriterionBidLandscape',
        "CriterionError"                                  => '\Google\Api\Ads\AdWords\v201306\classes\CriterionError',
        "CriterionParameter"                              => '\Google\Api\Ads\AdWords\v201306\classes\CriterionParameter',
        "CriterionPolicyError"                            => '\Google\Api\Ads\AdWords\v201306\classes\CriterionPolicyError',
        "PolicyViolationError"                            => '\Google\Api\Ads\AdWords\v201306\classes\PolicyViolationError',
        "DatabaseError"                                   => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
        "DateError"                                       => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
        "DistinctError"                                   => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
        "DoubleValue"                                     => '\Google\Api\Ads\AdWords\v201306\classes\DoubleValue',
        "NumberValue"                                     => '\Google\Api\Ads\AdWords\v201306\classes\NumberValue',
        "EntityNotFound"                                  => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
        "IdError"                                         => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
        "InternalApiError"                                => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
        "Keyword"                                         => '\Google\Api\Ads\AdWords\v201306\classes\Keyword',
        "Language"                                        => '\Google\Api\Ads\AdWords\v201306\classes\Language',
        "Location"                                        => '\Google\Api\Ads\AdWords\v201306\classes\Location',
        "LongValue"                                       => '\Google\Api\Ads\AdWords\v201306\classes\LongValue',
        "MobileAppCategory"                               => '\Google\Api\Ads\AdWords\v201306\classes\MobileAppCategory',
        "MobileApplication"                               => '\Google\Api\Ads\AdWords\v201306\classes\MobileApplication',
        "Money"                                           => '\Google\Api\Ads\AdWords\v201306\classes\Money',
        "NetworkSetting"                                  => '\Google\Api\Ads\AdWords\v201306\classes\NetworkSetting',
        "NotEmptyError"                                   => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
        "NotWhitelistedError"                             => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
        "NullError"                                       => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
        "OperationAccessDenied"                           => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
        "Paging"                                          => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
        "Placement"                                       => '\Google\Api\Ads\AdWords\v201306\classes\Placement',
        "Platform"                                        => '\Google\Api\Ads\AdWords\v201306\classes\Platform',
        "PolicyViolationError.Part"                       => '\Google\Api\Ads\AdWords\v201306\classes\PolicyViolationErrorPart',
        "PolicyViolationKey"                              => '\Google\Api\Ads\AdWords\v201306\classes\PolicyViolationKey',
        "Product"                                         => '\Google\Api\Ads\AdWords\v201306\classes\Product',
        "ProductCondition"                                => '\Google\Api\Ads\AdWords\v201306\classes\ProductCondition',
        "ProductConditionOperand"                         => '\Google\Api\Ads\AdWords\v201306\classes\ProductConditionOperand',
        "QuotaCheckError"                                 => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
        "RangeError"                                      => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
        "RateExceededError"                               => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
        "ReadOnlyError"                                   => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
        "RegionCodeError"                                 => '\Google\Api\Ads\AdWords\v201306\classes\RegionCodeError',
        "RequestError"                                    => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
        "RequiredError"                                   => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
        "SizeLimitError"                                  => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
        "SoapResponseHeader"                              => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
        "StatsQueryError"                                 => '\Google\Api\Ads\AdWords\v201306\classes\StatsQueryError',
        "StringLengthError"                               => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
        "TargetError"                                     => '\Google\Api\Ads\AdWords\v201306\classes\TargetError',
        "CriterionUserInterest"                           => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserInterest',
        "CriterionUserList"                               => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserList',
        "Vertical"                                        => '\Google\Api\Ads\AdWords\v201306\classes\Vertical',
        "Webpage"                                         => '\Google\Api\Ads\AdWords\v201306\classes\Webpage',
        "WebpageCondition"                                => '\Google\Api\Ads\AdWords\v201306\classes\WebpageCondition',
        "WebpageParameter"                                => '\Google\Api\Ads\AdWords\v201306\classes\WebpageParameter',
        "AdGroupBidLandscape.Type"                        => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupBidLandscapeType',
        "AdGroupCriterionError.Reason"                    => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionErrorReason',
        "AdGroupCriterionLimitExceeded.CriteriaLimitType" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupCriterionLimitExceededCriteriaLimitType',
        "AdxError.Reason"                                 => '\Google\Api\Ads\AdWords\v201306\classes\AdxErrorReason',
        "AuthenticationError.Reason"                      => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
        "AuthorizationError.Reason"                       => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
        "BiddingError.Reason"                             => '\Google\Api\Ads\AdWords\v201306\classes\BiddingErrorReason',
        "BudgetError.Reason"                              => '\Google\Api\Ads\AdWords\v201306\classes\BudgetErrorReason',
        "ClientTermsError.Reason"                         => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
        "Criterion.Type"                                  => '\Google\Api\Ads\AdWords\v201306\classes\CriterionType',
        "CriterionError.Reason"                           => '\Google\Api\Ads\AdWords\v201306\classes\CriterionErrorReason',
        "DatabaseError.Reason"                            => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
        "DateError.Reason"                                => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
        "DistinctError.Reason"                            => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
        "EntityCountLimitExceeded.Reason"                 => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceededReason',
        "EntityNotFound.Reason"                           => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
        "IdError.Reason"                                  => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
        "InternalApiError.Reason"                         => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
        "KeywordMatchType"                                => '\Google\Api\Ads\AdWords\v201306\classes\KeywordMatchType',
        "LocationTargetingStatus"                         => '\Google\Api\Ads\AdWords\v201306\classes\LocationTargetingStatus',
        "NotEmptyError.Reason"                            => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
        "NotWhitelistedError.Reason"                      => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
        "NullError.Reason"                                => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
        "OperationAccessDenied.Reason"                    => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
        "QuotaCheckError.Reason"                          => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
        "RangeError.Reason"                               => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
        "RateExceededError.Reason"                        => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
        "ReadOnlyError.Reason"                            => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
        "RegionCodeError.Reason"                          => '\Google\Api\Ads\AdWords\v201306\classes\RegionCodeErrorReason',
        "RequestError.Reason"                             => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
        "RequiredError.Reason"                            => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
        "SizeLimitError.Reason"                           => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
        "StatsQueryError.Reason"                          => '\Google\Api\Ads\AdWords\v201306\classes\StatsQueryErrorReason',
        "StringLengthError.Reason"                        => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
        "TargetError.Reason"                              => '\Google\Api\Ads\AdWords\v201306\classes\TargetErrorReason',
        "CriterionUserList.MembershipStatus"              => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserListMembershipStatus',
        "WebpageConditionOperand"                         => '\Google\Api\Ads\AdWords\v201306\classes\WebpageConditionOperand',
        "AdFormatSpec"                                    => '\Google\Api\Ads\AdWords\v201306\classes\AdFormatSpec',
        "AdFormatSpecListAttribute"                       => '\Google\Api\Ads\AdWords\v201306\classes\AdFormatSpecListAttribute',
        "Attribute"                                       => '\Google\Api\Ads\AdWords\v201306\classes\Attribute',
        "AdSpec"                                          => '\Google\Api\Ads\AdWords\v201306\classes\AdSpec',
        "AdSpecListAttribute"                             => '\Google\Api\Ads\AdWords\v201306\classes\AdSpecListAttribute',
        "AdSpecListSearchParameter"                       => '\Google\Api\Ads\AdWords\v201306\classes\AdSpecListSearchParameter',
        "SearchParameter"                                 => '\Google\Api\Ads\AdWords\v201306\classes\SearchParameter',
        "BidLandscapeAttribute"                           => '\Google\Api\Ads\AdWords\v201306\classes\BidLandscapeAttribute',
        "BooleanAttribute"                                => '\Google\Api\Ads\AdWords\v201306\classes\BooleanAttribute',
        "CategoryProductsAndServicesSearchParameter"      => '\Google\Api\Ads\AdWords\v201306\classes\CategoryProductsAndServicesSearchParameter',
        "CompetitionSearchParameter"                      => '\Google\Api\Ads\AdWords\v201306\classes\CompetitionSearchParameter',
        "CriterionAttribute"                              => '\Google\Api\Ads\AdWords\v201306\classes\CriterionAttribute',
        "CurrencyCodeError"                               => '\Google\Api\Ads\AdWords\v201306\classes\CurrencyCodeError',
        "DisplayAdSpec"                                   => '\Google\Api\Ads\AdWords\v201306\classes\DisplayAdSpec',
        "DisplayAdSpec.AdSizeSpec"                        => '\Google\Api\Ads\AdWords\v201306\classes\DisplayAdSpecAdSizeSpec',
        "DisplayType"                                     => '\Google\Api\Ads\AdWords\v201306\classes\DisplayType',
        "DoubleAttribute"                                 => '\Google\Api\Ads\AdWords\v201306\classes\DoubleAttribute',
        "ExcludedKeywordSearchParameter"                  => '\Google\Api\Ads\AdWords\v201306\classes\ExcludedKeywordSearchParameter',
        "FlashDisplayType"                                => '\Google\Api\Ads\AdWords\v201306\classes\FlashDisplayType',
        "HtmlDisplayType"                                 => '\Google\Api\Ads\AdWords\v201306\classes\HtmlDisplayType',
        "IdeaTextFilterSearchParameter"                   => '\Google\Api\Ads\AdWords\v201306\classes\IdeaTextFilterSearchParameter',
        "IdeaTypeAttribute"                               => '\Google\Api\Ads\AdWords\v201306\classes\IdeaTypeAttribute',
        "ImageDisplayType"                                => '\Google\Api\Ads\AdWords\v201306\classes\ImageDisplayType',
        "InStreamAdInfo"                                  => '\Google\Api\Ads\AdWords\v201306\classes\InStreamAdInfo',
        "InStreamAdInfoAttribute"                         => '\Google\Api\Ads\AdWords\v201306\classes\InStreamAdInfoAttribute',
        "InStreamAdSpec"                                  => '\Google\Api\Ads\AdWords\v201306\classes\InStreamAdSpec',
        "IncludeAdultContentSearchParameter"              => '\Google\Api\Ads\AdWords\v201306\classes\IncludeAdultContentSearchParameter',
        "IntegerAttribute"                                => '\Google\Api\Ads\AdWords\v201306\classes\IntegerAttribute',
        "IntegerSetAttribute"                             => '\Google\Api\Ads\AdWords\v201306\classes\IntegerSetAttribute',
        "KeywordAttribute"                                => '\Google\Api\Ads\AdWords\v201306\classes\KeywordAttribute',
        "LanguageSearchParameter"                         => '\Google\Api\Ads\AdWords\v201306\classes\LanguageSearchParameter',
        "LocationSearchParameter"                         => '\Google\Api\Ads\AdWords\v201306\classes\LocationSearchParameter',
        "LongAttribute"                                   => '\Google\Api\Ads\AdWords\v201306\classes\LongAttribute',
        "LongComparisonOperation"                         => '\Google\Api\Ads\AdWords\v201306\classes\LongComparisonOperation',
        "LongRangeAttribute"                              => '\Google\Api\Ads\AdWords\v201306\classes\LongRangeAttribute',
        "MatchesRegexError"                               => '\Google\Api\Ads\AdWords\v201306\classes\MatchesRegexError',
        "MoneyAttribute"                                  => '\Google\Api\Ads\AdWords\v201306\classes\MoneyAttribute',
        "MonthlySearchVolume"                             => '\Google\Api\Ads\AdWords\v201306\classes\MonthlySearchVolume',
        "MonthlySearchVolumeAttribute"                    => '\Google\Api\Ads\AdWords\v201306\classes\MonthlySearchVolumeAttribute',
        "NetworkSearchParameter"                          => '\Google\Api\Ads\AdWords\v201306\classes\NetworkSearchParameter',
        "OpportunityIdeaTypeAttribute"                    => '\Google\Api\Ads\AdWords\v201306\classes\OpportunityIdeaTypeAttribute',
        "PlacementAttribute"                              => '\Google\Api\Ads\AdWords\v201306\classes\PlacementAttribute',
        "PlacementTypeAttribute"                          => '\Google\Api\Ads\AdWords\v201306\classes\PlacementTypeAttribute',
        "PlacementTypeSearchParameter"                    => '\Google\Api\Ads\AdWords\v201306\classes\PlacementTypeSearchParameter',
        "Range"                                           => '\Google\Api\Ads\AdWords\v201306\classes\Range',
        "RelatedToQuerySearchParameter"                   => '\Google\Api\Ads\AdWords\v201306\classes\RelatedToQuerySearchParameter',
        "RelatedToUrlSearchParameter"                     => '\Google\Api\Ads\AdWords\v201306\classes\RelatedToUrlSearchParameter',
        "SearchVolumeSearchParameter"                     => '\Google\Api\Ads\AdWords\v201306\classes\SearchVolumeSearchParameter',
        "SeedAdGroupIdSearchParameter"                    => '\Google\Api\Ads\AdWords\v201306\classes\SeedAdGroupIdSearchParameter',
        "StringAttribute"                                 => '\Google\Api\Ads\AdWords\v201306\classes\StringAttribute',
        "TargetingIdea"                                   => '\Google\Api\Ads\AdWords\v201306\classes\TargetingIdea',
        "TargetingIdeaError"                              => '\Google\Api\Ads\AdWords\v201306\classes\TargetingIdeaError',
        "TargetingIdeaPage"                               => '\Google\Api\Ads\AdWords\v201306\classes\TargetingIdeaPage',
        "TargetingIdeaSelector"                           => '\Google\Api\Ads\AdWords\v201306\classes\TargetingIdeaSelector',
        "TextAdSpec"                                      => '\Google\Api\Ads\AdWords\v201306\classes\TextAdSpec',
        "TrafficEstimatorError"                           => '\Google\Api\Ads\AdWords\v201306\classes\TrafficEstimatorError',
        "Type_AttributeMapEntry"                          => '\Google\Api\Ads\AdWords\v201306\classes\Type_AttributeMapEntry',
        "WebpageDescriptor"                               => '\Google\Api\Ads\AdWords\v201306\classes\WebpageDescriptor',
        "WebpageDescriptorAttribute"                      => '\Google\Api\Ads\AdWords\v201306\classes\WebpageDescriptorAttribute',
        "AttributeType"                                   => '\Google\Api\Ads\AdWords\v201306\classes\AttributeType',
        "CompetitionSearchParameter.Level"                => '\Google\Api\Ads\AdWords\v201306\classes\CompetitionSearchParameterLevel',
        "CurrencyCodeError.Reason"                        => '\Google\Api\Ads\AdWords\v201306\classes\CurrencyCodeErrorReason',
        "DisplayAdSpec.ActivationOption"                  => '\Google\Api\Ads\AdWords\v201306\classes\DisplayAdSpecActivationOption',
        "HtmlDisplayType.HtmlOption"                      => '\Google\Api\Ads\AdWords\v201306\classes\HtmlDisplayTypeHtmlOption',
        "IdeaType"                                        => '\Google\Api\Ads\AdWords\v201306\classes\IdeaType',
        "InStreamAdSpec.InStreamType"                     => '\Google\Api\Ads\AdWords\v201306\classes\InStreamAdSpecInStreamType',
        "MatchesRegexError.Reason"                        => '\Google\Api\Ads\AdWords\v201306\classes\MatchesRegexErrorReason',
        "OpportunityIdeaType"                             => '\Google\Api\Ads\AdWords\v201306\classes\OpportunityIdeaType',
        "RequestType"                                     => '\Google\Api\Ads\AdWords\v201306\classes\RequestType',
        "SiteConstants.AdFormat"                          => '\Google\Api\Ads\AdWords\v201306\classes\SiteConstantsAdFormat',
        "SiteConstants.PlacementType"                     => '\Google\Api\Ads\AdWords\v201306\classes\SiteConstantsPlacementType',
        "TargetingIdeaError.Reason"                       => '\Google\Api\Ads\AdWords\v201306\classes\TargetingIdeaErrorReason',
        "TrafficEstimatorError.Reason"                    => '\Google\Api\Ads\AdWords\v201306\classes\TrafficEstimatorErrorReason',
        "getBulkKeywordIdeas"                             => '\Google\Api\Ads\AdWords\v201306\classes\getBulkKeywordIdeas',
        "getBulkKeywordIdeasResponse"                     => '\Google\Api\Ads\AdWords\v201306\classes\getBulkKeywordIdeasResponse',
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/o/v201306/TargetingIdeaService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = TargetingIdeaService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'TargetingIdeaService',
            'https://adwords.google.com/api/adwords/o/v201306'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns a page of ideas that match the query described by the specified
     * {@link TargetingIdeaSelector}.
     *
     * <p>The selector must specify a {@code paging} value, with {@code numberResults} set to 800 or
     * less.  Large result sets must be composed through multiple calls to this method, advancing the
     * paging {@code startIndex} value by {@code numberResults} with each call.
     *
     * <p>Only a relatively small total number of results will be available through this method.
     * Much larger result sets may be available using
     * {@link #getBulkKeywordIdeas(TargetingIdeaSelector)} at the price of reduced flexibility in
     * selector options.
     *
     * @param selector Query describing the types of results to return when
     *                 finding matches (similar keyword ideas/placement ideas).
     *
     * @return A {@link TargetingIdeaPage} of results, that is a subset of the
     * list of possible ideas meeting the criteria of the
     * {@link TargetingIdeaSelector}.
     * @throws ApiException If problems occurred while querying for ideas.
     */
    public function get($selector)
    {
        $arg = new TargetingIdeaServiceGet($selector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }


    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns a page of ideas that match the query described by the specified
     * {@link TargetingIdeaSelector}.  This method is specialized for returning
     * bulk keyword ideas, and thus the selector must be set for
     * {@link com.google.ads.api.services.targetingideas.attributes.RequestType#IDEAS} and
     * {@link com.google.ads.api.services.common.optimization.attributes.IdeaType#KEYWORD}.
     * A limited, fixed set of attributes will be returned.
     *
     * <p>A single-valued
     * {@link com.google.ads.api.services.targetingideas.search.RelatedToUrlSearchParameter}
     * must be supplied.  Single-valued
     * {@link com.google.ads.api.services.targetingideas.search.LanguageSearchParameter} and
     * {@link com.google.ads.api.services.targetingideas.search.LocationSearchParameter} are
     * both optional.  Other search parameters compatible with a keyword query may also be
     * supplied.
     *
     * <p>The selector must specify a {@code paging} value, with {@code numberResults} set to 800
     * or less. If a URL based search is performed it will return up to 100 keywords when the site is
     * not owned, or up to 800 if it is. Number of keywords returned on a keyword based search is up
     * to 800. Large result sets must be composed through multiple calls to this method, advancing the
     * paging {@code startIndex} value by {@code numberResults} with each call.
     *
     * <p>This method can make many more results available than {@link #get(TargetingIdeaSelector)},
     * but allows less control over the query. For fine-tuned queries that do not need large numbers
     * of results, prefer {@link #get(TargetingIdeaSelector)}.
     *
     * @param selector Query describing the bulk keyword ideas to return.
     *
     * @return A {@link TargetingIdeaPage} of results, that is a subset of the
     * list of possible ideas meeting the criteria of the
     * {@link TargetingIdeaSelector}.
     * @throws ApiException If problems occurred while querying for ideas.
     */
    public function getBulkKeywordIdeas($selector)
    {
        $arg = new getBulkKeywordIdeas($selector);
        $result = $this->__soapCall("getBulkKeywordIdeas", array($arg));
        return $result->rval;
    }

}