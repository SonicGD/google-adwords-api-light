<?php


/**
 * Enums for all the reasons an error can be thrown to the user during
 * a {@link ReportDefinitionService#mutate(java.util.List)} operation.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ReportDefinitionErrorReason
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
        return "ReportDefinitionError.Reason";
    }

    public function __construct()
    {
    }
}