<?php

require_once('MediaService.require.php');


/**
 * MediaService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class MediaService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                   => "MediaServiceGetResponse",
        "get"                           => "MediaServiceGet",
        "mutate"                        => "MediaServiceMutate",
        "mutateResponse"                => "MediaServiceMutateResponse",
        "DateTime"                      => "AdWordsDateTime",
        "SoapHeader"                    => "SoapRequestHeader",
        "Audio"                         => "Audio",
        "Media"                         => "Media",
        "AudioError"                    => "AudioError",
        "ApiError"                      => "ApiError",
        "AuthenticationError"           => "AuthenticationError",
        "AuthorizationError"            => "AuthorizationError",
        "ClientTermsError"              => "ClientTermsError",
        "DateRange"                     => "DateRange",
        "Dimensions"                    => "Dimensions",
        "DistinctError"                 => "DistinctError",
        "EntityNotFound"                => "EntityNotFound",
        "IdError"                       => "IdError",
        "Image"                         => "Image",
        "ImageError"                    => "ImageError",
        "InternalApiError"              => "InternalApiError",
        "MediaError"                    => "MediaError",
        "Media_Size_DimensionsMapEntry" => "Media_Size_DimensionsMapEntry",
        "Media_Size_StringMapEntry"     => "Media_Size_StringMapEntry",
        "NewEntityCreationError"        => "NewEntityCreationError",
        "NotWhitelistedError"           => "NotWhitelistedError",
        "NullError"                     => "NullError",
        "OperationAccessDenied"         => "OperationAccessDenied",
        "OrderBy"                       => "OrderBy",
        "Paging"                        => "Paging",
        "Predicate"                     => "Predicate",
        "QuotaCheckError"               => "QuotaCheckError",
        "RangeError"                    => "RangeError",
        "RateExceededError"             => "RateExceededError",
        "ReadOnlyError"                 => "ReadOnlyError",
        "RequestError"                  => "RequestError",
        "RequiredError"                 => "RequiredError",
        "SelectorError"                 => "SelectorError",
        "SizeLimitError"                => "SizeLimitError",
        "SoapResponseHeader"            => "SoapResponseHeader",
        "StringLengthError"             => "StringLengthError",
        "Video"                         => "Video",
        "VideoError"                    => "VideoError",
        "DatabaseError"                 => "DatabaseError",
        "ApiException"                  => "ApiException",
        "ApplicationException"          => "ApplicationException",
        "MediaPage"                     => "MediaPage",
        "Selector"                      => "Selector",
        "AudioError.Reason"             => "AudioErrorReason",
        "AuthenticationError.Reason"    => "AuthenticationErrorReason",
        "AuthorizationError.Reason"     => "AuthorizationErrorReason",
        "ClientTermsError.Reason"       => "ClientTermsErrorReason",
        "DatabaseError.Reason"          => "DatabaseErrorReason",
        "DistinctError.Reason"          => "DistinctErrorReason",
        "EntityNotFound.Reason"         => "EntityNotFoundReason",
        "IdError.Reason"                => "IdErrorReason",
        "ImageError.Reason"             => "ImageErrorReason",
        "InternalApiError.Reason"       => "InternalApiErrorReason",
        "Media.MediaType"               => "MediaMediaType",
        "Media.MimeType"                => "MediaMimeType",
        "Media.Size"                    => "MediaSize",
        "MediaError.Reason"             => "MediaErrorReason",
        "NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
        "NotWhitelistedError.Reason"    => "NotWhitelistedErrorReason",
        "NullError.Reason"              => "NullErrorReason",
        "OperationAccessDenied.Reason"  => "OperationAccessDeniedReason",
        "Predicate.Operator"            => "PredicateOperator",
        "QuotaCheckError.Reason"        => "QuotaCheckErrorReason",
        "RangeError.Reason"             => "RangeErrorReason",
        "RateExceededError.Reason"      => "RateExceededErrorReason",
        "ReadOnlyError.Reason"          => "ReadOnlyErrorReason",
        "RequestError.Reason"           => "RequestErrorReason",
        "RequiredError.Reason"          => "RequiredErrorReason",
        "SelectorError.Reason"          => "SelectorErrorReason",
        "SizeLimitError.Reason"         => "SizeLimitErrorReason",
        "SortOrder"                     => "SortOrder",
        "StringLengthError.Reason"      => "StringLengthErrorReason",
        "VideoError.Reason"             => "VideoErrorReason",
        "upload"                        => "upload",
        "uploadResponse"                => "uploadResponse",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/MediaService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = MediaService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'MediaService',
            'https://adwords.google.com/api/adwords/cm/v201306'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns a list of media that meet the criteria specified by the selector.
     * <p class="note"><b>Note:</b> {@code MediaService} will not return any
     * {@link ImageAd} image files.</p>
     *
     * @param serviceSelector Selects which media objects to return.
     *
     * @return A list of {@code Media} objects.
     */
    public function get($serviceSelector)
    {
        $arg = new MediaServiceGet($serviceSelector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }


    /**
     * Uploads new media. Currently, you can only upload {@link Image} files.
     *
     * @param media A list of {@code Media} objects, each containing the data to
     * be uploaded.
     *
     * @return A list of uploaded media in the same order as the argument list.
     */
    public function upload($media)
    {
        $arg = new upload($media);
        $result = $this->__soapCall("upload", array($arg));
        return $result->rval;
    }

}