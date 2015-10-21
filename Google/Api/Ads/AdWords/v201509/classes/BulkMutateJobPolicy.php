<?php


/**
 * A basic job policy.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class BulkMutateJobPolicy
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "BulkMutateJobPolicy";

    /**
     * @access public
     * @var integer[]
     */
    public $prerequisiteJobIds;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($prerequisiteJobIds = null)
    {
        $this->prerequisiteJobIds = $prerequisiteJobIds;
    }

}