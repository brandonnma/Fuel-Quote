<?php
    class PricingMod{ //Information we know so far is the gallons requested will be used
        public function getPricing(array $request){
            $cid = $_SESSION["ID_check"];
            $qid = $_SESSION["ID_check"];
             // INCLUDES THE CONNECTION CLASS
            require ('dbh.inc.php');
            // Includes the connection to the fuel page where the information needed is stored.
            require('fuel.inc.php');
            require('client.inc.php');

            $state = "SELECT * FROM `clientinformation`WHERE cid = '$cid'";
            $sresult = mysqli_query($conn,$state);
            $rows = mysqli_fetch_array($sresult);
            $numrows = mysqli_num_rows($sresult);

            //SET STATIC VAR.
            $CurrentPrice = 1.50;
            $CompanyProfit = 0.1;
            //THIS IS GETTING THE REQUESTED GALLONS 
            $GallonsRequested = $_POST['GallonsRequested']; 

             //ONCE I GET THE GALLONS REQUESTED MAKE SURE TO COMPARE FOR FACTOR
            if($GallonsRequested > 1000.00){
                $GallonsRequestedFactor = 0.02;
            }
            else{
                $GallonsRequestedFactor = 0.03;
            }

            //RATE HISTORY CHECKS IF THERE ARE PREVIOUS ROWS OR NOT
            if ($numrows == 0){
                $RateHistory = 0.00;
            }
            else{
                $RateHistory = 0.01;
            }
           
            //CHECK STATE IN THE ROW AND SEE IF ITS EQUAL TO TEXAS SET THE LOCATION FACTOR
            if($rows['cstate']== 'TX'){
                (float)$LocationFactor = 0.02;
            }
            else{
                (float)$LocationFactor = 0.04;
            }

            //Got to get the math to add here and return to the fuel quote form page
            $Margin = $CurrentPrice * ($LocationFactor - $RateHistory + $GallonsRequestedFactor + $CompanyProfit);
            $SuggestedPrice = $CurrentPrice + $Margin;
            $Total = $GallonsRequested * $SuggestedPrice;

            //OUTPUT suggested price and total BACK TO THE FUELQUOTEFORM.
            echo json_encode(array(
                'GallonsRequested' => $_POST['GallonsRequested'],
                'gadd' => $_POST['gadd'], 
                'Date' => $_POST['Date'],
                'gprice' => $SuggestedPrice,
                'gamt' => $Total
            ));

        }
    }
     
?>
