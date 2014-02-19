<?php

require_once('ReportDefinitionService.require.php');


/**
 * ReportDefinitionService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 * @author     WSDLInterpreter
 */
class ReportDefinitionService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                  => "ReportDefinitionServiceGetResponse",
        "get"                          => "ReportDefinitionServiceGet",
        "mutate"                       => "ReportDefinitionServiceMutate",
        "mutateResponse"               => "ReportDefinitionServiceMutateResponse",
        "mutateCallToAction"           => "ReportDefinitionServiceMutateCallToAction",
        "search"                       => "ReportDefinitionServiceSearch",
        "Function"                     => "FeedFunction",
        "DateTime"                     => "AdWordsDateTime",
        "SoapHeader"                   => "SoapRequestHeader",
        "AuthenticationError"          => "AuthenticationError",
        "ApiError"                     => "ApiError",
        "AuthorizationError"           => "AuthorizationError",
        "BetaError"                    => "BetaError",
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
        "SoapResponseHeader"           => "SoapResponseHeader",
        "StringLengthError"            => "StringLengthError",
        "DatabaseError"                => "DatabaseError",
        "ApiException"                 => "ApiException",
        "ApplicationException"         => "ApplicationException",
        "AuthenticationError.Reason"   => "AuthenticationErrorReason",
        "AuthorizationError.Reason"    => "AuthorizationErrorReason",
        "BetaError.Reason"             => "BetaErrorReason",
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
        "StringLengthError.Reason"     => "StringLengthErrorReason",
        "getReportFields"              => "getReportFields",
        "getReportFieldsResponse"      => "getReportFieldsResponse",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201309/ReportDefinitionService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = ReportDefinitionService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'ReportDefinitionService',
            'https://adwords.google.com/api/adwords/cm/v201309'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the available report fields for a given report type.
     *
     * @param reportType The type of report.
     *
     * @return The list of available report fields. Each
     * {@link ReportDefinitionField} encapsulates the field name, the
     * field data type, and the enum values (if the field's type is
     * {@code enum}).
     * @throws ApiException if a problem occurred while fetching the
     * ReportDefinitionField information.
     */
    public function getReportFields($reportType)
    {
        $arg = new getReportFields($reportType);
        $result = $this->__soapCall("getReportFields", array($arg));
        return $result->rval;
    }

}