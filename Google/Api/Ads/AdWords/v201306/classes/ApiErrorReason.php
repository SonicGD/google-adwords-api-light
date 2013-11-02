<?php

/**
 * Interface that has a reason return an associated service error.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ApiErrorReason
{
    /**
     * @access public
     * @var tnsAdErrorReason
     */
    public $AdErrorReason;

    /**
     * @access public
     * @var tnsAdExtensionErrorReason
     */
    public $AdExtensionErrorReason;

    /**
     * @access public
     * @var tnsAdExtensionOverrideErrorReason
     */
    public $AdExtensionOverrideErrorReason;

    /**
     * @access public
     * @var tnsAdGroupAdErrorReason
     */
    public $AdGroupAdErrorReason;

    /**
     * @access public
     * @var tnsAdGroupCriterionErrorReason
     */
    public $AdGroupCriterionErrorReason;

    /**
     * @access public
     * @var tnsAdGroupServiceErrorReason
     */
    public $AdGroupServiceErrorReason;

    /**
     * @access public
     * @var tnsAdxErrorReason
     */
    public $AdxErrorReason;

    /**
     * @access public
     * @var tnsAuthenticationErrorReason
     */
    public $AuthenticationErrorReason;

    /**
     * @access public
     * @var tnsAuthorizationErrorReason
     */
    public $AuthorizationErrorReason;

    /**
     * @access public
     * @var tnsBetaErrorReason
     */
    public $BetaErrorReason;

    /**
     * @access public
     * @var tnsBiddingErrorReason
     */
    public $BiddingErrorReason;

    /**
     * @access public
     * @var tnsBiddingErrorsReason
     */
    public $BiddingErrorsReason;

    /**
     * @access public
     * @var tnsBiddingTransitionErrorReason
     */
    public $BiddingTransitionErrorReason;

    /**
     * @access public
     * @var tnsBudgetErrorReason
     */
    public $BudgetErrorReason;

    /**
     * @access public
     * @var tnsBulkMutateJobErrorReason
     */
    public $BulkMutateJobErrorReason;

    /**
     * @access public
     * @var tnsCampaignAdExtensionErrorReason
     */
    public $CampaignAdExtensionErrorReason;

    /**
     * @access public
     * @var tnsCampaignCriterionErrorReason
     */
    public $CampaignCriterionErrorReason;

    /**
     * @access public
     * @var tnsCampaignErrorReason
     */
    public $CampaignErrorReason;

    /**
     * @access public
     * @var tnsClientTermsErrorReason
     */
    public $ClientTermsErrorReason;

    /**
     * @access public
     * @var tnsCriterionErrorReason
     */
    public $CriterionErrorReason;

    /**
     * @access public
     * @var tnsDatabaseErrorReason
     */
    public $DatabaseErrorReason;

    /**
     * @access public
     * @var tnsDateErrorReason
     */
    public $DateErrorReason;

    /**
     * @access public
     * @var tnsDistinctErrorReason
     */
    public $DistinctErrorReason;

    /**
     * @access public
     * @var tnsEntityAccessDeniedReason
     */
    public $EntityAccessDeniedReason;

    /**
     * @access public
     * @var tnsEntityCountLimitExceededReason
     */
    public $EntityCountLimitExceededReason;

    /**
     * @access public
     * @var tnsEntityNotFoundReason
     */
    public $EntityNotFoundReason;

    /**
     * @access public
     * @var tnsFeedItemErrorReason
     */
    public $FeedItemErrorReason;

    /**
     * @access public
     * @var tnsForwardCompatibilityErrorReason
     */
    public $ForwardCompatibilityErrorReason;

    /**
     * @access public
     * @var tnsIdErrorReason
     */
    public $IdErrorReason;

    /**
     * @access public
     * @var tnsImageErrorReason
     */
    public $ImageErrorReason;

    /**
     * @access public
     * @var tnsInternalApiErrorReason
     */
    public $InternalApiErrorReason;

    /**
     * @access public
     * @var tnsJobErrorReason
     */
    public $JobErrorReason;

    /**
     * @access public
     * @var tnsMediaErrorReason
     */
    public $MediaErrorReason;

    /**
     * @access public
     * @var tnsNewEntityCreationErrorReason
     */
    public $NewEntityCreationErrorReason;

    /**
     * @access public
     * @var tnsNotEmptyErrorReason
     */
    public $NotEmptyErrorReason;

    /**
     * @access public
     * @var tnsNotWhitelistedErrorReason
     */
    public $NotWhitelistedErrorReason;

    /**
     * @access public
     * @var tnsNullErrorReason
     */
    public $NullErrorReason;

    /**
     * @access public
     * @var tnsOperationAccessDeniedReason
     */
    public $OperationAccessDeniedReason;

    /**
     * @access public
     * @var tnsOperatorErrorReason
     */
    public $OperatorErrorReason;

    /**
     * @access public
     * @var tnsPagingErrorReason
     */
    public $PagingErrorReason;

    /**
     * @access public
     * @var tnsPolicyViolationErrorReason
     */
    public $PolicyViolationErrorReason;

    /**
     * @access public
     * @var tnsQueryErrorReason
     */
    public $QueryErrorReason;

    /**
     * @access public
     * @var tnsQuotaCheckErrorReason
     */
    public $QuotaCheckErrorReason;

    /**
     * @access public
     * @var tnsQuotaErrorReason
     */
    public $QuotaErrorReason;

    /**
     * @access public
     * @var tnsRangeErrorReason
     */
    public $RangeErrorReason;

    /**
     * @access public
     * @var tnsRateExceededErrorReason
     */
    public $RateExceededErrorReason;

    /**
     * @access public
     * @var tnsReadOnlyErrorReason
     */
    public $ReadOnlyErrorReason;

    /**
     * @access public
     * @var tnsRegionCodeErrorReason
     */
    public $RegionCodeErrorReason;

    /**
     * @access public
     * @var tnsRejectedErrorReason
     */
    public $RejectedErrorReason;

    /**
     * @access public
     * @var tnsRequestErrorReason
     */
    public $RequestErrorReason;

    /**
     * @access public
     * @var tnsRequiredErrorReason
     */
    public $RequiredErrorReason;

    /**
     * @access public
     * @var tnsSelectorErrorReason
     */
    public $SelectorErrorReason;

    /**
     * @access public
     * @var tnsSettingErrorReason
     */
    public $SettingErrorReason;

    /**
     * @access public
     * @var tnsSizeLimitErrorReason
     */
    public $SizeLimitErrorReason;

    /**
     * @access public
     * @var tnsStatsQueryErrorReason
     */
    public $StatsQueryErrorReason;

    /**
     * @access public
     * @var tnsStringLengthErrorReason
     */
    public $StringLengthErrorReason;

    /**
     * @access public
     * @var tnsTargetErrorReason
     */
    public $TargetErrorReason;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201306";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "ApiErrorReason";
    }

    public function __construct(
        $AdErrorReason = null,
        $AdExtensionErrorReason = null,
        $AdExtensionOverrideErrorReason = null,
        $AdGroupAdErrorReason = null,
        $AdGroupCriterionErrorReason = null,
        $AdGroupServiceErrorReason = null,
        $AdxErrorReason = null,
        $AuthenticationErrorReason = null,
        $AuthorizationErrorReason = null,
        $BetaErrorReason = null,
        $BiddingErrorReason = null,
        $BiddingErrorsReason = null,
        $BiddingTransitionErrorReason = null,
        $BudgetErrorReason = null,
        $BulkMutateJobErrorReason = null,
        $CampaignAdExtensionErrorReason = null,
        $CampaignCriterionErrorReason = null,
        $CampaignErrorReason = null,
        $ClientTermsErrorReason = null,
        $CriterionErrorReason = null,
        $DatabaseErrorReason = null,
        $DateErrorReason = null,
        $DistinctErrorReason = null,
        $EntityAccessDeniedReason = null,
        $EntityCountLimitExceededReason = null,
        $EntityNotFoundReason = null,
        $FeedItemErrorReason = null,
        $ForwardCompatibilityErrorReason = null,
        $IdErrorReason = null,
        $ImageErrorReason = null,
        $InternalApiErrorReason = null,
        $JobErrorReason = null,
        $MediaErrorReason = null,
        $NewEntityCreationErrorReason = null,
        $NotEmptyErrorReason = null,
        $NotWhitelistedErrorReason = null,
        $NullErrorReason = null,
        $OperationAccessDeniedReason = null,
        $OperatorErrorReason = null,
        $PagingErrorReason = null,
        $PolicyViolationErrorReason = null,
        $QueryErrorReason = null,
        $QuotaCheckErrorReason = null,
        $QuotaErrorReason = null,
        $RangeErrorReason = null,
        $RateExceededErrorReason = null,
        $ReadOnlyErrorReason = null,
        $RegionCodeErrorReason = null,
        $RejectedErrorReason = null,
        $RequestErrorReason = null,
        $RequiredErrorReason = null,
        $SelectorErrorReason = null,
        $SettingErrorReason = null,
        $SizeLimitErrorReason = null,
        $StatsQueryErrorReason = null,
        $StringLengthErrorReason = null,
        $TargetErrorReason = null
    ) {
        $this->AdErrorReason = $AdErrorReason;
        $this->AdExtensionErrorReason = $AdExtensionErrorReason;
        $this->AdExtensionOverrideErrorReason = $AdExtensionOverrideErrorReason;
        $this->AdGroupAdErrorReason = $AdGroupAdErrorReason;
        $this->AdGroupCriterionErrorReason = $AdGroupCriterionErrorReason;
        $this->AdGroupServiceErrorReason = $AdGroupServiceErrorReason;
        $this->AdxErrorReason = $AdxErrorReason;
        $this->AuthenticationErrorReason = $AuthenticationErrorReason;
        $this->AuthorizationErrorReason = $AuthorizationErrorReason;
        $this->BetaErrorReason = $BetaErrorReason;
        $this->BiddingErrorReason = $BiddingErrorReason;
        $this->BiddingErrorsReason = $BiddingErrorsReason;
        $this->BiddingTransitionErrorReason = $BiddingTransitionErrorReason;
        $this->BudgetErrorReason = $BudgetErrorReason;
        $this->BulkMutateJobErrorReason = $BulkMutateJobErrorReason;
        $this->CampaignAdExtensionErrorReason = $CampaignAdExtensionErrorReason;
        $this->CampaignCriterionErrorReason = $CampaignCriterionErrorReason;
        $this->CampaignErrorReason = $CampaignErrorReason;
        $this->ClientTermsErrorReason = $ClientTermsErrorReason;
        $this->CriterionErrorReason = $CriterionErrorReason;
        $this->DatabaseErrorReason = $DatabaseErrorReason;
        $this->DateErrorReason = $DateErrorReason;
        $this->DistinctErrorReason = $DistinctErrorReason;
        $this->EntityAccessDeniedReason = $EntityAccessDeniedReason;
        $this->EntityCountLimitExceededReason = $EntityCountLimitExceededReason;
        $this->EntityNotFoundReason = $EntityNotFoundReason;
        $this->FeedItemErrorReason = $FeedItemErrorReason;
        $this->ForwardCompatibilityErrorReason = $ForwardCompatibilityErrorReason;
        $this->IdErrorReason = $IdErrorReason;
        $this->ImageErrorReason = $ImageErrorReason;
        $this->InternalApiErrorReason = $InternalApiErrorReason;
        $this->JobErrorReason = $JobErrorReason;
        $this->MediaErrorReason = $MediaErrorReason;
        $this->NewEntityCreationErrorReason = $NewEntityCreationErrorReason;
        $this->NotEmptyErrorReason = $NotEmptyErrorReason;
        $this->NotWhitelistedErrorReason = $NotWhitelistedErrorReason;
        $this->NullErrorReason = $NullErrorReason;
        $this->OperationAccessDeniedReason = $OperationAccessDeniedReason;
        $this->OperatorErrorReason = $OperatorErrorReason;
        $this->PagingErrorReason = $PagingErrorReason;
        $this->PolicyViolationErrorReason = $PolicyViolationErrorReason;
        $this->QueryErrorReason = $QueryErrorReason;
        $this->QuotaCheckErrorReason = $QuotaCheckErrorReason;
        $this->QuotaErrorReason = $QuotaErrorReason;
        $this->RangeErrorReason = $RangeErrorReason;
        $this->RateExceededErrorReason = $RateExceededErrorReason;
        $this->ReadOnlyErrorReason = $ReadOnlyErrorReason;
        $this->RegionCodeErrorReason = $RegionCodeErrorReason;
        $this->RejectedErrorReason = $RejectedErrorReason;
        $this->RequestErrorReason = $RequestErrorReason;
        $this->RequiredErrorReason = $RequiredErrorReason;
        $this->SelectorErrorReason = $SelectorErrorReason;
        $this->SettingErrorReason = $SettingErrorReason;
        $this->SizeLimitErrorReason = $SizeLimitErrorReason;
        $this->StatsQueryErrorReason = $StatsQueryErrorReason;
        $this->StringLengthErrorReason = $StringLengthErrorReason;
        $this->TargetErrorReason = $TargetErrorReason;
    }
}