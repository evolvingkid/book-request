<?php
session_start();
//echo  $_SESSION["pass"];

function Login_in_Checker()
{
  require_once($_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php');
  $Username=$_SESSION["user"];
  $password=$_SESSION["pass"];
  $password=md5($password);
  $id=$_SESSION["id"];
  $sql = "SELECT * FROM `admin_login`
  WHERE admin_username='$Username'
  AND admin_pass='$password'
  AND admin_id='$id'
  AND acc_validity='1';
   ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
} else {
   header('location:index.php');
}
}
if ($_SESSION["user"] != null && $_SESSION["pass"] != null &&
$_SESSION["id"] != null) {
  Login_in_Checker();
}else {
  header('location:index.php');
}

 ?>
