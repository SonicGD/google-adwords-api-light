<?php

require_once('CustomerService.require.php');


/**
 * CustomerService
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class CustomerService extends AdWordsSoapClient
{

  const SERVICE_NAME = "CustomerService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201605";
  const ENDPOINT = "https://adwords.google.com/api/adwords/mcm/v201605/CustomerService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/mcm/v201605/CustomerService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = [
      "AuthenticationError"          => "AuthenticationError",
      "AuthorizationError"           => "AuthorizationError",
      "ClientTermsError"             => "ClientTermsError",
      "DistinctError"                => "DistinctError",
      "IdError"                      => "IdError",
      "InternalApiError"             => "InternalApiError",
      "NotEmptyError"                => "NotEmptyError",
      "NullError"                    => "NullError",
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
      "UrlError"                     => "UrlError",
      "DatabaseError"                => "DatabaseError",
      "ApiError"                     => "ApiError",
      "ApiException"                 => "ApiException",
      "ApplicationException"         => "ApplicationException",
      "AuthenticationError.Reason"   => "AuthenticationErrorReason",
      "AuthorizationError.Reason"    => "AuthorizationErrorReason",
      "ClientTermsError.Reason"      => "ClientTermsErrorReason",
      "ConversionDeduplicationMode"  => "ConversionDeduplicationMode",
      "DatabaseError.Reason"         => "DatabaseErrorReason",
      "DistinctError.Reason"         => "DistinctErrorReason",
      "IdError.Reason"               => "IdErrorReason",
      "InternalApiError.Reason"      => "InternalApiErrorReason",
      "NotEmptyError.Reason"         => "NotEmptyErrorReason",
      "NullError.Reason"             => "NullErrorReason",
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
      "UrlError.Reason"              => "UrlErrorReason",
      "ConversionTrackingSettings"   => "ConversionTrackingSettings",
      "CustomerError"                => "CustomerError",
      "RemarketingSettings"          => "RemarketingSettings",
      "Customer"                     => "Customer",
      "CustomerError.Reason"         => "CustomerErrorReason",
      "get"                          => "CustomerServiceGet",
      "getResponse"                  => "CustomerServiceGetResponse",
      "getCustomers"                 => "GetCustomers",
      "getCustomersResponse"         => "GetCustomersResponse",
      "mutate"                       => "CustomerServiceMutate",
      "mutateResponse"               => "CustomerServiceMutateResponse",
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
   * Returns details of the authorized customer.
   *
   * @return customer associated with the caller
   */
  public function get()
  {
    $args = new CustomerServiceGet();
    $result = $this->__soapCall("get", [$args]);
    return $result->rval;
  }

  /**
   * Returns details of all the customers directly accessible by the user authenticating the call.
   * Callers are discouraged from setting the {@code clientCustomerId} header field in calls to
   * {@link CustomerService#getCustomers()}, as its value is ignored by this method, and its
   * presence will trigger an authorization error if the caller does not have access to the
   * customer with the included ID.
   */
  public function getCustomers()
  {
    $args = new GetCustomers();
    $result = $this->__soapCall("getCustomers", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Update the authorized customer.
   *
   * <p>While there are a limited set of properties available to update, please read this
   * <a href="https://support.google.com/analytics/answer/1033981">help center article
   * on auto-tagging</a> before updating {@code customer.autoTaggingEnabled}.
   *
   * @param customer the requested updated value for the customer.
   * @throws ApiException
   */
  public function mutate($customer)
  {
    $args = new CustomerServiceMutate($customer);
    $result = $this->__soapCall("mutate", [$args]);
    return $result->rval;
  }
}