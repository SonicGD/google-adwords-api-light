<?php

/**
 * Contains a subset of adgroup bid modifiers resulting from a call to
 * {@link AdGroupBidModifierService#get}.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdGroupBidModifierPage extends Page
{
    /**
     * @access public
     * @var AdGroupBidModifier[]
     */
    public $entries;

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
        return "AdGroupBidModifierPage";
    }

    public function __construct($entries = null, $totalNumEntries = null, $PageType = null)
    {
        parent::__construct();
        $this->entries = $entries;
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }
}