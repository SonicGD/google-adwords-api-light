<?php


/**
 * A basic job policy.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class BulkMutateJobPolicy
{
    /**
     * @access public
     * @var integer[]
     */
    public $prerequisiteJobIds;

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
        return "BulkMutateJobPolicy";
    }

    public function __construct($prerequisiteJobIds = null)
    {
        $this->prerequisiteJobIds = $prerequisiteJobIds;
    }
}