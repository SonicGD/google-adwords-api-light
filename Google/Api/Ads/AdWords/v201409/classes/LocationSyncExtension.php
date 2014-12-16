<?php



  /**
   * Local business center(LBC) sync extension that ties a LBC account with a campaign.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class LocationSyncExtension extends AdExtension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "LocationSyncExtension";

    /**
     * @access public
     * @var string
     */
    public $email;

    /**
     * @access public
     * @var OAuthInfo
     */
    public $oAuthInfo;

    /**
     * @access public
     * @var integer
     */
    public $iconMediaId;

    /**
     * @access public
     * @var boolean
     */
    public $shouldSyncUrl;

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

    public function __construct($email = null, $oAuthInfo = null, $iconMediaId = null, $shouldSyncUrl = null, $id = null, $AdExtensionType = null) {
      parent::__construct();
      $this->email = $email;
      $this->oAuthInfo = $oAuthInfo;
      $this->iconMediaId = $iconMediaId;
      $this->shouldSyncUrl = $shouldSyncUrl;
      $this->id = $id;
      $this->AdExtensionType = $AdExtensionType;
    }

  }