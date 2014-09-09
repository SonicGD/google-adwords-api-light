<?php


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
   *
   *
   *
   * Adds, removes criteria in a shared set.
   *
   * @param operations A list of unique operations
   * @return The list of updated SharedCriterion, returned in the same order as the
   * {@code operations} array.
   * @throws ApiException
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class SharedCriterionServiceMutate
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var SharedCriterionOperation[]
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
