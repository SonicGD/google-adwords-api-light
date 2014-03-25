<?php


/**
 * Immutable structure to hold an ad schedule target.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdScheduleTarget extends Target
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "AdScheduleTarget";

    /**
     * @access public
     * @var tnsDayOfWeek
     */
    public $dayOfWeek;

    /**
     * @access public
     * @var integer
     */
    public $startHour;

    /**
     * @access public
     * @var tnsMinuteOfHour
     */
    public $startMinute;

    /**
     * @access public
     * @var integer
     */
    public $endHour;

    /**
     * @access public
     * @var tnsMinuteOfHour
     */
    public $endMinute;

    /**
     * @access public
     * @var double
     */
    public $bidMultiplier;

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
        $dayOfWeek = null,
        $startHour = null,
        $startMinute = null,
        $endHour = null,
        $endMinute = null,
        $bidMultiplier = null,
        $TargetType = null
    ) {
        parent::__construct();
        $this->dayOfWeek = $dayOfWeek;
        $this->startHour = $startHour;
        $this->startMinute = $startMinute;
        $this->endHour = $endHour;
        $this->endMinute = $endMinute;
        $this->bidMultiplier = $bidMultiplier;
        $this->TargetType = $TargetType;
    }
}