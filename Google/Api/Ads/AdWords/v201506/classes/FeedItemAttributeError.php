<?php


/**
 * Contains validation error details for a set of feed attributes.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class FeedItemAttributeError
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201506";
    const XSI_TYPE = "FeedItemAttributeError";

    /**
     * @access public
     * @var integer[]
     */
    public $feedAttributeIds;

    /**
     * @access public
     * @var integer
     */
    public $validationErrorCode;

    /**
     * @access public
     * @var string
     */
    public $errorInformation;

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

    public function __construct($feedAttributeIds = null, $validationErrorCode = null, $errorInformation = null)
    {
        $this->feedAttributeIds = $feedAttributeIds;
        $this->validationErrorCode = $validationErrorCode;
        $this->errorInformation = $errorInformation;
    }

}