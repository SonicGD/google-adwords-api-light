<?php
require_once 'Address.php';
require_once 'ApiError.php';
require_once 'ApplicationException.php';
require_once 'AuthenticationError.php';
require_once 'AuthorizationError.php';
require_once 'CampaignCriterion.php';
require_once 'CampaignCriterionError.php';
require_once 'ClientTermsError.php';
require_once 'Criterion.php';
require_once 'CriterionError.php';
require_once 'DatabaseError.php';
require_once 'DateRange.php';
require_once 'DistinctError.php';
require_once 'EntityCountLimitExceeded.php';
require_once 'EntityNotFound.php';
require_once 'FeedFunction.php';
require_once 'FunctionError.php';
require_once 'Gender.php';
require_once 'GeoPoint.php';
require_once 'IdError.php';
require_once 'InternalApiError.php';
require_once 'IpBlock.php';
require_once 'Keyword.php';
require_once 'Language.php';
require_once 'ListReturnValue.php';
require_once 'Location.php';
require_once 'MobileAppCategory.php';
require_once 'MobileApplication.php';
require_once 'MobileDevice.php';
require_once 'NegativeCampaignCriterion.php';
require_once 'NewEntityCreationError.php';
require_once 'NotEmptyError.php';
require_once 'NullError.php';
require_once 'FunctionArgumentOperand.php';
require_once 'OperatingSystemVersion.php';
require_once 'Operation.php';
require_once 'OperationAccessDenied.php';
require_once 'OperatorError.php';
require_once 'OrderBy.php';
require_once 'Page.php';
require_once 'Paging.php';
require_once 'PagingError.php';
require_once 'Placement.php';
require_once 'PlacesOfInterestOperand.php';
require_once 'Platform.php';
require_once 'Predicate.php';
require_once 'Product.php';
require_once 'ProductCondition.php';
require_once 'ProductConditionOperand.php';
require_once 'ProductDimension.php';
require_once 'ProductOfferId.php';
require_once 'ProductSalesChannel.php';
require_once 'ProductScope.php';
require_once 'ProductType.php';
require_once 'ProductTypeFull.php';
require_once 'Proximity.php';
require_once 'QueryError.php';
require_once 'QuotaCheckError.php';
require_once 'RangeError.php';
require_once 'RateExceededError.php';
require_once 'ReadOnlyError.php';
require_once 'RegionCodeError.php';
require_once 'RejectedError.php';
require_once 'RequestError.php';
require_once 'RequiredError.php';
require_once 'Selector.php';
require_once 'SelectorError.php';
require_once 'LocationGroups.php';
require_once 'SizeLimitError.php';
require_once 'SoapRequestHeader.php';
require_once 'SoapResponseHeader.php';
require_once 'StringLengthError.php';
require_once 'String_StringMapEntry.php';
require_once 'CriterionUserInterest.php';
require_once 'CriterionUserList.php';
require_once 'Vertical.php';
require_once 'AdxErrorReason.php';
require_once 'AgeRangeAgeRangeType.php';
require_once 'AuthenticationErrorReason.php';
require_once 'AuthorizationErrorReason.php';
require_once 'CampaignCriterionErrorReason.php';
require_once 'ClientTermsErrorReason.php';
require_once 'ConstantOperandConstantType.php';
require_once 'ConstantOperandUnit.php';
require_once 'ContentLabelType.php';
require_once 'CriterionType.php';
require_once 'CriterionErrorReason.php';
require_once 'DatabaseErrorReason.php';
require_once 'DayOfWeek.php';
require_once 'DistinctErrorReason.php';
require_once 'EntityCountLimitExceededReason.php';
require_once 'EntityNotFoundReason.php';
require_once 'FunctionOperator.php';
require_once 'FunctionErrorReason.php';
require_once 'GenderGenderType.php';
require_once 'IdErrorReason.php';
require_once 'IncomeTier.php';
require_once 'InternalApiErrorReason.php';
require_once 'KeywordMatchType.php';
require_once 'LocationTargetingStatus.php';
require_once 'MinuteOfHour.php';
require_once 'MobileDeviceDeviceType.php';
require_once 'NewEntityCreationErrorReason.php';
require_once 'NotEmptyErrorReason.php';
require_once 'NullErrorReason.php';
require_once 'OperatingSystemVersionOperatorType.php';
require_once 'OperationAccessDeniedReason.php';
require_once 'Operator.php';
require_once 'OperatorErrorReason.php';
require_once 'PagingErrorReason.php';
require_once 'PlacesOfInterestOperandCategory.php';
require_once 'PredicateOperator.php';
require_once 'ProductCanonicalConditionCondition.php';
require_once 'ProductDimensionType.php';
require_once 'ProximityDistanceUnits.php';
require_once 'QueryErrorReason.php';
require_once 'QuotaCheckErrorReason.php';
require_once 'RangeErrorReason.php';
require_once 'RateExceededErrorReason.php';
require_once 'ReadOnlyErrorReason.php';
require_once 'RegionCodeErrorReason.php';
require_once 'RejectedErrorReason.php';
require_once 'RequestErrorReason.php';
require_once 'RequiredErrorReason.php';
require_once 'SelectorErrorReason.php';
require_once 'SizeLimitErrorReason.php';
require_once 'SortOrder.php';
require_once 'StringLengthErrorReason.php';
require_once 'CriterionUserListMembershipStatus.php';
require_once 'CampaignCriterionServiceGet.php';
require_once 'CampaignCriterionServiceGetResponse.php';
require_once 'CampaignCriterionServiceMutate.php';
require_once 'CampaignCriterionServiceMutateResponse.php';
require_once 'Query.php';
require_once 'QueryResponse.php';
require_once 'AdSchedule.php';
require_once 'AdxError.php';
require_once 'AgeRange.php';
require_once 'ApiException.php';
require_once 'CampaignCriterionOperation.php';
require_once 'CampaignCriterionPage.php';
require_once 'CampaignCriterionReturnValue.php';
require_once 'Carrier.php';
require_once 'ConstantOperand.php';
require_once 'ContentLabel.php';
require_once 'GeoTargetOperand.php';
require_once 'IncomeOperand.php';
require_once 'LocationExtensionOperand.php';
require_once 'ProductAdwordsGrouping.php';
require_once 'ProductAdwordsLabels.php';
require_once 'ProductBiddingCategory.php';
require_once 'ProductBrand.php';
require_once 'ProductCanonicalCondition.php';
require_once 'ProductLegacyCondition.php';
require_once 'ProductCustomAttribute.php';
