<?php


/**
 * Contains a list of associations between campaigns and shared sets
 * resulting from the filtering and paging of
 * {@link CampaignSharedSetService#get} call.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class CampaignSharedSetPage extends NullStatsPage
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "CampaignSharedSetPage";

    /**
     * @access public
     * @var CampaignSharedSet[]
     */
    public $entries;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($entries = null)
    {
        parent::__construct();
        $this->entries = $entries;
    }
}
