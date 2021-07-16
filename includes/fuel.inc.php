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

    <div class="wrapper-center">
        <?php
            include_once 'dbh.inc.php';
            
            if(isset($_POST['submit'])) {
                $greq = $_POST['GallonsRequested'];
                //$gadd = $_POST['gadd'];
                $gdate = $_POST['Date'];
                //$gprice = $_POST['gprice'];
                //$gamt = $_POST['gamt'];

                //$sql = "INSERT INTO `fuel`(`greq`, `gadd`, `gdate`, `gprice`, `gamt`) VALUES ('$greq', '$gadd', '$gdate', '$gprice', '$gamt');";
                $sql = "INSERT INTO `fuel`(`greq`, `gdate`) VALUES ('$greq', '$gdate');";
                if (mysqli_query($conn, $sql)) {
                    echo "<h2>Done Successfully!</h2>";
                    header('Refresh: 2; URL = ../views/home.html');
                } else {
                    echo "Error: " . $sql . "" . mysqli_error($conn);
                }
                mysqli_close($conn);      
            }
        ?>
    </div>
    
</body>
</html>

