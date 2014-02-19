<?php


/**
 * Bidding strategy cannot override ad group or campaign bidding strategy.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class BiddingErrorsReason
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
        return "BiddingErrors.Reason";
    }

    public function __construct()
    {
    }
}