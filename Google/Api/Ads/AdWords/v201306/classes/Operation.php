<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Operation
{
    /**
     * @access public
     * @var tnsOperator
     */
    public $operator;

    /**
     * @access public
     * @var string
     */
    public $OperationType;

    private $_parameterMap = array(
        "Operation.Type" => "OperationType",
    );

    /**
     * Provided for setting non-php-standard named variables
     *
     * @param $var   Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     *
     * @param $var Variable name to get.
     *
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (!array_key_exists($var, $this->_parameterMap)) {
            return null;
        } else {
            return $this->{$this->_parameterMap[$var]};
        }
    }

    /**
     * Provided for getting non-php-standard named variables
     *
     * @return array parameter map
     */
    protected function getParameterMap()
    {
        return $this->_parameterMap;
    }

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201306";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "";
    }

    public function __construct($operator = null, $OperationType = null)
    {
        $this->operator = $operator;
        $this->OperationType = $OperationType;
    }
}