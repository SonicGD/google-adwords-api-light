<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * ConstantDataService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class ConstantDataService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
"getResponse" => '\Google\Api\Ads\AdWords\v201306\classes\ConstantDataServiceGetResponse',
"get" => '\Google\Api\Ads\AdWords\v201306\classes\ConstantDataServiceGet',
"mutate" => '\Google\Api\Ads\AdWords\v201306\classes\ConstantDataServiceMutate',
"mutateResponse" => '\Google\Api\Ads\AdWords\v201306\classes\ConstantDataServiceMutateResponse',
"DateTime" => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
"SoapHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
"AdxError" => '\Google\Api\Ads\AdWords\v201306\classes\AdxError',
"ApiError" => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
"AgeRange" => '\Google\Api\Ads\AdWords\v201306\classes\AgeRange',
"Criterion" => '\Google\Api\Ads\AdWords\v201306\classes\Criterion',
"AuthenticationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
"AuthorizationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
"BetaError" => '\Google\Api\Ads\AdWords\v201306\classes\BetaError',
"Carrier" => '\Google\Api\Ads\AdWords\v201306\classes\Carrier',
"ClientTermsError" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
"DateError" => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
"DistinctError" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
"Gender" => '\Google\Api\Ads\AdWords\v201306\classes\Gender',
"IdError" => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
"InternalApiError" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
"Keyword" => '\Google\Api\Ads\AdWords\v201306\classes\Keyword',
"Language" => '\Google\Api\Ads\AdWords\v201306\classes\Language',
"MobileAppCategory" => '\Google\Api\Ads\AdWords\v201306\classes\MobileAppCategory',
"MobileApplication" => '\Google\Api\Ads\AdWords\v201306\classes\MobileApplication',
"MobileDevice" => '\Google\Api\Ads\AdWords\v201306\classes\MobileDevice',
"NotEmptyError" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
"NotWhitelistedError" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
"NullError" => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
"OperatingSystemVersion" => '\Google\Api\Ads\AdWords\v201306\classes\OperatingSystemVersion',
"Placement" => '\Google\Api\Ads\AdWords\v201306\classes\Placement',
"ProductConditionOperand" => '\Google\Api\Ads\AdWords\v201306\classes\ProductConditionOperand',
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
"CriterionUserInterest" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserInterest',
"CriterionUserList" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserList',
"Vertical" => '\Google\Api\Ads\AdWords\v201306\classes\Vertical',
"WebpageCondition" => '\Google\Api\Ads\AdWords\v201306\classes\WebpageCondition',
"WebpageParameter" => '\Google\Api\Ads\AdWords\v201306\classes\WebpageParameter',
"CriterionParameter" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionParameter',
"DatabaseError" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
"ProductCondition" => '\Google\Api\Ads\AdWords\v201306\classes\ProductCondition',
"Webpage" => '\Google\Api\Ads\AdWords\v201306\classes\Webpage',
"ApiException" => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
"ApplicationException" => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
"Product" => '\Google\Api\Ads\AdWords\v201306\classes\Product',
"AdxError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AdxErrorReason',
"AgeRange.AgeRangeType" => '\Google\Api\Ads\AdWords\v201306\classes\AgeRangeAgeRangeType',
"AuthenticationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
"AuthorizationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
"BetaError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\BetaErrorReason',
"ClientTermsError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
"Criterion.Type" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionType',
"DatabaseError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
"DateError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
"DistinctError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
"Gender.GenderType" => '\Google\Api\Ads\AdWords\v201306\classes\GenderGenderType',
"IdError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
"InternalApiError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
"KeywordMatchType" => '\Google\Api\Ads\AdWords\v201306\classes\KeywordMatchType',
"MobileDevice.DeviceType" => '\Google\Api\Ads\AdWords\v201306\classes\MobileDeviceDeviceType',
"NotEmptyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
"NotWhitelistedError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
"NullError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
"OperatingSystemVersion.OperatorType" => '\Google\Api\Ads\AdWords\v201306\classes\OperatingSystemVersionOperatorType',
"QuotaCheckError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
"RangeError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
"RateExceededError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
"ReadOnlyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
"RejectedError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RejectedErrorReason',
"RequestError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
"RequiredError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
"SelectorError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
"SizeLimitError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
"StringLengthError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
"CriterionUserList.MembershipStatus" => '\Google\Api\Ads\AdWords\v201306\classes\CriterionUserListMembershipStatus',
"WebpageConditionOperand" => '\Google\Api\Ads\AdWords\v201306\classes\WebpageConditionOperand',
"getAgeRangeCriterion" => '\Google\Api\Ads\AdWords\v201306\classes\getAgeRangeCriterion',
"getAgeRangeCriterionResponse" => '\Google\Api\Ads\AdWords\v201306\classes\getAgeRangeCriterionResponse',
"getCarrierCriterion" => '\Google\Api\Ads\AdWords\v201306\classes\getCarrierCriterion',
"getCarrierCriterionResponse" => '\Google\Api\Ads\AdWords\v201306\classes\getCarrierCriterionResponse',
"getGenderCriterion" => '\Google\Api\Ads\AdWords\v201306\classes\getGenderCriterion',
"getGenderCriterionResponse" => '\Google\Api\Ads\AdWords\v201306\classes\getGenderCriterionResponse',
"getLanguageCriterion" => '\Google\Api\Ads\AdWords\v201306\classes\getLanguageCriterion',
"getLanguageCriterionResponse" => '\Google\Api\Ads\AdWords\v201306\classes\getLanguageCriterionResponse',
"getMobileDeviceCriterion" => '\Google\Api\Ads\AdWords\v201306\classes\getMobileDeviceCriterion',
"getMobileDeviceCriterionResponse" => '\Google\Api\Ads\AdWords\v201306\classes\getMobileDeviceCriterionResponse',
"getOperatingSystemVersionCriterion" => '\Google\Api\Ads\AdWords\v201306\classes\getOperatingSystemVersionCriterion',
"getOperatingSystemVersionCriterionResponse" => '\Google\Api\Ads\AdWords\v201306\classes\getOperatingSystemVersionCriterionResponse',
"getUserInterestCriterion" => '\Google\Api\Ads\AdWords\v201306\classes\getUserInterestCriterion',
"getUserInterestCriterionResponse" => '\Google\Api\Ads\AdWords\v201306\classes\getUserInterestCriterionResponse',
"getVerticalCriterion" => '\Google\Api\Ads\AdWords\v201306\classes\getVerticalCriterion',
"getVerticalCriterionResponse" => '\Google\Api\Ads\AdWords\v201306\classes\getVerticalCriterionResponse',);

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/ConstantDataService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = ConstantDataService::$classmap;
    parent::__construct($wsdl, $options, $user, 'ConstantDataService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * Returns a list of all age range criteria.
   * 
   * @return A list of age ranges.
   * @throws ApiException when there is at least one error with the request.
   */
  public function getAgeRangeCriterion() {
    $arg = new getAgeRangeCriterion();
    $result = $this->__soapCall("getAgeRangeCriterion", array($arg));
    return $result->rval;
  }


  /**
   * Returns a list of all carrier criteria.
   * 
   * @return A list of carriers.
   * @throws ApiException when there is at least one error with the request.
   */
  public function getCarrierCriterion() {
    $arg = new getCarrierCriterion();
    $result = $this->__soapCall("getCarrierCriterion", array($arg));
    return $result->rval;
  }


  /**
   * Returns a list of all gender criteria.
   * 
   * @return A list of genders.
   * @throws ApiException when there is at least one error with the request.
   */
  public function getGenderCriterion() {
    $arg = new getGenderCriterion();
    $result = $this->__soapCall("getGenderCriterion", array($arg));
    return $result->rval;
  }


  /**
   * Returns a list of all language criteria.
   * 
   * @return A list of languages.
   * @throws ApiException when there is at least one error with the request.
   */
  public function getLanguageCriterion() {
    $arg = new getLanguageCriterion();
    $result = $this->__soapCall("getLanguageCriterion", array($arg));
    return $result->rval;
  }


  /**
   * Returns a list of all mobile devices.
   * 
   * @return A list of mobile devices.
   * @throws ApiException when there is at least one error with the request.
   * <span class="constraint Beta">This is a beta feature.</span>
   */
  public function getMobileDeviceCriterion() {
    $arg = new getMobileDeviceCriterion();
    $result = $this->__soapCall("getMobileDeviceCriterion", array($arg));
    return $result->rval;
  }


  /**
   * Returns a list of all operating system version criteria.
   * 
   * @return A list of operating system versions.
   * @throws ApiException when there is at least one error with the request.
   * <span class="constraint Beta">This is a beta feature.</span>
   */
  public function getOperatingSystemVersionCriterion() {
    $arg = new getOperatingSystemVersionCriterion();
    $result = $this->__soapCall("getOperatingSystemVersionCriterion", array($arg));
    return $result->rval;
  }


  /**
   * Returns a list of user interests.
   * 
   * @return A list of user interests.
   * @throws ApiException when there is at least one error with the request.
   */
  public function getUserInterestCriterion() {
    $arg = new getUserInterestCriterion();
    $result = $this->__soapCall("getUserInterestCriterion", array($arg));
    return $result->rval;
  }


  /**
   * Returns a list of content verticals.
   * 
   * @return A list of verticals.
   * @throws ApiException when there is at least one error with the request.
   */
  public function getVerticalCriterion() {
    $arg = new getVerticalCriterion();
    $result = $this->__soapCall("getVerticalCriterion", array($arg));
    return $result->rval;
  }

}