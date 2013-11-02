<?php



/**
 * The reasons for the job handling error.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class JobErrorReason
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
        return "JobError.Reason";
    }

    public function __construct()
    {
    }
}