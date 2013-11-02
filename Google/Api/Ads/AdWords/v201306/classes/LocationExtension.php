<?php



/**
 * Location based ad extension.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class LocationExtension extends AdExtension
{
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
        return "LocationExtension";
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