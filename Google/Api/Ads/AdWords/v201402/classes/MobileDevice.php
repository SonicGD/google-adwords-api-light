<?php


/**
 * Represents a Mobile Device Criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class MobileDevice extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "MobileDevice";

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