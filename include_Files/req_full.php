<?php
session_start();
include 'check_login.php';
  function fetch_value($fetch_value, $sql_queries)
  {
    require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
    $date = date('Y-m-d');
    $sql = $sql_queries;
    $val = array();
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      $i=0;
        while($row = $result->fetch_assoc()) {
 $val[$i]= $row[$fetch_value];
 $i++;
        }
      }
      return $val;
  }
  $sql_queries="SELECT * FROM client_cart WHERE st_id = '$_SESSION[student_id]' ";
  $book_id = array();
$book_id= fetch_value("book_id", $sql_queries);
//print_r($book_id);

function req_cart($book_id)
{
  require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
  $date = date('Y-m-d');
  $sql = "INSERT INTO request_books (req_book_id, req_student_id, req_Date)
  VALUES ('$book_id', '$_SESSION[student_id]', '$date')";

  if ($conn->query($sql) === TRUE) {
    //  echo "New record created successfully";
   header('location:http://localhost/book_request/index.php?type=cart_is_added&status=successfully');
  } else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
   header('location:http://localhost/book_request/index.php?type=cart_adding&status=failed');
  }
}

for ($i=0; $i < count($book_id) ; $i++) {
  echo $book_id[$i];
  req_cart($book_id[$i]);
}
 ?>
