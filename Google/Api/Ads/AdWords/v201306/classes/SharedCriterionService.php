<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * SharedCriterionService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class SharedCriterionService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                        => '\Google\Api\Ads\AdWords\v201306\classes\SharedCriterionServiceGetResponse',
        "get"                                => '\Google\Api\Ads\AdWords\v201306\classes\SharedCriterionServiceGet',
        "mutate"                             => '\Google\Api\Ads\AdWords\v201306\classes\SharedCriterionServiceMutate',
        "mutateResponse"                     => '\Google\Api\Ads\AdWords\v201306\classes\SharedCriterionServiceMutateResponse',
        "DateTime"                           => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
        "SoapHeader"                         => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
        "AuthenticationError"                => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
        "ApiError"                           => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
        "AuthorizationError"                 => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
        "BetaError"                          => '\Google\Api\Ads\AdWords\v201306\classes\BetaError',
        "ClientTermsError"                   => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
        "CriterionError"                     => '\Google\Api\Ads\AdWords\v201306\classes\CriterionError',
        "DateRange"                          => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
        "DistinctError"                      => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
        "EntityCountLimitExceeded"           => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceeded',
        "EntityNotFound"                     => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
        "IdError"                            => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
        "InternalApiError"                   => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
        "Keyword"                            => '\Google\Api\Ads\AdWords\v201306\classes\Keyword',
        "Criterion"                          => '\Google\Api\Ads\AdWords\v201306\classes\Criterion',
        "MobileAppCategory"                  => '\Google\Api\Ads\AdWords\v201306\classes\MobileAppCategory',
        "MobileApplication"                  => '\Google\Api\Ads\AdWords\v201306\classes\MobileApplication',
        "NotEmptyError"                      => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
        "NotWhitelistedError"                => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
        "NullError"                          => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
        "OperatorError"                      => '\Google\Api\Ads\AdWords\v201306\classes\OperatorError',
        "OrderBy"                            => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
        "Paging"                             => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
        "Placement"                          => '\Google\Api\Ads\AdWords\v201306\classes\Placement',
        "Predicate"                          => '\Google\Api\Ads\AdWords\v201306\classes\Predicate',
        "ProductConditionOperand"            => '\Google\Api\Ads\AdWords\v201306\classes\ProductConditionOperand',
        "QuotaCheckError"                    => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
        "RangeError"                         => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
        "RateExceededError"                  => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
        "ReadOnlyError"                      => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
        "RequestError"                       => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
        "RequiredError"                      => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
        "SharedCriterionError"               => '\Google\Api\Ads\AdWords\v201306\classes\SharedCriterionError',
        "SizeLimitError"                     => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
        "SoapResponseHeader"                 => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
        "StringLengthError"                  => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
        "CriterionUserInterest"              => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserInterest',
        "CriterionUserList"                  => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserList',
        "Vertical"                           => '\Google\Api\Ads\AdWords\v201306\classes\Vertical',
        "WebpageCondition"                   => '\Google\Api\Ads\AdWords\v201306\classes\WebpageCondition',
        "WebpageParameter"                   => '\Google\Api\Ads\AdWords\v201306\classes\WebpageParameter',
        "CriterionParameter"                 => '\Google\Api\Ads\AdWords\v201306\classes\CriterionParameter',
        "DatabaseError"                      => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
        "ProductCondition"                   => '\Google\Api\Ads\AdWords\v201306\classes\ProductCondition',
        "Webpage"                            => '\Google\Api\Ads\AdWords\v201306\classes\Webpage',
        "ApiException"                       => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
        "ApplicationException"               => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
        "Product"                            => '\Google\Api\Ads\AdWords\v201306\classes\Product',
        "Selector"                           => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
        "SharedCriterion"                    => '\Google\Api\Ads\AdWords\v201306\classes\SharedCriterion',
        "SharedCriterionOperation"           => '\Google\Api\Ads\AdWords\v201306\classes\SharedCriterionOperation',
        "Operation"                          => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
        "SharedCriterionPage"                => '\Google\Api\Ads\AdWords\v201306\classes\SharedCriterionPage',
        "Page"                               => '\Google\Api\Ads\AdWords\v201306\classes\Page',
        "SharedCriterionReturnValue"         => '\Google\Api\Ads\AdWords\v201306\classes\SharedCriterionReturnValue',
        "ListReturnValue"                    => '\Google\Api\Ads\AdWords\v201306\classes\ListReturnValue',
        "AuthenticationError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
        "AuthorizationError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
        "BetaError.Reason"                   => '\Google\Api\Ads\AdWords\v201306\classes\BetaErrorReason',
        "ClientTermsError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
        "Criterion.Type"                     => '\Google\Api\Ads\AdWords\v201306\classes\CriterionType',
        "CriterionError.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\CriterionErrorReason',
        "DatabaseError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
        "DistinctError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
        "EntityCountLimitExceeded.Reason"    => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceededReason',
        "EntityNotFound.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
        "IdError.Reason"                     => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
        "InternalApiError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
        "KeywordMatchType"                   => '\Google\Api\Ads\AdWords\v201306\classes\KeywordMatchType',
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
        "RequestError.Reason"                => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
        "RequiredError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
        "SharedCriterionError.Reason"        => '\Google\Api\Ads\AdWords\v201306\classes\SharedCriterionErrorReason',
        "SizeLimitError.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
        "SortOrder"                          => '\Google\Api\Ads\AdWords\v201306\classes\SortOrder',
        "StringLengthError.Reason"           => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
        "CriterionUserList.MembershipStatus" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserListMembershipStatus',
        "WebpageConditionOperand"            => '\Google\Api\Ads\AdWords\v201306\classes\WebpageConditionOperand',
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/SharedCriterionService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = SharedCriterionService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'SharedCriterionService',
            'https://adwords.google.com/api/adwords/cm/v201306'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * @param selector filters the criteria returned
     *
     * @return
     * @throws ApiException
     */
    public function get($selector)
    {
        $arg = new SharedCriterionServiceGet($selector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }


    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
     *
     *
     *
     * Adds, removes criteria in a shared set.
     *
     * @param operations
     *
     * @return
     * @throws ApiException
     */
    public function mutate($operations)
    {
        $arg = new SharedCriterionServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }

}