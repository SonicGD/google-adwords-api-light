<?php


/**
 * Represents the estimate results for a single ad group.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class AdGroupEstimate extends Estimate
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "AdGroupEstimate";

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var KeywordEstimate[]
     */
    public $keywordEstimates;

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

    public function __construct($adGroupId = null, $keywordEstimates = null, $EstimateType = null)
    {
        parent::__construct();
        $this->adGroupId = $adGroupId;
        $this->keywordEstimates = $keywordEstimates;
        $this->EstimateType = $EstimateType;
    }

}