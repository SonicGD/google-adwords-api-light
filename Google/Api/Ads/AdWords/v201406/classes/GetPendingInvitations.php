<?php


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns the pending invitations for the customer IDs in the selector.
   * @param selector the manager customer ids (inviters) or the client customer ids (invitees)
   * @throws ApiException when there is at least one error with the request
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class GetPendingInvitations
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201406";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var PendingInvitationSelector
     */
    public $selector;

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

    public function __construct($selector = null)
    {
      $this->selector = $selector;
    }

  }
