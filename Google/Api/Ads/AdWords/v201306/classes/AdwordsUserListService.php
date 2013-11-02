<?php

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
        "getResponse"                     => "AdwordsUserListServiceGetResponse",
        "get"                             => "AdwordsUserListServiceGet",
        "mutate"                          => "AdwordsUserListServiceMutate",
        "mutateResponse"                  => "AdwordsUserListServiceMutateResponse",
        "DateTime"                        => "AdWordsDateTime",
        "SoapHeader"                      => "SoapRequestHeader",
        "AuthenticationError"             => "AuthenticationError",
        "ApiError"                        => "ApiError",
        "AuthorizationError"              => "AuthorizationError",
        "DateError"                       => "DateError",
        "DateRange"                       => "DateRange",
        "DistinctError"                   => "DistinctError",
        "EntityNotFound"                  => "EntityNotFound",
        "InternalApiError"                => "InternalApiError",
        "NotEmptyError"                   => "NotEmptyError",
        "NotWhitelistedError"             => "NotWhitelistedError",
        "NullError"                       => "NullError",
        "OperationAccessDenied"           => "OperationAccessDenied",
        "OperatorError"                   => "OperatorError",
        "OrderBy"                         => "OrderBy",
        "Paging"                          => "Paging",
        "Predicate"                       => "Predicate",
        "QuotaCheckError"                 => "QuotaCheckError",
        "RangeError"                      => "RangeError",
        "RateExceededError"               => "RateExceededError",
        "ReadOnlyError"                   => "ReadOnlyError",
        "RequiredError"                   => "RequiredError",
        "SelectorError"                   => "SelectorError",
        "SizeLimitError"                  => "SizeLimitError",
        "SoapResponseHeader"              => "SoapResponseHeader",
        "StringLengthError"               => "StringLengthError",
        "DatabaseError"                   => "DatabaseError",
        "ApiException"                    => "ApiException",
        "ApplicationException"            => "ApplicationException",
        "Selector"                        => "Selector",
        "ListReturnValue"                 => "ListReturnValue",
        "Operation"                       => "Operation",
        "Page"                            => "Page",
        "AuthenticationError.Reason"      => "AuthenticationErrorReason",
        "AuthorizationError.Reason"       => "AuthorizationErrorReason",
        "DatabaseError.Reason"            => "DatabaseErrorReason",
        "DateError.Reason"                => "DateErrorReason",
        "DistinctError.Reason"            => "DistinctErrorReason",
        "EntityNotFound.Reason"           => "EntityNotFoundReason",
        "InternalApiError.Reason"         => "InternalApiErrorReason",
        "NotEmptyError.Reason"            => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason"      => "NotWhitelistedErrorReason",
        "NullError.Reason"                => "NullErrorReason",
        "OperationAccessDenied.Reason"    => "OperationAccessDeniedReason",
        "Operator"                        => "Operator",
        "OperatorError.Reason"            => "OperatorErrorReason",
        "Predicate.Operator"              => "PredicateOperator",
        "QuotaCheckError.Reason"          => "QuotaCheckErrorReason",
        "RangeError.Reason"               => "RangeErrorReason",
        "RateExceededError.Reason"        => "RateExceededErrorReason",
        "ReadOnlyError.Reason"            => "ReadOnlyErrorReason",
        "RequiredError.Reason"            => "RequiredErrorReason",
        "SelectorError.Reason"            => "SelectorErrorReason",
        "SizeLimitError.Reason"           => "SizeLimitErrorReason",
        "SortOrder"                       => "SortOrder",
        "StringLengthError.Reason"        => "StringLengthErrorReason",
        "ExternalRemarketingUserList"     => "ExternalRemarketingUserList",
        "UserList"                        => "UserList",
        "CollectionSizeError"             => "CollectionSizeError",
        "UserListConversionType"          => "UserListConversionType",
        "LogicalUserList"                 => "LogicalUserList",
        "LogicalUserListOperand"          => "LogicalUserListOperand",
        "BasicUserList"                   => "BasicUserList",
        "UserInterest"                    => "UserInterest",
        "UserListError"                   => "UserListError",
        "UserListLogicalRule"             => "UserListLogicalRule",
        "UserListOperation"               => "UserListOperation",
        "UserListPage"                    => "UserListPage",
        "UserListReturnValue"             => "UserListReturnValue",
        "AccessReason"                    => "AccessReason",
        "AccountUserListStatus"           => "AccountUserListStatus",
        "CollectionSizeError.Reason"      => "CollectionSizeErrorReason",
        "UserListConversionType.Category" => "UserListConversionTypeCategory",
        "SizeRange"                       => "SizeRange",
        "UserListError.Reason"            => "UserListErrorReason",
        "UserListLogicalRule.Operator"    => "UserListLogicalRuleOperator",
        "UserListMembershipStatus"        => "UserListMembershipStatus",
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