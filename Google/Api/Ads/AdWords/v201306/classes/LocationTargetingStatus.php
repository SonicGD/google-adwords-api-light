<?php



/**
 * Enum that represents the different Targeting Status values for a Location criterion.
 *
 *
 *
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class LocationTargetingStatus
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
        return "LocationTargetingStatus";
    }

    public function __construct()
    {
    }
}