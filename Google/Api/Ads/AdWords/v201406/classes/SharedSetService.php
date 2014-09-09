<?php

require_once 'SharedSetService.require.php';

  /**
   * SharedSetService
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class SharedSetService extends AdWordsSoapClient
  {
    const SERVICE_NAME = "SharedSetService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201406/SharedSetService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201406/SharedSetService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
      "AuthenticationError" => "AuthenticationError",
      "AuthorizationError" => "AuthorizationError",
      "ClientTermsError" => "ClientTermsError",
      "DateRange" => "DateRange",
      "DistinctError" => "DistinctError",
      "EntityCountLimitExceeded" => "EntityCountLimitExceeded",
      "EntityNotFound" => "EntityNotFound",
      "IdError" => "IdError",
      "InternalApiError" => "InternalApiError",
      "NewEntityCreationError" => "NewEntityCreationError",
      "NotEmptyError" => "NotEmptyError",
      "NullError" => "NullError",
      "OperationAccessDenied" => "OperationAccessDenied",
      "OperatorError" => "OperatorError",
      "OrderBy" => "OrderBy",
      "Paging" => "Paging",
      "PagingError" => "PagingError",
      "Predicate" => "Predicate",
      "QuotaCheckError" => "QuotaCheckError",
      "RangeError" => "RangeError",
      "RateExceededError" => "RateExceededError",
      "ReadOnlyError" => "ReadOnlyError",
      "RejectedError" => "RejectedError",
      "RequestError" => "RequestError",
      "RequiredError" => "RequiredError",
      "SharedSet" => "SharedSet",
      "SharedSetError" => "SharedSetError",
      "SharedSetOperation" => "SharedSetOperation",
      "SharedSetPage" => "SharedSetPage",
      "SharedSetReturnValue" => "SharedSetReturnValue",
      "SizeLimitError" => "SizeLimitError",
      "SoapHeader" => "SoapRequestHeader",
      "SoapResponseHeader" => "SoapResponseHeader",
      "StringLengthError" => "StringLengthError",
      "DatabaseError" => "DatabaseError",
      "ListReturnValue" => "ListReturnValue",
      "NullStatsPage" => "NullStatsPage",
      "Operation" => "Operation",
      "Page" => "Page",
      "ApiError" => "ApiError",
      "ApiException" => "ApiException",
      "ApplicationException" => "ApplicationException",
      "Selector" => "Selector",
      "AuthenticationError.Reason" => "AuthenticationErrorReason",
      "AuthorizationError.Reason" => "AuthorizationErrorReason",
      "ClientTermsError.Reason" => "ClientTermsErrorReason",
      "DatabaseError.Reason" => "DatabaseErrorReason",
      "DistinctError.Reason" => "DistinctErrorReason",
      "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
      "EntityNotFound.Reason" => "EntityNotFoundReason",
      "IdError.Reason" => "IdErrorReason",
      "InternalApiError.Reason" => "InternalApiErrorReason",
      "NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
      "NotEmptyError.Reason" => "NotEmptyErrorReason",
      "NullError.Reason" => "NullErrorReason",
      "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
      "Operator" => "Operator",
      "OperatorError.Reason" => "OperatorErrorReason",
      "PagingError.Reason" => "PagingErrorReason",
      "Predicate.Operator" => "PredicateOperator",
      "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
      "RangeError.Reason" => "RangeErrorReason",
      "RateExceededError.Reason" => "RateExceededErrorReason",
      "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
      "RejectedError.Reason" => "RejectedErrorReason",
      "RequestError.Reason" => "RequestErrorReason",
      "RequiredError.Reason" => "RequiredErrorReason",
      "SharedSet.Status" => "SharedSetStatus",
      "SharedSetError.Reason" => "SharedSetErrorReason",
      "SharedSetType" => "SharedSetType",
      "SizeLimitError.Reason" => "SizeLimitErrorReason",
      "SortOrder" => "SortOrder",
      "StringLengthError.Reason" => "StringLengthErrorReason",
      "get" => "SharedSetServiceGet",
      "getResponse" => "SharedSetServiceGetResponse",
      "mutate" => "SharedSetServiceMutate",
      "mutateResponse" => "SharedSetServiceMutateResponse",
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
     * Returns a list of SharedSets based on the given selector.
     * @param selector the selector specifying the query
     * @return a            list of SharedSet entities that meet the criterion specified
     *                      by the selector
     * @throws ApiException
     */
    public function get($selector)
    {
      $args = new SharedSetServiceGet($selector);
      $result = $this->__soapCall("get", array($args));

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
     * @param operations the operations to apply
     * @return the          modified CriterionList entities
     * @throws ApiException
     */
    public function mutate($operations)
    {
      $args = new SharedSetServiceMutate($operations);
      $result = $this->__soapCall("mutate", array($args));

      return $result->rval;
    }
  }
