<?php


/**
 * Contains a list of criterion lists resulting from the filtering and paging of
 * {@link SharedSetService#get} call.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class SharedSetPage extends NullStatsPage
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201506";
    const XSI_TYPE = "SharedSetPage";

    /**
     * @access public
     * @var SharedSet[]
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