<?php
/**
 * PHP class stubs for downloading reports.
 *
 * PHP version 5
 *
 * Copyright 2015, Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    GoogleApiAdsAdWordsUtil
 * @subpackage v201605
 * @category   WebServices
 * @copyright  2015, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 */

require_once "../../v201605/classes/ApiError.php";
require_once "../../v201605/classes/Selector.php";
require_once "../../v201605/classes/Predicate.php";
require_once "../../v201605/classes/PredicateOperator.php";
require_once "../../v201605/classes/DateRange.php";
require_once "../../v201605/classes/OrderBy.php";
require_once "../../v201605/classes/Paging.php";
require_once "../../v201605/classes/SortOrder.php";
require_once "../../v201605/classes/ReportDefinitionReportType.php";

if (!class_exists("ReportDownloadError", false)) {
  /**
   * Specifies why and how report download contains errors.
   */
  class ReportDownloadError {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "";

    /**
     * @var ApiError[]
     */
    public $ApiError;

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

    public function __construct($ApiError = null) {
      $this->ApiError = $ApiError;
    }
  }
}

if (!class_exists("ReportDefinition", false)) {
  /**
   * Represents a report definition.
   */
  class ReportDefinition {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "ReportDefinition";

    /**
       * @var integer
     */
    public $id;

    /**
       * @var Selector
     */
    public $selector;

    /**
       * @var string
     */
    public $reportName;

    /**
       * @var tnsReportDefinitionReportType
     */
    public $reportType;

    /**
       * @var boolean
     */
    public $hasAttachment;

    /**
       * @var tnsReportDefinitionDateRangeType
     */
    public $dateRangeType;

    /**
       * @var tnsDownloadFormat
     */
    public $downloadFormat;

    /**
       * @var string
     */
    public $creationTime;

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

    public function __construct(
        $id = null,
        $selector = null,
        $reportName = null,
        $reportType = null,
        $hasAttachment = null,
        $dateRangeType = null,
        $downloadFormat = null,
        $creationTime = null
    ) {
      $this->id = $id;
      $this->selector = $selector;
      $this->reportName = $reportName;
      $this->reportType = $reportType;
      $this->hasAttachment = $hasAttachment;
      $this->dateRangeType = $dateRangeType;
      $this->downloadFormat = $downloadFormat;
      $this->creationTime = $creationTime;
    }
  }
}

if (!class_exists("ReportDefinitionDateRangeType", false)) {
  /**
   * Enums for date range of report.
   */
  class ReportDefinitionDateRangeType {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "ReportDefinition.DateRangeType";

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

    public function __construct() {}
  }
}

if (!class_exists("DownloadFormat", false)) {
  /**
   * Enum class that describes the supported formats for content downloads.
   * The order mimics the order in which download options are presented in the
   * legacy report center.
   */
  class DownloadFormat {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "DownloadFormat";

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

    public function __construct() {
      if(get_parent_class('DownloadFormat')) parent::__construct();
    }
  }
}
