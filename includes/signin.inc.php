<?php
    session_start();
    
    class login {
        function loginForm(array $request) {
            require('dbh.inc.php');

            if(isset($_POST['submit'])) {
                $username = $_POST['uname'];
                $password = $_POST['upass'];
                $error = false;
                //check if username is empty
                if(empty($username)) {
                    echo '<script>alert("Please enter a username!")</script>';
                    $error = true;
                }
            }
            
            if(!$error == true) {
                $sql = "SELECT * FROM `usercredentials` WHERE uname='$username'";
                $result = mysqli_query($conn, $sql);
                $rows = mysqli_num_rows($result);

                if($rows==1) {
                    $rows = $result->fetch_array(MYSQLI_ASSOC);
                    //CHECKS TO SEE IF PASSWORD INPUT IS CORRECT
                    if(password_verify($password,$rows['upass'])) {
                        session_regenerate_id();
                        $_SESSION['loggedin'] = true;
                        $_SESSION["ID_check"] = $rows['uid'];
                        echo '<script>alert("Successfully Logged In")</script>';
                        header('Refresh: 0; URL = ../views/ClientProfile.php');
                    }
                // OTHERWISE IT PRINTS SIGN IN FAILED AND REDIRECTS THE PAGE TO SIGN IN PAGE
                } else {
                    echo '<script>alert("Your Username or Password is incorrect!")</script>';
                    header('Refresh: 0; URL = ../views/login.php');
                }
            }  
        }
    }

?>