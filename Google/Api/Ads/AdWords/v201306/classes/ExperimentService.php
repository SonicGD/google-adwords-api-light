<?php

namespace Google\Api\Ads\AdWords\v201306\classes;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
 * ExperimentService
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @author     WSDLInterpreter
 */
class ExperimentService extends AdWordsSoapClient
{
    /**
     * Default class map for wsdl=>php
     *
     * @access private
     * @var array
     */
    public static $classmap = array(
        "getResponse"                   => '\Google\Api\Ads\AdWords\v201306\classes\ExperimentServiceGetResponse',
        "get"                           => '\Google\Api\Ads\AdWords\v201306\classes\ExperimentServiceGet',
        "mutate"                        => '\Google\Api\Ads\AdWords\v201306\classes\ExperimentServiceMutate',
        "mutateResponse"                => '\Google\Api\Ads\AdWords\v201306\classes\ExperimentServiceMutateResponse',
        "DateTime"                      => '\Google\Api\Ads\AdWords\v201306\classes\AdWordsDateTime',
        "SoapHeader"                    => '\Google\Api\Ads\AdWords\v201306\classes\SoapRequestHeader',
        "AdxError"                      => '\Google\Api\Ads\AdWords\v201306\classes\AdxError',
        "ApiError"                      => '\Google\Api\Ads\AdWords\v201306\classes\ApiError',
        "AuthenticationError"           => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationError',
        "AuthorizationError"            => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationError',
        "BudgetError"                   => '\Google\Api\Ads\AdWords\v201306\classes\BudgetError',
        "ClientTermsError"              => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsError',
        "DateError"                     => '\Google\Api\Ads\AdWords\v201306\classes\DateError',
        "DateRange"                     => '\Google\Api\Ads\AdWords\v201306\classes\DateRange',
        "DistinctError"                 => '\Google\Api\Ads\AdWords\v201306\classes\DistinctError',
        "EntityNotFound"                => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFound',
        "ExperimentServiceError"        => '\Google\Api\Ads\AdWords\v201306\classes\ExperimentServiceError',
        "ExperimentSummaryStats"        => '\Google\Api\Ads\AdWords\v201306\classes\ExperimentSummaryStats',
        "IdError"                       => '\Google\Api\Ads\AdWords\v201306\classes\IdError',
        "InternalApiError"              => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiError',
        "NewEntityCreationError"        => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationError',
        "NotEmptyError"                 => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyError',
        "NotWhitelistedError"           => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedError',
        "NullError"                     => '\Google\Api\Ads\AdWords\v201306\classes\NullError',
        "OperationAccessDenied"         => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDenied',
        "OperatorError"                 => '\Google\Api\Ads\AdWords\v201306\classes\OperatorError',
        "OrderBy"                       => '\Google\Api\Ads\AdWords\v201306\classes\OrderBy',
        "Paging"                        => '\Google\Api\Ads\AdWords\v201306\classes\Paging',
        "Predicate"                     => '\Google\Api\Ads\AdWords\v201306\classes\Predicate',
        "QuotaCheckError"               => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckError',
        "QuotaError"                    => '\Google\Api\Ads\AdWords\v201306\classes\QuotaError',
        "RangeError"                    => '\Google\Api\Ads\AdWords\v201306\classes\RangeError',
        "RateExceededError"             => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededError',
        "ReadOnlyError"                 => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyError',
        "RejectedError"                 => '\Google\Api\Ads\AdWords\v201306\classes\RejectedError',
        "RequestError"                  => '\Google\Api\Ads\AdWords\v201306\classes\RequestError',
        "RequiredError"                 => '\Google\Api\Ads\AdWords\v201306\classes\RequiredError',
        "SelectorError"                 => '\Google\Api\Ads\AdWords\v201306\classes\SelectorError',
        "SizeLimitError"                => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitError',
        "SoapResponseHeader"            => '\Google\Api\Ads\AdWords\v201306\classes\SoapResponseHeader',
        "StringLengthError"             => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthError',
        "DatabaseError"                 => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseError',
        "Experiment"                    => '\Google\Api\Ads\AdWords\v201306\classes\Experiment',
        "ExperimentOperation"           => '\Google\Api\Ads\AdWords\v201306\classes\ExperimentOperation',
        "Operation"                     => '\Google\Api\Ads\AdWords\v201306\classes\Operation',
        "ExperimentReturnValue"         => '\Google\Api\Ads\AdWords\v201306\classes\ExperimentReturnValue',
        "ListReturnValue"               => '\Google\Api\Ads\AdWords\v201306\classes\ListReturnValue',
        "ApiException"                  => '\Google\Api\Ads\AdWords\v201306\classes\ApiException',
        "ApplicationException"          => '\Google\Api\Ads\AdWords\v201306\classes\ApplicationException',
        "ExperimentPage"                => '\Google\Api\Ads\AdWords\v201306\classes\ExperimentPage',
        "Page"                          => '\Google\Api\Ads\AdWords\v201306\classes\Page',
        "Selector"                      => '\Google\Api\Ads\AdWords\v201306\classes\Selector',
        "AdxError.Reason"               => '\Google\Api\Ads\AdWords\v201306\classes\AdxErrorReason',
        "AuthenticationError.Reason"    => '\Google\Api\Ads\AdWords\v201306\classes\AuthenticationErrorReason',
        "AuthorizationError.Reason"     => '\Google\Api\Ads\AdWords\v201306\classes\AuthorizationErrorReason',
        "BudgetError.Reason"            => '\Google\Api\Ads\AdWords\v201306\classes\BudgetErrorReason',
        "ClientTermsError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\ClientTermsErrorReason',
        "DatabaseError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\DatabaseErrorReason',
        "DateError.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\DateErrorReason',
        "DistinctError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\DistinctErrorReason',
        "EntityNotFound.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\EntityNotFoundReason',
        "ExperimentServiceError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\ExperimentServiceErrorReason',
        "ExperimentServingStatus"       => '\Google\Api\Ads\AdWords\v201306\classes\ExperimentServingStatus',
        "ExperimentStatus"              => '\Google\Api\Ads\AdWords\v201306\classes\ExperimentStatus',
        "IdError.Reason"                => '\Google\Api\Ads\AdWords\v201306\classes\IdErrorReason',
        "InternalApiError.Reason"       => '\Google\Api\Ads\AdWords\v201306\classes\InternalApiErrorReason',
        "NewEntityCreationError.Reason" => '\Google\Api\Ads\AdWords\v201306\classes\NewEntityCreationErrorReason',
        "NotEmptyError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\NotEmptyErrorReason',
        "NotWhitelistedError.Reason"    => '\Google\Api\Ads\AdWords\v201306\classes\NotWhitelistedErrorReason',
        "NullError.Reason"              => '\Google\Api\Ads\AdWords\v201306\classes\NullErrorReason',
        "OperationAccessDenied.Reason"  => '\Google\Api\Ads\AdWords\v201306\classes\OperationAccessDeniedReason',
        "Operator"                      => '\Google\Api\Ads\AdWords\v201306\classes\Operator',
        "OperatorError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\OperatorErrorReason',
        "Predicate.Operator"            => '\Google\Api\Ads\AdWords\v201306\classes\PredicateOperator',
        "QuotaCheckError.Reason"        => '\Google\Api\Ads\AdWords\v201306\classes\QuotaCheckErrorReason',
        "QuotaError.Reason"             => '\Google\Api\Ads\AdWords\v201306\classes\QuotaErrorReason',
        "RangeError.Reason"             => '\Google\Api\Ads\AdWords\v201306\classes\RangeErrorReason',
        "RateExceededError.Reason"      => '\Google\Api\Ads\AdWords\v201306\classes\RateExceededErrorReason',
        "ReadOnlyError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\ReadOnlyErrorReason',
        "RejectedError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\RejectedErrorReason',
        "RequestError.Reason"           => '\Google\Api\Ads\AdWords\v201306\classes\RequestErrorReason',
        "RequiredError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\RequiredErrorReason',
        "SelectorError.Reason"          => '\Google\Api\Ads\AdWords\v201306\classes\SelectorErrorReason',
        "SizeLimitError.Reason"         => '\Google\Api\Ads\AdWords\v201306\classes\SizeLimitErrorReason',
        "SortOrder"                     => '\Google\Api\Ads\AdWords\v201306\classes\SortOrder',
        "StringLengthError.Reason"      => '\Google\Api\Ads\AdWords\v201306\classes\StringLengthErrorReason',
    );

