<?php


  /**
   * Class representing a experiment for the ExperimentService.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Experiment
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "Experiment";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var integer
     */
    public $controlId;

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsExperimentStatus
     */
    public $status;

    /**
     * @access public
     * @var tnsExperimentServingStatus
     */
    public $servingStatus;

    /**
     * @access public
     * @var integer
     */
    public $queryPercentage;

    /**
     * @access public
     * @var string
     */
    public $startDateTime;

    /**
     * @access public
     * @var string
     */
    public $endDateTime;

    /**
     * @access public
     * @var string
     */
    public $lastModifiedDateTime;

    /**
     * @access public
     * @var ExperimentSummaryStats
     */
    public $experimentSummaryStats;

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

    public function __construct($id = null, $controlId = null, $campaignId = null, $name = null, $status = null, $servingStatus = null, $queryPercentage = null, $startDateTime = null, $endDateTime = null, $lastModifiedDateTime = null, $experimentSummaryStats = null)
    {
      $this->id = $id;
      $this->controlId = $controlId;
      $this->campaignId = $campaignId;
      $this->name = $name;
      $this->status = $status;
      $this->servingStatus = $servingStatus;
      $this->queryPercentage = $queryPercentage;
      $this->startDateTime = $startDateTime;
      $this->endDateTime = $endDateTime;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->experimentSummaryStats = $experimentSummaryStats;
    }

  }
