<?php


/**
 * An abstract Conversion base class.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ConversionTracker
{
    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsConversionTrackerStatus
     */
    public $status;

    /**
     * @access public
     * @var tnsConversionTrackerCategory
     */
    public $category;

    /**
     * @access public
     * @var ConversionTrackerStats
     */
    public $stats;

    /**
     * @access public
     * @var integer
     */
    public $viewthroughLookbackWindow;

    /**
     * @access public
     * @var boolean
     */
    public $isProductAdsChargeable;

    /**
     * @access public
     * @var integer
     */
    public $productAdsChargeableConversionWindow;

    /**
     * @access public
     * @var integer
     */
    public $ctcLookbackWindow;

    /**
     * @access public
     * @var string
     */
    public $ConversionTrackerType;

    private $_parameterMap = array(
        "ConversionTracker.Type" => "ConversionTrackerType",
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
     * @param $var Variable name to get.
     *
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (!array_key_exists($var, $this->_parameterMap)) {
            return null;
        } else {
            return $this->{$this->_parameterMap[$var]};
        }
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
        return "https://adwords.google.com/api/adwords/cm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "ConversionTracker";
    }

    public function __construct(
        $id = null,
        $name = null,
        $status = null,
        $category = null,
        $stats = null,
        $viewthroughLookbackWindow = null,
        $isProductAdsChargeable = null,
        $productAdsChargeableConversionWindow = null,
        $ctcLookbackWindow = null,
        $ConversionTrackerType = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->category = $category;
        $this->stats = $stats;
        $this->viewthroughLookbackWindow = $viewthroughLookbackWindow;
        $this->isProductAdsChargeable = $isProductAdsChargeable;
        $this->productAdsChargeableConversionWindow = $productAdsChargeableConversionWindow;
        $this->ctcLookbackWindow = $ctcLookbackWindow;
        $this->ConversionTrackerType = $ConversionTrackerType;
    }
}