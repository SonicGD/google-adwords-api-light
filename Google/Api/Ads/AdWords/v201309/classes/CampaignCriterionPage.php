<?php



/**
 * Contains a subset of campaign criteria resulting from a call to
 * {@link CampaignCriterionService#get}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CampaignCriterionPage extends Page {
  /**
   * @access public
   * @var CampaignCriterion[]
   */
  public $entries;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "CampaignCriterionPage";
  }

  public function __construct($entries = NULL, $totalNumEntries = NULL, $PageType = NULL) {
    parent::__construct();
    $this->entries = $entries;
    $this->totalNumEntries = $totalNumEntries;
    $this->PageType = $PageType;
  }}