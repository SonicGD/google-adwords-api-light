<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * CampaignAdExtensionService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class CampaignAdExtensionService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
"getResponse" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignAdExtensionServiceGetResponse',
"get" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignAdExtensionServiceGet',
"mutate" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignAdExtensionServiceMutate',
"mutateResponse" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignAdExtensionServiceMutateResponse',
"DateTime" => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
"SoapHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
"AdExtensionError" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionError',
"ApiError" => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
"Address" => '\Google\Api\Ads\AdWords\v201306\classes\Address',
"AdxError" => '\Google\Api\Ads\AdWords\v201306\classes\AdxError',
"AuthenticationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
"AuthorizationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
"BetaError" => '\Google\Api\Ads\AdWords\v201306\classes\BetaError',
"CampaignAdExtensionError" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignAdExtensionError',
"CampaignAdExtensionStats" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignAdExtensionStats',
"Stats" => '\Google\Api\Ads\AdWords\v201306\classes\Stats',
"ClientTermsError" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
"DateRange" => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
"DistinctError" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
"DomainInfoExtension" => '\Google\Api\Ads\AdWords\v201306\classes\DomainInfoExtension',
"AdExtension" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtension',
"DoubleValue" => '\Google\Api\Ads\AdWords\v201306\classes\DoubleValue',
"NumberValue" => '\Google\Api\Ads\AdWords\v201306\classes\NumberValue',
"EntityCountLimitExceeded" => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceeded',
"EntityNotFound" => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
"GeoPoint" => '\Google\Api\Ads\AdWords\v201306\classes\GeoPoint',
"IdError" => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
"InAppLinkExtension" => '\Google\Api\Ads\AdWords\v201306\classes\InAppLinkExtension',
"InternalApiError" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
"LongValue" => '\Google\Api\Ads\AdWords\v201306\classes\LongValue',
"MobileExtension" => '\Google\Api\Ads\AdWords\v201306\classes\MobileExtension',
"NewEntityCreationError" => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationError',
"NotEmptyError" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
"NotWhitelistedError" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
"NullError" => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
"ComparableValue" => '\Google\Api\Ads\AdWords\v201306\classes\ComparableValue',
"OAuthInfo" => '\Google\Api\Ads\AdWords\v201306\classes\OAuthInfo',
"OperationAccessDenied" => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
"OperatorError" => '\Google\Api\Ads\AdWords\v201306\classes\OperatorError',
"OrderBy" => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
"Paging" => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
"PagingError" => '\Google\Api\Ads\AdWords\v201306\classes\PagingError',
"Predicate" => '\Google\Api\Ads\AdWords\v201306\classes\Predicate',
"QuotaCheckError" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
"RangeError" => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
"RateExceededError" => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
"ReadOnlyError" => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
"RegionCodeError" => '\Google\Api\Ads\AdWords\v201306\classes\RegionCodeError',
"RejectedError" => '\Google\Api\Ads\AdWords\v201306\classes\RejectedError',
"RequestError" => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
"RequiredError" => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
"SelectorError" => '\Google\Api\Ads\AdWords\v201306\classes\SelectorError',
"Sitelink" => '\Google\Api\Ads\AdWords\v201306\classes\Sitelink',
"SitelinksExtension" => '\Google\Api\Ads\AdWords\v201306\classes\SitelinksExtension',
"SizeLimitError" => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
"SoapResponseHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
"StringLengthError" => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
"DatabaseError" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
"LocationExtension" => '\Google\Api\Ads\AdWords\v201306\classes\LocationExtension',
"Money" => '\Google\Api\Ads\AdWords\v201306\classes\Money',
"ApiException" => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
"ApplicationException" => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
"LocationSyncExtension" => '\Google\Api\Ads\AdWords\v201306\classes\LocationSyncExtension',
"Selector" => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
"CampaignAdExtension" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignAdExtension',
"CampaignAdExtensionOperation" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignAdExtensionOperation',
"Operation" => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
"CampaignAdExtensionPage" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignAdExtensionPage',
"Page" => '\Google\Api\Ads\AdWords\v201306\classes\Page',
"CampaignAdExtensionReturnValue" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignAdExtensionReturnValue',
"ListReturnValue" => '\Google\Api\Ads\AdWords\v201306\classes\ListReturnValue',
"AdExtensionError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionErrorReason',
"AdxError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AdxErrorReason',
"AuthenticationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
"AuthorizationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
"BetaError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\BetaErrorReason',
"CampaignAdExtension.ApprovalStatus" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignAdExtensionApprovalStatus',
"CampaignAdExtension.Status" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignAdExtensionStatus',
"CampaignAdExtensionError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\CampaignAdExtensionErrorReason',
"ClientTermsError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
"DatabaseError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
"DistinctError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
"EntityCountLimitExceeded.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\EntityCountLimitExceededReason',
"EntityNotFound.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
"IdError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
"InAppLinkExtension.AppStore" => '\Google\Api\Ads\AdWords\v201306\classes\InAppLinkExtensionAppStore',
"InternalApiError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
"LocationExtension.Source" => '\Google\Api\Ads\AdWords\v201306\classes\LocationExtensionSource',
"NewEntityCreationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationErrorReason',
"NotEmptyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
"NotWhitelistedError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
"NullError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
"OperationAccessDenied.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
"Operator" => '\Google\Api\Ads\AdWords\v201306\classes\Operator',
"OperatorError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\OperatorErrorReason',
"PagingError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\PagingErrorReason',
"Predicate.Operator" => '\Google\Api\Ads\AdWords\v201306\classes\PredicateOperator',
"QuotaCheckError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
"RangeError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
"RateExceededError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
"ReadOnlyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
"RegionCodeError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RegionCodeErrorReason',
"RejectedError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RejectedErrorReason',
"RequestError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
"RequiredError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
"SelectorError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
"SizeLimitError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
"SortOrder" => '\Google\Api\Ads\AdWords\v201306\classes\SortOrder',
"Stats.Network" => '\Google\Api\Ads\AdWords\v201306\classes\StatsNetwork',
"StringLengthError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',);

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/CampaignAdExtensionService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = CampaignAdExtensionService::$classmap;
    parent::__construct($wsdl, $options, $user, 'CampaignAdExtensionService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of {@link CampaignAdExtension}s.
   * 
   * @param serviceSelector The selector specifying the {@link CampaignAdExtension}s to return.
   * @return The page containing the {@link CampaignAdExtension}s which meet the
   * criteria specified by the selector.
   * @throws ApiException when there is at least one error with the request.
   */
  public function get($serviceSelector) {
    $arg = new CampaignAdExtensionServiceGet($serviceSelector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Applies the list of mutate operations.
   * @param operations The operations to apply. The same {@link CampaignAdExtension}
   * cannot be specified in more than one operation.
   * @return The changed {@link CampaignAdExtension}s.
   */
  public function mutate($operations) {
    $arg = new CampaignAdExtensionServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }

}