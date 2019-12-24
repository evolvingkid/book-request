<?php
session_start();
if (isset($_GET['type'])) {
    if ($_GET['type'] == "add_to_request") {
if (isset($_SESSION["student_id"])){
  header("Location: include_Files/order_creation.php?type=".$_GET['type']."&book_id=".$_GET['book_id']);
  }else {
    header("Location: account_process_choose.php?type=".$_GET['type']."&book_id=".$_GET['book_id']);
  }
}elseif ($_GET['type'] == "add_to_kart") {
  if (isset($_SESSION["student_id"])){
    header("Location: include_Files/cart_process_creation.php?type=".$_GET['type']."&book_id=".$_GET['book_id']);
    }else {
      header("Location: account_process_choose.php?type=".$_GET['type']."&book_id=".$_GET['book_id']);
    }
}else {
header("Location: index.php");
}
}
 ?>
