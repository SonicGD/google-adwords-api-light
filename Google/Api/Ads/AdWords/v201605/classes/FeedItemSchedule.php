<?php


/**
 * Represents a FeedItem schedule, which specifies a time interval on a given day
 * when the feed item may serve. The FeedItemSchedule times are in the account's time zone.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class FeedItemSchedule
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "FeedItemSchedule";

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
        $endMinute = null
    ) {
        $this->dayOfWeek = $dayOfWeek;
        $this->startHour = $startHour;
        $this->startMinute = $startMinute;
        $this->endHour = $endHour;
        $this->endMinute = $endMinute;
    }

}