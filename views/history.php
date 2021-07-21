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
      <script>
        if(sessionStorage.getItem("AuthenState")===null){
          window.location.href = "login.php";
        }
      </script>
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
              <tbody>
                <tr>
                  <td>1</td>
                  <td>2</td>
                  <td>4800 Calhoun Rd, Houston, TX 77004</td>
                  <td>01/01/2021</td>
                  <td>$10</td>
                  <td>$20</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>3</td>
                  <td>4800 Calhoun Rd, Houston, TX 77004</td>
                  <td>01/01/2021</td>
                  <td>$10</td>
                  <td>$30</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>4</td>
                  <td>4800 Calhoun Rd, Houston, TX 77004</td>
                  <td>01/01/2021</td>
                  <td>$10</td>
                  <td>$40</td>
                </tr>
              </tbody>
            </table>
        </div>
      </div>
    </section>
  </body>
</html>
