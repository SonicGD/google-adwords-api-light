<?php


/**
 * Object representing integer comparison operations. This is usually used within
 * a particular
 * {@link com.google.ads.api.services.targetingideas.search.SearchParameter} to
 * specify the valid values requested for the specific
 * {@link com.google.ads.api.services.common.optimization.attributes.Attribute}.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class LongComparisonOperation
{
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
        return "LongComparisonOperation";
    }

    public function __construct($minimum = null, $maximum = null)
    {
        $this->minimum = $minimum;
        $this->maximum = $maximum;
    }
}