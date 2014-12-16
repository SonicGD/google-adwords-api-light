<?php



  /**
   * Contains a subset of adgroup criteria resulting from a
   * {@link AdGroupCriterionService#get} call.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class AdGroupCriterionPage extends Page {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "AdGroupCriterionPage";

    /**
     * @access public
     * @var AdGroupCriterion[]
     */
    public $entries;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($entries = null, $totalNumEntries = null, $PageType = null) {
      parent::__construct();
      $this->entries = $entries;
      $this->totalNumEntries = $totalNumEntries;
      $this->PageType = $PageType;
    }

  }