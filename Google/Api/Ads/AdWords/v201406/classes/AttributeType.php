<?php


  /**
   * Represents the type of
   * {@link com.google.ads.api.services.common.optimization.attributes.Attribute}.
   * <p><b>{@link IdeaType} KEYWORD supports the following {@link AttributeType}s:</b><br/>
   * <ul><li>{@link #AVERAGE_CPC}</li>
   * <li>{@link #CATEGORY_PRODUCTS_AND_SERVICES}</li>
   * <li>{@link #COMPETITION}</li>
   * <li>{@link #CRITERION}</li>
   * <li>{@link #EXTRACTED_FROM_WEBPAGE}</li>
   * <li>{@link #IDEA_TYPE}</li>
   * <li>{@link #KEYWORD_TEXT}</li>
   * <li>{@link #SEARCH_VOLUME}</li>
   * <li>{@link #TARGETED_MONTHLY_SEARCHES}</li>
   * </ul>
   * <p><b>{@link IdeaType} PLACEMENT supports the following {@link AttributeType}s:</b><br/>
   * <ul><li>{@link #AD_TYPE_SPEC}</li>
   * <li>{@link #APPROX_CONTENT_IMPRESSIONS_PER_DAY}</li>
   * <li>{@link #CRITERION}</li>
   * <li>{@link #IDEA_TYPE}</li>
   * <li>{@link #IN_STREAM_AD_INFO}</li>
   * <li>{@link #PLACEMENT_CATEGORY}</li>
   * <li>{@link #PLACEMENT_NAME}</li>
   * <li>{@link #PLACEMENT_TYPE}</li>
   * <li>{@link #SAMPLE_URL}</li>
   * </ul>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AttributeType
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201406";
    const XSI_TYPE = "AttributeType";

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

    public function __construct()
    {
    }

  }