    /**
     * The endpoint of the service
     *
     * @var string
     */
    public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/ExperimentService";

    /**
     * Constructor using wsdl location and options array
     *
     * @param string $wsdl    WSDL location for this service
     * @param array  $options Options for the SoapClient
     */
    public function __construct($wsdl = null, $options, $user)
    {
        $options["classmap"] = ExperimentService::$classmap;
        parent::__construct(
            $wsdl,
            $options,
            $user,
            'ExperimentService',
            'https://adwords.google.com/api/adwords/cm/v201306'
        );
    }

    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     *
     *
     *
     * Returns a list of experiments specified by the experiment selector from
     * the customer's account.
     *
     * @param serviceSelector The selector specifying the {@link Experiment}s to return.
     * If selector is empty, all experiments are returned.
     *
     * @return List of experiments meeting all the criteria of each selector.
     * @throws ApiException if problems occurred while fetching experiment information.
     */
    public function get($serviceSelector)
    {
        $arg = new ExperimentServiceGet($serviceSelector);
        $result = $this->__soapCall("get", array($arg));
        return $result->rval;
    }


    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
     *
     *
     *
     * Mutates (add, update or remove) experiments.
     * <b>Note:</b> To REMOVE use SET and mark status to DELETED.
     *
     * @param operations A list of unique operations.
     *                   The same experiment cannot be specified in more than one operation.
     *
     * @return The updated experiments. The list of experiments is returned in
     * the same order in which it came in as input.
     * @throws ApiException if problems occurred while updating experiment information.
     */
    public function mutate($operations)
    {
        $arg = new ExperimentServiceMutate($operations);
        $result = $this->__soapCall("mutate", array($arg));
        return $result->rval;
    }

}