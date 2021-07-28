<?php

    class fuel {
        function fuelQuoteForm(array $request) {
            $qid = $_SESSION["ID_check"];
            if(isset($_POST['submit'])) {
                $qreq = $_POST['GallonsRequested'];
                $qadd = $_POST['gadd'];
                $qdate = $_POST['Date'];
                $qprice = $_POST['gprice'];
                $qamt = $_POST['gamt'];
            }

            require('dbh.inc.php');

            $sql = "INSERT INTO `fuelquote`(`qid`, `qreq`, `qadd`, `qdate`, `qprice`, `qamt`) VALUES ('$qid', '$qreq', '$qadd', '$qdate', '$qprice', '$qamt');";
            //$sql = "INSERT INTO `fuelquote`(`greq`, `gdate`) VALUES ('$greq', '$gdate');";
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
