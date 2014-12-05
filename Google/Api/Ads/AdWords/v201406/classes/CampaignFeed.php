<?php


  /**
   * CampaignFeeds are used to link a feed to a campaign using a matching function,
   * making the feed's feed items available in the campaign's ads for substitution.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CampaignFeed
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "CampaignFeed";

    /**
     * @access public
     * @var integer
     */
    public $feedId;

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var Function
     */
    public $matchingFunction;

    /**
     * @access public
     * @var integer[]
     */
    public $placeholderTypes;

    /**
     * @access public
     * @var tnsCampaignFeedStatus
     */
    public $status;

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

      public function __construct($feedId = null, $campaignId = null, $matchingFunction = null, $placeholderTypes = null, $status = null)
      {
          $this->feedId = $feedId;
          $this->campaignId = $campaignId;
          $this->matchingFunction = $matchingFunction;
          $this->placeholderTypes = $placeholderTypes;
          $this->status = $status;
      }
  }
