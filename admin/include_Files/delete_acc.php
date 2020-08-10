<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php');
session_start();
$sql = "UPDATE admin_login SET acc_validity='0' WHERE admin_id='$_SESSION[id]'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
header("Location: /book_request/admin/signout.php");
 ?>
