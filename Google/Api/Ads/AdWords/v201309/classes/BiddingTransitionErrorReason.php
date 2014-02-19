<?php


/**
 * Reason for bidding transition error.
 * It is used by capability service as denial reasons, for bidding transition
 * capability.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class BiddingTransitionErrorReason
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
        return "BiddingTransitionError.Reason";
    }

    public function __construct()
    {
    }
}