<?php

require_once('AdParamService.require.php');


/**
 * AdParamService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class AdParamService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                  => "AdParamServiceGetResponse",
        "get"                          => "AdParamServiceGet",
        "mutate"                       => "AdParamServiceMutate",
        "mutateResponse"               => "AdParamServiceMutateResponse",
        "DateTime"                     => "AdWordsDateTime",
        "SoapHeader"                   => "SoapRequestHeader",
        "AdParam"                      => "AdParam",
        "AdParamError"                 => "AdParamError",
        "ApiError"                     => "ApiError",
        "AdParamOperation"             => "AdParamOperation",
        "Operation"                    => "Operation",
        "AdParamPage"                  => "AdParamPage",
        "AdParamPolicyError"           => "AdParamPolicyError",
        "PolicyViolationError"         => "PolicyViolationError",
        "AdxError"                     => "AdxError",
        "AuthenticationError"          => "AuthenticationError",
        "AuthorizationError"           => "AuthorizationError",
        "ClientTermsError"             => "ClientTermsError",
        "DateRange"                    => "DateRange",
        "DistinctError"                => "DistinctError",
        "IdError"                      => "IdError",
        "InternalApiError"             => "InternalApiError",
        "NotEmptyError"                => "NotEmptyError",
        "NotWhitelistedError"          => "NotWhitelistedError",
        "NullError"                    => "NullError",
        "OperationAccessDenied"        => "OperationAccessDenied",
        "OperatorError"                => "OperatorError",
        "OrderBy"                      => "OrderBy",
        "Paging"                       => "Paging",
        "PolicyViolationError.Part"    => "PolicyViolationErrorPart",
        "PolicyViolationKey"           => "PolicyViolationKey",
        "Predicate"                    => "Predicate",
        "QuotaCheckError"              => "QuotaCheckError",
        "RangeError"                   => "RangeError",
        "RateExceededError"            => "RateExceededError",
        "ReadOnlyError"                => "ReadOnlyError",
        "RequestError"                 => "RequestError",
        "RequiredError"                => "RequiredError",
        "SelectorError"                => "SelectorError",
        "SizeLimitError"               => "SizeLimitError",
        "SoapResponseHeader"           => "SoapResponseHeader",
        "StringLengthError"            => "StringLengthError",
        "DatabaseError"                => "DatabaseError",
        "ApiException"                 => "ApiException",
        "ApplicationException"         => "ApplicationException",
        "Selector"                     => "Selector",
        "AdParamError.Reason"          => "AdParamErrorReason",
        "AdxError.Reason"              => "AdxErrorReason",
        "AuthenticationError.Reason"   => "AuthenticationErrorReason",
        "AuthorizationError.Reason"    => "AuthorizationErrorReason",
        "ClientTermsError.Reason"      => "ClientTermsErrorReason",
        "DatabaseError.Reason"         => "DatabaseErrorReason",
        "DistinctError.Reason"         => "DistinctErrorReason",
        "IdError.Reason"               => "IdErrorReason",
        "InternalApiError.Reason"      => "InternalApiErrorReason",
        "NotEmptyError.Reason"         => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason"   => "NotWhitelistedErrorReason",
        "NullError.Reason"             => "NullErrorReason",
        "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
        "Operator"                     => "Operator",
        "OperatorError.Reason"         => "OperatorErrorReason",
        "Predicate.Operator"           => "PredicateOperator",
        "QuotaCheckError.Reason"       => "QuotaCheckErrorReason",
        "RangeError.Reason"            => "RangeErrorReason",
        "RateExceededError.Reason"     => "RateExceededErrorReason",
        "ReadOnlyError.Reason"         => "ReadOnlyErrorReason",
        "RequestError.Reason"          => "RequestErrorReason",
        "RequiredError.Reason"         => "RequiredErrorReason",
        "SelectorError.Reason"         => "SelectorErrorReason",
        "SizeLimitError.Reason"        => "SizeLimitErrorReason",
        "SortOrder"                    => "SortOrder",
        "StringLengthError.Reason"     => "StringLengthErrorReason",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/AdParamService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = AdParamService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'AdParamService',
            'https://adwords.google.com/api/adwords/cm/v201306'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the ad parameters that match the criteria specified in the
     * selector.
     *
     * @param serviceSelector Specifies which ad parameters to return.
     *
     * @return A list of ad parameters.
     */
    public function get($serviceSelector)
    {
        $arg = new AdParamServiceGet($serviceSelector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }


    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET, REMOVE.</span>
     *
     *
     *
     * Sets and removes ad parameters.
     * <p class="note"><b>Note:</b> {@code ADD} is not supported. Use {@code SET}
     * for new ad parameters.</p>
     *
     * <ul class="nolist">
     * <li>{@code SET}: Creates or updates an ad parameter, setting the new
     * parameterized value for the given ad group / keyword pair.
     * <li>{@code REMOVE}: Removes an ad parameter. The <code><var>default-value</var>
     * </code> specified in the ad text will be used.</li>
     * </ul>
     *
     * @param operations The operations to perform.
     *
     * @return A list of ad parameters, where each entry in the list is the
     * result of applying the operation in the input list with the same index.
     * For a {@code SET} operation, the returned ad parameter will contain the
     * updated values. For a {@code REMOVE} operation, the returned ad parameter
     * will simply be the ad parameter that was removed.
     */
    public function mutate($operations)
    {
        $arg = new AdParamServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }

}