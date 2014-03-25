<?php


/**
 * Represents the mobile application to be targeted.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 *
 *
 *
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class MobileApplication extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "MobileApplication";

    /**
     * @access public
     * @var string
     */
    public $appId;

    /**
     * @access public
     * @var string
     */
    public $displayName;

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

    public function __construct($appId = null, $displayName = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->appId = $appId;
        $this->displayName = $displayName;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }
}