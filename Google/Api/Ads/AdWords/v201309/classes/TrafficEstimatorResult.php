<?php


/**
 * Contains results of traffic estimation request.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TrafficEstimatorResult
{
    /**
     * @access public
     * @var CampaignEstimate[]
     */
    public $campaignEstimates;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/o/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "TrafficEstimatorResult";
    }

    public function __construct($campaignEstimates = null)
    {
        $this->campaignEstimates = $campaignEstimates;
    }
}