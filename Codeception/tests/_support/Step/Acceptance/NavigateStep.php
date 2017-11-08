<?php

namespace Step\Acceptance;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class NavigateStep extends \Codeception\Actor
{
    use \_generated\AcceptanceTesterActions;

   /**
     * @Given user is on google page
     */
     public function userIsOnGooglePage()
     {
        $I = $this;
        $I->amOnPage('/');
        $I->maximizeWindow();
     }

    /**
     * @When user clicks on lucky button
     */
     public function userClicksOnLuckyButton()
     {
       $I = $this;         
       $I->click('//*[@name="btnI"]');
     }

    /**
     * @Then User should be able to see the Doodles on the page
     */
     public function userShouldBeAbleToSeeTheDoodlesOnThePage()
     {
        $I = $this;
        $I->seeInTitle("Google Doodles");
     }
}
