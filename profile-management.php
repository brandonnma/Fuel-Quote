<?php
    require('class.php');
    
    if (isset($_POST['submit'])) {
        $name = $_POST['Fullname'];
        $address = $_POST['Address'];
        $address2 = $_POST['Address2'];
        $city = $_POST['City'];
        $state = $_POST['State'];
        $zipcode = $_POST['Zipcode'];
    }

    $profileObject = new profile;
    $profileObject->profileManagement($name, $address, $address2, $city, $state, $zipcode);
?>
