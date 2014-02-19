<?php

require_once('FeedMappingService.require.php');


/**
 * FeedMappingService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 * @author     WSDLInterpreter
 */
class FeedMappingService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                  => "FeedMappingServiceGetResponse",
        "get"                          => "FeedMappingServiceGet",
        "mutate"                       => "FeedMappingServiceMutate",
        "mutateResponse"               => "FeedMappingServiceMutateResponse",
        "mutateCallToAction"           => "FeedMappingServiceMutateCallToAction",
        "search"                       => "FeedMappingServiceSearch",
        "Function"                     => "FeedFunction",
        "DateTime"                     => "AdWordsDateTime",
        "SoapHeader"                   => "SoapRequestHeader",
        "AttributeFieldMapping"        => "AttributeFieldMapping",
        "AuthenticationError"          => "AuthenticationError",
        "ApiError"                     => "ApiError",
        "AuthorizationError"           => "AuthorizationError",
        "ClientTermsError"             => "ClientTermsError",
        "DateRange"                    => "DateRange",
        "DistinctError"                => "DistinctError",
        "EntityNotFound"               => "EntityNotFound",
        "FeedMapping"                  => "FeedMapping",
        "FeedMappingError"             => "FeedMappingError",
        "FeedMappingOperation"         => "FeedMappingOperation",
        "Operation"                    => "Operation",
        "FeedMappingPage"              => "FeedMappingPage",
        "NullStatsPage"                => "NullStatsPage",
        "FeedMappingReturnValue"       => "FeedMappingReturnValue",
        "ListReturnValue"              => "ListReturnValue",
        "IdError"                      => "IdError",
        "InternalApiError"             => "InternalApiError",
        "NotEmptyError"                => "NotEmptyError",
        "NotWhitelistedError"          => "NotWhitelistedError",
        "Page"                         => "Page",
        "OperationAccessDenied"        => "OperationAccessDenied",
        "OperatorError"                => "OperatorError",
        "OrderBy"                      => "OrderBy",
        "Paging"                       => "Paging",
        "Predicate"                    => "Predicate",
        "QuotaCheckError"              => "QuotaCheckError",
        "RangeError"                   => "RangeError",
        "RateExceededError"            => "RateExceededError",
        "ReadOnlyError"                => "ReadOnlyError",
        "RequestError"                 => "RequestError",
        "RequiredError"                => "RequiredError",
        "SelectorError"                => "SelectorError",
        "SizeLimitError"               => "SizeLimitError",
        "SoapResponseHeader"           => "SoapResponseHeader",
        "StringLengthError"            => "StringLengthError",
        "DatabaseError"                => "DatabaseError",
        "ApiException"                 => "ApiException",
        "ApplicationException"         => "ApplicationException",
        "Selector"                     => "Selector",
        "AuthenticationError.Reason"   => "AuthenticationErrorReason",
        "AuthorizationError.Reason"    => "AuthorizationErrorReason",
        "ClientTermsError.Reason"      => "ClientTermsErrorReason",
        "DatabaseError.Reason"         => "DatabaseErrorReason",
        "DistinctError.Reason"         => "DistinctErrorReason",
        "EntityNotFound.Reason"        => "EntityNotFoundReason",
        "FeedMapping.Status"           => "FeedMappingStatus",
        "FeedMappingError.Reason"      => "FeedMappingErrorReason",
        "IdError.Reason"               => "IdErrorReason",
        "InternalApiError.Reason"      => "InternalApiErrorReason",
        "NotEmptyError.Reason"         => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason"   => "NotWhitelistedErrorReason",
        "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
        "Operator"                     => "Operator",
        "OperatorError.Reason"         => "OperatorErrorReason",
        "Predicate.Operator"           => "PredicateOperator",
        "QuotaCheckError.Reason"       => "QuotaCheckErrorReason",
        "RangeError.Reason"            => "RangeErrorReason",
        "RateExceededError.Reason"     => "RateExceededErrorReason",
        "ReadOnlyError.Reason"         => "ReadOnlyErrorReason",
        "RequestError.Reason"          => "RequestErrorReason",
        "RequiredError.Reason"         => "RequiredErrorReason",
        "SelectorError.Reason"         => "SelectorErrorReason",
        "SizeLimitError.Reason"        => "SizeLimitErrorReason",
        "SortOrder"                    => "SortOrder",
        "StringLengthError.Reason"     => "StringLengthErrorReason",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201309/FeedMappingService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = FeedMappingService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'FeedMappingService',
            'https://adwords.google.com/api/adwords/cm/v201309'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns a list of FeedMappings that meet the selector criteria.
     *
     * @param selector Determines which FeedMappings to return. If empty all
     *                 FeedMappings are returned.
     *
     * @return The list of FeedMappings.
     * @throws ApiException indicates a problem with the request.
     */
    public function get($selector)
    {
        $arg = new FeedMappingServiceGet($selector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }


    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
     *
     *
     *
     * Add and remove FeedMappings.
     *
     * @param operations The operations to apply.
     *
     * @return The resulting FeedMappings.
     * @throws ApiException indicates a problem with the request.
     */
    public function mutate($operations)
    {
        $arg = new FeedMappingServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }

}