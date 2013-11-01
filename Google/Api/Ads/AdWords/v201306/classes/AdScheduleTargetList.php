<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * List of ad schedule targets.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdScheduleTargetList extends TargetList
{
    /**
     * @access public
     * @var AdScheduleTarget[]
     */
    public $targets;

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
        return "";
    }

    public function __construct($targets = null, $campaignId = null, $TargetListType = null)
    {
        parent::__construct();
        $this->targets = $targets;
        $this->campaignId = $campaignId;
        $this->TargetListType = $TargetListType;
    }
}