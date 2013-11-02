<?php

/**
 * CampaignAdExtensionService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class CampaignAdExtensionService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                        => "CampaignAdExtensionServiceGetResponse",
        "get"                                => "CampaignAdExtensionServiceGet",
        "mutate"                             => "CampaignAdExtensionServiceMutate",
        "mutateResponse"                     => "CampaignAdExtensionServiceMutateResponse",
        "DateTime"                           => "AdWordsDateTime",
        "SoapHeader"                         => "SoapRequestHeader",
        "AdExtensionError"                   => "AdExtensionError",
        "ApiError"                           => "ApiError",
        "Address"                            => "Address",
        "AdxError"                           => "AdxError",
        "AuthenticationError"                => "AuthenticationError",
        "AuthorizationError"                 => "AuthorizationError",
        "BetaError"                          => "BetaError",
        "CampaignAdExtensionError"           => "CampaignAdExtensionError",
        "CampaignAdExtensionStats"           => "CampaignAdExtensionStats",
        "Stats"                              => "Stats",
        "ClientTermsError"                   => "ClientTermsError",
        "DateRange"                          => "DateRange",
        "DistinctError"                      => "DistinctError",
        "DomainInfoExtension"                => "DomainInfoExtension",
        "AdExtension"                        => "AdExtension",
        "DoubleValue"                        => "DoubleValue",
        "NumberValue"                        => "NumberValue",
        "EntityCountLimitExceeded"           => "EntityCountLimitExceeded",
        "EntityNotFound"                     => "EntityNotFound",
        "GeoPoint"                           => "GeoPoint",
        "IdError"                            => "IdError",
        "InAppLinkExtension"                 => "InAppLinkExtension",
        "InternalApiError"                   => "InternalApiError",
        "LongValue"                          => "LongValue",
        "MobileExtension"                    => "MobileExtension",
        "NewEntityCreationError"             => "NewEntityCreationError",
        "NotEmptyError"                      => "NotEmptyError",
        "NotWhitelistedError"                => "NotWhitelistedError",
        "NullError"                          => "NullError",
        "ComparableValue"                    => "ComparableValue",
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
        "Sitelink"                           => "Sitelink",
        "SitelinksExtension"                 => "SitelinksExtension",
        "SizeLimitError"                     => "SizeLimitError",
        "SoapResponseHeader"                 => "SoapResponseHeader",
        "StringLengthError"                  => "StringLengthError",
        "DatabaseError"                      => "DatabaseError",
        "LocationExtension"                  => "LocationExtension",
        "Money"                              => "Money",
        "ApiException"                       => "ApiException",
        "ApplicationException"               => "ApplicationException",
        "LocationSyncExtension"              => "LocationSyncExtension",
        "Selector"                           => "Selector",
        "CampaignAdExtension"                => "CampaignAdExtension",
        "CampaignAdExtensionOperation"       => "CampaignAdExtensionOperation",
        "Operation"                          => "Operation",
        "CampaignAdExtensionPage"            => "CampaignAdExtensionPage",
        "Page"                               => "Page",
        "CampaignAdExtensionReturnValue"     => "CampaignAdExtensionReturnValue",
        "ListReturnValue"                    => "ListReturnValue",
        "AdExtensionError.Reason"            => "AdExtensionErrorReason",
        "AdxError.Reason"                    => "AdxErrorReason",
        "AuthenticationError.Reason"         => "AuthenticationErrorReason",
        "AuthorizationError.Reason"          => "AuthorizationErrorReason",
        "BetaError.Reason"                   => "BetaErrorReason",
        "CampaignAdExtension.ApprovalStatus" => "CampaignAdExtensionApprovalStatus",
        "CampaignAdExtension.Status"         => "CampaignAdExtensionStatus",
        "CampaignAdExtensionError.Reason"    => "CampaignAdExtensionErrorReason",
        "ClientTermsError.Reason"            => "ClientTermsErrorReason",
        "DatabaseError.Reason"               => "DatabaseErrorReason",
        "DistinctError.Reason"               => "DistinctErrorReason",
        "EntityCountLimitExceeded.Reason"    => "EntityCountLimitExceededReason",
        "EntityNotFound.Reason"              => "EntityNotFoundReason",
        "IdError.Reason"                     => "IdErrorReason",
        "InAppLinkExtension.AppStore"        => "InAppLinkExtensionAppStore",
        "InternalApiError.Reason"            => "InternalApiErrorReason",
        "LocationExtension.Source"           => "LocationExtensionSource",
        "NewEntityCreationError.Reason"      => "NewEntityCreationErrorReason",
        "NotEmptyError.Reason"               => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason"         => "NotWhitelistedErrorReason",
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
        "Stats.Network"                      => "StatsNetwork",
        "StringLengthError.Reason"           => "StringLengthErrorReason",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/CampaignAdExtensionService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = CampaignAdExtensionService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'CampaignAdExtensionService',
            'https://adwords.google.com/api/adwords/cm/v201306'
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
        $arg = new CampaignAdExtensionServiceGet($serviceSelector);
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
     * @param operations The operations to apply. The same {@link CampaignAdExtension}
     *                   cannot be specified in more than one operation.
     *
     * @return The changed {@link CampaignAdExtension}s.
     */
    public function mutate($operations)
    {
        $arg = new CampaignAdExtensionServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }

}