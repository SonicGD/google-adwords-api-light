<?php

require_once('ExpressBusinessService.require.php');


/**
 * ExpressBusinessService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 * @author     WSDLInterpreter
 */
class ExpressBusinessService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                 => "ExpressBusinessServiceGetResponse",
        "get"                         => "ExpressBusinessServiceGet",
        "mutate"                      => "ExpressBusinessServiceMutate",
        "mutateResponse"              => "ExpressBusinessServiceMutateResponse",
        "mutateCallToAction"          => "ExpressBusinessServiceMutateCallToAction",
        "search"                      => "ExpressBusinessServiceSearch",
        "Function"                    => "FeedFunction",
        "DateTime"                    => "AdWordsDateTime",
        "SoapHeader"                  => "SoapRequestHeader",
        "Address"                     => "Address",
        "AuthenticationError"         => "AuthenticationError",
        "ApiError"                    => "ApiError",
        "AuthorizationError"          => "AuthorizationError",
        "ClientTermsError"            => "ClientTermsError",
        "Date"                        => "Date",
        "DateError"                   => "DateError",
        "DateRange"                   => "DateRange",
        "DistinctError"               => "DistinctError",
        "GeoPoint"                    => "GeoPoint",
        "IdError"                     => "IdError",
        "InternalApiError"            => "InternalApiError",
        "NotEmptyError"               => "NotEmptyError",
        "NotWhitelistedError"         => "NotWhitelistedError",
        "NullError"                   => "NullError",
        "OperatorError"               => "OperatorError",
        "OrderBy"                     => "OrderBy",
        "Paging"                      => "Paging",
        "Predicate"                   => "Predicate",
        "QuotaCheckError"             => "QuotaCheckError",
        "RangeError"                  => "RangeError",
        "RateExceededError"           => "RateExceededError",
        "ReadOnlyError"               => "ReadOnlyError",
        "RejectedError"               => "RejectedError",
        "RequestError"                => "RequestError",
        "RequiredError"               => "RequiredError",
        "SelectorError"               => "SelectorError",
        "SizeLimitError"              => "SizeLimitError",
        "SoapResponseHeader"          => "SoapResponseHeader",
        "StringLengthError"           => "StringLengthError",
        "DatabaseError"               => "DatabaseError",
        "ApiException"                => "ApiException",
        "ApplicationException"        => "ApplicationException",
        "Selector"                    => "Selector",
        "Operation"                   => "Operation",
        "Page"                        => "Page",
        "AuthenticationError.Reason"  => "AuthenticationErrorReason",
        "AuthorizationError.Reason"   => "AuthorizationErrorReason",
        "ClientTermsError.Reason"     => "ClientTermsErrorReason",
        "DatabaseError.Reason"        => "DatabaseErrorReason",
        "DateError.Reason"            => "DateErrorReason",
        "DistinctError.Reason"        => "DistinctErrorReason",
        "IdError.Reason"              => "IdErrorReason",
        "InternalApiError.Reason"     => "InternalApiErrorReason",
        "NotEmptyError.Reason"        => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason"  => "NotWhitelistedErrorReason",
        "NullError.Reason"            => "NullErrorReason",
        "Operator"                    => "Operator",
        "OperatorError.Reason"        => "OperatorErrorReason",
        "Predicate.Operator"          => "PredicateOperator",
        "QuotaCheckError.Reason"      => "QuotaCheckErrorReason",
        "RangeError.Reason"           => "RangeErrorReason",
        "RateExceededError.Reason"    => "RateExceededErrorReason",
        "ReadOnlyError.Reason"        => "ReadOnlyErrorReason",
        "RejectedError.Reason"        => "RejectedErrorReason",
        "RequestError.Reason"         => "RequestErrorReason",
        "RequiredError.Reason"        => "RequiredErrorReason",
        "SelectorError.Reason"        => "SelectorErrorReason",
        "SizeLimitError.Reason"       => "SizeLimitErrorReason",
        "SortOrder"                   => "SortOrder",
        "StringLengthError.Reason"    => "StringLengthErrorReason",
        "ExpressBusinessError"        => "ExpressBusinessError",
        "PhoneNumber"                 => "PhoneNumber",
        "ExpressBusiness"             => "ExpressBusiness",
        "ExpressBusinessOperation"    => "ExpressBusinessOperation",
        "ExpressBusinessPage"         => "ExpressBusinessPage",
        "NoStatsPage"                 => "NoStatsPage",
        "ExpressBusiness.Status"      => "ExpressBusinessStatus",
        "ExpressBusinessError.Reason" => "ExpressBusinessErrorReason",
        "RegionCode"                  => "RegionCode",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/express/v201309/ExpressBusinessService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = ExpressBusinessService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'ExpressBusinessService',
            'https://adwords.google.com/api/adwords/express/v201309'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Retrieves the Express businesses that meet the criteria set in the given selector.
     *
     * @param selector the selector specifying the AdWords Express businesses to return
     *
     * @return list of AdWords Express businesses identified by the selector
     */
    public function get($selector)
    {
        $arg = new ExpressBusinessServiceGet($selector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }


    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
     *
     *
     *
     * Performs the given {@link ExpressBusinessOperation}.
     *
     * @param operations list of unique operations; the same AdWords Express business cannot be
     *                   specified in more than one operation
     *
     * @return the updated AdWords Express businesses
     */
    public function mutate($operations)
    {
        $arg = new ExpressBusinessServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }

}