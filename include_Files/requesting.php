<?php
session_start();
include 'check_login.php';
require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
$date = date('Y-m-d');
$sql = "INSERT INTO student_requesting (rq_book, rq_st_id, rq_date)
VALUES ('$_GET[book_name]', '$_SESSION[student_id]', '$date')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
  header('location:http://localhost/book_request/request.php');
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
  header('location:http://localhost/book_request/request.php');
}
 ?>
