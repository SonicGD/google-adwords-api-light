<?php

require_once('CampaignFeedService.require.php');


/**
 * CampaignFeedService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class CampaignFeedService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                       => "CampaignFeedServiceGetResponse",
        "get"                               => "CampaignFeedServiceGet",
        "mutate"                            => "CampaignFeedServiceMutate",
        "mutateResponse"                    => "CampaignFeedServiceMutateResponse",
        "mutateCallToAction"                => "CampaignFeedServiceMutateCallToAction",
        "search"                            => "CampaignFeedServiceSearch",
        "Function"                          => "FeedFunction",
        "DateTime"                          => "AdWordsDateTime",
        "SoapHeader"                        => "SoapRequestHeader",
        "ApiError"                          => "ApiError",
        "ApiException"                      => "ApiException",
        "ApplicationException"              => "ApplicationException",
        "AuthenticationError"               => "AuthenticationError",
        "AuthorizationError"                => "AuthorizationError",
        "CampaignFeed"                      => "CampaignFeed",
        "CampaignFeedError"                 => "CampaignFeedError",
        "CampaignFeedOperation"             => "CampaignFeedOperation",
        "Operation"                         => "Operation",
        "CampaignFeedPage"                  => "CampaignFeedPage",
        "NullStatsPage"                     => "NullStatsPage",
        "CampaignFeedReturnValue"           => "CampaignFeedReturnValue",
        "ListReturnValue"                   => "ListReturnValue",
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
        "AuthenticationError.Reason"        => "AuthenticationErrorReason",
        "AuthorizationError.Reason"         => "AuthorizationErrorReason",
        "CampaignFeed.Status"               => "CampaignFeedStatus",
        "CampaignFeedError.Reason"          => "CampaignFeedErrorReason",
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
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/CampaignFeedService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = CampaignFeedService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'CampaignFeedService',
            'https://adwords.google.com/api/adwords/cm/v201306'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns a list of CampaignFeeds that meet the selector criteria.
     *
     * @param selector Determines which CampaignFeeds to return. If empty all
     *                 Campaign feeds are returned.
     *
     * @return The list of CampaignFeeds.
     * @throws ApiException Indicates a problem with the request.
     */
    public function get($selector)
    {
        $arg = new CampaignFeedServiceGet($selector);
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
     * Adds, sets or removes CampaignFeeds.
     *
     * @param operations The operations to apply.
     *
     * @return The resulting Feeds.
     * @throws ApiException Indicates a problem with the request.
     */
    public function mutate($operations)
    {
        $arg = new CampaignFeedServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }

}