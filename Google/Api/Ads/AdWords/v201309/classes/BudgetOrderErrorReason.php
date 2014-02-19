<?php


/**
 * Customer is not whitelisted for new billing.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class BudgetOrderErrorReason
{
    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/billing/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "BudgetOrderError.Reason";
    }

    public function __construct()
    {
    }
}