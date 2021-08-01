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
          <?php
            require('../includes/dbh.inc.php');
            $cid = $_SESSION["ID_check"];

            $sql = "SELECT * FROM `clientinformation` WHERE cid='$cid'";
            $result = mysqli_query($conn, $sql);
            if($result) {
              while($row = mysqli_fetch_array($result)) {
          ?>
          <form action="#" method="POST">
            <div class="request-detail">
              <div class="input-box">
                <div class="request">Gallons Requested:</div>
                <input type="number" min="0" placeholder="Enter gallons requested" id= "GallonsRequested" name="GallonsRequested" oninput="manage(this)" oninput="manage2(this)" required/>
              </div>
              <div class="input-box">
                <div class="request">Delivery Address:</div>
                <input type="text" name="gadd" id="gadd" oninput="manage(this)" oninput="manage2(this)" value="<?php echo $row['cadd1']; ?>" readonly />
              </div>
              <div class="input-box">
                <div class="request">Delivery Date:</div>
                <input type="Date" name="Date" id="date" oninput="manage(this)" oninput="manage2(this)" />
              </div>
              <div class="input-box">
                <div class="request">Suggested Price Per Gallon:</div>
                <input type="number" name="gprice" id="gprice" oninput="manage2(this)" readonly />
              </div>
              <div class="input-box">
                <div class="request">Total Amount Due:</div>
                <input type="number" name="gamt" id="gamount" oninput="manage2(this)" readonly />
              </div>
            </div>
            <div class="form-button">
              <input type="submit" id= "quotebutton" value="Quote" name="Quote" disabled/>
              <input type="submit" id= "submitbutton" value="Submit" name="submit" disabled/>
            </div>
          </form>
          <?php
              }
            } 
            else {
              echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            
            mysqli_close($conn); 
          ?>
        </div>
      </div>
    </section>
  </body>
  <script>
    function manage(quotetxt){
      var qb = document.getElementById('quotebutton');
      if(GallonsRequested.value != ''&&gadd.value!= '' && date.value != ''){
        qb.disabled = false;
      }
      else{
        qb.disabled = true;
      }
    }
    function manage2(submittxt){
      var sb = document.getElementById('submitbutton');
      if(GallonsRequested.value != ''&&gadd.value!= '' && date.value != ''&&gprice.value != ''&&gamount.value != ''){
        sb.disabled = false;
      }
      else{
        sb.disabled = true;
      }
    }
  </script>
</html>
