<?php

require_once('ProductServiceService.require.php');


/**
 * ProductServiceService
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class ProductServiceService extends AdWordsSoapClient
{

  const SERVICE_NAME = "ProductServiceService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201605";
  const ENDPOINT = "https://adwords.google.com/api/adwords/express/v201605/ProductServiceService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/express/v201605/ProductServiceService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = [
      "ApiError"                           => "ApiError",
      "ApiException"                       => "ApiException",
      "ApplicationException"               => "ApplicationException",
      "AuthenticationError"                => "AuthenticationError",
      "AuthorizationError"                 => "AuthorizationError",
      "ClientTermsError"                   => "ClientTermsError",
      "Criterion"                          => "Criterion",
      "DatabaseError"                      => "DatabaseError",
      "DateError"                          => "DateError",
      "DateRange"                          => "DateRange",
      "DistinctError"                      => "DistinctError",
      "IdError"                            => "IdError",
      "InternalApiError"                   => "InternalApiError",
      "Keyword"                            => "Keyword",
      "MobileAppCategory"                  => "MobileAppCategory",
      "MobileApplication"                  => "MobileApplication",
      "NotEmptyError"                      => "NotEmptyError",
      "NullError"                          => "NullError",
      "OperationAccessDenied"              => "OperationAccessDenied",
      "OperatorError"                      => "OperatorError",
      "OrderBy"                            => "OrderBy",
      "Page"                               => "Page",
      "Paging"                             => "Paging",
      "Placement"                          => "Placement",
      "Predicate"                          => "Predicate",
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
      "StringFormatError"                  => "StringFormatError",
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
      "NotEmptyError.Reason"               => "NotEmptyErrorReason",
      "NullError.Reason"                   => "NullErrorReason",
      "OperationAccessDenied.Reason"       => "OperationAccessDeniedReason",
      "OperatorError.Reason"               => "OperatorErrorReason",
      "Predicate.Operator"                 => "PredicateOperator",
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
      "StringFormatError.Reason"           => "StringFormatErrorReason",
      "StringLengthError.Reason"           => "StringLengthErrorReason",
      "CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
      "ProductService"                     => "ProductService",
      "ProductServicePage"                 => "ProductServicePage",
      "NoStatsPage"                        => "NoStatsPage",
      "get"                                => "ProductServiceServiceGet",
      "getResponse"                        => "ProductServiceServiceGetResponse",
  ];


  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl    WSDL location for this service
   * @param array  $options Options for the SoapClient
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
   * Retrieves the {@link ProductService}s that meet the criteria set in the given selector. Only a
   * limited number of {@link ProductService}s are returned.
   *
   * @param selector the selector specifying the product services to return
   * @return list of product services identified by the selector
   */
  public function get($selector)
  {
    $args = new ProductServiceServiceGet($selector);
    $result = $this->__soapCall("get", [$args]);
    return $result->rval;
  }
}