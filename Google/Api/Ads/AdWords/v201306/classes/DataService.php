<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * DataService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class DataService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
"getResponse" => '\Google\Api\Ads\AdWords\v201306\classes\DataServiceGetResponse',
"get" => '\Google\Api\Ads\AdWords\v201306\classes\DataServiceGet',
"mutate" => '\Google\Api\Ads\AdWords\v201306\classes\DataServiceMutate',
"mutateResponse" => '\Google\Api\Ads\AdWords\v201306\classes\DataServiceMutateResponse',
"DateTime" => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
"SoapHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
"AdGroupBidLandscape" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupBidLandscape',
"BidLandscape" => '\Google\Api\Ads\AdWords\v201306\classes\BidLandscape',
"AdxError" => '\Google\Api\Ads\AdWords\v201306\classes\AdxError',
"ApiError" => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
"AuthenticationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
"AuthorizationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
"BetaError" => '\Google\Api\Ads\AdWords\v201306\classes\BetaError',
"ClientTermsError" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
"CriterionBidLandscape" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionBidLandscape',
"DateError" => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
"DateRange" => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
"DistinctError" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
"DoubleValue" => '\Google\Api\Ads\AdWords\v201306\classes\DoubleValue',
"NumberValue" => '\Google\Api\Ads\AdWords\v201306\classes\NumberValue',
"IdError" => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
"InternalApiError" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
"LongValue" => '\Google\Api\Ads\AdWords\v201306\classes\LongValue',
"Money" => '\Google\Api\Ads\AdWords\v201306\classes\Money',
"ComparableValue" => '\Google\Api\Ads\AdWords\v201306\classes\ComparableValue',
"NotEmptyError" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
"NotWhitelistedError" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
"NullError" => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
"OrderBy" => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
"Paging" => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
"Predicate" => '\Google\Api\Ads\AdWords\v201306\classes\Predicate',
"QuotaCheckError" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
"RangeError" => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
"RateExceededError" => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
"ReadOnlyError" => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
"RejectedError" => '\Google\Api\Ads\AdWords\v201306\classes\RejectedError',
"RequestError" => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
"RequiredError" => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
"SelectorError" => '\Google\Api\Ads\AdWords\v201306\classes\SelectorError',
"SizeLimitError" => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
"SoapResponseHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
"StringLengthError" => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
"DataError" => '\Google\Api\Ads\AdWords\v201306\classes\DataError',
"DatabaseError" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
"ApiException" => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
"ApplicationException" => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
"BidLandscape.LandscapePoint" => '\Google\Api\Ads\AdWords\v201306\classes\BidLandscapeLandscapePoint',
"Selector" => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
"DataEntry" => '\Google\Api\Ads\AdWords\v201306\classes\DataEntry',
"AdGroupBidLandscapePage" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupBidLandscapePage',
"NoStatsPage" => '\Google\Api\Ads\AdWords\v201306\classes\NoStatsPage',
"CriterionBidLandscapePage" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionBidLandscapePage',
"Page" => '\Google\Api\Ads\AdWords\v201306\classes\Page',
"AdGroupBidLandscape.Type" => '\Google\Api\Ads\AdWords\v201306\classes\AdGroupBidLandscapeType',
"AdxError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AdxErrorReason',
"AuthenticationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
"AuthorizationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
"BetaError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\BetaErrorReason',
"ClientTermsError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
"DatabaseError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
"DateError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
"DistinctError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
"IdError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
"InternalApiError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
"NotEmptyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
"NotWhitelistedError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
"NullError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
"Predicate.Operator" => '\Google\Api\Ads\AdWords\v201306\classes\PredicateOperator',
"QuotaCheckError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
"RangeError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
"RateExceededError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
"ReadOnlyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
"RejectedError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RejectedErrorReason',
"RequestError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
"RequiredError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
"SelectorError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
"SizeLimitError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
"SortOrder" => '\Google\Api\Ads\AdWords\v201306\classes\SortOrder',
"StringLengthError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
"DataError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DataErrorReason',
"getAdGroupBidLandscape" => '\Google\Api\Ads\AdWords\v201306\classes\getAdGroupBidLandscape',
"getAdGroupBidLandscapeResponse" => '\Google\Api\Ads\AdWords\v201306\classes\getAdGroupBidLandscapeResponse',
"getCriterionBidLandscape" => '\Google\Api\Ads\AdWords\v201306\classes\getCriterionBidLandscape',
"getCriterionBidLandscapeResponse" => '\Google\Api\Ads\AdWords\v201306\classes\getCriterionBidLandscapeResponse',);

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/DataService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = DataService::$classmap;
    parent::__construct($wsdl, $options, $user, 'DataService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of bid landscapes for the ad groups specified in the selector.
   * 
   * @param serviceSelector Selects the entities to return bid landscapes for.
   * @return A list of bid landscapes.
   * @throws ApiException when there is at least one error with the request.
   */
  public function getAdGroupBidLandscape($serviceSelector) {
    $arg = new getAdGroupBidLandscape($serviceSelector);
    $result = $this->__soapCall("getAdGroupBidLandscape", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of bid landscapes for the criteria specified in the selector.
   * 
   * @param serviceSelector Selects the entities to return bid landscapes for.
   * @return A list of bid landscapes.
   * @throws ApiException when there is at least one error with the request.
   */
  public function getCriterionBidLandscape($serviceSelector) {
    $arg = new getCriterionBidLandscape($serviceSelector);
    $result = $this->__soapCall("getCriterionBidLandscape", array($arg));
    return $result->rval;
  }

}