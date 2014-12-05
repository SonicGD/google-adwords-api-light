<?php


  /**
   * The base class of all return types of the table service.
   *
   *
   *
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class DataEntry
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "DataEntry";

    /**
     * @access public
     * @var string
     */
    public $DataEntryType;
      private $_parameterMap = array(
      "DataEntry.Type" => "DataEntryType",
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

      public function __construct($DataEntryType = null)
      {
          $this->DataEntryType = $DataEntryType;
      }
  }
