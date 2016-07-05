<?php

require_once('CustomerExtensionSettingService.require.php');


/**
 * CustomerExtensionSettingService
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class CustomerExtensionSettingService extends AdWordsSoapClient
{

  const SERVICE_NAME = "CustomerExtensionSettingService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
  const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201605/CustomerExtensionSettingService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201605/CustomerExtensionSettingService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = [
      "ApiError"                            => "ApiError",
      "ApiException"                        => "ApiException",
      "AppFeedItem"                         => "AppFeedItem",
      "ApplicationException"                => "ApplicationException",
      "AuthenticationError"                 => "AuthenticationError",
      "AuthorizationError"                  => "AuthorizationError",
      "CallConversionType"                  => "CallConversionType",
      "CallFeedItem"                        => "CallFeedItem",
      "CalloutFeedItem"                     => "CalloutFeedItem",
      "ClientTermsError"                    => "ClientTermsError",
      "CollectionSizeError"                 => "CollectionSizeError",
      "Criterion"                           => "Criterion",
      "CriterionError"                      => "CriterionError",
      "CustomParameter"                     => "CustomParameter",
      "CustomParameters"                    => "CustomParameters",
      "CustomerExtensionSetting"            => "CustomerExtensionSetting",
      "CustomerExtensionSettingOperation"   => "CustomerExtensionSettingOperation",
      "CustomerExtensionSettingPage"        => "CustomerExtensionSettingPage",
      "CustomerExtensionSettingReturnValue" => "CustomerExtensionSettingReturnValue",
      "DatabaseError"                       => "DatabaseError",
      "DateError"                           => "DateError",
      "DateRange"                           => "DateRange",
      "DisapprovalReason"                   => "DisapprovalReason",
      "DistinctError"                       => "DistinctError",
      "EntityAccessDenied"                  => "EntityAccessDenied",
      "EntityCountLimitExceeded"            => "EntityCountLimitExceeded",
      "EntityNotFound"                      => "EntityNotFound",
      "ExtensionFeedItem"                   => "ExtensionFeedItem",
      "ExtensionSetting"                    => "ExtensionSetting",
      "ExtensionSettingError"               => "ExtensionSettingError",
      "FeedItemAdGroupTargeting"            => "FeedItemAdGroupTargeting",
      "FeedItemAttributeError"              => "FeedItemAttributeError",
      "FeedItemCampaignTargeting"           => "FeedItemCampaignTargeting",
      "FeedItemDevicePreference"            => "FeedItemDevicePreference",
      "FeedItemPolicyData"                  => "FeedItemPolicyData",
      "FeedItemSchedule"                    => "FeedItemSchedule",
      "FeedItemScheduling"                  => "FeedItemScheduling",
      "IdError"                             => "IdError",
      "InternalApiError"                    => "InternalApiError",
      "Keyword"                             => "Keyword",
      "ListReturnValue"                     => "ListReturnValue",
      "Location"                            => "Location",
      "MobileAppCategory"                   => "MobileAppCategory",
      "MobileApplication"                   => "MobileApplication",
      "NotEmptyError"                       => "NotEmptyError",
      "NullError"                           => "NullError",
      "Operation"                           => "Operation",
      "OperationAccessDenied"               => "OperationAccessDenied",
      "OperatorError"                       => "OperatorError",
      "OrderBy"                             => "OrderBy",
      "Page"                                => "Page",
      "Paging"                              => "Paging",
      "Placement"                           => "Placement",
      "PolicyData"                          => "PolicyData",
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
      "Selector"                            => "Selector",
      "SelectorError"                       => "SelectorError",
      "SitelinkFeedItem"                    => "SitelinkFeedItem",
      "SizeLimitError"                      => "SizeLimitError",
      "SoapHeader"                          => "SoapRequestHeader",
      "SoapResponseHeader"                  => "SoapResponseHeader",
      "StringFormatError"                   => "StringFormatError",
      "StringLengthError"                   => "StringLengthError",
      "StructuredSnippetFeedItem"           => "StructuredSnippetFeedItem",
      "UrlError"                            => "UrlError",
      "UrlList"                             => "UrlList",
      "CriterionUserInterest"               => "CriterionUserInterest",
      "CriterionUserList"                   => "CriterionUserList",
      "Vertical"                            => "Vertical",
      "AppFeedItem.AppStore"                => "AppFeedItemAppStore",
      "AuthenticationError.Reason"          => "AuthenticationErrorReason",
      "AuthorizationError.Reason"           => "AuthorizationErrorReason",
      "ClientTermsError.Reason"             => "ClientTermsErrorReason",
      "CollectionSizeError.Reason"          => "CollectionSizeErrorReason",
      "Criterion.Type"                      => "CriterionType",
      "CriterionError.Reason"               => "CriterionErrorReason",
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
      "KeywordMatchType"                    => "KeywordMatchType",
      "LocationTargetingStatus"             => "LocationTargetingStatus",
      "MinuteOfHour"                        => "MinuteOfHour",
      "NotEmptyError.Reason"                => "NotEmptyErrorReason",
      "NullError.Reason"                    => "NullErrorReason",
      "OperationAccessDenied.Reason"        => "OperationAccessDeniedReason",
      "Operator"                            => "Operator",
      "OperatorError.Reason"                => "OperatorErrorReason",
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
      "StringFormatError.Reason"            => "StringFormatErrorReason",
      "StringLengthError.Reason"            => "StringLengthErrorReason",
      "UrlError.Reason"                     => "UrlErrorReason",
      "CriterionUserList.MembershipStatus"  => "CriterionUserListMembershipStatus",
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
   * <p> Beginning in v201509, add and set operations are treated identically. Performing an add
   * operation when there is an existing ExtensionSetting will cause the operation to be
   * treated like a set operation. Performing a set operation when there is no existing
   * ExtensionSetting will cause the operation to be treated like an add operation.
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