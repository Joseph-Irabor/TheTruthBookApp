<?php

include('./resources/login-reg.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- icons -->
    <script src="https://kit.fontawesome.com/72dad66e89.js" crossorigin="anonymous"></script>
<!-- ==================================== -->

<!-- google fonts -->

<!-- ==================================== -->

<!-- jquery CDN -->
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <!-- ==================================== -->

<!-- bstrp CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<!-- ==================================== -->



<!-- my CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.min.css">
  <link rel="stylesheet" href="/css/costom-properties.css">  
  <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/login-register.css">
    <link rel="icon"  href="/media/images/logo.jpg">
    
<!-- ==================================== -->
    <title> LOGIN </title>
</head>


<body>

  <div class="login-container center-container">
    <!-- Login form -->
    <form action="" method="POST" class="login-form forms">
      <h2 >LOGIN</h2>
      <label for="username">Username</label>
      <input type="text" name="username" id="username" placeholder="enter username" disabled>   
      <label for="password">Password</label> 
      <input type="password" name="password" id="password" placeholder="********" maxlength="8" disabled> 
      
      <div class="btn-container"> 
        <button class="btn-custom login" id="login-btn" >Login</button>
        <button class="btn-custom cancel" >Cancel</button>
      </div>
      <div class="register-forgot-links">
        <span class="register-link" id="register-link"><a href="">Register</a></span>
        <span class="forgot-password-link" ><a href="">Forgot password?</a></span>
      </div>
    </form>

    <!-- registration form -->
    <form action="" method="POST" class="registration-form forms" id="registration-form">
      <h2> CREATE ACCOUNT</h2>
      <label for="register-username">Username</label>
      <input type="text" name="register-username" id="register-username" placeholder="choose a username">   
      <label for="password">Password</label> 
      <input type="password" name="register-password" id="register-password" placeholder="********" maxlength="8"> 
      <label for="confirm-password">Confirm password</label> 
      <input type="password" name="confirm-password" id="confirm-password" placeholder="********" maxlength="8"> 
      
      <div class="btn-container"> 
        <button class="btn-custom register" >Register</button>
        <button class="btn-custom cancel"  >Cancel</button>
      </div>
      
    </form>

  </div>



  

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>




<!-- scripts for jquery...  -->
<script src="./jquery/jquery.js" ></script>
<script src="./jquery-ui/jquery-ui.js" ></script>
<script src="./jquery/main.js" ></script>



</html>