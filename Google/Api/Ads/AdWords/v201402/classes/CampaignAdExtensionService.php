<?php

require_once('CampaignAdExtensionService.require.php');


/**
 * CampaignAdExtensionService
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CampaignAdExtensionService extends AdWordsSoapClient
{

    const SERVICE_NAME = "CampaignAdExtensionService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201402/CampaignAdExtensionService";

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201402/CampaignAdExtensionService";
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "AdExtensionError"                   => "AdExtensionError",
        "Address"                            => "Address",
        "AdxError"                           => "AdxError",
        "AuthenticationError"                => "AuthenticationError",
        "AuthorizationError"                 => "AuthorizationError",
        "CampaignAdExtensionError"           => "CampaignAdExtensionError",
        "ClientTermsError"                   => "ClientTermsError",
        "DateRange"                          => "DateRange",
        "DistinctError"                      => "DistinctError",
        "EntityCountLimitExceeded"           => "EntityCountLimitExceeded",
        "EntityNotFound"                     => "EntityNotFound",
        "GeoPoint"                           => "GeoPoint",
        "IdError"                            => "IdError",
        "InternalApiError"                   => "InternalApiError",
        "NewEntityCreationError"             => "NewEntityCreationError",
        "NotEmptyError"                      => "NotEmptyError",
        "NullError"                          => "NullError",
        "OAuthInfo"                          => "OAuthInfo",
        "OperationAccessDenied"              => "OperationAccessDenied",
        "OperatorError"                      => "OperatorError",
        "OrderBy"                            => "OrderBy",
        "Paging"                             => "Paging",
        "PagingError"                        => "PagingError",
        "Predicate"                          => "Predicate",
        "QuotaCheckError"                    => "QuotaCheckError",
        "RangeError"                         => "RangeError",
        "RateExceededError"                  => "RateExceededError",
        "ReadOnlyError"                      => "ReadOnlyError",
        "RegionCodeError"                    => "RegionCodeError",
        "RejectedError"                      => "RejectedError",
        "RequestError"                       => "RequestError",
        "RequiredError"                      => "RequiredError",
        "SelectorError"                      => "SelectorError",
        "SizeLimitError"                     => "SizeLimitError",
        "SoapHeader"                         => "SoapRequestHeader",
        "SoapResponseHeader"                 => "SoapResponseHeader",
        "StringLengthError"                  => "StringLengthError",
        "DatabaseError"                      => "DatabaseError",
        "LocationExtension"                  => "LocationExtension",
        "ApiError"                           => "ApiError",
        "ApiException"                       => "ApiException",
        "ApplicationException"               => "ApplicationException",
        "LocationSyncExtension"              => "LocationSyncExtension",
        "Selector"                           => "Selector",
        "AdExtension"                        => "AdExtension",
        "CampaignAdExtension"                => "CampaignAdExtension",
        "CampaignAdExtensionOperation"       => "CampaignAdExtensionOperation",
        "CampaignAdExtensionPage"            => "CampaignAdExtensionPage",
        "CampaignAdExtensionReturnValue"     => "CampaignAdExtensionReturnValue",
        "ListReturnValue"                    => "ListReturnValue",
        "Operation"                          => "Operation",
        "Page"                               => "Page",
        "AdExtensionError.Reason"            => "AdExtensionErrorReason",
        "AdxError.Reason"                    => "AdxErrorReason",
        "AuthenticationError.Reason"         => "AuthenticationErrorReason",
        "AuthorizationError.Reason"          => "AuthorizationErrorReason",
        "CampaignAdExtension.ApprovalStatus" => "CampaignAdExtensionApprovalStatus",
        "CampaignAdExtension.Status"         => "CampaignAdExtensionStatus",
        "CampaignAdExtensionError.Reason"    => "CampaignAdExtensionErrorReason",
        "ClientTermsError.Reason"            => "ClientTermsErrorReason",
        "DatabaseError.Reason"               => "DatabaseErrorReason",
        "DistinctError.Reason"               => "DistinctErrorReason",
        "EntityCountLimitExceeded.Reason"    => "EntityCountLimitExceededReason",
        "EntityNotFound.Reason"              => "EntityNotFoundReason",
        "IdError.Reason"                     => "IdErrorReason",
        "InternalApiError.Reason"            => "InternalApiErrorReason",
        "LocationExtension.Source"           => "LocationExtensionSource",
        "NewEntityCreationError.Reason"      => "NewEntityCreationErrorReason",
        "NotEmptyError.Reason"               => "NotEmptyErrorReason",
        "NullError.Reason"                   => "NullErrorReason",
        "OperationAccessDenied.Reason"       => "OperationAccessDeniedReason",
        "Operator"                           => "Operator",
        "OperatorError.Reason"               => "OperatorErrorReason",
        "PagingError.Reason"                 => "PagingErrorReason",
        "Predicate.Operator"                 => "PredicateOperator",
        "QuotaCheckError.Reason"             => "QuotaCheckErrorReason",
        "RangeError.Reason"                  => "RangeErrorReason",
        "RateExceededError.Reason"           => "RateExceededErrorReason",
        "ReadOnlyError.Reason"               => "ReadOnlyErrorReason",
        "RegionCodeError.Reason"             => "RegionCodeErrorReason",
        "RejectedError.Reason"               => "RejectedErrorReason",
        "RequestError.Reason"                => "RequestErrorReason",
        "RequiredError.Reason"               => "RequiredErrorReason",
        "SelectorError.Reason"               => "SelectorErrorReason",
        "SizeLimitError.Reason"              => "SizeLimitErrorReason",
        "SortOrder"                          => "SortOrder",
        "StringLengthError.Reason"           => "StringLengthErrorReason",
        "get"                                => "CampaignAdExtensionServiceGet",
        "getResponse"                        => "CampaignAdExtensionServiceGetResponse",
        "mutate"                             => "CampaignAdExtensionServiceMutate",
        "mutateResponse"                     => "CampaignAdExtensionServiceMutateResponse",
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
     * Returns a list of {@link CampaignAdExtension}s.
     *
     * @param serviceSelector The selector specifying the {@link CampaignAdExtension}s to return.
     *
     * @return The page containing the {@link CampaignAdExtension}s which meet the
     * criteria specified by the selector.
     * @throws ApiException when there is at least one error with the request.
     */
    public function get($serviceSelector)
    {
        $args = new CampaignAdExtensionServiceGet($serviceSelector);
        $result = $this->__soapCall("get", array($args));
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
     * @param operations The operations to apply. The same {@link CampaignAdExtension}
     *                   cannot be specified in more than one operation.
     *
     * @return The changed {@link CampaignAdExtension}s.
     */
    public function mutate($operations)
    {
        $args = new CampaignAdExtensionServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));
        return $result->rval;
    }
}