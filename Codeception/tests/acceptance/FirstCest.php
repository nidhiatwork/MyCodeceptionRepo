<?php
class FirstCest 
{
    public function homePageCheck(AcceptanceTester $I)
    {
$I->amOnPage('/');
$I->maximizeWindow();
$I->fillField('//input[@id="lst-ib"]', 'nidhi bhushan');
$I->click('//*[@name="btnK"]');
$I->seeInTitle("nidhi bhushan - Google Search");
    }
}