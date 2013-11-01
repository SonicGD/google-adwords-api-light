<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

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
        "getResponse"                       => '\Google\Api\Ads\AdWords\v201306\classes\CampaignFeedServiceGetResponse',
        "get"                               => '\Google\Api\Ads\AdWords\v201306\classes\CampaignFeedServiceGet',
        "mutate"                            => '\Google\Api\Ads\AdWords\v201306\classes\CampaignFeedServiceMutate',
        "mutateResponse"                    => '\Google\Api\Ads\AdWords\v201306\classes\CampaignFeedServiceMutateResponse',
        "mutateCallToAction"                => '\Google\Api\Ads\AdWords\v201306\classes\CampaignFeedServiceMutateCallToAction',
        "search"                            => '\Google\Api\Ads\AdWords\v201306\classes\CampaignFeedServiceSearch',
        "Function"                          => '\Google\Api\Ads\AdWords\v201306\classes\FeedFunction',
        "DateTime"                          => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
        "SoapHeader"                        => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
        "ApiError"                          => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
        "ApiException"                      => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
        "ApplicationException"              => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
        "AuthenticationError"               => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
        "AuthorizationError"                => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
        "CampaignFeed"                      => '\Google\Api\Ads\AdWords\v201306\classes\CampaignFeed',
        "CampaignFeedError"                 => '\Google\Api\Ads\AdWords\v201306\classes\CampaignFeedError',
        "CampaignFeedOperation"             => '\Google\Api\Ads\AdWords\v201306\classes\CampaignFeedOperation',
        "Operation"                         => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
        "CampaignFeedPage"                  => '\Google\Api\Ads\AdWords\v201306\classes\CampaignFeedPage',
        "NullStatsPage"                     => '\Google\Api\Ads\AdWords\v201306\classes\NullStatsPage',
        "CampaignFeedReturnValue"           => '\Google\Api\Ads\AdWords\v201306\classes\CampaignFeedReturnValue',
        "ListReturnValue"                   => '\Google\Api\Ads\AdWords\v201306\classes\ListReturnValue',
        "ClientTermsError"                  => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
        "CollectionSizeError"               => '\Google\Api\Ads\AdWords\v201306\classes\CollectionSizeError',
        "ConstantOperand"                   => '\Google\Api\Ads\AdWords\v201306\classes\ConstantOperand',
        "FunctionArgumentOperand"           => '\Google\Api\Ads\AdWords\v201306\classes\FunctionArgumentOperand',
        "DatabaseError"                     => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
        "DateRange"                         => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
        "DistinctError"                     => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
        "EntityCountLimitExceeded"          => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceeded',
        "EntityNotFound"                    => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
        "FeedAttributeOperand"              => '\Google\Api\Ads\AdWords\v201306\classes\FeedAttributeOperand',
        "FunctionError"                     => '\Google\Api\Ads\AdWords\v201306\classes\FunctionError',
        "FunctionOperand"                   => '\Google\Api\Ads\AdWords\v201306\classes\FunctionOperand',
        "IdError"                           => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
        "InternalApiError"                  => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
        "NotEmptyError"                     => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
        "NotWhitelistedError"               => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
        "NullError"                         => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
        "Page"                              => '\Google\Api\Ads\AdWords\v201306\classes\Page',
        "OperationAccessDenied"             => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
        "OrderBy"                           => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
        "Paging"                            => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
        "Predicate"                         => '\Google\Api\Ads\AdWords\v201306\classes\Predicate',
        "QuotaCheckError"                   => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
        "RangeError"                        => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
        "RateExceededError"                 => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
        "ReadOnlyError"                     => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
        "RequestContextOperand"             => '\Google\Api\Ads\AdWords\v201306\classes\RequestContextOperand',
        "RequestError"                      => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
        "RequiredError"                     => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
        "Selector"                          => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
        "SelectorError"                     => '\Google\Api\Ads\AdWords\v201306\classes\SelectorError',
        "SizeLimitError"                    => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
        "SoapResponseHeader"                => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
        "StringLengthError"                 => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
        "AuthenticationError.Reason"        => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
        "AuthorizationError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
        "CampaignFeed.Status"               => '\Google\Api\Ads\AdWords\v201306\classes\CampaignFeedStatus',
        "CampaignFeedError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\CampaignFeedErrorReason',
        "ClientTermsError.Reason"           => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
        "CollectionSizeError.Reason"        => '\Google\Api\Ads\AdWords\v201306\classes\CollectionSizeErrorReason',
        "ConstantOperand.ConstantType"      => '\Google\Api\Ads\AdWords\v201306\classes\ConstantOperandConstantType',
        "DatabaseError.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
        "DistinctError.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
        "EntityCountLimitExceeded.Reason"   => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceededReason',
        "EntityNotFound.Reason"             => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
        "Function.Operator"                 => '\Google\Api\Ads\AdWords\v201306\classes\FunctionOperator',
        "FunctionError.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\FunctionErrorReason',
        "IdError.Reason"                    => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
        "InternalApiError.Reason"           => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
        "NotEmptyError.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
        "NotWhitelistedError.Reason"        => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
        "NullError.Reason"                  => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
        "OperationAccessDenied.Reason"      => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
        "Operator"                          => '\Google\Api\Ads\AdWords\v201306\classes\Operator',
        "Predicate.Operator"                => '\Google\Api\Ads\AdWords\v201306\classes\PredicateOperator',
        "QuotaCheckError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
        "RangeError.Reason"                 => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
        "RateExceededError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
        "ReadOnlyError.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
        "RequestContextOperand.ContextType" => '\Google\Api\Ads\AdWords\v201306\classes\RequestContextOperandContextType',
        "RequestError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
        "RequiredError.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
        "SelectorError.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
        "SizeLimitError.Reason"             => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
        "SortOrder"                         => '\Google\Api\Ads\AdWords\v201306\classes\SortOrder',
        "StringLengthError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
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