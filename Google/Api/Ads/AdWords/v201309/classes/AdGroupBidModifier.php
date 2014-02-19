<?php


/**
 * Represents an adgroup level bid modifier override for campaign level criterion
 * bid modifier values.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupBidModifier
{
    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var Criterion
     */
    public $criterion;

    /**
     * @access public
     * @var double
     */
    public $bidModifier;

    /**
     * @access public
     * @var tnsBidModifierSource
     */
    public $bidModifierSource;

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
        return "AdGroupBidModifier";
    }

    public function __construct(
        $campaignId = null,
        $adGroupId = null,
        $criterion = null,
        $bidModifier = null,
        $bidModifierSource = null
    ) {
        $this->campaignId = $campaignId;
        $this->adGroupId = $adGroupId;
        $this->criterion = $criterion;
        $this->bidModifier = $bidModifier;
        $this->bidModifierSource = $bidModifierSource;
    }
}