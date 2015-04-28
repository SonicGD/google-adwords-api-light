<?php


/**
 * Contains a subset of feed items resulting from a {@link FeedItemService#get} call.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class FeedItemPage extends NullStatsPage
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "FeedItemPage";

    /**
     * @access public
     * @var FeedItem[]
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
