<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * AdGroupAdService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class AdGroupAdService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                             => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAdServiceGetResponse',
        "get"                                     => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAdServiceGet',
        "mutate"                                  => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAdServiceMutate',
        "mutateResponse"                          => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAdServiceMutateResponse',
        "DateTime"                                => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
        "SoapHeader"                              => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
        "Ad"                                      => '\Google\Api\Ads\AdWords\v201306\classes\Ad',
        "AdError"                                 => '\Google\Api\Ads\AdWords\v201306\classes\AdError',
        "ApiError"                                => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
        "AdExtensionOverrideStats"                => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverrideStats',
        "Stats"                                   => '\Google\Api\Ads\AdWords\v201306\classes\Stats',
        "AdGroupAd"                               => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAd',
        "AdGroupAdCountLimitExceeded"             => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAdCountLimitExceeded',
        "EntityCountLimitExceeded"                => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceeded',
        "AdGroupAdError"                          => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAdError',
        "AdGroupAdExperimentData"                 => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAdExperimentData',
        "AdGroupAdOperation"                      => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAdOperation',
        "Operation"                               => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
        "AdGroupAdPage"                           => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAdPage',
        "Page"                                    => '\Google\Api\Ads\AdWords\v201306\classes\Page',
        "AdGroupAdReturnValue"                    => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAdReturnValue',
        "ListReturnValue"                         => '\Google\Api\Ads\AdWords\v201306\classes\ListReturnValue',
        "AdStats"                                 => '\Google\Api\Ads\AdWords\v201306\classes\AdStats',
        "AdUnionId"                               => '\Google\Api\Ads\AdWords\v201306\classes\AdUnionId',
        "AdxError"                                => '\Google\Api\Ads\AdWords\v201306\classes\AdxError',
        "ApiException"                            => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
        "ApplicationException"                    => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
        "Audio"                                   => '\Google\Api\Ads\AdWords\v201306\classes\Audio',
        "Media"                                   => '\Google\Api\Ads\AdWords\v201306\classes\Media',
        "AuthenticationError"                     => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
        "AuthorizationError"                      => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
        "BetaError"                               => '\Google\Api\Ads\AdWords\v201306\classes\BetaError',
        "ClientTermsError"                        => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
        "ComparableValue"                         => '\Google\Api\Ads\AdWords\v201306\classes\ComparableValue',
        "DatabaseError"                           => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
        "DateError"                               => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
        "DateRange"                               => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
        "DeprecatedAd"                            => '\Google\Api\Ads\AdWords\v201306\classes\DeprecatedAd',
        "Dimensions"                              => '\Google\Api\Ads\AdWords\v201306\classes\Dimensions',
        "DistinctError"                           => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
        "DoubleValue"                             => '\Google\Api\Ads\AdWords\v201306\classes\DoubleValue',
        "NumberValue"                             => '\Google\Api\Ads\AdWords\v201306\classes\NumberValue',
        "EntityNotFound"                          => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
        "ExemptionRequest"                        => '\Google\Api\Ads\AdWords\v201306\classes\ExemptionRequest',
        "ForwardCompatibilityError"               => '\Google\Api\Ads\AdWords\v201306\classes\ForwardCompatibilityError',
        "IdError"                                 => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
        "Image"                                   => '\Google\Api\Ads\AdWords\v201306\classes\Image',
        "ImageAd"                                 => '\Google\Api\Ads\AdWords\v201306\classes\ImageAd',
        "ImageError"                              => '\Google\Api\Ads\AdWords\v201306\classes\ImageError',
        "InternalApiError"                        => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
        "LongValue"                               => '\Google\Api\Ads\AdWords\v201306\classes\LongValue',
        "MediaError"                              => '\Google\Api\Ads\AdWords\v201306\classes\MediaError',
        "Media_Size_DimensionsMapEntry"           => '\Google\Api\Ads\AdWords\v201306\classes\Media_Size_DimensionsMapEntry',
        "Media_Size_StringMapEntry"               => '\Google\Api\Ads\AdWords\v201306\classes\Media_Size_StringMapEntry',
        "MobileAd"                                => '\Google\Api\Ads\AdWords\v201306\classes\MobileAd',
        "MobileImageAd"                           => '\Google\Api\Ads\AdWords\v201306\classes\MobileImageAd',
        "Money"                                   => '\Google\Api\Ads\AdWords\v201306\classes\Money',
        "NewEntityCreationError"                  => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationError',
        "NotEmptyError"                           => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
        "NotWhitelistedError"                     => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
        "NullError"                               => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
        "OperationAccessDenied"                   => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
        "OrderBy"                                 => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
        "Paging"                                  => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
        "PagingError"                             => '\Google\Api\Ads\AdWords\v201306\classes\PagingError',
        "PolicyViolationError"                    => '\Google\Api\Ads\AdWords\v201306\classes\PolicyViolationError',
        "PolicyViolationError.Part"               => '\Google\Api\Ads\AdWords\v201306\classes\PolicyViolationErrorPart',
        "PolicyViolationKey"                      => '\Google\Api\Ads\AdWords\v201306\classes\PolicyViolationKey',
        "Predicate"                               => '\Google\Api\Ads\AdWords\v201306\classes\Predicate',
        "ProductAd"                               => '\Google\Api\Ads\AdWords\v201306\classes\ProductAd',
        "QueryError"                              => '\Google\Api\Ads\AdWords\v201306\classes\QueryError',
        "QuotaCheckError"                         => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
        "RangeError"                              => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
        "RateExceededError"                       => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
        "ReadOnlyError"                           => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
        "RequestError"                            => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
        "RequiredError"                           => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
        "RichMediaAd"                             => '\Google\Api\Ads\AdWords\v201306\classes\RichMediaAd',
        "Selector"                                => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
        "SelectorError"                           => '\Google\Api\Ads\AdWords\v201306\classes\SelectorError',
        "SizeLimitError"                          => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
        "SoapResponseHeader"                      => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
        "StatsQueryError"                         => '\Google\Api\Ads\AdWords\v201306\classes\StatsQueryError',
        "StringLengthError"                       => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
        "String_StringMapEntry"                   => '\Google\Api\Ads\AdWords\v201306\classes\String_StringMapEntry',
        "TempAdUnionId"                           => '\Google\Api\Ads\AdWords\v201306\classes\TempAdUnionId',
        "TemplateAd"                              => '\Google\Api\Ads\AdWords\v201306\classes\TemplateAd',
        "TemplateElement"                         => '\Google\Api\Ads\AdWords\v201306\classes\TemplateElement',
        "TemplateElementField"                    => '\Google\Api\Ads\AdWords\v201306\classes\TemplateElementField',
        "TextAd"                                  => '\Google\Api\Ads\AdWords\v201306\classes\TextAd',
        "ThirdPartyRedirectAd"                    => '\Google\Api\Ads\AdWords\v201306\classes\ThirdPartyRedirectAd',
        "Video"                                   => '\Google\Api\Ads\AdWords\v201306\classes\Video',
        "DynamicSearchAd"                         => '\Google\Api\Ads\AdWords\v201306\classes\DynamicSearchAd',
        "AdError.Reason"                          => '\Google\Api\Ads\AdWords\v201306\classes\AdErrorReason',
        "AdGroupAd.ApprovalStatus"                => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAdApprovalStatus',
        "AdGroupAd.Status"                        => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAdStatus',
        "AdGroupAdError.Reason"                   => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupAdErrorReason',
        "AdxError.Reason"                         => '\Google\Api\Ads\AdWords\v201306\classes\AdxErrorReason',
        "AuthenticationError.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
        "AuthorizationError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
        "BetaError.Reason"                        => '\Google\Api\Ads\AdWords\v201306\classes\BetaErrorReason',
        "ClientTermsError.Reason"                 => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
        "DatabaseError.Reason"                    => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
        "DateError.Reason"                        => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
        "DeprecatedAd.Type"                       => '\Google\Api\Ads\AdWords\v201306\classes\DeprecatedAdType',
        "DistinctError.Reason"                    => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
        "EntityCountLimitExceeded.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceededReason',
        "EntityNotFound.Reason"                   => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
        "ExperimentDataStatus"                    => '\Google\Api\Ads\AdWords\v201306\classes\ExperimentDataStatus',
        "ExperimentDeltaStatus"                   => '\Google\Api\Ads\AdWords\v201306\classes\ExperimentDeltaStatus',
        "ForwardCompatibilityError.Reason"        => '\Google\Api\Ads\AdWords\v201306\classes\ForwardCompatibilityErrorReason',
        "IdError.Reason"                          => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
        "ImageError.Reason"                       => '\Google\Api\Ads\AdWords\v201306\classes\ImageErrorReason',
        "InternalApiError.Reason"                 => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
        "MarkupLanguageType"                      => '\Google\Api\Ads\AdWords\v201306\classes\MarkupLanguageType',
        "Media.MediaType"                         => '\Google\Api\Ads\AdWords\v201306\classes\MediaMediaType',
        "Media.MimeType"                          => '\Google\Api\Ads\AdWords\v201306\classes\MediaMimeType',
        "Media.Size"                              => '\Google\Api\Ads\AdWords\v201306\classes\MediaSize',
        "MediaError.Reason"                       => '\Google\Api\Ads\AdWords\v201306\classes\MediaErrorReason',
        "NewEntityCreationError.Reason"           => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationErrorReason',
        "NotEmptyError.Reason"                    => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
        "NotWhitelistedError.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
        "NullError.Reason"                        => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
        "OperationAccessDenied.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
        "Operator"                                => '\Google\Api\Ads\AdWords\v201306\classes\Operator',
        "PagingError.Reason"                      => '\Google\Api\Ads\AdWords\v201306\classes\PagingErrorReason',
        "Predicate.Operator"                      => '\Google\Api\Ads\AdWords\v201306\classes\PredicateOperator',
        "QueryError.Reason"                       => '\Google\Api\Ads\AdWords\v201306\classes\QueryErrorReason',
        "QuotaCheckError.Reason"                  => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
        "RangeError.Reason"                       => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
        "RateExceededError.Reason"                => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
        "ReadOnlyError.Reason"                    => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
        "RequestError.Reason"                     => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
        "RequiredError.Reason"                    => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
        "RichMediaAd.AdAttribute"                 => '\Google\Api\Ads\AdWords\v201306\classes\RichMediaAdAdAttribute',
        "RichMediaAd.RichMediaAdType"             => '\Google\Api\Ads\AdWords\v201306\classes\RichMediaAdRichMediaAdType',
        "SelectorError.Reason"                    => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
        "SizeLimitError.Reason"                   => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
        "SortOrder"                               => '\Google\Api\Ads\AdWords\v201306\classes\SortOrder',
        "Stats.Network"                           => '\Google\Api\Ads\AdWords\v201306\classes\StatsNetwork',
        "StatsQueryError.Reason"                  => '\Google\Api\Ads\AdWords\v201306\classes\StatsQueryErrorReason',
        "StringLengthError.Reason"                => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
        "TemplateElementField.Type"               => '\Google\Api\Ads\AdWords\v201306\classes\TemplateElementFieldType',
        "ThirdPartyRedirectAd.ExpandingDirection" => '\Google\Api\Ads\AdWords\v201306\classes\ThirdPartyRedirectAdExpandingDirection',
        "VideoType"                               => '\Google\Api\Ads\AdWords\v201306\classes\VideoType',
        "query"                                   => '\Google\Api\Ads\AdWords\v201306\classes\query',
        "queryResponse"                           => '\Google\Api\Ads\AdWords\v201306\classes\queryResponse',
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/AdGroupAdService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = AdGroupAdService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'AdGroupAdService',
            'https://adwords.google.com/api/adwords/cm/v201306'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns a list of AdGroupAds.
     *
     * @param serviceSelector The selector specifying the {@link AdGroupAd}s to return.
     *
     * @return The page containing the AdGroupAds that meet the criteria specified by the selector.
     * @throws ApiException when there is at least one error with the request.
     */
    public function get($serviceSelector)
    {
        $arg = new AdGroupAdServiceGet($serviceSelector);
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
        $arg = new AdGroupAdServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
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
        $arg = new query($query);
        $result = $this->__soapCall("query", array($arg));
        return $result->rval;
    }

}