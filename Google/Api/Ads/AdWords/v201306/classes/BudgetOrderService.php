<?php

require_once('BudgetOrderService.require.php');


/**
 * BudgetOrderService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class BudgetOrderService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                   => "BudgetOrderServiceGetResponse",
        "get"                           => "BudgetOrderServiceGet",
        "mutate"                        => "BudgetOrderServiceMutate",
        "mutateResponse"                => "BudgetOrderServiceMutateResponse",
        "DateTime"                      => "AdWordsDateTime",
        "SoapHeader"                    => "SoapRequestHeader",
        "ApiError"                      => "ApiError",
        "ApiException"                  => "ApiException",
        "ApplicationException"          => "ApplicationException",
        "AuthenticationError"           => "AuthenticationError",
        "AuthorizationError"            => "AuthorizationError",
        "ClientTermsError"              => "ClientTermsError",
        "ComparableValue"               => "ComparableValue",
        "DatabaseError"                 => "DatabaseError",
        "DateError"                     => "DateError",
        "DateRange"                     => "DateRange",
        "DistinctError"                 => "DistinctError",
        "DoubleValue"                   => "DoubleValue",
        "NumberValue"                   => "NumberValue",
        "EntityNotFound"                => "EntityNotFound",
        "IdError"                       => "IdError",
        "InternalApiError"              => "InternalApiError",
        "ListReturnValue"               => "ListReturnValue",
        "LongValue"                     => "LongValue",
        "Money"                         => "Money",
        "NewEntityCreationError"        => "NewEntityCreationError",
        "NotEmptyError"                 => "NotEmptyError",
        "NotWhitelistedError"           => "NotWhitelistedError",
        "NullError"                     => "NullError",
        "Operation"                     => "Operation",
        "OperationAccessDenied"         => "OperationAccessDenied",
        "OperatorError"                 => "OperatorError",
        "OrderBy"                       => "OrderBy",
        "Page"                          => "Page",
        "Paging"                        => "Paging",
        "PagingError"                   => "PagingError",
        "Predicate"                     => "Predicate",
        "QuotaCheckError"               => "QuotaCheckError",
        "RangeError"                    => "RangeError",
        "RateExceededError"             => "RateExceededError",
        "ReadOnlyError"                 => "ReadOnlyError",
        "RequestError"                  => "RequestError",
        "RequiredError"                 => "RequiredError",
        "Selector"                      => "Selector",
        "SelectorError"                 => "SelectorError",
        "SizeLimitError"                => "SizeLimitError",
        "SoapResponseHeader"            => "SoapResponseHeader",
        "StatsQueryError"               => "StatsQueryError",
        "StringLengthError"             => "StringLengthError",
        "AuthenticationError.Reason"    => "AuthenticationErrorReason",
        "AuthorizationError.Reason"     => "AuthorizationErrorReason",
        "ClientTermsError.Reason"       => "ClientTermsErrorReason",
        "DatabaseError.Reason"          => "DatabaseErrorReason",
        "DateError.Reason"              => "DateErrorReason",
        "DistinctError.Reason"          => "DistinctErrorReason",
        "EntityNotFound.Reason"         => "EntityNotFoundReason",
        "IdError.Reason"                => "IdErrorReason",
        "InternalApiError.Reason"       => "InternalApiErrorReason",
        "NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
        "NotEmptyError.Reason"          => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason"    => "NotWhitelistedErrorReason",
        "NullError.Reason"              => "NullErrorReason",
        "OperationAccessDenied.Reason"  => "OperationAccessDeniedReason",
        "Operator"                      => "Operator",
        "OperatorError.Reason"          => "OperatorErrorReason",
        "PagingError.Reason"            => "PagingErrorReason",
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
        "StatsQueryError.Reason"        => "StatsQueryErrorReason",
        "StringLengthError.Reason"      => "StringLengthErrorReason",
        "BillingAccount"                => "BillingAccount",
        "BudgetOrderError"              => "BudgetOrderError",
        "CustomerOrderLineError"        => "CustomerOrderLineError",
        "BudgetOrderRequest"            => "BudgetOrderRequest",
        "BudgetOrder"                   => "BudgetOrder",
        "BudgetOrderOperation"          => "BudgetOrderOperation",
        "BudgetOrderPage"               => "BudgetOrderPage",
        "BudgetOrderReturnValue"        => "BudgetOrderReturnValue",
        "BudgetOrderError.Reason"       => "BudgetOrderErrorReason",
        "BudgetOrderRequest.Status"     => "BudgetOrderRequestStatus",
        "CustomerOrderLineError.Reason" => "CustomerOrderLineErrorReason",
        "getBillingAccounts"            => "getBillingAccounts",
        "getBillingAccountsResponse"    => "getBillingAccountsResponse",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/billing/v201306/BudgetOrderService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = BudgetOrderService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'BudgetOrderService',
            'https://adwords.google.com/api/adwords/billing/v201306'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Gets a list of {@link BudgetOrder}s using the generic selector.
     *
     * @param serviceSelector specifies which BudgetOrder to return.
     *
     * @return A {@link BudgetOrderPage} of BudgetOrders of the client customer.
     * All BudgetOrder fields are returned. Stats are not yet supported.
     * @throws ApiException
     */
    public function get($serviceSelector)
    {
        $arg = new BudgetOrderServiceGet($serviceSelector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }


    /**
     * Returns all the open/active BillingAccounts associated with the current
     * manager.
     *
     * @return A list of {@link BillingAccount}s.
     * @throws ApiException
     */
    public function getBillingAccounts()
    {
        $arg = new getBillingAccounts();
        $result = $this->__soapCall("getBillingAccounts", array($arg));
        return $result->rval;
    }


    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET, REMOVE.</span>
     *
     *
     *
     * Mutates BudgetOrders, supported operations are:
     * <p><code>ADD</code>: Adds a {@link BudgetOrder} to the billing account
     * specified by the billing account ID.</p>
     * <p><code>SET</code>: Sets the start/end date and amount of the
     * {@link BudgetOrder}.</p>
     * <p><code>REMOVE</code>: Cancels the {@link BudgetOrder} (status change).</p>
     * <p class="warning"><b>Warning:</b> The <code>BudgetOrderService</code>
     * is limited to one operation per mutate request. Any attempt to make more
     * than one operation will result in an <code>ApiException</code>.</p>
     *
     * @param operations A list of operations, <b>however currently we only
     *                   support one operation per mutate call</b>.
     *
     * @return BudgetOrders affected by the mutate operation.
     * @throws ApiException
     */
    public function mutate($operations)
    {
        $arg = new BudgetOrderServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }

}