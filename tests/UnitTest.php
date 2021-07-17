<?php

use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase {

    /**
     * @runInSeparateProcess
     */
    public function testProfileManagement() {
        require('includes/client.inc.php');

        $cname = "random name";
        $cadd1 = "123 some street dr.";
        $cadd2 = "";
        $ccity = "Houston";
        $cstate = "TX";
        $czip = "77000";   

        $testProfileObject = new profile;
        $this->assertEquals(True, $testProfileObject->profileManagement($cname, $cadd1, $cadd2, $ccity, $cstate, $czip));
    }

    /**
     * @runInSeparateProcess
     */
    public function testFuelForm() {
        require('includes/fuel.inc.php');

        $greq = "123"; 
        $gdate = "12/12/1212";

        $testFuelObject = new fuel;
        $this->assertEquals(True, $testFuelObject->fuelQuoteForm($greq, $gdate));
    }

    /**
     * @runInSeparateProcess
     */
    public function testLoginForm() {
        require('includes/signin.inc.php');

        $username = "user"; 
        $password = "pass";

        $testLoginObject = new login;
        $this->assertEquals(True, $testLoginObject->loginForm($username, $password));
    }

    /**
     * @runInSeparateProcess
     */
    public function testRegisterForm() {
        require('includes/signup.inc.php');

        $username = "user"; 
        $password = "pass";

        $testRegisterObject = new register;
        $this->assertEquals(True, $testRegisterObject->registerForm($username, $password));
    }

    /**
     * @runInSeparateProcess
     */
    public function testPricingModule() {
        require('includes/pricing.inc.php');

        $GallonsRequested = "123";

        $testPricingObject = new PricingMod;
        $this->assertEquals(True, $testPricingObject->setGallons($GallonsRequested));
    }

    /**
     * @runInSeparateProcess
     */
    public function testPricingModule2() {
        require('includes/pricing.inc.php');

        $GallonsRequested = "0";

        $testPricingObject = new PricingMod;
        $this->assertEquals(0, $testPricingObject->getGallons($GallonsRequested));
    }
}

?>