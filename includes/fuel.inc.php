<?php

    class fuel {
        function fuelQuoteForm(array $request) {
            if(isset($_POST['submit'])) {
                $greq = $_POST['GallonsRequested'];
                //$gadd = $_POST['gadd'];
                $gdate = $_POST['Date'];
                //$gprice = $_POST['gprice'];
                //$gamt = $_POST['gamt'];
            }

            require('dbh.inc.php');

            //$sql = "INSERT INTO `fuelquote`(`greq`, `gadd`, `gdate`, `gprice`, `gamt`) VALUES ('$greq', '$gadd', '$gdate', '$gprice', '$gamt');";
            $sql = "INSERT INTO `fuelquote`(`greq`, `gdate`) VALUES ('$greq', '$gdate');";
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
