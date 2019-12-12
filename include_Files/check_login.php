<?php
//session_start();
//echo  $_SESSION["pass"];

function Login_in_Checker()
{
  //print_r($_SESSION);
  require_once($_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php');
  $Username=$_SESSION["student_user"];
  $password=$_SESSION["student_pass"];
  $password=md5($password);
  $sql = "SELECT * FROM `student_details`
  WHERE st_username='$Username'
  AND st_pass='$password';
   ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
} else {
  echo "in";
   header('location:http://localhost/book_request/index.php');
}
}
if ($_SESSION["student_user"] != null && $_SESSION["student_pass"] != null) {
  Login_in_Checker();
}else {
echo "in";
  header('location:http://localhost/book_request/index.php');
}

 ?>
