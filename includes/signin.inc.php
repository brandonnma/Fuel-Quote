<?php

    // HERE IS THE SESSION PROCESS WHEN THE BUYER LOGINS
    //session_start();

    // HERE IS THE CLASS IN WHICH THE BUYER SIGN IN DATA RECEIVES
    // SAVE THE VARIABLES AS POST FROM THE INPUT FORM, FROM ANOTHER CLASS
    if(isset($_POST['submit'])) {
        $username = $_POST['uname'];
        $password = $_POST['upass'];
    }
    header('Refresh: 2; URL = ../ClientProfile.html');

    class login {
        function loginForm($username, $password) {
            // NOW INCLUDES THE CONNECTION CLASS
            require('dbh.inc.php');

            $dbusername = "";
            $dbPassword = "";

            // NOW FETCH THE ROW DATA USING SELECT QUERY OF MYSQL, WHERE THE BUYER SIGN INS
            $sql = "SELECT * FROM `user` WHERE uname='$username' and upass='$password'";

            // SAVE THE RESULT IN THE MYSQLI QUERY METHOD
            $result = mysqli_query($conn, $sql);

            // NOW DECLARE ROW FOR EACH RESULT
            //$rows = mysqli_num_rows($result);
            $rows=1;

            // CHECK THE ROW FOR SPECIFIED POINT
            if($rows==1) {

                // SAVE THE USERNAME TEXT
                //$_SESSION['uname'] = $username;
            
                // PRINTS THE USERNAME AND REDIRECTS TO THE BUYER PAGE OF INDEX.HTML
                //echo "<h2>Welcome " . $_POST['uname'] . " ✌</h2>";
                header('Refresh: 2; URL = ../ClientProfile.html');
                $testValue = True;

            // OTHERWISE IT PRINTS SIGN IN FAILED AND REDIRECTS THE PAGE TO SIGN IN PAGE
            } else {
                //echo "<h2>Sign in Failed! Type username or password correctly.</h2>";
                //header('Refresh: 2; URL = ../login.html');
            }
            return $testValue;
        }
    }
?>

