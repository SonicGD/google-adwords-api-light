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
    "getResponse" => "BiddingStrategyServiceGetResponse",
    "get" => "BiddingStrategyServiceGet",
    "mutate" => "BiddingStrategyServiceMutate",
    "mutateResponse" => "BiddingStrategyServiceMutateResponse",
    "DateTime" => "AdWordsDateTime",
    "SoapHeader" => "SoapRequestHeader",
    "AdxError" => "AdxError",
    "ApiError" => "ApiError",
    "AuthenticationError" => "AuthenticationError",
    "AuthorizationError" => "AuthorizationError",
    "BetaError" => "BetaError",
    "BiddingErrors" => "BiddingErrors",
    "BiddingStrategyError" => "BiddingStrategyError",
    "ClientTermsError" => "ClientTermsError",
    "ConversionOptimizerBiddingScheme" => "ConversionOptimizerBiddingScheme",
    "BiddingScheme" => "BiddingScheme",
    "DateError" => "DateError",
    "DateRange" => "DateRange",
    "DistinctError" => "DistinctError",
    "DoubleValue" => "DoubleValue",
    "NumberValue" => "NumberValue",
    "EnhancedCpcBiddingScheme" => "EnhancedCpcBiddingScheme",
    "EntityCountLimitExceeded" => "EntityCountLimitExceeded",
    "EntityNotFound" => "EntityNotFound",
    "IdError" => "IdError",
    "InternalApiError" => "InternalApiError",
    "LongValue" => "LongValue",
    "ManualCpcBiddingScheme" => "ManualCpcBiddingScheme",
    "ManualCpmBiddingScheme" => "ManualCpmBiddingScheme",
    "Money" => "Money",
    "ComparableValue" => "ComparableValue",
    "NewEntityCreationError" => "NewEntityCreationError",
    "NotEmptyError" => "NotEmptyError",
    "NotWhitelistedError" => "NotWhitelistedError",
    "NullError" => "NullError",
    "OrderBy" => "OrderBy",
    "Paging" => "Paging",
    "PercentCpaBiddingScheme" => "PercentCpaBiddingScheme",
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
    "SoapResponseHeader" => "SoapResponseHeader",
    "StringLengthError" => "StringLengthError",
    "DatabaseError" => "DatabaseError",
    "PageOnePromotedBiddingScheme" => "PageOnePromotedBiddingScheme",
    "TargetCpaBiddingScheme" => "TargetCpaBiddingScheme",
    "TargetSpendBiddingScheme" => "TargetSpendBiddingScheme",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "BudgetOptimizerBiddingScheme" => "BudgetOptimizerBiddingScheme",
    "Selector" => "Selector",
    "SharedBiddingStrategy" => "SharedBiddingStrategy",
    "BiddingStrategyOperation" => "BiddingStrategyOperation",
    "Operation" => "Operation",
    "BiddingStrategyPage" => "BiddingStrategyPage",
    "Page" => "Page",
    "BiddingStrategyReturnValue" => "BiddingStrategyReturnValue",
    "ListReturnValue" => "ListReturnValue",
    "AdxError.Reason" => "AdxErrorReason",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "AuthorizationError.Reason" => "AuthorizationErrorReason",
    "BetaError.Reason" => "BetaErrorReason",
    "BiddingErrors.Reason" => "BiddingErrorsReason",
    "SharedBiddingStrategy.BiddingStrategyStatus" => "SharedBiddingStrategyBiddingStrategyStatus",
    "BiddingStrategyError.Reason" => "BiddingStrategyErrorReason",
    "BiddingStrategyType" => "BiddingStrategyType",
    "ClientTermsError.Reason" => "ClientTermsErrorReason",
    "ConversionOptimizerBiddingScheme.BidType" => "ConversionOptimizerBiddingSchemeBidType",
    "ConversionOptimizerBiddingScheme.PricingMode" => "ConversionOptimizerBiddingSchemePricingMode",
    "DatabaseError.Reason" => "DatabaseErrorReason",
    "DateError.Reason" => "DateErrorReason",
    "DistinctError.Reason" => "DistinctErrorReason",
    "EntityCountLimitExceeded.Reason" => "EntityCountLimitExceededReason",
    "EntityNotFound.Reason" => "EntityNotFoundReason",
    "IdError.Reason" => "IdErrorReason",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "NewEntityCreationError.Reason" => "NewEntityCreationErrorReason",
    "NotEmptyError.Reason" => "NotEmptyErrorReason",
    "NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
    "NullError.Reason" => "NullErrorReason",
    "Operator" => "Operator",
    "PageOnePromotedBiddingScheme.StrategyGoal" => "PageOnePromotedBiddingSchemeStrategyGoal",
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
  );

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