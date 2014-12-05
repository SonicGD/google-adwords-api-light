<?php

require_once 'AdwordsUserListService.require.php';

  /**
   * AdwordsUserListService
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdwordsUserListService extends AdWordsSoapClient
  {
      const SERVICE_NAME = "AdwordsUserListService";
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201406";
      const ENDPOINT = "https://adwords.google.com/api/adwords/rm/v201406/AdwordsUserListService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/rm/v201406/AdwordsUserListService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "DateError" => "DateError",
      "DateRange" => "DateRange",
      "DistinctError" => "DistinctError",
      "EntityNotFound" => "EntityNotFound",
      "InternalApiError" => "InternalApiError",
      "NotEmptyError" => "NotEmptyError",
      "NotWhitelistedError" => "NotWhitelistedError",
      "NullError" => "NullError",
      "OperationAccessDenied" => "OperationAccessDenied",
      "OperatorError" => "OperatorError",
      "OrderBy" => "OrderBy",
      "Paging" => "Paging",
      "Predicate" => "Predicate",
      "QuotaCheckError" => "QuotaCheckError",
      "RangeError" => "RangeError",
      "RateExceededError" => "RateExceededError",
      "ReadOnlyError" => "ReadOnlyError",
      "RejectedError" => "RejectedError",
      "RequiredError" => "RequiredError",
      "SelectorError" => "SelectorError",
      "SizeLimitError" => "SizeLimitError",
      "SoapHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StringLengthError" => "StringLengthError",
      "DatabaseError" => "DatabaseError",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApplicationException" => "ApplicationException",
      "Selector" => "Selector",
      "ListReturnValue" => "ListReturnValue",
      "Operation" => "Operation",
      "Page" => "Page",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AuthorizationError.Reason" => "AuthorizationErrorReason",
      "DatabaseError.Reason" => "DatabaseErrorReason",
      "DateError.Reason" => "DateErrorReason",
      "DistinctError.Reason" => "DistinctErrorReason",
      "EntityNotFound.Reason" => "EntityNotFoundReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NotEmptyError.Reason" => "NotEmptyErrorReason",
      "NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
      "Operator" => "Operator",
      "OperatorError.Reason" => "OperatorErrorReason",
      "Predicate.Operator" => "PredicateOperator",
      "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateExceededError.Reason" => "RateExceededErrorReason",
      "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
      "RejectedError.Reason" => "RejectedErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "SelectorError.Reason" => "SelectorErrorReason",
      "SizeLimitError.Reason" => "SizeLimitErrorReason",
      "SortOrder" => "SortOrder",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "ExternalRemarketingUserList" => "ExternalRemarketingUserList",
      "CollectionSizeError" => "CollectionSizeError",
      "UserListConversionType" => "UserListConversionType",
      "LogicalUserList" => "LogicalUserList",
      "LogicalUserListOperand" => "LogicalUserListOperand",
      "BasicUserList" => "BasicUserList",
      "SimilarUserList" => "SimilarUserList",
      "UserList" => "UserList",
      "UserListError" => "UserListError",
      "UserListLogicalRule" => "UserListLogicalRule",
      "UserListOperation" => "UserListOperation",
      "UserListPage" => "UserListPage",
      "UserListReturnValue" => "UserListReturnValue",
      "AccessReason" => "AccessReason",
      "AccountUserListStatus" => "AccountUserListStatus",
      "CollectionSizeError.Reason" => "CollectionSizeErrorReason",
      "UserListConversionType.Category" => "UserListConversionTypeCategory",
      "SizeRange" => "SizeRange",
      "UserListError.Reason" => "UserListErrorReason",
      "UserListLogicalRule.Operator" => "UserListLogicalRuleOperator",
      "UserListMembershipStatus" => "UserListMembershipStatus",
      "UserListType" => "UserListType",
      "get" => "AdwordsUserListServiceGet",
      "getResponse" => "AdwordsUserListServiceGetResponse",
      "mutate" => "AdwordsUserListServiceMutate",
      "mutateResponse" => "AdwordsUserListServiceMutateResponse",
    );

    /**
     * Constructor using wsdl location and options array
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl, $options, $user)
    {
        $options["classmap"] = self::$classmap;
        parent::__construct($wsdl, $options, $user, self::SERVICE_NAME,
          self::WSDL_NAMESPACE);
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the list of user lists that meet the selector criteria.
     *
     * @param serviceSelector the selector specifying the {@link UserList}s to return.
     * @return a            list of UserList entities which meet the selector criteria.
     * @throws ApiException if problems occurred while fetching UserList information.
     */
    public function get($serviceSelector)
    {
        $args = new AdwordsUserListServiceGet($serviceSelector);
        $result = $this->__soapCall("get", array($args));

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
     * @return a list of UserList objects
     */
    public function mutate($operations)
    {
        $args = new AdwordsUserListServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));

        return $result->rval;
    }
  }
