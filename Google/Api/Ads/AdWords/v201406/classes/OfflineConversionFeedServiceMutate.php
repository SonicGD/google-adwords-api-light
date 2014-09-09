<?php


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD.</span>
   *
   *
   *
   * Reports an offline conversion for each entry in {@code operations}.
   * <p>
   * This bulk operation does not have any transactional guarantees. Some operations can succeed
   * while others fail.
   *
   * @param operations A list of offline conversion feed operations.
   * @return The list of offline conversion feed results (in the same order as the operations).
   * @throws {@link ApiException} if problems occurred while applying offline conversions.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class OfflineConversionFeedServiceMutate
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var OfflineConversionFeedOperation[]
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
