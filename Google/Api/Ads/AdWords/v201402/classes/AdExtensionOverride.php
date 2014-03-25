<?php


/**
 * Represents an ad level ad extension override. An ad extension override
 * specifies the ad extension that must be used if the ad is served with
 * any ad extension data.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdExtensionOverride
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "AdExtensionOverride";

    /**
     * @access public
     * @var integer
     */
    public $adId;

    /**
     * @access public
     * @var AdExtension
     */
    public $adExtension;

    /**
     * @access public
     * @var OverrideInfo
     */
    public $overrideInfo;

    /**
     * @access public
     * @var tnsAdExtensionOverrideStatus
     */
    public $status;

    /**
     * @access public
     * @var tnsAdExtensionOverrideApprovalStatus
     */
    public $approvalStatus;

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

    public function __construct(
        $adId = null,
        $adExtension = null,
        $overrideInfo = null,
        $status = null,
        $approvalStatus = null
    ) {
        $this->adId = $adId;
        $this->adExtension = $adExtension;
        $this->overrideInfo = $overrideInfo;
        $this->status = $status;
        $this->approvalStatus = $approvalStatus;
    }
}