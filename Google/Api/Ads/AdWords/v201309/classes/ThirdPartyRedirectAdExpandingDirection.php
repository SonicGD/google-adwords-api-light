<?php


/**
 * Allowed expanding directions for ads that are expandable.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ThirdPartyRedirectAdExpandingDirection
{
    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "ThirdPartyRedirectAd.ExpandingDirection";
    }

    public function __construct()
    {
    }
}