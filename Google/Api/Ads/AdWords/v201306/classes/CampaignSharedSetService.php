<?php

require_once('CampaignSharedSetService.require.php');


/**
 * CampaignSharedSetService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class CampaignSharedSetService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                     => "CampaignSharedSetServiceGetResponse",
        "get"                             => "CampaignSharedSetServiceGet",
        "mutate"                          => "CampaignSharedSetServiceMutate",
        "mutateResponse"                  => "CampaignSharedSetServiceMutateResponse",
        "DateTime"                        => "AdWordsDateTime",
        "SoapHeader"                      => "SoapRequestHeader",
        "AuthenticationError"             => "AuthenticationError",
        "ApiError"                        => "ApiError",
        "AuthorizationError"              => "AuthorizationError",
        "BetaError"                       => "BetaError",
        "CampaignSharedSet"               => "CampaignSharedSet",
        "CampaignSharedSetError"          => "CampaignSharedSetError",
        "CampaignSharedSetOperation"      => "CampaignSharedSetOperation",
        "Operation"                       => "Operation",
        "CampaignSharedSetPage"           => "CampaignSharedSetPage",
        "NullStatsPage"                   => "NullStatsPage",
        "CampaignSharedSetReturnValue"    => "CampaignSharedSetReturnValue",
        "ListReturnValue"                 => "ListReturnValue",
        "ClientTermsError"                => "ClientTermsError",
        "DateError"                       => "DateError",
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
        "Page"                            => "Page",
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
        "SelectorError"                   => "SelectorError",
        "SizeLimitError"                  => "SizeLimitError",
        "SoapResponseHeader"              => "SoapResponseHeader",
        "StringLengthError"               => "StringLengthError",
        "DatabaseError"                   => "DatabaseError",
        "ApiException"                    => "ApiException",
        "ApplicationException"            => "ApplicationException",
        "Selector"                        => "Selector",
        "AuthenticationError.Reason"      => "AuthenticationErrorReason",
        "AuthorizationError.Reason"       => "AuthorizationErrorReason",
        "BetaError.Reason"                => "BetaErrorReason",
        "CampaignSharedSet.Status"        => "CampaignSharedSetStatus",
        "CampaignSharedSetError.Reason"   => "CampaignSharedSetErrorReason",
        "ClientTermsError.Reason"         => "ClientTermsErrorReason",
        "DatabaseError.Reason"            => "DatabaseErrorReason",
        "DateError.Reason"                => "DateErrorReason",
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
        "SelectorError.Reason"            => "SelectorErrorReason",
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
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/CampaignSharedSetService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = CampaignSharedSetService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'CampaignSharedSetService',
            'https://adwords.google.com/api/adwords/cm/v201306'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns a list of CampaignSharedSets based on the given selector.
     *
     * @param selector the selector specifying the query
     *
     * @return a list of CampaignSharedSet entities that meet the criterion specified
     * by the selector
     * @throws ApiException
     */
    public function get($selector)
    {
        $arg = new CampaignSharedSetServiceGet($selector);
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
     * Applies the list of mutate operations.
     *
     * @param operations the operations to apply
     *
     * @return the modified list of CampaignSharedSet associations
     * @throws ApiException
     */
    public function mutate($operations)
    {
        $arg = new CampaignSharedSetServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }

}