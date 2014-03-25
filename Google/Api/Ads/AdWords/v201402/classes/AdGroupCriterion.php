<?php


/**
 * Represents a criterion in an ad group, used with AdGroupCriterionService.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupCriterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "AdGroupCriterion";

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var tnsCriterionUse
     */
    public $criterionUse;

    /**
     * @access public
     * @var Criterion
     */
    public $criterion;

    /**
     * @access public
     * @var String_StringMapEntry[]
     */
    public $forwardCompatibilityMap;

    /**
     * @access public
     * @var string
     */
    public $AdGroupCriterionType;
    private $_parameterMap = array(
        "AdGroupCriterion.Type" => "AdGroupCriterionType",
    );

    /**
     * Provided for setting non-php-standard named variables
     *
     * @param $var   Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     *
     * @param $var Variable name to get
     *
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (!isset($this->_parameterMap[$var])) {
            return null;
        }
        return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     *
     * @return array parameter map
     */
    protected function getParameterMap()
    {
        return $this->_parameterMap;
    }

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct(
        $adGroupId = null,
        $criterionUse = null,
        $criterion = null,
        $forwardCompatibilityMap = null,
        $AdGroupCriterionType = null
    ) {
        $this->adGroupId = $adGroupId;
        $this->criterionUse = $criterionUse;
        $this->criterion = $criterion;
        $this->forwardCompatibilityMap = $forwardCompatibilityMap;
        $this->AdGroupCriterionType = $AdGroupCriterionType;
    }
}