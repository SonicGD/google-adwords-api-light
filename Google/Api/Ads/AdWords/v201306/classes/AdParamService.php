<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

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
        "getResponse"                  => '\Google\Api\Ads\AdWords\v201306\classes\AdParamServiceGetResponse',
        "get"                          => '\Google\Api\Ads\AdWords\v201306\classes\AdParamServiceGet',
        "mutate"                       => '\Google\Api\Ads\AdWords\v201306\classes\AdParamServiceMutate',
        "mutateResponse"               => '\Google\Api\Ads\AdWords\v201306\classes\AdParamServiceMutateResponse',
        "DateTime"                     => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
        "SoapHeader"                   => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
        "AdParam"                      => '\Google\Api\Ads\AdWords\v201306\classes\AdParam',
        "AdParamError"                 => '\Google\Api\Ads\AdWords\v201306\classes\AdParamError',
        "ApiError"                     => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
        "AdParamOperation"             => '\Google\Api\Ads\AdWords\v201306\classes\AdParamOperation',
        "Operation"                    => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
        "AdParamPage"                  => '\Google\Api\Ads\AdWords\v201306\classes\AdParamPage',
        "AdParamPolicyError"           => '\Google\Api\Ads\AdWords\v201306\classes\AdParamPolicyError',
        "PolicyViolationError"         => '\Google\Api\Ads\AdWords\v201306\classes\PolicyViolationError',
        "AdxError"                     => '\Google\Api\Ads\AdWords\v201306\classes\AdxError',
        "AuthenticationError"          => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
        "AuthorizationError"           => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
        "ClientTermsError"             => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
        "DateRange"                    => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
        "DistinctError"                => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
        "IdError"                      => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
        "InternalApiError"             => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
        "NotEmptyError"                => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
        "NotWhitelistedError"          => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
        "NullError"                    => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
        "OperationAccessDenied"        => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
        "OperatorError"                => '\Google\Api\Ads\AdWords\v201306\classes\OperatorError',
        "OrderBy"                      => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
        "Paging"                       => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
        "PolicyViolationError.Part"    => '\Google\Api\Ads\AdWords\v201306\classes\PolicyViolationErrorPart',
        "PolicyViolationKey"           => '\Google\Api\Ads\AdWords\v201306\classes\PolicyViolationKey',
        "Predicate"                    => '\Google\Api\Ads\AdWords\v201306\classes\Predicate',
        "QuotaCheckError"              => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
        "RangeError"                   => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
        "RateExceededError"            => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
        "ReadOnlyError"                => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
        "RequestError"                 => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
        "RequiredError"                => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
        "SelectorError"                => '\Google\Api\Ads\AdWords\v201306\classes\SelectorError',
        "SizeLimitError"               => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
        "SoapResponseHeader"           => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
        "StringLengthError"            => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
        "DatabaseError"                => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
        "ApiException"                 => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
        "ApplicationException"         => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
        "Selector"                     => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
        "AdParamError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\AdParamErrorReason',
        "AdxError.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\AdxErrorReason',
        "AuthenticationError.Reason"   => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
        "AuthorizationError.Reason"    => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
        "ClientTermsError.Reason"      => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
        "DatabaseError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
        "DistinctError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
        "IdError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
        "InternalApiError.Reason"      => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
        "NotEmptyError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
        "NotWhitelistedError.Reason"   => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
        "NullError.Reason"             => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
        "OperationAccessDenied.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
        "Operator"                     => '\Google\Api\Ads\AdWords\v201306\classes\Operator',
        "OperatorError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\OperatorErrorReason',
        "Predicate.Operator"           => '\Google\Api\Ads\AdWords\v201306\classes\PredicateOperator',
        "QuotaCheckError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
        "RangeError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
        "RateExceededError.Reason"     => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
        "ReadOnlyError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
        "RequestError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
        "RequiredError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
        "SelectorError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
        "SizeLimitError.Reason"        => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
        "SortOrder"                    => '\Google\Api\Ads\AdWords\v201306\classes\SortOrder',
        "StringLengthError.Reason"     => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
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