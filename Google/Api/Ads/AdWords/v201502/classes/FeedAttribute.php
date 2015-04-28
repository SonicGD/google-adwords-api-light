<?php


/**
 * FeedAttributes define the types of data expected to be present in a Feed. A single FeedAttribute
 * specifies the expected type of the FeedItemAttributes with the same FeedAttributeId. Optionally,
 * a FeedAttribute can be marked as being part of a FeedItem's unique key.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class FeedAttribute
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "FeedAttribute";

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
     * @var tnsFeedAttributeType
     */
    public $type;

    /**
     * @access public
     * @var boolean
     */
    public $isPartOfKey;

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

    public function __construct($id = null, $name = null, $type = null, $isPartOfKey = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->isPartOfKey = $isPartOfKey;
    }
}
