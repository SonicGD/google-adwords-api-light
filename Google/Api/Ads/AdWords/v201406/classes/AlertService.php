<?php

require_once 'AlertService.require.php';

  /**
   * AlertService
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AlertService extends AdWordsSoapClient
  {
      const SERVICE_NAME = "AlertService";
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201406";
      const ENDPOINT = "https://adwords.google.com/api/adwords/mcm/v201406/AlertService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/mcm/v201406/AlertService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "ClientTermsError" => "ClientTermsError",
      "DateError" => "DateError",
      "DistinctError" => "DistinctError",
      "IdError" => "IdError",
      "InternalApiError" => "InternalApiError",
      "NotEmptyError" => "NotEmptyError",
      "Paging" => "Paging",
      "QuotaCheckError" => "QuotaCheckError",
      "RangeError" => "RangeError",
      "RateExceededError" => "RateExceededError",
      "ReadOnlyError" => "ReadOnlyError",
      "RejectedError" => "RejectedError",
      "RequestError" => "RequestError",
      "RequiredError" => "RequiredError",
      "SizeLimitError" => "SizeLimitError",
      "SoapHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StringLengthError" => "StringLengthError",
      "DatabaseError" => "DatabaseError",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApplicationException" => "ApplicationException",
      "Page" => "Page",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AuthorizationError.Reason" => "AuthorizationErrorReason",
      "ClientTermsError.Reason" => "ClientTermsErrorReason",
      "DatabaseError.Reason" => "DatabaseErrorReason",
      "DateError.Reason" => "DateErrorReason",
      "DistinctError.Reason" => "DistinctErrorReason",
      "IdError.Reason" => "IdErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotEmptyError.Reason" => "NotEmptyErrorReason",
      "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateExceededError.Reason" => "RateExceededErrorReason",
      "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
      "RejectedError.Reason" => "RejectedErrorReason",
      "RequestError.Reason" => "RequestErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "SizeLimitError.Reason" => "SizeLimitErrorReason",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "AlertError" => "AlertError",
      "AlertQuery" => "AlertQuery",
      "Detail" => "Detail",
      "Alert" => "Alert",
      "AlertPage" => "AlertPage",
      "AlertSelector" => "AlertSelector",
      "NoStatsPage" => "NoStatsPage",
      "AlertError.Reason" => "AlertErrorReason",
      "AlertSeverity" => "AlertSeverity",
      "AlertType" => "AlertType",
      "ClientSpec" => "ClientSpec",
      "FilterSpec" => "FilterSpec",
      "TriggerTimeSpec" => "TriggerTimeSpec",
      "get" => "AlertServiceGet",
      "getResponse" => "AlertServiceGetResponse",
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
     * Gets the list of alerts matching the specified clients and time period.
     *
     * @param selector selects the alerts for which to search.
     * @return a            page of alerts.
     * @throws ApiException if an error occurs
     */
    public function get($selector)
    {
        $args = new AlertServiceGet($selector);
        $result = $this->__soapCall("get", array($args));

        return $result->rval;
    }
  }
