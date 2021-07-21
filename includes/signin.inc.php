<?php

    // HERE IS THE SESSION PROCESS WHEN THE BUYER LOGINS
    //session_start();

    class login {
        function loginForm(array $request) {
            // HERE IS THE CLASS IN WHICH THE BUYER SIGN IN DATA RECEIVES
            // SAVE THE VARIABLES AS POST FROM THE INPUT FORM, FROM ANOTHER CLASS
            if(isset($_POST['submit'])) {
                $username = $_POST['uname'];
                $password = $_POST['upass'];
            }
            return true;
            // NOW INCLUDES THE CONNECTION CLASS
            require('dbh.inc.php');

            $dbusername = "";
            $dbPassword = "";

            // NOW FETCH THE ROW DATA USING SELECT QUERY OF MYSQL, WHERE THE BUYER SIGN INS
            $sql = "SELECT * FROM `usercredentials` WHERE uname='$username' and upass='$password'";

            // SAVE THE RESULT IN THE MYSQLI QUERY METHOD
            $result = mysqli_query($conn, $sql);

            // NOW DECLARE ROW FOR EACH RESULT
            $rows = mysqli_num_rows($result);

            // CHECK THE ROW FOR SPECIFIED POINT
            if($rows==1) {

                // SAVE THE USERNAME TEXT
                $_SESSION['uname'] = $username;
            
                // PRINTS THE USERNAME AND REDIRECTS TO THE BUYER PAGE OF INDEX.HTML
                echo "<h2>Welcome " . $_POST['uname'] . " ✌</h2>";
                header('Refresh: 2; URL = ../ClientProfile.php');
                $testValue = True;

            // OTHERWISE IT PRINTS SIGN IN FAILED AND REDIRECTS THE PAGE TO SIGN IN PAGE
            } else {
                echo "<h2>Sign in Failed! Type username or password correctly.</h2>";
                header('Refresh: 2; URL = ../login.php');
                $testValue = True;
            }
            return $testValue;
        }
    }

    if(isset($_POST['submit'])) {
        $loginDataObject = new login;
        $loginDataObject->loginForm($_POST);
    }

?>

