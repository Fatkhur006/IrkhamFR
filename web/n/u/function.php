<?php

$connect = mysqli_connect("localhost" , "root" , "", "web");

function query($query) {

  global $connect;

  $result = mysqli_query($connect, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function signup($post) {

  global $connect;

  $first = stripslashes($_POST["first"]);
  $last = stripslashes($_POST["last"]);
  $dd = $_POST["dd"];
  $mm = $_POST["mm"];
  $yyyy = $_POST["yyyy"];
  $email = $_POST["email"];
  $recovery = $_POST["recovery"];
  $password = mysqli_real_escape_string($connect, $_POST["password"]);
  $confirm = mysqli_real_escape_string($connect, $_POST["confirm"]);
  $phone = $_POST["phone"];

  $result_username = mysqli_query($connect, "SELECT first FROM users1 WHERE first = '$first'");
  if (mysqli_fetch_assoc($result_username)) {
    echo "<script>alert('Username sudah ada, masukan yang lainnya !');document.location.href = 'signup.php';</script>";
    return false;
  }

  $result_email = mysqli_query($connect, "SELECT email FROM users1 WHERE email = '$email'");
  if (mysqli_fetch_assoc($result_email)) {
    echo "<script>alert('Email sudah ada, masukan yang lainnya !');document.location.href = 'signup.php';</script>";
    return false;
  }

  if ($password !== $confirm) {
    echo "<script>alert('Masukan password yang sama !');document.location.href = 'signup.php';</script>";
    return false;
  }
  mysqli_query($connect, "INSERT INTO users1 VALUES ('' , '$first ' , '$last' , '$dd' , '$mm' , '$yyyy' , '$email' , '$recovery' , '$password' , '$confirm' , '$phone')");
  return mysqli_affected_rows($connect);
}

function add_user($data) {

  global $connect;

  $photo = htmlspecialchars($data["photo"]);
  $name = htmlspecialchars($data["name"]);
  $email = htmlspecialchars($data["email"]);
  $password = htmlspecialchars($data["password"]);
  $address = htmlspecialchars($data["address"]);
  $phone = htmlspecialchars($data["phone"]);

  $query = "INSERT INTO users2 VALUES ('','$photo','$name','$email','$password','$address','$phone')";

  mysqli_query($connect, $query);

  return mysqli_affected_rows($connect);
}


function delete($id) {
  global $connect;
  mysqli_query($connect, "DELETE FROM users2 WHERE id = $id");

  return mysqli_affected_rows($connect);
}

function edit($data) {

  global $connect;

  $id = $data["id"];
  $photo = htmlspecialchars($data["photo"]);
  $name = htmlspecialchars($data["name"]);
  $email = htmlspecialchars($data["email"]);
  $password = htmlspecialchars($data["password"]);
  $address = htmlspecialchars($data["address"]);
  $phone = htmlspecialchars($data["phone"]);

  $query = "UPDATE users2 SET
              photo = '$photo' ,
              name = '$name' ,
              email = '$email' ,
              password = '$password' ,
              address = '$address' ,
              phone = '$phone'
            WHERE id = '$id'
          ";

    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

function artikel($post) {

  global $connect;

  $title = $_POST["title"];
  $isi = $_POST["isi"];

  $query = "INSERT INTO artikel VALUES ('','$title','$isi')";

  mysqli_query($connect, $query);

  return mysqli_affected_rows($connect);
}
?>
