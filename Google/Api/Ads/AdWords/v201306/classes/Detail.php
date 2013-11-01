<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Detail refers to a single event or condition that triggered its owning {@link Alert}.
 * Multiple details can cause the same {@code Alert} to occur.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Detail
{
    /**
     * @access public
     * @var string
     */
    public $triggerTime;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/mcm/v201306";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "";
    }

    public function __construct($triggerTime = null)
    {
        $this->triggerTime = $triggerTime;
    }
}