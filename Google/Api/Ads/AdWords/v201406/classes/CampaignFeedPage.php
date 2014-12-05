<?php


  /**
   * The result of a call to {@link CampaignFeedService#get}. Contains a list of
   * associations between campaign and feeds.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignFeedPage extends NullStatsPage
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "CampaignFeedPage";

    /**
     * @access public
     * @var CampaignFeed[]
     */
    public $entries;

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

      public function __construct($entries = null)
      {
          parent::__construct();
          $this->entries = $entries;
      }
  }
