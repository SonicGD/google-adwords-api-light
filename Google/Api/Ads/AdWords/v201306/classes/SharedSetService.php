<?php

require_once('SharedSetService.require.php');


/**
 * SharedSetService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class SharedSetService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                     => "SharedSetServiceGetResponse",
        "get"                             => "SharedSetServiceGet",
        "mutate"                          => "SharedSetServiceMutate",
        "mutateResponse"                  => "SharedSetServiceMutateResponse",
        "DateTime"                        => "AdWordsDateTime",
        "SoapHeader"                      => "SoapRequestHeader",
        "AuthenticationError"             => "AuthenticationError",
        "ApiError"                        => "ApiError",
        "AuthorizationError"              => "AuthorizationError",
        "BetaError"                       => "BetaError",
        "ClientTermsError"                => "ClientTermsError",
        "DateRange"                       => "DateRange",
        "DistinctError"                   => "DistinctError",
        "EntityCountLimitExceeded"        => "EntityCountLimitExceeded",
        "EntityNotFound"                  => "EntityNotFound",
        "IdError"                         => "IdError",
        "InternalApiError"                => "InternalApiError",
        "NewEntityCreationError"          => "NewEntityCreationError",
        "NotEmptyError"                   => "NotEmptyError",
        "NotWhitelistedError"             => "NotWhitelistedError",
        "NullError"                       => "NullError",
        "OperationAccessDenied"           => "OperationAccessDenied",
        "OperatorError"                   => "OperatorError",
        "OrderBy"                         => "OrderBy",
        "Paging"                          => "Paging",
        "PagingError"                     => "PagingError",
        "Predicate"                       => "Predicate",
        "QuotaCheckError"                 => "QuotaCheckError",
        "RangeError"                      => "RangeError",
        "RateExceededError"               => "RateExceededError",
        "ReadOnlyError"                   => "ReadOnlyError",
        "RejectedError"                   => "RejectedError",
        "RequestError"                    => "RequestError",
        "RequiredError"                   => "RequiredError",
        "SharedSet"                       => "SharedSet",
        "SharedSetError"                  => "SharedSetError",
        "SharedSetOperation"              => "SharedSetOperation",
        "Operation"                       => "Operation",
        "SharedSetPage"                   => "SharedSetPage",
        "NullStatsPage"                   => "NullStatsPage",
        "SharedSetReturnValue"            => "SharedSetReturnValue",
        "ListReturnValue"                 => "ListReturnValue",
        "SizeLimitError"                  => "SizeLimitError",
        "SoapResponseHeader"              => "SoapResponseHeader",
        "StringLengthError"               => "StringLengthError",
        "DatabaseError"                   => "DatabaseError",
        "Page"                            => "Page",
        "ApiException"                    => "ApiException",
        "ApplicationException"            => "ApplicationException",
        "Selector"                        => "Selector",
        "AuthenticationError.Reason"      => "AuthenticationErrorReason",
        "AuthorizationError.Reason"       => "AuthorizationErrorReason",
        "BetaError.Reason"                => "BetaErrorReason",
        "ClientTermsError.Reason"         => "ClientTermsErrorReason",
        "DatabaseError.Reason"            => "DatabaseErrorReason",
        "DistinctError.Reason"            => "DistinctErrorReason",
        "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
        "EntityNotFound.Reason"           => "EntityNotFoundReason",
        "IdError.Reason"                  => "IdErrorReason",
        "InternalApiError.Reason"         => "InternalApiErrorReason",
        "NewEntityCreationError.Reason"   => "NewEntityCreationErrorReason",
        "NotEmptyError.Reason"            => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason"      => "NotWhitelistedErrorReason",
        "NullError.Reason"                => "NullErrorReason",
        "OperationAccessDenied.Reason"    => "OperationAccessDeniedReason",
        "Operator"                        => "Operator",
        "OperatorError.Reason"            => "OperatorErrorReason",
        "PagingError.Reason"              => "PagingErrorReason",
        "Predicate.Operator"              => "PredicateOperator",
        "QuotaCheckError.Reason"          => "QuotaCheckErrorReason",
        "RangeError.Reason"               => "RangeErrorReason",
        "RateExceededError.Reason"        => "RateExceededErrorReason",
        "ReadOnlyError.Reason"            => "ReadOnlyErrorReason",
        "RejectedError.Reason"            => "RejectedErrorReason",
        "RequestError.Reason"             => "RequestErrorReason",
        "RequiredError.Reason"            => "RequiredErrorReason",
        "SharedSet.Status"                => "SharedSetStatus",
        "SharedSetError.Reason"           => "SharedSetErrorReason",
        "SharedSetType"                   => "SharedSetType",
        "SizeLimitError.Reason"           => "SizeLimitErrorReason",
        "SortOrder"                       => "SortOrder",
        "StringLengthError.Reason"        => "StringLengthErrorReason",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/SharedSetService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = SharedSetService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'SharedSetService',
            'https://adwords.google.com/api/adwords/cm/v201306'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns a list of SharedSets based on the given selector.
     *
     * @param selector the selector specifying the query
     *
     * @return a list of SharedSet entities that meet the criterion specified
     * by the selector
     * @throws ApiException
     */
    public function get($selector)
    {
        $arg = new SharedSetServiceGet($selector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }


    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Applies the list of mutate operations.
     *
     * @param operations the operations to apply
     *
     * @return the modified CriterionList entities
     * @throws ApiException
     */
    public function mutate($operations)
    {
        $arg = new SharedSetServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }

}