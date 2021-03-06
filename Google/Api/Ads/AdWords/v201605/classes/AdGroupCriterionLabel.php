<?php


/**
 * Manages the labels associated with an AdGroupCriterion.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class AdGroupCriterionLabel
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "AdGroupCriterionLabel";

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var integer
     */
    public $criterionId;

    /**
     * @access public
     * @var integer
     */
    public $labelId;

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

    public function __construct($adGroupId = null, $criterionId = null, $labelId = null)
    {
        $this->adGroupId = $adGroupId;
        $this->criterionId = $criterionId;
        $this->labelId = $labelId;
    }

}