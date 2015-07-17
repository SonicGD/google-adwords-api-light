<?php


/**
 * A filter for selecting change history data for a customer.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class CustomerSyncSelector
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201506";
    const XSI_TYPE = "CustomerSyncSelector";

    /**
     * @access public
     * @var DateTimeRange
     */
    public $dateTimeRange;

    /**
     * @access public
     * @var integer[]
     */
    public $campaignIds;

    /**
     * @access public
     * @var integer[]
     */
    public $feedIds;

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

    public function __construct($dateTimeRange = null, $campaignIds = null, $feedIds = null)
    {
        $this->dateTimeRange = $dateTimeRange;
        $this->campaignIds = $campaignIds;
        $this->feedIds = $feedIds;
    }

}