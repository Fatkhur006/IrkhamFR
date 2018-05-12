<?php

/**
  Code by ./NewbieNoob\.
**/

session_start();

require 'n/u/function.php';

if(isset($_SESSION["login"])) {
  header("Location: n/dashboard.php");
  exit;
}

if(isset($_POST["login"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $result_login1 = mysqli_query($connect , "SELECT * FROM users2 WHERE email = '$email' AND password = '$password'");

  if(mysqli_num_rows($result_login1) === 1) {
    $row = mysqli_fetch_assoc($result_login1); {

      $_SESSION["login"] = true;

      header("Location: n/dashboard.php");
      exit;
    }
  }
  $error = true;
}

if(isset($_POST["login"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $result_login2 = mysqli_query($connect , "SELECT * FROM users1 WHERE email = '$email' AND password = '$password'");

  if(mysqli_num_rows($result_login2) === 1) {
    $row = mysqli_fetch_assoc($result_login2); {

      $_SESSION["login"] = true;

      header("Location: n/dashboard.php");
      exit;
    }
  }
  $error = true;
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Log In</title>
    <link rel="icon" href="assets/img/icon/fa-favicon.png">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  </head>
  <body>
    <div class="position nav-bar">
      <p class="home-bar"><a class="home-bar-text" href="home.php">Advantureees Website</a></p>
    </div>
    <div class="line-bar"></div>
    <div class="container">
      <form class="position proceed-login" action="#" method="post">
        <div class="logo-website-logo">
          <img class="position advantureees-website-logo" src="assets/img/fa-icon.png">
        </div>
        <?php if(isset($error)): ?>
          <p style="text-align:center; padding-top:30px; color:red; font-size: 25px;"><i>Email atau password anda salah !</i></p>
        <?php endif; ?>
        <div class="email-wrappper">
          <input id="name email" class="placeholder email" type="email" name="email" required="required" value="" placeholder="Email">
        </div>
        <div class="password-wrapper">
          <input id="name password" class="placeholder password" type="password" name="password" required="required" value="" placeholder="Password">
        </div>
        <div class="login-wrapper">
          <button id="login-button" class="placeholder login-button" type="submit" name="login" value="">Log In</button>
        </div>
        <div class="row1">
          <p><a class="float position create-account" href="signup.php">Create account...</a></p>
          <p><a class="float1 position forgot-password" href="#">Forgot password ?</a></p>
        </div>
         <h6 class="locked"><span class="icon"><i class="fa fa-lock"></i></span> Your security is our top priority</h6>
      </form>
    </div>
    <div class="line-bawah"></div>
    <div class="bawah">
      <ul>
        <li><a class="float privacy" href="#">Privacy</a></li>
        <li class="float copyright">&copy; 2018, Advantureees Website</li>
        <li class="float1"><a class="contact position" href="#">Contact</a></li>
      </ul>
    </div>
  </body>
</html>
