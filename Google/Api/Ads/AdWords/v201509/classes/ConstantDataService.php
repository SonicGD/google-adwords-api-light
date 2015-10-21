<?php

require_once('ConstantDataService.require.php');


/**
 * ConstantDataService
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class ConstantDataService extends AdWordsSoapClient
{

    const SERVICE_NAME = "ConstantDataService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201509/ConstantDataService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201509/ConstantDataService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = [
        "AdxError"                                     => "AdxError",
        "AgeRange"                                     => "AgeRange",
        "AuthenticationError"                          => "AuthenticationError",
        "AuthorizationError"                           => "AuthorizationError",
        "Carrier"                                      => "Carrier",
        "ClientTermsError"                             => "ClientTermsError",
        "DateError"                                    => "DateError",
        "DateRange"                                    => "DateRange",
        "DistinctError"                                => "DistinctError",
        "Gender"                                       => "Gender",
        "IdError"                                      => "IdError",
        "InternalApiError"                             => "InternalApiError",
        "Keyword"                                      => "Keyword",
        "Language"                                     => "Language",
        "MobileAppCategory"                            => "MobileAppCategory",
        "MobileApplication"                            => "MobileApplication",
        "MobileDevice"                                 => "MobileDevice",
        "NotEmptyError"                                => "NotEmptyError",
        "NullError"                                    => "NullError",
        "OperatingSystemVersion"                       => "OperatingSystemVersion",
        "OperationAccessDenied"                        => "OperationAccessDenied",
        "OrderBy"                                      => "OrderBy",
        "Paging"                                       => "Paging",
        "Placement"                                    => "Placement",
        "Predicate"                                    => "Predicate",
        "ProductAdwordsGrouping"                       => "ProductAdwordsGrouping",
        "ProductAdwordsLabels"                         => "ProductAdwordsLabels",
        "ProductBiddingCategory"                       => "ProductBiddingCategory",
        "ProductBrand"                                 => "ProductBrand",
        "ProductCanonicalCondition"                    => "ProductCanonicalCondition",
        "ProductChannel"                               => "ProductChannel",
        "ProductChannelExclusivity"                    => "ProductChannelExclusivity",
        "ProductLegacyCondition"                       => "ProductLegacyCondition",
        "ProductCustomAttribute"                       => "ProductCustomAttribute",
        "ProductOfferId"                               => "ProductOfferId",
        "ProductType"                                  => "ProductType",
        "ProductTypeFull"                              => "ProductTypeFull",
        "QuotaCheckError"                              => "QuotaCheckError",
        "RangeError"                                   => "RangeError",
        "RateExceededError"                            => "RateExceededError",
        "ReadOnlyError"                                => "ReadOnlyError",
        "RejectedError"                                => "RejectedError",
        "RequestError"                                 => "RequestError",
        "RequiredError"                                => "RequiredError",
        "SelectorError"                                => "SelectorError",
        "SizeLimitError"                               => "SizeLimitError",
        "SoapHeader"                                   => "SoapRequestHeader",
        "SoapResponseHeader"                           => "SoapResponseHeader",
        "StringLengthError"                            => "StringLengthError",
        "String_StringMapEntry"                        => "String_StringMapEntry",
        "UnknownProductDimension"                      => "UnknownProductDimension",
        "CriterionUserInterest"                        => "CriterionUserInterest",
        "CriterionUserList"                            => "CriterionUserList",
        "Vertical"                                     => "Vertical",
        "DatabaseError"                                => "DatabaseError",
        "ProductDimension"                             => "ProductDimension",
        "ApiError"                                     => "ApiError",
        "ApiException"                                 => "ApiException",
        "ApplicationException"                         => "ApplicationException",
        "ProductBiddingCategoryData"                   => "ProductBiddingCategoryData",
        "Selector"                                     => "Selector",
        "ConstantData"                                 => "ConstantData",
        "Criterion"                                    => "Criterion",
        "AdxError.Reason"                              => "AdxErrorReason",
        "AgeRange.AgeRangeType"                        => "AgeRangeAgeRangeType",
        "AuthenticationError.Reason"                   => "AuthenticationErrorReason",
        "AuthorizationError.Reason"                    => "AuthorizationErrorReason",
        "ClientTermsError.Reason"                      => "ClientTermsErrorReason",
        "ConstantDataService.UserInterestTaxonomyType" => "ConstantDataServiceUserInterestTaxonomyType",
        "Criterion.Type"                               => "CriterionType",
        "DatabaseError.Reason"                         => "DatabaseErrorReason",
        "DateError.Reason"                             => "DateErrorReason",
        "DistinctError.Reason"                         => "DistinctErrorReason",
        "Gender.GenderType"                            => "GenderGenderType",
        "IdError.Reason"                               => "IdErrorReason",
        "InternalApiError.Reason"                      => "InternalApiErrorReason",
        "KeywordMatchType"                             => "KeywordMatchType",
        "MobileDevice.DeviceType"                      => "MobileDeviceDeviceType",
        "NotEmptyError.Reason"                         => "NotEmptyErrorReason",
        "NullError.Reason"                             => "NullErrorReason",
        "OperatingSystemVersion.OperatorType"          => "OperatingSystemVersionOperatorType",
        "OperationAccessDenied.Reason"                 => "OperationAccessDeniedReason",
        "Predicate.Operator"                           => "PredicateOperator",
        "ProductCanonicalCondition.Condition"          => "ProductCanonicalConditionCondition",
        "ProductDimensionType"                         => "ProductDimensionType",
        "QuotaCheckError.Reason"                       => "QuotaCheckErrorReason",
        "RangeError.Reason"                            => "RangeErrorReason",
        "RateExceededError.Reason"                     => "RateExceededErrorReason",
        "ReadOnlyError.Reason"                         => "ReadOnlyErrorReason",
        "RejectedError.Reason"                         => "RejectedErrorReason",
        "RequestError.Reason"                          => "RequestErrorReason",
        "RequiredError.Reason"                         => "RequiredErrorReason",
        "SelectorError.Reason"                         => "SelectorErrorReason",
        "ShoppingBiddingDimensionStatus"               => "ShoppingBiddingDimensionStatus",
        "ShoppingProductChannel"                       => "ShoppingProductChannel",
        "ShoppingProductChannelExclusivity"            => "ShoppingProductChannelExclusivity",
        "SizeLimitError.Reason"                        => "SizeLimitErrorReason",
        "SortOrder"                                    => "SortOrder",
        "StringLengthError.Reason"                     => "StringLengthErrorReason",
        "CriterionUserList.MembershipStatus"           => "CriterionUserListMembershipStatus",
        "getAgeRangeCriterion"                         => "GetAgeRangeCriterion",
        "getAgeRangeCriterionResponse"                 => "GetAgeRangeCriterionResponse",
        "getCarrierCriterion"                          => "GetCarrierCriterion",
        "getCarrierCriterionResponse"                  => "GetCarrierCriterionResponse",
        "getGenderCriterion"                           => "GetGenderCriterion",
        "getGenderCriterionResponse"                   => "GetGenderCriterionResponse",
        "getLanguageCriterion"                         => "GetLanguageCriterion",
        "getLanguageCriterionResponse"                 => "GetLanguageCriterionResponse",
        "getMobileDeviceCriterion"                     => "GetMobileDeviceCriterion",
        "getMobileDeviceCriterionResponse"             => "GetMobileDeviceCriterionResponse",
        "getOperatingSystemVersionCriterion"           => "GetOperatingSystemVersionCriterion",
        "getOperatingSystemVersionCriterionResponse"   => "GetOperatingSystemVersionCriterionResponse",
        "getProductBiddingCategoryData"                => "GetProductBiddingCategoryData",
        "getProductBiddingCategoryDataResponse"        => "GetProductBiddingCategoryDataResponse",
        "getUserInterestCriterion"                     => "GetUserInterestCriterion",
        "getUserInterestCriterionResponse"             => "GetUserInterestCriterionResponse",
        "getVerticalCriterion"                         => "GetVerticalCriterion",
        "getVerticalCriterionResponse"                 => "GetVerticalCriterionResponse",
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
     * Returns a list of all age range criteria.
     *
     * @return A list of age ranges.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getAgeRangeCriterion()
    {
        $args = new GetAgeRangeCriterion();
        $result = $this->__soapCall("getAgeRangeCriterion", [$args]);
        return $result->rval;
    }

    /**
     * Returns a list of all carrier criteria.
     *
     * @return A list of carriers.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getCarrierCriterion()
    {
        $args = new GetCarrierCriterion();
        $result = $this->__soapCall("getCarrierCriterion", [$args]);
        return $result->rval;
    }

    /**
     * Returns a list of all gender criteria.
     *
     * @return A list of genders.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getGenderCriterion()
    {
        $args = new GetGenderCriterion();
        $result = $this->__soapCall("getGenderCriterion", [$args]);
        return $result->rval;
    }

    /**
     * Returns a list of all language criteria.
     *
     * @return A list of languages.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getLanguageCriterion()
    {
        $args = new GetLanguageCriterion();
        $result = $this->__soapCall("getLanguageCriterion", [$args]);
        return $result->rval;
    }

    /**
     * Returns a list of all mobile devices.
     *
     * @return A list of mobile devices.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getMobileDeviceCriterion()
    {
        $args = new GetMobileDeviceCriterion();
        $result = $this->__soapCall("getMobileDeviceCriterion", [$args]);
        return $result->rval;
    }

    /**
     * Returns a list of all operating system version criteria.
     *
     * @return A list of operating system versions.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getOperatingSystemVersionCriterion()
    {
        $args = new GetOperatingSystemVersionCriterion();
        $result = $this->__soapCall("getOperatingSystemVersionCriterion", [$args]);
        return $result->rval;
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns a list of shopping bidding categories.
     *
     * A country predicate must be included in the selector, only {@link Predicate.Operator#EQUALS}
     * and {@link Predicate.Operator#IN} with a single value are supported in the country predicate.
     * An empty parentDimensionType predicate will filter for root categories.
     *
     * @return A list of shopping bidding categories.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getProductBiddingCategoryData($selector)
    {
        $args = new GetProductBiddingCategoryData($selector);
        $result = $this->__soapCall("getProductBiddingCategoryData", [$args]);
        return $result->rval;
    }

    /**
     * Returns a list of user interests.
     *
     * @param userInterestTaxonomyType The type of taxonomy to use when requesting user interests.
     * @return A list of user interests.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getUserInterestCriterion($userInterestTaxonomyType)
    {
        $args = new GetUserInterestCriterion($userInterestTaxonomyType);
        $result = $this->__soapCall("getUserInterestCriterion", [$args]);
        return $result->rval;
    }

    /**
     * Returns a list of content verticals.
     *
     * @return A list of verticals.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getVerticalCriterion()
    {
        $args = new GetVerticalCriterion();
        $result = $this->__soapCall("getVerticalCriterion", [$args]);
        return $result->rval;
    }
}