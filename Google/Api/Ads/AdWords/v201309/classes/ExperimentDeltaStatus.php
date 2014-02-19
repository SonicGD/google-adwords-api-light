<?php


/**
 * Status of an entity denoting its type of experimental change in a campaign.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ExperimentDeltaStatus
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
        return "ExperimentDeltaStatus";
    }

    public function __construct()
    {
    }
}