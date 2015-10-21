<?php

require_once('FeedItemService.require.php');


/**
 * FeedItemService
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class FeedItemService extends AdWordsSoapClient
{

    const SERVICE_NAME = "FeedItemService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201509/FeedItemService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201509/FeedItemService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = [
        "ApiError"                           => "ApiError",
        "ApiException"                       => "ApiException",
        "ApplicationException"               => "ApplicationException",
        "AuthenticationError"                => "AuthenticationError",
        "AuthorizationError"                 => "AuthorizationError",
        "ClientTermsError"                   => "ClientTermsError",
        "Criterion"                          => "Criterion",
        "CustomParameter"                    => "CustomParameter",
        "CustomParameters"                   => "CustomParameters",
        "DatabaseError"                      => "DatabaseError",
        "DateError"                          => "DateError",
        "DateRange"                          => "DateRange",
        "DisapprovalReason"                  => "DisapprovalReason",
        "DistinctError"                      => "DistinctError",
        "EntityAccessDenied"                 => "EntityAccessDenied",
        "EntityCountLimitExceeded"           => "EntityCountLimitExceeded",
        "EntityNotFound"                     => "EntityNotFound",
        "FeedItem"                           => "FeedItem",
        "FeedItemAdGroupTargeting"           => "FeedItemAdGroupTargeting",
        "FeedItemAttributeError"             => "FeedItemAttributeError",
        "FeedItemAttributeValue"             => "FeedItemAttributeValue",
        "FeedItemCampaignTargeting"          => "FeedItemCampaignTargeting",
        "FeedItemDevicePreference"           => "FeedItemDevicePreference",
        "FeedItemError"                      => "FeedItemError",
        "FeedItemOperation"                  => "FeedItemOperation",
        "FeedItemPage"                       => "FeedItemPage",
        "FeedItemPolicyData"                 => "FeedItemPolicyData",
        "FeedItemReturnValue"                => "FeedItemReturnValue",
        "FeedItemSchedule"                   => "FeedItemSchedule",
        "FeedItemScheduling"                 => "FeedItemScheduling",
        "IdError"                            => "IdError",
        "InternalApiError"                   => "InternalApiError",
        "Keyword"                            => "Keyword",
        "ListReturnValue"                    => "ListReturnValue",
        "Location"                           => "Location",
        "MobileAppCategory"                  => "MobileAppCategory",
        "MobileApplication"                  => "MobileApplication",
        "NotEmptyError"                      => "NotEmptyError",
        "NullError"                          => "NullError",
        "NullStatsPage"                      => "NullStatsPage",
        "Operation"                          => "Operation",
        "OperationAccessDenied"              => "OperationAccessDenied",
        "OrderBy"                            => "OrderBy",
        "Page"                               => "Page",
        "Paging"                             => "Paging",
        "Placement"                          => "Placement",
        "PolicyData"                         => "PolicyData",
        "Predicate"                          => "Predicate",
        "QueryError"                         => "QueryError",
        "QuotaCheckError"                    => "QuotaCheckError",
        "RangeError"                         => "RangeError",
        "RateExceededError"                  => "RateExceededError",
        "ReadOnlyError"                      => "ReadOnlyError",
        "RejectedError"                      => "RejectedError",
        "RequestError"                       => "RequestError",
        "RequiredError"                      => "RequiredError",
        "Selector"                           => "Selector",
        "SelectorError"                      => "SelectorError",
        "SizeLimitError"                     => "SizeLimitError",
        "SoapHeader"                         => "SoapRequestHeader",
        "SoapResponseHeader"                 => "SoapResponseHeader",
        "StringLengthError"                  => "StringLengthError",
        "UrlError"                           => "UrlError",
        "CriterionUserInterest"              => "CriterionUserInterest",
        "CriterionUserList"                  => "CriterionUserList",
        "Vertical"                           => "Vertical",
        "AuthenticationError.Reason"         => "AuthenticationErrorReason",
        "AuthorizationError.Reason"          => "AuthorizationErrorReason",
        "ClientTermsError.Reason"            => "ClientTermsErrorReason",
        "Criterion.Type"                     => "CriterionType",
        "DatabaseError.Reason"               => "DatabaseErrorReason",
        "DateError.Reason"                   => "DateErrorReason",
        "DayOfWeek"                          => "DayOfWeek",
        "DistinctError.Reason"               => "DistinctErrorReason",
        "EntityAccessDenied.Reason"          => "EntityAccessDeniedReason",
        "EntityCountLimitExceeded.Reason"    => "EntityCountLimitExceededReason",
        "EntityNotFound.Reason"              => "EntityNotFoundReason",
        "FeedItem.Status"                    => "FeedItemStatus",
        "FeedItemApprovalStatus"             => "FeedItemApprovalStatus",
        "FeedItemError.Reason"               => "FeedItemErrorReason",
        "FeedItemValidationStatus"           => "FeedItemValidationStatus",
        "IdError.Reason"                     => "IdErrorReason",
        "InternalApiError.Reason"            => "InternalApiErrorReason",
        "KeywordMatchType"                   => "KeywordMatchType",
        "LocationTargetingStatus"            => "LocationTargetingStatus",
        "MinuteOfHour"                       => "MinuteOfHour",
        "NotEmptyError.Reason"               => "NotEmptyErrorReason",
        "NullError.Reason"                   => "NullErrorReason",
        "OperationAccessDenied.Reason"       => "OperationAccessDeniedReason",
        "Operator"                           => "Operator",
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
        "UrlError.Reason"                    => "UrlErrorReason",
        "CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
        "get"                                => "FeedItemServiceGet",
        "getResponse"                        => "FeedItemServiceGetResponse",
        "mutate"                             => "FeedItemServiceMutate",
        "mutateResponse"                     => "FeedItemServiceMutateResponse",
        "query"                              => "Query",
        "queryResponse"                      => "QueryResponse",
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
     * Returns a list of FeedItems that meet the selector criteria.
     *
     * @param selector Determines which FeedItems to return. If empty all
     *                 FeedItems are returned.
     * @return The list of FeedItems.
     * @throws ApiException Indicates a problem with the request.
     */
    public function get($selector)
    {
        $args = new FeedItemServiceGet($selector);
        $result = $this->__soapCall("get", [$args]);
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
     * Add, remove, and set FeedItems.
     *
     * @param operations The operations to apply.
     * @return The resulting FeedItems.
     * @throws ApiException Indicates a problem with the request.
     */
    public function mutate($operations)
    {
        $args = new FeedItemServiceMutate($operations);
        $result = $this->__soapCall("mutate", [$args]);
        return $result->rval;
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the list of FeedItems that match the query.
     *
     * @param query The SQL-like AWQL query string
     * @returns A list of FeedItems
     * @throws ApiException when the query is invalid or there are errors processing the request.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall("query", [$args]);
        return $result->rval;
    }
}