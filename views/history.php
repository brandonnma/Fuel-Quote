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
            <li><a href="FuelQuoteForm.php">Fuel Quote Form</a></li>
            <li><a href="">Fuel Quote History</a></li>
            <li><a href="login.php">Log Out</a></li>
            <li><a href="ClientProfile.php">Profile</a></li>
          </ul>
        </div>
      </nav>
      <!------Fuel Quote History Page------>
      <div class="form-position">
        <div class="form-container">
          <div class="form-head">"Client's Name's" Quotes Hisory</div>
            <table class="history-table">
              <thead>
                <tr>
                  <th>Client ID</th>
                  <th>Gallons Requested</th>
                  <th>Delivery Address</th>
                  <th>Delivery Date</th>
                  <th>Suggested Price</th>
                  <th>Total Amount Due</th>
                </tr>
              </thead>
              <?php
                include_once '../includes/dbh.inc.php';
                $qid = $_SESSION["ID_check"];

                $sql = "SELECT * FROM `fuelquote` WHERE qid='$qid'";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<tbody>";
                    while($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                            echo "<td>" . $row['qid'] . "</td>";
                            echo "<td>" . $row['qreq'] . "</td>";
                            echo "<td>" . $row['qadd'] . "</td>";
                            echo "<td>" . $row['qdate'] . "</td>";
                            echo "<td>$" . $row['qprice'] . "</td>";
                            echo "<td>$" . $row['qamt'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                } else {
                    echo "Error: " . $sql . "" . mysqli_error($conn);
                }
                
                mysqli_close($conn);    
              ?>
            </table>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>

