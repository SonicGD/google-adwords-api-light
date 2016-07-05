<?php


/**
 * Represents a large mutation job.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class BatchJob
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "BatchJob";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var tnsBatchJobStatus
     */
    public $status;

    /**
     * @access public
     * @var ProgressStats
     */
    public $progressStats;

    /**
     * @access public
     * @var TemporaryUrl
     */
    public $uploadUrl;

    /**
     * @access public
     * @var TemporaryUrl
     */
    public $downloadUrl;

    /**
     * @access public
     * @var BatchJobProcessingError[]
     */
    public $processingErrors;

    /**
     * @access public
     * @var integer
     */
    public $diskUsageQuotaBalance;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct(
        $id = null,
        $status = null,
        $progressStats = null,
        $uploadUrl = null,
        $downloadUrl = null,
        $processingErrors = null,
        $diskUsageQuotaBalance = null
    ) {
        $this->id = $id;
        $this->status = $status;
        $this->progressStats = $progressStats;
        $this->uploadUrl = $uploadUrl;
        $this->downloadUrl = $downloadUrl;
        $this->processingErrors = $processingErrors;
        $this->diskUsageQuotaBalance = $diskUsageQuotaBalance;
    }

}