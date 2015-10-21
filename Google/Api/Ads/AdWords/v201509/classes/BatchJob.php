<?php


/**
 * Represents a large mutation job.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class BatchJob
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
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

    public function __construct(
        $id = null,
        $status = null,
        $progressStats = null,
        $uploadUrl = null,
        $downloadUrl = null,
        $processingErrors = null
    ) {
        $this->id = $id;
        $this->status = $status;
        $this->progressStats = $progressStats;
        $this->uploadUrl = $uploadUrl;
        $this->downloadUrl = $downloadUrl;
        $this->processingErrors = $processingErrors;
    }

}