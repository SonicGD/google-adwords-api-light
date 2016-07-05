<?php

require_once('CustomerSyncService.require.php');


/**
 * CustomerSyncService
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class CustomerSyncService extends AdWordsSoapClient
{

  const SERVICE_NAME = "CustomerSyncService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201605";
  const ENDPOINT = "https://adwords.google.com/api/adwords/ch/v201605/CustomerSyncService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/ch/v201605/CustomerSyncService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = [
      "AuthenticationError"          => "AuthenticationError",
      "AuthorizationError"           => "AuthorizationError",
      "ClientTermsError"             => "ClientTermsError",
      "DateError"                    => "DateError",
      "DateTimeRange"                => "DateTimeRange",
      "DistinctError"                => "DistinctError",
      "IdError"                      => "IdError",
      "InternalApiError"             => "InternalApiError",
      "NotEmptyError"                => "NotEmptyError",
      "OperationAccessDenied"        => "OperationAccessDenied",
      "OperatorError"                => "OperatorError",
      "QuotaCheckError"              => "QuotaCheckError",
      "RangeError"                   => "RangeError",
      "RateExceededError"            => "RateExceededError",
      "ReadOnlyError"                => "ReadOnlyError",
      "RejectedError"                => "RejectedError",
      "RequestError"                 => "RequestError",
      "RequiredError"                => "RequiredError",
      "SizeLimitError"               => "SizeLimitError",
      "SoapHeader"                   => "SoapRequestHeader",
      "SoapResponseHeader"           => "SoapResponseHeader",
      "StringFormatError"            => "StringFormatError",
      "StringLengthError"            => "StringLengthError",
      "DatabaseError"                => "DatabaseError",
      "ApiError"                     => "ApiError",
      "ApiException"                 => "ApiException",
      "ApplicationException"         => "ApplicationException",
      "AuthenticationError.Reason"   => "AuthenticationErrorReason",
      "AuthorizationError.Reason"    => "AuthorizationErrorReason",
      "ClientTermsError.Reason"      => "ClientTermsErrorReason",
      "DatabaseError.Reason"         => "DatabaseErrorReason",
      "DateError.Reason"             => "DateErrorReason",
      "DistinctError.Reason"         => "DistinctErrorReason",
      "IdError.Reason"               => "IdErrorReason",
      "InternalApiError.Reason"      => "InternalApiErrorReason",
      "NotEmptyError.Reason"         => "NotEmptyErrorReason",
      "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
      "OperatorError.Reason"         => "OperatorErrorReason",
      "QuotaCheckError.Reason"       => "QuotaCheckErrorReason",
      "RangeError.Reason"            => "RangeErrorReason",
      "RateExceededError.Reason"     => "RateExceededErrorReason",
      "ReadOnlyError.Reason"         => "ReadOnlyErrorReason",
      "RejectedError.Reason"         => "RejectedErrorReason",
      "RequestError.Reason"          => "RequestErrorReason",
      "RequiredError.Reason"         => "RequiredErrorReason",
      "SizeLimitError.Reason"        => "SizeLimitErrorReason",
      "StringFormatError.Reason"     => "StringFormatErrorReason",
      "StringLengthError.Reason"     => "StringLengthErrorReason",
      "AdGroupChangeData"            => "AdGroupChangeData",
      "CampaignChangeData"           => "CampaignChangeData",
      "CustomerSyncError"            => "CustomerSyncError",
      "FeedChangeData"               => "FeedChangeData",
      "CustomerChangeData"           => "CustomerChangeData",
      "CustomerSyncSelector"         => "CustomerSyncSelector",
      "ChangeStatus"                 => "ChangeStatus",
      "CustomerSyncError.Reason"     => "CustomerSyncErrorReason",
      "get"                          => "CustomerSyncServiceGet",
      "getResponse"                  => "CustomerSyncServiceGetResponse",
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
   * Returns information about changed entities inside a customer's account.
   *
   * @param selector Specifies the filter for selecting changehistory events for a customer.
   * @return A Customer->Campaign->AdGroup hierarchy containing information about the objects
   *                 changed at each level.  All Campaigns that are requested in the selector will be returned,
   *                 regardless of whether or not they have changed, but unchanged AdGroups will be ignored.
   */
  public function get($selector)
  {
    $args = new CustomerSyncServiceGet($selector);
    $result = $this->__soapCall("get", [$args]);
    return $result->rval;
  }
}