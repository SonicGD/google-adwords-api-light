<?php

/**
 * DataService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class DataService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                      => "DataServiceGetResponse",
        "get"                              => "DataServiceGet",
        "mutate"                           => "DataServiceMutate",
        "mutateResponse"                   => "DataServiceMutateResponse",
        "DateTime"                         => "AdWordsDateTime",
        "SoapHeader"                       => "SoapRequestHeader",
        "AdGroupBidLandscape"              => "AdGroupBidLandscape",
        "BidLandscape"                     => "BidLandscape",
        "AdxError"                         => "AdxError",
        "ApiError"                         => "ApiError",
        "AuthenticationError"              => "AuthenticationError",
        "AuthorizationError"               => "AuthorizationError",
        "BetaError"                        => "BetaError",
        "ClientTermsError"                 => "ClientTermsError",
        "CriterionBidLandscape"            => "CriterionBidLandscape",
        "DateError"                        => "DateError",
        "DateRange"                        => "DateRange",
        "DistinctError"                    => "DistinctError",
        "DoubleValue"                      => "DoubleValue",
        "NumberValue"                      => "NumberValue",
        "IdError"                          => "IdError",
        "InternalApiError"                 => "InternalApiError",
        "LongValue"                        => "LongValue",
        "Money"                            => "Money",
        "ComparableValue"                  => "ComparableValue",
        "NotEmptyError"                    => "NotEmptyError",
        "NotWhitelistedError"              => "NotWhitelistedError",
        "NullError"                        => "NullError",
        "OrderBy"                          => "OrderBy",
        "Paging"                           => "Paging",
        "Predicate"                        => "Predicate",
        "QuotaCheckError"                  => "QuotaCheckError",
        "RangeError"                       => "RangeError",
        "RateExceededError"                => "RateExceededError",
        "ReadOnlyError"                    => "ReadOnlyError",
        "RejectedError"                    => "RejectedError",
        "RequestError"                     => "RequestError",
        "RequiredError"                    => "RequiredError",
        "SelectorError"                    => "SelectorError",
        "SizeLimitError"                   => "SizeLimitError",
        "SoapResponseHeader"               => "SoapResponseHeader",
        "StringLengthError"                => "StringLengthError",
        "DataError"                        => "DataError",
        "DatabaseError"                    => "DatabaseError",
        "ApiException"                     => "ApiException",
        "ApplicationException"             => "ApplicationException",
        "BidLandscape.LandscapePoint"      => "BidLandscapeLandscapePoint",
        "Selector"                         => "Selector",
        "DataEntry"                        => "DataEntry",
        "AdGroupBidLandscapePage"          => "AdGroupBidLandscapePage",
        "NoStatsPage"                      => "NoStatsPage",
        "CriterionBidLandscapePage"        => "CriterionBidLandscapePage",
        "Page"                             => "Page",
        "AdGroupBidLandscape.Type"         => "AdGroupBidLandscapeType",
        "AdxError.Reason"                  => "AdxErrorReason",
        "AuthenticationError.Reason"       => "AuthenticationErrorReason",
        "AuthorizationError.Reason"        => "AuthorizationErrorReason",
        "BetaError.Reason"                 => "BetaErrorReason",
        "ClientTermsError.Reason"          => "ClientTermsErrorReason",
        "DatabaseError.Reason"             => "DatabaseErrorReason",
        "DateError.Reason"                 => "DateErrorReason",
        "DistinctError.Reason"             => "DistinctErrorReason",
        "IdError.Reason"                   => "IdErrorReason",
        "InternalApiError.Reason"          => "InternalApiErrorReason",
        "NotEmptyError.Reason"             => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason"       => "NotWhitelistedErrorReason",
        "NullError.Reason"                 => "NullErrorReason",
        "Predicate.Operator"               => "PredicateOperator",
        "QuotaCheckError.Reason"           => "QuotaCheckErrorReason",
        "RangeError.Reason"                => "RangeErrorReason",
        "RateExceededError.Reason"         => "RateExceededErrorReason",
        "ReadOnlyError.Reason"             => "ReadOnlyErrorReason",
        "RejectedError.Reason"             => "RejectedErrorReason",
        "RequestError.Reason"              => "RequestErrorReason",
        "RequiredError.Reason"             => "RequiredErrorReason",
        "SelectorError.Reason"             => "SelectorErrorReason",
        "SizeLimitError.Reason"            => "SizeLimitErrorReason",
        "SortOrder"                        => "SortOrder",
        "StringLengthError.Reason"         => "StringLengthErrorReason",
        "DataError.Reason"                 => "DataErrorReason",
        "getAdGroupBidLandscape"           => "getAdGroupBidLandscape",
        "getAdGroupBidLandscapeResponse"   => "getAdGroupBidLandscapeResponse",
        "getCriterionBidLandscape"         => "getCriterionBidLandscape",
        "getCriterionBidLandscapeResponse" => "getCriterionBidLandscapeResponse",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/DataService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = DataService::$classmap;
        parent::__construct($wsdl, $options, $user, 'DataService', 'https://adwords.google.com/api/adwords/cm/v201306');
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns a list of bid landscapes for the ad groups specified in the selector.
     *
     * @param serviceSelector Selects the entities to return bid landscapes for.
     *
     * @return A list of bid landscapes.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getAdGroupBidLandscape($serviceSelector)
    {
        $arg = new getAdGroupBidLandscape($serviceSelector);
        $result = $this->__soapCall("getAdGroupBidLandscape", array($arg));
        return $result->rval;
    }


    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns a list of bid landscapes for the criteria specified in the selector.
     *
     * @param serviceSelector Selects the entities to return bid landscapes for.
     *
     * @return A list of bid landscapes.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getCriterionBidLandscape($serviceSelector)
    {
        $arg = new getCriterionBidLandscape($serviceSelector);
        $result = $this->__soapCall("getCriterionBidLandscape", array($arg));
        return $result->rval;
    }

}