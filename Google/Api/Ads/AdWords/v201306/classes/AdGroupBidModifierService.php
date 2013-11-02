<?php

require_once('AdGroupBidModifierService.require.php');


/**
 * AdGroupBidModifierService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class AdGroupBidModifierService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                   => "AdGroupBidModifierServiceGetResponse",
        "get"                           => "AdGroupBidModifierServiceGet",
        "mutate"                        => "AdGroupBidModifierServiceMutate",
        "mutateResponse"                => "AdGroupBidModifierServiceMutateResponse",
        "DateTime"                      => "AdWordsDateTime",
        "SoapHeader"                    => "SoapRequestHeader",
        "AuthenticationError"           => "AuthenticationError",
        "ApiError"                      => "ApiError",
        "AuthorizationError"            => "AuthorizationError",
        "ClientTermsError"              => "ClientTermsError",
        "CriterionError"                => "CriterionError",
        "DateRange"                     => "DateRange",
        "DistinctError"                 => "DistinctError",
        "EntityNotFound"                => "EntityNotFound",
        "IdError"                       => "IdError",
        "InternalApiError"              => "InternalApiError",
        "NotWhitelistedError"           => "NotWhitelistedError",
        "OperatorError"                 => "OperatorError",
        "OrderBy"                       => "OrderBy",
        "Paging"                        => "Paging",
        "Platform"                      => "Platform",
        "Criterion"                     => "Criterion",
        "Predicate"                     => "Predicate",
        "QuotaCheckError"               => "QuotaCheckError",
        "RangeError"                    => "RangeError",
        "RateExceededError"             => "RateExceededError",
        "ReadOnlyError"                 => "ReadOnlyError",
        "RequestError"                  => "RequestError",
        "RequiredError"                 => "RequiredError",
        "SelectorError"                 => "SelectorError",
        "SizeLimitError"                => "SizeLimitError",
        "SoapResponseHeader"            => "SoapResponseHeader",
        "StringLengthError"             => "StringLengthError",
        "DatabaseError"                 => "DatabaseError",
        "ApiException"                  => "ApiException",
        "ApplicationException"          => "ApplicationException",
        "Selector"                      => "Selector",
        "AdGroupBidModifier"            => "AdGroupBidModifier",
        "AdGroupBidModifierOperation"   => "AdGroupBidModifierOperation",
        "Operation"                     => "Operation",
        "AdGroupBidModifierPage"        => "AdGroupBidModifierPage",
        "Page"                          => "Page",
        "AdGroupBidModifierReturnValue" => "AdGroupBidModifierReturnValue",
        "ListReturnValue"               => "ListReturnValue",
        "AuthenticationError.Reason"    => "AuthenticationErrorReason",
        "AuthorizationError.Reason"     => "AuthorizationErrorReason",
        "BidModifierSource"             => "BidModifierSource",
        "ClientTermsError.Reason"       => "ClientTermsErrorReason",
        "Criterion.Type"                => "CriterionType",
        "CriterionError.Reason"         => "CriterionErrorReason",
        "DatabaseError.Reason"          => "DatabaseErrorReason",
        "DistinctError.Reason"          => "DistinctErrorReason",
        "EntityNotFound.Reason"         => "EntityNotFoundReason",
        "IdError.Reason"                => "IdErrorReason",
        "InternalApiError.Reason"       => "InternalApiErrorReason",
        "NotWhitelistedError.Reason"    => "NotWhitelistedErrorReason",
        "Operator"                      => "Operator",
        "OperatorError.Reason"          => "OperatorErrorReason",
        "Predicate.Operator"            => "PredicateOperator",
        "QuotaCheckError.Reason"        => "QuotaCheckErrorReason",
        "RangeError.Reason"             => "RangeErrorReason",
        "RateExceededError.Reason"      => "RateExceededErrorReason",
        "ReadOnlyError.Reason"          => "ReadOnlyErrorReason",
        "RequestError.Reason"           => "RequestErrorReason",
        "RequiredError.Reason"          => "RequiredErrorReason",
        "SelectorError.Reason"          => "SelectorErrorReason",
        "SizeLimitError.Reason"         => "SizeLimitErrorReason",
        "SortOrder"                     => "SortOrder",
        "StringLengthError.Reason"      => "StringLengthErrorReason",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/AdGroupBidModifierService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = AdGroupBidModifierService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'AdGroupBidModifierService',
            'https://adwords.google.com/api/adwords/cm/v201306'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Gets ad group level criterion bid modifiers.
     *
     * @param selector The selector specifying the {@link AdGroupBidModifier}s to return.
     *
     * @return A list of ad group bid modifiers.
     * @throws ApiException when there is at least one error with the request.
     */
    public function get($selector)
    {
        $arg = new AdGroupBidModifierServiceGet($selector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }


    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE, SET.</span>
     *
     *
     *
     * Adds, removes or updates ad group bid modifier overrides.
     *
     * @param operations The operations to apply.
     *
     * @return The added ad group bid modifier overrides.
     * @throws ApiException when there is at least one error with the request.
     */
    public function mutate($operations)
    {
        $arg = new AdGroupBidModifierServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }

}