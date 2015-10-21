<?php


/**
 * Location based ad extension.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class LocationExtension extends AdExtension
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "LocationExtension";

    /**
     * @access public
     * @var Address
     */
    public $address;

    /**
     * @access public
     * @var GeoPoint
     */
    public $geoPoint;

    /**
     * @access public
     * @var base64Binary
     */
    public $encodedLocation;

    /**
     * @access public
     * @var string
     */
    public $companyName;

    /**
     * @access public
     * @var string
     */
    public $phoneNumber;

    /**
     * @access public
     * @var tnsLocationExtensionSource
     */
    public $source;

    /**
     * @access public
     * @var integer
     */
    public $iconMediaId;

    /**
     * @access public
     * @var integer
     */
    public $imageMediaId;

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

    public function __construct(
        $address = null,
        $geoPoint = null,
        $encodedLocation = null,
        $companyName = null,
        $phoneNumber = null,
        $source = null,
        $iconMediaId = null,
        $imageMediaId = null,
        $id = null,
        $AdExtensionType = null
    ) {
        parent::__construct();
        $this->address = $address;
        $this->geoPoint = $geoPoint;
        $this->encodedLocation = $encodedLocation;
        $this->companyName = $companyName;
        $this->phoneNumber = $phoneNumber;
        $this->source = $source;
        $this->iconMediaId = $iconMediaId;
        $this->imageMediaId = $imageMediaId;
        $this->id = $id;
        $this->AdExtensionType = $AdExtensionType;
    }

}