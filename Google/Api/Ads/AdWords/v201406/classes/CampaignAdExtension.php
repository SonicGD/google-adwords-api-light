<?php


  /**
   * Represents a campaign level ad extension. A campaign ad extension specifies
   * a campaign and an ad extension which can extend any ad under that campaign.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignAdExtension
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "CampaignAdExtension";

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var AdExtension
     */
    public $adExtension;

    /**
     * @access public
     * @var tnsCampaignAdExtensionStatus
     */
    public $status;

    /**
     * @access public
     * @var tnsCampaignAdExtensionApprovalStatus
     */
    public $approvalStatus;

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

      public function __construct($campaignId = null, $adExtension = null, $status = null, $approvalStatus = null)
      {
          $this->campaignId = $campaignId;
          $this->adExtension = $adExtension;
          $this->status = $status;
          $this->approvalStatus = $approvalStatus;
      }
  }
