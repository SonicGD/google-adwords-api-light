<?php


/**
 * Contains a subset of labels resulting from the filtering and paging of the
 * {@link LabelService#get} call.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class LabelPage extends NoStatsPage
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "LabelPage";

    /**
     * @access public
     * @var Label[]
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