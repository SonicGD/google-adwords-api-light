<?php

require_once('ReportDefinitionService.require.php');


/**
 * ReportDefinitionService
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class ReportDefinitionService extends AdWordsSoapClient
{

  const SERVICE_NAME = "ReportDefinitionService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
  const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201605/ReportDefinitionService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201605/ReportDefinitionService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = [
      "AuthenticationError"          => "AuthenticationError",
      "AuthorizationError"           => "AuthorizationError",
      "ClientTermsError"             => "ClientTermsError",
      "CollectionSizeError"          => "CollectionSizeError",
      "DateError"                    => "DateError",
      "DistinctError"                => "DistinctError",
      "EnumValuePair"                => "EnumValuePair",
      "IdError"                      => "IdError",
      "InternalApiError"             => "InternalApiError",
      "NotEmptyError"                => "NotEmptyError",
      "NotWhitelistedError"          => "NotWhitelistedError",
      "NullError"                    => "NullError",
      "OperationAccessDenied"        => "OperationAccessDenied",
      "OperatorError"                => "OperatorError",
      "QuotaCheckError"              => "QuotaCheckError",
      "RangeError"                   => "RangeError",
      "RateExceededError"            => "RateExceededError",
      "ReadOnlyError"                => "ReadOnlyError",
      "RejectedError"                => "RejectedError",
      "ReportDefinitionError"        => "ReportDefinitionError",
      "ReportDefinitionField"        => "ReportDefinitionField",
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
      "CollectionSizeError.Reason"   => "CollectionSizeErrorReason",
      "DatabaseError.Reason"         => "DatabaseErrorReason",
      "DateError.Reason"             => "DateErrorReason",
      "DistinctError.Reason"         => "DistinctErrorReason",
      "IdError.Reason"               => "IdErrorReason",
      "InternalApiError.Reason"      => "InternalApiErrorReason",
      "NotEmptyError.Reason"         => "NotEmptyErrorReason",
      "NotWhitelistedError.Reason"   => "NotWhitelistedErrorReason",
      "NullError.Reason"             => "NullErrorReason",
      "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
      "OperatorError.Reason"         => "OperatorErrorReason",
      "QuotaCheckError.Reason"       => "QuotaCheckErrorReason",
      "RangeError.Reason"            => "RangeErrorReason",
      "RateExceededError.Reason"     => "RateExceededErrorReason",
      "ReadOnlyError.Reason"         => "ReadOnlyErrorReason",
      "RejectedError.Reason"         => "RejectedErrorReason",
      "ReportDefinition.ReportType"  => "ReportDefinitionReportType",
      "ReportDefinitionError.Reason" => "ReportDefinitionErrorReason",
      "RequestError.Reason"          => "RequestErrorReason",
      "RequiredError.Reason"         => "RequiredErrorReason",
      "SizeLimitError.Reason"        => "SizeLimitErrorReason",
      "StringFormatError.Reason"     => "StringFormatErrorReason",
      "StringLengthError.Reason"     => "StringLengthErrorReason",
      "getReportFields"              => "GetReportFields",
      "getReportFieldsResponse"      => "GetReportFieldsResponse",
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
   * Returns the available report fields for a given report type.
   * When using this method the {@code clientCustomerId} header field is
   * optional. Callers are discouraged from setting the clientCustomerId
   * header field in calls to this method as its presence will trigger an
   * authorization error if the caller does not have access to the customer
   * with the included ID.
   *
   * @param reportType The type of report.
   * @return The list of available report fields. Each
   *                   {@link ReportDefinitionField} encapsulates the field name, the
   *                   field data type, and the enum values (if the field's type is
   *                   {@code enum}).
   * @throws ApiException if a problem occurred while fetching the
   *                   ReportDefinitionField information.
   */
  public function getReportFields($reportType)
  {
    $args = new GetReportFields($reportType);
    $result = $this->__soapCall("getReportFields", [$args]);
    return $result->rval;
  }
}