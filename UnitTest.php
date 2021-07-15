<?php

use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase {
    /**
     * @runInSeparateProcess
     */
    public function testProfileManagement() {
        require('index.php');

        $name = "Random Name";
        $address = "1234 some street dr.";
        $address2 = "";
        $city = "Houston";
        $state = "TX";
        $zipcode = "77000";

        $testProfileObject = new profile;
        $this->assertEquals(True, $testProfileObject->profileManagement($name, $address, $address2, $city, $state, $zipcode));
    }
}

?>