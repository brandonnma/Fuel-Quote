<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Custom CSS -->
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0 auto;
        }
        .wrapper-center {
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Here is a complete flow process of sign in of a buyer -->

    <div class="wrapper-center">
        <div class="center">
        <?php

            // HERE IS THE SESSION PROCESS WHEN THE BUYER LOGINS
            session_start();

            // NOW INCLUDES THE CONNECTION CLASS
            include_once 'dbh.inc.php';

            // HERE IS THE CLASS IN WHICH THE BUYER SIGN IN DATA RECEIVES
            // SAVE THE VARIABLES AS POST FROM THE INPUT FORM, FROM ANOTHER CLASS
            $username = $_POST['uname'];
            $password = $_POST['upass'];

            $dbusername = "";
            $dbPassword = "";

            // NOW FETCH THE ROW DATA USING SELECT QUERY OF MYSQL, WHERE THE BUYER SIGN INS
            $sql = "SELECT * FROM `user` WHERE uname='$username' and upass='$password'";

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
                header('Refresh: 2; URL = ../ClientProfile.html');

                // OTHERWISE IT PRINTS SIGN IN FAILED AND REDIRECTS THE PAGE TO SIGN IN PAGE
            } else {
                echo "<h2>Sign in Failed! Type username or password correctly.</h2>";
                header('Refresh: 2; URL = ../login.html');
            }
        ?>
        </div>
    </div>
</body>
</html>

