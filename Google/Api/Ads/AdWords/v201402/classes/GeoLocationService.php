<?php

require_once('GeoLocationService.require.php');


/**
 * GeoLocationService
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class GeoLocationService extends AdWordsSoapClient
{

    const SERVICE_NAME = "GeoLocationService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201402/GeoLocationService";

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public $endpoint = "https://adwords.google.com/api/adwords/cm/v201402/GeoLocationService";
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "Address"                    => "Address",
        "AuthenticationError"        => "AuthenticationError",
        "AuthorizationError"         => "AuthorizationError",
        "ClientTermsError"           => "ClientTermsError",
        "DistinctError"              => "DistinctError",
        "GeoLocationError"           => "GeoLocationError",
        "GeoLocationSelector"        => "GeoLocationSelector",
        "GeoPoint"                   => "GeoPoint",
        "IdError"                    => "IdError",
        "InternalApiError"           => "InternalApiError",
        "InvalidGeoLocation"         => "InvalidGeoLocation",
        "NotEmptyError"              => "NotEmptyError",
        "NullError"                  => "NullError",
        "QuotaCheckError"            => "QuotaCheckError",
        "RangeError"                 => "RangeError",
        "RateExceededError"          => "RateExceededError",
        "ReadOnlyError"              => "ReadOnlyError",
        "RegionCodeError"            => "RegionCodeError",
        "RejectedError"              => "RejectedError",
        "RequestError"               => "RequestError",
        "RequiredError"              => "RequiredError",
        "SizeLimitError"             => "SizeLimitError",
        "SoapHeader"                 => "SoapRequestHeader",
        "SoapResponseHeader"         => "SoapResponseHeader",
        "StringLengthError"          => "StringLengthError",
        "DatabaseError"              => "DatabaseError",
        "GeoLocation"                => "GeoLocation",
        "ApiError"                   => "ApiError",
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
        "NullError.Reason"           => "NullErrorReason",
        "QuotaCheckError.Reason"     => "QuotaCheckErrorReason",
        "RangeError.Reason"          => "RangeErrorReason",
        "RateExceededError.Reason"   => "RateExceededErrorReason",
        "ReadOnlyError.Reason"       => "ReadOnlyErrorReason",
        "RegionCodeError.Reason"     => "RegionCodeErrorReason",
        "RejectedError.Reason"       => "RejectedErrorReason",
        "RequestError.Reason"        => "RequestErrorReason",
        "RequiredError.Reason"       => "RequiredErrorReason",
        "SizeLimitError.Reason"      => "SizeLimitErrorReason",
        "StringLengthError.Reason"   => "StringLengthErrorReason",
        "get"                        => "GeoLocationServiceGet",
        "getResponse"                => "GeoLocationServiceGetResponse",
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
        $args = new GeoLocationServiceGet($selector);
        $result = $this->__soapCall("get", array($args));
        return $result->rval;
    }
}