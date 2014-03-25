<?php


/**
 * A canonical condition.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ProductCanonicalCondition extends ProductDimension
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "ProductCanonicalCondition";

    /**
     * @access public
     * @var tnsProductCanonicalConditionCondition
     */
    public $condition;

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

    public function __construct($condition = null, $ProductDimensionType = null)
    {
        parent::__construct();
        $this->condition = $condition;
        $this->ProductDimensionType = $ProductDimensionType;
    }
}