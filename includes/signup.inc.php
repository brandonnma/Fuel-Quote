<?php

    // HERE IS THE CLASS IN WHICH THE BUYER SIGN UP DATA RECEIVES
    // SAVE THE VARIABLES AS POST FROM THE INPUT FORM, FROM ANOTHER CLASS
    if(isset($_POST['submit'])) {
        $username = $_POST['uname'];
        $password = $_POST['upass'];
    }
    header('Refresh: 2; URL = ../views/login.html');
    
    class register {
        function registerForm($username, $password) {

            // NOW INCLUDES THE CONNECTION CLASS
            include_once 'dbh.inc.php';
            $sql = "INSERT INTO `user`(`uname`, `upass`) VALUES ('$username','$password');";
            mysqli_query($conn, $sql);

            // AS THE THE DATA IS STORED IN THE TABLE AND EACH TABLE HAS ITS OWN ROW, SO THE IT CHECKS THE PER ROW PROPERTY
            if(mysqli_affected_rows($conn) == 1) {
                //echo "<h2>Registration Successful!</h2>";
                //header('Refresh: 2; URL = ../views/login.html');
            } else {
                echo "<h2>Registration Failed!</h2>";
                header('Refresh: 2; URL = ../views/register.html');
                $testValue = True;
            }
            return $testValue;
        }
    }
?>