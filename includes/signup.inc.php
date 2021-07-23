<?php

    class register {
        function registerForm(array $request) {
            include_once 'dbh.inc.php';

            if(isset($_POST['submit'])) {
                $username = $_POST['uname'];
                $password = $_POST['upass'];
                $error = false;
                //check if either the username or password is empty
                if(empty($username) || empty($password)) {
                    echo '<script>alert("Please complete the registration form!")</script>';
                    $error = true;
                }
                //check if the username already exist in the database
                else if($exist = $conn->prepare('SELECT uid, upass FROM usercredentials WHERE uname = ?')) {
                    $exist->bind_param('s', $username);
                    $exist->execute();
                    $exist->store_result();
                    if($exist->num_rows > 0) {
                        echo '<script>alert("Username already exist!")</script>';
                        $error = true;
                    }
                }
                //Encrypt the password using md5
                $password = password_hash($password,PASSWORD_DEFAULT);
            }

            if(!$error == true) {
                $sql = "INSERT INTO `usercredentials`(`uname`, `upass`) VALUES ('$username','$password');";
                mysqli_query($conn, $sql);

                // AS THE THE DATA IS STORED IN THE TABLE AND EACH TABLE HAS ITS OWN ROW, SO THE IT CHECKS THE PER ROW PROPERTY
                if(mysqli_affected_rows($conn) == 1) {
                    echo '<script>alert("Registration Successful!")</script>';
                    header('Refresh: 2; URL = ../views/login.php');
                } else {
                    echo "<h2>Registration Failed!</h2>";
                    header('Refresh: 2; URL = ../views/register.php');
                }
            }
        }
    }

?>
