<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * BiddingStrategyService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class BiddingStrategyService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
"getResponse" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategyServiceGetResponse',
"get" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategyServiceGet',
"mutate" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategyServiceMutate',
"mutateResponse" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategyServiceMutateResponse',
"DateTime" => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
"SoapHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
"AdxError" => '\Google\Api\Ads\AdWords\v201306\classes\AdxError',
"ApiError" => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
"AuthenticationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
"AuthorizationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
"BetaError" => '\Google\Api\Ads\AdWords\v201306\classes\BetaError',
"BiddingErrors" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingErrors',
"BiddingStrategyError" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategyError',
"ClientTermsError" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
"ConversionOptimizerBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionOptimizerBiddingScheme',
"BiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingScheme',
"DateError" => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
"DateRange" => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
"DistinctError" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
"DoubleValue" => '\Google\Api\Ads\AdWords\v201306\classes\DoubleValue',
"NumberValue" => '\Google\Api\Ads\AdWords\v201306\classes\NumberValue',
"EnhancedCpcBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\EnhancedCpcBiddingScheme',
"EntityCountLimitExceeded" => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceeded',
"EntityNotFound" => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
"IdError" => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
"InternalApiError" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
"LongValue" => '\Google\Api\Ads\AdWords\v201306\classes\LongValue',
"ManualCpcBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\ManualCpcBiddingScheme',
"ManualCpmBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\ManualCpmBiddingScheme',
"Money" => '\Google\Api\Ads\AdWords\v201306\classes\Money',
"ComparableValue" => '\Google\Api\Ads\AdWords\v201306\classes\ComparableValue',
"NewEntityCreationError" => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationError',
"NotEmptyError" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
"NotWhitelistedError" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
"NullError" => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
"OrderBy" => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
"Paging" => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
"PercentCpaBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\PercentCpaBiddingScheme',
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
"DatabaseError" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
"PageOnePromotedBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\PageOnePromotedBiddingScheme',
"TargetCpaBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\TargetCpaBiddingScheme',
"TargetSpendBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\TargetSpendBiddingScheme',
"ApiException" => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
"ApplicationException" => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
"BudgetOptimizerBiddingScheme" => '\Google\Api\Ads\AdWords\v201306\classes\BudgetOptimizerBiddingScheme',
"Selector" => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
"SharedBiddingStrategy" => '\Google\Api\Ads\AdWords\v201306\classes\SharedBiddingStrategy',
"BiddingStrategyOperation" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategyOperation',
"Operation" => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
"BiddingStrategyPage" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategyPage',
"Page" => '\Google\Api\Ads\AdWords\v201306\classes\Page',
"BiddingStrategyReturnValue" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategyReturnValue',
"ListReturnValue" => '\Google\Api\Ads\AdWords\v201306\classes\ListReturnValue',
"AdxError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AdxErrorReason',
"AuthenticationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
"AuthorizationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
"BetaError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\BetaErrorReason',
"BiddingErrors.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingErrorsReason',
"SharedBiddingStrategy.BiddingStrategyStatus" => '\Google\Api\Ads\AdWords\v201306\classes\SharedBiddingStrategyBiddingStrategyStatus',
"BiddingStrategyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategyErrorReason',
"BiddingStrategyType" => '\Google\Api\Ads\AdWords\v201306\classes\BiddingStrategyType',
"ClientTermsError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
"ConversionOptimizerBiddingScheme.BidType" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionOptimizerBiddingSchemeBidType',
"ConversionOptimizerBiddingScheme.PricingMode" => '\Google\Api\Ads\AdWords\v201306\classes\ConversionOptimizerBiddingSchemePricingMode',
"DatabaseError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
"DateError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
"DistinctError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
"EntityCountLimitExceeded.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceededReason',
"EntityNotFound.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
"IdError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
"InternalApiError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
"NewEntityCreationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationErrorReason',
"NotEmptyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
"NotWhitelistedError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
"NullError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
"Operator" => '\Google\Api\Ads\AdWords\v201306\classes\Operator',
"PageOnePromotedBiddingScheme.StrategyGoal" => '\Google\Api\Ads\AdWords\v201306\classes\PageOnePromotedBiddingSchemeStrategyGoal',
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
"StringLengthError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',);

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/BiddingStrategyService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = BiddingStrategyService::$classmap;
    parent::__construct($wsdl, $options, $user, 'BiddingStrategyService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of bidding strategies that match the selector.
   * 
   * @return list of bidding strategies specified by the selector.
   * @throws com.google.ads.api.services.common.error.ApiException if problems
   * occurred while retrieving results.
   */
  public function get($selector) {
    $arg = new BiddingStrategyServiceGet($selector);
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
   * Applies the list of mutate operations.
   * 
   * @param operations the operations to apply
   * @return the modified list of BiddingStrategy
   * @throws ApiException
   */
  public function mutate($operations) {
    $arg = new BiddingStrategyServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }

}