<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * AdwordsUserListService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class AdwordsUserListService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                     => '\Google\Api\Ads\AdWords\v201306\classes\AdwordsUserListServiceGetResponse',
        "get"                             => '\Google\Api\Ads\AdWords\v201306\classes\AdwordsUserListServiceGet',
        "mutate"                          => '\Google\Api\Ads\AdWords\v201306\classes\AdwordsUserListServiceMutate',
        "mutateResponse"                  => '\Google\Api\Ads\AdWords\v201306\classes\AdwordsUserListServiceMutateResponse',
        "DateTime"                        => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
        "SoapHeader"                      => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
        "AuthenticationError"             => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
        "ApiError"                        => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
        "AuthorizationError"              => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
        "DateError"                       => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
        "DateRange"                       => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
        "DistinctError"                   => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
        "EntityNotFound"                  => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
        "InternalApiError"                => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
        "NotEmptyError"                   => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
        "NotWhitelistedError"             => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
        "NullError"                       => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
        "OperationAccessDenied"           => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
        "OperatorError"                   => '\Google\Api\Ads\AdWords\v201306\classes\OperatorError',
        "OrderBy"                         => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
        "Paging"                          => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
        "Predicate"                       => '\Google\Api\Ads\AdWords\v201306\classes\Predicate',
        "QuotaCheckError"                 => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
        "RangeError"                      => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
        "RateExceededError"               => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
        "ReadOnlyError"                   => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
        "RequiredError"                   => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
        "SelectorError"                   => '\Google\Api\Ads\AdWords\v201306\classes\SelectorError',
        "SizeLimitError"                  => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
        "SoapResponseHeader"              => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
        "StringLengthError"               => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
        "DatabaseError"                   => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
        "ApiException"                    => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
        "ApplicationException"            => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
        "Selector"                        => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
        "ListReturnValue"                 => '\Google\Api\Ads\AdWords\v201306\classes\ListReturnValue',
        "Operation"                       => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
        "Page"                            => '\Google\Api\Ads\AdWords\v201306\classes\Page',
        "AuthenticationError.Reason"      => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
        "AuthorizationError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
        "DatabaseError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
        "DateError.Reason"                => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
        "DistinctError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
        "EntityNotFound.Reason"           => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
        "InternalApiError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
        "NotEmptyError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
        "NotWhitelistedError.Reason"      => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
        "NullError.Reason"                => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
        "OperationAccessDenied.Reason"    => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
        "Operator"                        => '\Google\Api\Ads\AdWords\v201306\classes\Operator',
        "OperatorError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\OperatorErrorReason',
        "Predicate.Operator"              => '\Google\Api\Ads\AdWords\v201306\classes\PredicateOperator',
        "QuotaCheckError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
        "RangeError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
        "RateExceededError.Reason"        => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
        "ReadOnlyError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
        "RequiredError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
        "SelectorError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
        "SizeLimitError.Reason"           => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
        "SortOrder"                       => '\Google\Api\Ads\AdWords\v201306\classes\SortOrder',
        "StringLengthError.Reason"        => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
        "ExternalRemarketingUserList"     => '\Google\Api\Ads\AdWords\v201306\classes\ExternalRemarketingUserList',
        "UserList"                        => '\Google\Api\Ads\AdWords\v201306\classes\UserList',
        "CollectionSizeError"             => '\Google\Api\Ads\AdWords\v201306\classes\CollectionSizeError',
        "UserListConversionType"          => '\Google\Api\Ads\AdWords\v201306\classes\UserListConversionType',
        "LogicalUserList"                 => '\Google\Api\Ads\AdWords\v201306\classes\LogicalUserList',
        "LogicalUserListOperand"          => '\Google\Api\Ads\AdWords\v201306\classes\LogicalUserListOperand',
        "BasicUserList"                   => '\Google\Api\Ads\AdWords\v201306\classes\BasicUserList',
        "UserInterest"                    => '\Google\Api\Ads\AdWords\v201306\classes\UserInterest',
        "UserListError"                   => '\Google\Api\Ads\AdWords\v201306\classes\UserListError',
        "UserListLogicalRule"             => '\Google\Api\Ads\AdWords\v201306\classes\UserListLogicalRule',
        "UserListOperation"               => '\Google\Api\Ads\AdWords\v201306\classes\UserListOperation',
        "UserListPage"                    => '\Google\Api\Ads\AdWords\v201306\classes\UserListPage',
        "UserListReturnValue"             => '\Google\Api\Ads\AdWords\v201306\classes\UserListReturnValue',
        "AccessReason"                    => '\Google\Api\Ads\AdWords\v201306\classes\AccessReason',
        "AccountUserListStatus"           => '\Google\Api\Ads\AdWords\v201306\classes\AccountUserListStatus',
        "CollectionSizeError.Reason"      => '\Google\Api\Ads\AdWords\v201306\classes\CollectionSizeErrorReason',
        "UserListConversionType.Category" => '\Google\Api\Ads\AdWords\v201306\classes\UserListConversionTypeCategory',
        "SizeRange"                       => '\Google\Api\Ads\AdWords\v201306\classes\SizeRange',
        "UserListError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\UserListErrorReason',
        "UserListLogicalRule.Operator"    => '\Google\Api\Ads\AdWords\v201306\classes\UserListLogicalRuleOperator',
        "UserListMembershipStatus"        => '\Google\Api\Ads\AdWords\v201306\classes\UserListMembershipStatus',
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/rm/v201306/AdwordsUserListService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = AdwordsUserListService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'AdwordsUserListService',
            'https://adwords.google.com/api/adwords/rm/v201306'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the list of user lists that meet the selector criteria.
     *
     * @param serviceSelector the selector specifying the {@link UserList}s to return.
     *
     * @return a list of UserList entities which meet the selector criteria.
     * @throws ApiException if problems occurred while fetching UserList information.
     */
    public function get($serviceSelector)
    {
        $arg = new AdwordsUserListServiceGet($serviceSelector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }


    /**
     * <span class="constraint CollectionSize">The minimum size of this collection is 1. The maximum size of this collection is 10000.</span>
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
     *
     *
     *
     * Applies a list of mutate operations (i.e. add, set):
     *
     * Add - creates a set of user lists
     * Set - updates a set of user lists
     *
     * @param operations the operations to apply
     *
     * @return a list of UserList objects
     */
    public function mutate($operations)
    {
        $arg = new AdwordsUserListServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }

}