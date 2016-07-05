<?php

require_once('DraftAsyncErrorService.require.php');


/**
 * DraftAsyncErrorService
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class DraftAsyncErrorService extends AdWordsSoapClient
{

  const SERVICE_NAME = "DraftAsyncErrorService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
  const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201605/DraftAsyncErrorService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201605/DraftAsyncErrorService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = [
      "AdError"                         => "AdError",
      "AdGroupAdError"                  => "AdGroupAdError",
      "AdGroupCriterionError"           => "AdGroupCriterionError",
      "AdGroupFeedError"                => "AdGroupFeedError",
      "AdGroupServiceError"             => "AdGroupServiceError",
      "AuthenticationError"             => "AuthenticationError",
      "AuthorizationError"              => "AuthorizationError",
      "BiddingErrors"                   => "BiddingErrors",
      "CampaignCriterionError"          => "CampaignCriterionError",
      "CampaignError"                   => "CampaignError",
      "CampaignFeedError"               => "CampaignFeedError",
      "CampaignPreferenceError"         => "CampaignPreferenceError",
      "CampaignSharedSetError"          => "CampaignSharedSetError",
      "ClientTermsError"                => "ClientTermsError",
      "CriterionError"                  => "CriterionError",
      "DateError"                       => "DateError",
      "DateRange"                       => "DateRange",
      "DateRangeError"                  => "DateRangeError",
      "DistinctError"                   => "DistinctError",
      "DraftError"                      => "DraftError",
      "EntityAccessDenied"              => "EntityAccessDenied",
      "EntityCountLimitExceeded"        => "EntityCountLimitExceeded",
      "EntityNotFound"                  => "EntityNotFound",
      "FeedError"                       => "FeedError",
      "FunctionError"                   => "FunctionError",
      "IdError"                         => "IdError",
      "ImageError"                      => "ImageError",
      "InternalApiError"                => "InternalApiError",
      "MediaError"                      => "MediaError",
      "MultiplierError"                 => "MultiplierError",
      "NewEntityCreationError"          => "NewEntityCreationError",
      "NotEmptyError"                   => "NotEmptyError",
      "NullError"                       => "NullError",
      "OperationAccessDenied"           => "OperationAccessDenied",
      "OperatorError"                   => "OperatorError",
      "OrderBy"                         => "OrderBy",
      "Paging"                          => "Paging",
      "PagingError"                     => "PagingError",
      "PolicyViolationError.Part"       => "PolicyViolationErrorPart",
      "PolicyViolationKey"              => "PolicyViolationKey",
      "Predicate"                       => "Predicate",
      "QueryError"                      => "QueryError",
      "QuotaCheckError"                 => "QuotaCheckError",
      "RangeError"                      => "RangeError",
      "RateExceededError"               => "RateExceededError",
      "ReadOnlyError"                   => "ReadOnlyError",
      "RejectedError"                   => "RejectedError",
      "RequestError"                    => "RequestError",
      "RequiredError"                   => "RequiredError",
      "SelectorError"                   => "SelectorError",
      "SettingError"                    => "SettingError",
      "SizeLimitError"                  => "SizeLimitError",
      "SoapHeader"                      => "SoapRequestHeader",
      "SoapResponseHeader"              => "SoapResponseHeader",
      "StringFormatError"               => "StringFormatError",
      "StringLengthError"               => "StringLengthError",
      "UrlError"                        => "UrlError",
      "VideoError"                      => "VideoError",
      "DatabaseError"                   => "DatabaseError",
      "PolicyViolationError"            => "PolicyViolationError",
      "ApiError"                        => "ApiError",
      "ApiException"                    => "ApiException",
      "ApplicationException"            => "ApplicationException",
      "DraftAsyncError"                 => "DraftAsyncError",
      "DraftAsyncErrorPage"             => "DraftAsyncErrorPage",
      "Page"                            => "Page",
      "Selector"                        => "Selector",
      "AdError.Reason"                  => "AdErrorReason",
      "AdGroupAdError.Reason"           => "AdGroupAdErrorReason",
      "AdGroupCriterionError.Reason"    => "AdGroupCriterionErrorReason",
      "AdGroupFeedError.Reason"         => "AdGroupFeedErrorReason",
      "AdGroupServiceError.Reason"      => "AdGroupServiceErrorReason",
      "AuthenticationError.Reason"      => "AuthenticationErrorReason",
      "AuthorizationError.Reason"       => "AuthorizationErrorReason",
      "BiddingErrors.Reason"            => "BiddingErrorsReason",
      "CampaignCriterionError.Reason"   => "CampaignCriterionErrorReason",
      "CampaignError.Reason"            => "CampaignErrorReason",
      "CampaignFeedError.Reason"        => "CampaignFeedErrorReason",
      "CampaignPreferenceError.Reason"  => "CampaignPreferenceErrorReason",
      "CampaignSharedSetError.Reason"   => "CampaignSharedSetErrorReason",
      "ClientTermsError.Reason"         => "ClientTermsErrorReason",
      "CriterionError.Reason"           => "CriterionErrorReason",
      "DatabaseError.Reason"            => "DatabaseErrorReason",
      "DateError.Reason"                => "DateErrorReason",
      "DateRangeError.Reason"           => "DateRangeErrorReason",
      "DistinctError.Reason"            => "DistinctErrorReason",
      "DraftError.Reason"               => "DraftErrorReason",
      "EntityAccessDenied.Reason"       => "EntityAccessDeniedReason",
      "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
      "EntityNotFound.Reason"           => "EntityNotFoundReason",
      "FeedError.Reason"                => "FeedErrorReason",
      "FunctionError.Reason"            => "FunctionErrorReason",
      "IdError.Reason"                  => "IdErrorReason",
      "ImageError.Reason"               => "ImageErrorReason",
      "InternalApiError.Reason"         => "InternalApiErrorReason",
      "MediaError.Reason"               => "MediaErrorReason",
      "MultiplierError.Reason"          => "MultiplierErrorReason",
      "NewEntityCreationError.Reason"   => "NewEntityCreationErrorReason",
      "NotEmptyError.Reason"            => "NotEmptyErrorReason",
      "NullError.Reason"                => "NullErrorReason",
      "OperationAccessDenied.Reason"    => "OperationAccessDeniedReason",
      "OperatorError.Reason"            => "OperatorErrorReason",
      "PagingError.Reason"              => "PagingErrorReason",
      "Predicate.Operator"              => "PredicateOperator",
      "QueryError.Reason"               => "QueryErrorReason",
      "QuotaCheckError.Reason"          => "QuotaCheckErrorReason",
      "RangeError.Reason"               => "RangeErrorReason",
      "RateExceededError.Reason"        => "RateExceededErrorReason",
      "ReadOnlyError.Reason"            => "ReadOnlyErrorReason",
      "RejectedError.Reason"            => "RejectedErrorReason",
      "RequestError.Reason"             => "RequestErrorReason",
      "RequiredError.Reason"            => "RequiredErrorReason",
      "SelectorError.Reason"            => "SelectorErrorReason",
      "SettingError.Reason"             => "SettingErrorReason",
      "SizeLimitError.Reason"           => "SizeLimitErrorReason",
      "SortOrder"                       => "SortOrder",
      "StringFormatError.Reason"        => "StringFormatErrorReason",
      "StringLengthError.Reason"        => "StringLengthErrorReason",
      "UrlError.Reason"                 => "UrlErrorReason",
      "VideoError.Reason"               => "VideoErrorReason",
      "get"                             => "DraftAsyncErrorServiceGet",
      "getResponse"                     => "DraftAsyncErrorServiceGetResponse",
      "query"                           => "Query",
      "queryResponse"                   => "QueryResponse",
  ];


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
   * Returns a DraftAsyncErrorPage that contains a list of DraftAsyncErrors matching the selector.
   *
   * @throws {#link com.google.ads.api.services.common.error.ApiException} if problems occurred
   * while retrieving the results.
   */
  public function get($selector)
  {
    $args = new DraftAsyncErrorServiceGet($selector);
    $result = $this->__soapCall("get", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns a DraftAsyncErrorPage that contains a list of DraftAsyncErrors matching the query.
   *
   * @throws {#link com.google.ads.api.services.common.error.ApiException} if problems occurred
   * while retrieving the results.
   */
  public function query($query)
  {
    $args = new Query($query);
    $result = $this->__soapCall("query", [$args]);
    return $result->rval;
  }
}