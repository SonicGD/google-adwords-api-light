<?php


/**
 * A Feed identifies a source of data and its schema. The data for the Feed can either be
 * user-entered via the FeedItemService or system-generated, in which case the data is provided
 * automatically.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class Feed
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "Feed";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var FeedAttribute[]
     */
    public $attributes;

    /**
     * @access public
     * @var tnsFeedStatus
     */
    public $status;

    /**
     * @access public
     * @var tnsFeedOrigin
     */
    public $origin;

    /**
     * @access public
     * @var SystemFeedGenerationData
     */
    public $systemFeedGenerationData;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct(
        $id = null,
        $name = null,
        $attributes = null,
        $status = null,
        $origin = null,
        $systemFeedGenerationData = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->attributes = $attributes;
        $this->status = $status;
        $this->origin = $origin;
        $this->systemFeedGenerationData = $systemFeedGenerationData;
    }

}