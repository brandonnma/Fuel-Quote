<?php

class profile {
    function profileManagement($name, $address, $address2, $city, $state, $zipcode) {

        $conn = new mysqli(/*info to connect to database*/);

        $sql = "INSERT INTO users (/*database values when implemented*/) VALUES ('$name', '$address', '$address2', '$city', '$state', '$zipcode');";
            
        if ($conn->query($sql) === TRUE) {
            echo "Profile updated sucessfully";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        exit();
    }
}

?>