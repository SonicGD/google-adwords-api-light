<?php


/**
 * CustomerFeeds are used to link a feed to the customer using a matching function,
 * making the feed's feed items available in the customer's ads for substitution.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class CustomerFeed
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "CustomerFeed";

    /**
     * @access public
     * @var integer
     */
    public $feedId;

    /**
     * @access public
     * @var Function
     */
    public $matchingFunction;

    /**
     * @access public
     * @var integer[]
     */
    public $placeholderTypes;

    /**
     * @access public
     * @var tnsCustomerFeedStatus
     */
    public $status;

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

    public function __construct($feedId = null, $matchingFunction = null, $placeholderTypes = null, $status = null)
    {
        $this->feedId = $feedId;
        $this->matchingFunction = $matchingFunction;
        $this->placeholderTypes = $placeholderTypes;
        $this->status = $status;
    }

}