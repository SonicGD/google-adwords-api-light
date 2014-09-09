<?php


  /**
   * Represents an id indicating a grouping of Ads under some heuristic.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdUnionId
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdUnionId";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $AdUnionIdType;
    private $_parameterMap = array(
      "AdUnionId.Type" => "AdUnionIdType",
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

    public function __construct($id = null, $AdUnionIdType = null)
    {
      $this->id = $id;
      $this->AdUnionIdType = $AdUnionIdType;
    }

  }
