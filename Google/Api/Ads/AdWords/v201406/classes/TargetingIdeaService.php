<?php

require_once 'TargetingIdeaService.require.php';

  /**
   * TargetingIdeaService
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class TargetingIdeaService extends AdWordsSoapClient
  {
      const SERVICE_NAME = "TargetingIdeaService";
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201406";
      const ENDPOINT = "https://adwords.google.com/api/adwords/o/v201406/TargetingIdeaService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/o/v201406/TargetingIdeaService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AdGroupBidLandscape" => "AdGroupBidLandscape",
      "AdGroupCriterionError" => "AdGroupCriterionError",
      "AdGroupCriterionLimitExceeded" => "AdGroupCriterionLimitExceeded",
      "AdxError" => "AdxError",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApplicationException" => "ApplicationException",
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "BidLandscape" => "BidLandscape",
      "BidLandscape.LandscapePoint" => "BidLandscapeLandscapePoint",
      "BiddingError" => "BiddingError",
      "BudgetError" => "BudgetError",
      "ClientTermsError" => "ClientTermsError",
      "CollectionSizeError" => "CollectionSizeError",
      "ComparableValue" => "ComparableValue",
      "Criterion" => "Criterion",
      "CriterionBidLandscape" => "CriterionBidLandscape",
      "CriterionError" => "CriterionError",
      "CriterionPolicyError" => "CriterionPolicyError",
      "DatabaseError" => "DatabaseError",
      "DateError" => "DateError",
      "DimensionProperties" => "DimensionProperties",
      "DistinctError" => "DistinctError",
      "DomainCategory" => "DomainCategory",
      "DoubleValue" => "DoubleValue",
      "EntityCountLimitExceeded" => "EntityCountLimitExceeded",
      "EntityNotFound" => "EntityNotFound",
      "IdError" => "IdError",
      "InternalApiError" => "InternalApiError",
      "Keyword" => "Keyword",
      "Language" => "Language",
      "LevelOfDetail" => "LevelOfDetail",
      "Location" => "Location",
      "LongValue" => "LongValue",
      "MobileAppCategory" => "MobileAppCategory",
      "MobileApplication" => "MobileApplication",
      "Money" => "Money",
      "NetworkSetting" => "NetworkSetting",
      "NotEmptyError" => "NotEmptyError",
      "NullError" => "NullError",
      "NumberValue" => "NumberValue",
      "OperationAccessDenied" => "OperationAccessDenied",
      "Paging" => "Paging",
      "Placement" => "Placement",
      "Platform" => "Platform",
      "PolicyViolationError" => "PolicyViolationError",
      "PolicyViolationError.Part" => "PolicyViolationErrorPart",
      "PolicyViolationKey" => "PolicyViolationKey",
      "Product" => "Product",
      "ProductCondition" => "ProductCondition",
      "ProductConditionOperand" => "ProductConditionOperand",
      "QuotaCheckError" => "QuotaCheckError",
      "RangeError" => "RangeError",
      "RateExceededError" => "RateExceededError",
      "ReadOnlyError" => "ReadOnlyError",
      "RegionCodeError" => "RegionCodeError",
      "RejectedError" => "RejectedError",
      "RequestError" => "RequestError",
      "RequiredError" => "RequiredError",
      "SizeLimitError" => "SizeLimitError",
      "SoapHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StatsQueryError" => "StatsQueryError",
      "StringLengthError" => "StringLengthError",
      "DataEntry" => "DataEntry",
      "TargetError" => "TargetError",
      "CriterionUserInterest" => "CriterionUserInterest",
      "CriterionUserList" => "CriterionUserList",
      "Vertical" => "Vertical",
      "AdGroupBidLandscape.Type" => "AdGroupBidLandscapeType",
      "AdGroupCriterionError.Reason" => "AdGroupCriterionErrorReason",
      "AdGroupCriterionLimitExceeded.CriteriaLimitType" => "AdGroupCriterionLimitExceededCriteriaLimitType",
      "AdxError.Reason" => "AdxErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AuthorizationError.Reason" => "AuthorizationErrorReason",
      "BiddingError.Reason" => "BiddingErrorReason",
      "BudgetError.Reason" => "BudgetErrorReason",
      "ClientTermsError.Reason" => "ClientTermsErrorReason",
      "CollectionSizeError.Reason" => "CollectionSizeErrorReason",
      "Criterion.Type" => "CriterionType",
      "CriterionError.Reason" => "CriterionErrorReason",
      "DatabaseError.Reason" => "DatabaseErrorReason",
      "DateError.Reason" => "DateErrorReason",
      "DistinctError.Reason" => "DistinctErrorReason",
      "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
      "EntityNotFound.Reason" => "EntityNotFoundReason",
      "IdError.Reason" => "IdErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "KeywordMatchType" => "KeywordMatchType",
      "LocationTargetingStatus" => "LocationTargetingStatus",
      "NotEmptyError.Reason" => "NotEmptyErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
      "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateExceededError.Reason" => "RateExceededErrorReason",
      "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
      "RegionCodeError.Reason" => "RegionCodeErrorReason",
      "RejectedError.Reason" => "RejectedErrorReason",
      "RequestError.Reason" => "RequestErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "SizeLimitError.Reason" => "SizeLimitErrorReason",
      "StatsQueryError.Reason" => "StatsQueryErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "TargetError.Reason" => "TargetErrorReason",
      "CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
      "AdFormatSpec" => "AdFormatSpec",
      "AdFormatSpecListAttribute" => "AdFormatSpecListAttribute",
      "AdSpec" => "AdSpec",
      "AdSpecListAttribute" => "AdSpecListAttribute",
      "AdSpecListSearchParameter" => "AdSpecListSearchParameter",
      "Attribute" => "Attribute",
      "BidLandscapeAttribute" => "BidLandscapeAttribute",
      "BooleanAttribute" => "BooleanAttribute",
      "CategoryProductsAndServicesSearchParameter" => "CategoryProductsAndServicesSearchParameter",
      "CompetitionSearchParameter" => "CompetitionSearchParameter",
      "CriterionAttribute" => "CriterionAttribute",
      "CurrencyCodeError" => "CurrencyCodeError",
      "DisplayAdSpec" => "DisplayAdSpec",
      "DisplayAdSpec.AdSizeSpec" => "DisplayAdSpecAdSizeSpec",
      "DisplayType" => "DisplayType",
      "DoubleAttribute" => "DoubleAttribute",
      "ExcludedKeywordSearchParameter" => "ExcludedKeywordSearchParameter",
      "FlashDisplayType" => "FlashDisplayType",
      "HtmlDisplayType" => "HtmlDisplayType",
      "IdeaTextFilterSearchParameter" => "IdeaTextFilterSearchParameter",
      "IdeaTypeAttribute" => "IdeaTypeAttribute",
      "ImageDisplayType" => "ImageDisplayType",
      "InStreamAdInfo" => "InStreamAdInfo",
      "InStreamAdInfoAttribute" => "InStreamAdInfoAttribute",
      "InStreamAdSpec" => "InStreamAdSpec",
      "IncludeAdultContentSearchParameter" => "IncludeAdultContentSearchParameter",
      "IntegerAttribute" => "IntegerAttribute",
      "IntegerSetAttribute" => "IntegerSetAttribute",
      "KeywordAttribute" => "KeywordAttribute",
      "LanguageSearchParameter" => "LanguageSearchParameter",
      "LocationSearchParameter" => "LocationSearchParameter",
      "LongAttribute" => "LongAttribute",
      "LongComparisonOperation" => "LongComparisonOperation",
      "LongRangeAttribute" => "LongRangeAttribute",
      "MatchesRegexError" => "MatchesRegexError",
      "MoneyAttribute" => "MoneyAttribute",
      "MonthlySearchVolume" => "MonthlySearchVolume",
      "MonthlySearchVolumeAttribute" => "MonthlySearchVolumeAttribute",
      "NetworkSearchParameter" => "NetworkSearchParameter",
      "OpportunityIdeaTypeAttribute" => "OpportunityIdeaTypeAttribute",
      "PlacementAttribute" => "PlacementAttribute",
      "PlacementTypeAttribute" => "PlacementTypeAttribute",
      "PlacementTypeSearchParameter" => "PlacementTypeSearchParameter",
      "Range" => "Range",
      "RelatedToQuerySearchParameter" => "RelatedToQuerySearchParameter",
      "RelatedToUrlSearchParameter" => "RelatedToUrlSearchParameter",
      "SearchParameter" => "SearchParameter",
      "SearchVolumeSearchParameter" => "SearchVolumeSearchParameter",
      "SeedAdGroupIdSearchParameter" => "SeedAdGroupIdSearchParameter",
      "StringAttribute" => "StringAttribute",
      "TargetingIdea" => "TargetingIdea",
      "TargetingIdeaError" => "TargetingIdeaError",
      "TargetingIdeaPage" => "TargetingIdeaPage",
      "TargetingIdeaSelector" => "TargetingIdeaSelector",
      "TextAdSpec" => "TextAdSpec",
      "TrafficEstimatorError" => "TrafficEstimatorError",
      "Type_AttributeMapEntry" => "Type_AttributeMapEntry",
      "WebpageDescriptor" => "WebpageDescriptor",
      "WebpageDescriptorAttribute" => "WebpageDescriptorAttribute",
      "AttributeType" => "AttributeType",
      "CompetitionSearchParameter.Level" => "CompetitionSearchParameterLevel",
      "CurrencyCodeError.Reason" => "CurrencyCodeErrorReason",
      "DisplayAdSpec.ActivationOption" => "DisplayAdSpecActivationOption",
      "HtmlDisplayType.HtmlOption" => "HtmlDisplayTypeHtmlOption",
      "IdeaType" => "IdeaType",
      "InStreamAdSpec.InStreamType" => "InStreamAdSpecInStreamType",
      "MatchesRegexError.Reason" => "MatchesRegexErrorReason",
      "OpportunityIdeaType" => "OpportunityIdeaType",
      "RequestType" => "RequestType",
      "SiteConstants.AdFormat" => "SiteConstantsAdFormat",
      "SiteConstants.PlacementType" => "SiteConstantsPlacementType",
      "TargetingIdeaError.Reason" => "TargetingIdeaErrorReason",
      "TrafficEstimatorError.Reason" => "TrafficEstimatorErrorReason",
      "get" => "TargetingIdeaServiceGet",
      "getResponse" => "TargetingIdeaServiceGetResponse",
      "getBulkKeywordIdeas" => "GetBulkKeywordIdeas",
      "getBulkKeywordIdeasResponse" => "GetBulkKeywordIdeasResponse",
    );

    /**
     * Constructor using wsdl location and options array
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl, $options, $user)
    {
        $options["classmap"] = self::$classmap;
        parent::__construct($wsdl, $options, $user, self::SERVICE_NAME,
          self::WSDL_NAMESPACE);
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
     * finding matches (similar keyword ideas/placement ideas).
     * @return A            {@link TargetingIdeaPage} of results, that is a subset of the
     *                      list of possible ideas meeting the criteria of the
     *                      {@link TargetingIdeaSelector}.
     * @throws ApiException If problems occurred while querying for ideas.
     */
    public function get($selector)
    {
        $args = new TargetingIdeaServiceGet($selector);
        $result = $this->__soapCall("get", array($args));

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
     * @return A            {@link TargetingIdeaPage} of results, that is a subset of the
     *                      list of possible ideas meeting the criteria of the
     *                      {@link TargetingIdeaSelector}.
     * @throws ApiException If problems occurred while querying for ideas.
     */
    public function getBulkKeywordIdeas($selector)
    {
        $args = new GetBulkKeywordIdeas($selector);
        $result = $this->__soapCall("getBulkKeywordIdeas", array($args));

        return $result->rval;
    }
  }
