<?php

/**
  Code by ./NewbieNoob\.
**/

session_start();

require('u/function.php');

if(!isset($_SESSION["login"])) {
  header("Location: ../login.php");
  exit;
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="icon" href="../assets/img/icon/fa-favicon.png">
  </head>
  <body>
    <div class="penampung">
      <div class="position nav-bar">
        <p class="float home-bar"><a class="home-bar-text" href="../home.php">Advantureees Website</a></p>
        <div class="float marquee-nav-bar">
          <marquee>Tidak ada update untuk hari ini, semoga harimu menyenangkan. [<?php echo date("l,d-M-Y"); ?>].</marquee>
        </div>
        <div class="position float1 row2">
          <div class="float col3">
            <h4 class="c1-col3" style="padding-left: 70px;">Welcome,</h4>
            <h4 class="c2-col3" style="padding-left: 50px;">To My Website</h4>
          </div>
        </div>
        <div class="float1 row1">
          <div class="float c1-row1">
            <a class="position icon-row1 icon-envelope" href="#"><i class="fa fa-envelope-o"></i></a>
          </div>
          <div class="float c2-row1">
            <a class="position icon-row1 icon-bell" href="#"><i class="fa fa-bell-o"></i></a>
          </div>
        </div>
      </div>
      <div class="samping">
        <div class="dashboards">
          <span class="icon"><i class="fa fa-dashboard"></i><a class="row3 dashboard" href="dashboard.php">Dashboard</a></span>
        </div>
        <div class="users">
          <span class="icon"><i class="fa fa-users"></i><a class="row3 user" href="users.php">Users</a></span>
        </div>
        <div class="gallerys">
          <span class="icon"><i class="fa fa-picture-o"></i><a class="row3 gallery" href="gallerys.php">Gallerys</a></span>
        </div>
        <div class="pencils">
          <span class="icon"><i class="fa fa-pencil"></i><a class="row3 pencil" href="artikel.php">Artikel</a></span>
        </div>
        <div class="logouts">
          <span class="icon"><i class="fa fa-sign-out"></i><a class="row3 logouts" href="logout.php">Log Out</a></span>
        </div>
      </div>
      <div class="container">
        <div class="row3">
          <div class="bg-img">
            <div class="position col1-row3">
              <h2 class="c1-row3">Dashboard</h2>
              <h3 class="c2-row3">Welcome to Advantureees Website</h3>
            </div>
          </div>
        </div>
        <div class="row4">
          <div class="float col1-row4">
            <h3 class="c1-row4"><span class="icon-dashboard"><i class="fa fa-street-view"></i></span></h3>
            <h2 class="c2-row4">216</h2>
            <h4 class="c3-row4">New Visits</h4>
          </div>
          <div class="float col2-row4">
            <h3 class="row4-c1"><span class="icon-dashboard"><i class="fa fa-user-o"></i></span></h3>
            <h2 class="row4-c2">116</h2>
            <h4 class="row4-c3">New Signups</h4>
          </div>
          <div class="float col3-row4">
            <h3 class="col3-c1-row4"><span class="icon-dashboard"><i class="fa fa-comments-o"></i></span></h3>
            <h2 class="col3-c2-row4">2</h2>
            <h4 class="col3-c3-row4">New Coments</h4>
          </div>
          <div class="float col4-row4">
            <h3 class="c1-row4-col4"><span class="icon-dashboard"><i class="fa fa-envelope"></i></span></h3>
            <h2 class="c2-row4-col4">0</h2>
            <h4 class="c3-row4-col4">Message</h4>
          </div>
        </div>
        <div class="row5">
          <h1 class="c1-row5">N O T &nbsp; U P D A T E</h1>
        </div>
        <div class="row6">
          <ul>
            <li class="copyright">&copy; 2018, Advantureees Website</li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
