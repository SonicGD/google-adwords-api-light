<?php

require_once('GeoLocationService.require.php');


/**
 * GeoLocationService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class GeoLocationService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                => "GeoLocationServiceGetResponse",
        "get"                        => "GeoLocationServiceGet",
        "mutate"                     => "GeoLocationServiceMutate",
        "mutateResponse"             => "GeoLocationServiceMutateResponse",
        "DateTime"                   => "AdWordsDateTime",
        "SoapHeader"                 => "SoapRequestHeader",
        "Address"                    => "Address",
        "AuthenticationError"        => "AuthenticationError",
        "ApiError"                   => "ApiError",
        "AuthorizationError"         => "AuthorizationError",
        "ClientTermsError"           => "ClientTermsError",
        "DistinctError"              => "DistinctError",
        "GeoLocationError"           => "GeoLocationError",
        "GeoLocationSelector"        => "GeoLocationSelector",
        "GeoPoint"                   => "GeoPoint",
        "IdError"                    => "IdError",
        "InternalApiError"           => "InternalApiError",
        "InvalidGeoLocation"         => "InvalidGeoLocation",
        "GeoLocation"                => "GeoLocation",
        "NotEmptyError"              => "NotEmptyError",
        "NotWhitelistedError"        => "NotWhitelistedError",
        "NullError"                  => "NullError",
        "QuotaCheckError"            => "QuotaCheckError",
        "RangeError"                 => "RangeError",
        "RateExceededError"          => "RateExceededError",
        "ReadOnlyError"              => "ReadOnlyError",
        "RegionCodeError"            => "RegionCodeError",
        "RequestError"               => "RequestError",
        "RequiredError"              => "RequiredError",
        "SizeLimitError"             => "SizeLimitError",
        "SoapResponseHeader"         => "SoapResponseHeader",
        "StringLengthError"          => "StringLengthError",
        "DatabaseError"              => "DatabaseError",
        "ApiException"               => "ApiException",
        "ApplicationException"       => "ApplicationException",
        "AuthenticationError.Reason" => "AuthenticationErrorReason",
        "AuthorizationError.Reason"  => "AuthorizationErrorReason",
        "ClientTermsError.Reason"    => "ClientTermsErrorReason",
        "DatabaseError.Reason"       => "DatabaseErrorReason",
        "DistinctError.Reason"       => "DistinctErrorReason",
        "GeoLocationError.Reason"    => "GeoLocationErrorReason",
        "IdError.Reason"             => "IdErrorReason",
        "InternalApiError.Reason"    => "InternalApiErrorReason",
        "NotEmptyError.Reason"       => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
        "NullError.Reason"           => "NullErrorReason",
        "QuotaCheckError.Reason"     => "QuotaCheckErrorReason",
        "RangeError.Reason"          => "RangeErrorReason",
        "RateExceededError.Reason"   => "RateExceededErrorReason",
        "ReadOnlyError.Reason"       => "ReadOnlyErrorReason",
        "RegionCodeError.Reason"     => "RegionCodeErrorReason",
        "RequestError.Reason"        => "RequestErrorReason",
        "RequiredError.Reason"       => "RequiredErrorReason",
        "SizeLimitError.Reason"      => "SizeLimitErrorReason",
        "StringLengthError.Reason"   => "StringLengthErrorReason",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/GeoLocationService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = GeoLocationService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'GeoLocationService',
            'https://adwords.google.com/api/adwords/cm/v201306'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Retrieves the geographic location information for the address specified.
     *
     * @param selector specifies the addresses.
     *
     * @return list of {@link GeoLocation} objects. Returns {@link InvalidGeoLocation} object if
     * the address cannot be geocoded.
     * @throws ApiException if problems occurred while retrieving the location information
     */
    public function get($selector)
    {
        $arg = new GeoLocationServiceGet($selector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }

}