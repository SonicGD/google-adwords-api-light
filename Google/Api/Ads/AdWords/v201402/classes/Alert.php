<?php


/**
 * Alert for a single client. Triggering events are grouped by {@link AlertType} into the same alert
 * with multiple {@link Details}.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Alert
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201402";
    const XSI_TYPE = "Alert";

    /**
     * @access public
     * @var tnsAlertSeverity
     */
    public $alertSeverity;

    /**
     * @access public
     * @var tnsAlertType
     */
    public $alertType;

    /**
     * @access public
     * @var integer
     */
    public $clientCustomerId;

    /**
     * @access public
     * @var Detail[]
     */
    public $details;

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

    public function __construct($alertSeverity = null, $alertType = null, $clientCustomerId = null, $details = null)
    {
        $this->alertSeverity = $alertSeverity;
        $this->alertType = $alertType;
        $this->clientCustomerId = $clientCustomerId;
        $this->details = $details;
    }
}