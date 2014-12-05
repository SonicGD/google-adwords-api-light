<?php


  /**
   * For selecting jobs whose information will be returned from a get method call
   * of a job service.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class JobSelector
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "JobSelector";

    /**
     * @access public
     * @var boolean
     */
    public $includeHistory;

    /**
     * @access public
     * @var boolean
     */
    public $includeStats;

    /**
     * @access public
     * @var string
     */
    public $JobSelectorType;
      private $_parameterMap = array(
      "JobSelector.Type" => "JobSelectorType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (!isset($this->_parameterMap[$var])) {
            return null;
        }

        return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap()
    {
        return $this->_parameterMap;
    }

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

      public function __construct($includeHistory = null, $includeStats = null, $JobSelectorType = null)
      {
          $this->includeHistory = $includeHistory;
          $this->includeStats = $includeStats;
          $this->JobSelectorType = $JobSelectorType;
      }
  }
