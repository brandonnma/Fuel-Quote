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

            $sql = "INSERT INTO `clientinformation`(`cname`, `cadd1`, `cadd2`, `ccity`, `cstate`, `czip`) VALUES ('$cname', '$cadd1', '$cadd2', '$ccity', '$cstate', '$czip');";
            if (mysqli_query($conn, $sql)) {
                echo '<script>alert("Done Successfully")</script>';
                header('Refresh: 0; URL = ../views/home.php');
            } else {
                echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }

?>