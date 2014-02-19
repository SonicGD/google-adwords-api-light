<?php

require_once('ConstantDataService.require.php');


/**
 * ConstantDataService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 * @author     WSDLInterpreter
 */
class ConstantDataService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                                => "ConstantDataServiceGetResponse",
        "get"                                        => "ConstantDataServiceGet",
        "mutate"                                     => "ConstantDataServiceMutate",
        "mutateResponse"                             => "ConstantDataServiceMutateResponse",
        "mutateCallToAction"                         => "ConstantDataServiceMutateCallToAction",
        "search"                                     => "ConstantDataServiceSearch",
        "Function"                                   => "FeedFunction",
        "DateTime"                                   => "AdWordsDateTime",
        "SoapHeader"                                 => "SoapRequestHeader",
        "AdxError"                                   => "AdxError",
        "ApiError"                                   => "ApiError",
        "AgeRange"                                   => "AgeRange",
        "Criterion"                                  => "Criterion",
        "AuthenticationError"                        => "AuthenticationError",
        "AuthorizationError"                         => "AuthorizationError",
        "BetaError"                                  => "BetaError",
        "Carrier"                                    => "Carrier",
        "ClientTermsError"                           => "ClientTermsError",
        "DateError"                                  => "DateError",
        "DistinctError"                              => "DistinctError",
        "Gender"                                     => "Gender",
        "IdError"                                    => "IdError",
        "InternalApiError"                           => "InternalApiError",
        "Keyword"                                    => "Keyword",
        "Language"                                   => "Language",
        "MobileAppCategory"                          => "MobileAppCategory",
        "MobileApplication"                          => "MobileApplication",
        "MobileDevice"                               => "MobileDevice",
        "NotEmptyError"                              => "NotEmptyError",
        "NotWhitelistedError"                        => "NotWhitelistedError",
        "NullError"                                  => "NullError",
        "OperatingSystemVersion"                     => "OperatingSystemVersion",
        "Placement"                                  => "Placement",
        "ProductConditionOperand"                    => "ProductConditionOperand",
        "QuotaCheckError"                            => "QuotaCheckError",
        "RangeError"                                 => "RangeError",
        "RateExceededError"                          => "RateExceededError",
        "ReadOnlyError"                              => "ReadOnlyError",
        "RejectedError"                              => "RejectedError",
        "RequestError"                               => "RequestError",
        "RequiredError"                              => "RequiredError",
        "SelectorError"                              => "SelectorError",
        "SizeLimitError"                             => "SizeLimitError",
        "SoapResponseHeader"                         => "SoapResponseHeader",
        "StringLengthError"                          => "StringLengthError",
        "CriterionUserInterest"                      => "CriterionUserInterest",
        "CriterionUserList"                          => "CriterionUserList",
        "Vertical"                                   => "Vertical",
        "WebpageCondition"                           => "WebpageCondition",
        "WebpageParameter"                           => "WebpageParameter",
        "CriterionParameter"                         => "CriterionParameter",
        "DatabaseError"                              => "DatabaseError",
        "ProductCondition"                           => "ProductCondition",
        "Webpage"                                    => "Webpage",
        "ApiException"                               => "ApiException",
        "ApplicationException"                       => "ApplicationException",
        "Product"                                    => "Product",
        "AdxError.Reason"                            => "AdxErrorReason",
        "AgeRange.AgeRangeType"                      => "AgeRangeAgeRangeType",
        "AuthenticationError.Reason"                 => "AuthenticationErrorReason",
        "AuthorizationError.Reason"                  => "AuthorizationErrorReason",
        "BetaError.Reason"                           => "BetaErrorReason",
        "ClientTermsError.Reason"                    => "ClientTermsErrorReason",
        "Criterion.Type"                             => "CriterionType",
        "DatabaseError.Reason"                       => "DatabaseErrorReason",
        "DateError.Reason"                           => "DateErrorReason",
        "DistinctError.Reason"                       => "DistinctErrorReason",
        "Gender.GenderType"                          => "GenderGenderType",
        "IdError.Reason"                             => "IdErrorReason",
        "InternalApiError.Reason"                    => "InternalApiErrorReason",
        "KeywordMatchType"                           => "KeywordMatchType",
        "MobileDevice.DeviceType"                    => "MobileDeviceDeviceType",
        "NotEmptyError.Reason"                       => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason"                 => "NotWhitelistedErrorReason",
        "NullError.Reason"                           => "NullErrorReason",
        "OperatingSystemVersion.OperatorType"        => "OperatingSystemVersionOperatorType",
        "QuotaCheckError.Reason"                     => "QuotaCheckErrorReason",
        "RangeError.Reason"                          => "RangeErrorReason",
        "RateExceededError.Reason"                   => "RateExceededErrorReason",
        "ReadOnlyError.Reason"                       => "ReadOnlyErrorReason",
        "RejectedError.Reason"                       => "RejectedErrorReason",
        "RequestError.Reason"                        => "RequestErrorReason",
        "RequiredError.Reason"                       => "RequiredErrorReason",
        "SelectorError.Reason"                       => "SelectorErrorReason",
        "SizeLimitError.Reason"                      => "SizeLimitErrorReason",
        "StringLengthError.Reason"                   => "StringLengthErrorReason",
        "CriterionUserList.MembershipStatus"         => "CriterionUserListMembershipStatus",
        "WebpageConditionOperand"                    => "WebpageConditionOperand",
        "getAgeRangeCriterion"                       => "getAgeRangeCriterion",
        "getAgeRangeCriterionResponse"               => "getAgeRangeCriterionResponse",
        "getCarrierCriterion"                        => "getCarrierCriterion",
        "getCarrierCriterionResponse"                => "getCarrierCriterionResponse",
        "getGenderCriterion"                         => "getGenderCriterion",
        "getGenderCriterionResponse"                 => "getGenderCriterionResponse",
        "getLanguageCriterion"                       => "getLanguageCriterion",
        "getLanguageCriterionResponse"               => "getLanguageCriterionResponse",
        "getMobileDeviceCriterion"                   => "getMobileDeviceCriterion",
        "getMobileDeviceCriterionResponse"           => "getMobileDeviceCriterionResponse",
        "getOperatingSystemVersionCriterion"         => "getOperatingSystemVersionCriterion",
        "getOperatingSystemVersionCriterionResponse" => "getOperatingSystemVersionCriterionResponse",
        "getUserInterestCriterion"                   => "getUserInterestCriterion",
        "getUserInterestCriterionResponse"           => "getUserInterestCriterionResponse",
        "getVerticalCriterion"                       => "getVerticalCriterion",
        "getVerticalCriterionResponse"               => "getVerticalCriterionResponse",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201309/ConstantDataService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = ConstantDataService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'ConstantDataService',
            'https://adwords.google.com/api/adwords/cm/v201309'
        );
    }

    /**
     * Returns a list of all age range criteria.
     *
     * @return A list of age ranges.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getAgeRangeCriterion()
    {
        $arg = new getAgeRangeCriterion();
        $result = $this->__soapCall("getAgeRangeCriterion", array($arg));
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
        $arg = new getCarrierCriterion();
        $result = $this->__soapCall("getCarrierCriterion", array($arg));
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
        $arg = new getGenderCriterion();
        $result = $this->__soapCall("getGenderCriterion", array($arg));
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
        $arg = new getLanguageCriterion();
        $result = $this->__soapCall("getLanguageCriterion", array($arg));
        return $result->rval;
    }


    /**
     * Returns a list of all mobile devices.
     *
     * @return A list of mobile devices.
     * @throws ApiException when there is at least one error with the request.
     * <span class="constraint Beta">This is a beta feature.</span>
     */
    public function getMobileDeviceCriterion()
    {
        $arg = new getMobileDeviceCriterion();
        $result = $this->__soapCall("getMobileDeviceCriterion", array($arg));
        return $result->rval;
    }


    /**
     * Returns a list of all operating system version criteria.
     *
     * @return A list of operating system versions.
     * @throws ApiException when there is at least one error with the request.
     * <span class="constraint Beta">This is a beta feature.</span>
     */
    public function getOperatingSystemVersionCriterion()
    {
        $arg = new getOperatingSystemVersionCriterion();
        $result = $this->__soapCall("getOperatingSystemVersionCriterion", array($arg));
        return $result->rval;
    }


    /**
     * Returns a list of user interests.
     *
     * @return A list of user interests.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getUserInterestCriterion()
    {
        $arg = new getUserInterestCriterion();
        $result = $this->__soapCall("getUserInterestCriterion", array($arg));
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
        $arg = new getVerticalCriterion();
        $result = $this->__soapCall("getVerticalCriterion", array($arg));
        return $result->rval;
    }

}