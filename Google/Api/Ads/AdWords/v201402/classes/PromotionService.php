<?php

require_once('PromotionService.require.php');


/**
 * PromotionService
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class PromotionService extends AdWordsSoapClient
{

    const SERVICE_NAME = "PromotionService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201402";
    const ENDPOINT = "https://adwords.google.com/api/adwords/express/v201402/PromotionService";

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/express/v201402/PromotionService";
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "Address"                            => "Address",
        "ApiError"                           => "ApiError",
        "ApiException"                       => "ApiException",
        "ApplicationException"               => "ApplicationException",
        "AuthenticationError"                => "AuthenticationError",
        "AuthorizationError"                 => "AuthorizationError",
        "ClientTermsError"                   => "ClientTermsError",
        "ComparableValue"                    => "ComparableValue",
        "Criterion"                          => "Criterion",
        "DatabaseError"                      => "DatabaseError",
        "Date"                               => "Date",
        "DateError"                          => "DateError",
        "DateRange"                          => "DateRange",
        "DistinctError"                      => "DistinctError",
        "DoubleValue"                        => "DoubleValue",
        "GeoPoint"                           => "GeoPoint",
        "IdError"                            => "IdError",
        "InternalApiError"                   => "InternalApiError",
        "Keyword"                            => "Keyword",
        "Language"                           => "Language",
        "Location"                           => "Location",
        "LongValue"                          => "LongValue",
        "MobileAppCategory"                  => "MobileAppCategory",
        "MobileApplication"                  => "MobileApplication",
        "Money"                              => "Money",
        "NotEmptyError"                      => "NotEmptyError",
        "NullError"                          => "NullError",
        "NumberValue"                        => "NumberValue",
        "Operation"                          => "Operation",
        "OperationAccessDenied"              => "OperationAccessDenied",
        "OperatorError"                      => "OperatorError",
        "OrderBy"                            => "OrderBy",
        "Page"                               => "Page",
        "Paging"                             => "Paging",
        "Placement"                          => "Placement",
        "Predicate"                          => "Predicate",
        "Product"                            => "Product",
        "ProductCondition"                   => "ProductCondition",
        "ProductConditionOperand"            => "ProductConditionOperand",
        "Proximity"                          => "Proximity",
        "QuotaCheckError"                    => "QuotaCheckError",
        "RangeError"                         => "RangeError",
        "RateExceededError"                  => "RateExceededError",
        "ReadOnlyError"                      => "ReadOnlyError",
        "RejectedError"                      => "RejectedError",
        "RequestError"                       => "RequestError",
        "RequiredError"                      => "RequiredError",
        "Selector"                           => "Selector",
        "SelectorError"                      => "SelectorError",
        "SizeLimitError"                     => "SizeLimitError",
        "SoapHeader"                         => "SoapRequestHeader",
        "SoapResponseHeader"                 => "SoapResponseHeader",
        "StringLengthError"                  => "StringLengthError",
        "CriterionUserInterest"              => "CriterionUserInterest",
        "CriterionUserList"                  => "CriterionUserList",
        "Vertical"                           => "Vertical",
        "AuthenticationError.Reason"         => "AuthenticationErrorReason",
        "AuthorizationError.Reason"          => "AuthorizationErrorReason",
        "ClientTermsError.Reason"            => "ClientTermsErrorReason",
        "Criterion.Type"                     => "CriterionType",
        "DatabaseError.Reason"               => "DatabaseErrorReason",
        "DateError.Reason"                   => "DateErrorReason",
        "DistinctError.Reason"               => "DistinctErrorReason",
        "IdError.Reason"                     => "IdErrorReason",
        "InternalApiError.Reason"            => "InternalApiErrorReason",
        "KeywordMatchType"                   => "KeywordMatchType",
        "LocationTargetingStatus"            => "LocationTargetingStatus",
        "NotEmptyError.Reason"               => "NotEmptyErrorReason",
        "NullError.Reason"                   => "NullErrorReason",
        "OperationAccessDenied.Reason"       => "OperationAccessDeniedReason",
        "Operator"                           => "Operator",
        "OperatorError.Reason"               => "OperatorErrorReason",
        "Predicate.Operator"                 => "PredicateOperator",
        "Proximity.DistanceUnits"            => "ProximityDistanceUnits",
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
        "CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
        "Creative"                           => "Creative",
        "ExpressSoapHeader"                  => "ExpressSoapHeader",
        "KeywordSet"                         => "KeywordSet",
        "NegativeCriterion"                  => "NegativeCriterion",
        "NegativeKeyword"                    => "NegativeKeyword",
        "NoStatsPage"                        => "NoStatsPage",
        "ProductService"                     => "ProductService",
        "Promotion"                          => "Promotion",
        "PromotionError"                     => "PromotionError",
        "PromotionOperation"                 => "PromotionOperation",
        "PromotionPage"                      => "PromotionPage",
        "Promotion.Status"                   => "PromotionStatus",
        "PromotionError.Reason"              => "PromotionErrorReason",
        "get"                                => "PromotionServiceGet",
        "getResponse"                        => "PromotionServiceGetResponse",
        "mutate"                             => "PromotionServiceMutate",
        "mutateResponse"                     => "PromotionServiceMutateResponse",
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
     * Retrieves the promotions that meet the criteria set in the given selector.
     *
     * @param selector the selector specifying the AdWords Express promotion to return
     *
     * @return list of AdWords Express promotion identified by the selector
     */
    public function get($selector)
    {
        $args = new PromotionServiceGet($selector);
        $result = $this->__soapCall("get", array($args));
        return $result->rval;
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
     *
     *
     *
     * Performs the given {@link PromotionOperation}.
     *
     * @param operations list of unique operations; the same AdWords Express promotion cannot be
     *                   specified in more than one operation
     *
     * @return the updated AdWords Express promotion
     */
    public function mutate($operations)
    {
        $args = new PromotionServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));
        return $result->rval;
    }
}