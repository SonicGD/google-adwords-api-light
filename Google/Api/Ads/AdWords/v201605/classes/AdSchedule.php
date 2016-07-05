<?php


/**
 * Represents an AdSchedule Criterion.
 * It is a variant of {@code AdSchedule} that also keeps track of the time zone.
 * Note: one single day may not have more than six AdSchedules after the time zone adjustment.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class AdSchedule extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201605";
    const XSI_TYPE = "AdSchedule";

    /**
     * @access public
     * @var cmDayOfWeek
     */
    public $dayOfWeek;

    /**
     * @access public
     * @var integer
     */
    public $startHour;

    /**
     * @access public
     * @var cmMinuteOfHour
     */
    public $startMinute;

    /**
     * @access public
     * @var integer
     */
    public $endHour;

    /**
     * @access public
     * @var cmMinuteOfHour
     */
    public $endMinute;

    /**
     * @access public
     * @var string
     */
    public $timeZone;

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

    public function __construct(
        $dayOfWeek = null,
        $startHour = null,
        $startMinute = null,
        $endHour = null,
        $endMinute = null,
        $timeZone = null,
        $id = null,
        $type = null,
        $CriterionType = null
    ) {
        parent::__construct();
        $this->dayOfWeek = $dayOfWeek;
        $this->startHour = $startHour;
        $this->startMinute = $startMinute;
        $this->endHour = $endHour;
        $this->endMinute = $endMinute;
        $this->timeZone = $timeZone;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}