<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
 *
 *
 *
 * Performs the given {@link ExpressBusinessOperation}.
 *
 * @param operations list of unique operations; the same AdWords Express business cannot be
 *                   specified in more than one operation
 *
 * @return the updated AdWords Express businesses
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ExpressBusinessServiceMutate
{
    /**
     * @access public
     * @var ExpressBusinessOperation[]
     */
    public $operations;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/express/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "";
    }

    public function __construct($operations = null)
    {
        $this->operations = $operations;
    }
}