<?php



  /**
   * Represents a criterion for targeting paid apps.
   * <p>A criterion of this type can only be created using an ID.
   * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class AppPaymentModel extends Criterion {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "AppPaymentModel";

    /**
     * @access public
     * @var tnsAppPaymentModelAppPaymentModelType
     */
    public $appPaymentModelType;

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

    public function __construct($appPaymentModelType = null, $id = null, $type = null, $CriterionType = null) {
      parent::__construct();
      $this->appPaymentModelType = $appPaymentModelType;
      $this->id = $id;
      $this->type = $type;
      $this->CriterionType = $CriterionType;
    }

  }