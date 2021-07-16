<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <!-- Here is a complete flow process of sign up of a buyer -->

    <div class="wrapper-center">
        <div class="center">
        <?php

            // NOW INCLUDES THE CONNECTION CLASS
            include_once 'dbh.inc.php';
            
            // HERE IS THE CLASS IN WHICH THE BUYER SIGN UP DATA RECEIVES
            // SAVE THE VARIABLES AS POST FROM THE INPUT FORM, FROM ANOTHER CLASS
            if(isset($_POST['submit'])) {
                $username = $_POST['uname'];
                $password = $_POST['upass'];

                $sql = "INSERT INTO `user`(`uname`, `upass`) VALUES ('$username','$password');";
                mysqli_query($conn, $sql);

                // AS THE THE DATA IS STORED IN THE TABLE AND EACH TABLE HAS ITS OWN ROW, SO THE IT CHECKS THE PER ROW PROPERTY
                if(mysqli_affected_rows($conn) == 1) {
                    echo "<h2>Registration Successful!</h2>";
                    header('Refresh: 2; URL = ../views/login.html');
                } else {
                    echo "<h2>Registration Failed!</h2>";
                    header('Refresh: 2; URL = ../views/register.html');
                }
            }
        ?>
        </div>
    </div>
</body>
</html>