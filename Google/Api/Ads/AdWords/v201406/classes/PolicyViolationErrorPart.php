<?php


  /**
   * Points to a substring within an ad field or criterion.
   *
   *
   *
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class PolicyViolationErrorPart
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "PolicyViolationError.Part";

    /**
     * @access public
     * @var integer
     */
    public $index;

    /**
     * @access public
     * @var integer
     */
    public $length;

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

    public function __construct($index = null, $length = null)
    {
      $this->index = $index;
      $this->length = $length;
    }

  }
