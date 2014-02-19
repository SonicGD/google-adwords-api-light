<?php


/**
 * Data associated with an advertiser experiment for an AdGroupAd
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupAdExperimentData
{
    /**
     * @access public
     * @var integer
     */
    public $experimentId;

    /**
     * @access public
     * @var tnsExperimentDeltaStatus
     */
    public $experimentDeltaStatus;

    /**
     * @access public
     * @var tnsExperimentDataStatus
     */
    public $experimentDataStatus;

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
        return "AdGroupAdExperimentData";
    }

    public function __construct($experimentId = null, $experimentDeltaStatus = null, $experimentDataStatus = null)
    {
        $this->experimentId = $experimentId;
        $this->experimentDeltaStatus = $experimentDeltaStatus;
        $this->experimentDataStatus = $experimentDataStatus;
    }
}