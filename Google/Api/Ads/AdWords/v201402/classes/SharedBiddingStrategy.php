<?php


/**
 * Bidding strategies store shared bidding configuration data and are account-level objects.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class SharedBiddingStrategy
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "SharedBiddingStrategy";

    /**
     * @access public
     * @var BiddingScheme
     */
    public $biddingScheme;

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
     * @var tnsSharedBiddingStrategyBiddingStrategyStatus
     */
    public $status;

    /**
     * @access public
     * @var tnsBiddingStrategyType
     */
    public $type;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($biddingScheme = null, $id = null, $name = null, $status = null, $type = null)
    {
        $this->biddingScheme = $biddingScheme;
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->type = $type;
    }
}