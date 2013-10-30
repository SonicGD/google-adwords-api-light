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
    "getResponse" => "AdExtensionOverrideServiceGetResponse",
    "get" => "AdExtensionOverrideServiceGet",
    "mutate" => "AdExtensionOverrideServiceMutate",
    "mutateResponse" => "AdExtensionOverrideServiceMutateResponse",
    "DateTime" => "AdWordsDateTime",
    "SoapHeader" => "SoapRequestHeader",
    "AdExtensionOverrideError" => "AdExtensionOverrideError",
    "ApiError" => "ApiError",
    "AdExtensionOverrideStats" => "AdExtensionOverrideStats",
    "Stats" => "Stats",
    "Address" => "Address",
    "AdxError" => "AdxError",
    "AuthenticationError" => "AuthenticationError",
    "AuthorizationError" => "AuthorizationError",
    "ClientTermsError" => "ClientTermsError",
    "DistinctError" => "DistinctError",
    "DomainInfoExtension" => "DomainInfoExtension",
    "AdExtension" => "AdExtension",
    "DoubleValue" => "DoubleValue",
    "NumberValue" => "NumberValue",
    "EntityNotFound" => "EntityNotFound",
    "GeoPoint" => "GeoPoint",
    "IdError" => "IdError",
    "InAppLinkExtension" => "InAppLinkExtension",
    "InternalApiError" => "InternalApiError",
    "LocationOverrideInfo" => "LocationOverrideInfo",
    "LongValue" => "LongValue",
    "MobileExtension" => "MobileExtension",
    "NotEmptyError" => "NotEmptyError",
    "NotWhitelistedError" => "NotWhitelistedError",
    "NullError" => "NullError",
    "ComparableValue" => "ComparableValue",
    "OAuthInfo" => "OAuthInfo",
    "OperatorError" => "OperatorError",
    "OverrideInfo" => "OverrideInfo",
    "Paging" => "Paging",
    "QuotaCheckError" => "QuotaCheckError",
    "RangeError" => "RangeError",
    "RateExceededError" => "RateExceededError",
    "ReadOnlyError" => "ReadOnlyError",
    "RequestError" => "RequestError",
    "RequiredError" => "RequiredError",
    "Sitelink" => "Sitelink",
    "SitelinksExtension" => "SitelinksExtension",
    "SizeLimitError" => "SizeLimitError",
    "SoapResponseHeader" => "SoapResponseHeader",
    "StringLengthError" => "StringLengthError",
    "AdExtensionOverrideSelector" => "AdExtensionOverrideSelector",
    "DatabaseError" => "DatabaseError",
    "LocationExtension" => "LocationExtension",
    "Money" => "Money",
    "ApiException" => "ApiException",
    "ApplicationException" => "ApplicationException",
    "LocationSyncExtension" => "LocationSyncExtension",
    "AdExtensionOverride" => "AdExtensionOverride",
    "AdExtensionOverrideOperation" => "AdExtensionOverrideOperation",
    "Operation" => "Operation",
    "AdExtensionOverridePage" => "AdExtensionOverridePage",
    "Page" => "Page",
    "AdExtensionOverrideReturnValue" => "AdExtensionOverrideReturnValue",
    "ListReturnValue" => "ListReturnValue",
    "AdExtensionOverride.ApprovalStatus" => "AdExtensionOverrideApprovalStatus",
    "AdExtensionOverride.Status" => "AdExtensionOverrideStatus",
    "AdExtensionOverrideError.Reason" => "AdExtensionOverrideErrorReason",
    "AdxError.Reason" => "AdxErrorReason",
    "AuthenticationError.Reason" => "AuthenticationErrorReason",
    "AuthorizationError.Reason" => "AuthorizationErrorReason",
    "ClientTermsError.Reason" => "ClientTermsErrorReason",
    "DatabaseError.Reason" => "DatabaseErrorReason",
    "DistinctError.Reason" => "DistinctErrorReason",
    "EntityNotFound.Reason" => "EntityNotFoundReason",
    "IdError.Reason" => "IdErrorReason",
    "InAppLinkExtension.AppStore" => "InAppLinkExtensionAppStore",
    "InternalApiError.Reason" => "InternalApiErrorReason",
    "LocationExtension.Source" => "LocationExtensionSource",
    "LocationOverrideInfo.RadiusUnits" => "LocationOverrideInfoRadiusUnits",
    "NotEmptyError.Reason" => "NotEmptyErrorReason",
    "NotWhitelistedError.Reason" => "NotWhitelistedErrorReason",
    "NullError.Reason" => "NullErrorReason",
    "Operator" => "Operator",
    "OperatorError.Reason" => "OperatorErrorReason",
    "QuotaCheckError.Reason" => "QuotaCheckErrorReason",
    "RangeError.Reason" => "RangeErrorReason",
    "RateExceededError.Reason" => "RateExceededErrorReason",
    "ReadOnlyError.Reason" => "ReadOnlyErrorReason",
    "RequestError.Reason" => "RequestErrorReason",
    "RequiredError.Reason" => "RequiredErrorReason",
    "SizeLimitError.Reason" => "SizeLimitErrorReason",
    "Stats.Network" => "StatsNetwork",
    "StringLengthError.Reason" => "StringLengthErrorReason",
  );

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