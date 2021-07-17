
<?php
    // INCLUDES THE CONNECTION CLASS
    include_once 'dbh.inc.php';
    // Includes the connection to the fuel page where the information needed is stored.
    include_once 'fuel.inc.php'; 

    class PricingMod { //Information we know so far is the gallons requested will be used
        public $GallonsRequested; //The amount of fuel wanted
        function setGallons($GallonsRequested) {
            //$this->GallonsRequested= $_POST['GallonsRequested'];
            $GallonsRequest = $GallonsRequested;
            $testValue = True;
            return $testValue;
        }
        function getGallons() {
            return $this->GallonsRequested;
            $testValue = True;
            return $testValue;
        }
    }
?>