<?php


/**
 * {@link DisplayType} implementation for Flash display ads.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class FlashDisplayType
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
        return "FlashDisplayType";
    }

    public function __construct()
    {
    }
}