<?php


/**
 * Information about an AdWords Express business.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ExpressBusiness
{
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
     * @var PhoneNumber
     */
    public $phoneNumber;

    /**
     * @access public
     * @var string
     */
    public $website;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/express/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "ExpressBusiness";
    }

    public function __construct(
        $id = null,
        $name = null,
        $status = null,
        $address = null,
        $geoPoint = null,
        $phoneNumber = null,
        $website = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->address = $address;
        $this->geoPoint = $geoPoint;
        $this->phoneNumber = $phoneNumber;
        $this->website = $website;
    }
}