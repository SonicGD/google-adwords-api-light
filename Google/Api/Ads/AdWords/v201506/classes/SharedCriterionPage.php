<?php


/**
 * Contains a list of shared set criteria results filtered and sorted
 * as specified in the {@link SharedCriterionService#get} call
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class SharedCriterionPage extends Page
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201506";
    const XSI_TYPE = "SharedCriterionPage";

    /**
     * @access public
     * @var SharedCriterion[]
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

    public function __construct($entries = null, $totalNumEntries = null, $PageType = null)
    {
        parent::__construct();
        $this->entries = $entries;
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }

}