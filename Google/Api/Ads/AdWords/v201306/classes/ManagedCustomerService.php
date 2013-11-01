<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * ManagedCustomerService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class ManagedCustomerService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                        => '\Google\Api\Ads\AdWords\v201306\classes\ManagedCustomerServiceGetResponse',
        "get"                                => '\Google\Api\Ads\AdWords\v201306\classes\ManagedCustomerServiceGet',
        "mutate"                             => '\Google\Api\Ads\AdWords\v201306\classes\ManagedCustomerServiceMutate',
        "mutateResponse"                     => '\Google\Api\Ads\AdWords\v201306\classes\ManagedCustomerServiceMutateResponse',
        "DateTime"                           => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
        "SoapHeader"                         => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
        "AuthenticationError"                => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
        "ApiError"                           => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
        "AuthorizationError"                 => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
        "ClientTermsError"                   => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
        "DateError"                          => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
        "DateRange"                          => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
        "DistinctError"                      => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
        "IdError"                            => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
        "InternalApiError"                   => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
        "NotEmptyError"                      => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
        "NotWhitelistedError"                => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
        "NullError"                          => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
        "OperatorError"                      => '\Google\Api\Ads\AdWords\v201306\classes\OperatorError',
        "OrderBy"                            => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
        "Paging"                             => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
        "Predicate"                          => '\Google\Api\Ads\AdWords\v201306\classes\Predicate',
        "QuotaCheckError"                    => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
        "RangeError"                         => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
        "RateExceededError"                  => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
        "ReadOnlyError"                      => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
        "RejectedError"                      => '\Google\Api\Ads\AdWords\v201306\classes\RejectedError',
        "RequestError"                       => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
        "RequiredError"                      => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
        "SelectorError"                      => '\Google\Api\Ads\AdWords\v201306\classes\SelectorError',
        "SizeLimitError"                     => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
        "SoapResponseHeader"                 => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
        "StringLengthError"                  => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
        "DatabaseError"                      => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
        "ApiException"                       => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
        "ApplicationException"               => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
        "Selector"                           => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
        "Operation"                          => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
        "Page"                               => '\Google\Api\Ads\AdWords\v201306\classes\Page',
        "AuthenticationError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
        "AuthorizationError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
        "ClientTermsError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
        "DatabaseError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
        "DateError.Reason"                   => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
        "DistinctError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
        "IdError.Reason"                     => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
        "InternalApiError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
        "NotEmptyError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
        "NotWhitelistedError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
        "NullError.Reason"                   => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
        "Operator"                           => '\Google\Api\Ads\AdWords\v201306\classes\Operator',
        "OperatorError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\OperatorErrorReason',
        "Predicate.Operator"                 => '\Google\Api\Ads\AdWords\v201306\classes\PredicateOperator',
        "QuotaCheckError.Reason"             => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
        "RangeError.Reason"                  => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
        "RateExceededError.Reason"           => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
        "ReadOnlyError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
        "RejectedError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\RejectedErrorReason',
        "RequestError.Reason"                => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
        "RequiredError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
        "SelectorError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
        "SizeLimitError.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
        "SortOrder"                          => '\Google\Api\Ads\AdWords\v201306\classes\SortOrder',
        "StringLengthError.Reason"           => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
        "ManagedCustomerServiceError"        => '\Google\Api\Ads\AdWords\v201306\classes\ManagedCustomerServiceError',
        "PendingInvitationSelector"          => '\Google\Api\Ads\AdWords\v201306\classes\PendingInvitationSelector',
        "ManagedCustomerLink"                => '\Google\Api\Ads\AdWords\v201306\classes\ManagedCustomerLink',
        "LinkOperation"                      => '\Google\Api\Ads\AdWords\v201306\classes\LinkOperation',
        "MoveOperation"                      => '\Google\Api\Ads\AdWords\v201306\classes\MoveOperation',
        "MutateLinkResults"                  => '\Google\Api\Ads\AdWords\v201306\classes\MutateLinkResults',
        "MutateManagerResults"               => '\Google\Api\Ads\AdWords\v201306\classes\MutateManagerResults',
        "ManagedCustomer"                    => '\Google\Api\Ads\AdWords\v201306\classes\ManagedCustomer',
        "ManagedCustomerOperation"           => '\Google\Api\Ads\AdWords\v201306\classes\ManagedCustomerOperation',
        "ManagedCustomerPage"                => '\Google\Api\Ads\AdWords\v201306\classes\ManagedCustomerPage',
        "ManagedCustomerReturnValue"         => '\Google\Api\Ads\AdWords\v201306\classes\ManagedCustomerReturnValue',
        "PendingInvitation"                  => '\Google\Api\Ads\AdWords\v201306\classes\PendingInvitation',
        "LinkStatus"                         => '\Google\Api\Ads\AdWords\v201306\classes\LinkStatus',
        "ManagedCustomerServiceError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ManagedCustomerServiceErrorReason',
        "getPendingInvitations"              => '\Google\Api\Ads\AdWords\v201306\classes\getPendingInvitations',
        "getPendingInvitationsResponse"      => '\Google\Api\Ads\AdWords\v201306\classes\getPendingInvitationsResponse',
        "mutateLink"                         => '\Google\Api\Ads\AdWords\v201306\classes\mutateLink',
        "mutateLinkResponse"                 => '\Google\Api\Ads\AdWords\v201306\classes\mutateLinkResponse',
        "mutateManager"                      => '\Google\Api\Ads\AdWords\v201306\classes\mutateManager',
        "mutateManagerResponse"              => '\Google\Api\Ads\AdWords\v201306\classes\mutateManagerResponse',
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/mcm/v201306/ManagedCustomerService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = ManagedCustomerService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'ManagedCustomerService',
            'https://adwords.google.com/api/adwords/mcm/v201306'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the list of customers that meet the selector criteria.
     *
     * @param selector The selector specifying the {@link ManagedCustomer}s to return.
     *
     * @return List of customers identified by the selector.
     * @throws ApiException When there is at least one error with the request.
     */
    public function get($serviceSelector)
    {
        $arg = new ManagedCustomerServiceGet($serviceSelector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }


    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns the pending invitations for the customer IDs in the selector.
     *
     * @param selector the manager customer ids (inviters) or the client customer ids (invitees)
     *
     * @throws ApiException when there is at least one error with the request
     */
    public function getPendingInvitations($selector)
    {
        $arg = new getPendingInvitations($selector);
        $result = $this->__soapCall("getPendingInvitations", array($arg));
        return $result->rval;
    }


    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET, ADD.</span>
     *
     *
     *
     * Adds managed customers.
     *
     * <p class="note"><b>Note:</b> {@link ManagedCustomerOperation} only supports
     * {@code ADD} operator. </p>
     *
     * @param operations List of unique operations.
     *
     * @return The list of updated managed customers, returned in the same order as the
     * <code>operations</code> array.
     */
    public function mutate($operations)
    {
        $arg = new ManagedCustomerServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }


    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET, ADD.</span>
     *
     *
     *
     * Modifies the ManagedCustomer forest. These actions are possible (categorized by
     * Operator + Link Status):
     *
     * <ul>
     * <li>ADD + PENDING:   manager extends invitations
     * <li>SET + CANCELLED: manager rescinds invitations
     * <li>SET + INACTIVE:  manager/client terminates links
     * <li>SET + ACTIVE:    client accepts invitations
     * <li>SET + REFUSED:   client declines invitations
     * </ul>
     *
     * @param operations the list of operations
     *
     * @return results for the given operations
     * @throws ApiException with a {@link ManagedCustomerServiceError}
     */
    public function mutateLink($operations)
    {
        $arg = new mutateLink($operations);
        $result = $this->__soapCall("mutateLink", array($arg));
        return $result->rval;
    }


    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET.</span>
     *
     *
     *
     * Moves client customers to new managers (moving links). Only the following action is possible:
     *
     * <ul>
     * <li>SET + ACTIVE: manager moves client customers to new managers within the same MCC
     * hierarchy
     * </ul>
     *
     * @param operations List of unique operations.
     *
     * @return results for the given operations
     * @throws ApiException with a {@link ManagedCustomerServiceError}
     */
    public function mutateManager($operations)
    {
        $arg = new mutateManager($operations);
        $result = $this->__soapCall("mutateManager", array($arg));
        return $result->rval;
    }

}