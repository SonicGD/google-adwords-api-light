<?php


/**
 * Interface for campaign trial entities. A trial is an experiment created by an advertiser from
 * changes in a draft.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class Trial
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "Trial";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var integer
     */
    public $baseCampaignId;

    /**
     * @access public
     * @var integer
     */
    public $draftId;

    /**
     * @access public
     * @var integer
     */
    public $budgetId;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var string
     */
    public $startDate;

    /**
     * @access public
     * @var string
     */
    public $endDate;

    /**
     * @access public
     * @var integer
     */
    public $trafficSplitPercent;

    /**
     * @access public
     * @var tnsTrialStatus
     */
    public $status;

    /**
     * @access public
     * @var integer
     */
    public $trialCampaignId;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct(
        $id = null,
        $baseCampaignId = null,
        $draftId = null,
        $budgetId = null,
        $name = null,
        $startDate = null,
        $endDate = null,
        $trafficSplitPercent = null,
        $status = null,
        $trialCampaignId = null
    ) {
        $this->id = $id;
        $this->baseCampaignId = $baseCampaignId;
        $this->draftId = $draftId;
        $this->budgetId = $budgetId;
        $this->name = $name;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->trafficSplitPercent = $trafficSplitPercent;
        $this->status = $status;
        $this->trialCampaignId = $trialCampaignId;
    }

}