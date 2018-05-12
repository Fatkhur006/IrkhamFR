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
    <title>Gallerys</title>
    <link rel="icon" href="../assets/img/icon/fa-favicon.png">
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/gallerys.css">
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
        <div class="row4">
          <div class="col1-row4">
            <img class="float c1-row4" src="../assets/img/adventure-man-observing-map-on-a-mountain-path-to-find-the-the-right-way_1150-1932.jpg" style="width: 23%;" alt="">
          </div>
          <div class="col2-row4">
            <img class="float c2-row4" src="../assets/img/endurance-hiker-people-freedom-mountaineering_1253-670.jpg" style="width: 23%;" alt="">
          </div>
          <div class="col3-row4">
            <img class="float c3-row4" src="../assets/img/forest-camping-tent_1426-43.jpg" style="width: 23%;" alt="">
          </div>
          <div class="col4-row4">
            <img class="float c4-row4" src="../assets/img/dashboard.jpg" style="width: 23%;" alt="">
          </div>
        </div>
        <div class="row5">
          <div class="col1-row5">
            <img class="float c1-row5" src="../assets/img/young-hiking-man-sportsman-or-traveler-with-backpack-staying-and-looking-on-horizon-toning_1220-1164.jpg" style="width: 22%;" alt="">
          </div>
          <div class="col2-row5">
            <img class="float c2-row5" src="../assets/img/950.jpg" style="width: 22%;" alt="">
          </div>
          <div class="col3-row5">
            <img class="float c3-row5" src="../assets/img/512.jpg" style="width: 22%;" alt="">
          </div>
          <div class="col4-row5">
            <img class="float c4-row5" src="../assets/img/dashboard.jpg" style="width: 26%;" alt="">
          </div>
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
