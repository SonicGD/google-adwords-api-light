<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

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
        "getResponse"                   => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupBidModifierServiceGetResponse',
        "get"                           => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupBidModifierServiceGet',
        "mutate"                        => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupBidModifierServiceMutate',
        "mutateResponse"                => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupBidModifierServiceMutateResponse',
        "DateTime"                      => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
        "SoapHeader"                    => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
        "AuthenticationError"           => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
        "ApiError"                      => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
        "AuthorizationError"            => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
        "ClientTermsError"              => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
        "CriterionError"                => '\Google\Api\Ads\AdWords\v201306\classes\CriterionError',
        "DateRange"                     => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
        "DistinctError"                 => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
        "EntityNotFound"                => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
        "IdError"                       => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
        "InternalApiError"              => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
        "NotWhitelistedError"           => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
        "OperatorError"                 => '\Google\Api\Ads\AdWords\v201306\classes\OperatorError',
        "OrderBy"                       => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
        "Paging"                        => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
        "Platform"                      => '\Google\Api\Ads\AdWords\v201306\classes\Platform',
        "Criterion"                     => '\Google\Api\Ads\AdWords\v201306\classes\Criterion',
        "Predicate"                     => '\Google\Api\Ads\AdWords\v201306\classes\Predicate',
        "QuotaCheckError"               => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
        "RangeError"                    => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
        "RateExceededError"             => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
        "ReadOnlyError"                 => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
        "RequestError"                  => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
        "RequiredError"                 => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
        "SelectorError"                 => '\Google\Api\Ads\AdWords\v201306\classes\SelectorError',
        "SizeLimitError"                => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
        "SoapResponseHeader"            => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
        "StringLengthError"             => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
        "DatabaseError"                 => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
        "ApiException"                  => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
        "ApplicationException"          => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
        "Selector"                      => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
        "AdGroupBidModifier"            => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupBidModifier',
        "AdGroupBidModifierOperation"   => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupBidModifierOperation',
        "Operation"                     => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
        "AdGroupBidModifierPage"        => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupBidModifierPage',
        "Page"                          => '\Google\Api\Ads\AdWords\v201306\classes\Page',
        "AdGroupBidModifierReturnValue" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupBidModifierReturnValue',
        "ListReturnValue"               => '\Google\Api\Ads\AdWords\v201306\classes\ListReturnValue',
        "AuthenticationError.Reason"    => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
        "AuthorizationError.Reason"     => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
        "BidModifierSource"             => '\Google\Api\Ads\AdWords\v201306\classes\BidModifierSource',
        "ClientTermsError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
        "Criterion.Type"                => '\Google\Api\Ads\AdWords\v201306\classes\CriterionType',
        "CriterionError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\CriterionErrorReason',
        "DatabaseError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
        "DistinctError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
        "EntityNotFound.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
        "IdError.Reason"                => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
        "InternalApiError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
        "NotWhitelistedError.Reason"    => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
        "Operator"                      => '\Google\Api\Ads\AdWords\v201306\classes\Operator',
        "OperatorError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\OperatorErrorReason',
        "Predicate.Operator"            => '\Google\Api\Ads\AdWords\v201306\classes\PredicateOperator',
        "QuotaCheckError.Reason"        => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
        "RangeError.Reason"             => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
        "RateExceededError.Reason"      => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
        "ReadOnlyError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
        "RequestError.Reason"           => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
        "RequiredError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
        "SelectorError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
        "SizeLimitError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
        "SortOrder"                     => '\Google\Api\Ads\AdWords\v201306\classes\SortOrder',
        "StringLengthError.Reason"      => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
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