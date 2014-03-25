<?php


/**
 * Criterion used for IP exclusions. We allow:
 *
 * <ul>
 * <li>IPv4 and IPv6 addresses</li>
 * <li>individual addresses (192.168.0.1)</li>
 * <li>masks for individual addresses (192.168.0.1/32)</li>
 * <li>masks for Class C networks (192.168.0.1/24)</li>
 * </ul>
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class IpBlock extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "IpBlock";

    /**
     * @access public
     * @var string
     */
    public $ipAddress;

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

    public function __construct($ipAddress = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->ipAddress = $ipAddress;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }
}