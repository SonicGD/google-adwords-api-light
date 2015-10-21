<?php

require_once('AdCustomizerFeedService.require.php');


/**
 * AdCustomizerFeedService
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class AdCustomizerFeedService extends AdWordsSoapClient
{

    const SERVICE_NAME = "AdCustomizerFeedService";
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201509/AdCustomizerFeedService";

    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201509/AdCustomizerFeedService";
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
        "AdCustomizerFeedAttribute" => "AdCustomizerFeedAttribute",
        "AdCustomizerFeedError" => "AdCustomizerFeedError",
        "AuthenticationError" => "AuthenticationError",
        "AuthorizationError" => "AuthorizationError",
        "ClientTermsError" => "ClientTermsError",
        "Date" => "Date",
        "DateRange" => "DateRange",
        "DistinctError" => "DistinctError",
        "EntityCountLimitExceeded" => "EntityCountLimitExceeded",
        "EntityNotFound" => "EntityNotFound",
        "FeedError" => "FeedError",
        "IdError" => "IdError",
        "InternalApiError" => "InternalApiError",
        "NewEntityCreationError" => "NewEntityCreationError",
        "NotEmptyError" => "NotEmptyError",
        "NullError" => "NullError",
        "OperationAccessDenied" => "OperationAccessDenied",
        "OrderBy" => "OrderBy",
        "Paging" => "Paging",
        "Predicate" => "Predicate",
        "QuotaCheckError" => "QuotaCheckError",
        "RangeError" => "RangeError",
        "RateExceededError" => "RateExceededError",
        "ReadOnlyError" => "ReadOnlyError",
        "RejectedError" => "RejectedError",
        "RequestError" => "RequestError",
        "RequiredError" => "RequiredError",
        "SelectorError" => "SelectorError",
        "SizeLimitError" => "SizeLimitError",
        "SoapHeader" => "SoapRequestHeader",
        "SoapResponseHeader" => "SoapResponseHeader",
        "StringLengthError" => "StringLengthError",
        "AdCustomizerFeed" => "AdCustomizerFeed",
        "AdCustomizerFeedOperation" => "AdCustomizerFeedOperation",
        "AdCustomizerFeedPage" => "AdCustomizerFeedPage",
        "AdCustomizerFeedReturnValue" => "AdCustomizerFeedReturnValue",
        "DatabaseError" => "DatabaseError",
        "ListReturnValue" => "ListReturnValue",
        "Operation" => "Operation",
        "Page" => "Page",
        "ApiError" => "ApiError",
        "ApiException" => "ApiException",
        "ApplicationException" => "ApplicationException",
        "Selector" => "Selector",
        "AdCustomizerFeedAttribute.Type" => "AdCustomizerFeedAttributeType",
        "AdCustomizerFeedError.Reason" => "AdCustomizerFeedErrorReason",
        "AuthenticationError.Reason" => "AuthenticationErrorReason",
        "AuthorizationError.Reason" => "AuthorizationErrorReason",
        "ClientTermsError.Reason" => "ClientTermsErrorReason",
        "DatabaseError.Reason" => "DatabaseErrorReason",
        "DistinctError.Reason" => "DistinctErrorReason",
        "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
        "EntityNotFound.Reason" => "EntityNotFoundReason",
        "Feed.Status" => "FeedStatus",
        "FeedError.Reason" => "FeedErrorReason",
        "IdError.Reason" => "IdErrorReason",
        "InternalApiError.Reason" => "InternalApiErrorReason",
        "NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
        "NotEmptyError.Reason" => "NotEmptyErrorReason",
        "NullError.Reason" => "NullErrorReason",
        "OperationAccessDenied.Reason" => "OperationAccessDeniedReason",
        "Operator" => "Operator",
        "Predicate.Operator" => "PredicateOperator",
        "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
        "RangeError.Reason" => "RangeErrorReason",
        "RateExceededError.Reason" => "RateExceededErrorReason",
        "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
        "RejectedError.Reason" => "RejectedErrorReason",
        "RequestError.Reason" => "RequestErrorReason",
        "RequiredError.Reason" => "RequiredErrorReason",
        "SelectorError.Reason" => "SelectorErrorReason",
        "SizeLimitError.Reason" => "SizeLimitErrorReason",
        "SortOrder" => "SortOrder",
        "StringLengthError.Reason" => "StringLengthErrorReason",
        "get" => "AdCustomizerFeedServiceGet",
        "getResponse" => "AdCustomizerFeedServiceGetResponse",
        "mutate" => "AdCustomizerFeedServiceMutate",
        "mutateResponse" => "AdCustomizerFeedServiceMutateResponse",
    );


    /**
     * Constructor using wsdl location and options array
     * @param string $wsdl WSDL location for this service
     * @param array $options Options for the SoapClient
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
     * Returns a list of AdCustomizerFeeds that meet the selector criteria.
     *
     * @param selector Determines which AdCustomizerFeeds to return. If empty, all AdCustomizerFeeds
     * are returned.
     * @return The list of AdCustomizerFeeds.
     * @throws ApiException Indicates a problem with the request.
     */
    public function get($selector)
    {
        $args = new AdCustomizerFeedServiceGet($selector);
        $result = $this->__soapCall("get", array($args));
        return $result->rval;
    }

    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Adds, removes, or modifies AdCustomizerFeeds.
     *
     * @param operations The operations to apply.
     * @return The resulting AdCustomizerFeeds.
     * @throws ApiException Indicates a problem with the request.
     */
    public function mutate($operations)
    {
        $args = new AdCustomizerFeedServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($args));
        return $result->rval;
    }
}