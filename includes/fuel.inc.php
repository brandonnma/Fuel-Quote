<?php

    if(isset($_POST['submit'])) {
        $greq = $_POST['GallonsRequested'];
        //$gadd = $_POST['gadd'];
        $gdate = $_POST['Date'];
        //$gprice = $_POST['gprice'];
        //$gamt = $_POST['gamt'];
    }
    header('Refresh: 2; URL = ../views/home.html');

    class fuel {
        function fuelQuoteForm($greq, $gdate) {
            require('dbh.inc.php');

            //$sql = "INSERT INTO `fuel`(`greq`, `gadd`, `gdate`, `gprice`, `gamt`) VALUES ('$greq', '$gadd', '$gdate', '$gprice', '$gamt');";
            $sql = "INSERT INTO `fuel`(`greq`, `gdate`) VALUES ('$greq', '$gdate');";
            if (mysqli_query($conn, $sql)) {
                echo "<h2>Done Successfully!</h2>";
                header('Refresh: 2; URL = ../views/home.html');
                $testValue = True;
            } else {
                //echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            mysqli_close($conn);
            return $testValue; 
        }
    }
?>
