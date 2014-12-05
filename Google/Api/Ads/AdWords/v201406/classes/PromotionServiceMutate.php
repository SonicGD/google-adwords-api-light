<?php


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
   *
   *
   *
   * Performs the given {@link PromotionOperation}.
   * @param operations list of unique operations; the same AdWords Express promotion cannot be
   * specified in more than one operation
   * @return the updated AdWords Express promotion
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class PromotionServiceMutate
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201406";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var PromotionOperation[]
     */
    public $operations;

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

      public function __construct($operations = null)
      {
          $this->operations = $operations;
      }
  }
