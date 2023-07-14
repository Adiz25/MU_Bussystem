<?php require('session.php');?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MU BUS | Login</title>
    <!-- login.css-->
    <link href="css/login.css" rel="stylesheet">
  </head>

  <?php if(logged_in()){ ?>
    <script type="text/javascript">
      window.location = "index.php";
    </script>
   <?php
 } ?>

  <body>
    <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active"> Login </h2>
      <!-- Icon -->
      <div class="fadeIn first">
        <img src="image/mu.png" id="icon" alt="User Icon" />
      </div>

      <!-- Login Form -->
      <form method="POST" action="success.php">
        <input type="text" class="fadeIn second" id="inputEmail" name="user" placeholder="Employee ID" required="required">

        <input type="password" class="fadeIn third" id="inputPassword" name="pass" placeholder="Password" required="required">

        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>
      <div class="text-center">
            <a class="d-block small mt-3" href="forgot-password.php"><u>Forgot Password</u></a>
            <br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  </body>
</html>
