<?php



/**
 * Operations for adding/updating Budget entities.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class BudgetOperation extends Operation {
  /**
   * @access public
   * @var Budget
   */
  public $operand;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "BudgetOperation";
  }

  public function __construct($operand = NULL, $operator = NULL, $OperationType = NULL) {
    parent::__construct();
    $this->operand = $operand;
    $this->operator = $operator;
    $this->OperationType = $OperationType;
  }}