<?php


/**
 * The result of a call to {@link CampaignFeedService#mutate}.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CampaignFeedReturnValue extends ListReturnValue
{
    /**
     * @access public
     * @var CampaignFeed[]
     */
    public $value;

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
        return "CampaignFeedReturnValue";
    }

    public function __construct($value = null, $ListReturnValueType = null)
    {
        parent::__construct();
        $this->value = $value;
        $this->ListReturnValueType = $ListReturnValueType;
    }
}