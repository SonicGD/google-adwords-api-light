<?php



/**
 * Represents a Mobile Device Criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * <span class="constraint Beta">This is a beta feature.</span>
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class MobileDevice extends Criterion
{
    /**
     * @access public
     * @var string
     */
    public $deviceName;

    /**
     * @access public
     * @var string
     */
    public $manufacturerName;

    /**
     * @access public
     * @var tnsMobileDeviceDeviceType
     */
    public $deviceType;

    /**
     * @access public
     * @var string
     */
    public $operatingSystemName;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201306";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "MobileDevice";
    }

    public function __construct(
        $deviceName = null,
        $manufacturerName = null,
        $deviceType = null,
        $operatingSystemName = null,
        $id = null,
        $type = null,
        $CriterionType = null
    ) {
        parent::__construct();
        $this->deviceName = $deviceName;
        $this->manufacturerName = $manufacturerName;
        $this->deviceType = $deviceType;
        $this->operatingSystemName = $operatingSystemName;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }
}