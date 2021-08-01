<?php
    session_start();
    if(!isset($_SESSION['loggedin'])) {
        header('Location: login.php');
        exit;
    }

    require('../includes/pricing.inc.php');

    $priceObject = new PricingMod;
    $priceObject->getPricing($_POST);

?>