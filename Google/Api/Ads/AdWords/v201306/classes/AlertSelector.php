<?php

namespace Google\Api\Ads\AdWords\v201306\classes;



/**
 * Selector for querying for alerts.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AlertSelector {
  /**
   * @access public
   * @var AlertQuery
   */
  public $query;

  /**
   * @access public
   * @var Paging
   */
  public $paging;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/mcm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "AlertSelector";
  }

  public function __construct($query = NULL, $paging = NULL) {
    $this->query = $query;
    $this->paging = $paging;
  }}