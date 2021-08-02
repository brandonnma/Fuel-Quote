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
            <li><a href="history.php">Fuel Quote History</a></li>
            <li><a href="login.php">Log Out</a></li>
            <li><a href="">Profile</a></li>
          </ul>
        </div>
      </nav>
      <!----client profile page---->
      <?php
        require('../includes/client.inc.php');

        if(isset($_POST['submit'])) {
          $profileDataObject = new profile;
          $profileDataObject->profileManagement($_POST);
      }
      ?>
      <div class="form-position">
        <div class="form-container">
          <div class="form-head">Profile Management</div>
          <?php
            require('../includes/dbh.inc.php');
            $cid = $_SESSION["ID_check"];

            $sql = "SELECT * FROM `clientinformation` WHERE cid='$cid'";
            $result = mysqli_query($conn, $sql);
            if($result) {
              while($row = mysqli_fetch_array($result)) {
          ?>
          <form action="#" method="post">
            <div class="request-detail">
              <div class="input-box">
                <div class="request">Full Name:</div>
                <input type="text" name="FullName" value="<?php echo $row['cname']; ?>" maxlength="50" required/>
              </div>
              <div class="input-box">
                <div class="request">Address 1:</div>
                <input type="text" name="Address" value="<?php echo $row['cadd1']; ?>" maxlength="100" required>
              </div>
              <div class="input-box">
                <div class="request">Address 2:</div>
                <input type="text" name="Address2" value="<?php echo $row['cadd2']; ?>" maxlength="100">
              </div>
              <div class="input-box">
                <div class="request">City:</div>
                <input type="text" name="City" value="<?php echo $row['ccity']; ?>" maxlength="100" required>
              </div>
              <div class="input-box">
                <div class="request">State</div>
                <select name="State" id="state">
                  <option value="<?php echo $row['cstate']; ?>" selected="selected"></option>
                  <option value="AL" <?php if($row['cstate']=="AL") echo 'selected="selected"'; ?> >Alabama</option>
                  <option value="AK" <?php if($row['cstate']=="AK") echo 'selected="selected"'; ?> >Alaska</option>
                  <option value="AZ" <?php if($row['cstate']=="AZ") echo 'selected="selected"'; ?> >Arizona</option>
                  <option value="AR" <?php if($row['cstate']=="AR") echo 'selected="selected"'; ?> >Arkansas</option>
                  <option value="CA" <?php if($row['cstate']=="CA") echo 'selected="selected"'; ?> >California</option>
                  <option value="CO" <?php if($row['cstate']=="CO") echo 'selected="selected"'; ?> >Colorado</option>
                  <option value="CT" <?php if($row['cstate']=="CT") echo 'selected="selected"'; ?> >Connecticut</option>
                  <option value="DE" <?php if($row['cstate']=="DE") echo 'selected="selected"'; ?> >Delaware</option>
                  <option value="DC" <?php if($row['cstate']=="DC") echo 'selected="selected"'; ?> >District Of Columbia</option>
                  <option value="FL" <?php if($row['cstate']=="FL") echo 'selected="selected"'; ?> >Florida</option>
                  <option value="GA" <?php if($row['cstate']=="GA") echo 'selected="selected"'; ?> >Georgia</option>
                  <option value="HI" <?php if($row['cstate']=="HI") echo 'selected="selected"'; ?> >Hawaii</option>
                  <option value="ID" <?php if($row['cstate']=="ID") echo 'selected="selected"'; ?> >Idaho</option>
                  <option value="IL" <?php if($row['cstate']=="IL") echo 'selected="selected"'; ?> >Illinois</option>
                  <option value="IN" <?php if($row['cstate']=="IN") echo 'selected="selected"'; ?> >Indiana</option>
                  <option value="IA" <?php if($row['cstate']=="IA") echo 'selected="selected"'; ?> >Iowa</option>
                  <option value="KS" <?php if($row['cstate']=="KS") echo 'selected="selected"'; ?> >Kansas</option>
                  <option value="KY" <?php if($row['cstate']=="KY") echo 'selected="selected"'; ?> >Kentucky</option>
                  <option value="LA" <?php if($row['cstate']=="LA") echo 'selected="selected"'; ?> >Louisiana</option>
                  <option value="ME" <?php if($row['cstate']=="ME") echo 'selected="selected"'; ?> >Maine</option>
                  <option value="MD" <?php if($row['cstate']=="MD") echo 'selected="selected"'; ?> >Maryland</option>
                  <option value="MA" <?php if($row['cstate']=="MA") echo 'selected="selected"'; ?> >Massachusetts</option>
                  <option value="MI" <?php if($row['cstate']=="MI") echo 'selected="selected"'; ?> >Michigan</option>
                  <option value="MN" <?php if($row['cstate']=="MN") echo 'selected="selected"'; ?> >Minnesota</option>
                  <option value="MS" <?php if($row['cstate']=="MS") echo 'selected="selected"'; ?> >Mississippi</option>
                  <option value="MO" <?php if($row['cstate']=="MO") echo 'selected="selected"'; ?> >Missouri</option>
                  <option value="MT" <?php if($row['cstate']=="MT") echo 'selected="selected"'; ?> >Montana</option>
                  <option value="NE" <?php if($row['cstate']=="NE") echo 'selected="selected"'; ?> >Nebraska</option>
                  <option value="NV" <?php if($row['cstate']=="NV") echo 'selected="selected"'; ?> >Nevada</option>
                  <option value="NH" <?php if($row['cstate']=="NH") echo 'selected="selected"'; ?> >New Hampshire</option>
                  <option value="NJ" <?php if($row['cstate']=="NJ") echo 'selected="selected"'; ?> >New Jersey</option>
                  <option value="NM" <?php if($row['cstate']=="NM") echo 'selected="selected"'; ?> >New Mexico</option>
                  <option value="NY" <?php if($row['cstate']=="NY") echo 'selected="selected"'; ?> >New York</option>
                  <option value="NC" <?php if($row['cstate']=="NC") echo 'selected="selected"'; ?> >North Carolina</option>
                  <option value="ND" <?php if($row['cstate']=="ND") echo 'selected="selected"'; ?> >North Dakota</option>
                  <option value="OH" <?php if($row['cstate']=="OH") echo 'selected="selected"'; ?> >Ohio</option>
                  <option value="OK" <?php if($row['cstate']=="OK") echo 'selected="selected"'; ?> >Oklahoma</option>
                  <option value="OR" <?php if($row['cstate']=="OR") echo 'selected="selected"'; ?> >Oregon</option>
                  <option value="PA" <?php if($row['cstate']=="PA") echo 'selected="selected"'; ?> >Pennsylvania</option>
                  <option value="RI" <?php if($row['cstate']=="RI") echo 'selected="selected"'; ?> >Rhode Island</option>
                  <option value="SC" <?php if($row['cstate']=="SC") echo 'selected="selected"'; ?> >South Carolina</option>
                  <option value="SD" <?php if($row['cstate']=="SD") echo 'selected="selected"'; ?> >South Dakota</option>
                  <option value="TN" <?php if($row['cstate']=="TN") echo 'selected="selected"'; ?> >Tennessee</option>
                  <option value="TX" <?php if($row['cstate']=="TX") echo 'selected="selected"'; ?> >Texas</option>
                  <option value="UT" <?php if($row['cstate']=="UT") echo 'selected="selected"'; ?> >Utah</option>
                  <option value="VT" <?php if($row['cstate']=="VT") echo 'selected="selected"'; ?> >Vermont</option>
                  <option value="VA" <?php if($row['cstate']=="VA") echo 'selected="selected"'; ?> >Virginia</option>
                  <option value="WA" <?php if($row['cstate']=="WA") echo 'selected="selected"'; ?> >Washington</option>
                  <option value="WV" <?php if($row['cstate']=="WV") echo 'selected="selected"'; ?> >West Virginia</option>
                  <option value="WI" <?php if($row['cstate']=="WI") echo 'selected="selected"'; ?> >Wisconsin</option>
                  <option value="WY" <?php if($row['cstate']=="WY") echo 'selected="selected"'; ?> >Wyoming</option>
                </select>
              </div>
              <div class="input-box">
                <div class="request">Zipcode:</div>
                <input type="text" name="Zipcode" value="<?php echo $row['czip']; ?>" maxlength="9" minlength="5" required>
              </div>
            </div>
            <div class="form-button">
              <input type="submit" name="submit" value="Update" />
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
</html>
