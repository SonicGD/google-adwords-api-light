<?php


/**
 * Represents the traffic estimate result for a single keyword.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class KeywordEstimate extends Estimate
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201509";
    const XSI_TYPE = "KeywordEstimate";

    /**
     * @access public
     * @var integer
     */
    public $criterionId;

    /**
     * @access public
     * @var StatsEstimate
     */
    public $min;

    /**
     * @access public
     * @var StatsEstimate
     */
    public $max;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($criterionId = null, $min = null, $max = null, $EstimateType = null)
    {
        parent::__construct();
        $this->criterionId = $criterionId;
        $this->min = $min;
        $this->max = $max;
        $this->EstimateType = $EstimateType;
    }

}