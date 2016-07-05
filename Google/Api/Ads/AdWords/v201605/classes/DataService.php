<?php

require_once('DataService.require.php');


/**
 * DataService
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class DataService extends AdWordsSoapClient
{

  const SERVICE_NAME = "DataService";
  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
  const ENDPOINT = "https://adwords.google.com/api/adwords/cm/v201605/DataService";

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201605/DataService";
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = [
      "AdGroupBidLandscape"                        => "AdGroupBidLandscape",
      "AdxError"                                   => "AdxError",
      "AuthenticationError"                        => "AuthenticationError",
      "AuthorizationError"                         => "AuthorizationError",
      "ClientTermsError"                           => "ClientTermsError",
      "DateError"                                  => "DateError",
      "DateRange"                                  => "DateRange",
      "DistinctError"                              => "DistinctError",
      "DoubleValue"                                => "DoubleValue",
      "IdError"                                    => "IdError",
      "InternalApiError"                           => "InternalApiError",
      "LevelOfDetail"                              => "LevelOfDetail",
      "LongValue"                                  => "LongValue",
      "Money"                                      => "Money",
      "NotEmptyError"                              => "NotEmptyError",
      "NullError"                                  => "NullError",
      "NumberValue"                                => "NumberValue",
      "OperationAccessDenied"                      => "OperationAccessDenied",
      "OperatorError"                              => "OperatorError",
      "OrderBy"                                    => "OrderBy",
      "Paging"                                     => "Paging",
      "Predicate"                                  => "Predicate",
      "QueryError"                                 => "QueryError",
      "QuotaCheckError"                            => "QuotaCheckError",
      "RangeError"                                 => "RangeError",
      "RateExceededError"                          => "RateExceededError",
      "ReadOnlyError"                              => "ReadOnlyError",
      "RejectedError"                              => "RejectedError",
      "RequestError"                               => "RequestError",
      "RequiredError"                              => "RequiredError",
      "SelectorError"                              => "SelectorError",
      "SizeLimitError"                             => "SizeLimitError",
      "SoapHeader"                                 => "SoapRequestHeader",
      "SoapResponseHeader"                         => "SoapResponseHeader",
      "StringFormatError"                          => "StringFormatError",
      "StringLengthError"                          => "StringLengthError",
      "DataError"                                  => "DataError",
      "ComparableValue"                            => "ComparableValue",
      "CriterionBidLandscape"                      => "CriterionBidLandscape",
      "DatabaseError"                              => "DatabaseError",
      "DomainCategory"                             => "DomainCategory",
      "ApiError"                                   => "ApiError",
      "ApiException"                               => "ApiException",
      "ApplicationException"                       => "ApplicationException",
      "BidLandscape.LandscapePoint"                => "BidLandscapeLandscapePoint",
      "Selector"                                   => "Selector",
      "BidLandscape"                               => "BidLandscape",
      "DimensionProperties"                        => "DimensionProperties",
      "DataEntry"                                  => "DataEntry",
      "AdGroupBidLandscapePage"                    => "AdGroupBidLandscapePage",
      "CriterionBidLandscapePage"                  => "CriterionBidLandscapePage",
      "DomainCategoryPage"                         => "DomainCategoryPage",
      "NoStatsPage"                                => "NoStatsPage",
      "Page"                                       => "Page",
      "AdGroupBidLandscape.Type"                   => "AdGroupBidLandscapeType",
      "AdxError.Reason"                            => "AdxErrorReason",
      "AuthenticationError.Reason"                 => "AuthenticationErrorReason",
      "AuthorizationError.Reason"                  => "AuthorizationErrorReason",
      "ClientTermsError.Reason"                    => "ClientTermsErrorReason",
      "DatabaseError.Reason"                       => "DatabaseErrorReason",
      "DateError.Reason"                           => "DateErrorReason",
      "DistinctError.Reason"                       => "DistinctErrorReason",
      "IdError.Reason"                             => "IdErrorReason",
      "InternalApiError.Reason"                    => "InternalApiErrorReason",
      "NotEmptyError.Reason"                       => "NotEmptyErrorReason",
      "NullError.Reason"                           => "NullErrorReason",
      "OperationAccessDenied.Reason"               => "OperationAccessDeniedReason",
      "OperatorError.Reason"                       => "OperatorErrorReason",
      "Predicate.Operator"                         => "PredicateOperator",
      "QueryError.Reason"                          => "QueryErrorReason",
      "QuotaCheckError.Reason"                     => "QuotaCheckErrorReason",
      "RangeError.Reason"                          => "RangeErrorReason",
      "RateExceededError.Reason"                   => "RateExceededErrorReason",
      "ReadOnlyError.Reason"                       => "ReadOnlyErrorReason",
      "RejectedError.Reason"                       => "RejectedErrorReason",
      "RequestError.Reason"                        => "RequestErrorReason",
      "RequiredError.Reason"                       => "RequiredErrorReason",
      "SelectorError.Reason"                       => "SelectorErrorReason",
      "SizeLimitError.Reason"                      => "SizeLimitErrorReason",
      "SortOrder"                                  => "SortOrder",
      "StringFormatError.Reason"                   => "StringFormatErrorReason",
      "StringLengthError.Reason"                   => "StringLengthErrorReason",
      "DataError.Reason"                           => "DataErrorReason",
      "getAdGroupBidLandscape"                     => "GetAdGroupBidLandscape",
      "getAdGroupBidLandscapeResponse"             => "GetAdGroupBidLandscapeResponse",
      "getCampaignCriterionBidLandscape"           => "GetCampaignCriterionBidLandscape",
      "getCampaignCriterionBidLandscapeResponse"   => "GetCampaignCriterionBidLandscapeResponse",
      "getCriterionBidLandscape"                   => "GetCriterionBidLandscape",
      "getCriterionBidLandscapeResponse"           => "GetCriterionBidLandscapeResponse",
      "getDomainCategory"                          => "GetDomainCategory",
      "getDomainCategoryResponse"                  => "GetDomainCategoryResponse",
      "queryAdGroupBidLandscape"                   => "QueryAdGroupBidLandscape",
      "queryAdGroupBidLandscapeResponse"           => "QueryAdGroupBidLandscapeResponse",
      "queryCampaignCriterionBidLandscape"         => "QueryCampaignCriterionBidLandscape",
      "queryCampaignCriterionBidLandscapeResponse" => "QueryCampaignCriterionBidLandscapeResponse",
      "queryCriterionBidLandscape"                 => "QueryCriterionBidLandscape",
      "queryCriterionBidLandscapeResponse"         => "QueryCriterionBidLandscapeResponse",
      "queryDomainCategory"                        => "QueryDomainCategory",
      "queryDomainCategoryResponse"                => "QueryDomainCategoryResponse",
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
   * Returns a list of {@link AdGroupBidLandscape}s for the ad groups specified in the selector.
   * In the result, the returned {@link LandscapePoint}s are grouped into
   * {@link AdGroupBidLandscape}s by their ad groups, and numberResults of paging limits the total
   * number of {@link LandscapePoint}s instead of number of {@link AdGroupBidLandscape}s.
   *
   * @param serviceSelector Selects the entities to return bid landscapes for.
   * @return A list of bid landscapes.
   * @throws ApiException when there is at least one error with the request.
   */
  public function getAdGroupBidLandscape($serviceSelector)
  {
    $args = new GetAdGroupBidLandscape($serviceSelector);
    $result = $this->__soapCall("getAdGroupBidLandscape", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns a list of {@link CriterionBidLandscape}s for the campaign criteria specified in the
   * selector. In the result, the returned {@link LandscapePoint}s are grouped into
   * {@link CriterionBidLandscape}s by their campaign id and criterion id, and numberResults
   * of paging limits the total number of {@link LandscapePoint}s instead of number of
   * {@link CriterionBidLandscape}s.
   *
   * @param serviceSelector Selects the entities to return bid landscapes for.
   * @return A list of bid landscapes.
   * @throws ApiException when there is at least one error with the request.
   */
  public function getCampaignCriterionBidLandscape($serviceSelector)
  {
    $args = new GetCampaignCriterionBidLandscape($serviceSelector);
    $result = $this->__soapCall("getCampaignCriterionBidLandscape", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns a list of {@link CriterionBidLandscape}s for the criteria specified in the selector.
   * In the result, the returned {@link LandscapePoint}s are grouped into
   * {@link CriterionBidLandscape}s by their criteria, and numberResults of paging limits the total
   * number of {@link LandscapePoint}s instead of number of {@link CriterionBidLandscape}s.
   *
   * @param serviceSelector Selects the entities to return bid landscapes for.
   * @return A list of bid landscapes.
   * @throws ApiException when there is at least one error with the request.
   */
  public function getCriterionBidLandscape($serviceSelector)
  {
    $args = new GetCriterionBidLandscape($serviceSelector);
    $result = $this->__soapCall("getCriterionBidLandscape", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns a list of domain categories that can be used to create {@link WebPage} criterion.
   *
   * @param serviceSelector Selects the entities to return domain categories for.
   * @return A list of domain categories.
   * @throws ApiException when there is at least one error with the request.
   */
  public function getDomainCategory($serviceSelector)
  {
    $args = new GetDomainCategory($serviceSelector);
    $result = $this->__soapCall("getDomainCategory", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns a list of {@link AdGroupBidLandscape}s for the ad groups that match the query. In the
   * result, the returned {@link LandscapePoint}s are grouped into {@link AdGroupBidLandscape}s
   * by their ad groups, and numberResults of paging limits the total number of
   * {@link LandscapePoint}s instead of number of {@link AdGroupBidLandscape}s.
   *
   * @param query The SQL-like AWQL query string.
   * @return A list of bid landscapes.
   * @throws ApiException if problems occur while parsing the query or fetching bid landscapes.
   */
  public function queryAdGroupBidLandscape($query)
  {
    $args = new QueryAdGroupBidLandscape($query);
    $result = $this->__soapCall("queryAdGroupBidLandscape", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns a list of {@link CriterionBidLandscape}s for the campaign criteria that match the
   * query. In the result, the returned {@link LandscapePoint}s are grouped into
   * {@link CriterionBidLandscape}s by their campaign id and criterion id, and numberResults
   * of paging limits the total number of {@link LandscapePoint}s instead of number of
   * {@link CriterionBidLandscape}s.
   *
   * @param query The SQL-like AWQL query string.
   * @return A list of bid landscapes.
   * @throws ApiException if problems occur while parsing the query or fetching bid landscapes.
   */
  public function queryCampaignCriterionBidLandscape($query)
  {
    $args = new QueryCampaignCriterionBidLandscape($query);
    $result = $this->__soapCall("queryCampaignCriterionBidLandscape", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns a list of {@link CriterionBidLandscape}s for the criteria that match the query. In the
   * result, the returned {@link LandscapePoint}s are grouped into {@link CriterionBidLandscape}s
   * by their criteria, and numberResults of paging limits the total number of
   * {@link LandscapePoint}s instead of number of {@link CriterionBidLandscape}s.
   *
   * @param query The SQL-like AWQL query string.
   * @return A list of bid landscapes.
   * @throws ApiException if problems occur while parsing the query or fetching bid landscapes.
   */
  public function queryCriterionBidLandscape($query)
  {
    $args = new QueryCriterionBidLandscape($query);
    $result = $this->__soapCall("queryCriterionBidLandscape", [$args]);
    return $result->rval;
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns a list of domain categories that can be used to create {@link WebPage} criterion.
   *
   * @param query The SQL-like AWQL query string.
   * @return A list of domain categories.
   * @throws ApiException if problems occur while parsing the query
   *              or fetching domain categories.
   */
  public function queryDomainCategory($query)
  {
    $args = new QueryDomainCategory($query);
    $result = $this->__soapCall("queryDomainCategory", [$args]);
    return $result->rval;
  }
}