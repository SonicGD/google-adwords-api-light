<?php


/**
 * Possible statusus of this business.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ExpressBusinessStatus
{
    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/express/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "ExpressBusiness.Status";
    }

    public function __construct()
    {
    }
}