<?php

require_once 'MediaService.require.php';

  /**
   * MediaService
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MediaService extends AdWordsSoapClient
  {
    const SERVICE_NAME = "MediaService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201406/MediaService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201406/MediaService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "Audio" => "Audio",
      "AudioError" => "AudioError",
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "ClientTermsError" => "ClientTermsError",
      "DateRange" => "DateRange",
      "Dimensions" => "Dimensions",
      "DistinctError" => "DistinctError",
      "EntityNotFound" => "EntityNotFound",
      "IdError" => "IdError",
      "Image" => "Image",
      "ImageError" => "ImageError",
      "InternalApiError" => "InternalApiError",
      "MediaError" => "MediaError",
      "Media_Size_DimensionsMapEntry" => "Media_Size_DimensionsMapEntry",
      "Media_Size_StringMapEntry" => "Media_Size_StringMapEntry",
      "NewEntityCreationError" => "NewEntityCreationError",
      "NotEmptyError" => "NotEmptyError",
      "NullError" => "NullError",
      "OperationAccessDenied" => "OperationAccessDenied",
      "OrderBy" => "OrderBy",
      "Paging" => "Paging",
      "Predicate" => "Predicate",
      "QueryError" => "QueryError",
      "QuotaCheckError" => "QuotaCheckError",
      "RangeError" => "RangeError",
      "RateExceededError" => "RateExceededError",
      "ReadOnlyError" => "ReadOnlyError",
      "RejectedError" => "RejectedError",
      "RequestError" => "RequestError",
      "RequiredError" => "RequiredError",
      "SelectorError" => "SelectorError",
      "SizeLimitError" => "SizeLimitError",
      "SoapHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StringLengthError" => "StringLengthError",
      "Video" => "Video",
      "VideoError" => "VideoError",
      "DatabaseError" => "DatabaseError",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApplicationException" => "ApplicationException",
      "Media" => "Media",
      "MediaPage" => "MediaPage",
      "Selector" => "Selector",
      "AudioError.Reason" => "AudioErrorReason",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AuthorizationError.Reason" => "AuthorizationErrorReason",
      "ClientTermsError.Reason" => "ClientTermsErrorReason",
      "DatabaseError.Reason" => "DatabaseErrorReason",
      "DistinctError.Reason" => "DistinctErrorReason",
      "EntityNotFound.Reason" => "EntityNotFoundReason",
      "IdError.Reason" => "IdErrorReason",
      "ImageError.Reason" => "ImageErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "Media.MediaType" => "MediaMediaType",
      "Media.MimeType" => "MediaMimeType",
      "Media.Size" => "MediaSize",
      "MediaError.Reason" => "MediaErrorReason",
      "NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
      "NotEmptyError.Reason" => "NotEmptyErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
      "Predicate.Operator" => "PredicateOperator",
      "QueryError.Reason" => "QueryErrorReason",
      "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateExceededError.Reason" => "RateExceededErrorReason",
      "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
      "RejectedError.Reason" => "RejectedErrorReason",
      "RequestError.Reason" => "RequestErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "SelectorError.Reason" => "SelectorErrorReason",
      "SizeLimitError.Reason" => "SizeLimitErrorReason",
      "SortOrder" => "SortOrder",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "VideoError.Reason" => "VideoErrorReason",
      "get" => "MediaServiceGet",
      "getResponse" => "MediaServiceGetResponse",
      "query" => "Query",
      "queryResponse" => "QueryResponse",
      "upload" => "Upload",
      "uploadResponse" => "UploadResponse",
    );

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
     * Returns a list of media that meet the criteria specified by the selector.
     * <p class="note"><b>Note:</b> {@code MediaService} will not return any
     * {@link ImageAd} image files.</p>
     *
     * @param serviceSelector Selects which media objects to return.
     * @return A list of {@code Media} objects.
     */
    public function get($serviceSelector)
    {
      $args = new MediaServiceGet($serviceSelector);
      $result = $this->__soapCall("get", array($args));

      return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the list of {@link Media} objects that match the query.
     *
     * @param query The SQL-like AWQL query string
     * @returns A list of {@code Media} objects.
     * @throws ApiException when the query is invalid or there are errors processing the request.
     */
    public function query($query)
    {
      $args = new Query($query);
      $result = $this->__soapCall("query", array($args));

      return $result->rval;
    }
    /**
     * Uploads new media. Currently, you can only upload {@link Image} files.
     *
     * @param media A list of {@code Media} objects, each containing the data to
     * be uploaded.
     * @return A list of uploaded media in the same order as the argument list.
     */
    public function upload($media)
    {
      $args = new Upload($media);
      $result = $this->__soapCall("upload", array($args));

      return $result->rval;
    }
  }
