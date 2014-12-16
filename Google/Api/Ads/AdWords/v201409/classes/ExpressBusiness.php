<?php



  /**
   * Information about an AdWords Express business.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ExpressBusiness {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201409";
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
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $name = null, $status = null, $address = null, $geoPoint = null, $phoneNumber = null, $website = null) {
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->address = $address;
      $this->geoPoint = $geoPoint;
      $this->phoneNumber = $phoneNumber;
      $this->website = $website;
    }

  }