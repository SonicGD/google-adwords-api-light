<?php


/**
 * Represents a criterion belonging to a shared set.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class SharedCriterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201506";
    const XSI_TYPE = "SharedCriterion";

    /**
     * @access public
     * @var integer
     */
    public $sharedSetId;

    /**
     * @access public
     * @var Criterion
     */
    public $criterion;

    /**
     * @access public
     * @var boolean
     */
    public $negative;

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

    public function __construct($sharedSetId = null, $criterion = null, $negative = null)
    {
        $this->sharedSetId = $sharedSetId;
        $this->criterion = $criterion;
        $this->negative = $negative;
    }

}