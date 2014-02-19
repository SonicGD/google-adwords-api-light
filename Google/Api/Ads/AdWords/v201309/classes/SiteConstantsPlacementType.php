<?php


/**
 * A placement request and response value indicating the type of site or other medium
 * (for example, a web page, in a feed, in a video) where ads will appear.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class SiteConstantsPlacementType
{
    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/o/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "SiteConstants.PlacementType";
    }

    public function __construct()
    {
    }
}