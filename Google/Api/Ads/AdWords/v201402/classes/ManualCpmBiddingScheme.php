<?php


/**
 * Manual impression based bidding where user pays per thousand impressions.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ManualCpmBiddingScheme extends BiddingScheme
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "ManualCpmBiddingScheme";

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

    public function __construct($BiddingSchemeType = null)
    {
        parent::__construct();
        $this->BiddingSchemeType = $BiddingSchemeType;
    }
}