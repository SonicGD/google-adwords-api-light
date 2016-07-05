<?php


/**
 * Object representing integer comparison operations. This is usually used within
 * a particular {@link SearchParameter} to specify the valid values requested for the specific
 * {@link Attribute}.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class LongComparisonOperation
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "LongComparisonOperation";

    /**
     * @access public
     * @var integer
     */
    public $minimum;

    /**
     * @access public
     * @var integer
     */
    public $maximum;

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

    public function __construct($minimum = null, $maximum = null)
    {
        $this->minimum = $minimum;
        $this->maximum = $maximum;
    }

}