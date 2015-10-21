<?php


/**
 * Manages the labels associated with an AdGroupAd.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class AdGroupAdLabel
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "AdGroupAdLabel";

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var integer
     */
    public $adId;

    /**
     * @access public
     * @var integer
     */
    public $labelId;

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

    public function __construct($adGroupId = null, $adId = null, $labelId = null)
    {
        $this->adGroupId = $adGroupId;
        $this->adId = $adId;
        $this->labelId = $labelId;
    }

}