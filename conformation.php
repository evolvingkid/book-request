<?php
session_start();
if (isset($_GET['type'])) {
if (isset($_SESSION["student_id"])){
//echo "in";
header("Location: include_Files/order_creation.php?type=".$_GET['type']."&book_id=".$_GET['book_id']);
}else {
  header("Location: account_process_choose.php?type=".$_GET['type']."&book_id=".$_GET['book_id']);
}
}else {
header("Location: index.php");
}
 ?>
