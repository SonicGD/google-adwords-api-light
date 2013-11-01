<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * BudgetService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class BudgetService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                                        => '\Google\Api\Ads\AdWords\v201306\classes\BudgetServiceGetResponse',
        "get"                                                => '\Google\Api\Ads\AdWords\v201306\classes\BudgetServiceGet',
        "mutate"                                             => '\Google\Api\Ads\AdWords\v201306\classes\BudgetServiceMutate',
        "mutateResponse"                                     => '\Google\Api\Ads\AdWords\v201306\classes\BudgetServiceMutateResponse',
        "DateTime"                                           => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
        "SoapHeader"                                         => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
        "AssociatedCampaign"                                 => '\Google\Api\Ads\AdWords\v201306\classes\AssociatedCampaign',
        "AuthenticationError"                                => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
        "ApiError"                                           => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
        "AuthorizationError"                                 => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
        "BudgetError"                                        => '\Google\Api\Ads\AdWords\v201306\classes\BudgetError',
        "ClientTermsError"                                   => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
        "DateError"                                          => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
        "DateRange"                                          => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
        "DistinctError"                                      => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
        "DoubleValue"                                        => '\Google\Api\Ads\AdWords\v201306\classes\DoubleValue',
        "NumberValue"                                        => '\Google\Api\Ads\AdWords\v201306\classes\NumberValue',
        "EntityCountLimitExceeded"                           => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceeded',
        "EntityNotFound"                                     => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
        "IdError"                                            => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
        "InternalApiError"                                   => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
        "LongValue"                                          => '\Google\Api\Ads\AdWords\v201306\classes\LongValue',
        "Money"                                              => '\Google\Api\Ads\AdWords\v201306\classes\Money',
        "ComparableValue"                                    => '\Google\Api\Ads\AdWords\v201306\classes\ComparableValue',
        "NewEntityCreationError"                             => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationError',
        "NotEmptyError"                                      => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
        "NotWhitelistedError"                                => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
        "NullError"                                          => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
        "OperationAccessDenied"                              => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
        "OrderBy"                                            => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
        "Paging"                                             => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
        "Predicate"                                          => '\Google\Api\Ads\AdWords\v201306\classes\Predicate',
        "QuotaCheckError"                                    => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
        "RangeError"                                         => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
        "RateExceededError"                                  => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
        "ReadOnlyError"                                      => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
        "RejectedError"                                      => '\Google\Api\Ads\AdWords\v201306\classes\RejectedError',
        "RequestError"                                       => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
        "RequiredError"                                      => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
        "SelectorError"                                      => '\Google\Api\Ads\AdWords\v201306\classes\SelectorError',
        "SizeLimitError"                                     => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
        "SoapResponseHeader"                                 => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
        "StringLengthError"                                  => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
        "DatabaseError"                                      => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
        "ApiException"                                       => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
        "ApplicationException"                               => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
        "Budget"                                             => '\Google\Api\Ads\AdWords\v201306\classes\Budget',
        "BudgetOperation"                                    => '\Google\Api\Ads\AdWords\v201306\classes\BudgetOperation',
        "Operation"                                          => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
        "BudgetPage"                                         => '\Google\Api\Ads\AdWords\v201306\classes\BudgetPage',
        "Page"                                               => '\Google\Api\Ads\AdWords\v201306\classes\Page',
        "BudgetReturnValue"                                  => '\Google\Api\Ads\AdWords\v201306\classes\BudgetReturnValue',
        "ListReturnValue"                                    => '\Google\Api\Ads\AdWords\v201306\classes\ListReturnValue',
        "Selector"                                           => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
        "AssociatedCampaign.BudgetCampaignAssociationStatus" => '\Google\Api\Ads\AdWords\v201306\classes\AssociatedCampaignBudgetCampaignAssociationStatus',
        "AssociatedCampaign.CampaignStatus"                  => '\Google\Api\Ads\AdWords\v201306\classes\AssociatedCampaignCampaignStatus',
        "AuthenticationError.Reason"                         => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
        "AuthorizationError.Reason"                          => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
        "Budget.BudgetDeliveryMethod"                        => '\Google\Api\Ads\AdWords\v201306\classes\BudgetBudgetDeliveryMethod',
        "Budget.BudgetPeriod"                                => '\Google\Api\Ads\AdWords\v201306\classes\BudgetBudgetPeriod',
        "Budget.BudgetStatus"                                => '\Google\Api\Ads\AdWords\v201306\classes\BudgetBudgetStatus',
        "BudgetError.Reason"                                 => '\Google\Api\Ads\AdWords\v201306\classes\BudgetErrorReason',
        "ClientTermsError.Reason"                            => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
        "DatabaseError.Reason"                               => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
        "DateError.Reason"                                   => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
        "DistinctError.Reason"                               => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
        "EntityCountLimitExceeded.Reason"                    => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceededReason',
        "EntityNotFound.Reason"                              => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
        "IdError.Reason"                                     => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
        "InternalApiError.Reason"                            => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
        "NewEntityCreationError.Reason"                      => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationErrorReason',
        "NotEmptyError.Reason"                               => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
        "NotWhitelistedError.Reason"                         => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
        "NullError.Reason"                                   => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
        "OperationAccessDenied.Reason"                       => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
        "Operator"                                           => '\Google\Api\Ads\AdWords\v201306\classes\Operator',
        "Predicate.Operator"                                 => '\Google\Api\Ads\AdWords\v201306\classes\PredicateOperator',
        "QuotaCheckError.Reason"                             => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
        "RangeError.Reason"                                  => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
        "RateExceededError.Reason"                           => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
        "ReadOnlyError.Reason"                               => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
        "RejectedError.Reason"                               => '\Google\Api\Ads\AdWords\v201306\classes\RejectedErrorReason',
        "RequestError.Reason"                                => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
        "RequiredError.Reason"                               => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
        "SelectorError.Reason"                               => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
        "SizeLimitError.Reason"                              => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
        "SortOrder"                                          => '\Google\Api\Ads\AdWords\v201306\classes\SortOrder',
        "StringLengthError.Reason"                           => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201302/BudgetService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = BudgetService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'BudgetService',
            'https://adwords.google.com/api/adwords/cm/v201302'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns a list of budgets that match the selector.
     *
     * @return List of budgets specified by the selector.
     * @throws com.google.ads.api.services.common.error.ApiException if problems
     * occurred while retrieving results.
     */
    public function get($selector)
    {
        $arg = new BudgetServiceGet($selector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }


    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Applies the list of mutate operations.
     *
     * @param operations The operations to apply.
     *
     * @return The modified list of Budgets, returned in the same order as <code>operations</code>.
     * @throws ApiException
     */
    public function mutate($operations)
    {
        $arg = new BudgetServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }

}