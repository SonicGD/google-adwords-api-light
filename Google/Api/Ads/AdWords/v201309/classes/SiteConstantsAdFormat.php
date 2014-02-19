<?php


/**
 * Enumerates the ad formats which can be reported in search results.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class SiteConstantsAdFormat
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
        return "SiteConstants.AdFormat";
    }

    public function __construct()
    {
    }
}