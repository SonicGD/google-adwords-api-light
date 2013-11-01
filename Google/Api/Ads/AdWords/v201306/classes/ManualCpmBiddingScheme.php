<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Manual impression based bidding where user pays per thousand impressions.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ManualCpmBiddingScheme extends BiddingScheme
{
    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201306";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "";
    }

    public function __construct($BiddingSchemeType = null)
    {
        parent::__construct();
        $this->BiddingSchemeType = $BiddingSchemeType;
    }
}