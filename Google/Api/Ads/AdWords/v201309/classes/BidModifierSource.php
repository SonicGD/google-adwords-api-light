<?php


/**
 * Enumerates possible sources for bid modifier.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class BidModifierSource
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
        return "BidModifierSource";
    }

    public function __construct()
    {
    }
}