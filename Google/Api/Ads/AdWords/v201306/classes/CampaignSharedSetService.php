<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

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
        "getResponse"                     => '\Google\Api\Ads\AdWords\v201306\classes\CampaignSharedSetServiceGetResponse',
        "get"                             => '\Google\Api\Ads\AdWords\v201306\classes\CampaignSharedSetServiceGet',
        "mutate"                          => '\Google\Api\Ads\AdWords\v201306\classes\CampaignSharedSetServiceMutate',
        "mutateResponse"                  => '\Google\Api\Ads\AdWords\v201306\classes\CampaignSharedSetServiceMutateResponse',
        "DateTime"                        => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
        "SoapHeader"                      => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
        "AuthenticationError"             => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
        "ApiError"                        => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
        "AuthorizationError"              => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
        "BetaError"                       => '\Google\Api\Ads\AdWords\v201306\classes\BetaError',
        "CampaignSharedSet"               => '\Google\Api\Ads\AdWords\v201306\classes\CampaignSharedSet',
        "CampaignSharedSetError"          => '\Google\Api\Ads\AdWords\v201306\classes\CampaignSharedSetError',
        "CampaignSharedSetOperation"      => '\Google\Api\Ads\AdWords\v201306\classes\CampaignSharedSetOperation',
        "Operation"                       => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
        "CampaignSharedSetPage"           => '\Google\Api\Ads\AdWords\v201306\classes\CampaignSharedSetPage',
        "NullStatsPage"                   => '\Google\Api\Ads\AdWords\v201306\classes\NullStatsPage',
        "CampaignSharedSetReturnValue"    => '\Google\Api\Ads\AdWords\v201306\classes\CampaignSharedSetReturnValue',
        "ListReturnValue"                 => '\Google\Api\Ads\AdWords\v201306\classes\ListReturnValue',
        "ClientTermsError"                => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
        "DateError"                       => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
        "DateRange"                       => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
        "DistinctError"                   => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
        "EntityCountLimitExceeded"        => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceeded',
        "EntityNotFound"                  => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
        "IdError"                         => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
        "InternalApiError"                => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
        "NewEntityCreationError"          => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationError',
        "NotEmptyError"                   => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
        "NotWhitelistedError"             => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
        "NullError"                       => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
        "Page"                            => '\Google\Api\Ads\AdWords\v201306\classes\Page',
        "OperationAccessDenied"           => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
        "OperatorError"                   => '\Google\Api\Ads\AdWords\v201306\classes\OperatorError',
        "OrderBy"                         => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
        "Paging"                          => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
        "PagingError"                     => '\Google\Api\Ads\AdWords\v201306\classes\PagingError',
        "Predicate"                       => '\Google\Api\Ads\AdWords\v201306\classes\Predicate',
        "QuotaCheckError"                 => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
        "RangeError"                      => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
        "RateExceededError"               => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
        "ReadOnlyError"                   => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
        "RejectedError"                   => '\Google\Api\Ads\AdWords\v201306\classes\RejectedError',
        "RequestError"                    => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
        "RequiredError"                   => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
        "SelectorError"                   => '\Google\Api\Ads\AdWords\v201306\classes\SelectorError',
        "SizeLimitError"                  => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
        "SoapResponseHeader"              => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
        "StringLengthError"               => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
        "DatabaseError"                   => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
        "ApiException"                    => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
        "ApplicationException"            => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
        "Selector"                        => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
        "AuthenticationError.Reason"      => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
        "AuthorizationError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
        "BetaError.Reason"                => '\Google\Api\Ads\AdWords\v201306\classes\BetaErrorReason',
        "CampaignSharedSet.Status"        => '\Google\Api\Ads\AdWords\v201306\classes\CampaignSharedSetStatus',
        "CampaignSharedSetError.Reason"   => '\Google\Api\Ads\AdWords\v201306\classes\CampaignSharedSetErrorReason',
        "ClientTermsError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
        "DatabaseError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
        "DateError.Reason"                => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
        "DistinctError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
        "EntityCountLimitExceeded.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceededReason',
        "EntityNotFound.Reason"           => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
        "IdError.Reason"                  => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
        "InternalApiError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
        "NewEntityCreationError.Reason"   => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationErrorReason',
        "NotEmptyError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
        "NotWhitelistedError.Reason"      => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
        "NullError.Reason"                => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
        "OperationAccessDenied.Reason"    => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
        "Operator"                        => '\Google\Api\Ads\AdWords\v201306\classes\Operator',
        "OperatorError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\OperatorErrorReason',
        "PagingError.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\PagingErrorReason',
        "Predicate.Operator"              => '\Google\Api\Ads\AdWords\v201306\classes\PredicateOperator',
        "QuotaCheckError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
        "RangeError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
        "RateExceededError.Reason"        => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
        "ReadOnlyError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
        "RejectedError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\RejectedErrorReason',
        "RequestError.Reason"             => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
        "RequiredError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
        "SelectorError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
        "SharedSetType"                   => '\Google\Api\Ads\AdWords\v201306\classes\SharedSetType',
        "SizeLimitError.Reason"           => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
        "SortOrder"                       => '\Google\Api\Ads\AdWords\v201306\classes\SortOrder',
        "StringLengthError.Reason"        => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
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