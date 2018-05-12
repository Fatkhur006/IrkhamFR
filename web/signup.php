<?php

/**
  Code by ./NewbieNoob\.
**/

require 'n/u/function.php';

if(isset($_POST["signup"])) {
  if (signup($_POST) > 0) {
    echo "<script>alert('Sign Up berhasil ....');document.location.href = 'login.php';</script>";
  }
  else {
    echo mysqli_error($connect);
  }
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="icon" href="assets/img/icon/fa-favicon.png">
    <link rel="stylesheet" href="assets/css/signup.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  </head>
  <body>
    <div class="position nav-bar">
      <p class="home-bar"><a class="home-bar-text" href="home.php">Advantureees Website</a></p>
    </div>
    <div class="line-bar"></div>
    <div class="container">
      <form class="position proceed-signup" action="#" method="post">
        <div class="logo-website-logo">
          <img class="position advantureees-website-logo" src="assets/img/fa-icon.png">
        </div>
        <div class="row1">
          <div class="first-wrapper">
            <input id="name first" class="float placeholder-c2 first" type="text" autocomplete="off" name="first" required="" value="" placeholder="First name">
          </div>
          <div class="last-wrapper">
            <input id="name last" class="float placeholder-c2 last" type="text" autocomplete="off" name="last" required="" value="" placeholder="Last name">
          </div>
        </div>
        <div class="days-wrapper">
          <div class="float select-dropdown-days">
            <select class="days" name="dd">
              <option value="0">Days</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
            </select>
          </div>
        </div>
        <div class="monts-wrapper">
          <div class="float select-dropdown-monts">
            <select class="monts" name="mm">
              <option value="0">Monts</option>
              <option value="1">January</option>
              <option value="2">February</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>
          </div>
        </div>
        <div class="years-wrapper">
          <div class="float select-dropdown-years">
            <select class="years" name="yyyy">
              <option value="0">Years</option>
              <option value="1">1991</option>
              <option value="2">1992</option>
              <option value="3">1993</option>
              <option value="4">1994</option>
              <option value="5">1995</option>
              <option value="6">1996</option>
              <option value="7">1997</option>
              <option value="8">1998</option>
              <option value="9">1999</option>
              <option value="10">2000</option>
              <option value="11">2001</option>
              <option value="12">2002</option>
              <option value="13">2003</option>
              <option value="14">2004</option>
              <option value="15">2005</option>
              <option value="16">2006</option>
              <option value="17">2007</option>
              <option value="18">2008</option>
            </select>
          </div>
        </div>
        <div class="email-wrapper">
          <input id="name email" class="placeholder email" type="email" autocomplete="off" name="email" required="" value="" placeholder="Email">
        </div>
        <div class="recovery-wrapper">
          <input id="name email-recovery" class="placeholder email-recovery" type="email" autocomplete="off" name="recovery" value="" placeholder="Recovery email (optional)">
        </div>
        <div class="password-wrapper">
          <input id="name password" class="float placeholder-c2 password" type="password" autocomplete="off" name="password" required="" value="" placeholder="Password">
        </div>
        <div class="confirm-wrapper">
          <input id="name conrifm-password" class="float placeholder-c2 confirm-password" type="password" autocomplete="off" name="confirm" required="" value="" placeholder="Confirm password">
        </div>
        <div class="phone-wrapper">
          <span class="code-phone">+62</span>
          <input id="name phone-code" class="placeholder phone-code" type="tel" pattern="[0-9+]*" maxlength="11" autocomplete="off" name="phone" required="" value="" placeholder="Phone Number">
        </div>
        <div class="sigin-wrapper">
          <button id="name signup-button" class="placeholder signup-button" type="submit" name="signup" value="">Sign Up</button>
        </div>
        <div class="row2">
          <p class="position float already-account">Already have an account ?</p>
          <p><a class="float login-account" href="login.php">Log In</a></p>
        </div>
        <div class="row3">
          <h6 class="locked"><span class="icon"><i class="fa fa-lock"></i></span> Your security is our top priority</h6>
        </div>
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
