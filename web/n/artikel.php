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

$result_artikel = mysqli_query($connect, "SELECT * FROM artikel");


 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Articels</title>
     <link rel="icon" href="../assets/img/icon/fa-favicon.png">
     <link rel="stylesheet" href="../assets/css/artikel.css">
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
           <div class="col1-row4">
             <div class="c1-row4">
               <h1 class="float c2-row4">Articels</h1>
               <div >
                 <ul>
                   <li class="float1 col3-row4"><a class="c3-row4" href="add_artikel.php">+ ADD ARTICEL</a></li>
                 </ul>
               </div>
             </div>
           </div>
           <div class="col2-row4">
             <h4 class="c4-row4">Artikel atau kegiatan-kegiatan yang ada di Advantureees Always Adventure.</h4>
           </div>
         </div>
         <div class="row6">
           <table>
             <tr class="col1-row6">
               <th style="margin-bottom: 50px; padding: 30px;">Title</th>
               <th style="margin-bottom: 50px; padding: 30px; padding-left: 320px;">Artikel</th>
             </tr>
             <?php  while( $row = mysqli_fetch_assoc($result_artikel)) : ?>
             <tr>
               <td style="font-size: 25px; font-weight:bold; padding-left: 30px; padding-top: 15px;"><?php echo $row["title"]; ?></td>
               <td style="font-size: 25px; padding-left: 320px;"><?php echo $row["isi"]; ?></td>
             </tr>
           <?php endwhile ?>
           </table>
         </div>
         <div class="row5">
          <ul>
            <li class="copyright">&copy; 2018, Advantureees Website</li>
          </ul>
        </div>
      </div>
   </body>
 </html>
