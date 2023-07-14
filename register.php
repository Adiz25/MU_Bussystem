<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MU BUS Register</title>

    <!-- Custom styles for this template-->
    <link href="css/register.css" rel="stylesheet">

  </head>
<script>  
  function verifyPassword(form) {
      password1 = form.inputPassword.value;
      password2 = form.ConfirmPassword.value;
      firstName = form.ConfirmPassword.value;
      lastName  = form.lastName.value;
      var regEx = /^[0-9a-zA-Z]+$/;
  
      // If password not entered
      if (password1 == ''){
          document.getElementById("message").innerHTML = "Please Enter Password";
          return false;
      }
                      
      // If confirm password not entered
      else if (password2 == ''){
          document.getElementById("message").innerHTML = "Please enter confirm password";
          return false;
      }
               
      //minimum password length validation
      else if (password1.length < 4){
          document.getElementById("message").innerHTML = "Password length must be atleast 5 characters!";
          return false;
      }
      // Password not same as firstName
      else if (password1 == firstName){
        document.getElementById("message").innerHTML = "Password must be different from First Name!";
        return false;
      }
      //Password must contain number
      // else if (password1 != /[0-9]/){
      //   document.getElementById("message").innerHTML = "Password must contain at least one number (0-9)!";
      //   return false;
      // }
      // If same return True.
      else{
          alert("EMPLOYEE has been Successfully Registered!")
          return true;
      }
    }   
</script>  

  <body>

    <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active">Employee  Registration</h2>
      <!-- Icon -->
      <div class="fadeIn first">
        <img src="image/mu.png" id="icon" alt="User Icon" />
      </div>
  
      <!-- Login Form -->
      <form onsubmit ="return verifyPassword(this)" method="POST" action="success1.php" >
        <input type="text" class="fadeIn second" id="firstName" name="firstname" placeholder="First Name"  required="required" autofocus="autofocus">
        <input type="text" class="fadeIn second" id="lastName" name="lastname" placeholder="Last Name" required="required">
        <input type="text" class="fadeIn second" id="inputEmail" name="email" placeholder="Email ID" required="required">
        <input type="password" class="fadeIn third" id="inputPassword" name="password" placeholder="Password">
        <input type="password" class="fadeIn third" id="ConfirmPassword" name="confirm" placeholder="Confirm Password">
        <br><span id = "message" style="color:red"> </span> <br>
        <input type="submit" class="fadeIn fourth" name="register" value="submit">
      </form>
      
      <div class="text-center">
            <a class="d-block small mt-3" href="login.php">Back To Home</a>
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
    <script src="vendor/jquery/jquery.min.js" style="background-image: linear-gradient(gray, #2144);"> </script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  </body>
</html>
