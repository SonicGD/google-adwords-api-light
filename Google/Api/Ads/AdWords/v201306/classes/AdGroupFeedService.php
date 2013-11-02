<?php

require_once('AdGroupFeedService.require.php');


/**
 * AdGroupFeedService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class AdGroupFeedService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                       => "AdGroupFeedServiceGetResponse",
        "get"                               => "AdGroupFeedServiceGet",
        "mutate"                            => "AdGroupFeedServiceMutate",
        "mutateResponse"                    => "AdGroupFeedServiceMutateResponse",
        "mutateCallToAction"                => "AdGroupFeedServiceMutateCallToAction",
        "search"                            => "AdGroupFeedServiceSearch",
        "Function"                          => "FeedFunction",
        "DateTime"                          => "AdWordsDateTime",
        "SoapHeader"                        => "SoapRequestHeader",
        "AdGroupFeed"                       => "AdGroupFeed",
        "AdGroupFeedError"                  => "AdGroupFeedError",
        "ApiError"                          => "ApiError",
        "AdGroupFeedOperation"              => "AdGroupFeedOperation",
        "Operation"                         => "Operation",
        "AdGroupFeedPage"                   => "AdGroupFeedPage",
        "NullStatsPage"                     => "NullStatsPage",
        "AdGroupFeedReturnValue"            => "AdGroupFeedReturnValue",
        "ListReturnValue"                   => "ListReturnValue",
        "ApiException"                      => "ApiException",
        "ApplicationException"              => "ApplicationException",
        "AuthenticationError"               => "AuthenticationError",
        "AuthorizationError"                => "AuthorizationError",
        "BetaError"                         => "BetaError",
        "ClientTermsError"                  => "ClientTermsError",
        "CollectionSizeError"               => "CollectionSizeError",
        "ConstantOperand"                   => "ConstantOperand",
        "FunctionArgumentOperand"           => "FunctionArgumentOperand",
        "DatabaseError"                     => "DatabaseError",
        "DateRange"                         => "DateRange",
        "DistinctError"                     => "DistinctError",
        "EntityCountLimitExceeded"          => "EntityCountLimitExceeded",
        "EntityNotFound"                    => "EntityNotFound",
        "FeedAttributeOperand"              => "FeedAttributeOperand",
        "FunctionError"                     => "FunctionError",
        "FunctionOperand"                   => "FunctionOperand",
        "IdError"                           => "IdError",
        "InternalApiError"                  => "InternalApiError",
        "NotEmptyError"                     => "NotEmptyError",
        "NotWhitelistedError"               => "NotWhitelistedError",
        "NullError"                         => "NullError",
        "Page"                              => "Page",
        "OperationAccessDenied"             => "OperationAccessDenied",
        "OrderBy"                           => "OrderBy",
        "Paging"                            => "Paging",
        "Predicate"                         => "Predicate",
        "QuotaCheckError"                   => "QuotaCheckError",
        "RangeError"                        => "RangeError",
        "RateExceededError"                 => "RateExceededError",
        "ReadOnlyError"                     => "ReadOnlyError",
        "RequestContextOperand"             => "RequestContextOperand",
        "RequestError"                      => "RequestError",
        "RequiredError"                     => "RequiredError",
        "Selector"                          => "Selector",
        "SelectorError"                     => "SelectorError",
        "SizeLimitError"                    => "SizeLimitError",
        "SoapResponseHeader"                => "SoapResponseHeader",
        "StringLengthError"                 => "StringLengthError",
        "AdGroupFeed.Status"                => "AdGroupFeedStatus",
        "AdGroupFeedError.Reason"           => "AdGroupFeedErrorReason",
        "AuthenticationError.Reason"        => "AuthenticationErrorReason",
        "AuthorizationError.Reason"         => "AuthorizationErrorReason",
        "BetaError.Reason"                  => "BetaErrorReason",
        "ClientTermsError.Reason"           => "ClientTermsErrorReason",
        "CollectionSizeError.Reason"        => "CollectionSizeErrorReason",
        "ConstantOperand.ConstantType"      => "ConstantOperandConstantType",
        "DatabaseError.Reason"              => "DatabaseErrorReason",
        "DistinctError.Reason"              => "DistinctErrorReason",
        "EntityCountLimitExceeded.Reason"   => "EntityCountLimitExceededReason",
        "EntityNotFound.Reason"             => "EntityNotFoundReason",
        "Function.Operator"                 => "FunctionOperator",
        "FunctionError.Reason"              => "FunctionErrorReason",
        "IdError.Reason"                    => "IdErrorReason",
        "InternalApiError.Reason"           => "InternalApiErrorReason",
        "NotEmptyError.Reason"              => "NotEmptyErrorReason",
        "NotWhitelistedError.Reason"        => "NotWhitelistedErrorReason",
        "NullError.Reason"                  => "NullErrorReason",
        "OperationAccessDenied.Reason"      => "OperationAccessDeniedReason",
        "Operator"                          => "Operator",
        "Predicate.Operator"                => "PredicateOperator",
        "QuotaCheckError.Reason"            => "QuotaCheckErrorReason",
        "RangeError.Reason"                 => "RangeErrorReason",
        "RateExceededError.Reason"          => "RateExceededErrorReason",
        "ReadOnlyError.Reason"              => "ReadOnlyErrorReason",
        "RequestContextOperand.ContextType" => "RequestContextOperandContextType",
        "RequestError.Reason"               => "RequestErrorReason",
        "RequiredError.Reason"              => "RequiredErrorReason",
        "SelectorError.Reason"              => "SelectorErrorReason",
        "SizeLimitError.Reason"             => "SizeLimitErrorReason",
        "SortOrder"                         => "SortOrder",
        "StringLengthError.Reason"          => "StringLengthErrorReason",
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/AdGroupFeedService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = AdGroupFeedService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'AdGroupFeedService',
            'https://adwords.google.com/api/adwords/cm/v201306'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns a list of AdGroupFeeds that meet the selector criteria.
     *
     * @param selector Determines which AdGroupFeeds to return. If empty all
     *                 adgroup feeds are returned.
     *
     * @return The list of AdgroupFeeds.
     * @throws ApiException Indicates a problem with the request.
     */
    public function get($selector)
    {
        $arg = new AdGroupFeedServiceGet($selector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }


    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Adds, updates or removes AdGroupFeeds.
     *
     * @param operations The operations to apply.
     *
     * @return The resulting Feeds.
     * @throws ApiException Indicates a problem with the request.
     */
    public function mutate($operations)
    {
        $arg = new AdGroupFeedServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }

}