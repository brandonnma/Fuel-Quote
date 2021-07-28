<?php

use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase {

    /**
     * @runInSeparateProcess
     */
    public function testProfileManagement() {
        require('includes/client.inc.php');

        $_POST = ['submit' => 'true', 
                'FullName' => 'Test Name', 
                'Address' => '123 test street dr.', 
                'Address2' => '', 
                'City' => 'Houston', 
                'State' => 'TX', 
                'Zipcode' => '77000'];

        $_SESSION["ID_check"] = 2;

        $testProfileObject = new profile;
        $testProfileObject->profileManagement($_POST);
        $this->expectOutputString('<script>alert("Done Successfully")</script>');
    }

    /**
     * @runInSeparateProcess
     */
    public function testProfileManagementUpdate() {
        require('includes/client.inc.php');

        $_POST = ['submit' => 'true', 
                'FullName' => 'Test Name Updated1', 
                'Address' => '123 test street dr.', 
                'Address2' => '', 
                'City' => 'Houston', 
                'State' => 'TX', 
                'Zipcode' => '77000'];

        $_SESSION["ID_check"] = 2;

        $testProfileObject = new profile;
        $testProfileObject->profileManagement($_POST);
        $this->expectOutputString('<script>alert("Profile Updated Successfully")</script>');
    }

    /**
     * @runInSeparateProcess
     */
    public function testFuelForm() {
        require('includes/fuel.inc.php');

        $_POST = ['submit' => 'true', 
                'GallonsRequested' => '10',
                'gadd' => 'test dr.', 
                'Date' => '2021-01-01',
                'gprice' => '10',
                'gamt' => '10'];

        $_SESSION["ID_check"] = 2;

        $testFuelObject = new fuel;
        $testFuelObject->fuelQuoteForm($_POST);
        $this->expectOutputString('<script>alert("Done Successfully")</script>');
    }

    /**
     * @runInSeparateProcess
     */
    public function testLoginForm() {
        require('includes/signin.inc.php');

        $_POST = ['submit' => 'true', 
                'uname' => 'testuser1', 
                'upass' => 'testpass1'];

        $testLoginObject = new login;
        $testLoginObject->loginForm($_POST);
        $this->expectOutputString('<script>alert("Successfully Logged In")</script>');
    }

    /**
     * @runInSeparateProcess
     */
    public function testLoginFormEmptyUsername() {
        require('includes/signin.inc.php');

        $_POST = ['submit' => 'true', 
                'uname' => '', 
                'upass' => ''];

        $testLoginObject = new login;
        $testLoginObject->loginForm($_POST);
        $this->expectOutputString('<script>alert("Please enter a username!")</script>');
    }

    /**
     * @runInSeparateProcess
     */
    public function testLoginFormIncorrectLogin() {
        require('includes/signin.inc.php');

        $_POST = ['submit' => 'true', 
                'uname' => 'qwsdefgsfdgs', 
                'upass' => 'dfasdfsadf'];

        $testLoginObject = new login;
        $testLoginObject->loginForm($_POST);
        $this->expectOutputString('<script>alert("Your Username or Password is incorrect!")</script>');
    }

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
                'uname' => 'testuser1', 
                'upass' => 'test'];

        $testRegisterObject = new register;
        $testRegisterObject->registerForm($_POST);
        $this->expectOutputString('<script>alert("Username already exist!")</script>');
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