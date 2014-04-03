<?php

require_once('OfflineConversionFeedService.require.php');


/**
 * OfflineConversionFeedService
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class OfflineConversionFeedService extends AdWordsSoapClient
{

    const SERVICE_NAME = "OfflineConversionFeedService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201402/OfflineConversionFeedService";

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public $endpoint = "https://adwords.google.com/api/adwords/cm/v201402/OfflineConversionFeedService";
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "AuthenticationError"              => "AuthenticationError",
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
        "SoapHeader"                       => "SoapRequestHeader",
        "SoapResponseHeader"               => "SoapResponseHeader",
        "StringLengthError"                => "StringLengthError",
        "DatabaseError"                    => "DatabaseError",
        "ApiError"                         => "ApiError",
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
        "mutate"                           => "OfflineConversionFeedServiceMutate",
        "mutateResponse"                   => "OfflineConversionFeedServiceMutateResponse",
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
        $args = new OfflineConversionFeedServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));
        return $result->rval;
    }
}