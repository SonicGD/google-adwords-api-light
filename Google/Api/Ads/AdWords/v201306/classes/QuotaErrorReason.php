<?php

/**
 * The reasons for the quota error.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class QuotaErrorReason
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
        return "QuotaError.Reason";
    }

    public function __construct()
    {
    }
}