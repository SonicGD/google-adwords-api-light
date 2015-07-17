<?php

require_once('CustomerExtensionSettingService.require.php');


/**
 * CustomerExtensionSettingService
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class CustomerExtensionSettingService extends AdWordsSoapClient
{

  const SERVICE_NAME = "CustomerExtensionSettingService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201506";
  const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201506/CustomerExtensionSettingService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201506/CustomerExtensionSettingService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = [
      "AuthenticationError"                 => "AuthenticationError",
      "AuthorizationError"                  => "AuthorizationError",
      "CallConversionType"                  => "CallConversionType",
      "CallFeedItem"                        => "CallFeedItem",
      "CalloutFeedItem"                     => "CalloutFeedItem",
      "ClientTermsError"                    => "ClientTermsError",
      "CollectionSizeError"                 => "CollectionSizeError",
      "CustomParameter"                     => "CustomParameter",
      "CustomParameters"                    => "CustomParameters",
      "DateError"                           => "DateError",
      "DateRange"                           => "DateRange",
      "DisapprovalReason"                   => "DisapprovalReason",
      "DistinctError"                       => "DistinctError",
      "EntityAccessDenied"                  => "EntityAccessDenied",
      "EntityCountLimitExceeded"            => "EntityCountLimitExceeded",
      "EntityNotFound"                      => "EntityNotFound",
      "ExtensionSettingError"               => "ExtensionSettingError",
      "FeedItemAttributeError"              => "FeedItemAttributeError",
      "FeedItemDevicePreference"            => "FeedItemDevicePreference",
      "FeedItemPolicyData"                  => "FeedItemPolicyData",
      "FeedItemSchedule"                    => "FeedItemSchedule",
      "FeedItemScheduling"                  => "FeedItemScheduling",
      "IdError"                             => "IdError",
      "InternalApiError"                    => "InternalApiError",
      "NotEmptyError"                       => "NotEmptyError",
      "NullError"                           => "NullError",
      "OperationAccessDenied"               => "OperationAccessDenied",
      "OrderBy"                             => "OrderBy",
      "Paging"                              => "Paging",
      "Predicate"                           => "Predicate",
      "QueryError"                          => "QueryError",
      "QuotaCheckError"                     => "QuotaCheckError",
      "RangeError"                          => "RangeError",
      "RateExceededError"                   => "RateExceededError",
      "ReadOnlyError"                       => "ReadOnlyError",
      "RejectedError"                       => "RejectedError",
      "RequestError"                        => "RequestError",
      "RequiredError"                       => "RequiredError",
      "ReviewFeedItem"                      => "ReviewFeedItem",
      "SelectorError"                       => "SelectorError",
      "SizeLimitError"                      => "SizeLimitError",
      "SoapHeader"                          => "SoapRequestHeader",
      "SoapResponseHeader"                  => "SoapResponseHeader",
      "StringLengthError"                   => "StringLengthError",
      "UrlError"                            => "UrlError",
      "UrlList"                             => "UrlList",
      "AppFeedItem"                         => "AppFeedItem",
      "DatabaseError"                       => "DatabaseError",
      "PolicyData"                          => "PolicyData",
      "SitelinkFeedItem"                    => "SitelinkFeedItem",
      "ApiError"                            => "ApiError",
      "ApiException"                        => "ApiException",
      "ApplicationException"                => "ApplicationException",
      "ExtensionFeedItem"                   => "ExtensionFeedItem",
      "ExtensionSetting"                    => "ExtensionSetting",
      "Selector"                            => "Selector",
      "CustomerExtensionSetting"            => "CustomerExtensionSetting",
      "CustomerExtensionSettingOperation"   => "CustomerExtensionSettingOperation",
      "CustomerExtensionSettingPage"        => "CustomerExtensionSettingPage",
      "CustomerExtensionSettingReturnValue" => "CustomerExtensionSettingReturnValue",
      "ListReturnValue"                     => "ListReturnValue",
      "Operation"                           => "Operation",
      "Page"                                => "Page",
      "AppFeedItem.AppStore"                => "AppFeedItemAppStore",
      "AuthenticationError.Reason"          => "AuthenticationErrorReason",
      "AuthorizationError.Reason"           => "AuthorizationErrorReason",
      "ClientTermsError.Reason"             => "ClientTermsErrorReason",
      "CollectionSizeError.Reason"          => "CollectionSizeErrorReason",
      "DatabaseError.Reason"                => "DatabaseErrorReason",
      "DateError.Reason"                    => "DateErrorReason",
      "DayOfWeek"                           => "DayOfWeek",
      "DistinctError.Reason"                => "DistinctErrorReason",
      "EntityAccessDenied.Reason"           => "EntityAccessDeniedReason",
      "EntityCountLimitExceeded.Reason"     => "EntityCountLimitExceededReason",
      "EntityNotFound.Reason"               => "EntityNotFoundReason",
      "ExtensionSetting.Platform"           => "ExtensionSettingPlatform",
      "ExtensionSettingError.Reason"        => "ExtensionSettingErrorReason",
      "FeedItem.Status"                     => "FeedItemStatus",
      "FeedItemApprovalStatus"              => "FeedItemApprovalStatus",
      "FeedItemValidationStatus"            => "FeedItemValidationStatus",
      "Feed.Type"                           => "FeedType",
      "IdError.Reason"                      => "IdErrorReason",
      "InternalApiError.Reason"             => "InternalApiErrorReason",
      "MinuteOfHour"                        => "MinuteOfHour",
      "NotEmptyError.Reason"                => "NotEmptyErrorReason",
      "NullError.Reason"                    => "NullErrorReason",
      "OperationAccessDenied.Reason"        => "OperationAccessDeniedReason",
      "Operator"                            => "Operator",
      "Predicate.Operator"                  => "PredicateOperator",
      "QueryError.Reason"                   => "QueryErrorReason",
      "QuotaCheckError.Reason"              => "QuotaCheckErrorReason",
      "RangeError.Reason"                   => "RangeErrorReason",
      "RateExceededError.Reason"            => "RateExceededErrorReason",
      "ReadOnlyError.Reason"                => "ReadOnlyErrorReason",
      "RejectedError.Reason"                => "RejectedErrorReason",
      "RequestError.Reason"                 => "RequestErrorReason",
      "RequiredError.Reason"                => "RequiredErrorReason",
      "SelectorError.Reason"                => "SelectorErrorReason",
      "SizeLimitError.Reason"               => "SizeLimitErrorReason",
      "SortOrder"                           => "SortOrder",
      "StringLengthError.Reason"            => "StringLengthErrorReason",
      "UrlError.Reason"                     => "UrlErrorReason",
      "get"                                 => "CustomerExtensionSettingServiceGet",
      "getResponse"                         => "CustomerExtensionSettingServiceGetResponse",
      "mutate"                              => "CustomerExtensionSettingServiceMutate",
      "mutateResponse"                      => "CustomerExtensionSettingServiceMutateResponse",
      "query"                               => "Query",
      "queryResponse"                       => "QueryResponse",
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
   * Returns a list of CustomerExtensionSettings that meet the selector criteria.
   *
   * @param selector Determines which CustomerExtensionSettings to return. If empty, all
   *                 CustomerExtensionSettings are returned.
   * @return The list of CustomerExtensionSettings specified by the selector.
   * @throws ApiException Indicates a problem with the request.
   */
  public function get($selector)
  {
    $args = new CustomerExtensionSettingServiceGet($selector);
    $result = $this->__soapCall("get", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : ADD, SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Applies the list of mutate operations (add, remove, and set).
   *
   * @param operations The operations to apply. The same {@link CustomerExtensionSetting} cannot be
   * specified in more than one operation.
   * @return The changed {@link CustomerExtensionSetting}s.
   * @throws ApiException Indicates a problem with the request.
   */
  public function mutate($operations)
  {
    $args = new CustomerExtensionSettingServiceMutate($operations);
    $result = $this->__soapCall("mutate", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns a list of CustomerExtensionSettings that match the query.
   *
   * @param query The SQL-like AWQL query string.
   * @return The list of CustomerExtensionSettings specified by the query.
   * @throws ApiException Indicates a problem with the request.
   */
  public function query($query)
  {
    $args = new Query($query);
    $result = $this->__soapCall("query", [$args]);
    return $result->rval;
  }
}