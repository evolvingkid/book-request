<?php
session_start();
include 'check_login.php';
require $_SERVER['DOCUMENT_ROOT'] .'/book_request/assets/include_Files/sql.php';
//$date = date('Y-m-d');
$sql = "DELETE FROM client_cart WHERE cart_id='$_GET[cart_id]'";

if ($conn->query($sql) === TRUE) {
  //  echo "New record created successfully";
 header('location:http://localhost/book_request/cart.php');
} else {
   //echo "Error: " . $sql . "<br>" . $conn->error;
 header('location:http://localhost/book_request/cart.php');
}
 ?>
