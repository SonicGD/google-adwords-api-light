<?php


/**
 * A Feed which contains data used to populate ad customizers.
 *
 * <p>An AdCustomizerFeed is a view of a regular Feed, but with some simplifications intended to
 * support the most common use cases.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class AdCustomizerFeed
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "AdCustomizerFeed";

    /**
     * @access public
     * @var integer
     */
    public $feedId;

    /**
     * @access public
     * @var string
     */
    public $feedName;

    /**
     * @access public
     * @var tnsFeedStatus
     */
    public $feedStatus;

    /**
     * @access public
     * @var AdCustomizerFeedAttribute[]
     */
    public $feedAttributes;

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

    public function __construct($feedId = null, $feedName = null, $feedStatus = null, $feedAttributes = null)
    {
        $this->feedId = $feedId;
        $this->feedName = $feedName;
        $this->feedStatus = $feedStatus;
        $this->feedAttributes = $feedAttributes;
    }
}
