<?php


/**
 * Average cost-per-acquisition (targetCPA) bid type.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ConversionOptimizerBiddingSchemeBidType
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
        return "ConversionOptimizerBiddingScheme.BidType";
    }

    public function __construct()
    {
    }
}