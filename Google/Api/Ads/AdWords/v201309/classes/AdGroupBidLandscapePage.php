<?php


/**
 * Contains a subset of {@link AdGroupBidLandscape} objects resulting from the
 * filtering and paging of
 * {@link com.google.ads.api.services.campaignmgmt.data.DataService#getAdGroupBidLandscape}
 * call.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupBidLandscapePage extends NoStatsPage
{
    /**
     * @access public
     * @var AdGroupBidLandscape[]
     */
    public $entries;

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
        return "AdGroupBidLandscapePage";
    }

    public function __construct($entries = null, $totalNumEntries = null, $PageType = null)
    {
        parent::__construct();
        $this->entries = $entries;
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }
}