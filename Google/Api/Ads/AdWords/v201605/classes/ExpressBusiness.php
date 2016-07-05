<?php


/**
 * Information about an AdWords Express business.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class ExpressBusiness
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201605";
    const XSI_TYPE = "ExpressBusiness";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsExpressBusinessStatus
     */
    public $status;

    /**
     * @access public
     * @var string
     */
    public $website;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($id = null, $name = null, $status = null, $website = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->website = $website;
    }

}