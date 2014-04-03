<?php

require_once('AdGroupAdService.require.php');


/**
 * AdGroupAdService
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupAdService extends AdWordsSoapClient
{

    const SERVICE_NAME = "AdGroupAdService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201402/AdGroupAdService";

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public $endpoint = "https://adwords.google.com/api/adwords/cm/v201402/AdGroupAdService";
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "Ad"                                      => "Ad",
        "AdError"                                 => "AdError",
        "AdGroupAd"                               => "AdGroupAd",
        "AdGroupAdCountLimitExceeded"             => "AdGroupAdCountLimitExceeded",
        "AdGroupAdError"                          => "AdGroupAdError",
        "AdGroupAdExperimentData"                 => "AdGroupAdExperimentData",
        "AdGroupAdOperation"                      => "AdGroupAdOperation",
        "AdGroupAdPage"                           => "AdGroupAdPage",
        "AdGroupAdReturnValue"                    => "AdGroupAdReturnValue",
        "AdUnionId"                               => "AdUnionId",
        "AdxError"                                => "AdxError",
        "ApiError"                                => "ApiError",
        "ApiException"                            => "ApiException",
        "ApplicationException"                    => "ApplicationException",
        "Audio"                                   => "Audio",
        "AuthenticationError"                     => "AuthenticationError",
        "AuthorizationError"                      => "AuthorizationError",
        "ClientTermsError"                        => "ClientTermsError",
        "DatabaseError"                           => "DatabaseError",
        "DateError"                               => "DateError",
        "DateRange"                               => "DateRange",
        "DeprecatedAd"                            => "DeprecatedAd",
        "Dimensions"                              => "Dimensions",
        "DistinctError"                           => "DistinctError",
        "EntityCountLimitExceeded"                => "EntityCountLimitExceeded",
        "EntityNotFound"                          => "EntityNotFound",
        "ExemptionRequest"                        => "ExemptionRequest",
        "ExperimentError"                         => "ExperimentError",
        "ForwardCompatibilityError"               => "ForwardCompatibilityError",
        "IdError"                                 => "IdError",
        "Image"                                   => "Image",
        "ImageAd"                                 => "ImageAd",
        "ImageError"                              => "ImageError",
        "InternalApiError"                        => "InternalApiError",
        "ListReturnValue"                         => "ListReturnValue",
        "Media"                                   => "Media",
        "MediaError"                              => "MediaError",
        "Media_Size_DimensionsMapEntry"           => "Media_Size_DimensionsMapEntry",
        "Media_Size_StringMapEntry"               => "Media_Size_StringMapEntry",
        "MobileAd"                                => "MobileAd",
        "MobileImageAd"                           => "MobileImageAd",
        "NewEntityCreationError"                  => "NewEntityCreationError",
        "NotEmptyError"                           => "NotEmptyError",
        "NullError"                               => "NullError",
        "Operation"                               => "Operation",
        "OperationAccessDenied"                   => "OperationAccessDenied",
        "OrderBy"                                 => "OrderBy",
        "Page"                                    => "Page",
        "Paging"                                  => "Paging",
        "PagingError"                             => "PagingError",
        "PolicyViolationError"                    => "PolicyViolationError",
        "PolicyViolationError.Part"               => "PolicyViolationErrorPart",
        "PolicyViolationKey"                      => "PolicyViolationKey",
        "Predicate"                               => "Predicate",
        "ProductAd"                               => "ProductAd",
        "QueryError"                              => "QueryError",
        "QuotaCheckError"                         => "QuotaCheckError",
        "RangeError"                              => "RangeError",
        "RateExceededError"                       => "RateExceededError",
        "ReadOnlyError"                           => "ReadOnlyError",
        "RejectedError"                           => "RejectedError",
        "RequestError"                            => "RequestError",
        "RequiredError"                           => "RequiredError",
        "RichMediaAd"                             => "RichMediaAd",
        "Selector"                                => "Selector",
        "SelectorError"                           => "SelectorError",
        "SizeLimitError"                          => "SizeLimitError",
        "SoapHeader"                              => "SoapRequestHeader",
        "SoapResponseHeader"                      => "SoapResponseHeader",
        "StatsQueryError"                         => "StatsQueryError",
        "StringLengthError"                       => "StringLengthError",
        "String_StringMapEntry"                   => "String_StringMapEntry",
        "TempAdUnionId"                           => "TempAdUnionId",
        "TemplateAd"                              => "TemplateAd",
        "TemplateElement"                         => "TemplateElement",
        "TemplateElementField"                    => "TemplateElementField",
        "TextAd"                                  => "TextAd",
        "ThirdPartyRedirectAd"                    => "ThirdPartyRedirectAd",
        "Video"                                   => "Video",
        "DynamicSearchAd"                         => "DynamicSearchAd",
        "AdError.Reason"                          => "AdErrorReason",
        "AdGroupAd.ApprovalStatus"                => "AdGroupAdApprovalStatus",
        "AdGroupAd.Status"                        => "AdGroupAdStatus",
        "AdGroupAdError.Reason"                   => "AdGroupAdErrorReason",
        "AdxError.Reason"                         => "AdxErrorReason",
        "AuthenticationError.Reason"              => "AuthenticationErrorReason",
        "AuthorizationError.Reason"               => "AuthorizationErrorReason",
        "ClientTermsError.Reason"                 => "ClientTermsErrorReason",
        "DatabaseError.Reason"                    => "DatabaseErrorReason",
        "DateError.Reason"                        => "DateErrorReason",
        "DeprecatedAd.Type"                       => "DeprecatedAdType",
        "DistinctError.Reason"                    => "DistinctErrorReason",
        "EntityCountLimitExceeded.Reason"         => "EntityCountLimitExceededReason",
        "EntityNotFound.Reason"                   => "EntityNotFoundReason",
        "ExperimentDataStatus"                    => "ExperimentDataStatus",
        "ExperimentDeltaStatus"                   => "ExperimentDeltaStatus",
        "ExperimentError.Reason"                  => "ExperimentErrorReason",
        "ForwardCompatibilityError.Reason"        => "ForwardCompatibilityErrorReason",
        "IdError.Reason"                          => "IdErrorReason",
        "ImageError.Reason"                       => "ImageErrorReason",
        "InternalApiError.Reason"                 => "InternalApiErrorReason",
        "MarkupLanguageType"                      => "MarkupLanguageType",
        "Media.MediaType"                         => "MediaMediaType",
        "Media.MimeType"                          => "MediaMimeType",
        "Media.Size"                              => "MediaSize",
        "MediaError.Reason"                       => "MediaErrorReason",
        "NewEntityCreationError.Reason"           => "NewEntityCreationErrorReason",
        "NotEmptyError.Reason"                    => "NotEmptyErrorReason",
        "NullError.Reason"                        => "NullErrorReason",
        "OperationAccessDenied.Reason"            => "OperationAccessDeniedReason",
        "Operator"                                => "Operator",
        "PagingError.Reason"                      => "PagingErrorReason",
        "Predicate.Operator"                      => "PredicateOperator",
        "QueryError.Reason"                       => "QueryErrorReason",
        "QuotaCheckError.Reason"                  => "QuotaCheckErrorReason",
        "RangeError.Reason"                       => "RangeErrorReason",
        "RateExceededError.Reason"                => "RateExceededErrorReason",
        "ReadOnlyError.Reason"                    => "ReadOnlyErrorReason",
        "RejectedError.Reason"                    => "RejectedErrorReason",
        "RequestError.Reason"                     => "RequestErrorReason",
        "RequiredError.Reason"                    => "RequiredErrorReason",
        "RichMediaAd.AdAttribute"                 => "RichMediaAdAdAttribute",
        "RichMediaAd.RichMediaAdType"             => "RichMediaAdRichMediaAdType",
        "SelectorError.Reason"                    => "SelectorErrorReason",
        "SizeLimitError.Reason"                   => "SizeLimitErrorReason",
        "SortOrder"                               => "SortOrder",
        "StatsQueryError.Reason"                  => "StatsQueryErrorReason",
        "StringLengthError.Reason"                => "StringLengthErrorReason",
        "TemplateElementField.Type"               => "TemplateElementFieldType",
        "ThirdPartyRedirectAd.ExpandingDirection" => "ThirdPartyRedirectAdExpandingDirection",
        "VideoType"                               => "VideoType",
        "get"                                     => "AdGroupAdServiceGet",
        "getResponse"                             => "AdGroupAdServiceGetResponse",
        "mutate"                                  => "AdGroupAdServiceMutate",
        "mutateResponse"                          => "AdGroupAdServiceMutateResponse",
        "query"                                   => "Query",
        "queryResponse"                           => "QueryResponse",
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
     * Returns a list of AdGroupAds.
     * Deleted AdGroupAds are not returned by default.
     *
     * @param serviceSelector The selector specifying the {@link AdGroupAd}s to return.
     *
     * @return The page containing the AdGroupAds that meet the criteria specified by the selector.
     * @throws ApiException when there is at least one error with the request.
     */
    public function get($serviceSelector)
    {
        $args = new AdGroupAdServiceGet($serviceSelector);
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
     * Applies the list of mutate operations (ie. add, set, remove):
     * <p>Add - Creates a new {@linkplain AdGroupAd ad group ad}. The
     * {@code adGroupId} must
     * reference an existing ad group. The child {@code Ad} must be sufficiently
     * specified by constructing a concrete ad type (such as {@code TextAd})
     * and setting its fields accordingly.</p>
     * <p>Set - Updates an ad group ad. Except for {@code status},
     * ad group ad fields are not mutable. Status updates are
     * straightforward - the status of the ad group ad is updated as
     * specified. If any other field has changed, it will be ignored. If
     * you want to change any of the fields other than status, you must
     * make a new ad and then delete the old one.</p>
     * <p>Remove - Removes the link between the specified AdGroup and
     * Ad.</p>
     *
     * @param operations The operations to apply.
     *
     * @return A list of AdGroupAds where each entry in the list is the result of
     * applying the operation in the input list with the same index. For an
     * add/set operation, the return AdGroupAd will be what is saved to the db.
     * In the case of the remove operation, the return AdGroupAd will simply be
     * an AdGroupAd containing an Ad with the id set to the Ad being deleted from
     * the AdGroup.
     */
    public function mutate($operations)
    {
        $args = new AdGroupAdServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));
        return $result->rval;
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns a list of AdGroupAds based on the query.
     *
     * @param query The SQL-like AWQL query string.
     *
     * @return A list of AdGroupAds.
     * @throws ApiException if problems occur while parsing the query or fetching AdGroupAds.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall("query", array($args));
        return $result->rval;
    }
}