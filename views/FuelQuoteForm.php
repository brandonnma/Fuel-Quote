<?php
  session_start();
  if(!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fuel Quote Form</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <section class="header">
      <nav>
        <!---<a href="home.html"><h1>Company Name/logo</h1></a>--->
        <div class="links">
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="">Fuel Quote Form</a></li>
            <li><a href="history.php">Fuel Quote History</a></li>
            <li><a href="login.php">Log Out</a></li>
            <li><a href="ClientProfile.php">Profile</a></li>
          </ul>
        </div>
      </nav>
      <!----Form Page---->
      <?php
        require('../includes/fuel.inc.php');

        if(isset($_POST['submit'])) {
          $fuelDataObject = new fuel;
          $fuelDataObject->fuelQuoteForm($_POST);
        }
      ?>
      <div class="form-position">
        <div class="form-container">
          <div class="form-head">Fuel Quote Form</div>
          <form action="../includes/fuel.inc.php" method="post">
            <div class="request-detail">
              <div class="input-box">
                <div class="request">Gallons Requested:</div>
                <input type="number" name="GallonsRequested" min="0" placeholder="Enter gallons requested" required/>
              </div>
              <div class="input-box">
                <div class="request">Delivery Address:</div>
                <input type="text" readonly />
              </div>
              <div class="input-box">
                <div class="request">Delivery Date:</div>
                <input type="Date" name="Date"/>
              </div>
              <div class="input-box">
                <div class="request">Suggested Price Per Gallon:</div>
                <input type="number" readonly />
              </div>
              <div class="input-box">
                <div class="request">Total Amount Due:</div>
                <input type="number" readonly />
              </div>
            </div>
            <div class="form-button">
              <input type="submit" name="submit" value="Submit" />
            </div>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
