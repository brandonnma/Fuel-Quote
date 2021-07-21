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
            <li><a href="history.php">Fuel Quote History</a></li>
            <li><a href="login.php">Log Out</a></li>
            <li><a href="">Profile</a></li>
          </ul>
        </div>
      </nav>
      <!----client profile page---->
      <script>
        if(sessionStorage.getItem("AuthenState")===null){
          window.location.href = "login.php";
        }
      </script>
      <div class="form-position">
        <div class="form-container">
          <div class="form-head">Profile Management</div>
          <form action="../includes/client.inc.php" method="post">
            <div class="request-detail">
              <div class="input-box">
                <div class="request">Full Name:</div>
                <input type="text" name="FullName" value="" maxlength="50" required/>
              </div>
              <div class="input-box">
                <div class="request">Address 1:</div>
                <input type="text" name="Address" value="" maxlength="100" required>
              </div>
              <div class="input-box">
                <div class="request">Address 2:</div>
                <input type="text" name="Address2" value="" maxlength="100">
              </div>
              <div class="input-box">
                <div class="request">City:</div>
                <input type="text" name="City" value="" maxlength="100" required>
              </div>
              <div class="input-box">
                <div class="request">State</div>
                <select name="State" id="state">
                  <option value="" selected="selected">Select a State</option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="DC">District Of Columbia</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                </select>
              </div>
              <div class="input-box">
                <div class="request">Zipcode:</div>
                <input type="text" name="Zipcode" value="" maxlength="9" minlength="5" required>
              </div>
            </div>
            <div class="form-button">
              <input type="submit" name="submit" value="Update" />
            </div>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
