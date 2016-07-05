<?php

/**
 *
 * PHP version 5
 *
 * Created by PhpStorm.
 * User: Георгий
 * Date: 30.10.13
 * Time: 22:44
 */
require_once 'vendor/autoload.php';
$user = new AdWordsUser();

$user->SetClientCustomerId(0);
$campaignService = $user->GetService('CampaignService', 'v201605');
$selector = new Selector();
$selector->fields = [
    'Id',
    'Name',
    'Status',
    'ServingStatus',
    'StartDate',
    'EndDate',
    'Amount',
    'BudgetId',
    'TargetGoogleSearch',
    'TargetSearchNetwork',
    'TargetContentNetwork',
    'TargetPartnerSearchNetwork',
];

$result = $campaignService->get($selector);
var_dump($result);
