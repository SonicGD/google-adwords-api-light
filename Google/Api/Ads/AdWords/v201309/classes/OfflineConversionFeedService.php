<?php

require_once('OfflineConversionFeedService.require.php');


/**
 * OfflineConversionFeedService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 * @author     WSDLInterpreter
 */
class OfflineConversionFeedService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                      => "OfflineConversionFeedServiceGetResponse",
        "get"                              => "OfflineConversionFeedServiceGet",
        "mutate"                           => "OfflineConversionFeedServiceMutate",
        "mutateResponse"                   => "OfflineConversionFeedServiceMutateResponse",
        "mutateCallToAction"               => "OfflineConversionFeedServiceMutateCallToAction",
        "search"                           => "OfflineConversionFeedServiceSearch",
        "Function"                         => "FeedFunction",
        "DateTime"                         => "AdWordsDateTime",
        "SoapHeader"                       => "SoapRequestHeader",
        "AuthenticationError"              => "AuthenticationError",
        "ApiError"                         => "ApiError",
        "AuthorizationError"               => "AuthorizationError",
        "ClientTermsError"                 => "ClientTermsError",
        "CollectionSizeError"              => "CollectionSizeError",
        "CurrencyCodeError"                => "CurrencyCodeError",
        "DateError"                        => "DateError",
        "DistinctError"                    => "DistinctError",
        "EntityCountLimitExceeded"         => "EntityCountLimitExceeded",
        "EntityNotFound"                   => "EntityNotFound",
        "IdError"                          => "IdError",
        "InternalApiError"                 => "InternalApiError",
        "MatchesRegexError"                => "MatchesRegexError",
        "NotEmptyError"                    => "NotEmptyError",
        "NotWhitelistedError"              => "NotWhitelistedError",
        "NullError"                        => "NullError",
        "OfflineConversionError"           => "OfflineConversionError",
        "OfflineConversionFeed"            => "OfflineConversionFeed",
        "OfflineConversionFeedOperation"   => "OfflineConversionFeedOperation",
        "Operation"                        => "Operation",
        "OperationAccessDenied"            => "OperationAccessDenied",
        "OperatorError"                    => "OperatorError",
        "PagingError"                      => "PagingError",
        "QuotaCheckError"                  => "QuotaCheckError",
        "RangeError"                       => "RangeError",
        "RateExceededError"                => "RateExceededError",
        "ReadOnlyError"                    => "ReadOnlyError",
        "RegionCodeError"                  => "RegionCodeError",
        "RejectedError"                    => "RejectedError",
        "RequestError"                     => "RequestError",
        "RequiredError"                    => "RequiredError",
        "SizeLimitError"                   => "SizeLimitError",
        "SoapResponseHeader"               => "SoapResponseHeader",
        "StringLengthError"                => "StringLengthError",
        "DatabaseError"                    => "DatabaseError",
        "ApiException"                     => "ApiException",
        "ApplicationException"             => "ApplicationException",
        "OfflineConversionFeedReturnValue" => "OfflineConversionFeedReturnValue",
        "ListReturnValue"                  => "ListReturnValue",
        "AuthenticationError.Reason"       => "AuthenticationErrorReason",
        "AuthorizationError.Reason"        => "AuthorizationErrorReason",
        "ClientTermsError.Reason"          => "ClientTermsErrorReason",
        "CollectionSizeError.Reason"       => "CollectionSizeErrorReason",
        "CurrencyCodeError.Reason"         => "CurrencyCodeErrorReason",
        "DatabaseError.Reason"             => "DatabaseErrorReason",
        "DateError.Reason"                 => "DateErrorReason",
        "DistinctError.Reason"             => "DistinctErrorReason",
        "EntityCountLimitExceeded.Reason"  => "EntityCountLimitExceededReason",
        "EntityNotFound.Reason"            => "EntityNotFoundReason",
        "IdError.Reason"                   => "IdErrorReason",
        "InternalApiError.Reason"          => "InternalApiErrorReason",
        "MatchesRegexError.Reason"         => "MatchesRegexErrorReason",
        "NotEmptyError.Reason"             => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason"       => "NotWhitelistedErrorReason",
        "NullError.Reason"                 => "NullErrorReason",
        "OfflineConversionError.Reason"    => "OfflineConversionErrorReason",
        "OperationAccessDenied.Reason"     => "OperationAccessDeniedReason",
        "Operator"                         => "Operator",
        "OperatorError.Reason"             => "OperatorErrorReason",
        "PagingError.Reason"               => "PagingErrorReason",
        "QuotaCheckError.Reason"           => "QuotaCheckErrorReason",
        "RangeError.Reason"                => "RangeErrorReason",
        "RateExceededError.Reason"         => "RateExceededErrorReason",
        "ReadOnlyError.Reason"             => "ReadOnlyErrorReason",
        "RegionCodeError.Reason"           => "RegionCodeErrorReason",
        "RejectedError.Reason"             => "RejectedErrorReason",
        "RequestError.Reason"              => "RequestErrorReason",
        "RequiredError.Reason"             => "RequiredErrorReason",
        "SizeLimitError.Reason"            => "SizeLimitErrorReason",
        "StringLengthError.Reason"         => "StringLengthErrorReason",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201309/OfflineConversionFeedService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = OfflineConversionFeedService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'OfflineConversionFeedService',
            'https://adwords.google.com/api/adwords/cm/v201309'
        );
    }

    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD.</span>
     *
     *
     *
     * Reports an offline conversion for each entry in {@code operations}.
     * <p>
     * This bulk operation does not have any transactional guarantees. Some operations can succeed
     * while others fail.
     *
     * @param operations A list of offline conversion feed operations.
     *
     * @return The list of offline conversion feed results (in the same order as the operations).
     * @throws {@link ApiException} if problems occurred while applying offline conversions.
     */
    public function mutate($operations)
    {
        $arg = new OfflineConversionFeedServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }

}