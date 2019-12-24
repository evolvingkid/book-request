<?php
session_start();
include 'check_login.php';
require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
$date = date('Y-m-d');
$sql = "INSERT INTO client_cart (book_id, st_id, cart_date)
VALUES ('$_GET[book_id]', '$_SESSION[student_id]', '$date')";

if ($conn->query($sql) === TRUE) {
  //  echo "New record created successfully";
 header('location:http://localhost/book_request/index.php?type=cart_is_added&status=successfully');
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
 header('location:http://localhost/book_request/index.php?type=cart_adding&status=failed');
}
 ?>
