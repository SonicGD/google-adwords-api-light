<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * MediaService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class MediaService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
"getResponse" => '\Google\Api\Ads\AdWords\v201306\classes\MediaServiceGetResponse',
"get" => '\Google\Api\Ads\AdWords\v201306\classes\MediaServiceGet',
"mutate" => '\Google\Api\Ads\AdWords\v201306\classes\MediaServiceMutate',
"mutateResponse" => '\Google\Api\Ads\AdWords\v201306\classes\MediaServiceMutateResponse',
"DateTime" => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
"SoapHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
"Audio" => '\Google\Api\Ads\AdWords\v201306\classes\Audio',
"Media" => '\Google\Api\Ads\AdWords\v201306\classes\Media',
"AudioError" => '\Google\Api\Ads\AdWords\v201306\classes\AudioError',
"ApiError" => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
"AuthenticationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
"AuthorizationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
"ClientTermsError" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
"DateRange" => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
"Dimensions" => '\Google\Api\Ads\AdWords\v201306\classes\Dimensions',
"DistinctError" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
"EntityNotFound" => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
"IdError" => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
"Image" => '\Google\Api\Ads\AdWords\v201306\classes\Image',
"ImageError" => '\Google\Api\Ads\AdWords\v201306\classes\ImageError',
"InternalApiError" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
"MediaError" => '\Google\Api\Ads\AdWords\v201306\classes\MediaError',
"Media_Size_DimensionsMapEntry" => '\Google\Api\Ads\AdWords\v201306\classes\Media_Size_DimensionsMapEntry',
"Media_Size_StringMapEntry" => '\Google\Api\Ads\AdWords\v201306\classes\Media_Size_StringMapEntry',
"NewEntityCreationError" => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationError',
"NotWhitelistedError" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
"NullError" => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
"OperationAccessDenied" => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
"OrderBy" => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
"Paging" => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
"Predicate" => '\Google\Api\Ads\AdWords\v201306\classes\Predicate',
"QuotaCheckError" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
"RangeError" => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
"RateExceededError" => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
"ReadOnlyError" => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
"RequestError" => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
"RequiredError" => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
"SelectorError" => '\Google\Api\Ads\AdWords\v201306\classes\SelectorError',
"SizeLimitError" => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
"SoapResponseHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
"StringLengthError" => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
"Video" => '\Google\Api\Ads\AdWords\v201306\classes\Video',
"VideoError" => '\Google\Api\Ads\AdWords\v201306\classes\VideoError',
"DatabaseError" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
"ApiException" => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
"ApplicationException" => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
"MediaPage" => '\Google\Api\Ads\AdWords\v201306\classes\MediaPage',
"Selector" => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
"AudioError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AudioErrorReason',
"AuthenticationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
"AuthorizationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
"ClientTermsError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
"DatabaseError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
"DistinctError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
"EntityNotFound.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
"IdError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
"ImageError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ImageErrorReason',
"InternalApiError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
"Media.MediaType" => '\Google\Api\Ads\AdWords\v201306\classes\MediaMediaType',
"Media.MimeType" => '\Google\Api\Ads\AdWords\v201306\classes\MediaMimeType',
"Media.Size" => '\Google\Api\Ads\AdWords\v201306\classes\MediaSize',
"MediaError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\MediaErrorReason',
"NewEntityCreationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationErrorReason',
"NotWhitelistedError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
"NullError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
"OperationAccessDenied.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
"Predicate.Operator" => '\Google\Api\Ads\AdWords\v201306\classes\PredicateOperator',
"QuotaCheckError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
"RangeError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
"RateExceededError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
"ReadOnlyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
"RequestError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
"RequiredError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
"SelectorError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
"SizeLimitError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
"SortOrder" => '\Google\Api\Ads\AdWords\v201306\classes\SortOrder',
"StringLengthError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
"VideoError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\VideoErrorReason',
"upload" => '\Google\Api\Ads\AdWords\v201306\classes\upload',
"uploadResponse" => '\Google\Api\Ads\AdWords\v201306\classes\uploadResponse',);

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/MediaService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = MediaService::$classmap;
    parent::__construct($wsdl, $options, $user, 'MediaService', 'https://adwords.google.com/api/adwords/cm/v201306');
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
  public function get($serviceSelector) {
    $arg = new MediaServiceGet($serviceSelector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * Uploads new media. Currently, you can only upload {@link Image} files.
   * 
   * @param media A list of {@code Media} objects, each containing the data to
   * be uploaded.
   * @return A list of uploaded media in the same order as the argument list.
   */
  public function upload($media) {
    $arg = new upload($media);
    $result = $this->__soapCall("upload", array($arg));
    return $result->rval;
  }

}