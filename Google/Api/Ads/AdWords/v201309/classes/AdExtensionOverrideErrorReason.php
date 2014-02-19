<?php


/**
 * Cannot override an ad that is already overriden with an adextension
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdExtensionOverrideErrorReason
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
        return "AdExtensionOverrideError.Reason";
    }

    public function __construct()
    {
    }
}