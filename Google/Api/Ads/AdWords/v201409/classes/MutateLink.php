<?php



  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET, ADD.</span>
   * 
   * 
   * 
   * Modifies the ManagedCustomer forest. These actions are possible (categorized by
   * Operator + Link Status):
   * 
   * <ul>
   * <li>ADD + PENDING:   manager extends invitations
   * <li>SET + CANCELLED: manager rescinds invitations
   * <li>SET + INACTIVE:  manager/client terminates links
   * <li>SET + ACTIVE:    client accepts invitations
   * <li>SET + REFUSED:   client declines invitations
   * </ul>
   * 
   * @param operations the list of operations
   * @return results for the given operations
   * @throws ApiException with a {@link ManagedCustomerServiceError}
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class MutateLink {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201409";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var LinkOperation[]
     */
    public $operations;

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

    public function __construct($operations = null) {
      $this->operations = $operations;
    }

  }