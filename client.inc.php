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
            
            if(isset($_POST['update'])) {
                $cname = $_POST['cname'];
                $cadd1 = $_POST['cadd1'];
                $cadd2 = $_POST['cadd2'];
                $ccity = $_POST['ccity'];
                $cstate = $_POST['cstate'];
                $czip = $_POST['czip'];

                $sql = "INSERT INTO `client`(`cname`, `cadd1`, `cadd2`, `ccity`, `cstate`, `czip`) VALUES ('$cname', '$cadd1', '$cadd2', '$ccity', '$cstate', '$czip');";
                if (mysqli_query($conn, $sql)) {
                    echo "<h2>Done Successfully!</h2>";
                    header('Refresh: 2; URL = ../home.html');
                } else {
                    echo "Error: " . $sql . "" . mysqli_error($conn);
                }
                mysqli_close($conn);      
            }
        ?>
    </div>
    
</body>
</html>

