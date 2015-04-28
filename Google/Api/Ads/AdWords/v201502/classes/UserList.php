<?php


/**
 * Represents a UserList object that is sent over the wire.
 * This is a list of users an account may target.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class UserList
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201502";
    const XSI_TYPE = "UserList";

  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var boolean
   */
  public $isReadOnly;

  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var string
   */
  public $description;

  /**
   * @access public
   * @var tnsUserListMembershipStatus
   */
  public $status;

  /**
   * @access public
   * @var string
   */
  public $integrationCode;

  /**
   * @access public
   * @var tnsAccessReason
   */
  public $accessReason;

  /**
   * @access public
   * @var tnsAccountUserListStatus
   */
  public $accountUserListStatus;

  /**
   * @access public
   * @var integer
   */
  public $membershipLifeSpan;

  /**
   * @access public
   * @var integer
   */
  public $size;

  /**
   * @access public
   * @var tnsSizeRange
   */
  public $sizeRange;

  /**
   * @access public
   * @var integer
   */
  public $sizeForSearch;

  /**
   * @access public
   * @var tnsSizeRange
   */
  public $sizeRangeForSearch;

  /**
   * @access public
   * @var tnsUserListType
   */
  public $listType;

  /**
   * @access public
   * @var string
   */
  public $UserListType;
    private $_parameterMap = [
      "UserList.Type" => "UserListType",
  ];

  /**
   * Provided for setting non-php-standard named variables
   * @param $var   Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value)
  {
      $this->{$this->_parameterMap[$var]} = $value;
  }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get
   * @return mixed Variable value
   */
  public function __get($var)
  {
      if (!isset($this->_parameterMap[$var])) {
          return null;
      }

      return $this->{$this->_parameterMap[$var]};
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap()
  {
      return $this->_parameterMap;
  }

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
      $isReadOnly = null,
      $name = null,
      $description = null,
      $status = null,
      $integrationCode = null,
      $accessReason = null,
      $accountUserListStatus = null,
      $membershipLifeSpan = null,
      $size = null,
      $sizeRange = null,
      $sizeForSearch = null,
      $sizeRangeForSearch = null,
      $listType = null,
      $UserListType = null
  ) {
        $this->id = $id;
        $this->isReadOnly = $isReadOnly;
        $this->name = $name;
        $this->description = $description;
        $this->status = $status;
        $this->integrationCode = $integrationCode;
        $this->accessReason = $accessReason;
        $this->accountUserListStatus = $accountUserListStatus;
        $this->membershipLifeSpan = $membershipLifeSpan;
        $this->size = $size;
        $this->sizeRange = $sizeRange;
        $this->sizeForSearch = $sizeForSearch;
        $this->sizeRangeForSearch = $sizeRangeForSearch;
        $this->listType = $listType;
        $this->UserListType = $UserListType;
    }
}
