<?php

use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase {

    /**
     * @runInSeparateProcess
     */
    /*public function testProfileManagement() {
        require('includes/client.inc.php');

        $_POST = ['submit' => 'true', 
                'FullName' => 'Test Name', 
                'Address' => '123 some street dr.', 
                'Address2' => '', 
                'City' => 'Houston', 
                'State' => 'TX', 
                'Zipcode' => '77000'];

        $testProfileObject = new profile;
        $this->assertEquals(True, $testProfileObject->profileManagement($_POST));
    }*/

    /**
     * @runInSeparateProcess
     */
    /*public function testFuelForm() {
        require('includes/fuel.inc.php');

        $_POST = ['submit' => 'true', 
                'GallonsRequested' => '10', 
                'Date' => '01/01/2021'];

        $testFuelObject = new fuel;
        $this->assertEquals(True, $testFuelObject->fuelQuoteForm($_POST));
    }*/

    /**
     * @runInSeparateProcess
     */
    /*public function testLoginForm() {
        require('includes/signin.inc.php');

        $_POST = ['submit' => 'true', 
                'uname' => 'user', 
                'upass' => 'pass'];

        $testLoginObject = new login;
        $this->assertEquals(True, $testLoginObject->loginForm($_POST));
    }*/

    /**
     * @runInSeparateProcess
     */
    public function testRegisterForm() {
        require('includes/signup.inc.php');

        $_POST = ['submit' => 'true', 
                'uname' => 'testuser', 
                'upass' => 'testpass'];

        $testRegisterObject = new register;
        $testRegisterObject->registerForm($_POST);
        $this->expectOutputString('<script>alert("Registration Successful!")</script>');

        require('includes/dbh.inc.php');
        $sql = "DELETE FROM usercredentials WHERE uname = 'testuser'";
        mysqli_query($conn, $sql);
    }

    /**
     * @runInSeparateProcess
     */
    public function testRegisterFormEmpty() {
        require('includes/signup.inc.php');

        $_POST = ['submit' => 'true', 
                'uname' => '', 
                'upass' => ''];

        $testRegisterObject = new register;
        $testRegisterObject->registerForm($_POST);
        $this->expectOutputString('<script>alert("Please complete the registration form!")</script>');
    }

    /**
     * @runInSeparateProcess
     */
    public function testRegisterFormExistingUsername() {
        require('includes/signup.inc.php');

        $_POST = ['submit' => 'true', 
                'uname' => 'test', 
                'upass' => 'test'];

        $testRegisterObject = new register;
        $testRegisterObject->registerForm($_POST);
        $this->expectOutputString('<script>alert("Username already exist!")</script>');
    }

    /**
     * @runInSeparateProcess
     */
    /*public function testPricingModule() {
        require('includes/pricing.inc.php');

        $GallonsRequested = "123";

        $testPricingObject = new PricingMod;
        $this->assertEquals(True, $testPricingObject->setGallons($GallonsRequested));
    }*/

    /**
     * @runInSeparateProcess
     */
    /*public function testPricingModule2() {
        require('includes/pricing.inc.php');

        $GallonsRequested = "0";

        $testPricingObject = new PricingMod;
        $this->assertEquals(0, $testPricingObject->getGallons($GallonsRequested));
    }*/
}

?>