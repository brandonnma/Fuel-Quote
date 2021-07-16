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
            // INCLUDES THE CONNECTION CLASS
            include_once 'dbh.inc.php';
            include_once 'fuel.inc.php'; // Includes the connection to the fuel page where the information needed is stored.

            class PricingMod{ //Information we know so far is the gallons requested will be used
              public $GallonsRequested; //The amount of fuel wanted
              function setGallons($GallonsRequested){
                 $this->GallonsRequested= $_POST['GallonsRequested'];
              }
              function getGallons(){
                return $this->GallonsRequested;
              }
            }
        ?>
    </div>
</body>
</html>

