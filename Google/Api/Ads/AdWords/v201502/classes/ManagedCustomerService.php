<?php

require_once 'ManagedCustomerService.require.php';

/**
 * ManagedCustomerService
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class ManagedCustomerService extends AdWordsSoapClient
{
    const SERVICE_NAME = "ManagedCustomerService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201502";
    const ENDPOINT = "https://adwords.google.com/api/adwords/mcm/v201502/ManagedCustomerService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/mcm/v201502/ManagedCustomerService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = [
      "AuthenticationError"                => "AuthenticationError",
      "AuthorizationError"                 => "AuthorizationError",
      "ClientTermsError"                   => "ClientTermsError",
      "DateError"                          => "DateError",
      "DateRange"                          => "DateRange",
      "DistinctError"                      => "DistinctError",
      "IdError"                            => "IdError",
      "InternalApiError"                   => "InternalApiError",
      "NotEmptyError"                      => "NotEmptyError",
      "NullError"                          => "NullError",
      "OperationAccessDenied"              => "OperationAccessDenied",
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
      "SoapHeader"                         => "SoapRequestHeader",
      "SoapResponseHeader"                 => "SoapResponseHeader",
      "StringLengthError"                  => "StringLengthError",
      "DatabaseError"                      => "DatabaseError",
      "ApiError"                           => "ApiError",
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
      "NullError.Reason"                   => "NullErrorReason",
      "OperationAccessDenied.Reason"       => "OperationAccessDeniedReason",
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
      "ManagedCustomerLabel"               => "ManagedCustomerLabel",
      "ManagedCustomerLabelOperation"      => "ManagedCustomerLabelOperation",
      "ManagedCustomerLabelReturnValue"    => "ManagedCustomerLabelReturnValue",
      "ManagedCustomerServiceError"        => "ManagedCustomerServiceError",
      "PendingInvitationSelector"          => "PendingInvitationSelector",
      "AccountLabel"                       => "AccountLabel",
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
      "get"                                => "ManagedCustomerServiceGet",
      "getResponse"                        => "ManagedCustomerServiceGetResponse",
      "getPendingInvitations"              => "GetPendingInvitations",
      "getPendingInvitationsResponse"      => "GetPendingInvitationsResponse",
      "mutate"                             => "ManagedCustomerServiceMutate",
      "mutateResponse"                     => "ManagedCustomerServiceMutateResponse",
      "mutateLabel"                        => "MutateLabel",
      "mutateLabelResponse"                => "MutateLabelResponse",
      "mutateLink"                         => "MutateLink",
      "mutateLinkResponse"                 => "MutateLinkResponse",
      "mutateManager"                      => "MutateManager",
      "mutateManagerResponse"              => "MutateManagerResponse",
  ];

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
   * Returns the list of customers that meet the selector criteria.
   *
   * @param selector The selector specifying the {@link ManagedCustomer}s to return.
   * @return List of customers identified by the selector.
   * @throws ApiException When there is at least one error with the request.
   */
  public function get($serviceSelector)
  {
      $args = new ManagedCustomerServiceGet($serviceSelector);
      $result = $this->__soapCall("get", [$args]);

      return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns the pending invitations for the customer IDs in the selector.
   * @param selector the manager customer ids (inviters) or the client customer ids (invitees)
   * @throws ApiException when there is at least one error with the request
   */
  public function getPendingInvitations($selector)
  {
      $args = new GetPendingInvitations($selector);
      $result = $this->__soapCall("getPendingInvitations", [$args]);

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
   * @return The list of updated managed customers, returned in the same order as the
   *                   <code>operations</code> array.
   */
  public function mutate($operations)
  {
      $args = new ManagedCustomerServiceMutate($operations);
      $result = $this->__soapCall("mutate", [$args]);

      return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
   *
   *
   *
   * Adds {@link com.google.ads.api.services.mcm.common.labels.Label}s to, and removes
   * {@linkplain Label}s from, {@link ManagedCustomer}s.
   *
   * <p>To add a {@linkplain Label} to a {@linkplain ManagedCustomer}, use
   * {@link Operator#ADD}.
   * To remove a {@linkplain Label} from a {@linkplain ManagedCustomer}, use
   * {@link Operator#REMOVE}.
   * <p>The label must already exist (see
   * {@link com.google.ads.api.services.mcm.labels.AccountLabelService.mutate} for how to
   * create them) and be owned by the authenticated user.
   * <p>The {@linkplain ManagedCustomer} must already exist and be managed by the customer
   * making the request (either directly or indirectly).
   * <p>A label may be applied to at most 1000 customers.
   * <p>This method does not support partial failures, and will fail if any operation is invalid.
   */
  public function mutateLabel($operations)
  {
      $args = new MutateLabel($operations);
      $result = $this->__soapCall("mutateLabel", [$args]);

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
   * @return results for the given operations
   * @throws ApiException with a {@link ManagedCustomerServiceError}
   */
  public function mutateLink($operations)
  {
      $args = new MutateLink($operations);
      $result = $this->__soapCall("mutateLink", [$args]);

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
   * @return results for the given operations
   * @throws ApiException with a {@link ManagedCustomerServiceError}
   */
  public function mutateManager($operations)
  {
      $args = new MutateManager($operations);
      $result = $this->__soapCall("mutateManager", [$args]);

      return $result->rval;
  }
}
