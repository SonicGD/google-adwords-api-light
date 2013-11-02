<?php

/**
 * FeedItemService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class FeedItemService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                               => "FeedItemServiceGetResponse",
        "get"                                       => "FeedItemServiceGet",
        "mutate"                                    => "FeedItemServiceMutate",
        "mutateResponse"                            => "FeedItemServiceMutateResponse",
        "DateTime"                                  => "AdWordsDateTime",
        "SoapHeader"                                => "SoapRequestHeader",
        "AuthenticationError"                       => "AuthenticationError",
        "ApiError"                                  => "ApiError",
        "AuthorizationError"                        => "AuthorizationError",
        "BetaError"                                 => "BetaError",
        "ClientTermsError"                          => "ClientTermsError",
        "DateError"                                 => "DateError",
        "DateRange"                                 => "DateRange",
        "DistinctError"                             => "DistinctError",
        "EntityCountLimitExceeded"                  => "EntityCountLimitExceeded",
        "EntityNotFound"                            => "EntityNotFound",
        "FeedItemAttributeError"                    => "FeedItemAttributeError",
        "FeedItemAttributeValue"                    => "FeedItemAttributeValue",
        "FeedItemDevicePreference"                  => "FeedItemDevicePreference",
        "FeedItemError"                             => "FeedItemError",
        "FeedItemSchedule"                          => "FeedItemSchedule",
        "FeedItemScheduling"                        => "FeedItemScheduling",
        "IdError"                                   => "IdError",
        "InternalApiError"                          => "InternalApiError",
        "NotEmptyError"                             => "NotEmptyError",
        "NotWhitelistedError"                       => "NotWhitelistedError",
        "NullError"                                 => "NullError",
        "OperationAccessDenied"                     => "OperationAccessDenied",
        "OrderBy"                                   => "OrderBy",
        "Paging"                                    => "Paging",
        "Predicate"                                 => "Predicate",
        "QuotaCheckError"                           => "QuotaCheckError",
        "RangeError"                                => "RangeError",
        "RateExceededError"                         => "RateExceededError",
        "ReadOnlyError"                             => "ReadOnlyError",
        "RequestError"                              => "RequestError",
        "RequiredError"                             => "RequiredError",
        "SelectorError"                             => "SelectorError",
        "SizeLimitError"                            => "SizeLimitError",
        "SoapResponseHeader"                        => "SoapResponseHeader",
        "StringLengthError"                         => "StringLengthError",
        "DatabaseError"                             => "DatabaseError",
        "FeedItemValidationDetail"                  => "FeedItemValidationDetail",
        "ApiException"                              => "ApiException",
        "ApplicationException"                      => "ApplicationException",
        "FeedItem"                                  => "FeedItem",
        "FeedItemOperation"                         => "FeedItemOperation",
        "Operation"                                 => "Operation",
        "FeedItemPage"                              => "FeedItemPage",
        "NullStatsPage"                             => "NullStatsPage",
        "FeedItemReturnValue"                       => "FeedItemReturnValue",
        "ListReturnValue"                           => "ListReturnValue",
        "Page"                                      => "Page",
        "Selector"                                  => "Selector",
        "AuthenticationError.Reason"                => "AuthenticationErrorReason",
        "AuthorizationError.Reason"                 => "AuthorizationErrorReason",
        "BetaError.Reason"                          => "BetaErrorReason",
        "ClientTermsError.Reason"                   => "ClientTermsErrorReason",
        "DatabaseError.Reason"                      => "DatabaseErrorReason",
        "DateError.Reason"                          => "DateErrorReason",
        "DayOfWeek"                                 => "DayOfWeek",
        "DistinctError.Reason"                      => "DistinctErrorReason",
        "EntityCountLimitExceeded.Reason"           => "EntityCountLimitExceededReason",
        "EntityNotFound.Reason"                     => "EntityNotFoundReason",
        "FeedItem.Status"                           => "FeedItemStatus",
        "FeedItemError.Reason"                      => "FeedItemErrorReason",
        "FeedItemValidationDetail.ApprovalStatus"   => "FeedItemValidationDetailApprovalStatus",
        "FeedItemValidationDetail.ValidationStatus" => "FeedItemValidationDetailValidationStatus",
        "IdError.Reason"                            => "IdErrorReason",
        "InternalApiError.Reason"                   => "InternalApiErrorReason",
        "MinuteOfHour"                              => "MinuteOfHour",
        "NotEmptyError.Reason"                      => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason"                => "NotWhitelistedErrorReason",
        "NullError.Reason"                          => "NullErrorReason",
        "OperationAccessDenied.Reason"              => "OperationAccessDeniedReason",
        "Operator"                                  => "Operator",
        "Predicate.Operator"                        => "PredicateOperator",
        "QuotaCheckError.Reason"                    => "QuotaCheckErrorReason",
        "RangeError.Reason"                         => "RangeErrorReason",
        "RateExceededError.Reason"                  => "RateExceededErrorReason",
        "ReadOnlyError.Reason"                      => "ReadOnlyErrorReason",
        "RequestError.Reason"                       => "RequestErrorReason",
        "RequiredError.Reason"                      => "RequiredErrorReason",
        "SelectorError.Reason"                      => "SelectorErrorReason",
        "SizeLimitError.Reason"                     => "SizeLimitErrorReason",
        "SortOrder"                                 => "SortOrder",
        "StringLengthError.Reason"                  => "StringLengthErrorReason",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/FeedItemService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = FeedItemService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'FeedItemService',
            'https://adwords.google.com/api/adwords/cm/v201306'
        );
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
     *
     * @return The list of FeedItems.
     * @throws ApiException Indicates a problem with the request.
     */
    public function get($selector)
    {
        $arg = new FeedItemServiceGet($selector);
        $result = $this->__soapCall("get", array($arg));
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
     *
     * @return The resulting FeedItems.
     * @throws ApiException Indicates a problem with the request.
     */
    public function mutate($operations)
    {
        $arg = new FeedItemServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }

}