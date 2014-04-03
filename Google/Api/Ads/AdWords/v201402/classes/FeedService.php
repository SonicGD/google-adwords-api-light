<?php

require_once('FeedService.require.php');


/**
 * FeedService
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class FeedService extends AdWordsSoapClient
{

    const SERVICE_NAME = "FeedService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201402/FeedService";

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public $endpoint = "https://adwords.google.com/api/adwords/cm/v201402/FeedService";
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "AuthenticationError"             => "AuthenticationError",
        "AuthorizationError"              => "AuthorizationError",
        "ClientTermsError"                => "ClientTermsError",
        "DateRange"                       => "DateRange",
        "DistinctError"                   => "DistinctError",
        "EntityCountLimitExceeded"        => "EntityCountLimitExceeded",
        "EntityNotFound"                  => "EntityNotFound",
        "FeedAttribute"                   => "FeedAttribute",
        "FeedError"                       => "FeedError",
        "IdError"                         => "IdError",
        "InternalApiError"                => "InternalApiError",
        "NewEntityCreationError"          => "NewEntityCreationError",
        "NotEmptyError"                   => "NotEmptyError",
        "NullError"                       => "NullError",
        "OAuthInfo"                       => "OAuthInfo",
        "OperationAccessDenied"           => "OperationAccessDenied",
        "OrderBy"                         => "OrderBy",
        "Paging"                          => "Paging",
        "Predicate"                       => "Predicate",
        "QueryError"                      => "QueryError",
        "QuotaCheckError"                 => "QuotaCheckError",
        "RangeError"                      => "RangeError",
        "RateExceededError"               => "RateExceededError",
        "ReadOnlyError"                   => "ReadOnlyError",
        "RejectedError"                   => "RejectedError",
        "RequestError"                    => "RequestError",
        "RequiredError"                   => "RequiredError",
        "SelectorError"                   => "SelectorError",
        "SizeLimitError"                  => "SizeLimitError",
        "SoapHeader"                      => "SoapRequestHeader",
        "SoapResponseHeader"              => "SoapResponseHeader",
        "StringLengthError"               => "StringLengthError",
        "PlacesLocationFeedData"          => "PlacesLocationFeedData",
        "DatabaseError"                   => "DatabaseError",
        "SystemFeedGenerationData"        => "SystemFeedGenerationData",
        "ApiError"                        => "ApiError",
        "ApiException"                    => "ApiException",
        "ApplicationException"            => "ApplicationException",
        "Feed"                            => "Feed",
        "FeedOperation"                   => "FeedOperation",
        "FeedPage"                        => "FeedPage",
        "FeedReturnValue"                 => "FeedReturnValue",
        "ListReturnValue"                 => "ListReturnValue",
        "NullStatsPage"                   => "NullStatsPage",
        "Operation"                       => "Operation",
        "Page"                            => "Page",
        "Selector"                        => "Selector",
        "AuthenticationError.Reason"      => "AuthenticationErrorReason",
        "AuthorizationError.Reason"       => "AuthorizationErrorReason",
        "ClientTermsError.Reason"         => "ClientTermsErrorReason",
        "DatabaseError.Reason"            => "DatabaseErrorReason",
        "DistinctError.Reason"            => "DistinctErrorReason",
        "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
        "EntityNotFound.Reason"           => "EntityNotFoundReason",
        "Feed.Origin"                     => "FeedOrigin",
        "Feed.Status"                     => "FeedStatus",
        "FeedAttribute.Type"              => "FeedAttributeType",
        "FeedError.Reason"                => "FeedErrorReason",
        "IdError.Reason"                  => "IdErrorReason",
        "InternalApiError.Reason"         => "InternalApiErrorReason",
        "NewEntityCreationError.Reason"   => "NewEntityCreationErrorReason",
        "NotEmptyError.Reason"            => "NotEmptyErrorReason",
        "NullError.Reason"                => "NullErrorReason",
        "OperationAccessDenied.Reason"    => "OperationAccessDeniedReason",
        "Operator"                        => "Operator",
        "Predicate.Operator"              => "PredicateOperator",
        "QueryError.Reason"               => "QueryErrorReason",
        "QuotaCheckError.Reason"          => "QuotaCheckErrorReason",
        "RangeError.Reason"               => "RangeErrorReason",
        "RateExceededError.Reason"        => "RateExceededErrorReason",
        "ReadOnlyError.Reason"            => "ReadOnlyErrorReason",
        "RejectedError.Reason"            => "RejectedErrorReason",
        "RequestError.Reason"             => "RequestErrorReason",
        "RequiredError.Reason"            => "RequiredErrorReason",
        "SelectorError.Reason"            => "SelectorErrorReason",
        "SizeLimitError.Reason"           => "SizeLimitErrorReason",
        "SortOrder"                       => "SortOrder",
        "StringLengthError.Reason"        => "StringLengthErrorReason",
        "get"                             => "FeedServiceGet",
        "getResponse"                     => "FeedServiceGetResponse",
        "mutate"                          => "FeedServiceMutate",
        "mutateResponse"                  => "FeedServiceMutateResponse",
        "query"                           => "Query",
        "queryResponse"                   => "QueryResponse",
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
     * Returns a list of Feeds that meet the selector criteria.
     *
     * @param selector Determines which Feeds to return. If empty all
     *                 Feeds are returned.
     *
     * @return The list of Feeds.
     * @throws ApiException Indicates a problem with the request.
     */
    public function get($selector)
    {
        $args = new FeedServiceGet($selector);
        $result = $this->__soapCall("get", array($args));
        return $result->rval;
    }

    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Add, remove, and set Feeds.
     *
     * @param operations The operations to apply.
     *
     * @return The resulting Feeds.
     * @throws ApiException Indicates a problem with the request.
     */
    public function mutate($operations)
    {
        $args = new FeedServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));
        return $result->rval;
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the list of Feed that match the query.
     *
     * @param query The SQL-like AWQL query string.
     *
     * @returns A list of Feed.
     * @throws ApiException if problems occur while parsing the query or fetching Feed.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall("query", array($args));
        return $result->rval;
    }
}