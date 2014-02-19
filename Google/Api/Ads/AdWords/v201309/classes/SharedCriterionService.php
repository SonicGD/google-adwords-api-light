<?php

require_once('SharedCriterionService.require.php');


/**
 * SharedCriterionService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 * @author     WSDLInterpreter
 */
class SharedCriterionService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                        => "SharedCriterionServiceGetResponse",
        "get"                                => "SharedCriterionServiceGet",
        "mutate"                             => "SharedCriterionServiceMutate",
        "mutateResponse"                     => "SharedCriterionServiceMutateResponse",
        "mutateCallToAction"                 => "SharedCriterionServiceMutateCallToAction",
        "search"                             => "SharedCriterionServiceSearch",
        "Function"                           => "FeedFunction",
        "DateTime"                           => "AdWordsDateTime",
        "SoapHeader"                         => "SoapRequestHeader",
        "AuthenticationError"                => "AuthenticationError",
        "ApiError"                           => "ApiError",
        "AuthorizationError"                 => "AuthorizationError",
        "BetaError"                          => "BetaError",
        "ClientTermsError"                   => "ClientTermsError",
        "CriterionError"                     => "CriterionError",
        "DateRange"                          => "DateRange",
        "DistinctError"                      => "DistinctError",
        "EntityCountLimitExceeded"           => "EntityCountLimitExceeded",
        "EntityNotFound"                     => "EntityNotFound",
        "IdError"                            => "IdError",
        "InternalApiError"                   => "InternalApiError",
        "Keyword"                            => "Keyword",
        "Criterion"                          => "Criterion",
        "MobileAppCategory"                  => "MobileAppCategory",
        "MobileApplication"                  => "MobileApplication",
        "NotEmptyError"                      => "NotEmptyError",
        "NotWhitelistedError"                => "NotWhitelistedError",
        "NullError"                          => "NullError",
        "OperatorError"                      => "OperatorError",
        "OrderBy"                            => "OrderBy",
        "Paging"                             => "Paging",
        "Placement"                          => "Placement",
        "Predicate"                          => "Predicate",
        "ProductConditionOperand"            => "ProductConditionOperand",
        "QuotaCheckError"                    => "QuotaCheckError",
        "RangeError"                         => "RangeError",
        "RateExceededError"                  => "RateExceededError",
        "ReadOnlyError"                      => "ReadOnlyError",
        "RequestError"                       => "RequestError",
        "RequiredError"                      => "RequiredError",
        "SharedCriterionError"               => "SharedCriterionError",
        "SizeLimitError"                     => "SizeLimitError",
        "SoapResponseHeader"                 => "SoapResponseHeader",
        "StringLengthError"                  => "StringLengthError",
        "CriterionUserInterest"              => "CriterionUserInterest",
        "CriterionUserList"                  => "CriterionUserList",
        "Vertical"                           => "Vertical",
        "WebpageCondition"                   => "WebpageCondition",
        "WebpageParameter"                   => "WebpageParameter",
        "CriterionParameter"                 => "CriterionParameter",
        "DatabaseError"                      => "DatabaseError",
        "ProductCondition"                   => "ProductCondition",
        "Webpage"                            => "Webpage",
        "ApiException"                       => "ApiException",
        "ApplicationException"               => "ApplicationException",
        "Product"                            => "Product",
        "Selector"                           => "Selector",
        "SharedCriterion"                    => "SharedCriterion",
        "SharedCriterionOperation"           => "SharedCriterionOperation",
        "Operation"                          => "Operation",
        "SharedCriterionPage"                => "SharedCriterionPage",
        "Page"                               => "Page",
        "SharedCriterionReturnValue"         => "SharedCriterionReturnValue",
        "ListReturnValue"                    => "ListReturnValue",
        "AuthenticationError.Reason"         => "AuthenticationErrorReason",
        "AuthorizationError.Reason"          => "AuthorizationErrorReason",
        "BetaError.Reason"                   => "BetaErrorReason",
        "ClientTermsError.Reason"            => "ClientTermsErrorReason",
        "Criterion.Type"                     => "CriterionType",
        "CriterionError.Reason"              => "CriterionErrorReason",
        "DatabaseError.Reason"               => "DatabaseErrorReason",
        "DistinctError.Reason"               => "DistinctErrorReason",
        "EntityCountLimitExceeded.Reason"    => "EntityCountLimitExceededReason",
        "EntityNotFound.Reason"              => "EntityNotFoundReason",
        "IdError.Reason"                     => "IdErrorReason",
        "InternalApiError.Reason"            => "InternalApiErrorReason",
        "KeywordMatchType"                   => "KeywordMatchType",
        "NotEmptyError.Reason"               => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason"         => "NotWhitelistedErrorReason",
        "NullError.Reason"                   => "NullErrorReason",
        "Operator"                           => "Operator",
        "OperatorError.Reason"               => "OperatorErrorReason",
        "Predicate.Operator"                 => "PredicateOperator",
        "QuotaCheckError.Reason"             => "QuotaCheckErrorReason",
        "RangeError.Reason"                  => "RangeErrorReason",
        "RateExceededError.Reason"           => "RateExceededErrorReason",
        "ReadOnlyError.Reason"               => "ReadOnlyErrorReason",
        "RequestError.Reason"                => "RequestErrorReason",
        "RequiredError.Reason"               => "RequiredErrorReason",
        "SharedCriterionError.Reason"        => "SharedCriterionErrorReason",
        "SizeLimitError.Reason"              => "SizeLimitErrorReason",
        "SortOrder"                          => "SortOrder",
        "StringLengthError.Reason"           => "StringLengthErrorReason",
        "CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
        "WebpageConditionOperand"            => "WebpageConditionOperand",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201309/SharedCriterionService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = SharedCriterionService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'SharedCriterionService',
            'https://adwords.google.com/api/adwords/cm/v201309'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * @param selector filters the criteria returned
     *
     * @return
     * @throws ApiException
     */
    public function get($selector)
    {
        $arg = new SharedCriterionServiceGet($selector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }


    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
     *
     *
     *
     * Adds, removes criteria in a shared set.
     *
     * @param operations
     *
     * @return
     * @throws ApiException
     */
    public function mutate($operations)
    {
        $arg = new SharedCriterionServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }

}