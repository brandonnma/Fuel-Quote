<?php

    class profile{
        function profileManagement(array $request) {
            if(isset($_POST['submit'])) {
                $cname = $_POST['FullName'];
                $cadd1 = $_POST['Address'];
                $cadd2 = $_POST['Address2'];
                $ccity = $_POST['City'];
                $cstate = $_POST['State'];
                $czip = $_POST['Zipcode'];    
            }

            require('dbh.inc.php');

            $sql = "INSERT INTO `client`(`cname`, `cadd1`, `cadd2`, `ccity`, `cstate`, `czip`) VALUES ('$cname', '$cadd1', '$cadd2', '$ccity', '$cstate', '$czip');";
            if (mysqli_query($conn, $sql)) {
                echo "<h2>Done Successfully!</h2>";
                header('Refresh: 2; URL = ../views/home.html');
                $testValue = True;
            } else {
                echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            mysqli_close($conn);
            return $testValue;
        }
    }

    if(isset($_POST['submit'])) {
        $profileDataObject = new profile;
        $profileDataObject->profileManagement($_POST);
    }

?>

