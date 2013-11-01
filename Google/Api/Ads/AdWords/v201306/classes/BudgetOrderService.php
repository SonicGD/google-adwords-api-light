<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

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
        "getResponse"                   => '\Google\Api\Ads\AdWords\v201306\classes\BudgetOrderServiceGetResponse',
        "get"                           => '\Google\Api\Ads\AdWords\v201306\classes\BudgetOrderServiceGet',
        "mutate"                        => '\Google\Api\Ads\AdWords\v201306\classes\BudgetOrderServiceMutate',
        "mutateResponse"                => '\Google\Api\Ads\AdWords\v201306\classes\BudgetOrderServiceMutateResponse',
        "DateTime"                      => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
        "SoapHeader"                    => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
        "ApiError"                      => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
        "ApiException"                  => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
        "ApplicationException"          => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
        "AuthenticationError"           => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
        "AuthorizationError"            => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
        "ClientTermsError"              => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
        "ComparableValue"               => '\Google\Api\Ads\AdWords\v201306\classes\ComparableValue',
        "DatabaseError"                 => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
        "DateError"                     => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
        "DateRange"                     => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
        "DistinctError"                 => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
        "DoubleValue"                   => '\Google\Api\Ads\AdWords\v201306\classes\DoubleValue',
        "NumberValue"                   => '\Google\Api\Ads\AdWords\v201306\classes\NumberValue',
        "EntityNotFound"                => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
        "IdError"                       => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
        "InternalApiError"              => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
        "ListReturnValue"               => '\Google\Api\Ads\AdWords\v201306\classes\ListReturnValue',
        "LongValue"                     => '\Google\Api\Ads\AdWords\v201306\classes\LongValue',
        "Money"                         => '\Google\Api\Ads\AdWords\v201306\classes\Money',
        "NewEntityCreationError"        => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationError',
        "NotEmptyError"                 => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
        "NotWhitelistedError"           => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
        "NullError"                     => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
        "Operation"                     => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
        "OperationAccessDenied"         => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
        "OperatorError"                 => '\Google\Api\Ads\AdWords\v201306\classes\OperatorError',
        "OrderBy"                       => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
        "Page"                          => '\Google\Api\Ads\AdWords\v201306\classes\Page',
        "Paging"                        => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
        "PagingError"                   => '\Google\Api\Ads\AdWords\v201306\classes\PagingError',
        "Predicate"                     => '\Google\Api\Ads\AdWords\v201306\classes\Predicate',
        "QuotaCheckError"               => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
        "RangeError"                    => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
        "RateExceededError"             => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
        "ReadOnlyError"                 => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
        "RequestError"                  => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
        "RequiredError"                 => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
        "Selector"                      => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
        "SelectorError"                 => '\Google\Api\Ads\AdWords\v201306\classes\SelectorError',
        "SizeLimitError"                => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
        "SoapResponseHeader"            => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
        "StatsQueryError"               => '\Google\Api\Ads\AdWords\v201306\classes\StatsQueryError',
        "StringLengthError"             => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
        "AuthenticationError.Reason"    => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
        "AuthorizationError.Reason"     => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
        "ClientTermsError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
        "DatabaseError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
        "DateError.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
        "DistinctError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
        "EntityNotFound.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
        "IdError.Reason"                => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
        "InternalApiError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
        "NewEntityCreationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationErrorReason',
        "NotEmptyError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
        "NotWhitelistedError.Reason"    => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
        "NullError.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
        "OperationAccessDenied.Reason"  => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
        "Operator"                      => '\Google\Api\Ads\AdWords\v201306\classes\Operator',
        "OperatorError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\OperatorErrorReason',
        "PagingError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\PagingErrorReason',
        "Predicate.Operator"            => '\Google\Api\Ads\AdWords\v201306\classes\PredicateOperator',
        "QuotaCheckError.Reason"        => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
        "RangeError.Reason"             => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
        "RateExceededError.Reason"      => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
        "ReadOnlyError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
        "RequestError.Reason"           => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
        "RequiredError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
        "SelectorError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
        "SizeLimitError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
        "SortOrder"                     => '\Google\Api\Ads\AdWords\v201306\classes\SortOrder',
        "StatsQueryError.Reason"        => '\Google\Api\Ads\AdWords\v201306\classes\StatsQueryErrorReason',
        "StringLengthError.Reason"      => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
        "BillingAccount"                => '\Google\Api\Ads\AdWords\v201306\classes\BillingAccount',
        "BudgetOrderError"              => '\Google\Api\Ads\AdWords\v201306\classes\BudgetOrderError',
        "CustomerOrderLineError"        => '\Google\Api\Ads\AdWords\v201306\classes\CustomerOrderLineError',
        "BudgetOrderRequest"            => '\Google\Api\Ads\AdWords\v201306\classes\BudgetOrderRequest',
        "BudgetOrder"                   => '\Google\Api\Ads\AdWords\v201306\classes\BudgetOrder',
        "BudgetOrderOperation"          => '\Google\Api\Ads\AdWords\v201306\classes\BudgetOrderOperation',
        "BudgetOrderPage"               => '\Google\Api\Ads\AdWords\v201306\classes\BudgetOrderPage',
        "BudgetOrderReturnValue"        => '\Google\Api\Ads\AdWords\v201306\classes\BudgetOrderReturnValue',
        "BudgetOrderError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\BudgetOrderErrorReason',
        "BudgetOrderRequest.Status"     => '\Google\Api\Ads\AdWords\v201306\classes\BudgetOrderRequestStatus',
        "CustomerOrderLineError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\CustomerOrderLineErrorReason',
        "getBillingAccounts"            => '\Google\Api\Ads\AdWords\v201306\classes\getBillingAccounts',
        "getBillingAccountsResponse"    => '\Google\Api\Ads\AdWords\v201306\classes\getBillingAccountsResponse',
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