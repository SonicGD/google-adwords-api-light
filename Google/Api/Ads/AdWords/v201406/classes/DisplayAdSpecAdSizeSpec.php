<?php


  /**
   * Specification for an ad size. This specification allows customization by
   * display options for more fine-grained control over returns, so that
   * customers can associate ad options with specific sizes. For example,
   * suppose the customer in general would like to see placements with
   * {@code DisplayOption.STANDARD} and {@code DisplayOption.POP_UNDER} -
   * except for 300x250 ads which should only be STANDARD. The customer would
   * create a {@code DisplayAdSpec} with {@code DisplayOption.STANDARD} and
   * {@code DisplayOption.POP_UNDER}, and also send in an {@code AdSizeSpec}
   * with {@code width} of 300, {@code} height of 250, and {@code displayOptionFilter}
   * set to {@code DisplayOption.STANDARD}.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class DisplayAdSpecAdSizeSpec
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201406";
    const XSI_TYPE = "DisplayAdSpec.AdSizeSpec";

    /**
     * @access public
     * @var integer
     */
    public $width;

    /**
     * @access public
     * @var integer
     */
    public $height;

    /**
     * @access public
     * @var tnsDisplayAdSpecActivationOption[]
     */
    public $activationOptionFilter;

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

    public function __construct($width = null, $height = null, $activationOptionFilter = null)
    {
      $this->width = $width;
      $this->height = $height;
      $this->activationOptionFilter = $activationOptionFilter;
    }

  }
