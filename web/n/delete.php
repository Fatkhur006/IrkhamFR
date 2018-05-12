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

$id = $_GET["id"];

if( delete($id) > 0 ) {
  echo "<script>alert('berhasil');document.location.href='users.php'</script>";
} else {
  echo "<script>alert('gagal');document.location.href='users.php'</script>";
}
 ?>
