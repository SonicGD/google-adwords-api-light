<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * AdExtensionOverrideService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class AdExtensionOverrideService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
"getResponse" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverrideServiceGetResponse',
"get" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverrideServiceGet',
"mutate" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverrideServiceMutate',
"mutateResponse" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverrideServiceMutateResponse',
"DateTime" => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
"SoapHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
"AdExtensionOverrideError" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverrideError',
"ApiError" => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
"AdExtensionOverrideStats" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverrideStats',
"Stats" => '\Google\Api\Ads\AdWords\v201306\classes\Stats',
"Address" => '\Google\Api\Ads\AdWords\v201306\classes\Address',
"AdxError" => '\Google\Api\Ads\AdWords\v201306\classes\AdxError',
"AuthenticationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
"AuthorizationError" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
"ClientTermsError" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
"DistinctError" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
"DomainInfoExtension" => '\Google\Api\Ads\AdWords\v201306\classes\DomainInfoExtension',
"AdExtension" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtension',
"DoubleValue" => '\Google\Api\Ads\AdWords\v201306\classes\DoubleValue',
"NumberValue" => '\Google\Api\Ads\AdWords\v201306\classes\NumberValue',
"EntityNotFound" => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
"GeoPoint" => '\Google\Api\Ads\AdWords\v201306\classes\GeoPoint',
"IdError" => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
"InAppLinkExtension" => '\Google\Api\Ads\AdWords\v201306\classes\InAppLinkExtension',
"InternalApiError" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
"LocationOverrideInfo" => '\Google\Api\Ads\AdWords\v201306\classes\LocationOverrideInfo',
"LongValue" => '\Google\Api\Ads\AdWords\v201306\classes\LongValue',
"MobileExtension" => '\Google\Api\Ads\AdWords\v201306\classes\MobileExtension',
"NotEmptyError" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
"NotWhitelistedError" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
"NullError" => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
"ComparableValue" => '\Google\Api\Ads\AdWords\v201306\classes\ComparableValue',
"OAuthInfo" => '\Google\Api\Ads\AdWords\v201306\classes\OAuthInfo',
"OperatorError" => '\Google\Api\Ads\AdWords\v201306\classes\OperatorError',
"OverrideInfo" => '\Google\Api\Ads\AdWords\v201306\classes\OverrideInfo',
"Paging" => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
"QuotaCheckError" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
"RangeError" => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
"RateExceededError" => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
"ReadOnlyError" => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
"RequestError" => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
"RequiredError" => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
"Sitelink" => '\Google\Api\Ads\AdWords\v201306\classes\Sitelink',
"SitelinksExtension" => '\Google\Api\Ads\AdWords\v201306\classes\SitelinksExtension',
"SizeLimitError" => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
"SoapResponseHeader" => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
"StringLengthError" => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
"AdExtensionOverrideSelector" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverrideSelector',
"DatabaseError" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
"LocationExtension" => '\Google\Api\Ads\AdWords\v201306\classes\LocationExtension',
"Money" => '\Google\Api\Ads\AdWords\v201306\classes\Money',
"ApiException" => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
"ApplicationException" => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
"LocationSyncExtension" => '\Google\Api\Ads\AdWords\v201306\classes\LocationSyncExtension',
"AdExtensionOverride" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverride',
"AdExtensionOverrideOperation" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverrideOperation',
"Operation" => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
"AdExtensionOverridePage" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverridePage',
"Page" => '\Google\Api\Ads\AdWords\v201306\classes\Page',
"AdExtensionOverrideReturnValue" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverrideReturnValue',
"ListReturnValue" => '\Google\Api\Ads\AdWords\v201306\classes\ListReturnValue',
"AdExtensionOverride.ApprovalStatus" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverrideApprovalStatus',
"AdExtensionOverride.Status" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverrideStatus',
"AdExtensionOverrideError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AdExtensionOverrideErrorReason',
"AdxError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AdxErrorReason',
"AuthenticationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
"AuthorizationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
"ClientTermsError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
"DatabaseError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
"DistinctError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
"EntityNotFound.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
"IdError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
"InAppLinkExtension.AppStore" => '\Google\Api\Ads\AdWords\v201306\classes\InAppLinkExtensionAppStore',
"InternalApiError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
"LocationExtension.Source" => '\Google\Api\Ads\AdWords\v201306\classes\LocationExtensionSource',
"LocationOverrideInfo.RadiusUnits" => '\Google\Api\Ads\AdWords\v201306\classes\LocationOverrideInfoRadiusUnits',
"NotEmptyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
"NotWhitelistedError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
"NullError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
"Operator" => '\Google\Api\Ads\AdWords\v201306\classes\Operator',
"OperatorError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\OperatorErrorReason',
"QuotaCheckError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
"RangeError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
"RateExceededError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
"ReadOnlyError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
"RequestError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
"RequiredError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
"SizeLimitError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
"Stats.Network" => '\Google\Api\Ads\AdWords\v201306\classes\StatsNetwork',
"StringLengthError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',);

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/AdExtensionOverrideService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = AdExtensionOverrideService::$classmap;
    parent::__construct($wsdl, $options, $user, 'AdExtensionOverrideService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * Returns a list of AdExtensionOverrides based on an
   * AdExtensionOverrideSelector.
   * @param selector The selector specifying the query.
   * @return The page containing the AdExtensionOverride which meet the
   * criteria specified by the selector.
   */
  public function get($selector) {
    $arg = new AdExtensionOverrideServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
   * 
   * 
   * 
   * Applies the list of mutate operations.
   * 
   * <p>Conditions for adding an ad-level AdExtension override using an AdExtension
   * under the Ad's campaign:</p>
   * <ol>
   * <li>If the text ad has never been overridden, an AdExtension override may
   * be set on the creative using an extension under the campaign, along with
   * any override info.</li>
   * <li>If the text ad has been overriden before, the latitude/longitude of the
   * new extension override must be the same as the previous override and
   * no override info can be specified (i.e. the override info will inherit from
   * the previous override info).</li>
   * </ol>
   * 
   * @param operations The operations to apply. The same ad extension override
   * cannot be specified in more than one operation.
   * @return The applied ad extension overrides.
   */
  public function mutate($operations) {
    $arg = new AdExtensionOverrideServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }

}