<?php


  /**
   * Invalid GeoLocation object.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class InvalidGeoLocation extends GeoLocation
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "InvalidGeoLocation";

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

      public function __construct($geoPoint = null, $address = null, $encodedLocation = null, $GeoLocationType = null)
      {
          parent::__construct();
          $this->geoPoint = $geoPoint;
          $this->address = $address;
          $this->encodedLocation = $encodedLocation;
          $this->GeoLocationType = $GeoLocationType;
      }
  }
