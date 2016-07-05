<?php


/**
 * Bidding strategies store shared bidding configuration data and are account-level objects.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class SharedBiddingStrategy
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
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
     * @access public
     * @var tnsBiddingStrategySystemStatus
     */
    public $systemStatus;

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
        $biddingScheme = null,
        $id = null,
        $name = null,
        $status = null,
        $type = null,
        $systemStatus = null
    ) {
        $this->biddingScheme = $biddingScheme;
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->type = $type;
        $this->systemStatus = $systemStatus;
    }

}