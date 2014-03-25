<?php



/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Returns the available report fields for a given report type.
 * 
 * @param reportType The type of report.
 * @return The list of available report fields. Each
 * {@link ReportDefinitionField} encapsulates the field name, the
 * field data type, and the enum values (if the field's type is
 * {@code enum}).
 * @throws ApiException if a problem occurred while fetching the
 * ReportDefinitionField information.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class GetReportFields {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var tnsReportDefinitionReportType
   */
  public $reportType;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reportType = null) {
    $this->reportType = $reportType;
  }
}