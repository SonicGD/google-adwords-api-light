<?php



/**
 * Represents the type of the request.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class RequestType
{
    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/o/v201306";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "RequestType";
    }

    public function __construct()
    {
    }
}