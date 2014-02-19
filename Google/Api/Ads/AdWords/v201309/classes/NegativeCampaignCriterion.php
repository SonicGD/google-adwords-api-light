<?php


/**
 * A negative campaign criterion.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class NegativeCampaignCriterion extends CampaignCriterion
{
    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "NegativeCampaignCriterion";
    }

    public function __construct(
        $campaignId = null,
        $isNegative = null,
        $criterion = null,
        $bidModifier = null,
        $forwardCompatibilityMap = null,
        $CampaignCriterionType = null
    ) {
        parent::__construct();
        $this->campaignId = $campaignId;
        $this->isNegative = $isNegative;
        $this->criterion = $criterion;
        $this->bidModifier = $bidModifier;
        $this->forwardCompatibilityMap = $forwardCompatibilityMap;
        $this->CampaignCriterionType = $CampaignCriterionType;
    }
}