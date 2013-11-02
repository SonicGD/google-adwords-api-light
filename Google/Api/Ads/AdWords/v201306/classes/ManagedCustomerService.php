<?php

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
        "getResponse"                        => "ManagedCustomerServiceGetResponse",
        "get"                                => "ManagedCustomerServiceGet",
        "mutate"                             => "ManagedCustomerServiceMutate",
        "mutateResponse"                     => "ManagedCustomerServiceMutateResponse",
        "DateTime"                           => "AdWordsDateTime",
        "SoapHeader"                         => "SoapRequestHeader",
        "AuthenticationError"                => "AuthenticationError",
        "ApiError"                           => "ApiError",
        "AuthorizationError"                 => "AuthorizationError",
        "ClientTermsError"                   => "ClientTermsError",
        "DateError"                          => "DateError",
        "DateRange"                          => "DateRange",
        "DistinctError"                      => "DistinctError",
        "IdError"                            => "IdError",
        "InternalApiError"                   => "InternalApiError",
        "NotEmptyError"                      => "NotEmptyError",
        "NotWhitelistedError"                => "NotWhitelistedError",
        "NullError"                          => "NullError",
        "OperatorError"                      => "OperatorError",
        "OrderBy"                            => "OrderBy",
        "Paging"                             => "Paging",
        "Predicate"                          => "Predicate",
        "QuotaCheckError"                    => "QuotaCheckError",
        "RangeError"                         => "RangeError",
        "RateExceededError"                  => "RateExceededError",
        "ReadOnlyError"                      => "ReadOnlyError",
        "RejectedError"                      => "RejectedError",
        "RequestError"                       => "RequestError",
        "RequiredError"                      => "RequiredError",
        "SelectorError"                      => "SelectorError",
        "SizeLimitError"                     => "SizeLimitError",
        "SoapResponseHeader"                 => "SoapResponseHeader",
        "StringLengthError"                  => "StringLengthError",
        "DatabaseError"                      => "DatabaseError",
        "ApiException"                       => "ApiException",
        "ApplicationException"               => "ApplicationException",
        "Selector"                           => "Selector",
        "Operation"                          => "Operation",
        "Page"                               => "Page",
        "AuthenticationError.Reason"         => "AuthenticationErrorReason",
        "AuthorizationError.Reason"          => "AuthorizationErrorReason",
        "ClientTermsError.Reason"            => "ClientTermsErrorReason",
        "DatabaseError.Reason"               => "DatabaseErrorReason",
        "DateError.Reason"                   => "DateErrorReason",
        "DistinctError.Reason"               => "DistinctErrorReason",
        "IdError.Reason"                     => "IdErrorReason",
        "InternalApiError.Reason"            => "InternalApiErrorReason",
        "NotEmptyError.Reason"               => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason"         => "NotWhitelistedErrorReason",
        "NullError.Reason"                   => "NullErrorReason",
        "Operator"                           => "Operator",
        "OperatorError.Reason"               => "OperatorErrorReason",
        "Predicate.Operator"                 => "PredicateOperator",
        "QuotaCheckError.Reason"             => "QuotaCheckErrorReason",
        "RangeError.Reason"                  => "RangeErrorReason",
        "RateExceededError.Reason"           => "RateExceededErrorReason",
        "ReadOnlyError.Reason"               => "ReadOnlyErrorReason",
        "RejectedError.Reason"               => "RejectedErrorReason",
        "RequestError.Reason"                => "RequestErrorReason",
        "RequiredError.Reason"               => "RequiredErrorReason",
        "SelectorError.Reason"               => "SelectorErrorReason",
        "SizeLimitError.Reason"              => "SizeLimitErrorReason",
        "SortOrder"                          => "SortOrder",
        "StringLengthError.Reason"           => "StringLengthErrorReason",
        "ManagedCustomerServiceError"        => "ManagedCustomerServiceError",
        "PendingInvitationSelector"          => "PendingInvitationSelector",
        "ManagedCustomerLink"                => "ManagedCustomerLink",
        "LinkOperation"                      => "LinkOperation",
        "MoveOperation"                      => "MoveOperation",
        "MutateLinkResults"                  => "MutateLinkResults",
        "MutateManagerResults"               => "MutateManagerResults",
        "ManagedCustomer"                    => "ManagedCustomer",
        "ManagedCustomerOperation"           => "ManagedCustomerOperation",
        "ManagedCustomerPage"                => "ManagedCustomerPage",
        "ManagedCustomerReturnValue"         => "ManagedCustomerReturnValue",
        "PendingInvitation"                  => "PendingInvitation",
        "LinkStatus"                         => "LinkStatus",
        "ManagedCustomerServiceError.Reason" => "ManagedCustomerServiceErrorReason",
        "getPendingInvitations"              => "getPendingInvitations",
        "getPendingInvitationsResponse"      => "getPendingInvitationsResponse",
        "mutateLink"                         => "mutateLink",
        "mutateLinkResponse"                 => "mutateLinkResponse",
        "mutateManager"                      => "mutateManager",
        "mutateManagerResponse"              => "mutateManagerResponse",
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