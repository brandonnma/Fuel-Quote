<!-- This is the php connection class for database -->
<?php

    // THERE IS THE CONNECTION OF DATABASE WITH FOUR FIELDS TO INITIALIZE THE SETUPS
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "useraccount";

    // PASS ALL THE PARAMETERS IN THE mysqli_connect METHOD
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    // IN CASE OF FAIL TO CONNECT WITH DATABASE, IT SHOWS ERROR
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>