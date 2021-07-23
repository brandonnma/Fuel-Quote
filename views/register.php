<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login-Fuel Quote Form</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
      <section class="header">
          <nav>               
            <!---<a href="index.html"><h1>Company Name/logo</h1></a>--->
                <div class="links">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="">Register</a></li>
                    </ul>
                </div>
            </nav>
<!-------Registration Page-------->
    <?php
      require('../includes/signup.inc.php');

      if(isset($_POST['submit'])) {
        $registerDataObject = new register;
        $registerDataObject->registerForm($_POST);
      }
    ?>
  <div class="form-box">
    <div class="companyname">
      <h1>Company Name/logo</h1>
    </div>
    <form id="Register" class="inputtabs" action="#" method="post">
      <input type="text" name="uname" class = "input-field" placeholder="User ID" required>
      <input type="password" name="upass" class = "input-field" placeholder="Password" required>
      <button type = "submit" name="submit" class= "submit-button">Register</button>
      <button type = "button" class= "submit-button"><a href="login.php">Already Have An Account?</a></button>
    </form>
  </div>
      </section>
    </body>
</html>
