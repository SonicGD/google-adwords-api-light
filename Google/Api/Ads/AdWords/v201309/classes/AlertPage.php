<?php


/**
 * Contains a subset of {@link Alert}s resulting from the filtering and paging,
 * returned by {@link AlertService#get(AlertSelector)}.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AlertPage extends NoStatsPage
{
    /**
     * @access public
     * @var Alert[]
     */
    public $entries;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/mcm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "AlertPage";
    }

    public function __construct($entries = null, $totalNumEntries = null, $PageType = null)
    {
        parent::__construct();
        $this->entries = $entries;
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }
}