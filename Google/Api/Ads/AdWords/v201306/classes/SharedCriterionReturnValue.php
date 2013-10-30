<?php

namespace Google\Api\Ads\AdWords\v201306\classes;



/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class SharedCriterionReturnValue extends ListReturnValue {
  /**
   * @access public
   * @var SharedCriterion[]
   */
  public $value;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "SharedCriterionReturnValue";
  }

  public function __construct($value = NULL, $ListReturnValueType = NULL) {
    parent::__construct();
    $this->value = $value;
    $this->ListReturnValueType = $ListReturnValueType;
  }}