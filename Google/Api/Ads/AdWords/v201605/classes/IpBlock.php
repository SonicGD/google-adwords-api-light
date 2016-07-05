<?php


/**
 * Criterion used for IP exclusions. We allow:
 *
 * <ul>
 * <li>IPv4 and IPv6 addresses</li>
 * <li>individual addresses (192.168.0.1)</li>
 * <li>CIDR IP address blocks (e.g., 1.2.3.0/24, 2001:db8::/32).
 * </ul>
 *
 * <p> Note that for a CIDR IP address block, the specified IP address portion must be properly
 * truncated (i.e. all the host bits must be zero) or the input is considered malformed.
 * For example, "1.2.3.0/24" is accepted but "1.2.3.4/24" is not.
 * Similarly, for IPv6, "2001:db8::/32" is accepted whereas "2001:db8::1/32" is not.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class IpBlock extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "IpBlock";

    /**
     * @access public
     * @var string
     */
    public $ipAddress;

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

    public function __construct($ipAddress = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->ipAddress = $ipAddress;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}