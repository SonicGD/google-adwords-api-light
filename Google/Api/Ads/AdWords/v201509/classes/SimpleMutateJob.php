<?php


/**
 * A mutation job, which was submitted using
 * {@link MutateJobService#mutate}, and will execute asynchronously
 * sometime after submission.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class SimpleMutateJob extends Job
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "SimpleMutateJob";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var tnsBasicJobStatus
     */
    public $status;

    /**
     * @access public
     * @var JobEvent[]
     */
    public $history;

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
        $history = null,
        $failureReason = null,
        $stats = null,
        $billingSummary = null,
        $JobType = null
    ) {
        parent::__construct();
        $this->id = $id;
        $this->status = $status;
        $this->history = $history;
        $this->failureReason = $failureReason;
        $this->stats = $stats;
        $this->billingSummary = $billingSummary;
        $this->JobType = $JobType;
    }

}