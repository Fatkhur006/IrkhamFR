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

if(isset($_POST["submit"])) {
  if (artikel($_POST) > 0 ) {
    echo "<script>alert('Artikel berhasil ditambahkan !');document.location.href = 'artikel.php';</script>";
  } else {
    echo "<script>alert('Artikel gagal ditambahkan !');document.location.href = 'add_artikel.php';</script>";
  }
}
 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Articels</title>
     <link rel="icon" href="../assets/img/icon/fa-favicon.png">
     <link rel="stylesheet" href="../assets/css/add-artikel.css">
     <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
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
           <form class="" action="" method="post">
            <div class="col4-row4">
                <label for>Title &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input class="c4-row4" type="text" name="title" required="required" value="" placeholder="Title...">
            </div>
            <div class="col4-row4">
              <label for>Isi Artikel</label>
              <textarea class="c5-row4" name="isi" rows="8" cols="80" placeholder="Artikel..."></textarea>
            </div>
            <div class="">
              <ul>
                <li class="float"><a class="col2-row4 c3-row4" href="users.php">Cancel</a></li>
                <li class="float1"><button class="col3-row4" type="submit" name="submit">Create Artikel</button></li>
              </ul>
            </div>
          </form>
         </div>
         <div class="row5">
          <ul>
            <li class="copyright">&copy; 2018, Advantureees Website</li>
          </ul>
        </div>
        </div>
      </div>
   </body>
 </html>
