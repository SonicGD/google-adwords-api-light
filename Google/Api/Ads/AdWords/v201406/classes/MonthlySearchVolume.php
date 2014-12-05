<?php


  /**
   * A keyword response value representing search volume for a single month. An
   * instance with a {@code null} count is valid, indicating that the information
   * is unavailable.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class MonthlySearchVolume
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201406";
      const XSI_TYPE = "MonthlySearchVolume";

    /**
     * @access public
     * @var integer
     */
    public $year;

    /**
     * @access public
     * @var integer
     */
    public $month;

    /**
     * @access public
     * @var integer
     */
    public $count;

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

      public function __construct($year = null, $month = null, $count = null)
      {
          $this->year = $year;
          $this->month = $month;
          $this->count = $count;
      }
  }
