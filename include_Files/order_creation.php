<?php
session_start();
include 'check_login.php';
require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
$date = date('Y-m-d');
$sql = "INSERT INTO request_books (req_book_id, req_student_id, req_Date)
VALUES ('$_GET[book_id]', '$_SESSION[student_id]', '$date')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
  header('location:http://localhost/book_request/index.php?type=book_creation&status=successfully');
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
  header('location:http://localhost/book_request/index.php?type=book_creation&status=failed');
}
 ?>
