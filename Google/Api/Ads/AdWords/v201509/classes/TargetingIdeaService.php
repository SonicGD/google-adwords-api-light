<?php

require_once('TargetingIdeaService.require.php');


/**
 * TargetingIdeaService
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class TargetingIdeaService extends AdWordsSoapClient
{

    const SERVICE_NAME = "TargetingIdeaService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201509";
    const ENDPOINT = "https://adwords.google.com/api/adwords/o/v201509/TargetingIdeaService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/o/v201509/TargetingIdeaService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = [
        "AdGroupCriterionError"                           => "AdGroupCriterionError",
        "AdGroupCriterionLimitExceeded"                   => "AdGroupCriterionLimitExceeded",
        "AdxError"                                        => "AdxError",
        "ApiError"                                        => "ApiError",
        "ApiException"                                    => "ApiException",
        "ApplicationException"                            => "ApplicationException",
        "AuthenticationError"                             => "AuthenticationError",
        "AuthorizationError"                              => "AuthorizationError",
        "BudgetError"                                     => "BudgetError",
        "ClientTermsError"                                => "ClientTermsError",
        "CollectionSizeError"                             => "CollectionSizeError",
        "ComparableValue"                                 => "ComparableValue",
        "Criterion"                                       => "Criterion",
        "CriterionError"                                  => "CriterionError",
        "CriterionPolicyError"                            => "CriterionPolicyError",
        "DatabaseError"                                   => "DatabaseError",
        "DateError"                                       => "DateError",
        "DistinctError"                                   => "DistinctError",
        "DoubleValue"                                     => "DoubleValue",
        "EntityCountLimitExceeded"                        => "EntityCountLimitExceeded",
        "EntityNotFound"                                  => "EntityNotFound",
        "IdError"                                         => "IdError",
        "InternalApiError"                                => "InternalApiError",
        "Keyword"                                         => "Keyword",
        "Language"                                        => "Language",
        "Location"                                        => "Location",
        "LongValue"                                       => "LongValue",
        "MobileAppCategory"                               => "MobileAppCategory",
        "MobileApplication"                               => "MobileApplication",
        "Money"                                           => "Money",
        "NetworkSetting"                                  => "NetworkSetting",
        "NotEmptyError"                                   => "NotEmptyError",
        "NullError"                                       => "NullError",
        "NumberValue"                                     => "NumberValue",
        "OperationAccessDenied"                           => "OperationAccessDenied",
        "Paging"                                          => "Paging",
        "Placement"                                       => "Placement",
        "Platform"                                        => "Platform",
        "PolicyViolationError"                            => "PolicyViolationError",
        "PolicyViolationError.Part"                       => "PolicyViolationErrorPart",
        "PolicyViolationKey"                              => "PolicyViolationKey",
        "QuotaCheckError"                                 => "QuotaCheckError",
        "RangeError"                                      => "RangeError",
        "RateExceededError"                               => "RateExceededError",
        "ReadOnlyError"                                   => "ReadOnlyError",
        "RegionCodeError"                                 => "RegionCodeError",
        "RejectedError"                                   => "RejectedError",
        "RequestError"                                    => "RequestError",
        "RequiredError"                                   => "RequiredError",
        "SizeLimitError"                                  => "SizeLimitError",
        "SoapHeader"                                      => "SoapRequestHeader",
        "SoapResponseHeader"                              => "SoapResponseHeader",
        "StatsQueryError"                                 => "StatsQueryError",
        "StringFormatError"                               => "StringFormatError",
        "StringLengthError"                               => "StringLengthError",
        "CriterionUserInterest"                           => "CriterionUserInterest",
        "CriterionUserList"                               => "CriterionUserList",
        "Vertical"                                        => "Vertical",
        "AdGroupCriterionError.Reason"                    => "AdGroupCriterionErrorReason",
        "AdGroupCriterionLimitExceeded.CriteriaLimitType" => "AdGroupCriterionLimitExceededCriteriaLimitType",
        "AdxError.Reason"                                 => "AdxErrorReason",
        "AuthenticationError.Reason"                      => "AuthenticationErrorReason",
        "AuthorizationError.Reason"                       => "AuthorizationErrorReason",
        "BudgetError.Reason"                              => "BudgetErrorReason",
        "ClientTermsError.Reason"                         => "ClientTermsErrorReason",
        "CollectionSizeError.Reason"                      => "CollectionSizeErrorReason",
        "Criterion.Type"                                  => "CriterionType",
        "CriterionError.Reason"                           => "CriterionErrorReason",
        "DatabaseError.Reason"                            => "DatabaseErrorReason",
        "DateError.Reason"                                => "DateErrorReason",
        "DistinctError.Reason"                            => "DistinctErrorReason",
        "EntityCountLimitExceeded.Reason"                 => "EntityCountLimitExceededReason",
        "EntityNotFound.Reason"                           => "EntityNotFoundReason",
        "IdError.Reason"                                  => "IdErrorReason",
        "InternalApiError.Reason"                         => "InternalApiErrorReason",
        "KeywordMatchType"                                => "KeywordMatchType",
        "LocationTargetingStatus"                         => "LocationTargetingStatus",
        "NotEmptyError.Reason"                            => "NotEmptyErrorReason",
        "NullError.Reason"                                => "NullErrorReason",
        "OperationAccessDenied.Reason"                    => "OperationAccessDeniedReason",
        "QuotaCheckError.Reason"                          => "QuotaCheckErrorReason",
        "RangeError.Reason"                               => "RangeErrorReason",
        "RateExceededError.Reason"                        => "RateExceededErrorReason",
        "ReadOnlyError.Reason"                            => "ReadOnlyErrorReason",
        "RegionCodeError.Reason"                          => "RegionCodeErrorReason",
        "RejectedError.Reason"                            => "RejectedErrorReason",
        "RequestError.Reason"                             => "RequestErrorReason",
        "RequiredError.Reason"                            => "RequiredErrorReason",
        "SizeLimitError.Reason"                           => "SizeLimitErrorReason",
        "StatsQueryError.Reason"                          => "StatsQueryErrorReason",
        "StringFormatError.Reason"                        => "StringFormatErrorReason",
        "StringLengthError.Reason"                        => "StringLengthErrorReason",
        "CriterionUserList.MembershipStatus"              => "CriterionUserListMembershipStatus",
        "Attribute"                                       => "Attribute",
        "BooleanAttribute"                                => "BooleanAttribute",
        "CategoryProductsAndServicesSearchParameter"      => "CategoryProductsAndServicesSearchParameter",
        "CompetitionSearchParameter"                      => "CompetitionSearchParameter",
        "CriterionAttribute"                              => "CriterionAttribute",
        "CurrencyCodeError"                               => "CurrencyCodeError",
        "DoubleAttribute"                                 => "DoubleAttribute",
        "IdeaTextFilterSearchParameter"                   => "IdeaTextFilterSearchParameter",
        "IdeaTypeAttribute"                               => "IdeaTypeAttribute",
        "IncludeAdultContentSearchParameter"              => "IncludeAdultContentSearchParameter",
        "IntegerAttribute"                                => "IntegerAttribute",
        "IntegerSetAttribute"                             => "IntegerSetAttribute",
        "KeywordAttribute"                                => "KeywordAttribute",
        "LanguageSearchParameter"                         => "LanguageSearchParameter",
        "LocationSearchParameter"                         => "LocationSearchParameter",
        "LongAttribute"                                   => "LongAttribute",
        "LongComparisonOperation"                         => "LongComparisonOperation",
        "LongRangeAttribute"                              => "LongRangeAttribute",
        "MoneyAttribute"                                  => "MoneyAttribute",
        "MonthlySearchVolume"                             => "MonthlySearchVolume",
        "MonthlySearchVolumeAttribute"                    => "MonthlySearchVolumeAttribute",
        "NetworkSearchParameter"                          => "NetworkSearchParameter",
        "Range"                                           => "Range",
        "RelatedToQuerySearchParameter"                   => "RelatedToQuerySearchParameter",
        "RelatedToUrlSearchParameter"                     => "RelatedToUrlSearchParameter",
        "SearchParameter"                                 => "SearchParameter",
        "SearchVolumeSearchParameter"                     => "SearchVolumeSearchParameter",
        "SeedAdGroupIdSearchParameter"                    => "SeedAdGroupIdSearchParameter",
        "StringAttribute"                                 => "StringAttribute",
        "TargetingIdea"                                   => "TargetingIdea",
        "TargetingIdeaError"                              => "TargetingIdeaError",
        "TargetingIdeaPage"                               => "TargetingIdeaPage",
        "TargetingIdeaSelector"                           => "TargetingIdeaSelector",
        "TrafficEstimatorError"                           => "TrafficEstimatorError",
        "Type_AttributeMapEntry"                          => "Type_AttributeMapEntry",
        "WebpageDescriptor"                               => "WebpageDescriptor",
        "WebpageDescriptorAttribute"                      => "WebpageDescriptorAttribute",
        "AttributeType"                                   => "AttributeType",
        "CompetitionSearchParameter.Level"                => "CompetitionSearchParameterLevel",
        "CurrencyCodeError.Reason"                        => "CurrencyCodeErrorReason",
        "IdeaType"                                        => "IdeaType",
        "RequestType"                                     => "RequestType",
        "TargetingIdeaError.Reason"                       => "TargetingIdeaErrorReason",
        "TrafficEstimatorError.Reason"                    => "TrafficEstimatorErrorReason",
        "get"                                             => "TargetingIdeaServiceGet",
        "getResponse"                                     => "TargetingIdeaServiceGetResponse",
    ];


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
     * paging {@code startIndex} value by {@code numberResults} with each call.</p>
     *
     * @param selector Query describing the types of results to return when
     *                 finding matches (similar keyword ideas/placement ideas).
     * @return A {@link TargetingIdeaPage} of results, that is a subset of the
     *                 list of possible ideas meeting the criteria of the
     *                 {@link TargetingIdeaSelector}.
     * @throws ApiException If problems occurred while querying for ideas.
     */
    public function get($selector)
    {
        $args = new TargetingIdeaServiceGet($selector);
        $result = $this->__soapCall("get", [$args]);
        return $result->rval;
    }
}