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
                        <li><a href="">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                    </ul>
                </div>
            </nav>
<!-------Login Page-------->
  <div class="form-box">
    <div class="companyname">
      <h1>Company Name/logo</h1>
    </div>
    <form id="login" class="inputtabs" action="../includes/fuel.inc.php" method="post">
      <input type="text" name="uname" class = "input-field" placeholder="User ID" id="username" required>
      <input type="password" name="upass" class = "input-field" placeholder="Password" id="password" required>
      <input type="checkbox" class="check-box"><span>Remember login.</span>
      <input type = "button" name="submit" value = "Login" onclick="validate()" class= "submit-button" ></button>
      <button type = "submit" class= "submit-button"><a href="register.php">Need to Register?</a></button>
    </form>
  </div>
    </section>
  </body>
  <script>
        function validate(){
          var username = document.getElementById("username").value;
          var password = document.getElementById("password").value;
          if (username === "user" && password === "pass") {
            username = "";
            password = "";
            sessionStorage.setItem("AuthenState","Authen");
            alert("You have successfully logged in.");
            window.location.href="ClientProfile.php";
            return false;
        } else {
            alert("Wrong username and/or password");
        }
      }  
  </script>
</html>