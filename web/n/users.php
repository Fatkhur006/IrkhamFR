<?php

/**
  Code by ./NewbieNoob\.
**/

session_start();

if(!isset($_SESSION["login"])) {
  header("Location: ../login.php");
  exit;
}

require 'u/function.php';

$result_users = query("SELECT * FROM users2");

// if( isset($_POST["cari"])) {
//   $mahasiswa = cari($_POST["keyword"]);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Users</title>
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/users.css">
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
        <div class="row4">
          <div class="col1-row4">
            <div class="c1-row4">
              <h1 class="float c2-row4">Users</h1>
              <div >
                <ul>
                  <li class="float1 col3-row4"><a class="c3-row4" href="add_user.php">+ CREATE USER</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row5">
          <div class="col1-row5">
            <input id="name search" class="placeholder search" type="search" name="index-search" value="" placeholder="Search...">
          </div>
        </div>
        <div class="hmmm1 row6">
          <table class="" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <th class="padd-marg">Nomor</th>
              <th class="padd-marg">Perintah</th>
              <th class="padd-marg">Photo</th>
              <th class="padd-marg">Name</th>
              <th class="padd-marg">Email</th>
              <th class="padd-marg">Password</th>
              <th class="padd-marg">Address</th>
              <th class="padd-marg">Phone Number</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($result_users as $row) : ?>
            <tr class="padd-marg">
              <td class="padd-marg"><?= $i; ?></td>
              <td class="padd-marg">
                <a href="edit.php?id=<?= $row["id"]; ?>">Edit</a> |
                <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin ?')">Delete</a>
              </td>
              <td class="padd-marg"><img src="../assets/img/icon/<?= $row["photo"]; ?>" width="50"></td>
              <td class="padd-marg"><?= $row["name"]; ?></td>
              <td class="padd-marg"><?= $row["email"]; ?></td>
              <td class="padd-marg"><?= $row["password"]; ?></td>
              <td class="padd-marg"><?= $row["address"]; ?></td>
              <td class="padd-marg"><?= $row["phone"]; ?></td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
          </table>
        </div>
        <div class="row7">
          <ul>
            <li class="copyright">&copy; 2018, Advantureees Website</li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
