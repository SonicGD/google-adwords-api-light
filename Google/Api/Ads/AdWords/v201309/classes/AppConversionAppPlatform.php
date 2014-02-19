<?php


/**
 * App platform for the AppConversionTracker.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AppConversionAppPlatform
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
        return "AppConversion.AppPlatform";
    }

    public function __construct()
    {
    }
}