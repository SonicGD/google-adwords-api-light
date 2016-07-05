<?php


/**
 * An error that has occurred while asynchronously processing the creation or promotion of a trial.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class TrialAsyncError
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "TrialAsyncError";

    /**
     * @access public
     * @var integer
     */
    public $trialId;

    /**
     * @access public
     * @var ApiError
     */
    public $asyncError;

    /**
     * @access public
     * @var integer
     */
    public $trialCampaignId;

    /**
     * @access public
     * @var integer
     */
    public $trialAdGroupId;

    /**
     * @access public
     * @var integer
     */
    public $baseCampaignId;

    /**
     * @access public
     * @var integer
     */
    public $baseAdGroupId;

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
        $trialId = null,
        $asyncError = null,
        $trialCampaignId = null,
        $trialAdGroupId = null,
        $baseCampaignId = null,
        $baseAdGroupId = null
    ) {
        $this->trialId = $trialId;
        $this->asyncError = $asyncError;
        $this->trialCampaignId = $trialCampaignId;
        $this->trialAdGroupId = $trialAdGroupId;
        $this->baseCampaignId = $baseCampaignId;
        $this->baseAdGroupId = $baseAdGroupId;
    }

}