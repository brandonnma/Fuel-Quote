<?php

    class profile{
        function profileManagement(array $request) {
            $cid = $_SESSION["ID_check"];
            if(isset($_POST['submit'])) {
                $cname = $_POST['FullName'];
                $cadd1 = $_POST['Address'];
                $cadd2 = $_POST['Address2'];
                $ccity = $_POST['City'];
                $cstate = $_POST['State'];
                $czip = $_POST['Zipcode'];    
            }

            require('dbh.inc.php');

            $sql = "SELECT * FROM `clientinformation` WHERE cid='$cid'";
            $result = mysqli_query($conn, $sql);
            $rows = mysqli_num_rows($result);

            if($rows==0) {
                $sql = "INSERT INTO `clientinformation`(`cid`, `cname`, `cadd1`, `cadd2`, `ccity`, `cstate`, `czip`) VALUES ('$cid', '$cname', '$cadd1', '$cadd2', '$ccity', '$cstate', '$czip');";
                if (mysqli_query($conn, $sql)) {
                    echo '<script>alert("Done Successfully")</script>';
                    header('Refresh: 0; URL = ../views/home.php');
                } else {
                    echo "Error: " . $sql . "" . mysqli_error($conn);
                }
                mysqli_close($conn);
            }
            else {
                $sql = "UPDATE `clientinformation` SET cid='$cid', cname='$cname', cadd1='$cadd1', cadd2='$cadd2', ccity='$ccity', cstate='$cstate', czip='$czip' WHERE cid='$cid';";
                if (mysqli_query($conn, $sql)) {
                    echo '<script>alert("Profile Updated Successfully")</script>';
                    header('Refresh: 0; URL = ../views/home.php');
                } else {
                    echo "Error: " . $sql . "" . mysqli_error($conn);
                }
                mysqli_close($conn);
            }
        }
    }

?>