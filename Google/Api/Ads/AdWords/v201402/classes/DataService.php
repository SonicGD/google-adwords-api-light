<?php

require_once('DataService.require.php');


/**
 * DataService
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class DataService extends AdWordsSoapClient
{

    const SERVICE_NAME = "DataService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201402/DataService";

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public $endpoint = "https://adwords.google.com/api/adwords/cm/v201402/DataService";
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "AdGroupBidLandscape"                => "AdGroupBidLandscape",
        "AdxError"                           => "AdxError",
        "AuthenticationError"                => "AuthenticationError",
        "AuthorizationError"                 => "AuthorizationError",
        "ClientTermsError"                   => "ClientTermsError",
        "CriterionBidLandscape"              => "CriterionBidLandscape",
        "DateError"                          => "DateError",
        "DateRange"                          => "DateRange",
        "DistinctError"                      => "DistinctError",
        "DoubleValue"                        => "DoubleValue",
        "IdError"                            => "IdError",
        "InternalApiError"                   => "InternalApiError",
        "LongValue"                          => "LongValue",
        "Money"                              => "Money",
        "NotEmptyError"                      => "NotEmptyError",
        "NullError"                          => "NullError",
        "NumberValue"                        => "NumberValue",
        "OrderBy"                            => "OrderBy",
        "Paging"                             => "Paging",
        "Predicate"                          => "Predicate",
        "QueryError"                         => "QueryError",
        "QuotaCheckError"                    => "QuotaCheckError",
        "RangeError"                         => "RangeError",
        "RateExceededError"                  => "RateExceededError",
        "ReadOnlyError"                      => "ReadOnlyError",
        "RejectedError"                      => "RejectedError",
        "RequestError"                       => "RequestError",
        "RequiredError"                      => "RequiredError",
        "SelectorError"                      => "SelectorError",
        "SizeLimitError"                     => "SizeLimitError",
        "SoapHeader"                         => "SoapRequestHeader",
        "SoapResponseHeader"                 => "SoapResponseHeader",
        "StringLengthError"                  => "StringLengthError",
        "DataError"                          => "DataError",
        "ComparableValue"                    => "ComparableValue",
        "DatabaseError"                      => "DatabaseError",
        "ApiError"                           => "ApiError",
        "ApiException"                       => "ApiException",
        "ApplicationException"               => "ApplicationException",
        "BidLandscape.LandscapePoint"        => "BidLandscapeLandscapePoint",
        "Selector"                           => "Selector",
        "BidLandscape"                       => "BidLandscape",
        "DataEntry"                          => "DataEntry",
        "AdGroupBidLandscapePage"            => "AdGroupBidLandscapePage",
        "CriterionBidLandscapePage"          => "CriterionBidLandscapePage",
        "NoStatsPage"                        => "NoStatsPage",
        "Page"                               => "Page",
        "AdGroupBidLandscape.Type"           => "AdGroupBidLandscapeType",
        "AdxError.Reason"                    => "AdxErrorReason",
        "AuthenticationError.Reason"         => "AuthenticationErrorReason",
        "AuthorizationError.Reason"          => "AuthorizationErrorReason",
        "ClientTermsError.Reason"            => "ClientTermsErrorReason",
        "DatabaseError.Reason"               => "DatabaseErrorReason",
        "DateError.Reason"                   => "DateErrorReason",
        "DistinctError.Reason"               => "DistinctErrorReason",
        "IdError.Reason"                     => "IdErrorReason",
        "InternalApiError.Reason"            => "InternalApiErrorReason",
        "NotEmptyError.Reason"               => "NotEmptyErrorReason",
        "NullError.Reason"                   => "NullErrorReason",
        "Predicate.Operator"                 => "PredicateOperator",
        "QueryError.Reason"                  => "QueryErrorReason",
        "QuotaCheckError.Reason"             => "QuotaCheckErrorReason",
        "RangeError.Reason"                  => "RangeErrorReason",
        "RateExceededError.Reason"           => "RateExceededErrorReason",
        "ReadOnlyError.Reason"               => "ReadOnlyErrorReason",
        "RejectedError.Reason"               => "RejectedErrorReason",
        "RequestError.Reason"                => "RequestErrorReason",
        "RequiredError.Reason"               => "RequiredErrorReason",
        "SelectorError.Reason"               => "SelectorErrorReason",
        "SizeLimitError.Reason"              => "SizeLimitErrorReason",
        "SortOrder"                          => "SortOrder",
        "StringLengthError.Reason"           => "StringLengthErrorReason",
        "DataError.Reason"                   => "DataErrorReason",
        "getAdGroupBidLandscape"             => "GetAdGroupBidLandscape",
        "getAdGroupBidLandscapeResponse"     => "GetAdGroupBidLandscapeResponse",
        "getCriterionBidLandscape"           => "GetCriterionBidLandscape",
        "getCriterionBidLandscapeResponse"   => "GetCriterionBidLandscapeResponse",
        "queryAdGroupBidLandscape"           => "QueryAdGroupBidLandscape",
        "queryAdGroupBidLandscapeResponse"   => "QueryAdGroupBidLandscapeResponse",
        "queryCriterionBidLandscape"         => "QueryCriterionBidLandscape",
        "queryCriterionBidLandscapeResponse" => "QueryCriterionBidLandscapeResponse",
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
     * Returns a list of bid landscapes for the ad groups specified in the selector.
     *
     * @param serviceSelector Selects the entities to return bid landscapes for.
     *
     * @return A list of bid landscapes.
     * @throws ApiException when there is at least one error with the request.
     */
    public function getAdGroupBidLandscape($serviceSelector)
    {
        $args = new GetAdGroupBidLandscape($serviceSelector);
        $result = $this->__soapCall("getAdGroupBidLandscape", array($args));
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
        $args = new GetCriterionBidLandscape($serviceSelector);
        $result = $this->__soapCall("getCriterionBidLandscape", array($args));
        return $result->rval;
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns a list of bid landscapes for the ad groups that match the query.
     *
     * @param query The SQL-like AWQL query string.
     *
     * @return A list of bid landscapes.
     * @throws ApiException if problems occur while parsing the query or fetching bid landscapes.
     */
    public function queryAdGroupBidLandscape($query)
    {
        $args = new QueryAdGroupBidLandscape($query);
        $result = $this->__soapCall("queryAdGroupBidLandscape", array($args));
        return $result->rval;
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns a list of bid landscapes for the criteria that match the query.
     *
     * @param query The SQL-like AWQL query string.
     *
     * @return A list of bid landscapes.
     * @throws ApiException if problems occur while parsing the query or fetching bid landscapes.
     */
    public function queryCriterionBidLandscape($query)
    {
        $args = new QueryCriterionBidLandscape($query);
        $result = $this->__soapCall("queryCriterionBidLandscape", array($args));
        return $result->rval;
    }
}