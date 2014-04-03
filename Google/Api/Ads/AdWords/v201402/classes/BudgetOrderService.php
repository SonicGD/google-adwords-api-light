<?php

require_once('BudgetOrderService.require.php');


/**
 * BudgetOrderService
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class BudgetOrderService extends AdWordsSoapClient
{

    const SERVICE_NAME = "BudgetOrderService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/billing/v201402";
    const ENDPOINT = "https://adwords.google.com/api/adwords/billing/v201402/BudgetOrderService";

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public $endpoint = "https://adwords.google.com/api/adwords/billing/v201402/BudgetOrderService";
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
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
        "EntityNotFound"                => "EntityNotFound",
        "IdError"                       => "IdError",
        "InternalApiError"              => "InternalApiError",
        "ListReturnValue"               => "ListReturnValue",
        "LongValue"                     => "LongValue",
        "Money"                         => "Money",
        "NewEntityCreationError"        => "NewEntityCreationError",
        "NotEmptyError"                 => "NotEmptyError",
        "NullError"                     => "NullError",
        "NumberValue"                   => "NumberValue",
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
        "RejectedError"                 => "RejectedError",
        "RequestError"                  => "RequestError",
        "RequiredError"                 => "RequiredError",
        "Selector"                      => "Selector",
        "SelectorError"                 => "SelectorError",
        "SizeLimitError"                => "SizeLimitError",
        "SoapHeader"                    => "SoapRequestHeader",
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
        "RejectedError.Reason"          => "RejectedErrorReason",
        "RequestError.Reason"           => "RequestErrorReason",
        "RequiredError.Reason"          => "RequiredErrorReason",
        "SelectorError.Reason"          => "SelectorErrorReason",
        "SizeLimitError.Reason"         => "SizeLimitErrorReason",
        "SortOrder"                     => "SortOrder",
        "StatsQueryError.Reason"        => "StatsQueryErrorReason",
        "StringLengthError.Reason"      => "StringLengthErrorReason",
        "BillingAccount"                => "BillingAccount",
        "BudgetOrder"                   => "BudgetOrder",
        "BudgetOrderError"              => "BudgetOrderError",
        "BudgetOrderOperation"          => "BudgetOrderOperation",
        "BudgetOrderPage"               => "BudgetOrderPage",
        "BudgetOrderRequest"            => "BudgetOrderRequest",
        "BudgetOrderReturnValue"        => "BudgetOrderReturnValue",
        "CustomerOrderLineError"        => "CustomerOrderLineError",
        "BudgetOrderError.Reason"       => "BudgetOrderErrorReason",
        "BudgetOrderRequest.Status"     => "BudgetOrderRequestStatus",
        "CustomerOrderLineError.Reason" => "CustomerOrderLineErrorReason",
        "get"                           => "BudgetOrderServiceGet",
        "getResponse"                   => "BudgetOrderServiceGetResponse",
        "getBillingAccounts"            => "GetBillingAccounts",
        "getBillingAccountsResponse"    => "GetBillingAccountsResponse",
        "mutate"                        => "BudgetOrderServiceMutate",
        "mutateResponse"                => "BudgetOrderServiceMutateResponse",
    );


    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = self::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            self::SERVICE_NAME,
            self::WSDL_NAMESPACE
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
        $args = new BudgetOrderServiceGet($serviceSelector);
        $result = $this->__soapCall("get", array($args));
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
        $args = new GetBillingAccounts();
        $result = $this->__soapCall("getBillingAccounts", array($args));
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
        $args = new BudgetOrderServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));
        return $result->rval;
    }
}