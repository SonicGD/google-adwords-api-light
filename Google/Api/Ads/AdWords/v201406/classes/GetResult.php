<?php


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Query mutation results, of a {@code COMPLETED} job.
   * <p>Use a {@link JobSelector} to query and return either a
   * {@link BulkMutateResult} or a {@link SimpleMutateResult}. Submit only one job ID
   * at a time.</p>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class GetResult
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var JobSelector
     */
    public $selector;

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

    public function __construct($selector = null)
    {
      $this->selector = $selector;
    }

  }
